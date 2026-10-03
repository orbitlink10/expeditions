@php
    $planUrl = app(\App\Support\SeoPageRegistry::class)->url('plan-my-safari');
@endphp
<header class="site-header" data-header>
    <div class="container site-header__inner">
        @include('partials.brand', [
            'class' => '',
            'href' => route('home'),
            'ariaLabel' => $brand['full_name'].' home',
            'logoUrl' => $brand['logo_url'],
            'title' => $brand['name'],
            'subtitle' => $brand['subtitle'],
        ])

        <div class="header-tools">
            <a class="button button--accent seo-header__cta" href="{{ $planUrl }}">Plan My Safari</a>

            <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="menu-drawer">
                <span class="menu-toggle__bars" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="menu-toggle__label">Menu</span>
            </button>
        </div>
    </div>
</header>

<button class="menu-scrim" type="button" aria-label="Close menu" data-menu-scrim></button>

<aside class="menu-drawer" id="menu-drawer" data-menu-drawer aria-hidden="true">
    <div class="menu-drawer__header">
        <p class="menu-drawer__eyebrow">{{ $brand['full_name'] }}</p>
        <button class="menu-drawer__close" type="button" data-menu-close aria-label="Close menu">Close</button>
    </div>

    <nav class="menu-drawer__nav seo-drawer-nav" aria-label="Primary">
        <a href="{{ route('home') }}">Home</a>
        @foreach ($nav as $group)
            <p class="seo-drawer-nav__label">{{ $group['label'] }}</p>
            @foreach ($group['items'] as $item)
                <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
            @endforeach
        @endforeach
    </nav>

    @if (count($locales) > 1)
        <div class="seo-locale-selector" aria-label="Choose a region">
            <p class="seo-locale-selector__label">Region &amp; language</p>
            <div class="seo-locale-selector__options">
                @foreach ($locales as $locale)
                    <a href="{{ $locale['url'] }}" @class(['is-active' => $locale['active'] ?? false]) hreflang="{{ $locale['key'] }}" rel="alternate">{{ $locale['label'] }}</a>
                @endforeach
            </div>
        </div>
    @endif

    <div class="menu-drawer__card">
        <p class="menu-drawer__kicker">Travel Design Desk</p>
        <h2>Private Kenya safaris, built around your pace.</h2>
        <p>Tell us when you want to travel and what kind of camps feel right. We will design the journey around you.</p>
        <a class="button button--accent" href="{{ $planUrl }}">Plan My Safari</a>
    </div>
</aside>
