@extends('layouts.app')

@php
    $planUrl = app(\App\Support\SeoPageRegistry::class)->url('plan-my-safari');
    $heroImage = asset($page['hero_image'] ?? config('seo.site.default_image'));
@endphp

@push('head')
    <link rel="preload" as="image" href="{{ $heroImage }}">
    @foreach ($schemas as $schema)
        <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endforeach
@endpush

@section('content')
    <div class="site-shell seo-shell">
        @include('seo.partials.header')

        <main id="top">
            @include('seo.partials.hero')

            @if (! empty($hubChildren))
                <section class="seo-section seo-section--hub" data-reveal>
                    <div class="container">
                        <div class="seo-section__head seo-section__head--center">
                            <p class="section-kicker">Explore by region</p>
                            <h2 class="seo-section__title">{{ $page['h1'] }}</h2>
                        </div>

                        <div class="seo-hub-grid">
                            @foreach ($hubChildren as $child)
                                <a class="seo-hub-card" href="{{ $child['canonical'] }}">
                                    <img src="{{ asset($child['hero_image'] ?? config('seo.site.default_image')) }}" alt="{{ $child['hero_alt'] ?? $child['h1'] }}" loading="lazy" decoding="async">
                                    <div class="seo-hub-card__body">
                                        <span class="seo-hub-card__kicker">{{ $child['eyebrow'] }}</span>
                                        <strong>{{ $child['h1'] }}</strong>
                                        <span class="seo-hub-card__more">View more</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif

            @include('seo.partials.sections')
            @include('seo.partials.faq')
            @include('seo.partials.related')
            @include('seo.partials.cta')
        </main>

        @include('seo.partials.footer')
    </div>
@endsection
