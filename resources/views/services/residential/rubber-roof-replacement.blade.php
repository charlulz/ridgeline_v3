<x-layouts.app title="Rubber Roof Replacement - Residential">
    <!-- Hero Section -->
    <div class="relative text-white py-24 md:py-32 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/full-shot-man-sitting-roof.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-green-900/50 to-green-800/30"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-block bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-bold mb-4">RESIDENTIAL</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Rubber Roof Replacement</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 text-gray-100">
                    Energy-efficient EPDM rubber roofing systems perfect for low-slope and flat roof applications. Superior weather resistance and longevity.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200 shadow-lg">
                        Get Free Estimate
                    </a>
                    <a href="tel:3043811122" class="bg-white text-green-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200 shadow-lg">
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">Why Choose EPDM Rubber Roofing?</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">
                        EPDM (Ethylene Propylene Diene Monomer) rubber roofing is an excellent choice for flat and low-slope roofs. It offers exceptional durability, energy efficiency, and low maintenance requirements.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-600 dark:text-green-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">30-50 Year Lifespan</h3>
                                <p class="text-gray-600 dark:text-gray-300">One of the longest-lasting roofing materials available</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-600 dark:text-green-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Excellent Weather Resistance</h3>
                                <p class="text-gray-600 dark:text-gray-300">Resistant to UV rays, extreme temperatures, and storm damage</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-600 dark:text-green-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Energy Efficient</h3>
                                <p class="text-gray-600 dark:text-gray-300">Reflects sunlight, reducing cooling costs in summer</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-green-600 dark:text-green-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Seamless Installation</h3>
                                <p class="text-gray-600 dark:text-gray-300">Fewer seams mean fewer potential leak points</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-green-100 dark:from-gray-800 dark:to-gray-700 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Perfect For:</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Flat roofs</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Low-slope roofs (under 2:12 pitch)</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Garages and additions</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Porches and covered patios</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-600 dark:text-green-400 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300">Mudrooms and entryways</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Installation Process -->
    <div class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Professional Installation Process</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">We ensure every EPDM installation is done to perfection</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="h-16 w-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Surface Preparation</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Thorough cleaning and repair of existing roof deck</p>
                </div>

                <div class="text-center">
                    <div class="h-16 w-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Membrane Installation</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Precise EPDM membrane placement and adhesion</p>
                </div>

                <div class="text-center">
                    <div class="h-16 w-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Seam Sealing</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Professional seam bonding for watertight seal</p>
                </div>

                <div class="text-center">
                    <div class="h-16 w-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">4</div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Final Inspection</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Quality assurance and warranty activation</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-green-600 to-green-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready for a Rubber Roof Replacement?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Get a free inspection and detailed estimate. Discover why EPDM rubber is the smart choice for flat roofs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-green-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors duration-200">
                    Request Free Estimate
                </a>
                <a href="tel:3043811122" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200">
                    Call (304) 381-1122
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>

