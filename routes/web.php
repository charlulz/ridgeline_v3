<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\GoHighLevelWebhookController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\FunnelPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Admin\FunnelPageController as AdminFunnelPageController;
use App\Http\Controllers\Admin\EmailSequenceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Redirect /about-us to /about for compatibility with live site URLs
Route::redirect('/about-us', '/about');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Service-specific pages
Route::get('/services/residential', [ServicePageController::class, 'residential'])->name('services.residential');
Route::get('/services/commercial', [ServicePageController::class, 'commercial'])->name('services.commercial');

// Residential Roof Replacement
Route::get('/services/residential/shingle-roof-replacement', [ServicePageController::class, 'shingleReplacement'])->name('services.residential.shingle-replacement');
Route::get('/services/residential/rubber-roof-replacement', [ServicePageController::class, 'rubberReplacement'])->name('services.residential.rubber-replacement');
Route::get('/services/residential/rolled-roofing-low-slope-replacement', [ServicePageController::class, 'rolledRoofingReplacement'])->name('services.residential.rolled-roofing-replacement');
Route::get('/services/residential/metal-roof-replacement', [ServicePageController::class, 'metalReplacement'])->name('services.residential.metal-replacement');
Route::get('/services/residential/designer-shingle-replacement', [ServicePageController::class, 'designerShingleReplacement'])->name('services.residential.designer-shingle-replacement');

// Residential Roof Repair
Route::get('/services/residential/shingle-roof-repair', [ServicePageController::class, 'shingleRepair'])->name('services.residential.shingle-repair');
Route::get('/services/residential/rubber-roof-repair', [ServicePageController::class, 'rubberRepair'])->name('services.residential.rubber-repair');
Route::get('/services/residential/metal-roof-repair', [ServicePageController::class, 'metalRepair'])->name('services.residential.metal-repair');

// Residential Gutters & Additional Services
Route::get('/services/residential/seamless-5-gutters', [ServicePageController::class, 'seamless5Gutters'])->name('services.residential.seamless-5-gutters');
Route::get('/services/residential/seamless-6-gutters', [ServicePageController::class, 'seamless6Gutters'])->name('services.residential.seamless-6-gutters');
Route::get('/services/residential/chimney-flashing-reflashing', [ServicePageController::class, 'chimneyFlashing'])->name('services.residential.chimney-flashing');

// Commercial Roof Replacement
Route::get('/services/commercial/shingle-roof-replacement', [ServicePageController::class, 'commercialShingleReplacement'])->name('services.commercial.shingle-replacement');
Route::get('/services/commercial/rubber-roof-replacement', [ServicePageController::class, 'commercialRubberReplacement'])->name('services.commercial.rubber-replacement');
Route::get('/services/commercial/metal-roof-replacement', [ServicePageController::class, 'commercialMetalReplacement'])->name('services.commercial.metal-replacement');

// Commercial Roof Repair
Route::get('/services/commercial/shingle-roof-repair', [ServicePageController::class, 'commercialShingleRepair'])->name('services.commercial.shingle-repair');
Route::get('/services/commercial/rubber-roof-repair', [ServicePageController::class, 'commercialRubberRepair'])->name('services.commercial.rubber-repair');
Route::get('/services/commercial/metal-roof-repair', [ServicePageController::class, 'commercialMetalRepair'])->name('services.commercial.metal-repair');

// Commercial Additional Services
Route::get('/services/commercial/seamless-5-gutters', [ServicePageController::class, 'commercialGutters'])->name('services.commercial.gutters');
Route::get('/services/commercial/roof-deck-repair', [ServicePageController::class, 'commercialRoofDeck'])->name('services.commercial.roof-deck');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

// Testimonials route
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');

// FAQ route
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Service Areas route
Route::get('/service-areas', function () {
    return view('service-areas');
})->name('service-areas');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Funnel pages
Route::get('/funnel/{funnelPage:slug}', [FunnelPageController::class, 'show'])->name('funnel.show');
Route::post('/funnel/{funnelPage:slug}/submit', [FunnelPageController::class, 'submit'])->name('funnel.submit');

// Thank you pages
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');

Route::get('/thank-you/inspection', function () {
    return view('thank-you.inspection');
})->name('thank-you.inspection');

Route::get('/thank-you/emergency', function () {
    return view('thank-you.emergency');
})->name('thank-you.emergency');

// UTM parameter capture route
Route::post('/api/utm-capture', function (Request $request) {
    if ($request->utm_source) {
        session(['utm_source' => $request->utm_source]);
    }
    if ($request->utm_medium) {
        session(['utm_medium' => $request->utm_medium]);
    }
    if ($request->utm_campaign) {
        session(['utm_campaign' => $request->utm_campaign]);
    }
    return response()->json(['success' => true]);
})->name('api.utm-capture');

// Lead capture routes
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

// GoHighLevel webhook routes
Route::post('/webhooks/gohighlevel', [GoHighLevelWebhookController::class, 'handle'])
    ->name('webhooks.gohighlevel');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
        
    // Admin routes
    Route::prefix('admin')->name('admin.')->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        // Settings
        Route::get('/settings/hero', [SettingsController::class, 'hero'])->name('settings.hero');
        Route::post('/settings/hero', [SettingsController::class, 'updateHero'])->name('settings.hero.update');
        Route::get('/settings/alerts', [SettingsController::class, 'alerts'])->name('settings.alerts');
        Route::post('/settings/alerts', [SettingsController::class, 'updateAlerts'])->name('settings.alerts.update');
        Route::get('/settings/contact', [SettingsController::class, 'contact'])->name('settings.contact');
        Route::post('/settings/contact', [SettingsController::class, 'updateContact'])->name('settings.contact.update');
        
        // Blog Posts
        Route::resource('blog', AdminBlogPostController::class);
        
        // Testimonials
        Route::resource('testimonials', AdminTestimonialController::class);
        
        // Funnel Pages
        Route::resource('funnels', AdminFunnelPageController::class);
        
        // Email Sequences
        Route::resource('email-sequences', EmailSequenceController::class);
        Route::post('/email-sequences/{emailSequence}/emails', [EmailSequenceController::class, 'addEmail'])->name('email-sequences.emails.store');
        Route::delete('/email-sequences/emails/{emailSequenceEmail}', [EmailSequenceController::class, 'deleteEmail'])->name('email-sequences.emails.destroy');
        
        // Lead management routes
        Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
        Route::get('/leads/{lead}', [LeadController::class, 'show'])->name('leads.show');
        Route::put('/leads/{lead}', [LeadController::class, 'update'])->name('leads.update');
    });
});

require __DIR__.'/auth.php';
