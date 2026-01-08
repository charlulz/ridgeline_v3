<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class HeroSettings extends Component
{
    use WithFileUploads;

    public $heroImage;
    public $headline;
    public $subheadline;
    public $currentImagePath;

    public function mount()
    {
        $this->headline = Setting::get('hero.headline', "Don't Let Storm Damage\nDestroy Your Home");
        $this->subheadline = Setting::get('hero.subheadline', 'Quality roofing for the Tri-State Area - Kentucky, West Virginia, and Ohio. 15+ years of experience ensuring your home stays protected with the best materials and craftsmanship.');
        $this->currentImagePath = Setting::get('hero.image', 'hero-roof-replacement-worker.jpg');
    }

    public function save()
    {
        $this->validate([
            'heroImage' => 'nullable|image|max:10240',
            'headline' => 'required|string|max:500',
            'subheadline' => 'nullable|string|max:1000',
        ]);

        // Handle image upload
        if ($this->heroImage) {
            $path = $this->heroImage->store('hero', 'public');
            Setting::set('hero.image', $path, 'image', 'hero', 'Hero background image');
            $this->currentImagePath = $path;
            $this->heroImage = null;
        }

        // Update text settings
        Setting::set('hero.headline', $this->headline, 'string', 'hero', 'Hero headline');
        Setting::set('hero.subheadline', $this->subheadline ?? '', 'string', 'hero', 'Hero subheadline');

        session()->flash('success', 'Hero settings updated successfully.');
        $this->dispatch('settings-updated');
    }

    public function render()
    {
        return view('livewire.admin.settings.hero-settings');
    }
}
