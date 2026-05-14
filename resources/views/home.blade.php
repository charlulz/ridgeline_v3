@php
    $homeMetaDescription = 'Ridgeline Roofing is a local roofing contractor serving Ashland, KY, Huntington, WV, Ironton, OH, and the surrounding tri-state area. Residential and commercial roofing, roof repairs, roof replacements, and free inspections.';
    $heroProjectImage = asset('img/shingles/shingle_roof_6.jpg');
    $commercialProjectImage = asset('img/rubber/f7c54870-5141-42e9-b2c5-2228f0f26ff2.jpg');
    $repairSupportImage = asset('img/shingles/shingle_roof_5.jpg');
    $communityProjectImage = asset('img/metal/d584f2a4-968d-4426-9925-81cb21018897.jpg');
    $approvedTestimonials = collect();

    if (\Illuminate\Support\Facades\Schema::hasTable('testimonials')) {
        $approvedTestimonials = \App\Models\Testimonial::approved()
            ->ordered()
            ->take(4)
            ->get();
    }

    $featuredTestimonial = $approvedTestimonials->first();
    $gridTestimonials = $approvedTestimonials->skip($featuredTestimonial ? 1 : 0)->take(3)->values();

    $homeSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'RoofingContractor',
        'name' => 'Ridgeline Roofing',
        'url' => url('/'),
        'telephone' => '+1-304-381-1122',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '1100 Our Lady\'s Way, Suite 214',
            'addressLocality' => 'Ashland',
            'addressRegion' => 'KY',
            'postalCode' => '41101',
            'addressCountry' => 'US',
        ],
        'areaServed' => [
            ['@type' => 'City', 'name' => 'Ashland', 'addressRegion' => 'KY'],
            ['@type' => 'City', 'name' => 'Huntington', 'addressRegion' => 'WV'],
            ['@type' => 'City', 'name' => 'Ironton', 'addressRegion' => 'OH'],
            ['@type' => 'AdministrativeArea', 'name' => 'Surrounding Tri-State Area'],
        ],
        'sameAs' => [
            'https://www.gaf.com/en-us/roofing-contractors/residential/usa/ky/ashland/ridgeline-roofing-llc-1137706',
        ],
    ];
    $homeSchemaJson = json_encode($homeSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
@endphp

<x-layouts.app
    title="Roofing Contractor in Ashland, KY | Huntington, WV | Ironton, OH"
    :metaDescription="$homeMetaDescription"
    :canonical="route('home')"
    :schemaJson="$homeSchemaJson"
>
    <!-- Hero Section -->
    <div class="relative text-white overflow-hidden py-16 sm:py-20 lg:py-24 lg:min-h-[78vh] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 hover:scale-100 transition-transform duration-1000" style="background-image: url('{{ $heroProjectImage }}');"></div>
        
        <!-- Dark Overlay for Readability -->
        <div class="absolute inset-0 bg-black/60"></div>
        
        <!-- Orange Brand Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-600/40 via-orange-700/30 to-orange-800/50"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- Left Column - Main Content -->
                <div class="text-center lg:text-left" x-data="{ quoteModalOpen: false }" @keydown.escape.window="quoteModalOpen = false">
                    <!-- Main Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                        Roofing Contractor
                        <span class="block text-yellow-300">Ashland, KY • Huntington, WV • Ironton, OH</span>
                        <span class="block text-orange-100 text-xl md:text-2xl lg:text-3xl mt-3">and surrounding tri-state area</span>
                    </h1>

                    <p class="text-base md:text-lg mb-6 max-w-2xl mx-auto lg:mx-0 leading-relaxed text-orange-50/95">
                        Residential and commercial roofing support built around clear recommendations, professional execution, and long-term reliability for homes and businesses across the tri-state area.
                    </p>

                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm md:text-base text-gray-100/95 mb-7 max-w-2xl mx-auto lg:mx-0">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Honest recommendations</strong> & clear scope</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Licensed & insured</strong></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Residential and commercial</strong> roofing solutions</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Free inspections</strong> and straightforward estimates</span>
                        </li>
                    </ul>

                    <!-- Primary CTA -->
                    <div class="flex flex-col sm:flex-row gap-3 items-center justify-center lg:justify-start">
                        <a
                            href="tel:3043811122"
                            class="w-full sm:w-auto inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-7 py-3.5 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg hover:shadow-xl"
                        >
                            Call Now: (304) 381-1122
                        </a>
                        <button
                            type="button"
                            @click="quoteModalOpen = true"
                            class="w-full sm:w-auto inline-flex items-center justify-center bg-white/10 hover:bg-white/15 border border-white/20 text-white px-7 py-3.5 rounded-xl font-bold text-lg transition-all duration-200"
                            aria-haspopup="dialog"
                            :aria-expanded="quoteModalOpen.toString()"
                        >
                            Get a Free Quote
                        </button>
                    </div>

                    <div class="mt-6 flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-3 text-sm text-orange-100/90">
                        <div class="inline-flex items-center gap-2">
                            <span class="font-bold text-yellow-300">4.9★</span>
                            <span>Google Rating</span>
                        </div>
                        <div class="hidden sm:inline-flex items-center gap-2">
                            <span class="font-bold text-yellow-300">20+</span>
                            <span>Years Experience</span>
                        </div>
                        <div class="inline-flex items-center gap-2">
                            <span class="font-bold text-yellow-300">Tri-State</span>
                            <span>Local Service</span>
                        </div>
                    </div>

                    <!-- Quote Modal -->
                    <div
                        class="fixed inset-0 z-50 flex items-center justify-center p-4"
                        x-show="quoteModalOpen"
                        x-cloak
                        x-transition.opacity
                        role="dialog"
                        aria-modal="true"
                        aria-label="Get a Free Quote"
                        @click.self="quoteModalOpen = false"
                    >
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="relative w-full max-w-2xl bg-white dark:bg-gray-900 rounded-2xl shadow-2xl border border-gray-200 dark:border-gray-700 overflow-hidden">
                            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 dark:border-gray-800">
                                <div>
                                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Get a Free Quote</h2>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">Fast response • No obligation</p>
                                </div>
                                <button
                                    type="button"
                                    class="p-2 rounded-lg text-gray-500 hover:text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-800 transition-colors"
                                    @click="quoteModalOpen = false"
                                    aria-label="Close modal"
                                >
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-6">
                                <livewire:hero-form />
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right Column - Visual Elements -->
                <div class="relative hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 shadow-2xl">
                        <div class="flex items-start justify-between gap-6">
                            <div>
                                <div class="text-xs uppercase tracking-wider text-orange-200 font-semibold mb-2">Local • Reliable • Straightforward</div>
                                <h3 class="text-2xl font-bold text-white mb-3">Protect your property with confidence.</h3>
                                <p class="text-gray-200 leading-relaxed">
                                    Fast scheduling, clear scope, and professional crews for roofing replacements and repairs—residential or commercial.
                                </p>
                            </div>
                            <div class="text-right">
                                <div class="text-3xl font-bold text-yellow-300">20+</div>
                                <div class="text-sm text-orange-100">Years Experience</div>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-white/15">
                            <div class="flex items-center justify-between">
                                <div class="text-sm text-orange-100/90">
                                    <div class="font-semibold text-white">Prefer a quick call?</div>
                                    <div>We&apos;ll answer your questions, talk through your roofing needs, and help you decide the best next step.</div>
                                </div>
                                <a href="tel:3043811122" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg">
                                    Call (304) 381-1122
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>

    <!-- Services Section -->
    <div class="relative py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-6 py-3 mb-8">
                    <svg class="h-5 w-5 text-orange-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-orange-200 text-sm font-semibold uppercase tracking-wide">Professional Services</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    <span class="block">Premium</span>
                    <span class="block text-orange-400">Roofing Solutions</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    <strong>Professional roofing solutions you can trust</strong> from residential repairs to commercial installations. 
                    We deliver exceptional roofing services across the tri-state area for <strong>thousands of satisfied customers</strong>.
                </p>
            </div>

            <!-- Services Showcase -->
            <div class="space-y-20 mb-20">
                <!-- Residential Roofing Showcase -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="order-1">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-blue-500/20 to-blue-600/10 rounded-3xl overflow-hidden border border-white/20">
                                    <img src="{{ asset('img/shingles/shingle_roof_1.jpg') }}" alt="Residential roofing project" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Residential Roofing</div>
                                    <div class="text-xs opacity-90">Built for long-term protection</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-2">
                            <div class="inline-flex items-center bg-blue-600/20 border border-blue-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-blue-300 text-sm font-semibold uppercase tracking-wide">Residential Services</span>
                            </div>
                            <h3 class="text-4xl font-bold text-white mb-6">Residential Roofing</h3>
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                Residential reroofing and repair work designed around the materials, appearance, and durability your home needs. We help homeowners choose the right system with straightforward guidance from the first inspection through final cleanup.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Composite shingle installation and full roof replacement</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Designer shingle options for upgraded curb appeal</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Residential low-slope roofing for porches, additions, and problem areas</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Metal roofing upgrades and leak-focused repair options</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-400">Thousands</div>
                                    <div class="text-sm text-gray-400">Satisfied Customers</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Get Home Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Commercial Roofing Showcase -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1">
                            <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-orange-300 text-sm font-semibold uppercase tracking-wide">Commercial Services</span>
                            </div>
                            <h3 class="text-4xl font-bold text-white mb-6">Commercial Roofing</h3>
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                Commercial roofing support for offices, retail buildings, warehouses, and other facilities that need dependable scheduling, clean job sites, and systems built to protect your property investment.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Commercial rubber roofing replacement and repair</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Commercial metal and shingle roof systems</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Leak diagnostics, repair planning, and replacement scopes</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-orange-400">Licensed</div>
                                    <div class="text-sm text-gray-400">&amp; Insured</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Get Commercial Quote
                                </a>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-white/20">
                                    <img src="{{ $commercialProjectImage }}" alt="Commercial roofing project" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-orange-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Commercial Project</div>
                                    <div class="text-xs opacity-90">Ridgeline installation</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repair & Storm Support -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1">
                            <div class="inline-flex items-center bg-yellow-500/20 border border-yellow-300/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-yellow-200 text-sm font-semibold uppercase tracking-wide">Repairs &amp; Support</span>
                            </div>
                            <h3 class="text-4xl font-bold text-white mb-6">Roof Repairs and Storm Support</h3>
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                When leaks, lifted shingles, or storm damage show up, we can inspect the roof, explain the scope clearly, and help you move toward repair or replacement without unnecessary pressure.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Roof leak inspections and repair recommendations</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Storm damage documentation and insurance claim support</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Repair-vs-replace guidance based on condition and budget</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-yellow-300">Free</div>
                                    <div class="text-sm text-gray-400">Roof Inspections</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Request Inspection
                                </a>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-yellow-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-white/20">
                                    <img src="{{ $repairSupportImage }}" alt="Roof repair support project" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-yellow-500 text-gray-900 px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Repair Support</div>
                                    <div class="text-xs opacity-80">Clear next steps</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center">
                <div class="bg-gradient-to-r from-orange-600 to-orange-700 rounded-3xl p-10 lg:p-12 shadow-2xl border border-orange-400/20">
                    <h3 class="text-4xl font-bold text-white mb-6">Ready to Transform Your Roof?</h3>
                    <p class="text-xl text-orange-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                        <strong>Get your free inspection today</strong> - Our expert team is standing by to discuss your commercial or residential roofing needs.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center">
                        <a href="{{ route('contact') }}" class="bg-white text-orange-600 px-10 py-5 rounded-2xl font-bold text-xl hover:bg-gray-100 transition-all duration-200 shadow-2xl hover:shadow-3xl transform hover:scale-105">
                            Request Free Inspection
                        </a>
                        <a href="tel:3043811122" class="bg-orange-800 text-white px-10 py-5 rounded-2xl font-bold text-xl hover:bg-orange-900 transition-all duration-200 shadow-2xl hover:shadow-3xl transform hover:scale-105">
                            Call Now: (304) 381-1122
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="relative py-24 bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23000000\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-orange-100 dark:bg-orange-900 rounded-full px-6 py-3 mb-8">
                    <svg class="h-5 w-5 text-orange-600 dark:text-orange-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-orange-800 dark:text-orange-200 text-sm font-semibold uppercase tracking-wide">Why Ridgeline</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                    <span class="block">The Ridgeline</span>
                    <span class="block text-orange-600">Difference</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    <strong>More than 20 years of roofing experience</strong> across homes, businesses, and repair projects in the tri-state area.
                    We focus on clear communication, dependable workmanship, and roofs built to last.
                </p>
            </div>

            <!-- Advantages Showcase -->
            <div class="space-y-20 mb-20">
                <!-- Experience & Expertise -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Content -->
                        <div class="order-2 lg:order-1">
                            <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-orange-800 dark:text-orange-200 text-sm font-semibold uppercase tracking-wide">Experience</span>
                            </div>
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">20+ Years of Proven Roofing Experience</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                <strong>More than 20 years in roofing</strong> means practical guidance, efficient crews, and workmanship shaped by real residential and commercial field experience.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Licensed & Fully Insured</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Skilled roofing crews</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Local tri-state expertise</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-orange-600">20+</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">Years Experience</div>
                                </div>
                                <a href="{{ route('about') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Learn Our Story
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="order-1 lg:order-2">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-gray-200 dark:border-gray-700">
                                    <img src="{{ $communityProjectImage }}" alt="Experienced roofing team" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-orange-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Experienced Team</div>
                                    <div class="text-xs opacity-90">Residential and commercial roofing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quality & Satisfaction -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Image -->
                        <div class="order-1">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-blue-500/20 to-blue-600/10 rounded-3xl overflow-hidden border border-gray-200 dark:border-gray-700">
                                    <img src="{{ asset('img/shingles/shingle_roof_2.jpg') }}" alt="Quality roofing work" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Quality Materials</div>
                                    <div class="text-xs opacity-90">Built for dependable results</div>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="order-2">
                            <div class="inline-flex items-center bg-blue-600/20 border border-blue-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-blue-800 dark:text-blue-200 text-sm font-semibold uppercase tracking-wide">Quality</span>
                            </div>
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">Dependable Roofing Backed by Quality Materials</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                <strong>Quality matters on every roof</strong>, so we focus on dependable installation, strong manufacturer-backed products, and clear communication from start to finish.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Premium Materials Only</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Comprehensive Warranties</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Clear communication from inspection to completion</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600">Trusted</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">Materials & Warranties</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Get Quality Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repair Guidance -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Content -->
                        <div class="order-2 lg:order-1">
                            <div class="inline-flex items-center bg-yellow-500/20 border border-yellow-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-yellow-800 dark:text-yellow-200 text-sm font-semibold uppercase tracking-wide">Support</span>
                            </div>
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">Repair Guidance When Your Roof Needs Attention</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                <strong>Leaks, missing shingles, and storm damage</strong> can be stressful. We help you understand what happened, what needs attention now, and whether repair or replacement makes the most sense.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Leak assessments and repair recommendations</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Storm documentation and insurance claim support</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Clear repair-vs-replace options based on condition</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-600">Free</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">Roof Inspections</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Request Inspection
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="order-1 lg:order-2">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-yellow-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-gray-200 dark:border-gray-700">
                                    <img src="{{ $repairSupportImage }}" alt="Roof repair guidance" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-yellow-500 text-gray-900 px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Roof Repair Support</div>
                                    <div class="text-xs opacity-80">Clear scope and next steps</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Local Trust & Community -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Image -->
                        <div class="order-1">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-green-500/20 to-green-600/10 rounded-3xl overflow-hidden border border-gray-200 dark:border-gray-700">
                                    <img src="{{ $communityProjectImage }}" alt="Local community roofing" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-green-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Local Trust</div>
                                    <div class="text-xs opacity-90">Tri-state roofing service</div>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="order-2">
                            <div class="inline-flex items-center bg-green-600/20 border border-green-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-green-800 dark:text-green-200 text-sm font-semibold uppercase tracking-wide">Community</span>
                            </div>
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">Hundreds and Hundreds of Completed Projects</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                <strong>Local expertise matters</strong> across Ashland, Huntington, Ironton, and the surrounding communities. We understand the weather, the neighborhoods, and the expectations that come with working close to home.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Local Weather Expertise</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Community Relationships</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Proven Track Record</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-green-600">Tri-State</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">Local Roofing Team</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Join Our Community
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="relative py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-6 py-3 mb-8">
                    <svg class="h-5 w-5 text-orange-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-orange-200 text-sm font-semibold uppercase tracking-wide">Customer Reviews</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    <span class="block">What Our</span>
                    <span class="block text-orange-400">Customers Say</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    <strong>Real feedback from homeowners and business owners</strong> who chose Ridgeline Roofing.
                    We&apos;re proud to serve <strong>thousands of satisfied customers</strong> across the tri-state area.
                </p>
            </div>

            <div class="space-y-16 mb-20">
                @if($featuredTestimonial)
                    <div class="relative">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <div class="order-2 lg:order-1">
                                <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                                    <span class="text-orange-300 text-sm font-semibold uppercase tracking-wide">Featured Review</span>
                                </div>
                                <div class="flex items-center mb-6">
                                    @for($i = 1; $i <= max(1, (int) $featuredTestimonial->rating); $i++)
                                        <svg class="h-6 w-6 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    @endfor
                                    <span class="ml-3 text-orange-300 font-semibold">{{ number_format((float) $featuredTestimonial->rating, 1) }} Rating</span>
                                </div>
                                <blockquote class="text-xl text-gray-300 mb-8 leading-relaxed italic">
                                    "{{ $featuredTestimonial->content }}"
                                </blockquote>
                                <div class="flex items-center justify-between gap-6">
                                    <div class="flex items-center min-w-0">
                                        @if($featuredTestimonial->photo)
                                            <img src="{{ $featuredTestimonial->photo }}" alt="{{ $featuredTestimonial->name }}" class="h-16 w-16 rounded-full mr-4 object-cover">
                                        @else
                                            <div class="h-16 w-16 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                                <span class="text-white font-bold text-lg">{{ strtoupper(substr($featuredTestimonial->name, 0, 1)) }}</span>
                                            </div>
                                        @endif
                                        <div class="min-w-0">
                                            <div class="text-white font-semibold text-lg truncate">{{ $featuredTestimonial->name }}</div>
                                            @if($featuredTestimonial->location)
                                                <div class="text-orange-200 text-sm truncate">{{ $featuredTestimonial->location }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    @if($featuredTestimonial->source_url)
                                        <a href="{{ $featuredTestimonial->source_url }}" target="_blank" rel="noopener noreferrer" class="text-sm text-orange-200 hover:text-white transition-colors">
                                            View Review
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="order-1 lg:order-2">
                                <div class="relative">
                                    <div class="aspect-[4/3] bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-white/20">
                                        <img src="{{ $communityProjectImage }}" alt="Ridgeline roofing project" class="w-full h-full object-cover">
                                    </div>
                                    <div class="absolute -bottom-6 -right-6 bg-orange-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                        <div class="text-sm font-semibold">Real Customer Feedback</div>
                                        <div class="text-xs opacity-90">Approved reviews only</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($gridTestimonials->isNotEmpty())
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach($gridTestimonials as $testimonial)
                                <div class="group relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 to-orange-600/5 group-hover:from-orange-500/20 group-hover:to-orange-600/10 transition-all duration-500"></div>
                                    <div class="relative">
                                        <div class="flex items-center mb-6">
                                            @for($i = 1; $i <= max(1, (int) $testimonial->rating); $i++)
                                                <svg class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            @endfor
                                        </div>
                                        <blockquote class="text-gray-300 mb-6 leading-relaxed">
                                            "{{ $testimonial->content }}"
                                        </blockquote>
                                        <div class="flex items-center">
                                            @if($testimonial->photo)
                                                <img src="{{ $testimonial->photo }}" alt="{{ $testimonial->name }}" class="h-12 w-12 rounded-full mr-3 object-cover">
                                            @else
                                                <div class="h-12 w-12 bg-orange-500 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-white font-semibold text-sm">{{ strtoupper(substr($testimonial->name, 0, 1)) }}</span>
                                                </div>
                                            @endif
                                            <div class="min-w-0">
                                                <div class="text-white font-semibold truncate">{{ $testimonial->name }}</div>
                                                @if($testimonial->location)
                                                    <div class="text-orange-200 text-xs truncate">{{ $testimonial->location }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @else
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-10 lg:p-12 shadow-2xl text-center">
                        <h3 class="text-3xl font-bold text-white mb-4">Real customer reviews will appear here</h3>
                        <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed">
                            This section is wired to approved testimonial data so the homepage only shows real customer feedback. If you need references right away, give us a call and we&apos;ll be happy to talk through recent projects in the tri-state area.
                        </p>
                        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="tel:3043811122" class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-bold transition-colors duration-200 shadow-lg">
                                Call (304) 381-1122
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/15 border border-white/20 text-white px-8 py-4 rounded-xl font-bold transition-colors duration-200">
                                Request Free Inspection
                            </a>
                        </div>
                    </div>
                @endif

                <div class="text-center">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-orange-400 mb-2">4.9★</div>
                            <div class="text-gray-300 text-lg">Google Rating</div>
                            <div class="text-gray-400 text-sm">Local reputation across the tri-state</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-orange-400 mb-2">Thousands</div>
                            <div class="text-gray-300 text-lg">Satisfied Customers</div>
                            <div class="text-gray-400 text-sm">Homes and businesses served</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-orange-400 mb-2">Local</div>
                            <div class="text-gray-300 text-lg">Tri-State Team</div>
                            <div class="text-gray-400 text-sm">Repairs, replacements, and inspections</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ultimate CTA Section -->
    <div class="relative py-24 bg-gradient-to-br from-orange-600 via-orange-700 to-orange-800 text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.2\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 bg-yellow-400 text-orange-800 px-4 py-2 rounded-full text-sm font-bold shadow-lg animate-pulse">
            Local Tri-State Team
        </div>
        <div class="absolute top-20 right-20 bg-green-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
            Free Inspection
        </div>
        <div class="absolute bottom-20 left-20 bg-white text-orange-600 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
            Clear Scope
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-white/20 border border-white/30 rounded-full px-6 py-3 mb-8">
                    <svg class="h-5 w-5 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-white text-sm font-semibold uppercase tracking-wide">Get Started</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    <span class="block">Don&apos;t Wait for Your Roof</span>
                    <span class="block text-yellow-300">to Tell You It Needs Help</span>
                </h2>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto leading-relaxed">
                    <strong>Get your free roof inspection today</strong> and talk through your options with a local roofing team.
                    No obligation, no high-pressure sales, just honest guidance for the next step.
                </p>
            </div>

            <!-- CTA Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <!-- Left Column - Form -->
                <div class="order-2 lg:order-1">
                    <div class="bg-white/95 backdrop-blur-sm rounded-3xl p-8 lg:p-10 shadow-2xl border border-white/20">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Get Your Free Inspection</h3>
                            <p class="text-gray-600">Complete in 30 seconds • No spam • No obligation</p>
                        </div>
                        
                        <form class="space-y-6">
                            <!-- Name -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                                <input type="text" placeholder="Enter your full name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500">
                            </div>
                            
                            <!-- Phone -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" placeholder="(304) 555-0123" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500">
                            </div>
                            
                            <!-- Property Type -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Property Type</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900">
                                    <option>Select property type</option>
                                    <option>Residential Home</option>
                                    <option>Commercial Building</option>
                                    <option>Multi-Unit Property</option>
                                    <option>Not Sure</option>
                                </select>
                            </div>
                            
                            <!-- Primary CTA Button -->
                            <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105 text-lg">
                                Get Free Inspection Now
                            </button>
                        </form>
                        
                        <!-- Trust Text -->
                        <div class="text-center mt-6">
                            <p class="text-xs text-gray-500">
                                ✓ Licensed & Insured ✓ Free Inspection ✓ No High-Pressure Sales ✓ 20+ Years Experience
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Benefits & Urgency -->
                <div class="order-1 lg:order-2">
                    <div class="space-y-8">
                        <!-- Urgency Card -->
                        <div class="bg-white/15 border border-white/20 rounded-2xl p-6">
                            <div class="flex items-center mb-4">
                                <svg class="h-6 w-6 text-yellow-300 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <h3 class="text-xl font-bold text-white">Know what your roof needs before small issues grow</h3>
                            </div>
                            <p class="text-orange-100 leading-relaxed">
                                A quick inspection can help you plan repairs, compare replacement options, and avoid surprises when problems start to show.
                            </p>
                        </div>

                        <!-- Benefits List -->
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white">Free Comprehensive Inspection</h4>
                                    <p class="text-orange-100 text-sm">Professional assessment of your entire roofing system</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white">Responsive Scheduling</h4>
                                    <p class="text-orange-100 text-sm">We&apos;ll follow up quickly to learn what your roof needs</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white">No High-Pressure Sales</h4>
                                    <p class="text-orange-100 text-sm">Honest advice with no obligation to purchase</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white">Insurance Claim Assistance</h4>
                                    <p class="text-orange-100 text-sm">We'll help you navigate the claims process</p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone CTA -->
                        <div class="text-center">
                            <p class="text-orange-100 mb-4">Prefer to talk? Call our team now:</p>
                            <a href="tel:3043811122" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-bold transition-all duration-200 shadow-lg hover:shadow-xl text-lg">
                                <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                <span>(304) 381-1122</span>
                            </a>
                            <p class="text-xs text-orange-200 mt-2">Call for inspections, repairs, replacements, and project questions</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Trust Indicators -->
            <div class="text-center">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300 mb-2">20+</div>
                        <div class="text-orange-100 text-sm">Years Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300 mb-2">Thousands</div>
                        <div class="text-orange-100 text-sm">Satisfied Customers</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300 mb-2">Local</div>
                        <div class="text-orange-100 text-sm">Tri-State Team</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300 mb-2">Residential</div>
                        <div class="text-orange-100 text-sm">& Commercial Roofing</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
