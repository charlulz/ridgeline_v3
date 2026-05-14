<x-layouts.app
    :title="'Roofing Contractor in ' . $cityPage['city'] . ', ' . $cityPage['state_abbr']"
    :metaDescription="$metaDescription"
    :canonical="$canonical"
    :schemaJson="$schemaJson"
>
    <div class="relative text-white overflow-hidden py-16 sm:py-20 lg:py-24 lg:min-h-[72vh] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 hover:scale-100 transition-transform duration-1000" style="background-image: url('{{ $heroImageUrl }}');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-orange-600/40 via-orange-700/30 to-orange-800/50"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-5">
                        <svg class="h-4 w-4 text-orange-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M11 11a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm font-semibold text-orange-200">Service Area: {{ $cityPage['city'] }}, {{ $cityPage['state_abbr'] }}</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                        Roofing Contractor in
                        <span class="block text-yellow-300">{{ $cityPage['city'] }}, {{ $cityPage['state_abbr'] }}</span>
                    </h1>

                    <p class="text-base md:text-lg mb-6 max-w-2xl mx-auto lg:mx-0 leading-relaxed text-orange-50/95">
                        {{ $cityPage['intro'] }}
                    </p>

                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm md:text-base text-gray-100/95 mb-7 max-w-2xl mx-auto lg:mx-0">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Residential and commercial</strong> roofing support</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Storm damage inspections</strong> and repairs</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Free inspections</strong> with clear scope recommendations</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Local scheduling</strong> across the tri-state area</span>
                        </li>
                    </ul>

                    <div class="flex flex-col sm:flex-row gap-3 items-center justify-center lg:justify-start">
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-7 py-3.5 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg hover:shadow-xl">
                            Request Free Inspection
                        </a>
                        <a href="tel:3043811122" class="w-full sm:w-auto inline-flex items-center justify-center bg-white/10 hover:bg-white/15 border border-white/20 text-white px-7 py-3.5 rounded-xl font-bold text-lg transition-all duration-200">
                            Call (304) 381-1122
                        </a>
                    </div>
                </div>

                <div class="relative hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 shadow-2xl">
                        <div class="rounded-2xl border border-white/15 bg-black/10 px-5 py-6 text-center">
                            <div class="text-xs uppercase tracking-wide text-orange-100">Primary Service Market</div>
                            <div class="mt-2 text-3xl font-bold text-yellow-300">{{ $cityPage['city'] }}, {{ $cityPage['state_abbr'] }}</div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-white/15">
                            <div class="text-xs uppercase tracking-wider text-orange-200 font-semibold mb-2">Local Service Context</div>
                            <p class="text-gray-200 leading-relaxed">
                                {{ $cityPage['local_context'] }}
                            </p>
                        </div>

                        <div class="mt-8 pt-6 border-t border-white/15">
                            <div class="text-xs uppercase tracking-wider text-orange-200 font-semibold mb-4">Nearby Communities</div>
                            <div class="flex flex-wrap gap-2">
                                @foreach($cityPage['nearby_areas'] as $nearbyArea)
                                    <span class="inline-flex rounded-full bg-white/10 border border-white/15 px-3 py-1.5 text-sm text-orange-50">
                                        {{ $nearbyArea }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-6 py-3 mb-8">
                    <svg class="h-5 w-5 text-orange-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-orange-200 text-sm font-semibold uppercase tracking-wide">Roofing Services in {{ $cityPage['city'] }}</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    <span class="block">Residential & Commercial</span>
                    <span class="block text-orange-400">Roofing Solutions</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    {{ $cityPage['service_focus'] }}
                </p>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                <div class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-sm shadow-2xl overflow-hidden">
                    <div class="p-8 border-b border-white/10">
                        <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-5">
                            <span class="text-orange-200 text-sm font-semibold uppercase tracking-wide">Residential</span>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-4">Roofing for Homes in {{ $cityPage['city'] }}</h3>
                        <p class="text-gray-300 text-lg leading-relaxed">
                            We help homeowners in {{ $cityPage['city'] }} protect their property with replacement systems, targeted repairs, and dependable storm response.
                        </p>
                    </div>
                    <div class="p-8 space-y-6">
                        @foreach($residentialServices as $service)
                            <div class="rounded-2xl border border-white/10 bg-black/10 p-6">
                                <h4 class="text-xl font-bold text-white mb-2">{{ $service['label'] }}</h4>
                                <p class="text-gray-300 mb-4">{{ $service['description'] }}</p>
                                <a href="{{ $service['route'] }}" class="inline-flex items-center text-orange-300 font-semibold hover:text-orange-200">
                                    Learn more
                                    <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-sm shadow-2xl overflow-hidden">
                    <div class="p-8 border-b border-white/10">
                        <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-5">
                            <span class="text-orange-200 text-sm font-semibold uppercase tracking-wide">Commercial</span>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-4">Roofing for Businesses in {{ $cityPage['city'] }}</h3>
                        <p class="text-gray-300 text-lg leading-relaxed">
                            From flat roof systems to metal roofing and repair work, Ridgeline Roofing supports commercial properties throughout the {{ $cityPage['city'] }} market.
                        </p>
                    </div>
                    <div class="p-8 space-y-6">
                        @foreach($commercialServices as $service)
                            <div class="rounded-2xl border border-white/10 bg-black/10 p-6">
                                <h4 class="text-xl font-bold text-white mb-2">{{ $service['label'] }}</h4>
                                <p class="text-gray-300 mb-4">{{ $service['description'] }}</p>
                                <a href="{{ $service['route'] }}" class="inline-flex items-center text-orange-300 font-semibold hover:text-orange-200">
                                    Learn more
                                    <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative py-24 bg-gradient-to-br from-gray-50 via-white to-gray-100 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800 overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23000000&quot; fill-opacity=&quot;0.1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-orange-100 dark:bg-orange-900 rounded-full px-6 py-3 mb-8">
                    <svg class="h-5 w-5 text-orange-600 dark:text-orange-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-orange-800 dark:text-orange-200 text-sm font-semibold uppercase tracking-wide">Why Ridgeline in {{ $cityPage['city'] }}</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                    <span class="block">Local Knowledge.</span>
                    <span class="block text-orange-600">Professional Execution.</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Our crews understand the needs of properties across {{ $cityPage['city'] }}, {{ $cityPage['state_abbr'] }}, and the surrounding tri-state communities.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="rounded-3xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 p-8 shadow-xl">
                    <div class="h-16 w-16 bg-orange-100 dark:bg-orange-900 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Regional Weather Expertise</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        {{ $cityPage['local_context'] }}
                    </p>
                </div>

                <div class="rounded-3xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 p-8 shadow-xl">
                    <div class="h-16 w-16 bg-orange-100 dark:bg-orange-900 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Clear Scope & Honest Guidance</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        We prioritize practical recommendations, transparent communication, and workmanship that protects your property for the long haul.
                    </p>
                </div>

                <div class="rounded-3xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 p-8 shadow-xl">
                    <div class="h-16 w-16 bg-orange-100 dark:bg-orange-900 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Nearby Coverage</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                        We also serve the communities around {{ $cityPage['city'] }}, helping customers get faster scheduling and a contractor familiar with the surrounding market.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(array_slice($cityPage['nearby_areas'], 0, 4) as $nearbyArea)
                            <span class="inline-flex rounded-full bg-orange-100 text-orange-700 dark:bg-orange-900/40 dark:text-orange-200 px-3 py-1.5 text-sm font-medium">
                                {{ $nearbyArea }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 bg-gradient-to-r from-orange-600 to-orange-700 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-5">Need Roofing Help in {{ $cityPage['city'] }}?</h2>
            <p class="text-lg md:text-xl text-orange-50 mb-8 max-w-3xl mx-auto">
                Schedule a free inspection and talk with a local team that serves {{ $cityPage['city'] }}, {{ $cityPage['state_abbr'] }}, and the surrounding area with residential and commercial roofing support.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Request Free Inspection
                </a>
                <a href="{{ route('service-areas') }}" class="bg-orange-800 hover:bg-orange-900 text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors duration-200 shadow-lg">
                    View All Service Areas
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
