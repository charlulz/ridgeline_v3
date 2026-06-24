<?php

namespace App\Services;

use App\Mail\NewWebsiteLeadMail;
use App\Models\Lead;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class JobProgressService
{
    public function isEnabled(): bool
    {
        return (bool) config('jobprogress.enabled', true) && !empty(config('jobprogress.access_token'));
    }

    /**
     * Creates a JobProgress Prospect (Lead) from a site lead.
     *
     * JobProgress/Leap docs are SPA-based; this integration uses the commonly
     * documented endpoint POST /prospects with a conservative payload.
     */
    public function createProspectFromLead(Lead $lead): ?array
    {
        if (!$this->isEnabled()) {
            return null;
        }

        $baseUrl = rtrim((string) config('jobprogress.base_url'), '/');
        $token = (string) config('jobprogress.access_token');

        [$firstName, $lastName] = $this->splitName($lead->name);

        $normalizedPhone = preg_replace('/\D+/', '', (string) $lead->phone) ?: null;

        $payload = array_filter([
            'first_name' => $firstName,
            'last_name' => $lastName,
            // JobProgress validation expects "phones" (plural). We also send "phone"
            // for compatibility with accounts/endpoints that still accept it.
            'phone' => $normalizedPhone ?? $lead->phone,
            'phones' => $normalizedPhone ? [
                [
                    'label' => (string) config('jobprogress.phone_label', 'cell'),
                    'number' => $normalizedPhone,
                ],
            ] : null,
            'email' => $lead->email,
            'address' => $lead->property_address,
            // Some JobProgress accounts expose "source" as lead_source/source.
            // We send both; unknown fields are typically ignored.
            'source' => 'website',
            'lead_source' => 'website',
            'notes' => $this->buildNotes($lead),
            'rep_id' => $this->assigneeRepId(),
        ], fn ($v) => $v !== null && $v !== '');

        $response = Http::baseUrl($baseUrl)
            ->withToken($token)
            ->acceptJson()
            ->asJson()
            ->timeout(10)
            ->post('/prospects', $payload);

        if ($response->successful()) {
            $body = $response->json();
            $customerId = $body['customer']['id'] ?? null;

            $this->sendLeadNotifications($lead, is_numeric($customerId) ? (int) $customerId : null);

            return $body;
        }

        Log::warning('JobProgress prospect create failed', [
            'lead_id' => $lead->id,
            'status' => $response->status(),
            'body' => $response->json() ?? $response->body(),
        ]);

        return null;
    }

    public function assigneeRepId(): ?int
    {
        $configured = config('jobprogress.assignee_rep_id');
        if ($configured !== null && $configured !== '') {
            return (int) $configured;
        }

        $email = strtolower(trim((string) config('jobprogress.assignee_email')));
        if ($email === '') {
            return null;
        }

        return Cache::remember(
            'jobprogress.rep_id.' . md5($email),
            now()->addDay(),
            function () use ($email): ?int {
                foreach ($this->fetchCompanyUsers() as $user) {
                    if (strtolower((string) ($user['email'] ?? '')) === $email) {
                        return (int) $user['id'];
                    }
                }

                Log::warning('JobProgress assignee user not found', [
                    'assignee_email' => $email,
                ]);

                return null;
            }
        );
    }

    /**
     * @return list<array<string, mixed>>
     */
    private function fetchCompanyUsers(): array
    {
        $baseUrl = rtrim((string) config('jobprogress.base_url'), '/');
        $token = (string) config('jobprogress.access_token');

        $response = Http::baseUrl($baseUrl)
            ->withToken($token)
            ->acceptJson()
            ->timeout(10)
            ->get('/company/users');

        if (!$response->successful()) {
            Log::warning('JobProgress company users lookup failed', [
                'status' => $response->status(),
                'body' => $response->json() ?? $response->body(),
            ]);

            return [];
        }

        $users = $response->json('data');

        return is_array($users) ? $users : [];
    }

    private function sendLeadNotifications(Lead $lead, ?int $jobProgressCustomerId): void
    {
        $recipients = config('jobprogress.notification_emails', []);

        if ($recipients === []) {
            return;
        }

        if (empty(config('services.brevo.key'))) {
            Log::warning('Brevo API key not configured, skipping lead notification email', [
                'lead_id' => $lead->id,
                'recipients' => $recipients,
            ]);

            return;
        }

        try {
            Mail::to($recipients)->send(new NewWebsiteLeadMail($lead, $jobProgressCustomerId));
        } catch (\Throwable $e) {
            Log::error('Failed to send JobProgress lead notification email', [
                'lead_id' => $lead->id,
                'recipients' => $recipients,
                'error' => $e->getMessage(),
            ]);
        }
    }

    private function splitName(?string $name): array
    {
        $name = trim((string) $name);
        if ($name === '') {
            return ['Unknown', ''];
        }

        $parts = preg_split('/\s+/', $name) ?: [];
        $first = array_shift($parts) ?? $name;
        $last = trim(implode(' ', $parts));

        return [$first, $last];
    }

    private function buildNotes(Lead $lead): string
    {
        $lines = [];

        if (!empty($lead->property_type)) {
            $lines[] = 'Property type: ' . $lead->property_type;
        }
        if (!empty($lead->message)) {
            $lines[] = 'Message: ' . $lead->message;
        }
        if (!empty($lead->utm_source) || !empty($lead->utm_medium) || !empty($lead->utm_campaign)) {
            $lines[] = 'UTM: ' . implode(' | ', array_filter([
                $lead->utm_source ? 'source=' . $lead->utm_source : null,
                $lead->utm_medium ? 'medium=' . $lead->utm_medium : null,
                $lead->utm_campaign ? 'campaign=' . $lead->utm_campaign : null,
            ]));
        }

        $lines[] = 'Source: website';

        return trim(implode("\n", $lines));
    }
}
