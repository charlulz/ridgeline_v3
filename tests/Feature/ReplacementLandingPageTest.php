<?php

namespace Tests\Feature;

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
            ->assertSee('Financing options available')
            ->assertSee('Licensed &amp; Insured', false)
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

    public static function replacementPages(): array
    {
        return [
            'shingle' => ['/services/residential/shingle-roof-replacement', 'Shingle Roof Replacement'],
            'metal' => ['/services/residential/metal-roof-replacement', 'Metal Roof Replacement'],
            'designer' => ['/services/residential/designer-shingle-replacement', 'Designer Shingle Roof Replacement'],
        ];
    }
}
