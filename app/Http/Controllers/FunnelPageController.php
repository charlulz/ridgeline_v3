<?php

namespace App\Http\Controllers;

use App\Models\FunnelPage;
use App\Models\Lead;
use App\Services\LeadService;
use Illuminate\Http\Request;

class FunnelPageController extends Controller
{
    public function __construct(
        private LeadService $leadService
    ) {
    }

    public function show(FunnelPage $funnelPage)
    {
        // Only show active funnel pages
        if (!$funnelPage->active) {
            abort(404);
        }

        // Increment views
        $funnelPage->incrementViews();

        return view('funnel.show', compact('funnelPage'));
    }

    public function submit(Request $request, FunnelPage $funnelPage)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'property_type' => 'nullable|in:residential,commercial,multi_unit,not_sure',
            'property_address' => 'nullable|string|max:500',
            'urgency' => 'nullable|in:low,medium,high,emergency',
            'preferred_contact_time' => 'nullable|string|max:50',
            'insurance_claim' => 'nullable|boolean',
            'how_did_you_hear' => 'nullable|string|max:100',
        ]);

        // Capture UTM parameters
        $utmSource = session()->get('utm_source') ?? $request->input('utm_source');
        $utmMedium = session()->get('utm_medium') ?? $request->input('utm_medium');
        $utmCampaign = session()->get('utm_campaign') ?? $request->input('utm_campaign') ?? $funnelPage->campaign_name;

        // Create lead
        $lead = $this->leadService->createLead([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'property_type' => $validated['property_type'] ?? null,
            'property_address' => $validated['property_address'] ?? null,
            'urgency' => $validated['urgency'] ?? ($funnelPage->form_type === 'emergency' ? 'emergency' : 'high'),
            'preferred_contact_time' => $validated['preferred_contact_time'] ?? null,
            'insurance_claim' => $validated['insurance_claim'] ?? false,
            'how_did_you_hear' => $validated['how_did_you_hear'] ?? null,
            'source' => 'funnel_page',
            'message' => "Lead from funnel page: {$funnelPage->name}",
            'utm_source' => $utmSource,
            'utm_medium' => $utmMedium,
            'utm_campaign' => $utmCampaign,
        ]);

        // Increment conversions
        $funnelPage->incrementConversions();

        // Redirect to appropriate thank you page
        $thankYouRoute = $funnelPage->thank_you_page ?? 'thank-you';
        
        return redirect()->route($thankYouRoute)->with('success', 'Thank you! We\'ll contact you soon.');
    }
}
