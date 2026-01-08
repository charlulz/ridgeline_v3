<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Services\LeadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    public function __construct(
        private LeadService $leadService
    ) {
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'property_type' => 'nullable|in:residential,commercial,multi_unit,not_sure',
            'property_address' => 'nullable|string|max:500',
            'message' => 'nullable|string|max:1000',
            'source' => 'nullable|string|max:50',
            'form_type' => 'nullable|in:general,inspection,emergency',
            'urgency' => 'nullable|in:low,medium,high,emergency',
            'preferred_contact_time' => 'nullable|string|max:50',
            'insurance_claim' => 'nullable|boolean',
            'how_did_you_hear' => 'nullable|string|max:100',
        ]);

        try {
            // Capture UTM parameters from request or session
            $utmSource = $request->utm_source ?? $request->session()->get('utm_source');
            $utmMedium = $request->utm_medium ?? $request->session()->get('utm_medium');
            $utmCampaign = $request->utm_campaign ?? $request->session()->get('utm_campaign');

            // Create lead using LeadService
            $lead = $this->leadService->createLead([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'property_type' => $request->property_type,
                'message' => $request->message,
                'source' => $request->source ?? 'website',
                'utm_source' => $utmSource,
                'utm_medium' => $utmMedium,
                'utm_campaign' => $utmCampaign,
            ]);

            // Determine redirect URL based on form type
            $redirectUrl = match($request->form_type) {
                'inspection' => route('thank-you.inspection'),
                'emergency' => route('thank-you.emergency'),
                default => route('thank-you'),
            };

            // For AJAX requests, return JSON with redirect URL
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you! We\'ll contact you soon.',
                    'lead_id' => $lead->id,
                    'redirect_url' => $redirectUrl,
                ]);
            }

            // For regular form submissions, redirect
            return redirect($redirectUrl)->with('success', 'Thank you! We\'ll contact you soon.');

        } catch (\Exception $e) {
            Log::error('Lead creation failed', [
                'error' => $e->getMessage(),
                'request_data' => $request->all(),
            ]);

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong. Please try again or call us directly.',
                ], 500);
            }

            return back()->withErrors(['error' => 'Something went wrong. Please try again or call us directly.'])->withInput();
        }
    }

    public function index()
    {
        $leads = Lead::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.leads.index', compact('leads'));
    }

    public function show(Lead $lead)
    {
        return view('admin.leads.show', compact('lead'));
    }

    public function update(Request $request, Lead $lead)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,qualified,scheduled,proposal_sent,closed_won,closed_lost',
            'notes' => 'nullable|string|max:1000',
        ]);

        $lead->update([
            'status' => $request->status,
            'notes' => $request->notes,
            'last_contacted_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Lead updated successfully',
        ]);
    }

    private function sendLeadNotification(Lead $lead)
    {
        // This will be implemented in Phase 2
        // For now, just log the notification
        Log::info('Lead notification would be sent', [
            'lead_id' => $lead->id,
            'name' => $lead->name,
            'phone' => $lead->phone,
            'lead_score' => $lead->lead_score,
        ]);
    }
}
