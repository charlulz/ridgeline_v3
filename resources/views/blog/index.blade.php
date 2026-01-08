<x-layouts.app title="Blog - Roofing Tips & News">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Roofing Blog</h1>
                <p class="text-xl max-w-3xl mx-auto">
                    Expert advice, tips, and insights to help you protect and maintain your roof
                </p>
            </div>
        </div>
    </div>

    <!-- Blog Posts -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($posts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($posts as $post)
                        <article class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-200">
                            @if($post->featured_image)
                                <a href="{{ route('blog.show', $post) }}">
                                    <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                                </a>
                            @endif
                            <div class="p-6">
                                <div class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                                    {{ $post->published_at->format('F j, Y') }}
                                </div>
                                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                                    <a href="{{ route('blog.show', $post) }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                        {{ $post->title }}
                                    </a>
                                </h2>
                                @if($post->excerpt)
                                    <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $post->excerpt }}</p>
                                @endif
                                <a href="{{ route('blog.show', $post) }}" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                                    Read More →
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">No Blog Posts Yet</h3>
                    <p class="text-gray-600 dark:text-gray-300">Check back soon for roofing tips and insights!</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Newsletter CTA -->
    <div class="py-16 bg-blue-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Stay Updated</h2>
            <p class="text-xl mb-8">
                Get the latest roofing tips and maintenance advice delivered to your inbox.
            </p>
            <div class="max-w-md mx-auto">
                <form class="flex gap-2">
                    <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-lg text-gray-900">
                    <button type="submit" class="bg-orange-600 hover:bg-orange-700 px-6 py-3 rounded-lg font-bold transition-colors duration-200">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>

