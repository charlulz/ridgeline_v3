<?php

namespace App\Livewire;

use App\Services\LeadService;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|string|max:255')]
    public $first_name = '';

    #[Validate('required|string|max:255')]
    public $last_name = '';

    #[Validate('required|email|max:255')]
    public $email = '';

    #[Validate('required|string|max:20')]
    public $phone = '';

    #[Validate('nullable|string|max:255')]
    public $service_type = '';

    #[Validate('required|string|max:1000')]
    public $message = '';

    public function submit(LeadService $leadService): void
    {
        $this->validate();

        try {
            $utmSource = session()->get('utm_source');
            $utmMedium = session()->get('utm_medium');
            $utmCampaign = session()->get('utm_campaign');

            $leadService->createLead([
                'name' => trim($this->first_name . ' ' . $this->last_name),
                'phone' => $this->phone,
                'email' => $this->email,
                'property_type' => $this->mapPropertyType($this->service_type),
                'message' => $this->buildMessage(),
                'source' => 'contact_form',
                'utm_source' => $utmSource,
                'utm_medium' => $utmMedium,
                'utm_campaign' => $utmCampaign,
            ]);

            $this->reset(['first_name', 'last_name', 'email', 'phone', 'service_type', 'message']);

            session()->flash('message', 'Thank you for your message! We\'ll get back to you within 24 hours.');
        } catch (\Throwable $e) {
            Log::error('Contact form submission failed', [
                'error' => $e->getMessage(),
                'email' => $this->email,
            ]);

            session()->flash('error', 'Something went wrong. Please try again or call us at (304) 381-1122.');
        }
    }

    private function mapPropertyType(?string $serviceType): ?string
    {
        return match ($serviceType) {
            'residential' => 'residential',
            'commercial' => 'commercial',
            default => 'not_sure',
        };
    }

    private function buildMessage(): string
    {
        $lines = [];

        if ($this->service_type !== '') {
            $lines[] = 'Service type: ' . $this->serviceTypeLabel();
        }

        $lines[] = trim($this->message);

        return trim(implode("\n\n", array_filter($lines)));
    }

    private function serviceTypeLabel(): string
    {
        return match ($this->service_type) {
            'residential' => 'Residential Roofing',
            'commercial' => 'Commercial Roofing',
            'repair' => 'Roof Repair',
            'maintenance' => 'Roof Maintenance',
            'siding' => 'Siding',
            'gutters' => 'Gutters',
            'other' => 'Other',
            default => $this->service_type,
        };
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
