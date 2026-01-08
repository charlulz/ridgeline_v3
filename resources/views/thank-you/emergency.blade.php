<x-layouts.app title="Thank You - Emergency Request">
    <div class="min-h-screen bg-gradient-to-br from-red-50 to-red-100 dark:from-gray-900 dark:to-gray-800 flex items-center py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Urgency Icon -->
            <div class="mb-8">
                <div class="mx-auto h-24 w-24 bg-red-100 dark:bg-red-900 rounded-full flex items-center justify-center animate-pulse">
                    <svg class="h-12 w-12 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
            </div>

            <!-- Main Message -->
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                Emergency Request Received!
            </h1>
            
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                We understand the urgency. Our emergency response team will contact you within <strong>15 minutes</strong> to assess the situation and dispatch help immediately.
            </p>

            <!-- Immediate Actions -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">We're Here to Help - 24/7</h2>
                
                <div class="space-y-6">
                    <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-6">
                        <div class="flex items-center justify-center mb-4">
                            <svg class="h-8 w-8 text-red-600 dark:text-red-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <h3 class="text-xl font-bold text-red-900 dark:text-red-200">Emergency Hotline</h3>
                        </div>
                        <a href="tel:3043811122" class="block text-3xl font-bold text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 transition-colors duration-200 mb-2">
                            (304) 381-1122
                        </a>
                        <p class="text-red-800 dark:text-red-300">Available 24/7 for immediate assistance</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">What We'll Do:</h3>
                            <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Immediate damage assessment
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Temporary protection/tarping
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Same-day emergency response
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">While You Wait:</h3>
                            <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Document damage with photos
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Move valuables away from affected areas
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Contact insurance if needed
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Insurance Note -->
            <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-xl p-6 mb-8">
                <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-200 mb-2">Need Help with Insurance Claims?</h3>
                <p class="text-blue-800 dark:text-blue-300">
                    Our team can help you navigate the insurance claim process. We'll work directly with your insurance company 
                    to ensure you get the coverage you deserve. Mention this when we call you!
                </p>
            </div>

            <!-- Additional Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:3043811122" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-bold transition-colors duration-200 inline-flex items-center justify-center">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    Call Emergency Line Now
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>

