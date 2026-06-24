@php
    $faqItems = [
        [
            'question' => 'How long does a roof installation take?',
            'answer' => 'Most residential roof installations take 1-3 days, depending on the size and complexity of the project. Commercial projects may take longer. We\'ll provide a detailed timeline during your consultation and work efficiently to minimize disruption to your daily routine.',
        ],
        [
            'question' => 'Do you offer warranties?',
            'answer' => 'Yes, we provide comprehensive warranties on all our work. This includes manufacturer warranties on materials and our workmanship warranty. Specific terms vary by project and materials used. We\'ll explain all warranty details during your consultation.',
        ],
        [
            'question' => 'What should I do if I have a roof emergency?',
            'answer' => 'Call our emergency line at (304) 381-1122 immediately. We provide 24/7 emergency services for urgent roofing issues like leaks, storm damage, or structural problems. Our emergency response team can typically be on-site within hours.',
        ],
        [
            'question' => 'Do you provide free estimates?',
            'answer' => 'Yes, we offer free, no-obligation estimates for all our services. Our team will visit your property, assess your needs, and provide a detailed quote with no hidden fees. There\'s no pressure to commit - we believe in honest, transparent communication.',
        ],
        [
            'question' => 'Are you licensed and insured?',
            'answer' => 'Yes, Ridgeline Roofing is fully licensed and insured. We carry comprehensive liability insurance and workers\' compensation insurance to protect our clients and team members. We\'re happy to provide proof of insurance upon request.',
        ],
        [
            'question' => 'How do I know if I need a roof replacement or just repairs?',
            'answer' => 'During our free inspection, we\'ll assess your roof\'s condition and provide honest recommendations. Factors we consider include roof age, extent of damage, material condition, and cost-effectiveness. We\'ll explain whether repairs or replacement makes more sense for your situation.',
        ],
        [
            'question' => 'Do you help with insurance claims?',
            'answer' => 'Yes, we assist with insurance claims for storm damage and other covered events. We can help document damage, work directly with your insurance company, and ensure you receive the coverage you deserve. Our goal is to make the claims process as smooth as possible.',
        ],
        [
            'question' => 'What areas do you serve?',
            'answer' => 'We proudly serve the tri-state area across Kentucky, West Virginia, and Ohio. Our primary markets include Ashland, KY; Huntington, WV; and Hurricane, WV, along with Boyd County, Cabell County, Putnam County, and surrounding communities.',
        ],
        [
            'question' => 'What payment options do you offer?',
            'answer' => 'We accept various payment methods including cash, checks, and major credit cards. For larger projects, we can discuss payment plans. We\'ll provide clear payment terms upfront with no surprise fees.',
        ],
        [
            'question' => 'How often should I have my roof inspected?',
            'answer' => 'We recommend annual roof inspections to catch potential issues early. After severe weather events, it\'s also wise to have an inspection. Regular maintenance can extend your roof\'s lifespan and prevent costly emergency repairs.',
        ],
    ];

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($faqItems)->map(fn (array $faq) => [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ])->all(),
    ];
    $faqSchemaJson = json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
@endphp

<x-layouts.app
    title="Frequently Asked Questions"
    metaDescription="Answers to common roofing questions from Ridgeline Roofing, serving Ashland KY, Huntington WV, Hurricane WV, and the tri-state area."
    :canonical="route('faq')"
    :schemaJson="$faqSchemaJson"
>
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-orange-600 to-orange-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Frequently Asked Questions</h1>
                <p class="text-xl max-w-3xl mx-auto">
                    Common questions about our roofing services, processes, and warranties
                </p>
            </div>
        </div>
    </div>

    <!-- FAQ Content -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-6">
                @foreach($faqItems as $faq)
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                            {{ $faq['question'] }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            @if($faq['question'] === 'What should I do if I have a roof emergency?')
                                Call our emergency line at <a href="tel:3043811122" class="text-orange-600 dark:text-orange-400 font-semibold hover:underline">(304) 381-1122</a> immediately.
                                We provide 24/7 emergency services for urgent roofing issues like leaks, storm damage, or structural problems.
                                Our emergency response team can typically be on-site within hours.
                            @elseif($faq['question'] === 'What areas do you serve?')
                                We proudly serve the tri-state area across Kentucky, West Virginia, and Ohio. Our primary markets include
                                <a href="{{ route('service-areas.show', ['slug' => 'ashland-ky']) }}" class="text-orange-600 dark:text-orange-400 font-semibold hover:underline">Ashland, KY</a>;
                                <a href="{{ route('service-areas.show', ['slug' => 'huntington-wv']) }}" class="text-orange-600 dark:text-orange-400 font-semibold hover:underline">Huntington, WV</a>; and
                                <a href="{{ route('service-areas.show', ['slug' => 'hurricane-wv']) }}" class="text-orange-600 dark:text-orange-400 font-semibold hover:underline">Hurricane, WV</a>,
                                along with Boyd County, Cabell County, Putnam County, and surrounding communities.
                            @else
                                {{ $faq['answer'] }}
                            @endif
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Still Have Questions CTA -->
    <div class="py-16 bg-orange-600 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Still Have Questions?</h2>
            <p class="text-xl mb-8">
                Our team is here to help. Contact us for personalized answers to your roofing questions.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-orange-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition-colors duration-200">
                    Contact Us
                </a>
                <a href="tel:3043811122" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-colors duration-200">
                    Call (304) 381-1122
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>

