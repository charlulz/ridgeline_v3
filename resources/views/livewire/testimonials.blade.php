<div>
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">What Our Customers Say</h2>
        <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
            Don't just take our word for it - hear from our satisfied customers
        </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($testimonials as $testimonial)
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-200">
                <!-- Rating Stars -->
                <div class="flex items-center mb-4">
                    @for($i = 1; $i <= 5; $i++)
                        <svg class="h-5 w-5 text-yellow-400 {{ $i <= $testimonial['rating'] ? 'fill-current' : 'text-gray-300 dark:text-gray-600' }}" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                </div>
                
                <!-- Testimonial Text -->
                <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                    "{{ $testimonial['text'] }}"
                </p>
                
                <!-- Service Type -->
                <div class="mb-4">
                    <span class="inline-block bg-orange-100 dark:bg-orange-900 text-orange-800 dark:text-orange-200 text-xs px-2 py-1 rounded-full">
                        {{ $testimonial['service'] }}
                    </span>
</div>

                <!-- Customer Info -->
                <div class="border-t border-gray-200 dark:border-gray-600 pt-4">
                    <div class="flex items-center">
                        <div class="h-10 w-10 bg-gray-200 dark:bg-gray-600 rounded-full flex items-center justify-center mr-3">
                            <span class="text-gray-600 dark:text-gray-300 font-semibold text-sm">
                                {{ substr($testimonial['name'], 0, 2) }}
                            </span>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ $testimonial['name'] }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $testimonial['location'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>