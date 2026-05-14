<?php

namespace App\Services;

use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
        ], fn ($v) => $v !== null && $v !== '');

        $response = Http::baseUrl($baseUrl)
            ->withToken($token)
            ->acceptJson()
            ->asJson()
            ->timeout(10)
            ->post('/prospects', $payload);

        if ($response->successful()) {
            return $response->json();
        }

        Log::warning('JobProgress prospect create failed', [
            'lead_id' => $lead->id,
            'status' => $response->status(),
            'body' => $response->json() ?? $response->body(),
        ]);

        return null;
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

