<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function hero()
    {
        return view('admin.settings.hero');
    }

    public function alerts()
    {
        return view('admin.settings.alerts');
    }

    public function contact()
    {
        return view('admin.settings.contact');
    }

    public function updateHero(Request $request)
    {
        $validated = $request->validate([
            'hero_image' => 'nullable|image|max:10240', // 10MB max
            'headline' => 'required|string|max:500',
            'subheadline' => 'nullable|string|max:1000',
        ]);

        // Handle image upload
        if ($request->hasFile('hero_image')) {
            $path = $request->file('hero_image')->store('hero', 'public');
            Setting::set('hero.image', $path, 'image', 'hero', 'Hero background image');
        }

        // Update text settings
        Setting::set('hero.headline', $validated['headline'], 'string', 'hero', 'Hero headline');
        Setting::set('hero.subheadline', $validated['subheadline'] ?? '', 'string', 'hero', 'Hero subheadline');

        return redirect()->route('admin.settings.hero')->with('success', 'Hero settings updated successfully.');
    }

    public function updateAlerts(Request $request)
    {
        $validated = $request->validate([
            'storm_alert_enabled' => 'boolean',
            'storm_alert_text' => 'nullable|string|max:200',
            'storm_alert_color' => 'nullable|string|max:50',
        ]);

        Setting::set('alert.storm.enabled', $request->has('storm_alert_enabled'), 'boolean', 'alerts', 'Storm Season Alert enabled');
        Setting::set('alert.storm.text', $validated['storm_alert_text'] ?? 'Storm Season Alert - Act Now!', 'string', 'alerts', 'Storm Season Alert text');
        Setting::set('alert.storm.color', $validated['storm_alert_color'] ?? 'red', 'string', 'alerts', 'Storm Season Alert color');

        return redirect()->route('admin.settings.alerts')->with('success', 'Alert settings updated successfully.');
    }

    public function updateContact(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:500',
        ]);

        Setting::set('contact.phone', $validated['phone'], 'string', 'contact', 'Contact phone number');
        Setting::set('contact.email', $validated['email'] ?? '', 'string', 'contact', 'Contact email address');
        Setting::set('contact.address', $validated['address'] ?? '', 'string', 'contact', 'Business address');

        return redirect()->route('admin.settings.contact')->with('success', 'Contact settings updated successfully.');
    }
}
