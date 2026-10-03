@php
    $seoOrg = config('seo.site');
    $seoUrl = rtrim($seoOrg['url'], '/');
    $seoLogo = asset($seoOrg['logo']);
    $seoContact = [
        '@type' => 'ContactPoint',
        'telephone' => config('company.phone'),
        'email' => config('company.email'),
        'contactType' => 'customer service',
        'areaServed' => 'Worldwide',
        'availableLanguage' => ['English', 'French'],
    ];
    $seoOrganization = [
        '@context' => 'https://schema.org',
        '@type' => 'TravelAgency',
        '@id' => $seoUrl.'/#organization',
        'name' => $seoOrg['name'],
        'url' => $seoUrl.'/',
        'logo' => $seoLogo,
        'image' => $seoLogo,
        'description' => $seoOrg['description'],
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => $seoOrg['country'],
        ],
        'areaServed' => [
            '@type' => 'Country',
            'name' => $seoOrg['area_served'],
        ],
        'contactPoint' => [$seoContact],
    ];

    if (! empty($seoOrg['same_as'])) {
        $seoOrganization['sameAs'] = $seoOrg['same_as'];
    }

    $seoWebsite = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        '@id' => $seoUrl.'/#website',
        'url' => $seoUrl.'/',
        'name' => $seoOrg['name'],
        'description' => $seoOrg['description'],
        'inLanguage' => 'en',
        'publisher' => ['@id' => $seoUrl.'/#organization'],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($seoOrganization, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
<script type="application/ld+json">{!! json_encode($seoWebsite, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
