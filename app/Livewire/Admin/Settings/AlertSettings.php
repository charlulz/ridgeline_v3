<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class AlertSettings extends Component
{
    public $stormAlertEnabled;
    public $stormAlertText;
    public $stormAlertColor;

    public function mount()
    {
        $this->stormAlertEnabled = Setting::isAlertEnabled('storm');
        $this->stormAlertText = Setting::getAlertText('storm');
        if (empty($this->stormAlertText)) {
            $this->stormAlertText = 'Storm Season Alert - Act Now!';
        }
        $this->stormAlertColor = Setting::get('alert.storm.color', 'red');
    }

    public function save()
    {
        $this->validate([
            'stormAlertText' => 'nullable|string|max:200',
            'stormAlertColor' => 'nullable|string|max:50',
        ]);

        Setting::set('alert.storm.enabled', $this->stormAlertEnabled, 'boolean', 'alerts', 'Storm Season Alert enabled');
        Setting::set('alert.storm.text', $this->stormAlertText ?? 'Storm Season Alert - Act Now!', 'string', 'alerts', 'Storm Season Alert text');
        Setting::set('alert.storm.color', $this->stormAlertColor ?? 'red', 'string', 'alerts', 'Storm Season Alert color');

        session()->flash('success', 'Alert settings updated successfully.');
        $this->dispatch('settings-updated');
    }

    public function render()
    {
        return view('livewire.admin.settings.alert-settings');
    }
}
