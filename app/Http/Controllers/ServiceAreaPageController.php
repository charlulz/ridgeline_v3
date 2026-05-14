<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Setting;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

class ServiceAreaPageController extends Controller
{
    public function index()
    {
        $cityPages = $this->serviceAreaPages();

        return view('service-areas', [
            'heroImageUrl' => $this->heroImageUrl(),
            'serviceAreas' => $this->stateSummaries($cityPages),
            'cityPages' => $cityPages,
            'schemaJson' => $this->hubSchemaJson($cityPages),
        ]);
    }

    public function show(string $slug)
    {
        $cityPage = $this->findCityPage($slug);

        abort_if($cityPage === null, 404);

        $canonical = route('service-areas.show', ['slug' => $cityPage['slug']]);
        $metaDescription = $this->cityMetaDescription($cityPage);

        return view('service-areas.show', [
            'heroImageUrl' => $this->heroImageUrl(),
            'cityPage' => $cityPage,
            'canonical' => $canonical,
            'metaDescription' => $metaDescription,
            'schemaJson' => $this->citySchemaJson($cityPage, $canonical, $metaDescription),
            'residentialServices' => $this->residentialServices(),
            'commercialServices' => $this->commercialServices(),
        ]);
    }

    public function sitemap()
    {
        $staticRouteNames = [
            'home',
            'about',
            'services',
            'services.residential',
            'services.commercial',
            'services.residential.shingle-replacement',
            'services.residential.rubber-replacement',
            'services.residential.rolled-roofing-replacement',
            'services.residential.metal-replacement',
            'services.residential.designer-shingle-replacement',
            'services.residential.shingle-repair',
            'services.residential.rubber-repair',
            'services.residential.metal-repair',
            'services.residential.seamless-gutters',
            'services.residential.chimney-flashing',
            'services.residential.siding',
            'services.residential.skylights',
            'services.commercial.shingle-replacement',
            'services.commercial.flat-replacement',
            'services.commercial.metal-replacement',
            'services.commercial.shingle-repair',
            'services.commercial.rubber-repair',
            'services.commercial.metal-repair',
            'services.commercial.gutters',
            'services.commercial.roof-deck',
            'services.commercial.siding',
            'blog.index',
            'testimonials.index',
            'faq',
            'service-areas',
            'contact',
        ];

        $urls = collect($staticRouteNames)
            ->map(fn (string $routeName) => ['loc' => route($routeName)])
            ->merge(
                $this->serviceAreaPages()->map(fn (array $cityPage) => [
                    'loc' => route('service-areas.show', ['slug' => $cityPage['slug']]),
                ])
            )
            ->merge(
                BlogPost::published()
                    ->get(['slug', 'updated_at'])
                    ->map(fn (BlogPost $post) => [
                        'loc' => route('blog.show', ['post' => $post->slug]),
                        'lastmod' => optional($post->updated_at)->toAtomString(),
                    ])
            )
            ->values();

        return response()
            ->view('sitemap', ['urls' => $urls], Response::HTTP_OK)
            ->header('Content-Type', 'application/xml');
    }

    private function serviceAreaPages(): Collection
    {
        return collect(config('service_areas.cities', []))
            ->sortBy('rank')
            ->values();
    }

    private function stateSummaries(Collection $cityPages): Collection
    {
        $stateConfig = collect(config('service_areas.states', []));

        return $cityPages
            ->groupBy('state_abbr')
            ->map(function (Collection $cities, string $stateAbbr) use ($stateConfig) {
                $config = $stateConfig->get($stateAbbr, []);

                return [
                    'state' => $config['state'] ?? $cities->first()['state'],
                    'abbr' => $stateAbbr,
                    'headline' => $config['headline'] ?? '',
                    'cities' => $cities->pluck('city')->all(),
                ];
            })
            ->sortBy(fn (array $state) => array_search($state['abbr'], ['WV', 'KY', 'OH'], true))
            ->values();
    }

    private function findCityPage(string $slug): ?array
    {
        $cityPage = config("service_areas.cities.{$slug}");

        return is_array($cityPage) ? $cityPage : null;
    }

    private function heroImageUrl(): string
    {
        $heroImage = Setting::getHeroImage();

        if (empty($heroImage)) {
            return asset('img/roof-replacement-worker.jpg');
        }

        if (str_starts_with($heroImage, 'http')) {
            return $heroImage;
        }

        if (str_starts_with($heroImage, 'hero')) {
            return asset($heroImage);
        }

        return asset('storage/' . ltrim($heroImage, '/'));
    }

    private function residentialServices(): array
    {
        return [
            [
                'label' => 'Shingle Roof Replacement',
                'description' => 'Architectural shingles and premium replacement systems for long-term curb appeal and weather protection.',
                'route' => route('services.residential.shingle-replacement'),
            ],
            [
                'label' => 'Metal Roof Replacement',
                'description' => 'Long-lasting metal roofing solutions for homeowners who want durability, efficiency, and low maintenance.',
                'route' => route('services.residential.metal-replacement'),
            ],
            [
                'label' => 'Roof Repair & Storm Response',
                'description' => 'Leak diagnostics, shingle repair, metal roof repair, and fast response after storms move through the area.',
                'route' => route('services.residential.shingle-repair'),
            ],
        ];
    }

    private function commercialServices(): array
    {
        return [
            [
                'label' => 'Commercial Flat Roofing',
                'description' => 'EPDM-focused commercial flat roof replacement and repair for offices, retail, and industrial properties.',
                'route' => route('services.commercial.flat-replacement'),
            ],
            [
                'label' => 'Commercial Metal Roofing',
                'description' => 'Durable standing seam and panel systems built for long service life and dependable weather performance.',
                'route' => route('services.commercial.metal-replacement'),
            ],
            [
                'label' => 'Maintenance & Repairs',
                'description' => 'Targeted commercial roofing repairs that help protect operations, inventory, and long-term roof value.',
                'route' => route('services.commercial.shingle-repair'),
            ],
        ];
    }

    private function cityMetaDescription(array $cityPage): string
    {
        $nearbyAreas = implode(', ', array_slice($cityPage['nearby_areas'], 0, 3));

        return sprintf(
            'Ridgeline Roofing provides residential and commercial roofing services in %s, %s. Get roof repair, roof replacement, storm damage service, and free inspections in %s and nearby areas like %s.',
            $cityPage['city'],
            $cityPage['state_abbr'],
            $cityPage['city'],
            $nearbyAreas
        );
    }

    private function hubSchemaJson(Collection $cityPages): string
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'RoofingContractor',
            'name' => 'Ridgeline Roofing',
            'url' => route('service-areas'),
            'telephone' => '+1-304-381-1122',
            'areaServed' => $cityPages->map(fn (array $cityPage) => [
                '@type' => 'City',
                'name' => $cityPage['city'],
                'addressRegion' => $cityPage['state_abbr'],
            ])->all(),
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    private function citySchemaJson(array $cityPage, string $canonical, string $metaDescription): string
    {
        $locationLabel = "{$cityPage['city']}, {$cityPage['state_abbr']}";

        $schema = [
            [
                '@context' => 'https://schema.org',
                '@type' => 'RoofingContractor',
                'name' => "Ridgeline Roofing - {$locationLabel}",
                'url' => $canonical,
                'telephone' => '+1-304-381-1122',
                'description' => $metaDescription,
                'areaServed' => [
                    [
                        '@type' => 'City',
                        'name' => $cityPage['city'],
                        'addressRegion' => $cityPage['state_abbr'],
                    ],
                ],
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'Service',
                'name' => "Roofing Services in {$locationLabel}",
                'serviceType' => 'Residential and commercial roofing',
                'provider' => [
                    '@type' => 'RoofingContractor',
                    'name' => 'Ridgeline Roofing',
                ],
                'areaServed' => [
                    [
                        '@type' => 'City',
                        'name' => $cityPage['city'],
                        'addressRegion' => $cityPage['state_abbr'],
                    ],
                ],
                'url' => $canonical,
            ],
            [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    [
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Home',
                        'item' => route('home'),
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 2,
                        'name' => 'Service Areas',
                        'item' => route('service-areas'),
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => $locationLabel,
                        'item' => $canonical,
                    ],
                ],
            ],
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
