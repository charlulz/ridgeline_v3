<x-layouts.app title="Home">
    <!-- Hero Section -->
    <div class="relative text-white overflow-hidden min-h-screen flex items-center">
        <!-- Background Image -->
        @php
            $heroImage = \App\Models\Setting::getHeroImage();
        @endphp
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 hover:scale-100 transition-transform duration-1000" style="background-image: url('{{ str_starts_with($heroImage, 'http') ? $heroImage : (str_starts_with($heroImage, 'hero') ? asset($heroImage) : asset('storage/' . $heroImage)) }}');"></div>
        
        <!-- Dark Overlay for Readability -->
        <div class="absolute inset-0 bg-black/60"></div>
        
        <!-- Orange Brand Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-600/40 via-orange-700/30 to-orange-800/50"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Main Content -->
                <div class="text-center lg:text-left">
                    @php
                        $stormAlertEnabled = \App\Models\Setting::isAlertEnabled('storm');
                        $stormAlertText = \App\Models\Setting::getAlertText('storm');
                        $stormAlertColor = \App\Models\Setting::get('alert.storm.color', 'red');
                        $headline = \App\Models\Setting::getHeroHeadline();
                        $subheadline = \App\Models\Setting::getHeroSubheadline();
                        $headlineLines = explode("\n", $headline);
                    @endphp

                    @if($stormAlertEnabled && !empty($stormAlertText))
                        <!-- Urgency Badge -->
                        @php
                            $alertColors = [
                                'red' => ['bg' => 'bg-red-600/20', 'border' => 'border-red-400/30', 'text' => 'text-red-200', 'icon' => 'text-red-300'],
                                'orange' => ['bg' => 'bg-orange-600/20', 'border' => 'border-orange-400/30', 'text' => 'text-orange-200', 'icon' => 'text-orange-300'],
                                'yellow' => ['bg' => 'bg-yellow-600/20', 'border' => 'border-yellow-400/30', 'text' => 'text-yellow-200', 'icon' => 'text-yellow-300'],
                                'blue' => ['bg' => 'bg-blue-600/20', 'border' => 'border-blue-400/30', 'text' => 'text-blue-200', 'icon' => 'text-blue-300'],
                            ];
                            $colors = $alertColors[$stormAlertColor] ?? $alertColors['red'];
                        @endphp
                        <div class="inline-flex items-center {{ $colors['bg'] }} {{ $colors['border'] }} rounded-full px-4 py-2 mb-6">
                            <svg class="h-4 w-4 {{ $colors['icon'] }} mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm font-semibold {{ $colors['text'] }}">{{ $stormAlertText }}</span>
                        </div>
                    @endif

                    <!-- Main Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        @foreach($headlineLines as $index => $line)
                            <span class="block @if($index === count($headlineLines) - 1) text-yellow-300 @endif">{{ trim($line) }}</span>
                        @endforeach
                    </h1>

                    <!-- Subheadline -->
                    @if(!empty($subheadline))
                        <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            {!! nl2br(e($subheadline)) !!}
                        </p>
                    @endif

                    <!-- Hero Form -->
                    <livewire:hero-form />

                    <!-- Phone CTA -->
                    <div class="text-center lg:text-left">
                        <p class="text-sm text-orange-100 mb-3">Emergency? Call now for immediate response:</p>
                        <a href="tel:3043811122" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-bold transition-colors duration-200 shadow-lg hover:shadow-xl animate-pulse">
                            <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <span>(304) 381-1122</span>
                        </a>
                        <p class="text-xs text-orange-200 mt-2">Available 24/7 for storm emergencies</p>
                    </div>
                </div>

                <!-- Right Column - Visual Elements -->
                <div class="relative space-y-6">
                    <!-- Main Visual Card -->
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 shadow-2xl">
                        <!-- Social Proof -->
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold mb-2">Trusted by 200+ Happy Clients</h3>
                            <div class="flex items-center justify-center space-x-6">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-300">4.9★</div>
                                    <div class="text-sm text-orange-100">Google Rating</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-yellow-300">15+</div>
                                    <div class="text-sm text-orange-100">Years Experience</div>
                                </div>
                            </div>
                        </div>

                        <!-- Key Benefits -->
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-3">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white text-sm">Free Rush Estimates</h4>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-3">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white text-sm">24/7 Emergency Service</h4>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-3">
                                    <svg class="h-4 w-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-white text-sm">Licensed & Insured</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Testimonial Card -->
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 shadow-2xl">
                        <div class="text-center">
                            <div class="flex justify-center mb-3">
                                <div class="flex text-yellow-400">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                            </div>
                            <blockquote class="text-white text-sm italic mb-3">
                                "Ridgeline Roofing replaced our entire shingle roof and gutters. Their pricing was the best among three companies. The job was completed very fast within a day and a half. Highly recommend!"
                            </blockquote>
                            <div class="text-orange-100 text-xs">
                                <strong>Andrew Crager</strong> • Google Review
                            </div>
                        </div>
                    </div>

                    <!-- Service Areas Card -->
                    <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 shadow-2xl">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-white mb-4">Serving Tri-State Area</h3>
                            <div class="grid grid-cols-1 gap-3 text-sm">
                                <div class="flex items-center justify-center">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full mr-2"></div>
                                    <span class="text-orange-100">Kentucky</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full mr-2"></div>
                                    <span class="text-orange-100">West Virginia</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full mr-2"></div>
                                    <span class="text-orange-100">Ohio</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-yellow-400 text-orange-800 px-4 py-2 rounded-full text-sm font-bold shadow-lg animate-pulse">
                        Free Inspection!
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
                    We deliver exceptional roofing services across the tri-state area with <strong>200+ happy clients</strong>.
                </p>
            </div>

            <!-- Services Showcase -->
            <div class="space-y-20 mb-20">
                <!-- Commercial Roofing Showcase -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Content -->
                        <div class="order-2 lg:order-1">
                            <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-orange-300 text-sm font-semibold uppercase tracking-wide">Commercial Services</span>
                            </div>
                            <h3 class="text-4xl font-bold text-white mb-6">Commercial Roofing</h3>
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                Keep your business operations running smoothly with our commercial roofing solutions. 
                                We minimize downtime while delivering superior results that protect your investment.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Commercial Shingle Replacement</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Commercial Rubber Replacement</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Commercial Metal Replacement</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-orange-400">Licensed</div>
                                    <div class="text-sm text-gray-400">& Insured</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Get Commercial Quote
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="order-1 lg:order-2">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-white/20">
                                    <img src="{{ asset('img/roof-replacement-worker.jpg') }}" alt="Commercial roofing project" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-orange-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Project Complete</div>
                                    <div class="text-xs opacity-90">Office Complex</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Residential Roofing Showcase -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Image -->
                        <div class="order-1">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-blue-500/20 to-blue-600/10 rounded-3xl overflow-hidden border border-white/20">
                                    <img src="{{ asset('img/shingle-roof.webp') }}" alt="Residential roofing project" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Happy Homeowner</div>
                                    <div class="text-xs opacity-90">5-Star Review</div>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="order-2">
                            <div class="inline-flex items-center bg-blue-600/20 border border-blue-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-blue-300 text-sm font-semibold uppercase tracking-wide">Residential Services</span>
                            </div>
                            <h3 class="text-4xl font-bold text-white mb-6">Residential Roofing</h3>
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                Transform your home with our expert residential roof replacement services. 
                                We use premium materials and proven techniques to ensure your family stays protected for years to come.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Shingle Roof Replacement</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Rubber Roof Replacement</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Metal Roof Replacement</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-400">200+</div>
                                    <div class="text-sm text-gray-400">Happy Clients</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Get Home Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Storm Damage & Emergency Showcase -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Content -->
                        <div class="order-2 lg:order-1">
                            <div class="inline-flex items-center bg-red-600/20 border border-red-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-red-300 text-sm font-semibold uppercase tracking-wide">Emergency Services</span>
                            </div>
                            <h3 class="text-4xl font-bold text-white mb-6">Storm Damage & Emergency Response</h3>
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                <strong>Rapid response</strong> storm damage restoration and emergency roofing services. 
                                When disaster strikes, we're there within hours to secure and protect your property.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Storm Damage Assessment & Repair</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Emergency Tarping & Temporary Solutions</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Insurance Claim Assistance</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-red-400">24/7</div>
                                    <div class="text-sm text-gray-400">Emergency Response</div>
                                </div>
                                <a href="tel:3043811122" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl animate-pulse">
                                    Call Emergency Line
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="order-1 lg:order-2">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-red-500/20 to-red-600/10 rounded-3xl overflow-hidden border border-white/20">
                                    <img src="{{ asset('img/winter-storm.png') }}" alt="Storm damage repair" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-red-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Emergency Response</div>
                                    <div class="text-xs opacity-90">Same Day Service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Maintenance & Service Showcase -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Image -->
                        <div class="order-1">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-green-500/20 to-green-600/10 rounded-3xl overflow-hidden border border-white/20">
                                    <img src="{{ asset('img/full-shot-man-sitting-roof.webp') }}" alt="Roof maintenance service" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-green-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Preventive Care</div>
                                    <div class="text-xs opacity-90">98% Uptime</div>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="order-2">
                            <div class="inline-flex items-center bg-green-600/20 border border-green-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-green-300 text-sm font-semibold uppercase tracking-wide">Maintenance Services</span>
                            </div>
                            <h3 class="text-4xl font-bold text-white mb-6">Maintenance & Service Excellence</h3>
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                <strong>Comprehensive maintenance</strong> programs and service contracts designed 
                                to maximize roof life and minimize operational disruptions.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Preventive Maintenance Programs</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Roof Asset Management Systems</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-300 text-lg">Predictive Analytics & Monitoring</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-green-400">98%</div>
                                    <div class="text-sm text-gray-400">System Uptime</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Schedule Maintenance
                                </a>
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
                    <span class="text-orange-800 dark:text-orange-200 text-sm font-semibold uppercase tracking-wide">Why Choose Us</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                    <span class="block">The Ridgeline</span>
                    <span class="block text-orange-600">Advantage</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    <strong>Two decades of excellence</strong> in roofing services. We don't just fix roofs – 
                    we build lasting relationships and deliver <strong>peace of mind</strong> with every project.
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
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">15+ Years of Proven Excellence</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                <strong>Over 15 years of roofing mastery</strong> means we've seen it all and solved it all. 
                                From storm damage to complex commercial projects, our experience is your guarantee.
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
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Certified Master Craftsmen</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Local Ashland Experts</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-orange-600">15+</div>
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
                                    <img src="{{ asset('img/roof-replacement-worker.jpg') }}" alt="Experienced roofing team" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-orange-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Expert Team</div>
                                    <div class="text-xs opacity-90">Certified Professionals</div>
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
                                    <img src="{{ asset('img/shingle-roof.webp') }}" alt="Quality roofing work" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Quality Guaranteed</div>
                                    <div class="text-xs opacity-90">100% Satisfaction</div>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="order-2">
                            <div class="inline-flex items-center bg-blue-600/20 border border-blue-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-blue-800 dark:text-blue-200 text-sm font-semibold uppercase tracking-wide">Quality</span>
                            </div>
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">100% Customer Satisfaction Guarantee</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                <strong>Quality is our promise</strong> – every project is backed by our satisfaction guarantee. 
                                We stand behind our work with comprehensive warranties and ongoing support.
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
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Ongoing Support & Maintenance</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600">100%</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">Satisfaction Rate</div>
                                </div>
                                <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl">
                                    Get Quality Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Emergency Response -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Content -->
                        <div class="order-2 lg:order-1">
                            <div class="inline-flex items-center bg-red-600/20 border border-red-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-red-800 dark:text-red-200 text-sm font-semibold uppercase tracking-wide">Emergency</span>
                            </div>
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">24/7 Emergency Response</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                <strong>Storm season doesn't wait</strong> – and neither do we. Our emergency response team 
                                is standing by 24/7 to protect your property when disaster strikes.
                            </p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Same-Day Emergency Response</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Rapid Damage Assessment</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center mr-4">
                                        <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600 dark:text-gray-300 text-lg">Insurance Claim Assistance</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-red-600">24/7</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">Emergency Service</div>
                                </div>
                                <a href="tel:3043811122" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-xl font-bold transition-colors duration-200 shadow-lg hover:shadow-xl animate-pulse">
                                    Call Emergency Line
                                </a>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="order-1 lg:order-2">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-red-500/20 to-red-600/10 rounded-3xl overflow-hidden border border-gray-200 dark:border-gray-700">
                                    <img src="{{ asset('img/winter-storm.png') }}" alt="Emergency roofing response" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-red-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Emergency Ready</div>
                                    <div class="text-xs opacity-90">Always Available</div>
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
                                    <img src="{{ asset('img/full-shot-man-sitting-roof.webp') }}" alt="Local community roofing" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -left-6 bg-green-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Local Trust</div>
                                    <div class="text-xs opacity-90">500+ Projects</div>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="order-2">
                            <div class="inline-flex items-center bg-green-600/20 border border-green-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-green-800 dark:text-green-200 text-sm font-semibold uppercase tracking-wide">Community</span>
                            </div>
                            <h3 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">Trusted by 500+ Local Projects</h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                <strong>Local expertise matters</strong> – we know Ashland's weather patterns, building codes, 
                                and community needs. Our neighbors trust us with their most important asset.
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
                                    <div class="text-3xl font-bold text-green-600">500+</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">Local Projects</div>
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
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-6 py-3 mb-8">
                    <svg class="h-5 w-5 text-orange-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-orange-200 text-sm font-semibold uppercase tracking-wide">Customer Stories</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    <span class="block">What Our</span>
                    <span class="block text-orange-400">Customers Say</span>
                </h2>
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    <strong>Real stories from real customers</strong> who trusted Ridgeline Roofing with their most important asset. 
                    <strong>See why 200+ happy clients</strong> choose us for their roofing needs.
                </p>
            </div>

            <!-- Testimonials Showcase -->
            <div class="space-y-16 mb-20">
                <!-- Featured Testimonial -->
                <div class="relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                        <!-- Content -->
                        <div class="order-2 lg:order-1">
                            <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                                <span class="text-orange-300 text-sm font-semibold uppercase tracking-wide">Featured Review</span>
                            </div>
                            <h3 class="text-4xl font-bold text-white mb-6">"They Saved Our Home During a Storm"</h3>
                            <div class="flex items-center mb-6">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="h-6 w-6 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                                <span class="ml-3 text-orange-300 font-semibold">5.0 Rating</span>
                            </div>
                            <blockquote class="text-xl text-gray-300 mb-8 leading-relaxed italic">
                                "Ridgeline Roofing saved our home during a severe storm. They responded within hours, 
                                secured our roof with emergency tarping, and had us back to normal within days. 
                                Their team was professional, efficient, and genuinely cared about our situation."
                            </blockquote>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="h-16 w-16 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                        <span class="text-white font-bold text-lg">SJ</span>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold text-lg">Sarah Johnson</div>
                                        <div class="text-orange-200 text-sm">Ashland, KY • Emergency Repair</div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-orange-400">24hrs</div>
                                    <div class="text-sm text-gray-400">Response Time</div>
                                </div>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="order-1 lg:order-2">
                            <div class="relative">
                                <div class="aspect-[4/3] bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-white/20">
                                    <img src="{{ asset('img/winter-storm.png') }}" alt="Emergency storm repair" class="w-full h-full object-cover">
                                </div>
                                <div class="absolute -bottom-6 -right-6 bg-orange-600 text-white px-6 py-3 rounded-2xl shadow-2xl">
                                    <div class="text-sm font-semibold">Emergency Response</div>
                                    <div class="text-xs opacity-90">Same Day Service</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customer Testimonials Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="group relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-blue-600/10 group-hover:from-blue-500/30 group-hover:to-blue-600/20 transition-all duration-500"></div>
                        <div class="relative">
                            <div class="flex items-center mb-6">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <blockquote class="text-gray-300 mb-6 leading-relaxed">
                                "Professional installation of our new commercial roof. The project was completed on time and within budget. Very satisfied with the results."
                            </blockquote>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-white font-semibold text-sm">LR</span>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">Lisa Rodriguez</div>
                                        <div class="text-blue-200 text-xs">Commercial Installation</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="group relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-green-600/10 group-hover:from-green-500/30 group-hover:to-green-600/20 transition-all duration-500"></div>
                        <div class="relative">
                            <div class="flex items-center mb-6">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <blockquote class="text-gray-300 mb-6 leading-relaxed">
                                "Regular maintenance service keeps our roof in great condition. The team is knowledgeable and always provides helpful advice."
                            </blockquote>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 bg-green-500 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-white font-semibold text-sm">DT</span>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">David Thompson</div>
                                        <div class="text-green-200 text-xs">Roof Maintenance</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="group relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-purple-600/10 group-hover:from-purple-500/30 group-hover:to-purple-600/20 transition-all duration-500"></div>
                        <div class="relative">
                            <div class="flex items-center mb-6">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                            <blockquote class="text-gray-300 mb-6 leading-relaxed">
                                "Ridgeline Roofing did an excellent job replacing our roof. The team was professional, punctual, and the quality of work was outstanding. Highly recommended!"
                            </blockquote>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-white font-semibold text-sm">MC</span>
                                    </div>
                                    <div>
                                        <div class="text-white font-semibold">Mike Chen</div>
                                        <div class="text-purple-200 text-xs">Residential Replacement</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trust Indicators -->
                <div class="text-center">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-orange-400 mb-2">4.9★</div>
                            <div class="text-gray-300 text-lg">Average Rating</div>
                            <div class="text-gray-400 text-sm">Based on 100+ Reviews</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-orange-400 mb-2">100%</div>
                            <div class="text-gray-300 text-lg">Satisfaction Rate</div>
                            <div class="text-gray-400 text-sm">Customer Guarantee</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-orange-400 mb-2">200+</div>
                            <div class="text-gray-300 text-lg">Happy Clients</div>
                            <div class="text-gray-400 text-sm">Tri-State Area</div>
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
            Limited Time Offer
        </div>
        <div class="absolute top-20 right-20 bg-green-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
            Free Inspection
        </div>
        <div class="absolute bottom-20 left-20 bg-white text-orange-600 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
            No Obligation
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-white/20 border border-white/30 rounded-full px-6 py-3 mb-8">
                    <svg class="h-5 w-5 text-white mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-white text-sm font-semibold uppercase tracking-wide">Act Now</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    <span class="block">Don't Wait for</span>
                    <span class="block text-yellow-300">Storm Season</span>
                </h2>
                <p class="text-xl md:text-2xl mb-12 max-w-4xl mx-auto leading-relaxed">
                    <strong>Get your free roof inspection today</strong> and protect your property before the next storm hits. 
                    <strong>Limited time offer</strong> - no obligation, no high-pressure sales, just honest expert advice.
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
                                ✓ Licensed & Insured ✓ Emergency Response ✓ No High-Pressure Sales ✓ 15+ Years Experience
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Benefits & Urgency -->
                <div class="order-1 lg:order-2">
                    <div class="space-y-8">
                        <!-- Urgency Card -->
                        <div class="bg-red-600/20 border border-red-400/30 rounded-2xl p-6">
                            <div class="flex items-center mb-4">
                                <svg class="h-6 w-6 text-red-300 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <h3 class="text-xl font-bold text-white">Storm Season Alert</h3>
                            </div>
                            <p class="text-red-100 leading-relaxed">
                                <strong>Don't wait until damage occurs!</strong> Get your roof inspected now and catch problems before they become expensive disasters.
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
                                    <h4 class="font-semibold text-white">Same-Day Response</h4>
                                    <p class="text-orange-100 text-sm">We'll contact you within 2 hours of your request</p>
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
                            <p class="text-orange-100 mb-4">Prefer to talk? Call our experts now:</p>
                            <a href="tel:3043811122" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-bold transition-all duration-200 shadow-lg hover:shadow-xl text-lg animate-pulse">
                                <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                                <span>(304) 381-1122</span>
                            </a>
                            <p class="text-xs text-orange-200 mt-2">Available 24/7 for emergencies</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Trust Indicators -->
            <div class="text-center">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300 mb-2">15+</div>
                        <div class="text-orange-100 text-sm">Years Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300 mb-2">200+</div>
                        <div class="text-orange-100 text-sm">Happy Clients</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300 mb-2">24/7</div>
                        <div class="text-orange-100 text-sm">Emergency Service</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-yellow-300 mb-2">100%</div>
                        <div class="text-orange-100 text-sm">Satisfaction Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
