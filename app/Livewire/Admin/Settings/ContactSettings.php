<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class ContactSettings extends Component
{
    public $phone;
    public $email;
    public $address;

    public function mount()
    {
        $this->phone = Setting::get('contact.phone', '(304) 381-1122');
        $this->email = Setting::get('contact.email', '');
        $this->address = Setting::get('contact.address', '1100 Our Lady\'s Way, Suite 208, Ashland, KY 41101');
    }

    public function save()
    {
        $this->validate([
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
        ]);

        Setting::set('contact.phone', $this->phone, 'string', 'contact', 'Contact phone number');
        Setting::set('contact.email', $this->email ?? '', 'string', 'contact', 'Contact email address');
        Setting::set('contact.address', $this->address ?? '', 'string', 'contact', 'Business address');

        session()->flash('success', 'Contact settings updated successfully.');
        $this->dispatch('settings-updated');
    }

    public function render()
    {
        return view('livewire.admin.settings.contact-settings');
    }
}
