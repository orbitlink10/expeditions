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

            .whatsapp-button svg {
                width: 36px;
                height: 36px;
                fill: white;
            }

            @media (max-width: 768px) {
                .whatsapp-button {
                    width: 55px;
                    height: 55px;
                    bottom: 20px;
                    right: 20px;
                }

                .whatsapp-button svg {
                    width: 30px;
                    height: 30px;
                }
            }
        </style>
    </head>
    <body>
        @yield('content')

        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/254746761556" class="whatsapp-button" target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp" title="Chat with us on WhatsApp">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004c-1.052 0-2.082.371-2.906 1.039l-.196.142-2.034-.527.538 1.965.138.22c-.727.906-1.139 1.95-1.139 3.07 0 3.211 2.616 5.827 5.832 5.827 1.542 0 2.986-.608 4.07-1.704 1.084-1.095 1.712-2.54 1.712-4.067 0-3.211-2.616-5.827-5.848-5.827m5.848 10.654c-3.211 0-5.832-2.616-5.832-5.832 0-1.052.371-2.082 1.039-2.906l.142-.196-.527-2.034 1.965.538.22.138c.906-.727 1.95-1.139 3.07-1.139 3.211 0 5.827 2.616 5.827 5.832 0 1.542-.608 2.986-1.704 4.07-1.095 1.084-2.54 1.712-4.067 1.712"/>
            </svg>
        </a>
    </body>
</html>
