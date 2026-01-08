<x-layouts.app :title="$post->meta_title ?? $post->title">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('blog.index') }}" class="text-blue-200 hover:text-white transition-colors">
                    ← Back to Blog
                </a>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $post->title }}</h1>
            <div class="flex items-center text-blue-200">
                <span>{{ $post->published_at->format('F j, Y') }}</span>
                <span class="mx-2">•</span>
                <span>{{ $post->views }} views</span>
            </div>
        </div>
    </div>

    <!-- Article Content -->
    <article class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($post->featured_image)
                <div class="mb-8">
                    <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full rounded-xl shadow-lg">
                </div>
            @endif

            <div class="prose prose-lg dark:prose-invert max-w-none">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>
    </article>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
        <div class="py-16 bg-gray-50 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-8">Related Articles</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($relatedPosts as $relatedPost)
                        <article class="bg-white dark:bg-gray-700 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                            @if($relatedPost->featured_image)
                                <a href="{{ route('blog.show', $relatedPost) }}">
                                    <img src="{{ $relatedPost->featured_image }}" alt="{{ $relatedPost->title }}" class="w-full h-40 object-cover">
                                </a>
                            @endif
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                    <a href="{{ route('blog.show', $relatedPost) }}" class="hover:text-blue-600 dark:hover:text-blue-400">
                                        {{ $relatedPost->title }}
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">{{ $relatedPost->published_at->format('F j, Y') }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!-- CTA Section -->
    <div class="py-16 bg-blue-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Need Professional Roofing Help?</h2>
            <p class="text-xl mb-8">
                Get a free inspection and expert advice from our certified roofing professionals.
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

