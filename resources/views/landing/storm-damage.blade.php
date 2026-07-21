@php
    $serviceArea = 'Ashland, KY, Huntington, WV, Hurricane, WV, and the surrounding tri-state area';
    $phoneDisplay = '(304) 381-1122';
    $phoneTel = '3043811122';
    $heroImage = company_cam_url('landing.storm-damage.hero', 'cc-012-storm-damage-unlicensed-contractor-ad.jpg');

    $testimonials = collect();
    if (\Illuminate\Support\Facades\Schema::hasTable('testimonials')) {
        $testimonials = \App\Models\Testimonial::approved()->ordered()->take(3)->get();
    }

    $schemaJson = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Storm Damage Roof Inspection',
        'serviceType' => 'Storm damage roof inspection and emergency tarping',
        'provider' => [
            '@type' => 'RoofingContractor',
            'name' => 'Ridgeline Roofing',
            'telephone' => '+1-304-381-1122',
            'url' => url('/'),
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => "1100 Our Lady's Way, Suite 214",
                'addressLocality' => 'Ashland',
                'addressRegion' => 'KY',
                'postalCode' => '41101',
                'addressCountry' => 'US',
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Ashland', 'addressRegion' => 'KY'],
                ['@type' => 'City', 'name' => 'Huntington', 'addressRegion' => 'WV'],
                ['@type' => 'City', 'name' => 'Hurricane', 'addressRegion' => 'WV'],
            ],
        ],
        'areaServed' => 'Kentucky, West Virginia, and Ohio tri-state area',
        'url' => route('landing.storm-damage'),
        'description' => 'Fast storm-damage roof inspections for wind, hail, missing shingles, leaks, and fallen-debris damage across the tri-state area.',
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
@endphp

<x-layouts.app
    title="Storm Damage Roof Inspection"
    metaDescription="Storm damage to your roof? Call Ridgeline Roofing for fast wind, hail, missing-shingle, and leak inspections in Ashland, KY, Huntington, WV, Hurricane, WV, and the tri-state area. Call {{ $phoneDisplay }}."
    :canonical="route('landing.storm-damage')"
    :schema-json="$schemaJson"
    sticky-mode="call-only"
    sticky-title="Storm Damage?"
    sticky-subtitle="Call for a storm-damage inspection"
    sticky-call-label="Call Now"
>
    {{-- Hero --}}
    <section class="relative text-white overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $heroImage }}');"></div>
        <div class="absolute inset-0 bg-black/65"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-orange-700/45 via-orange-800/35 to-slate-900/60"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-20 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center bg-red-600/25 border border-red-400/40 rounded-full px-4 py-2 mb-5">
                        <svg class="h-4 w-4 text-red-200 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-semibold text-red-100">Storm Damage Response · Tri-State Local</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-5 leading-tight">
                        Storm Damage to Your Roof?
                        <span class="block text-yellow-300 mt-1">Call Ridgeline Roofing Now</span>
                    </h1>

                    <p class="text-lg md:text-xl text-orange-50/95 mb-6 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        Get fast help with wind, hail, missing shingles, roof leaks, and fallen-debris damage in {{ $serviceArea }}.
                    </p>

                    <ul class="flex flex-wrap gap-x-5 gap-y-2 justify-center lg:justify-start text-sm text-orange-50/95 mb-8">
                        <li class="flex items-center gap-1.5">
                            <svg class="h-4 w-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Licensed &amp; insured
                        </li>
                        <li class="flex items-center gap-1.5">
                            <svg class="h-4 w-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Emergency tarping available
                        </li>
                        <li class="flex items-center gap-1.5">
                            <svg class="h-4 w-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Free storm inspection
                        </li>
                    </ul>

                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                        <a
                            href="tel:{{ $phoneTel }}"
                            class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-7 py-4 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg hover:shadow-xl"
                        >
                            <svg class="h-6 w-6 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            Call Now for a Storm-Damage Inspection
                        </a>
                    </div>

                    <p class="mt-4 text-sm text-orange-100/90">
                        Tap to call <a href="tel:{{ $phoneTel }}" class="font-bold text-white underline decoration-orange-300/60 underline-offset-2 hover:decoration-white">{{ $phoneDisplay }}</a>
                        <span class="mx-1.5 text-orange-200/60">·</span>
                        Fastest way to get help after a storm
                    </p>
                </div>

                {{-- Secondary fallback form --}}
                <div id="callback-form" class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 sm:p-7 shadow-2xl max-w-md mx-auto lg:ml-auto lg:mr-0 w-full scroll-mt-24">
                    <div class="text-center mb-5">
                        <p class="text-xs font-semibold uppercase tracking-wide text-orange-600 mb-2">Can’t talk right now?</p>
                        <h2 class="text-xl font-bold text-gray-900 mb-1">Request a Callback</h2>
                        <p class="text-sm text-gray-600">Calling is fastest. This form is a backup if you prefer a callback.</p>
                    </div>

                    @if ($errors->any())
                        <div class="mb-4 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('leads.store') }}" method="POST" class="space-y-3">
                        @csrf
                        <input type="hidden" name="source" value="storm-damage-landing">
                        <input type="hidden" name="form_type" value="emergency">
                        <input type="hidden" name="urgency" value="emergency">
                        <input type="hidden" name="message" value="Storm damage inspection request from landing page.">

                        <div>
                            <label for="storm-name" class="sr-only">Your name</label>
                            <input
                                id="storm-name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name"
                                placeholder="Your Name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500"
                            >
                        </div>

                        <div>
                            <label for="storm-phone" class="sr-only">Phone number</label>
                            <input
                                id="storm-phone"
                                type="tel"
                                name="phone"
                                value="{{ old('phone') }}"
                                required
                                autocomplete="tel"
                                placeholder="Phone Number"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500"
                            >
                        </div>

                        <div>
                            <label for="storm-email" class="sr-only">Email (optional)</label>
                            <input
                                id="storm-email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                autocomplete="email"
                                placeholder="Email (Optional)"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500"
                            >
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-bold transition-colors duration-200"
                        >
                            Request Callback
                        </button>

                        <p class="text-xs text-center text-gray-500 leading-relaxed">
                            ✓ No obligation &nbsp;·&nbsp; ✓ Local tri-state team &nbsp;·&nbsp;
                            Prefer speed? <a href="tel:{{ $phoneTel }}" class="font-semibold text-orange-600 hover:text-orange-700">{{ $phoneDisplay }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Trust strip --}}
    <section class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800" aria-label="Trust signals">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
            <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10">
                <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 dark:text-gray-200">
                    <svg class="h-5 w-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Licensed &amp; Insured
                </div>
                <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 dark:text-gray-200">
                    <svg class="h-5 w-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
                    Ashland · Huntington · Hurricane
                </div>
                <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 dark:text-gray-200">
                    <svg class="h-5 w-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/></svg>
                    {{ $phoneDisplay }}
                </div>
                <img src="{{ asset('img/GAF_logo.png') }}" alt="GAF Certified Contractor" class="h-8 w-auto opacity-80">
                <img src="{{ asset('img/blog-preferred-contractor-logo.png') }}" alt="Preferred Contractor" class="h-8 w-auto opacity-80">
            </div>
        </div>
    </section>

    {{-- Damage types we handle --}}
    <section class="py-14 sm:py-16 bg-gray-50 dark:bg-gray-800/50" aria-labelledby="damage-types-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 id="damage-types-heading" class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-3">
                    Signs Your Roof Needs a Storm Inspection
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    If you notice any of these after a storm, call us before small issues turn into bigger interior damage.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                @foreach ([
                    ['label' => 'Missing or lifted shingles', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                    ['label' => 'Hail impact marks', 'icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z'],
                    ['label' => 'Active roof leaks', 'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                    ['label' => 'Fallen debris damage', 'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z'],
                    ['label' => 'Wind-torn flashing', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z'],
                ] as $item)
                    <div class="rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-4 text-center">
                        <div class="mx-auto mb-3 h-10 w-10 rounded-lg bg-orange-100 dark:bg-orange-900/40 flex items-center justify-center">
                            <svg class="h-5 w-5 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-gray-900 dark:text-white leading-snug">{{ $item['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Key points / damage services --}}
    <section id="storm-services" class="py-16 sm:py-20 bg-white dark:bg-gray-900" aria-labelledby="storm-services-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 id="storm-services-heading" class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    What You Get With a Storm-Damage Inspection
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    After severe weather, we focus on fast inspections, clear documentation, and practical next steps for your property.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $points = [
                        [
                            'title' => 'Fast inspections for recent storm damage',
                            'body' => 'We prioritize properties hit by recent storms so you can understand the condition of your roof quickly.',
                            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                        ],
                        [
                            'title' => 'Wind, hail, missing-shingle, and leak assessments',
                            'body' => 'We check for lifted or missing shingles, hail impact, wind damage, leaks, and debris-related issues.',
                            'icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z',
                        ],
                        [
                            'title' => 'Emergency tarping available',
                            'body' => 'When your roof is open to the weather, we can help with temporary protection to limit further water intrusion.',
                            'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                        ],
                        [
                            'title' => 'Clear photo documentation of visible damage',
                            'body' => 'We document what we find so you have a clear record of visible storm-related conditions on your roof.',
                            'icon' => 'M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z',
                        ],
                        [
                            'title' => 'Local, licensed, and insured roofing professionals',
                            'body' => 'Ridgeline Roofing is a licensed and insured contractor serving the Kentucky, West Virginia, and Ohio tri-state market.',
                            'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z',
                        ],
                        [
                            'title' => 'Help understanding the repair process',
                            'body' => 'We explain what we see and outline practical repair options—without promising insurance approval or claim outcomes.',
                            'icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z',
                        ],
                    ];
                @endphp

                @foreach ($points as $point)
                    <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-6">
                        <div class="h-11 w-11 rounded-xl bg-orange-100 dark:bg-orange-900/40 flex items-center justify-center mb-4">
                            <svg class="h-6 w-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $point['icon'] }}"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ $point['title'] }}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">{{ $point['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mid-page Call CTA --}}
    <section class="py-12 sm:py-14 bg-green-700" aria-label="Call for storm-damage inspection">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-3">
                Don’t Wait for a Small Leak to Become a Big Repair
            </h2>
            <p class="text-green-50/95 mb-7 text-lg max-w-2xl mx-auto">
                Call Ridgeline Roofing now for a storm-damage inspection—wind, hail, missing shingles, leaks, and fallen debris.
            </p>
            <a
                href="tel:{{ $phoneTel }}"
                class="inline-flex items-center justify-center bg-white hover:bg-green-50 text-green-800 px-8 py-4 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg"
            >
                <svg class="h-6 w-6 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
                Call Now for a Storm-Damage Inspection
            </a>
            <p class="mt-4 text-sm text-green-100">{{ $phoneDisplay }}</p>
        </div>
    </section>

    {{-- How it works --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-gray-900" aria-labelledby="process-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 id="process-heading" class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    What Happens After You Call
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    A clear process so you know what to expect—no high-pressure tactics, and no promises about insurance approval.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ([
                    ['step' => '1', 'title' => 'You call', 'body' => 'Tell us what you’re seeing—leaks, missing shingles, hail, or debris damage—and where the property is located.'],
                    ['step' => '2', 'title' => 'We schedule an inspection', 'body' => 'We’ll arrange a storm-damage inspection as quickly as scheduling and weather allow.'],
                    ['step' => '3', 'title' => 'We document visible damage', 'body' => 'Our team inspects the roof, notes what we find, and captures clear photo documentation.'],
                    ['step' => '4', 'title' => 'We explain next steps', 'body' => 'You’ll get plain-language options for temporary protection and repairs—without guaranteed claim outcomes.'],
                ] as $step)
                    <div class="relative rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-6">
                        <div class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-orange-600 text-white font-bold mb-4">{{ $step['step'] }}</div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ $step['title'] }}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">{{ $step['body'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-10 text-center">
                <a
                    href="tel:{{ $phoneTel }}"
                    class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors duration-200 shadow-lg"
                >
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    Start With a Call: {{ $phoneDisplay }}
                </a>
            </div>
        </div>
    </section>

    {{-- Social proof --}}
    @if($testimonials->isNotEmpty())
        <section class="py-16 sm:py-20 bg-gray-50 dark:bg-gray-800/50" aria-labelledby="reviews-heading">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 id="reviews-heading" class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                        Trusted by Tri-State Homeowners
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                        Real feedback from customers who worked with Ridgeline Roofing.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($testimonials as $testimonial)
                        <blockquote class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-6 shadow-sm">
                            <div class="flex items-center gap-1 mb-3" aria-label="{{ $testimonial->rating }} out of 5 stars">
                                @for ($i = 1; $i <= max(1, (int) $testimonial->rating); $i++)
                                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-700 dark:text-gray-200 leading-relaxed mb-5">“{{ $testimonial->content }}”</p>
                            <footer>
                                <p class="font-semibold text-gray-900 dark:text-white">{{ $testimonial->name }}</p>
                                @if ($testimonial->location)
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $testimonial->location }}</p>
                                @endif
                            </footer>
                        </blockquote>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- FAQ --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-gray-900" aria-labelledby="faq-heading" x-data="{ open: 0 }">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 id="faq-heading" class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Storm Damage FAQs
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    Quick answers before you call.
                </p>
            </div>

            <div class="space-y-3">
                @foreach ([
                    [
                        'q' => 'Should I call even if I’m not sure the damage is serious?',
                        'a' => 'Yes. Many storm issues start small—lifted shingles, soft spots, or slow leaks—and get worse with the next rain. A quick inspection helps you know what you’re dealing with.',
                    ],
                    [
                        'q' => 'Do you offer emergency tarping?',
                        'a' => 'Yes. When a roof is open to the weather, we can help with temporary protection to limit further water intrusion while permanent repairs are planned.',
                    ],
                    [
                        'q' => 'Will you guarantee my insurance claim gets approved?',
                        'a' => 'No. We document visible damage and explain repair options in plain language, but we do not promise insurance approval or claim payment. Those decisions belong to your insurer.',
                    ],
                    [
                        'q' => 'What areas do you serve?',
                        'a' => 'We serve Ashland, KY, Huntington, WV, Hurricane, WV, and the surrounding Kentucky, West Virginia, and Ohio tri-state area.',
                    ],
                    [
                        'q' => 'Is the storm-damage inspection free?',
                        'a' => 'Yes—call for a free storm-damage inspection. There is no obligation to move forward with repairs.',
                    ],
                    [
                        'q' => 'What should I do while I wait?',
                        'a' => 'If it’s safe, take photos of visible damage, move belongings away from active leaks, and avoid walking on a damaged roof. Then call us so we can advise on next steps.',
                    ],
                ] as $index => $faq)
                    <div class="rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 overflow-hidden">
                        <button
                            type="button"
                            class="w-full flex items-center justify-between gap-4 px-5 py-4 text-left"
                            @click="open = open === {{ $index }} ? null : {{ $index }}"
                            :aria-expanded="open === {{ $index }}"
                        >
                            <span class="font-semibold text-gray-900 dark:text-white">{{ $faq['q'] }}</span>
                            <svg class="h-5 w-5 text-gray-500 flex-shrink-0 transition-transform" :class="{ 'rotate-180': open === {{ $index }} }" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="open === {{ $index }}" x-collapse x-cloak class="px-5 pb-4">
                            <p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-orange-700 via-orange-800 to-slate-900 text-white pb-28 lg:pb-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Storm Damage Won’t Fix Itself
            </h2>
            <p class="text-lg text-orange-50/95 mb-8 max-w-2xl mx-auto leading-relaxed">
                Call Ridgeline Roofing for a free storm-damage inspection in {{ $serviceArea }}. Licensed, insured, and ready to help with documentation, tarping when needed, and clear next steps.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a
                    href="tel:{{ $phoneTel }}"
                    class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg w-full sm:w-auto"
                >
                    <svg class="h-6 w-6 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    Call {{ $phoneDisplay }}
                </a>
                <a
                    href="#callback-form"
                    class="inline-flex items-center justify-center bg-white/10 hover:bg-white/15 border border-white/30 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-200 w-full sm:w-auto"
                >
                    Request a Callback Instead
                </a>
            </div>

            <p class="mt-6 text-sm text-orange-100/80">
                We do not guarantee insurance approval. We help you understand visible damage and repair options.
            </p>
        </div>
    </section>
</x-layouts.app>
