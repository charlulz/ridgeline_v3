<?php

use App\Livewire\ContactForm;
use App\Models\Lead;
use App\Mail\NewWebsiteLeadMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;

test('contact form creates a lead and syncs integrations', function () {
    Mail::fake();

    config([
        'jobprogress.enabled' => true,
        'jobprogress.access_token' => 'test-token',
        'jobprogress.assignee_rep_id' => 103057,
    ]);

    Http::fake([
        'api.jobprogress.com/*' => Http::response([
            'message' => 'Prospect / Customer saved successfully.',
            'customer' => ['id' => 12345],
            'status' => 200,
        ], 200),
    ]);

    Livewire::test(ContactForm::class)
        ->set('first_name', 'Jane')
        ->set('last_name', 'Doe')
        ->set('email', 'jane@example.com')
        ->set('phone', '3043811122')
        ->set('service_type', 'residential')
        ->set('message', 'Need a roof inspection.')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSee('Thank you for your message');

    $lead = Lead::query()->where('email', 'jane@example.com')->first();

    expect($lead)->not->toBeNull()
        ->and($lead->name)->toBe('Jane Doe')
        ->and($lead->phone)->toBe('3043811122')
        ->and($lead->source)->toBe('contact_form')
        ->and($lead->property_type)->toBe('residential')
        ->and($lead->message)->toContain('Residential Roofing')
        ->and($lead->message)->toContain('Need a roof inspection.');

    Mail::assertSent(NewWebsiteLeadMail::class);
});
