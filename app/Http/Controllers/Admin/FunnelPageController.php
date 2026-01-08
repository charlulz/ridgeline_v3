<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FunnelPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FunnelPageController extends Controller
{
    public function index()
    {
        $funnelPages = FunnelPage::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.funnels.index', compact('funnelPages'));
    }

    public function create()
    {
        return view('admin.funnels.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:funnel_pages,slug',
            'campaign_name' => 'nullable|string|max:255',
            'headline' => 'required|string|max:500',
            'subheadline' => 'nullable|string|max:1000',
            'content' => 'required|string',
            'hero_image' => 'nullable|image|max:10240',
            'form_type' => 'required|in:standard,emergency,inspection,quote',
            'offer_details' => 'nullable|array',
            'thank_you_page' => 'nullable|string|max:100',
            'active' => 'boolean',
            'track_conversions' => 'boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        // Handle image upload
        if ($request->hasFile('hero_image')) {
            $validated['hero_image'] = $request->file('hero_image')->store('funnels', 'public');
        }

        // Generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        FunnelPage::create($validated);

        return redirect()->route('admin.funnels.index')->with('success', 'Funnel page created successfully.');
    }

    public function edit(FunnelPage $funnelPage)
    {
        return view('admin.funnels.edit', compact('funnelPage'));
    }

    public function update(Request $request, FunnelPage $funnelPage)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:funnel_pages,slug,' . $funnelPage->id,
            'campaign_name' => 'nullable|string|max:255',
            'headline' => 'required|string|max:500',
            'subheadline' => 'nullable|string|max:1000',
            'content' => 'required|string',
            'hero_image' => 'nullable|image|max:10240',
            'form_type' => 'required|in:standard,emergency,inspection,quote',
            'offer_details' => 'nullable|array',
            'thank_you_page' => 'nullable|string|max:100',
            'active' => 'boolean',
            'track_conversions' => 'boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
        ]);

        // Handle image upload
        if ($request->hasFile('hero_image')) {
            // Delete old image
            if ($funnelPage->hero_image) {
                Storage::disk('public')->delete($funnelPage->hero_image);
            }
            $validated['hero_image'] = $request->file('hero_image')->store('funnels', 'public');
        }

        // Generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $funnelPage->update($validated);

        return redirect()->route('admin.funnels.index')->with('success', 'Funnel page updated successfully.');
    }

    public function destroy(FunnelPage $funnelPage)
    {
        // Delete hero image if exists
        if ($funnelPage->hero_image) {
            Storage::disk('public')->delete($funnelPage->hero_image);
        }

        $funnelPage->delete();

        return redirect()->route('admin.funnels.index')->with('success', 'Funnel page deleted successfully.');
    }
}
