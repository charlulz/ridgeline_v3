<x-layouts.app :title="$funnelPage->meta_title ?? $funnelPage->name">
    <!-- Hero Section - Matching Homepage Style -->
    <div class="relative text-white overflow-hidden min-h-screen flex items-center">
        <!-- Background Image -->
        @if($funnelPage->hero_image)
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 hover:scale-100 transition-transform duration-1000" style="background-image: url('{{ asset($funnelPage->hero_image) }}');"></div>
        @else
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 hover:scale-100 transition-transform duration-1000" style="background-image: url('{{ asset('hero-roof-replacement-worker.jpg') }}');"></div>
        @endif
        
        <!-- Dark Overlay for Readability -->
        <div class="absolute inset-0 bg-black/60"></div>
        
        <!-- Orange Brand Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-600/40 via-orange-700/30 to-orange-800/50"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Column - Main Content -->
                <div class="text-center lg:text-left">
                    @if($funnelPage->offer_details && isset($funnelPage->offer_details['badge']))
                        <!-- Urgency Badge -->
                        <div class="inline-flex items-center bg-red-600/20 border border-red-400/30 rounded-full px-4 py-2 mb-6">
                            <svg class="h-4 w-4 text-red-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm font-semibold text-red-200">{{ $funnelPage->offer_details['badge'] }}</span>
                        </div>
                    @endif

                    <!-- Main Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        @if(str_contains($funnelPage->headline, '<br>') || str_contains($funnelPage->headline, "\n"))
                            @foreach(explode("\n", $funnelPage->headline) as $line)
                                <span class="block @if($loop->last) text-yellow-300 @endif">{{ trim($line) }}</span>
                            @endforeach
                        @else
                            {{ $funnelPage->headline }}
                        @endif
                    </h1>

                    <!-- Subheadline -->
                    @if($funnelPage->subheadline)
                        <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            {!! nl2br(e($funnelPage->subheadline)) !!}
                        </p>
                    @endif

                    @if($funnelPage->offer_details && isset($funnelPage->offer_details['urgency']))
                        <div class="flex flex-wrap gap-4 mb-8 justify-center lg:justify-start">
                            @foreach($funnelPage->offer_details['urgency'] as $item)
                                <div class="flex items-center bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg px-4 py-2">
                                    <svg class="h-5 w-5 text-yellow-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-sm font-medium text-white">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Phone CTA -->
                    <div class="text-center lg:text-left mb-8">
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

                <!-- Right Column - Form & Visual Elements -->
                <div class="relative space-y-6">
                    <!-- Main Form Card -->
                    <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-2xl max-w-md mx-auto lg:mx-0">
                        <div class="text-center mb-4">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">
                                @if($funnelPage->form_type === 'emergency')
                                    Emergency Roof Inspection
                                @elseif($funnelPage->form_type === 'inspection')
                                    Free Roof Inspection
                                @else
                                    Get Your Free Quote
                                @endif
                            </h3>
                            <p class="text-sm text-gray-600">Free • No obligation • Same-day response</p>
                        </div>
                        
                        <form action="{{ route('funnel.submit', $funnelPage) }}" method="POST" class="space-y-4">
                            @csrf
                            
                            <!-- Name -->
                            <div>
                                <input 
                                    type="text" 
                                    name="name"
                                    placeholder="Your Name" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500 @error('name') border-red-500 @enderror"
                                >
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Phone -->
                            <div>
                                <input 
                                    type="tel" 
                                    name="phone"
                                    placeholder="Phone Number" 
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500 @error('phone') border-red-500 @enderror"
                                >
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <input 
                                    type="email" 
                                    name="email"
                                    placeholder="Email (Optional)" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500 @error('email') border-red-500 @enderror"
                                >
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Property Type -->
                            <div>
                                <select 
                                    name="property_type"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 @error('property_type') border-red-500 @enderror"
                                >
                                    <option value="">Property Type (Optional)</option>
                                    <option value="residential">Residential Home</option>
                                    <option value="commercial">Commercial Building</option>
                                    <option value="multi_unit">Multi-Unit Property</option>
                                    <option value="not_sure">Not Sure</option>
                                </select>
                            </div>

                            <!-- Property Address -->
                            <div>
                                <input 
                                    type="text" 
                                    name="property_address"
                                    placeholder="Property Address (Optional)" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500"
                                >
                            </div>

                            <!-- Urgency -->
                            <div>
                                <select 
                                    name="urgency"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900"
                                >
                                    <option value="">Urgency Level (Optional)</option>
                                    <option value="emergency">Emergency - Immediate Help Needed</option>
                                    <option value="high">High - Within 24 Hours</option>
                                    <option value="medium">Medium - This Week</option>
                                    <option value="low">Low - Planning Ahead</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <button 
                                type="submit" 
                                class="w-full bg-orange-600 hover:bg-orange-700 text-white font-bold py-3 px-4 rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl"
                            >
                                @if($funnelPage->form_type === 'emergency')
                                    Get Emergency Help Now
                                @elseif($funnelPage->form_type === 'inspection')
                                    Schedule Free Inspection
                                @else
                                    Get Free Quote
                                @endif
                            </button>
                        </form>
                        
                        <!-- Trust Text -->
                        <p class="text-xs text-gray-500 text-center mt-3">
                            ✓ Licensed & Insured ✓ Emergency Response ✓ No High-Pressure Sales
                        </p>
                    </div>

                    <!-- Social Proof Card -->
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
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section - Styled Like Homepage -->
    @if($funnelPage->content)
        <div class="py-20 bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @php
                    // Parse content into sections
                    $sections = preg_split('/##\s+/', $funnelPage->content);
                    array_shift($sections); // Remove first empty element
                @endphp

                @foreach($sections as $index => $section)
                    @php
                        $lines = explode("\n", trim($section));
                        $title = trim($lines[0]);
                        $content = implode("\n", array_slice($lines, 1));
                        $isEven = $index % 2 === 0;
                    @endphp

                    <div class="mb-20 {{ $index > 0 ? 'mt-20' : '' }}">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            @if($isEven)
                                <!-- Content First -->
                                <div class="order-2 lg:order-1">
                                    <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                                        <span class="text-orange-300 text-sm font-semibold uppercase tracking-wide">{{ $title }}</span>
                                    </div>
                                    <div class="prose prose-lg dark:prose-invert max-w-none">
                                        @foreach(explode("\n", trim($content)) as $line)
                                            @php
                                                $line = trim($line);
                                                if (empty($line)) continue;
                                                
                                                // Check if it's a bullet point
                                                if (preg_match('/^-\s+\*\*(.+?)\*\*:\s*(.+)$/', $line, $matches)) {
                                                    // Bold bullet point
                                                    echo '<div class="flex items-start mb-4">
                                                        <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4 mt-1">
                                                            <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-1">
                                                            <span class="font-bold text-white">' . e($matches[1]) . ':</span>
                                                            <span class="text-gray-300 ml-2">' . e($matches[2]) . '</span>
                                                        </div>
                                                    </div>';
                                                } elseif (preg_match('/^-\s+(.+)$/', $line, $matches)) {
                                                    // Regular bullet point
                                                    echo '<div class="flex items-center mb-4">
                                                        <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                                            <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                            </svg>
                                                        </div>
                                                        <span class="text-gray-300 text-lg">' . e($matches[1]) . '</span>
                                                    </div>';
                                                } elseif (preg_match('/^\*\*Step\s+(\d+):\s+(.+?)\*\*\s+-\s+(.+)$/', $line, $matches)) {
                                                    // Step format
                                                    echo '<div class="flex items-start mb-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                                                        <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center mr-4 font-bold text-lg">' . e($matches[1]) . '</div>
                                                        <div class="flex-1">
                                                            <h4 class="font-bold text-white text-lg mb-2">' . e($matches[2]) . '</h4>
                                                            <p class="text-gray-300">' . e($matches[3]) . '</p>
                                                        </div>
                                                    </div>';
                                                } elseif (preg_match('/^\*\*(.+?)\*\*$/', $line, $matches)) {
                                                    // Bold heading
                                                    echo '<h3 class="text-2xl font-bold text-white mb-4">' . e($matches[1]) . '</h3>';
                                                } elseif (preg_match('/^\*\*(.+?)\*\*:\s*(.+)$/', $line, $matches)) {
                                                    // Bold with description
                                                    echo '<div class="mb-4">
                                                        <span class="font-bold text-white text-lg">' . e($matches[1]) . ':</span>
                                                        <span class="text-gray-300 ml-2">' . e($matches[2]) . '</span>
                                                    </div>';
                                                } elseif (preg_match('/^(\d+)\.\s+\*\*(.+?)\*\*:\s*(.+)$/', $line, $matches)) {
                                                    // Numbered list with bold
                                                    echo '<div class="flex items-start mb-4">
                                                        <div class="flex-shrink-0 w-8 h-8 bg-orange-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">' . e($matches[1]) . '</div>
                                                        <div class="flex-1">
                                                            <span class="font-bold text-white">' . e($matches[2]) . ':</span>
                                                            <span class="text-gray-300 ml-2">' . e($matches[3]) . '</span>
                                                        </div>
                                                    </div>';
                                                } elseif (preg_match('/^(\d+)\.\s+(.+)$/', $line, $matches)) {
                                                    // Numbered list
                                                    echo '<div class="flex items-start mb-4">
                                                        <div class="flex-shrink-0 w-8 h-8 bg-orange-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">' . e($matches[1]) . '</div>
                                                        <span class="text-gray-300 text-lg flex-1">' . e($matches[2]) . '</span>
                                                    </div>';
                                                } elseif (preg_match('/^\*\*(.+?)\*\*\s+(.+)$/', $line, $matches)) {
                                                    // Bold + text
                                                    echo '<p class="text-xl text-gray-300 mb-4 leading-relaxed">
                                                        <strong class="text-white">' . e($matches[1]) . '</strong> ' . e($matches[2]) . '
                                                    </p>';
                                                } elseif (preg_match('/^Q:\s+(.+)$/', $line, $matches)) {
                                                    // Question
                                                    echo '<div class="mb-4">
                                                        <h4 class="font-bold text-white text-lg mb-2">Q: ' . e($matches[1]) . '</h4>';
                                                } elseif (preg_match('/^A:\s+(.+)$/', $line, $matches)) {
                                                    // Answer
                                                    echo '<p class="text-gray-300 ml-6 mb-6">' . e($matches[1]) . '</p>
                                                    </div>';
                                                } else {
                                                    // Regular paragraph
                                                    if (!empty($line)) {
                                                        echo '<p class="text-xl text-gray-300 mb-6 leading-relaxed">' . e($line) . '</p>';
                                                    }
                                                }
                                            @endphp
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Image Placeholder -->
                                <div class="order-1 lg:order-2">
                                    <div class="relative">
                                        <div class="aspect-[4/3] bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-white/20 flex items-center justify-center">
                                            <div class="text-center p-8">
                                                <svg class="h-24 w-24 text-orange-400/50 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                                <p class="text-gray-400 text-sm">{{ $title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- Image Placeholder First -->
                                <div class="order-1">
                                    <div class="relative">
                                        <div class="aspect-[4/3] bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-3xl overflow-hidden border border-white/20 flex items-center justify-center">
                                            <div class="text-center p-8">
                                                <svg class="h-24 w-24 text-orange-400/50 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                </svg>
                                                <p class="text-gray-400 text-sm">{{ $title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content Second -->
                                <div class="order-2">
                                    <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                                        <span class="text-orange-300 text-sm font-semibold uppercase tracking-wide">{{ $title }}</span>
                                    </div>
                                    <div class="prose prose-lg dark:prose-invert max-w-none">
                                        @foreach(explode("\n", trim($content)) as $line)
                                            @php
                                                $line = trim($line);
                                                if (empty($line)) continue;
                                                
                                                // Same parsing logic as above
                                                if (preg_match('/^-\s+\*\*(.+?)\*\*:\s*(.+)$/', $line, $matches)) {
                                                    echo '<div class="flex items-start mb-4">
                                                        <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4 mt-1">
                                                            <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                            </svg>
                                                        </div>
                                                        <div class="flex-1">
                                                            <span class="font-bold text-white">' . e($matches[1]) . ':</span>
                                                            <span class="text-gray-300 ml-2">' . e($matches[2]) . '</span>
                                                        </div>
                                                    </div>';
                                                } elseif (preg_match('/^-\s+(.+)$/', $line, $matches)) {
                                                    echo '<div class="flex items-center mb-4">
                                                        <div class="flex-shrink-0 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                                            <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                            </svg>
                                                        </div>
                                                        <span class="text-gray-300 text-lg">' . e($matches[1]) . '</span>
                                                    </div>';
                                                } elseif (preg_match('/^\*\*Step\s+(\d+):\s+(.+?)\*\*\s+-\s+(.+)$/', $line, $matches)) {
                                                    echo '<div class="flex items-start mb-6 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                                                        <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center mr-4 font-bold text-lg">' . e($matches[1]) . '</div>
                                                        <div class="flex-1">
                                                            <h4 class="font-bold text-white text-lg mb-2">' . e($matches[2]) . '</h4>
                                                            <p class="text-gray-300">' . e($matches[3]) . '</p>
                                                        </div>
                                                    </div>';
                                                } elseif (preg_match('/^\*\*(.+?)\*\*$/', $line, $matches)) {
                                                    echo '<h3 class="text-2xl font-bold text-white mb-4">' . e($matches[1]) . '</h3>';
                                                } elseif (preg_match('/^(\d+)\.\s+\*\*(.+?)\*\*:\s*(.+)$/', $line, $matches)) {
                                                    echo '<div class="flex items-start mb-4">
                                                        <div class="flex-shrink-0 w-8 h-8 bg-orange-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">' . e($matches[1]) . '</div>
                                                        <div class="flex-1">
                                                            <span class="font-bold text-white">' . e($matches[2]) . ':</span>
                                                            <span class="text-gray-300 ml-2">' . e($matches[3]) . '</span>
                                                        </div>
                                                    </div>';
                                                } elseif (preg_match('/^(\d+)\.\s+(.+)$/', $line, $matches)) {
                                                    echo '<div class="flex items-start mb-4">
                                                        <div class="flex-shrink-0 w-8 h-8 bg-orange-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">' . e($matches[1]) . '</div>
                                                        <span class="text-gray-300 text-lg flex-1">' . e($matches[2]) . '</span>
                                                    </div>';
                                                } elseif (preg_match('/^\*\*(.+?)\*\*\s+(.+)$/', $line, $matches)) {
                                                    echo '<p class="text-xl text-gray-300 mb-4 leading-relaxed">
                                                        <strong class="text-white">' . e($matches[1]) . '</strong> ' . e($matches[2]) . '
                                                    </p>';
                                                } elseif (preg_match('/^Q:\s+(.+)$/', $line, $matches)) {
                                                    echo '<div class="mb-4">
                                                        <h4 class="font-bold text-white text-lg mb-2">Q: ' . e($matches[1]) . '</h4>';
                                                } elseif (preg_match('/^A:\s+(.+)$/', $line, $matches)) {
                                                    echo '<p class="text-gray-300 ml-6 mb-6">' . e($matches[1]) . '</p>
                                                    </div>';
                                                } else {
                                                    if (!empty($line)) {
                                                        echo '<p class="text-xl text-gray-300 mb-6 leading-relaxed">' . e($line) . '</p>';
                                                    }
                                                }
                                            @endphp
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-orange-600 to-orange-800 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-xl mb-8">
                Don't wait - fill out the form above or call us directly for immediate assistance.
            </p>
            <a href="tel:3043811122" class="inline-flex items-center bg-white text-orange-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200">
                <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
                Call (304) 381-1122
            </a>
            <p class="text-sm text-orange-200 mt-3">Available 24/7 for emergencies</p>
        </div>
    </div>
</x-layouts.app>
