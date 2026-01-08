<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Ridgeline Roofing' }} - Professional Roofing Services</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased h-full bg-white dark:bg-gray-900">
        <div class="min-h-full">
            <!-- Top Bar - Trust Signals -->
            <div class="bg-orange-600 text-white py-2">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between text-sm">
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                <span class="font-medium">(304) 381-1122</span>
                            </div>
                            <div class="hidden sm:flex items-center">
                                <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Licensed & Insured</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <a href="tel:3043811122" class="flex items-center bg-red-600 hover:bg-red-700 px-3 py-1 rounded-full text-xs font-medium transition-colors duration-200 animate-pulse">
                                <svg class="h-3 w-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                24/7 Emergency
                            </a>
                            <div class="hidden sm:flex items-center text-xs">
                                <span class="text-orange-200">Free Rush Estimates</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="bg-white shadow-lg border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 sticky top-0 z-50" x-data="{ mobileMenuOpen: false, residentialOpen: false, commercialOpen: false }">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-20 items-center">
                        <div class="flex items-center">
                            <!-- Logo -->
                            <div class="flex-shrink-0 flex items-center">
                                <a href="{{ route('home') }}" class="flex items-center group">
                                    <div class="h-12 flex items-center justify-center group-hover:scale-105 transition-transform duration-200">
                                        <img src="{{ asset('logo.webp') }}" alt="Ridgeline Roofing" class="h-12 w-auto">
                                    </div>
                                    <div class="ml-3">
                                        <span class="text-2xl font-bold text-gray-900 dark:text-white">Ridgeline Roofing</span>
                                        <div class="text-xs text-gray-500 dark:text-gray-400 -mt-1">Professional Roofing Services</div>
                                    </div>
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden lg:ml-8 lg:flex lg:items-center lg:space-x-1">
                                <a href="{{ route('home') }}" class="border-transparent text-gray-700 hover:text-orange-600 hover:border-orange-500 dark:text-gray-300 dark:hover:text-orange-400 dark:hover:border-orange-400 whitespace-nowrap py-2 px-4 border-b-2 font-semibold text-sm transition-all duration-200 {{ request()->routeIs('home') ? 'border-orange-500 text-orange-600 dark:text-orange-400' : '' }}">
                                    Home
                                </a>
                                <a href="{{ route('about') }}" class="border-transparent text-gray-700 hover:text-orange-600 hover:border-orange-500 dark:text-gray-300 dark:hover:text-orange-400 dark:hover:border-orange-400 whitespace-nowrap py-2 px-4 border-b-2 font-semibold text-sm transition-all duration-200 {{ request()->routeIs('about') ? 'border-orange-500 text-orange-600 dark:text-orange-400' : '' }}">
                                    About Us
                                </a>
                                
                                <!-- Residential Dropdown -->
                                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="border-transparent text-gray-700 hover:text-orange-600 hover:border-orange-500 dark:text-gray-300 dark:hover:text-orange-400 dark:hover:border-orange-400 whitespace-nowrap py-2 px-4 border-b-2 font-semibold text-sm transition-all duration-200 flex items-center {{ request()->is('services/residential*') ? 'border-orange-500 text-orange-600 dark:text-orange-400' : '' }}">
                                        Residential
                                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                    </button>
                                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-0 w-[600px] bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-200 dark:border-gray-700 z-50">
                                        <div class="p-6">
                                            <div class="mb-4 pb-3 border-b border-gray-200 dark:border-gray-700">
                                                <h3 class="text-sm font-bold text-gray-900 dark:text-white">Residential Services</h3>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">Professional roofing solutions for your home</p>
                                            </div>
                                            <div class="grid grid-cols-3 gap-6">
                                                <div>
                                                    <h4 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-3">Roof Replacement</h4>
                                                    <ul class="space-y-2">
                                                        <li><a href="{{ route('services.residential.shingle-replacement') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Shingle Roof</a></li>
                                                        <li><a href="{{ route('services.residential.rubber-replacement') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Rubber Roof</a></li>
                                                        <li><a href="{{ route('services.residential.metal-replacement') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Metal Roof</a></li>
                                                        <li><a href="{{ route('services.residential.designer-shingle-replacement') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Designer Shingles</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-3">Roof Repair</h4>
                                                    <ul class="space-y-2">
                                                        <li><a href="{{ route('services.residential.shingle-repair') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Shingle Repair</a></li>
                                                        <li><a href="{{ route('services.residential.rubber-repair') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Rubber Repair</a></li>
                                                        <li><a href="{{ route('services.residential.metal-repair') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Metal Repair</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-3">Additional Services</h4>
                                                    <ul class="space-y-2">
                                                        <li><a href="{{ route('services.residential.seamless-5-gutters') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Seamless 5" Gutters</a></li>
                                                        <li><a href="{{ route('services.residential.seamless-6-gutters') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Seamless 6" Gutters</a></li>
                                                        <li><a href="{{ route('services.residential.chimney-flashing') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Chimney Flashing</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Commercial Dropdown -->
                                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="border-transparent text-gray-700 hover:text-orange-600 hover:border-orange-500 dark:text-gray-300 dark:hover:text-orange-400 dark:hover:border-orange-400 whitespace-nowrap py-2 px-4 border-b-2 font-semibold text-sm transition-all duration-200 flex items-center {{ request()->is('services/commercial*') ? 'border-orange-500 text-orange-600 dark:text-orange-400' : '' }}">
                                        Commercial
                                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                    </button>
                                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-0 w-[600px] bg-white dark:bg-gray-800 rounded-lg shadow-xl border border-gray-200 dark:border-gray-700 z-50">
                                        <div class="p-6">
                                            <div class="mb-4 pb-3 border-b border-gray-200 dark:border-gray-700">
                                                <h3 class="text-sm font-bold text-gray-900 dark:text-white">Commercial Services</h3>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">Professional roofing solutions for your business</p>
                                            </div>
                                            <div class="grid grid-cols-3 gap-6">
                                                <div>
                                                    <h4 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-3">Roof Replacement</h4>
                                                    <ul class="space-y-2">
                                                        <li><a href="{{ route('services.commercial.shingle-replacement') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Shingle Roof</a></li>
                                                        <li><a href="{{ route('services.commercial.rubber-replacement') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Rubber Roof</a></li>
                                                        <li><a href="{{ route('services.commercial.metal-replacement') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Metal Roof</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-3">Roof Repair</h4>
                                                    <ul class="space-y-2">
                                                        <li><a href="{{ route('services.commercial.shingle-repair') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Shingle Repair</a></li>
                                                        <li><a href="{{ route('services.commercial.rubber-repair') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Rubber Repair</a></li>
                                                        <li><a href="{{ route('services.commercial.metal-repair') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Metal Repair</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="text-xs font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-3">Additional Services</h4>
                                                    <ul class="space-y-2">
                                                        <li><a href="{{ route('services.commercial.gutters') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Commercial Gutters</a></li>
                                                        <li><a href="{{ route('services.commercial.roof-deck') }}" class="flex items-center text-sm text-gray-700 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400"><svg class="h-3 w-3 mr-2 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>Roof Deck Services</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="{{ route('contact') }}" class="border-transparent text-gray-700 hover:text-orange-600 hover:border-orange-500 dark:text-gray-300 dark:hover:text-orange-400 dark:hover:border-orange-400 whitespace-nowrap py-2 px-4 border-b-2 font-semibold text-sm transition-all duration-200 {{ request()->routeIs('contact') ? 'border-orange-500 text-orange-600 dark:text-orange-400' : '' }}">
                                    Contact
                                </a>
                            </div>
                        </div>

                        <!-- Right side - CTAs -->
                        <div class="flex items-center space-x-3">
                            <!-- Phone CTA -->
                            <a href="tel:3043811122" class="hidden md:flex items-center bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-all duration-200 shadow-md hover:shadow-lg">
                                <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                Call Now
                            </a>
                            
                            <!-- Primary CTA -->
                            <a href="{{ route('contact') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg text-sm font-bold transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                                Free Quote
                            </a>

                            <!-- Mobile menu button -->
                            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-md text-gray-700 hover:text-orange-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:text-orange-400 dark:hover:bg-gray-700">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="lg:hidden" x-show="mobileMenuOpen" x-transition x-cloak>
                    <div class="px-2 pt-2 pb-3 space-y-1 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
                        <a href="{{ route('home') }}" class="block px-3 py-3 text-base font-semibold {{ request()->routeIs('home') ? 'bg-orange-50 border-l-4 border-orange-500 text-orange-700 dark:bg-orange-900 dark:border-orange-400 dark:text-orange-200' : 'text-gray-700 hover:bg-gray-50 hover:text-orange-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-orange-400' }}">
                            Home
                        </a>
                        <a href="{{ route('about') }}" class="block px-3 py-3 text-base font-semibold {{ request()->routeIs('about') ? 'bg-orange-50 border-l-4 border-orange-500 text-orange-700 dark:bg-orange-900 dark:border-orange-400 dark:text-orange-200' : 'text-gray-700 hover:bg-gray-50 hover:text-orange-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-orange-400' }}">
                            About Us
                        </a>
                        
                        <!-- Mobile Residential Dropdown -->
                        <div>
                            <button @click="residentialOpen = !residentialOpen" class="w-full flex items-center justify-between px-3 py-3 text-base font-semibold {{ request()->is('services/residential*') ? 'bg-orange-50 border-l-4 border-orange-500 text-orange-700 dark:bg-orange-900 dark:border-orange-400 dark:text-orange-200' : 'text-gray-700 hover:bg-gray-50 hover:text-orange-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-orange-400' }}">
                                Residential
                                <svg :class="{ 'rotate-180': residentialOpen }" class="h-5 w-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div x-show="residentialOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="pl-6 space-y-1 bg-gray-50 dark:bg-gray-700">
                                <p class="px-3 py-2 text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Replacement</p>
                                <a href="{{ route('services.residential.shingle-replacement') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Shingle Roof</a>
                                <a href="{{ route('services.residential.rubber-replacement') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Rubber Roof</a>
                                <a href="{{ route('services.residential.metal-replacement') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Metal Roof</a>
                                <a href="{{ route('services.residential.designer-shingle-replacement') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Designer Shingles</a>
                                <p class="px-3 py-2 text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Repair</p>
                                <a href="{{ route('services.residential.shingle-repair') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Shingle Repair</a>
                                <a href="{{ route('services.residential.rubber-repair') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Rubber Repair</a>
                                <a href="{{ route('services.residential.metal-repair') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Metal Repair</a>
                                <p class="px-3 py-2 text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Additional</p>
                                <a href="{{ route('services.residential.seamless-5-gutters') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Seamless 5" Gutters</a>
                                <a href="{{ route('services.residential.seamless-6-gutters') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Seamless 6" Gutters</a>
                                <a href="{{ route('services.residential.chimney-flashing') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Chimney Flashing</a>
                            </div>
                        </div>

                        <!-- Mobile Commercial Dropdown -->
                        <div>
                            <button @click="commercialOpen = !commercialOpen" class="w-full flex items-center justify-between px-3 py-3 text-base font-semibold {{ request()->is('services/commercial*') ? 'bg-orange-50 border-l-4 border-orange-500 text-orange-700 dark:bg-orange-900 dark:border-orange-400 dark:text-orange-200' : 'text-gray-700 hover:bg-gray-50 hover:text-orange-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-orange-400' }}">
                                Commercial
                                <svg :class="{ 'rotate-180': commercialOpen }" class="h-5 w-5 transform transition-transform" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div x-show="commercialOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="pl-6 space-y-1 bg-gray-50 dark:bg-gray-700">
                                <p class="px-3 py-2 text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Replacement</p>
                                <a href="{{ route('services.commercial.shingle-replacement') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Shingle Roof</a>
                                <a href="{{ route('services.commercial.rubber-replacement') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Rubber Roof</a>
                                <a href="{{ route('services.commercial.metal-replacement') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Metal Roof</a>
                                <p class="px-3 py-2 text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Repair</p>
                                <a href="{{ route('services.commercial.shingle-repair') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Shingle Repair</a>
                                <a href="{{ route('services.commercial.rubber-repair') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Rubber Repair</a>
                                <a href="{{ route('services.commercial.metal-repair') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Metal Repair</a>
                                <p class="px-3 py-2 text-xs font-bold text-gray-500 dark:text-gray-400 uppercase">Additional</p>
                                <a href="{{ route('services.commercial.gutters') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Commercial Gutters</a>
                                <a href="{{ route('services.commercial.roof-deck') }}" class="block px-3 py-2 text-sm text-gray-600 dark:text-gray-300 hover:text-orange-600">Roof Deck Services</a>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="block px-3 py-3 text-base font-semibold {{ request()->routeIs('contact') ? 'bg-orange-50 border-l-4 border-orange-500 text-orange-700 dark:bg-orange-900 dark:border-orange-400 dark:text-orange-200' : 'text-gray-700 hover:bg-gray-50 hover:text-orange-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-orange-400' }}">
                            Contact
                        </a>
                        
                        <!-- Mobile CTAs -->
                        <div class="pt-4 pb-2 space-y-2">
                            <a href="tel:3043811122" class="flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-4 py-3 rounded-lg text-sm font-semibold transition-colors duration-200">
                                <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                Call (304) 381-1122
                            </a>
                            <a href="{{ route('contact') }}" class="flex items-center justify-center bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-lg text-sm font-bold transition-colors duration-200">
                                Get Free Quote
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
        {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-gray-50 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <!-- Company Info -->
                        <div class="col-span-1 md:col-span-2">
                            <div class="flex items-center mb-4">
                                <div class="h-8 flex items-center justify-center">
                                    <img src="{{ asset('logo.webp') }}" alt="Ridgeline Roofing" class="h-8 w-auto">
                                </div>
                                <span class="ml-2 text-xl font-bold text-gray-900 dark:text-white">Ridgeline Roofing</span>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 text-sm max-w-md">
                                Professional roofing services with over 20 years of experience. We provide quality roofing solutions for residential and commercial properties.
                            </p>
                            <div class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                                <p>1100 Our Lady's Way, Suite 208</p>
                                <p>Ashland, KY 41101</p>
                                <p class="mt-2 font-medium">(304) 381-1122</p>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider mb-4">Quick Links</h3>
                            <ul class="space-y-2">
                                <li><a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white text-sm transition-colors duration-200">Home</a></li>
                                <li><a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white text-sm transition-colors duration-200">About Us</a></li>
                                <li><a href="{{ route('blog.index') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white text-sm transition-colors duration-200">Blog</a></li>
                                <li><a href="{{ route('contact') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white text-sm transition-colors duration-200">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Our Services -->
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider mb-4">Our Services</h3>
                            <ul class="space-y-2">
                                <li><a href="{{ route('services.residential.shingle-replacement') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white text-sm transition-colors duration-200">Shingle Roof Replacement</a></li>
                                <li><a href="{{ route('services.residential.rubber-replacement') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white text-sm transition-colors duration-200">Rubber Roof Replacement</a></li>
                                <li><a href="{{ route('services.residential.metal-replacement') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white text-sm transition-colors duration-200">Metal Roof Replacement</a></li>
                                <li><a href="{{ route('services.residential.shingle-repair') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white text-sm transition-colors duration-200">Roof Repair</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Partner Logos -->
                    <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex flex-wrap items-center justify-center gap-8 mb-8">
                            <a href="https://www.gaf.com/en-us/roofing-contractors/residential/usa/ky/ashland/ridgeline-roofing-llc-1137706" target="_blank" rel="noopener noreferrer" class="grayscale hover:grayscale-0 transition-all duration-300 opacity-70 hover:opacity-100">
                                <img src="{{ asset('img/GAF_logo.png') }}" alt="GAF Certified Contractor" class="h-12 w-auto">
                            </a>
                            <div class="grayscale hover:grayscale-0 transition-all duration-300 opacity-70 hover:opacity-100">
                                <img src="{{ asset('img/blog-preferred-contractor-logo.png') }}" alt="Preferred Contractor" class="h-12 w-auto">
                            </div>
                            <div class="grayscale hover:grayscale-0 transition-all duration-300 opacity-70 hover:opacity-100">
                                <img src="{{ asset('img/MuleHide-Logo-2025(6x6)nr.png') }}" alt="MuleHide Partner" class="h-12 w-auto">
                            </div>
                        </div>
                        <p class="text-center text-gray-500 dark:text-gray-400 text-sm">
                            &copy; {{ date('Y') }} Ridgeline Roofing. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Sticky CTA Bar - Mobile -->
        <div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 300 })" x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-full" class="fixed bottom-0 left-0 right-0 z-40 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 shadow-lg lg:hidden">
            <div class="px-4 py-3">
                <div class="flex items-center justify-between space-x-3">
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-gray-900 dark:text-white">Need a Roof Repair?</p>
                        <p class="text-xs text-gray-600 dark:text-gray-300">Get a free estimate today</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="tel:3043811122" class="flex items-center bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors duration-200">
                            <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            Call
                        </a>
                        <a href="{{ route('contact') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg text-sm font-bold transition-colors duration-200">
                            Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop Sticky CTA Bar -->
        <div x-data="{ show: false }" x-init="window.addEventListener('scroll', () => { show = window.scrollY > 500 })" x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-full" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform translate-y-full" class="hidden lg:block fixed bottom-6 right-6 z-40 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-xl">
            <div class="p-4">
                <div class="text-center mb-3">
                    <p class="text-sm font-semibold text-gray-900 dark:text-white">Need Roofing Services?</p>
                    <p class="text-xs text-gray-600 dark:text-gray-300">Get a free estimate</p>
                </div>
                <div class="space-y-2">
                    <a href="tel:3043811122" class="flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors duration-200 w-full">
                        <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        Call Now
                    </a>
                    <a href="{{ route('contact') }}" class="flex items-center justify-center bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-lg text-sm font-bold transition-colors duration-200 w-full">
                        Get Free Quote
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating Phone CTA - Mobile Only -->
        <div class="fixed bottom-4 right-4 z-50 lg:hidden">
            <a href="tel:3043811122" class="flex items-center justify-center w-14 h-14 bg-green-600 hover:bg-green-700 text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-200 transform hover:scale-110">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
            </a>
        </div>

        @livewireScripts
        
        <!-- UTM Parameter Tracking -->
        <script>
            (function() {
                // Capture UTM parameters from URL
                const urlParams = new URLSearchParams(window.location.search);
                const utmSource = urlParams.get('utm_source');
                const utmMedium = urlParams.get('utm_medium');
                const utmCampaign = urlParams.get('utm_campaign');
                
                // Store in sessionStorage for persistence across page navigations
                if (utmSource) sessionStorage.setItem('utm_source', utmSource);
                if (utmMedium) sessionStorage.setItem('utm_medium', utmMedium);
                if (utmCampaign) sessionStorage.setItem('utm_campaign', utmCampaign);
                
                // Send to Laravel backend to store in session
                if (utmSource || utmMedium || utmCampaign) {
                    fetch('/api/utm-capture', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({
                            utm_source: utmSource,
                            utm_medium: utmMedium,
                            utm_campaign: utmCampaign
                        })
                    }).catch(err => console.log('UTM capture failed:', err));
                }
            })();
        </script>
    </body>
</html>
