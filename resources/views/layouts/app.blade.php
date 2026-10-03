<!DOCTYPE html>
<html lang="{{ $htmlLang ?? 'en' }}">
    <head>
        @php
            $viteManifestPath = public_path('build/manifest.json');
            $compiledCssFiles = glob(public_path('build/assets/app-*.css')) ?: [];
            $compiledJsFiles = glob(public_path('build/assets/app-*.js')) ?: [];
            $compiledCssFile = $compiledCssFiles[0] ?? null;
            $compiledJsFile = $compiledJsFiles[0] ?? null;
            $fallbackCssPath = public_path('fallback/app.css');
            $fallbackJsPath = public_path('fallback/app.js');
            $seoTitle = $title ?? config('app.name');
            $seoDescription = $description ?? 'Caracal Expeditions crafts private Kenya safaris with elegant camps and seamless logistics.';
            $seoCanonical = $canonical ?? null;
            $seoAlternates = $alternates ?? [];
            $seoOgImage = $ogImage ?? null;
            $seoOgType = $ogType ?? 'website';
            $seoRobots = $robots ?? null;
        @endphp
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $seoTitle }}</title>
        <meta name="description" content="{{ $seoDescription }}">
        @if ($seoCanonical)
            <link rel="canonical" href="{{ $seoCanonical }}">
        @endif
        @foreach ($seoAlternates as $alternate)
            <link rel="alternate" hreflang="{{ $alternate['hreflang'] }}" href="{{ $alternate['url'] }}">
        @endforeach
        @if ($seoRobots)
            <meta name="robots" content="{{ $seoRobots }}">
        @endif
        <meta property="og:site_name" content="{{ config('seo.site.name', config('app.name')) }}">
        <meta property="og:title" content="{{ $seoTitle }}">
        <meta property="og:description" content="{{ $seoDescription }}">
        <meta property="og:type" content="{{ $seoOgType }}">
        @if ($seoCanonical)
            <meta property="og:url" content="{{ $seoCanonical }}">
        @endif
        @if ($seoOgImage)
            <meta property="og:image" content="{{ $seoOgImage }}">
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:image" content="{{ $seoOgImage }}">
        @else
            <meta name="twitter:card" content="summary">
        @endif
        <meta name="twitter:title" content="{{ $seoTitle }}">
        <meta name="twitter:description" content="{{ $seoDescription }}">
        @include('seo.partials.organization-schema')
        @stack('head')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        @if (file_exists($viteManifestPath))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            @if ($compiledCssFile)
                <link rel="stylesheet" href="{{ asset('build/assets/'.basename($compiledCssFile)) }}">
            @elseif (file_exists($fallbackCssPath))
                <link rel="stylesheet" href="{{ asset('fallback/app.css') }}">
            @endif

            @if ($compiledJsFile)
                <script type="module" src="{{ asset('build/assets/'.basename($compiledJsFile)) }}"></script>
            @elseif (file_exists($fallbackJsPath))
                <script type="module" src="{{ asset('fallback/app.js') }}"></script>
            @endif
        @endif
        <style>
            .whatsapp-button {
                position: fixed;
                bottom: 25px;
                right: 25px;
                width: 65px;
                height: 65px;
                background-color: #25D366;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                box-shadow: 0 6px 20px rgba(37, 211, 102, 0.3);
                z-index: 1000;
                transition: all 0.3s ease;
            }

            .whatsapp-button:hover {
                background-color: #20BA5A;
                transform: scale(1.1);
                box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
            }

            .whatsapp-button img {
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 50%;
                object-fit: cover;
            }

            @media (max-width: 768px) {
                .whatsapp-button {
                    width: 55px;
                    height: 55px;
                    bottom: 20px;
                    right: 20px;
                }

            }
        </style>
    </head>
    <body>
        @yield('content')

        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/{{ config('company.whatsapp_phone') }}" class="whatsapp-button" target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp" title="Chat with us on WhatsApp">
            <img src="{{ asset('images/whatsapp-logo.jpg') }}" alt="" aria-hidden="true">
        </a>
    </body>
</html>
