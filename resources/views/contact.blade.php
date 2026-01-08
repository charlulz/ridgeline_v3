<x-layouts.app title="Contact Us">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
                <p class="text-xl max-w-3xl mx-auto">
                    Get in touch for a free consultation and quote. We're here to help with all your roofing needs.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Send Us a Message</h2>
                    <livewire:contact-form />
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Get In Touch</h2>
                    
                    <div class="space-y-6">
                        <!-- Phone -->
                        <div class="flex items-start">
                            <div class="h-12 w-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Phone</h3>
                                <p class="text-gray-600 dark:text-gray-300">(304) 381-1122</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Mon-Fri 8AM-6PM, Sat 9AM-4PM</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="h-12 w-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Email</h3>
                                <p class="text-gray-600 dark:text-gray-300">info@ridgelineroofing.com</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">We'll respond within 24 hours</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start">
                            <div class="h-12 w-12 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Address</h3>
                                <p class="text-gray-600 dark:text-gray-300">
                                    1100 Our Lady's Way, Suite 208<br>
                                    Ashland, KY 41101
                                </p>
                            </div>
                        </div>

                        <!-- Emergency -->
                        <div class="flex items-start">
                            <div class="h-12 w-12 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Emergency Service</h3>
                                <p class="text-gray-600 dark:text-gray-300">(304) 381-1122</p>
                                <p class="text-sm text-gray-500 dark:text-gray-400">24/7 emergency repairs</p>
                            </div>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="mt-8 p-6 bg-gray-50 dark:bg-gray-800 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Business Hours</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600 dark:text-gray-300">Monday - Friday</span>
                                <span class="text-gray-900 dark:text-white font-medium">8:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 dark:text-gray-300">Saturday</span>
                                <span class="text-gray-900 dark:text-white font-medium">9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 dark:text-gray-300">Sunday</span>
                                <span class="text-gray-900 dark:text-white font-medium">Closed</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600 dark:text-gray-300">Emergency Service</span>
                                <span class="text-gray-900 dark:text-white font-medium">24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Areas -->
    <div class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Service Areas</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    We proudly serve the following areas and surrounding communities
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-700 rounded-lg p-6 text-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Ashland, KY</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Complete roofing services</p>
                </div>
                
                <div class="bg-white dark:bg-gray-700 rounded-lg p-6 text-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Neighboring City</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Residential & commercial</p>
                </div>
                
                <div class="bg-white dark:bg-gray-700 rounded-lg p-6 text-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Metro Area</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Emergency services available</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Common questions about our roofing services
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">How long does a roof installation take?</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Most residential roof installations take 1-3 days, depending on the size and complexity of the project. 
                        Commercial projects may take longer. We'll provide a detailed timeline during your consultation.
                    </p>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Do you offer warranties?</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Yes, we provide comprehensive warranties on all our work. This includes manufacturer warranties on materials 
                        and our workmanship warranty. Specific terms vary by project and materials used.
                    </p>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">What should I do if I have a roof emergency?</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Call our emergency line at (555) 123-4567 immediately. We provide 24/7 emergency services for urgent 
                        roofing issues like leaks, storm damage, or structural problems.
                    </p>
                </div>

                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Do you provide free estimates?</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Yes, we offer free, no-obligation estimates for all our services. Our team will visit your property, 
                        assess your needs, and provide a detailed quote with no hidden fees.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
