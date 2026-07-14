<x-layouts.app
    title="Owens Corning TruDefinition Duration Shingle Colors"
    metaDescription="Browse Owens Corning TruDefinition Duration shingle colors. Explore 15 architectural colors with Owens Corning's interactive product widget from Ridgeline Roofing."
    :canonical="route('shingle-colors.owens-corning')"
>
    <div class="relative text-white py-16 sm:py-20 lg:py-24 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ company_cam_url('shingle-colors.hero') }}');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-orange-600/40 via-orange-700/30 to-orange-800/50"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-5">
                <span class="text-sm font-semibold text-orange-200">Shingle Color Gallery</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                Owens Corning
                <span class="block text-yellow-300">Shingle Colors</span>
            </h1>
            <p class="text-base md:text-lg max-w-3xl mx-auto leading-relaxed text-orange-50/95">
                Explore manufacturer color options for one of our most popular architectural shingle lines. Use the interactive tool below to compare granule blends, then schedule a free inspection to see full-size samples in person.
            </p>
        </div>
    </div>

    <div class="py-12 bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-6">
                <div class="flex items-center gap-4 mb-3">
                    <span class="inline-flex h-10 items-center rounded-lg bg-[#e4002b] px-3 text-sm font-bold text-white">Owens Corning</span>
                    <div>
                        <h2 class="text-xl font-bold text-gray-900 dark:text-white">TruDefinition Duration</h2>
                        <p class="text-sm text-gray-600 dark:text-gray-300">15 architectural colors</p>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                    Owens Corning's SureNail technology shingle line with TruDefinition color depth and strong wind performance for residential roofs.
                </p>
            </div>
        </div>
    </div>

    <section class="py-16 bg-white dark:bg-gray-900" aria-labelledby="oc-colors-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 id="oc-colors-heading" class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Owens Corning TruDefinition Duration Colors
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Browse all 15 Duration shingle colors with Owens Corning's official product widget. Tap any color to view shingle and house previews.
                </p>
            </div>

            <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-4 sm:p-6 shadow-xl overflow-hidden">
                <div
                    data-shingle="trudefinition-duration"
                    data-view="shingle"
                    data-layout="row"
                    class="oc_shingle_view"
                ></div>
            </div>
        </div>
    </section>

    <div class="py-16 bg-gray-50 dark:bg-gray-800/50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl border border-orange-200 dark:border-orange-800 bg-orange-50 dark:bg-orange-950/30 p-8 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">See Colors on Your Home</h2>
                <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                    Online tools are a great starting point, but nothing replaces seeing full-size shingle boards against your brick, siding, and trim in natural light. Ridgeline Roofing can help you choose the right Owens Corning color for your tri-state home.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors duration-200 shadow-lg">
                        Schedule Free Inspection
                    </a>
                    <a href="{{ route('services.residential.shingle-replacement') }}" class="bg-white dark:bg-gray-900 text-orange-600 dark:text-orange-400 border border-orange-200 dark:border-orange-700 px-8 py-4 rounded-xl font-bold text-lg transition-colors duration-200">
                        Shingle Replacement Info
                    </a>
                </div>
            </div>

            <p class="text-xs text-gray-500 dark:text-gray-400 text-center mt-6 leading-relaxed">
                Color widgets are provided by Owens Corning. Product availability may vary by region. Before selecting a color, ask to see several full-size shingle samples.
            </p>
        </div>
    </div>

    <script src="https://apis.owenscorning.com/client/widget.js" async></script>
</x-layouts.app>
