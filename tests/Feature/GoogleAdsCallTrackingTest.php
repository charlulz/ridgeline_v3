<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Validates Google Ads click-to-call tracking markup.
 *
 * These tests inspect rendered HTML only — they do not execute gtag,
 * do not open the phone dialer, and do not send production conversions.
 */
class GoogleAdsCallTrackingTest extends TestCase
{
    private function assertTrackingPresent(string $html): void
    {
        // Exactly one gtag.js script request (Ads ID as loader; GA configured separately)
        $this->assertSame(
            1,
            preg_match_all('#googletagmanager\.com/gtag/js\?id=#', $html),
            'Expected exactly one gtag.js script tag'
        );
        $this->assertStringContainsString(
            'https://www.googletagmanager.com/gtag/js?id=AW-10862474531',
            $html
        );

        // Both Ads and Analytics configs
        $this->assertStringContainsString("gtag('config', 'AW-10862474531')", $html);
        $this->assertStringContainsString("gtag('config', 'G-0D70KT6P5W'", $html);
        $this->assertStringContainsString('send_page_view: true', $html);

        // Website-call / forwarding-number configuration (“Call From Site”)
        $this->assertStringContainsString("AW-10862474531/GP-fCPCr2pwZEKPq0Lso", $html);
        $this->assertStringContainsString("phone_conversion_number: '(304) 381-1122'", $html);

        // Click-to-call conversion (“Contact”)
        $this->assertStringContainsString('AW-10862474531/lnzmCL24oNQcEKPq0Lso', $html);
        $this->assertStringContainsString("send_to: 'AW-10862474531/lnzmCL24oNQcEKPq0Lso'", $html);
        $this->assertStringContainsString('event_timeout: 1000', $html);
        $this->assertStringContainsString("window.setTimeout(navigate, 1000)", $html);
        $this->assertStringContainsString('__ridgelineTelConversionBound', $html);
        $this->assertStringContainsString('closest(\'a[href^="tel:3043811122"]\')', $html);
        $this->assertStringContainsString('window.location.href = phoneHref', $html);

        // Click binding — not invoked on page load
        $this->assertStringContainsString("document.addEventListener('click'", $html);
        $beforeClickListener = explode("document.addEventListener('click'", $html, 2)[0];
        $this->assertStringNotContainsString(
            'gtag_report_conversion(',
            $beforeClickListener,
            'Conversion helper must not be invoked before the click listener is bound'
        );
    }

    public function test_tracking_component_is_valid_standalone(): void
    {
        $html = view('components.google-ads-tracking')->render();

        $this->assertTrackingPresent($html);
        // Ensure conversion helper is defined but not auto-invoked
        $this->assertStringContainsString('window.gtag_report_conversion = function', $html);
        $this->assertDoesNotMatchRegularExpression(
            '/gtag_report_conversion\([^)]+\);\s*<\/script>/',
            $html
        );
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('trackedLandingPages')]
    public function test_landing_pages_include_tracking_and_tel_links(string $uri): void
    {
        $response = $this->get($uri);

        $response->assertOk();
        $html = $response->getContent();

        $this->assertTrackingPresent($html);
        $this->assertGreaterThanOrEqual(
            1,
            preg_match_all('/href=["\']tel:3043811122["\']/', $html),
            "Expected at least one tel:3043811122 link on {$uri}"
        );
    }

    public static function trackedLandingPages(): array
    {
        return [
            'home' => ['/'],
            'storm-damage' => ['/storm-damage'],
            'shingle-replacement' => ['/services/residential/shingle-roof-replacement'],
            'metal-replacement' => ['/services/residential/metal-roof-replacement'],
            'designer-shingle' => ['/services/residential/designer-shingle-replacement'],
        ];
    }

    public function test_conversion_helper_uses_mocked_safe_navigation_pattern(): void
    {
        $html = view('components.google-ads-tracking')->render();

        // Dialer navigation is gated behind navigate() + navigated flag (safe to mock in JS tests)
        $this->assertStringContainsString('var navigated = false', $html);
        $this->assertStringContainsString('window.location.href = phoneHref', $html);
        // Must not fire conversion on script evaluation / page load
        $this->assertStringNotContainsString("gtag('event', 'conversion'", explode("window.gtag_report_conversion", $html)[0]);
    }
}
