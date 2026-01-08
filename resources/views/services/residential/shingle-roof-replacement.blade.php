<x-layouts.app title="Shingle Roof Replacement - Residential">
    <!-- Hero Section -->
    <div class="relative text-white py-24 md:py-32 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/full-shot-man-sitting-roof.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/50 to-blue-800/30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-block bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-bold mb-4">RESIDENTIAL</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Shingle Roof Replacement</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-100">
                    Durable asphalt shingle roofs that protect your home for decades. Available in a variety of colors and styles to match your home's aesthetic.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200 shadow-lg">
                        Get Free Estimate
                    </a>
                    <a href="tel:3043811122" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200 shadow-lg">
                        Call (304) 381-1122
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">Why Choose Shingle Roofing?</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Asphalt shingle roofs are the most popular choice for residential homes due to their affordability, durability, and wide range of style options. Perfect for most residential applications.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Cost-Effective Solution</h3>
                                <p class="text-gray-600 dark:text-gray-300">Excellent value for money with long-lasting performance</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">20-30 Year Lifespan</h3>
                                <p class="text-gray-600 dark:text-gray-300">Premium shingles can last up to 30 years with proper maintenance</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Wide Variety of Styles</h3>
                                <p class="text-gray-600 dark:text-gray-300">Multiple colors and architectural styles to match your home</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Easy to Repair</h3>
                                <p class="text-gray-600 dark:text-gray-300">Individual shingles can be replaced without replacing the entire roof</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="space-y-8">
                    <!-- Service Image -->
                    <div class="rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('img/shingle-roof.webp') }}" alt="Shingle Roof Replacement" class="w-full h-64 object-cover">
                    </div>
                    <!-- Our Process -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-700 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Our Process</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">1</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Free Inspection</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Comprehensive roof assessment and measurement</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">2</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Material Selection</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Choose the perfect shingle style and color</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">3</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Professional Installation</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Expert installation by certified professionals</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">4</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Quality Assurance</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Final inspection and warranty activation</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Materials Section -->
    <div class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Premium Shingle Options</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">We work with top manufacturers to offer the best shingle options</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">3-Tab Shingles</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Classic, affordable option perfect for most homes. 20-25 year lifespan.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">Most Economical</div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-2 border-blue-600">
                    <div class="inline-block bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold mb-3">POPULAR</div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Architectural Shingles</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Enhanced durability and dimensional appearance. 30+ year lifespan.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">Best Value</div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Premium Designer Shingles</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Luxury appearance with maximum durability. 50+ year warranty available.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">Premium Option</div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Replace Your Shingle Roof?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Get a free inspection and detailed estimate. We'll help you choose the perfect shingle option for your home.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors duration-200">
                    Request Free Estimate
                </a>
                <a href="tel:3043811122" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200">
                    Call (304) 381-1122
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>

