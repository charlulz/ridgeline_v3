<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('jobprogress:test-prospect {--name=Test Lead} {--phone=} {--email=} {--label=}', function () {
    $baseUrl = rtrim((string) config('jobprogress.base_url'), '/');
    $token = (string) config('jobprogress.access_token');

    if (empty($token)) {
        $this->error('JOB_PROGRESS_ACCESS_TOKEN is not set.');
        return 1;
    }

    $name = (string) $this->option('name');
    $phone = preg_replace('/\D+/', '', (string) $this->option('phone')) ?: '';
    $email = (string) $this->option('email');
    $label = (string) ($this->option('label') ?: config('jobprogress.phone_label', 'cell'));

    $parts = preg_split('/\s+/', trim($name)) ?: [];
    $first = array_shift($parts) ?: 'Test';
    $last = trim(implode(' ', $parts));

    $payload = array_filter([
        'first_name' => $first,
        'last_name' => $last,
        'phones' => [
            ['label' => $label, 'number' => $phone],
        ],
        'email' => $email ?: null,
        'source' => 'website',
        'lead_source' => 'website',
        'notes' => 'Test lead from website integration',
    ], fn ($v) => $v !== null && $v !== '');

    $response = Http::baseUrl($baseUrl)
        ->withToken($token)
        ->acceptJson()
        ->asJson()
        ->timeout(10)
        ->post('/prospects', $payload);

    $this->line('Status: ' . $response->status());
    $this->line('Body: ' . json_encode($response->json(), JSON_PRETTY_PRINT));

    return $response->successful() ? 0 : 1;
})->purpose('Send a test prospect to JobProgress');
