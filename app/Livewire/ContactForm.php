<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactForm extends Component
{
    #[Validate('required|string|max:255')]
    public $first_name = '';

    #[Validate('required|string|max:255')]
    public $last_name = '';

    #[Validate('required|email|max:255')]
    public $email = '';

    #[Validate('nullable|string|max:20')]
    public $phone = '';

    #[Validate('nullable|string|max:255')]
    public $service_type = '';

    #[Validate('required|string|max:1000')]
    public $message = '';

    public $success = false;

    public function submit()
    {
        $this->validate();

        // Here you would typically send an email or save to database
        // For now, we'll just simulate success
        $this->success = true;
        
        // Reset form
        $this->reset(['first_name', 'last_name', 'email', 'phone', 'service_type', 'message']);
        
        session()->flash('message', 'Thank you for your message! We\'ll get back to you within 24 hours.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
