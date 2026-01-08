<x-layouts.app title="Thank You - Inspection Request">
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-900 dark:to-gray-800 flex items-center py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Success Icon -->
            <div class="mb-8">
                <div class="mx-auto h-24 w-24 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center">
                    <svg class="h-12 w-12 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>

            <!-- Main Message -->
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                Your Free Inspection Request is Confirmed!
            </h1>
            
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 max-w-2xl mx-auto">
                We've received your inspection request. Our team will contact you within <strong>2 hours</strong> to schedule your free roof inspection.
            </p>

            <!-- What's Included -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 mb-8 text-left">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">What's Included in Your Free Inspection?</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Complete Roof Assessment</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Thorough examination of your entire roofing system</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Written Report</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Detailed documentation of findings and recommendations</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Free Estimate</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">No-obligation pricing for any recommended work</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-blue-600 dark:text-blue-400 mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Expert Consultation</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Professional advice from certified roofing experts</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-xl p-6 mb-8">
                <h3 class="text-lg font-semibold text-blue-900 dark:text-blue-200 mb-4">What Happens Next?</h3>
                <p class="text-blue-800 dark:text-blue-300 mb-4">
                    Our scheduling team will call you within 2 hours to find a convenient time for your inspection. 
                    Inspections typically take 30-60 minutes and can be scheduled at your convenience.
                </p>
                <p class="text-sm text-blue-700 dark:text-blue-400">
                    <strong>Phone:</strong> (304) 381-1122 | <strong>Available:</strong> Mon-Fri 8AM-6PM, Sat 9AM-4PM
                </p>
            </div>

            <!-- Additional Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="bg-white dark:bg-gray-800 text-blue-600 dark:text-blue-400 border-2 border-blue-600 dark:border-blue-400 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 dark:hover:bg-gray-700 transition-colors duration-200">
                    Return to Home
                </a>
                <a href="{{ route('services') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-200">
                    View Our Services
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>

