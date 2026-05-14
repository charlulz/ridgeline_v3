@php
    $serviceAreaStates = collect(config('service_areas.states', []))
        ->map(function (array $stateConfig, string $stateAbbr) {
            $cities = collect(config('service_areas.cities', []))
                ->where('state_abbr', $stateAbbr)
                ->sortBy('rank')
                ->pluck('city')
                ->values()
                ->all();

            return [
                'abbr' => $stateAbbr,
                'state' => $stateConfig['state'],
                'headline' => $stateConfig['headline'],
                'cities' => $cities,
            ];
        })
        ->values();
@endphp

<x-layouts.app title="Contact Us">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-orange-600 to-orange-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
                <p class="text-xl max-w-3xl mx-auto">
                    Get in touch for a free estimate, inspection, or project consultation. We work with homeowners, multifamily properties, and commercial customers across the tri-state area.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send Us a Message</h2>
                    <livewire:contact-form />
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Get In Touch</h2>
                    
                    <div class="space-y-6">
                        <!-- Phone -->
                        <div class="flex items-start">
                            <div class="h-12 w-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Phone</h3>
                                <p class="text-gray-600 dark:text-gray-300">(304) 381-1122</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Mon-Fri 8AM-6PM, Sat 9AM-4PM</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="h-12 w-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Email</h3>
                                <p class="text-gray-600 dark:text-gray-300">info@ridgelineroofing.com</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">We'll respond within 24 hours</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start">
                            <div class="h-12 w-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Address</h3>
                                <p class="text-gray-600 dark:text-gray-300">
                                    1100 Our Lady's Way, Suite 214<br>
                                    Ashland, KY 41101
                                </p>
                            </div>
                        </div>

                        <!-- Scheduling -->
                        <div class="flex items-start">
                            <div class="h-12 w-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10m2 10H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Inspection &amp; Scheduling</h3>
                                <p class="text-gray-600 dark:text-gray-300">Call or send a message to report the issue and schedule an inspection or on-site assessment.</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">We&apos;ll review the roof condition and walk you through the next steps.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="mt-8 p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Business Hours</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600 dark:text-gray-300">Monday - Friday</span>
                                <span class="text-gray-900 dark:text-white font-medium">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 dark:text-gray-300">Saturday</span>
                                <span class="text-gray-900 dark:text-white font-medium">9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 dark:text-gray-300">Sunday</span>
                                <span class="text-gray-900 dark:text-white font-medium">Closed</span>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                            Messages received after hours are returned as quickly as possible on the next business day.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Areas -->
    <div class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Service Areas</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Ridgeline Roofing serves homeowners, multifamily properties, and commercial customers throughout our Kentucky, West Virginia, and southern Ohio coverage area.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @foreach ($serviceAreaStates as $state)
                    <div class="bg-white dark:bg-gray-700 rounded-lg p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $state['state'] }}</h3>
                            <span class="inline-flex items-center bg-orange-100 dark:bg-orange-900 text-orange-700 dark:text-orange-300 px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $state['abbr'] }}
                            </span>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-4">
                            {{ $state['headline'] }}
                        </p>
                        <p class="text-xs font-semibold uppercase tracking-wide text-gray-500 dark:text-gray-400 mb-3">
                            Key Cities
                        </p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($state['cities'] as $city)
                                <span class="inline-flex items-center bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-200 px-3 py-1 rounded-full text-sm">
                                    {{ $city }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('service-areas') }}" class="inline-flex items-center text-orange-600 dark:text-orange-400 font-semibold hover:underline">
                    View all service area pages
                </a>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Common questions about our roofing services
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">How long does a roof installation take?</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Most residential roof installations take 1-3 days, depending on the size and complexity of the project. 
                        Commercial projects may take longer. We'll provide a detailed timeline during your consultation.
                    </p>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Do you offer warranties?</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Roof replacements include workmanship coverage, and many replacement systems also carry manufacturer-backed warranties through Owens Corning, GAF, and Mule-Hide depending on the product installed. Repair work is not warrantied, and we prefer to be direct about that up front.
                    </p>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">What should I do if my roof starts leaking or is damaged?</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Call us to report the issue and schedule an inspection or assessment. We&apos;ll review the roof condition, identify what needs attention, and walk you through the recommended next steps based on the findings.
                    </p>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Do you provide free estimates?</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Yes, we offer free, no-obligation estimates for all our services. Our team will visit your property, 
                        assess your needs, and provide a detailed quote with no hidden fees.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
