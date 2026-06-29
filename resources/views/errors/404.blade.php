<x-layouts.app
    title="Page Not Found"
    metaDescription="This page could not be found. Head back to Ridgeline Roofing for roofing services, inspections, and estimates across the tri-state area."
    robots="noindex, nofollow"
>
    <div class="relative min-h-[70vh] flex items-center overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white py-20">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;0.15&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-br from-orange-600/20 via-transparent to-orange-800/30"></div>

        <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-center">
            {{-- Missing shingle roof illustration --}}
            <div class="mb-10 flex justify-center" aria-hidden="true">
                <svg viewBox="0 0 320 140" class="w-full max-w-md h-auto drop-shadow-2xl" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 90 L160 25 L310 90 Z" fill="#374151" stroke="#4B5563" stroke-width="2"/>
                    <path d="M35 88 L85 58 L135 88 Z" fill="#6B7280" stroke="#9CA3AF" stroke-width="1.5"/>
                    <path d="M95 88 L145 58 L195 88 Z" fill="#6B7280" stroke="#9CA3AF" stroke-width="1.5"/>
                    <path d="M155 88 L205 58 L255 88 Z" fill="#F97316" stroke="#FB923C" stroke-width="1.5" opacity="0.9"/>
                    <path d="M215 88 L265 58 L315 88 Z" fill="#6B7280" stroke="#9CA3AF" stroke-width="1.5"/>
                    <rect x="118" y="72" width="44" height="28" rx="2" fill="#1F2937" stroke="#FBBF24" stroke-width="2" stroke-dasharray="6 4"/>
                    <text x="140" y="92" fill="#FBBF24" font-size="14" font-weight="bold" font-family="system-ui, sans-serif">404</text>
                    <line x1="50" y1="95" x2="280" y2="95" stroke="#9CA3AF" stroke-width="3"/>
                    <rect x="60" y="95" width="200" height="28" fill="#4B5563"/>
                    <text x="160" y="115" text-anchor="middle" fill="#D1D5DB" font-size="11" font-family="system-ui, sans-serif">shingle not found</text>
                </svg>
            </div>

            <div class="inline-flex items-center bg-orange-600/20 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                <span class="text-sm font-semibold text-orange-200">Error 404 — Page Missing</span>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-5 leading-tight">
                This Page
                <span class="block text-yellow-300">Blew Off the Roof</span>
            </h1>

            <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-4 leading-relaxed">
                We searched high and low — even checked the attic — but the page you&apos;re looking for isn&apos;t here.
                Maybe a strong tri-state wind carried it away.
            </p>

            <p class="text-base text-orange-200/90 mb-10 italic">
                Don&apos;t worry: unlike a missing shingle, this one won&apos;t cause a leak. Let&apos;s get you back on solid ground.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg hover:shadow-xl">
                    Back to Homepage
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-white/10 hover:bg-white/15 border border-white/20 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-200">
                    Request Free Inspection
                </a>
                <a href="tel:3043811122" class="inline-flex items-center justify-center bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-200 shadow-lg">
                    Call (304) 381-1122
                </a>
            </div>

            <div class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-6 sm:p-8 max-w-2xl mx-auto">
                <p class="text-sm uppercase tracking-widest text-orange-200 font-semibold mb-4">Popular destinations</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-left">
                    <a href="{{ route('services') }}" class="rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 px-4 py-3 text-gray-200 hover:text-white transition-colors duration-200">
                        → Our Roofing Services
                    </a>
                    <a href="{{ route('service-areas') }}" class="rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 px-4 py-3 text-gray-200 hover:text-white transition-colors duration-200">
                        → Service Areas
                    </a>
                    <a href="{{ route('shingle-colors') }}" class="rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 px-4 py-3 text-gray-200 hover:text-white transition-colors duration-200">
                        → Browse Shingle Colors
                    </a>
                    <a href="{{ route('financing') }}" class="rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 px-4 py-3 text-gray-200 hover:text-white transition-colors duration-200">
                        → Roof Financing Options
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
