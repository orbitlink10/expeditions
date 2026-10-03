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
            @include('seo.partials.sections')
            @include('seo.partials.faq')
            @include('seo.partials.related')
            @include('seo.partials.cta')
        </main>

        @include('seo.partials.footer')
    </div>
@endsection
