<?php

namespace App\Support;

class SeoPageRegistry
{
    /**
     * Return the raw registry of all SEO pages keyed by path.
     */
    public function pages(): array
    {
        return array_merge(
            config('seo.pages', []),
            config('seo-itineraries', []),
            config('seo-experiences', []),
            config('seo-us', []),
            config('seo-uk', []),
            config('seo-fr', []),
            config('seo-ru', []),
            config('seo-trust', []),
            config('seo-completion', []),
            config('seo-hubs', []),
        );
    }

    public function site(): array
    {
        return config('seo.site', []);
    }

    public function exists(string $path): bool
    {
        return array_key_exists($this->normalize($path), $this->pages());
    }

    public function find(string $path): ?array
    {
        $path = $this->normalize($path);
        $pages = $this->pages();

        if (! isset($pages[$path])) {
            return null;
        }

        $page = $pages[$path];
        $page['path'] = $path;
        $page['canonical'] = $this->url($path);

        return $page;
    }

    /**
     * Return all registered pages nested beneath a path prefix (e.g. a hub).
     */
    public function children(string $prefix): array
    {
        $prefix = $this->normalize($prefix);

        if ($prefix === '') {
            return [];
        }

        $children = [];

        foreach (array_keys($this->pages()) as $path) {
            if (str_starts_with($path, $prefix.'/')) {
                $page = $this->find($path);

                if ($page !== null) {
                    $children[] = $page;
                }
            }
        }

        return $children;
    }

    public function normalize(string $path): string
    {
        return trim($path, '/');
    }

    public function url(string $path): string
    {
        $path = $this->normalize($path);
        $base = rtrim($this->site()['url'] ?? url('/'), '/');

        return $path === '' ? $base.'/' : $base.'/'.$path.'/';
    }

    /**
     * Build the primary navigation, dropping links to pages that do not exist yet.
     */
    public function nav(): array
    {
        $nav = [];

        foreach (config('seo.nav', []) as $group) {
            $items = [];

            foreach ($group['items'] as $item) {
                if (! $this->exists($item['page'])) {
                    continue;
                }

                $items[] = [
                    'label' => $item['label'],
                    'url' => $this->url($item['page']),
                ];
            }

            if ($items !== []) {
                $nav[] = [
                    'label' => $group['label'],
                    'items' => $items,
                ];
            }
        }

        return $nav;
    }

    /**
     * Render the locale/language selector options for locales with live hubs.
     */
    public function locales(): array
    {
        $locales = [];

        foreach (config('seo.locales', []) as $key => $locale) {
            if ($locale['path'] === '' || $this->exists($locale['path'])) {
                $locales[] = [
                    'key' => $key,
                    'label' => $locale['label'],
                    'url' => $this->url($locale['path']),
                ];
            }
        }

        return $locales;
    }

    /**
     * Build the region/language selector for a specific page, using its
     * hreflang alternates so switching lands on the true equivalent page.
     */
    public function localeOptions(array $page): array
    {
        $labels = config('seo.locales', []);
        $current = $page['hreflang'] ?? ($page['locale'] ?? 'en');
        $options = [];

        foreach ($this->alternates($page) as $alternate) {
            if ($alternate['hreflang'] === 'x-default') {
                continue;
            }

            $options[] = [
                'key' => $alternate['hreflang'],
                'label' => $labels[$alternate['hreflang']]['label'] ?? strtoupper($alternate['hreflang']),
                'url' => $alternate['url'],
                'active' => $alternate['hreflang'] === $current,
            ];
        }

        $hasInternational = collect($options)->contains(fn (array $option) => $option['key'] === 'en');

        if (! $hasInternational && ! empty($options)) {
            array_unshift($options, [
                'key' => 'en',
                'label' => $labels['en']['label'] ?? 'International',
                'url' => $this->url(''),
                'active' => $current === 'en',
            ]);
        }

        return $options;
    }

    /**
     * Self-referencing hreflang alternates plus x-default for the current group.
     */
    public function alternates(array $page): array
    {
        $group = $page['group'] ?? null;

        if ($group === null) {
            return [];
        }

        $alternates = [];
        $defaultUrl = null;

        foreach ($this->pages() as $path => $candidate) {
            if (($candidate['group'] ?? null) !== $group) {
                continue;
            }

            $hreflang = $candidate['hreflang'] ?? ($candidate['locale'] ?? 'en');
            $url = $this->url($path);

            $alternates[] = ['hreflang' => $hreflang, 'url' => $url];

            if ($hreflang === 'en' || ($defaultUrl === null && $hreflang === 'x-default')) {
                $defaultUrl = $url;
            }
        }

        if ($alternates === []) {
            return [];
        }

        $defaultUrl ??= $alternates[0]['url'];
        $alternates[] = ['hreflang' => 'x-default', 'url' => $defaultUrl];

        return $alternates;
    }

    public function breadcrumbs(array $page): array
    {
        $crumbs = [
            ['label' => 'Home', 'url' => $this->url('')],
        ];

        $segments = explode('/', $page['path']);

        if (count($segments) > 1) {
            $accumulated = '';

            foreach ($segments as $index => $segment) {
                $accumulated = $accumulated === '' ? $segment : $accumulated.'/'.$segment;

                if ($index === count($segments) - 1) {
                    $crumbs[] = ['label' => $page['h1'], 'url' => $this->url($page['path'])];

                    continue;
                }

                $label = $this->exists($accumulated)
                    ? ($this->find($accumulated)['h1'] ?? $this->humanize($segment))
                    : $this->humanize($segment);

                $crumbs[] = [
                    'label' => $label,
                    'url' => $this->exists($accumulated) ? $this->url($accumulated) : null,
                ];
            }

            return $crumbs;
        }

        $crumbs[] = ['label' => $page['h1'], 'url' => $this->url($page['path'])];

        return $crumbs;
    }

    /**
     * Build JSON-LD schema blocks for a page.
     */
    public function schema(array $page): array
    {
        $site = $this->site();
        $canonical = $page['canonical'];
        $blocks = [];

        $crumbs = array_values(array_filter(
            $this->breadcrumbs($page),
            fn ($crumb) => ! empty($crumb['url'])
        ));

        if (count($crumbs) > 1) {
            $blocks[] = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => array_map(function ($crumb, $index) {
                    return [
                        '@type' => 'ListItem',
                        'position' => $index + 1,
                        'name' => $crumb['label'],
                        'item' => $crumb['url'],
                    ];
                }, $crumbs, array_keys($crumbs)),
            ];
        }

        if (! empty($page['itinerary'])) {
            $blocks[] = $this->touristTrip($page, $canonical, $site);
        } else {
            $type = $page['schema_type'] ?? 'WebPage';

            $profile = [
                '@context' => 'https://schema.org',
                '@type' => $type,
                '@id' => $canonical,
                'url' => $canonical,
                'name' => $page['title'],
                'description' => $page['description'],
                'inLanguage' => $page['locale'] ?? 'en',
                'isPartOf' => ['@id' => rtrim($site['url'], '/').'/#website'],
                'primaryImageOfPage' => [
                    '@type' => 'ImageObject',
                    'url' => asset($page['hero_image'] ?? $site['default_image']),
                    'caption' => $page['hero_alt'] ?? $page['h1'],
                ],
            ];

            if ($type === 'WebPage') {
                $profile['about'] = [
                    '@type' => 'Thing',
                    'name' => 'Luxury safaris in Kenya',
                ];
            }

            if ($type === 'Service') {
                $profile['serviceType'] = $page['h1'];
                $profile['provider'] = ['@id' => rtrim($site['url'], '/').'/#organization'];
                $profile['areaServed'] = [
                    '@type' => 'Country',
                    'name' => 'Kenya',
                ];
            }

            if ($type === 'Article') {
                $published = $page['published'] ?? '2026-01-15';

                $profile['headline'] = $page['h1'];
                $profile['image'] = asset($page['hero_image'] ?? $site['default_image']);
                $profile['author'] = ['@id' => rtrim($site['url'], '/').'/#organization'];
                $profile['publisher'] = ['@id' => rtrim($site['url'], '/').'/#organization'];
                $profile['datePublished'] = $published;
                $profile['dateModified'] = $published;
                $profile['mainEntityOfPage'] = $canonical;
            }

            $blocks[] = $profile;
        }

        if (! empty($page['faqs'])) {
            $blocks[] = [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => array_map(function ($faq) {
                    return [
                        '@type' => 'Question',
                        'name' => $faq['q'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $faq['a'],
                        ],
                    ];
                }, $page['faqs']),
            ];
        }

        return $blocks;
    }

    private function touristTrip(array $page, string $canonical, array $site): array
    {
        $days = collect($page['itinerary'])->values();

        return [
            '@context' => 'https://schema.org',
            '@type' => 'TouristTrip',
            '@id' => $canonical,
            'url' => $canonical,
            'name' => $page['title'],
            'description' => $page['description'],
            'inLanguage' => $page['locale'] ?? 'en',
            'image' => asset($page['hero_image'] ?? $site['default_image']),
            'touristType' => 'Luxury safari travellers',
            'provider' => ['@id' => rtrim($site['url'], '/').'/#organization'],
            'itinerary' => [
                '@type' => 'ItemList',
                'numberOfItems' => $days->count(),
                'itemListElement' => $days->map(function (array $day, int $index) {
                    return [
                        '@type' => 'ListItem',
                        'position' => $index + 1,
                        'item' => [
                            '@type' => 'TouristDestination',
                            'name' => trim(($day['day'] ?? '').' — '.($day['title'] ?? '')),
                            'description' => $day['text'] ?? null,
                        ],
                    ];
                })->all(),
            ],
        ];
    }

    private function humanize(string $segment): string
    {
        return ucwords(str_replace('-', ' ', $segment));
    }
}
