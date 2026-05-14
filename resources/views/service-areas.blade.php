@php
    $heroImage = \App\Models\Setting::getHeroImage();
    $serviceAreas = [
        [
            'state' => 'Kentucky',
            'abbr' => 'KY',
            'headline' => 'Ashland and nearby communities',
            'cities' => ['Ashland', 'Catlettsburg', 'Flatwoods', 'Russell', 'Surrounding areas'],
        ],
        [
            'state' => 'West Virginia',
            'abbr' => 'WV',
            'headline' => 'Huntington area coverage',
            'cities' => ['Huntington', 'Kenova', 'Barboursville', 'Milton', 'Surrounding areas'],
        ],
        [
            'state' => 'Ohio',
            'abbr' => 'OH',
            'headline' => 'Ironton and southern Ohio',
            'cities' => ['Ironton', 'Portsmouth', 'Wheelersburg', 'South Point', 'Surrounding areas'],
        ],
    ];
@endphp

<x-layouts.app
    title="Service Areas - Tri-State Roofing"
    metaDescription="Ridgeline Roofing proudly serves homeowners and businesses across Ashland, Huntington, Ironton, and surrounding communities throughout Kentucky, West Virginia, and Ohio."
>
    <div class="relative text-white overflow-hidden py-16 sm:py-20 lg:py-24 lg:min-h-[72vh] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 hover:scale-100 transition-transform duration-1000" style="background-image: url('{{ str_starts_with($heroImage, 'http') ? $heroImage : (str_starts_with($heroImage, 'hero') ? asset($heroImage) : asset('storage/' . $heroImage)) }}');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-orange-600/40 via-orange-700/30 to-orange-800/50"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-5">
                        <svg class="h-4 w-4 text-orange-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.536-9.95a1 1 0 10-1.414-1.414L9 9.757 7.879 8.636a1 1 0 10-1.415 1.414l1.828 1.829a1 1 0 001.415 0l3.829-3.829z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-semibold text-orange-200">Tri-State Coverage</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                        Roofing Service Across
                        <span class="block text-yellow-300">Kentucky, West Virginia, and Ohio</span>
                    </h1>

                    <p class="text-base md:text-lg mb-6 max-w-2xl mx-auto lg:mx-0 leading-relaxed text-orange-50/95">
                        Ridgeline Roofing delivers residential and commercial roofing solutions across the tri-state area with the same local responsiveness, clear communication, and professional workmanship featured throughout our homepage.
                    </p>

                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm md:text-base text-gray-100/95 mb-7 max-w-2xl mx-auto lg:mx-0">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Residential and commercial</strong> service</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Storm response</strong> and inspections</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Local code familiarity</strong> in all 3 states</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Fast scheduling</strong> from a regional team</span>
                        </li>
                    </ul>

                    <div class="flex flex-col sm:flex-row gap-3 items-center justify-center lg:justify-start">
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-7 py-3.5 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg hover:shadow-xl">
                            Schedule Free Inspection
                        </a>
                        <a href="tel:3043811122" class="w-full sm:w-auto inline-flex items-center justify-center bg-white/10 hover:bg-white/15 border border-white/20 text-white px-7 py-3.5 rounded-xl font-bold text-lg transition-all duration-200">
                            Call (304) 381-1122
                        </a>
                    </div>

                    <div class="mt-6 flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-3 text-sm text-orange-100/90">
                        <div class="inline-flex items-center gap-2">
                            <span class="font-bold text-yellow-300">KY</span>
                            <span>Ashland and beyond</span>
                        </div>
                        <div class="inline-flex items-center gap-2">
                            <span class="font-bold text-yellow-300">WV</span>
                            <span>Huntington area</span>
                        </div>
                        <div class="inline-flex items-center gap-2">
                            <span class="font-bold text-yellow-300">OH</span>
                            <span>Ironton and southern Ohio</span>
                        </div>
                    </div>
                </div>

                <div class="relative hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 shadow-2xl">
                        <div class="flex items-start justify-between gap-6">
                            <div>
                                <div class="text-xs uppercase tracking-wider text-orange-200 font-semibold mb-2">Regional Reach • Local Service</div>
                                <h2 class="text-2xl font-bold text-white mb-3">One trusted roofing partner across the tri-state.</h2>
                                <p class="text-gray-200 leading-relaxed">
                                    From emergency roof repairs to full replacements, our team serves homes and businesses throughout Kentucky, West Virginia, and Ohio with consistent quality and responsive communication.
                                </p>
                            </div>
                            <div class="text-right">
                                <div class="text-3xl font-bold text-yellow-300">3</div>
                                <div class="text-sm text-orange-100">States Served</div>
                            </div>
                        </div>
                        <div class="mt-8 grid grid-cols-3 gap-4">
                            @foreach($serviceAreas as $area)
                                <div class="rounded-xl border border-white/15 bg-black/10 px-4 py-5 text-center">
                                    <div class="text-2xl font-bold text-yellow-300">{{ $area['abbr'] }}</div>
                                    <div class="mt-1 text-sm text-orange-100">{{ $area['state'] }}</div>
                                </div>
                            @endforeach
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
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3a1 1 0 102 0V7zm-1 8a1.25 1.25 0 100-2.5A1.25 1.25 0 0010 15z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-orange-200 text-sm font-semibold uppercase tracking-wide">Coverage Area</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    <span class="block">Where We</span>
                    <span class="block text-orange-400">Work Every Day</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    We focus on the communities around Ashland, Huntington, and Ironton so customers get quick response times, local expertise, and a team that knows the region.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @foreach($serviceAreas as $area)
                    <div class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-sm shadow-2xl overflow-hidden">
                        <div class="p-8 border-b border-white/10">
                            <div class="flex items-center justify-between mb-5">
                                <div>
                                    <div class="text-sm uppercase tracking-widest text-orange-200 font-semibold">{{ $area['abbr'] }}</div>
                                    <h3 class="text-3xl font-bold text-white mt-2">{{ $area['state'] }}</h3>
                                </div>
                                <div class="h-14 w-14 rounded-2xl bg-orange-600 flex items-center justify-center shadow-lg">
                                    <span class="text-white text-lg font-bold">{{ $area['abbr'] }}</span>
                                </div>
                            </div>
                            <p class="text-gray-300 text-lg leading-relaxed">{{ $area['headline'] }}</p>
                        </div>
                        <div class="p-8">
                            <ul class="space-y-4">
                                @foreach($area['cities'] as $city)
                                    <li class="flex items-center">
                                        <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                            <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <span class="text-gray-200 text-lg">{{ $city }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
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
                    <span class="text-orange-800 dark:text-orange-200 text-sm font-semibold uppercase tracking-wide">Local Advantage</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                    <span class="block">Why Local</span>
                    <span class="block text-orange-600">Coverage Matters</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Our crews understand the weather, permit expectations, and service needs across the tri-state area, which helps us move faster and communicate more clearly from inspection to completion.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="rounded-3xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 p-8 shadow-xl">
                    <div class="h-16 w-16 bg-orange-100 dark:bg-orange-900 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Weather Expertise</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        We understand the storm cycles, seasonal wear, and roofing challenges that affect homes and commercial properties in this region.
                    </p>
                </div>

                <div class="rounded-3xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 p-8 shadow-xl">
                    <div class="h-16 w-16 bg-orange-100 dark:bg-orange-900 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Code Familiarity</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        We work within the permit and code expectations across Kentucky, West Virginia, and Ohio so your project keeps moving with fewer surprises.
                    </p>
                </div>

                <div class="rounded-3xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 p-8 shadow-xl">
                    <div class="h-16 w-16 bg-orange-100 dark:bg-orange-900 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Fast Response Times</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Because we stay focused on the tri-state market, we can respond quickly for inspections, estimates, emergency tarping, and follow-up service.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 bg-gradient-to-r from-orange-600 to-orange-700 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-5">Need Roofing Service in Your Area?</h2>
            <p class="text-lg md:text-xl text-orange-50 mb-8 max-w-3xl mx-auto">
                If you are in or near our Kentucky, West Virginia, or Ohio coverage area, we can help with inspections, repairs, and full roof replacements.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Request Free Inspection
                </a>
                <a href="tel:3043811122" class="bg-orange-800 hover:bg-orange-900 text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors duration-200 shadow-lg">
                    Call (304) 381-1122
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>

