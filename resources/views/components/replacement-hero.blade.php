@props([
    'service',
    'description',
    'backgroundImage',
])

@php
    $locations = [
        'ashland' => 'Ashland, KY',
        'grayson' => 'Grayson, KY',
        'olive-hill' => 'Olive Hill, KY',
        'louisa' => 'Louisa, KY',
        'sandy-hook' => 'Sandy Hook, KY',
        'huntington' => 'Huntington, WV',
    ];
    $googleGeoLocations = [
        '1017684' => 'Ashland, KY',
        '1017778' => 'Grayson, KY',
        '1017824' => 'Louisa, KY',
        '1017855' => 'Olive Hill, KY',
        '1017882' => 'Sandy Hook, KY',
        '1028357' => 'Huntington, WV',
    ];
    $requestedLocation = strtolower(trim((string) request()->query('location', '')));
    $googleGeoId = trim((string) request()->query('loc', ''));
    $location = $googleGeoLocations[$googleGeoId]
        ?? $locations[$requestedLocation]
        ?? 'Eastern Kentucky & Huntington';
@endphp

<section class="relative overflow-hidden bg-gray-950 text-white">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $backgroundImage }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/75 to-black/45"></div>

    <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-16 sm:px-6 md:py-24 lg:grid-cols-[1.2fr_.8fr] lg:items-center lg:px-8">
        <div>
            <span class="mb-4 inline-flex rounded-full bg-orange-600 px-4 py-1 text-sm font-bold">LOCAL RESIDENTIAL ROOFING</span>
            <h1 class="mb-5 text-4xl font-bold leading-tight md:text-5xl lg:text-6xl">{{ $service }} in {{ $location }}</h1>
            <p class="mb-7 max-w-3xl text-lg text-gray-100 md:text-xl">{{ $description }}</p>

            <div class="mb-6 flex flex-col gap-3 sm:flex-row">
                <a href="tel:3043811122" class="rounded-lg bg-orange-600 px-7 py-4 text-center text-lg font-bold text-white shadow-lg transition hover:bg-orange-700">
                    Call 304-381-1122 for a Free Inspection
                </a>
                <a href="#request-callback" class="rounded-lg border-2 border-white bg-white/10 px-7 py-4 text-center text-lg font-bold text-white transition hover:bg-white hover:text-gray-900">
                    Request a Callback
                </a>
            </div>

            <p class="text-sm font-medium text-orange-100">Financing options available • No-obligation inspection • Phones answered 24/7</p>
        </div>

        <div id="request-callback" class="rounded-2xl bg-white p-6 text-gray-900 shadow-2xl md:p-8">
            <h2 class="text-2xl font-bold">Get Your Free Roof Inspection</h2>
            <p class="mt-2 mb-5 text-sm text-gray-600">Leave your number and Ridgeline will call to schedule your inspection.</p>
            <livewire:replacement-callback-form :service="$service" />
        </div>
    </div>
</section>

<section aria-label="Why homeowners choose Ridgeline" class="border-b border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-900">
    <div class="mx-auto grid max-w-7xl grid-cols-2 gap-4 px-4 py-5 text-center text-sm font-bold text-gray-800 dark:text-gray-100 sm:px-6 md:grid-cols-5 lg:px-8">
        <div>✓ Licensed &amp; Insured</div>
        <div>✓ 20+ Years' Experience</div>
        <div>✓ GAF Certified</div>
        <div>✓ Owens Corning Options</div>
        <div>✓ Financing Available</div>
    </div>
</section>
