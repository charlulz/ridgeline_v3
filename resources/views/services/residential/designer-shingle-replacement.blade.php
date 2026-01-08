<x-layouts.app title="Designer Shingle Replacement - Residential">
    <!-- Hero Section -->
    <div class="relative text-white py-24 md:py-32 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/full-shot-man-sitting-roof.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/50 to-blue-800/30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-block bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-bold mb-4">RESIDENTIAL</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Designer Shingle Replacement</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-100">
                    Premium luxury shingles that mimic the look of slate, shake, or tile. Maximum curb appeal with proven asphalt performance.
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">Why Choose Designer Shingles?</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Designer shingles offer the luxury appearance of natural slate or cedar shake at a fraction of the cost. These premium shingles transform your home's appearance while providing exceptional protection.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Stunning Aesthetics</h3>
                                <p class="text-gray-600 dark:text-gray-300">Realistic slate, shake, or tile appearance</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">50-Year Warranty</h3>
                                <p class="text-gray-600 dark:text-gray-300">Lifetime limited warranties available</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Increase Home Value</h3>
                                <p class="text-gray-600 dark:text-gray-300">Maximize curb appeal and resale value</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Superior Wind Resistance</h3>
                                <p class="text-gray-600 dark:text-gray-300">Rated for winds up to 130+ mph</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-700 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Our Installation Process</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">1</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Design Consultation</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Choose the perfect style for your home</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">2</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Sample Selection</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">View actual shingle samples at your home</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">3</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Expert Installation</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Certified installers for premium products</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">4</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Warranty Activation</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Register your lifetime warranty</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Options Section -->
    <div class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Designer Shingle Styles</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">Premium options to match your home's character</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-700 rounded-xl p-6 border-2 border-blue-600">
                    <div class="inline-block bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold mb-3">MOST POPULAR</div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Slate Look</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Get the timeless elegance of natural slate without the extreme weight or cost. Perfect for traditional and colonial homes.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">GAF Grand Slate / CertainTeed Grand Manor</div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Cedar Shake Look</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Achieve the rustic charm of cedar shake without the fire risk or maintenance. Ideal for craftsman and rustic style homes.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">GAF Camelot / CertainTeed Presidential</div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Dimensional Luxury</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Extra-thick architectural shingles with dramatic shadow lines. Creates an upscale look for any home style.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">GAF Grand Sequoia / CertainTeed Landmark Premium</div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Transform Your Home?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Elevate your home's appearance with premium designer shingles. Schedule your free design consultation.
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

