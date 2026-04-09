<!DOCTYPE html>
<html lang="en">
    <head>
        @php
            $viteManifestPath = public_path('build/manifest.json');
            $compiledCssFiles = glob(public_path('build/assets/app-*.css')) ?: [];
            $compiledJsFiles = glob(public_path('build/assets/app-*.js')) ?: [];
            $compiledCssFile = $compiledCssFiles[0] ?? null;
            $compiledJsFile = $compiledJsFiles[0] ?? null;
            $fallbackCssPath = public_path('fallback/app.css');
            $fallbackJsPath = public_path('fallback/app.js');
        @endphp
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? config('app.name') }}</title>
        <meta name="description" content="{{ $description ?? 'Caracal Expeditions crafts private Kenya safaris with elegant camps and seamless logistics.' }}">
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
    </head>
    <body>
        @yield('content')
    </body>
</html>
