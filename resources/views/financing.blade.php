@php
    $heroImage = company_cam_url('financing.hero');
    $projectImage = company_cam_url('financing.sidebar');
@endphp

<x-layouts.app
    title="Roof Financing Options"
    metaDescription="Finance your roof replacement or repair with flexible payment options through GoodLeap and Ridgeline Roofing. Soft credit check, fast decisions, and simple online application."
    :canonical="route('financing')"
    robots="noindex, nofollow"
>
    {{-- Hero --}}
    <div class="relative text-white overflow-hidden py-16 sm:py-20 lg:py-24 lg:min-h-[72vh] flex items-center">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105" style="background-image: url('{{ $heroImage }}');"></div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-orange-600/45 via-orange-700/35 to-orange-900/55"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center bg-orange-600/25 border border-orange-400/30 rounded-full px-4 py-2 mb-6">
                        <svg class="h-4 w-4 text-yellow-300 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"/>
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-semibold text-orange-100">Flexible Roof Financing</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-5 leading-tight">
                        Finance Your
                        <span class="block text-yellow-300">Roof Project</span>
                    </h1>

                    <p class="text-base md:text-lg mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed text-orange-50/95">
                        A new roof is a major investment. Ridgeline Roofing partners with GoodLeap so you can explore payment options online, compare plans, and move forward with confidence — without delaying necessary repairs or replacement.
                    </p>

                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm md:text-base text-gray-100/95 mb-8 max-w-2xl mx-auto lg:mx-0">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Soft credit check</strong> until funding</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Decisions in minutes</strong></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>Flexible monthly payments</strong></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white/10 border border-white/15">
                                <svg class="h-4 w-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                            <span><strong>No home equity required</strong></span>
                        </li>
                    </ul>

                    <div class="flex flex-col sm:flex-row gap-3 items-center justify-center lg:justify-start">
                        <a
                            href="{{ $goodleapApplicationUrl }}"
                            class="w-full sm:w-auto inline-flex items-center justify-center bg-[#00a651] hover:bg-[#008f46] text-white px-8 py-4 rounded-xl font-bold text-lg uppercase tracking-wide transition-all duration-200 shadow-lg hover:shadow-xl"
                        >
                            Get Started
                        </a>
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto inline-flex items-center justify-center bg-white/10 hover:bg-white/15 border border-white/20 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-200">
                            Request Free Inspection
                        </a>
                    </div>
                </div>

                <div class="relative hidden lg:block">
                    <div class="rounded-3xl border border-white/20 bg-white/10 backdrop-blur-sm p-8 shadow-2xl">
                        <div class="text-xs uppercase tracking-widest text-orange-200 font-semibold mb-3">Financing Partner</div>
                        <img src="{{ asset('img/goodleap-logo.png') }}" alt="GoodLeap" class="h-12 w-auto mb-6 brightness-0 invert">
                        <p class="text-gray-100 leading-relaxed mb-6">
                            Check your options through our secure GoodLeap application portal. Review available loan products, see estimated monthly payments, and apply online in just a few minutes.
                        </p>
                        <div class="grid grid-cols-3 gap-4 pt-6 border-t border-white/15 text-center">
                            <div>
                                <div class="text-2xl font-bold text-yellow-300">3</div>
                                <div class="text-xs text-orange-100 mt-1">Loan options shown</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-yellow-300">Soft</div>
                                <div class="text-xs text-orange-100 mt-1">Credit check</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-yellow-300">Fast</div>
                                <div class="text-xs text-orange-100 mt-1">Online application</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- GoodLeap approved application block --}}
    <section class="py-16 sm:py-20 bg-gray-50 dark:bg-gray-800/50" aria-labelledby="goodleap-application-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 id="goodleap-application-heading" class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Apply Through GoodLeap
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Start your financing application below. GoodLeap hosts the secure application and payment estimate tools for Ridgeline Roofing customers.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 overflow-hidden rounded-3xl border border-gray-200 dark:border-gray-700 shadow-2xl bg-white dark:bg-gray-900">
                <div class="relative min-h-[300px] lg:min-h-[480px]">
                    <img
                        src="{{ $projectImage }}"
                        alt="Roofing project financed through Ridgeline Roofing"
                        class="absolute inset-0 h-full w-full object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-black/20"></div>
                </div>

                <div class="p-8 sm:p-10 lg:p-12 flex flex-col justify-center">
                    <img
                        src="{{ asset('img/goodleap-logo.png') }}"
                        alt="GoodLeap"
                        class="h-12 sm:h-14 w-auto mb-8"
                    >

                    <p class="text-lg sm:text-xl leading-relaxed text-gray-800 dark:text-gray-200 mb-10">
                        We have partnered with <strong>GoodLeap</strong> to offer flexible payment options for your project. GoodLeap uses a <strong>soft credit check until funding</strong> and the <strong>highest score from all 3 bureaus</strong> to see if you qualify. It also takes just a few minutes to get started.
                    </p>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Secure application hosted by GoodLeap</p>
                        <a
                            href="{{ $goodleapApplicationUrl }}"
                            class="inline-flex items-center justify-center bg-[#00a651] hover:bg-[#008f46] text-white px-8 py-4 rounded-xl font-bold text-lg uppercase tracking-wide transition-all duration-200 shadow-lg hover:shadow-xl"
                        >
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefits --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Why Homeowners Choose Financing</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Spread the cost of a quality roof over manageable monthly payments instead of putting off critical work.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                @foreach([
                    ['title' => 'Protect Your Home Sooner', 'body' => 'Address leaks, storm damage, and aging shingles now instead of waiting until small problems become expensive repairs.', 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                    ['title' => 'Predictable Monthly Payments', 'body' => 'Review loan options and estimated monthly payments before you commit, so you can choose a plan that fits your budget.', 'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Simple Online Process', 'body' => 'Complete the application from your phone or computer. GoodLeap returns approval results quickly so you can plan your project timeline.', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ['title' => 'Work With a Local Contractor', 'body' => 'Ridgeline Roofing handles the roof work from inspection to completion while GoodLeap manages the financing application process.', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                ] as $benefit)
                    <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-7 shadow-sm hover:shadow-lg transition-shadow duration-200">
                        <div class="h-12 w-12 rounded-xl bg-orange-100 dark:bg-orange-900/40 flex items-center justify-center mb-5">
                            <svg class="h-6 w-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $benefit['icon'] }}"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">{{ $benefit['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">{{ $benefit['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- How it works --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">How Financing Works</h2>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">Three straightforward steps from application to roof installation.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                    ['step' => '1', 'title' => 'Apply Online', 'body' => 'Click Get Started to open the secure GoodLeap application. Enter your information and review available loan products with estimated monthly payments.'],
                    ['step' => '2', 'title' => 'Choose Your Plan', 'body' => 'Compare up to three financing options and select the monthly payment and term that works best for your project budget.'],
                    ['step' => '3', 'title' => 'Schedule Your Roof Work', 'body' => 'Once approved, contact Ridgeline Roofing to schedule your inspection, finalize your project scope, and get your new roof installed.'],
                ] as $item)
                    <div class="relative rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-8">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-full bg-orange-600 text-white text-xl font-bold mb-5">{{ $item['step'] }}</div>
                        <h3 class="text-2xl font-bold mb-3">{{ $item['title'] }}</h3>
                        <p class="text-gray-300 leading-relaxed">{{ $item['body'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- What you can finance --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-6">What You Can Finance</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        Financing can help with a wide range of residential and commercial roofing needs across the tri-state area.
                    </p>
                    <ul class="space-y-4">
                        @foreach([
                            'Full shingle roof replacement',
                            'Metal roof replacement',
                            'Roof repair and storm damage restoration',
                            'Commercial flat roof projects',
                            'Gutters, siding, and related exterior work',
                        ] as $item)
                            <li class="flex items-start gap-3">
                                <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-orange-100 dark:bg-orange-900/40">
                                    <svg class="h-4 w-4 text-orange-600 dark:text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </span>
                                <span class="text-gray-700 dark:text-gray-300 text-lg">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ company_cam_url('financing.grid_1') }}" alt="{{ company_cam_alt('financing.grid_1') }}" class="rounded-2xl shadow-lg object-cover h-48 w-full">
                    <img src="{{ company_cam_url('financing.grid_2') }}" alt="{{ company_cam_alt('financing.grid_2') }}" class="rounded-2xl shadow-lg object-cover h-48 w-full mt-8">
                    <img src="{{ company_cam_url('financing.grid_3') }}" alt="{{ company_cam_alt('financing.grid_3') }}" class="rounded-2xl shadow-lg object-cover h-48 w-full -mt-8">
                    <img src="{{ company_cam_url('financing.grid_4') }}" alt="{{ company_cam_alt('financing.grid_4') }}" class="rounded-2xl shadow-lg object-cover h-48 w-full">
                </div>
            </div>
        </div>
    </section>

    {{-- Trust --}}
    <section class="py-16 bg-gray-50 dark:bg-gray-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-8 sm:p-10 shadow-xl">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                    <div class="lg:col-span-2">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-4">Quality Roofing + Trusted Financing</h2>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                            Ridgeline Roofing is a GAF-certified contractor serving Ashland, Huntington, Hurricane, and the surrounding tri-state area. We focus on clear scopes, professional installation, and responsive communication from inspection through completion.
                        </p>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            GoodLeap handles the financing application securely on their platform. You get local roofing expertise from our team and a straightforward way to explore payment options online.
                        </p>
                    </div>
                    <div class="flex flex-col items-center lg:items-end gap-6">
                        <img src="{{ asset('img/GAF_logo.png') }}" alt="GAF Certified Contractor" class="h-14 w-auto">
                        <div class="text-center lg:text-right text-sm text-gray-500 dark:text-gray-400">
                            <p>Licensed &amp; Insured</p>
                            <p class="mt-1 font-semibold text-gray-900 dark:text-white">(304) 381-1122</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Financing FAQ</h2>
            </div>

            <div class="space-y-5">
                @foreach([
                    ['q' => 'Does applying affect my credit score?', 'a' => 'GoodLeap uses a soft credit check until funding. That means you can explore your options and review estimated payments before moving forward with a full application process.'],
                    ['q' => 'How long does the application take?', 'a' => 'Most customers can complete the online application in just a few minutes. Approval results are typically returned quickly through the GoodLeap platform.'],
                    ['q' => 'Who provides the financing?', 'a' => 'Financing is provided through GoodLeap, a leading home improvement financing provider. Ridgeline Roofing is your local roofing contractor for the installation work.'],
                    ['q' => 'What happens after I am approved?', 'a' => 'Contact Ridgeline Roofing to schedule your free inspection, review your project scope, and coordinate installation timing once your financing plan is in place.'],
                    ['q' => 'Can I finance storm damage repairs?', 'a' => 'Yes. Financing may be available for qualifying roof repair and replacement projects, including work related to storm damage. Contact us to discuss your specific situation.'],
                ] as $faq)
                    <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-6">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">{{ $faq['q'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">{{ $faq['a'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <div class="py-20 bg-gradient-to-r from-orange-600 to-orange-700 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-5">Ready to Explore Your Payment Options?</h2>
            <p class="text-lg md:text-xl text-orange-50 mb-8 max-w-3xl mx-auto">
                Start your secure GoodLeap application today, or contact Ridgeline Roofing if you would like a free inspection before you apply.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="{{ $goodleapApplicationUrl }}"
                    class="inline-flex items-center justify-center bg-[#00a651] hover:bg-[#008f46] text-white px-8 py-4 rounded-xl font-bold text-lg uppercase tracking-wide transition-all duration-200 shadow-lg"
                >
                    Get Started
                </a>
                <a href="{{ route('contact') }}" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Request Free Inspection
                </a>
                <a href="tel:3043811122" class="bg-orange-800 hover:bg-orange-900 text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors duration-200 shadow-lg">
                    Call (304) 381-1122
                </a>
            </div>
            <p class="text-xs text-orange-100/80 mt-8 max-w-2xl mx-auto leading-relaxed">
                Financing is subject to credit approval. Loan terms, rates, and availability are determined by GoodLeap. Ridgeline Roofing does not make credit decisions.
            </p>
        </div>
    </div>
</x-layouts.app>
