<?php

namespace App\Livewire;

use App\Services\LeadService;
use Livewire\Component;
use Livewire\Attributes\Validate;

class HeroForm extends Component
{
    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|string|max:20')]
    public $phone = '';

    #[Validate('nullable|email|max:255')]
    public $email = '';

    #[Validate('nullable|in:residential,commercial,multi_unit,not_sure')]
    public $property_type = '';

    #[Validate('nullable|string|max:500')]
    public $property_address = '';

    #[Validate('nullable|in:low,medium,high,emergency')]
    public $urgency = '';

    #[Validate('nullable|string|max:50')]
    public $preferred_contact_time = '';

    #[Validate('nullable|boolean')]
    public $insurance_claim = false;

    #[Validate('nullable|string|max:100')]
    public $how_did_you_hear = '';

    public $success = false;
    public $loading = false;

    public function __construct()
    {
        $this->leadService = app(LeadService::class);
    }

    public function submit()
    {
        $this->validate();
        $this->loading = true;

        try {
            // Capture UTM parameters from session
            $utmSource = session()->get('utm_source');
            $utmMedium = session()->get('utm_medium');
            $utmCampaign = session()->get('utm_campaign');

            // Create lead using LeadService
            $lead = $this->leadService->createLead([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'property_type' => $this->property_type,
                'property_address' => $this->property_address,
                'urgency' => $this->urgency ?: 'high',
                'preferred_contact_time' => $this->preferred_contact_time,
                'insurance_claim' => $this->insurance_claim,
                'how_did_you_hear' => $this->how_did_you_hear,
                'source' => 'hero_form',
                'message' => $this->urgency === 'emergency' 
                    ? 'Emergency roof inspection request from hero form' 
                    : 'Roof inspection request from hero form',
                'utm_source' => $utmSource,
                'utm_medium' => $utmMedium,
                'utm_campaign' => $utmCampaign,
            ]);

            $this->success = true;
            $this->reset(['name', 'phone', 'email', 'property_type', 'property_address', 'urgency', 'preferred_contact_time', 'insurance_claim', 'how_did_you_hear']);
            
            // Redirect to appropriate thank you page based on urgency
            $redirectUrl = ($this->urgency === 'emergency') 
                ? route('thank-you.emergency')
                : route('thank-you.inspection');
            
            // Use JavaScript redirect for Livewire
            $this->dispatch('redirect', url: $redirectUrl);
            
            $this->loading = false;
            
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong. Please try again or call us directly at (304) 381-1122.');
            $this->loading = false;
        }
    }

    public function render()
    {
        return view('livewire.hero-form');
    }
}