<x-layouts.app title="Shingle Roof Repair - Residential">
    <!-- Hero Section -->
    <div class="relative text-white py-24 md:py-32 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/full-shot-man-sitting-roof.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/50 to-blue-800/30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-block bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-bold mb-4">RESIDENTIAL</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Shingle Roof Repair</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-100">
                    Expert repair services to fix damaged, missing, or worn shingles. Protect your home from leaks and extend your roof's lifespan.
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">Why Repair Your Shingle Roof?</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        Timely shingle repairs can prevent costly water damage and extend the life of your roof by years. Our expert team quickly identifies and fixes issues before they become major problems.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Prevent Water Damage</h3>
                                <p class="text-gray-600 dark:text-gray-300">Stop leaks before they cause interior damage to your home</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Cost-Effective Solution</h3>
                                <p class="text-gray-600 dark:text-gray-300">Repairs are significantly less expensive than full replacement</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Extend Roof Lifespan</h3>
                                <p class="text-gray-600 dark:text-gray-300">Regular repairs can add years to your roof's service life</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Same-Day Service Available</h3>
                                <p class="text-gray-600 dark:text-gray-300">Emergency repairs when you need them most</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-700 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Our Repair Process</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">1</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Thorough Inspection</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Identify all damaged or missing shingles</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">2</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Damage Assessment</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Check for underlying deck damage or rot</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">3</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Expert Repair</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Replace shingles with matching materials</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4 font-bold">4</div>
                            <div>
                                <h4 class="font-semibold text-gray-900 dark:text-white mb-1">Quality Check</h4>
                                <p class="text-gray-600 dark:text-gray-300 text-sm">Final inspection to ensure watertight seal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Common Issues Section -->
    <div class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Common Shingle Roof Problems We Fix</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">We handle all types of shingle roof repairs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Missing Shingles</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Wind damage or poor installation can cause shingles to blow off. We replace them with matching materials.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">Quick Fix Available</div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Cracked or Curling Shingles</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Age and weather exposure can cause shingles to crack or curl. We assess and replace affected areas.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">Prevents Leaks</div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Storm Damage</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">Hail, wind, and debris can damage your roof. We work with insurance companies for storm damage claims.</p>
                    <div class="text-blue-600 dark:text-blue-400 font-semibold">Insurance Assistance</div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Need Shingle Roof Repairs?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Don't wait for small problems to become big expenses. Contact us today for a free inspection and repair estimate.
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

