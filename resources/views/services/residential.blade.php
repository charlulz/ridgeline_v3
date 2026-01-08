<x-layouts.app title="Residential Roofing Services">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Residential Roofing Services</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8">
                    Protect your home with expert residential roofing solutions. Quality materials, professional installation, and lasting results.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200">
                        Get Free Estimate
                    </a>
                    <a href="tel:3043811122" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200">
                        Call (304) 381-1122
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Overview -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Our Residential Services</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Comprehensive roofing solutions for every home in Kentucky, West Virginia, and Ohio
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Shingle Roof Replacement -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-700 rounded-xl p-8 hover:shadow-xl transition-shadow duration-200">
                    <div class="h-16 w-16 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Shingle Roof Replacement</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Durable asphalt shingle roofs that protect your home for decades. Available in a variety of colors and styles.
                    </p>
                    <a href="{{ route('services.residential.shingle-replacement') }}" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                        Learn More →
                    </a>
                </div>

                <!-- Rubber Roof Replacement -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-700 rounded-xl p-8 hover:shadow-xl transition-shadow duration-200">
                    <div class="h-16 w-16 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Rubber Roof Replacement</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Energy-efficient EPDM rubber roofing systems perfect for low-slope and flat roof applications.
                    </p>
                    <a href="{{ route('services.residential.rubber-replacement') }}" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                        Learn More →
                    </a>
                </div>

                <!-- Rolled Roofing -->
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-700 rounded-xl p-8 hover:shadow-xl transition-shadow duration-200">
                    <div class="h-16 w-16 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Rolled Roofing Replacement</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Cost-effective rolled roofing solutions for low-slope residential applications. Quick installation, reliable protection.
                    </p>
                    <a href="{{ route('services.residential.rolled-roofing-replacement') }}" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                        Learn More →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Why Choose Ridgeline for Residential Roofing?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="h-16 w-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600 dark:text-blue-400">15+</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Years Experience</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Serving homeowners across the tri-state area</p>
                </div>

                <div class="text-center">
                    <div class="h-16 w-16 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Licensed & Insured</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Full protection for your peace of mind</p>
                </div>

                <div class="text-center">
                    <div class="h-16 w-16 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-orange-600 dark:text-orange-400">200+</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Happy Clients</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Satisfied homeowners across the region</p>
                </div>

                <div class="text-center">
                    <div class="h-16 w-16 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-purple-600 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Warranty Protection</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Comprehensive warranties on all work</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Upgrade Your Home's Roof?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Get a free inspection and estimate today. No obligation, just honest expert advice.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors duration-200">
                    Request Free Inspection
                </a>
                <a href="tel:3043811122" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200">
                    Call (304) 381-1122
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>

