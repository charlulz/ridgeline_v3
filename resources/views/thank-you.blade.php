<x-layouts.app title="Thank You">
    <div class="min-h-screen bg-gradient-to-br from-orange-50 to-orange-100 dark:from-gray-900 dark:to-gray-800 flex items-center py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Success Icon -->
            <div class="mb-8">
                <div class="mx-auto h-24 w-24 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center">
                    <svg class="h-12 w-12 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>

            <!-- Main Message -->
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                Thank You for Your Request!
            </h1>
            
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                We've received your information and one of our roofing experts will contact you within <strong>30 minutes</strong> to discuss your project.
            </p>

            <!-- What Happens Next -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 mb-8 text-left">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">What Happens Next?</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mr-4">
                            <span class="text-orange-600 dark:text-orange-400 font-bold">1</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">We'll Review Your Request</h3>
                            <p class="text-gray-600 dark:text-gray-300">Our team will review your information and prepare for your consultation.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mr-4">
                            <span class="text-orange-600 dark:text-orange-400 font-bold">2</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">We'll Contact You</h3>
                            <p class="text-gray-600 dark:text-gray-300">Expect a call from our team within 30 minutes at the phone number you provided.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-10 w-10 bg-orange-100 dark:bg-orange-900 rounded-full flex items-center justify-center mr-4">
                            <span class="text-orange-600 dark:text-orange-400 font-bold">3</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Free Inspection Scheduled</h3>
                            <p class="text-gray-600 dark:text-gray-300">We'll schedule a convenient time for your free roof inspection and consultation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emergency Contact -->
            <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl p-6 mb-8">
                <div class="flex items-center justify-center mb-4">
                    <svg class="h-6 w-6 text-red-600 dark:text-red-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-red-900 dark:text-red-200">Emergency Situation?</h3>
                </div>
                <p class="text-red-800 dark:text-red-300 mb-4">If you have an urgent roofing emergency, don't wait for our call.</p>
                <a href="tel:3043811122" class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-bold transition-colors duration-200">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    Call Now: (304) 381-1122
                </a>
            </div>

            <!-- Additional Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="bg-white dark:bg-gray-800 text-orange-600 dark:text-orange-400 border-2 border-orange-600 dark:border-orange-400 px-8 py-3 rounded-lg font-semibold hover:bg-orange-50 dark:hover:bg-gray-700 transition-colors duration-200">
                    Return to Home
                </a>
                <a href="{{ route('services') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-200">
                    View Our Services
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-2">15+</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Years Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-2">200+</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Happy Clients</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-2">24/7</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Emergency Service</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

