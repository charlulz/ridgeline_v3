<?php

namespace Tests\Feature;

use App\Livewire\ReplacementCallbackForm;
use App\Models\Lead;
use App\Services\LeadService;
use Livewire\Livewire;
use Mockery;
use Tests\TestCase;

class ReplacementLandingPageTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\DataProvider('replacementPages')]
    public function test_replacement_pages_have_conversion_focused_content(string $uri, string $service): void
    {
        $this->get($uri)
            ->assertOk()
            ->assertSee($service.' in Eastern Kentucky &amp; Huntington', false)
            ->assertSee('Call 304-381-1122 for a Free Inspection')
            ->assertSee('Request a Callback')
            ->assertSee('Free Roof Consultation')
            ->assertSee('Call to Schedule')
            ->assertSee('Financing options available')
            ->assertSee('Licensed &amp; Insured', false)
            ->assertSee('Owens Corning Options')
            ->assertSee('replacement-callback-form');
    }

    public function test_location_personalization_uses_an_allowlist(): void
    {
        $this->get('/services/residential/shingle-roof-replacement?location=grayson')
            ->assertOk()
            ->assertSee('Shingle Roof Replacement in Grayson, KY');

        $this->get('/services/residential/shingle-roof-replacement?location=<script>alert(1)</script>')
            ->assertOk()
            ->assertSee('Shingle Roof Replacement in Eastern Kentucky &amp; Huntington', false)
            ->assertDontSee('<script>alert(1)</script>', false);
    }

    public function test_google_ads_geo_id_personalizes_the_headline(): void
    {
        $this->get('/services/residential/metal-roof-replacement?loc=1028357')
            ->assertOk()
            ->assertSee('Metal Roof Replacement in Huntington, WV');
    }

    public function test_successful_callback_request_dispatches_google_ads_conversion_event(): void
    {
        $leadService = Mockery::mock(LeadService::class);
        $leadService->shouldReceive('createLead')
            ->once()
            ->andReturn(new Lead());
        $this->app->instance(LeadService::class, $leadService);

        Livewire::test(ReplacementCallbackForm::class, ['service' => 'Shingle Roof Replacement'])
            ->set('name', 'Test Homeowner')
            ->set('phone', '304-555-0100')
            ->set('zip', '41143')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertDispatched('callback-request-saved');
    }

    public function test_invalid_callback_request_does_not_dispatch_conversion_event(): void
    {
        Livewire::test(ReplacementCallbackForm::class)
            ->call('submit')
            ->assertHasErrors(['name', 'phone', 'zip'])
            ->assertNotDispatched('callback-request-saved');
    }

    public function test_callback_form_contains_dedicated_google_ads_event_label(): void
    {
        $this->get('/services/residential/shingle-roof-replacement')
            ->assertOk()
            ->assertSee('AW-10862474531/SYjeCN3Ypt8cEKPq0Lso', false)
            ->assertSee("document.addEventListener('callback-request-saved'", false);
    }

    public static function replacementPages(): array
    {
        return [
            'shingle' => ['/services/residential/shingle-roof-replacement', 'Shingle Roof Replacement'],
            'metal' => ['/services/residential/metal-roof-replacement', 'Metal Roof Replacement'],
            'designer' => ['/services/residential/designer-shingle-replacement', 'Designer Shingle Roof Replacement'],
        ];
    }
}
