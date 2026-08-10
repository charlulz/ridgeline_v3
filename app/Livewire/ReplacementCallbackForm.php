<?php

namespace App\Livewire;

use App\Services\LeadService;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ReplacementCallbackForm extends Component
{
    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|string|max:20')]
    public string $phone = '';

    #[Validate('required|string|max:10')]
    public string $zip = '';

    public string $service = 'Roof Replacement';

    public function submit(LeadService $leadService): void
    {
        $this->validate();

        try {
            $leadService->createLead([
                'name' => trim($this->name),
                'phone' => trim($this->phone),
                'property_type' => 'residential',
                'property_address' => 'ZIP: '.trim($this->zip),
                'message' => $this->service.' callback request. ZIP: '.trim($this->zip),
                'source' => 'replacement_landing_page',
                'utm_source' => session('utm_source'),
                'utm_medium' => session('utm_medium'),
                'utm_campaign' => session('utm_campaign'),
            ]);

            $this->reset(['name', 'phone', 'zip']);
            session()->flash('replacement_callback_success', 'Thanks! Ridgeline will call you shortly.');
            $this->dispatch('callback-request-saved');
        } catch (\Throwable $e) {
            Log::error('Replacement callback request failed', ['error' => $e->getMessage()]);
            session()->flash('replacement_callback_error', 'We could not send that request. Please call (304) 381-1122.');
        }
    }

    public function render()
    {
        return view('livewire.replacement-callback-form');
    }
}
