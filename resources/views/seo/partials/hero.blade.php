@php
    $compact = $compact ?? false;
@endphp
<section @class(['seo-hero', 'seo-hero--compact' => $compact]) style="--hero-image: url('{{ $heroImage }}');">
    <div class="container seo-hero__inner" data-reveal>
        <nav class="seo-breadcrumbs" aria-label="Breadcrumb">
            @foreach ($breadcrumbs as $index => $crumb)
                @if ($crumb['url'] && $index < count($breadcrumbs) - 1)
                    <a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a>
                @elseif ($index === count($breadcrumbs) - 1)
                    <span aria-current="page">{{ $crumb['label'] }}</span>
                @else
                    <span>{{ $crumb['label'] }}</span>
                @endif
            @endforeach
        </nav>

        <p class="seo-hero__eyebrow">{{ $page['eyebrow'] }}</p>
        <h1 class="seo-hero__title">{{ $page['h1'] }}</h1>
        <p class="seo-hero__subtitle">{{ $page['subtitle'] }}</p>

        <div class="seo-hero__actions">
            <a class="button button--accent" href="{{ $planUrl }}">Plan My Safari</a>
            <a class="button button--ghost" href="tel:{{ $companyPhone }}">Speak to a specialist</a>
        </div>

        @if (! empty($page['stats']))
            <div class="seo-hero__stats">
                @foreach ($page['stats'] as $stat)
                    <div class="seo-hero-stat">
                        <strong>{{ $stat['value'] }}</strong>
                        <span>{{ $stat['label'] }}</span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
