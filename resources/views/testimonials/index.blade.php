<x-layouts.app title="Customer Testimonials">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">What Our Customers Say</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8">
                    Real stories from real customers who trusted Ridgeline Roofing with their most important asset
                </p>
                <div class="flex items-center justify-center space-x-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-yellow-300">4.9★</div>
                        <div class="text-sm text-gray-300">Google Rating</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-yellow-300">200+</div>
                        <div class="text-sm text-gray-300">Happy Clients</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-yellow-300">100%</div>
                        <div class="text-sm text-gray-300">Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Testimonial -->
    @if($featured)
        <div class="py-16 bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gradient-to-r from-orange-50 to-orange-100 dark:from-gray-800 dark:to-gray-700 rounded-3xl p-12">
                    <div class="flex items-center mb-6">
                        @for($i = 1; $i <= $featured->rating; $i++)
                            <svg class="h-6 w-6 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <blockquote class="text-2xl md:text-3xl font-medium text-gray-900 dark:text-white mb-8 leading-relaxed">
                        "{{ $featured->content }}"
                    </blockquote>
                    <div class="flex items-center">
                        @if($featured->photo)
                            <img src="{{ $featured->photo }}" alt="{{ $featured->name }}" class="h-16 w-16 rounded-full mr-4">
                        @else
                            <div class="h-16 w-16 rounded-full bg-orange-600 flex items-center justify-center text-white text-xl font-bold mr-4">
                                {{ substr($featured->name, 0, 1) }}
                            </div>
                        @endif
                        <div>
                            <div class="font-bold text-gray-900 dark:text-white text-lg">{{ $featured->name }}</div>
                            @if($featured->location)
                                <div class="text-gray-600 dark:text-gray-300">{{ $featured->location }}</div>
                            @endif
                            @if($featured->source_url)
                                <a href="{{ $featured->source_url }}" target="_blank" class="text-blue-600 dark:text-blue-400 text-sm hover:underline">
                                    View on {{ ucfirst($featured->source) }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- All Testimonials -->
    <div class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">More Customer Reviews</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">See what other homeowners are saying</p>
            </div>

            @if($testimonials->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($testimonials as $testimonial)
                        <div class="bg-white dark:bg-gray-700 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-200">
                            <div class="flex items-center mb-4">
                                @for($i = 1; $i <= $testimonial->rating; $i++)
                                    <svg class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <blockquote class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                                "{{ $testimonial->content }}"
                            </blockquote>
                            <div class="flex items-center">
                                @if($testimonial->photo)
                                    <img src="{{ $testimonial->photo }}" alt="{{ $testimonial->name }}" class="h-12 w-12 rounded-full mr-3">
                                @else
                                    <div class="h-12 w-12 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold mr-3">
                                        {{ substr($testimonial->name, 0, 1) }}
                                    </div>
                                @endif
                                <div>
                                    <div class="font-semibold text-gray-900 dark:text-white">{{ $testimonial->name }}</div>
                                    @if($testimonial->location)
                                        <div class="text-sm text-gray-500 dark:text-gray-400">{{ $testimonial->location }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">No Testimonials Yet</h3>
                    <p class="text-gray-600 dark:text-gray-300">Check back soon for customer reviews!</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Trust Indicators -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Why Customers Choose Ridgeline</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-orange-600 dark:text-orange-400 mb-2">15+</div>
                    <div class="text-gray-600 dark:text-gray-300">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-orange-600 dark:text-orange-400 mb-2">200+</div>
                    <div class="text-gray-600 dark:text-gray-300">Happy Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-orange-600 dark:text-orange-400 mb-2">4.9★</div>
                    <div class="text-gray-600 dark:text-gray-300">Average Rating</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-orange-600 dark:text-orange-400 mb-2">100%</div>
                    <div class="text-gray-600 dark:text-gray-300">Satisfaction Rate</div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Join Our Satisfied Customers?</h2>
            <p class="text-xl mb-8">
                Get a free inspection and see why so many homeowners trust Ridgeline Roofing.
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

