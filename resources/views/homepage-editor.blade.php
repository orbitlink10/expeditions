@extends('layouts.app')

@section('content')
    <div class="homepage-editor-page">
        <header class="homepage-editor-header" data-header>
            <div class="container homepage-editor-header__inner">
                @include('partials.brand', [
                    'class' => 'homepage-editor-brand',
                    'href' => route('dashboard.homepage.edit'),
                    'ariaLabel' => $homepageBrand['full_name'].' homepage content editor',
                    'logoUrl' => $homepageBrand['logo_url'],
                    'title' => $homepageBrand['name'],
                    'subtitle' => 'Homepage Content',
                ])

                <div class="homepage-editor-header__actions">
                    <a class="homepage-editor-link" href="{{ route('dashboard') }}">Back to dashboard</a>
                    <a class="homepage-editor-link" href="{{ route('home') }}" target="_blank" rel="noreferrer">Open homepage</a>
                    <span class="homepage-editor-user">{{ $dashboardUser }}</span>
                </div>
            </div>
        </header>

        <main class="homepage-editor-main">
            <section class="homepage-editor-hero" data-reveal>
                <div class="container">
                    <p class="homepage-editor-hero__eyebrow">Homepage content</p>
                    <h1>Shape the public homepage in one focused workspace.</h1>
                    <p>Edit the copy, manage section flow and upload the logo from a quieter white-theme editor built just for the website.</p>

                    <div class="homepage-editor-hero__meta">
                        <span class="homepage-editor-pill">Logo {{ $homepageBrand['logo_url'] ? 'uploaded' : 'not set' }}</span>
                        @if ($homepageLastUpdatedAt)
                            <span class="homepage-editor-pill">Last updated {{ $homepageLastUpdatedAt }}</span>
                        @endif
                    </div>
                </div>
            </section>

            <section class="homepage-editor-focus" data-reveal>
                <div class="container homepage-editor-focus__grid">
                    <article class="homepage-editor-focus__card">
                        <span class="homepage-editor-focus__mark" aria-hidden="true"></span>
                        <h2>Brand & Logo</h2>
                        <p>Update the site name, metadata and upload the homepage logo from one place.</p>
                    </article>

                    <article class="homepage-editor-focus__card">
                        <span class="homepage-editor-focus__mark" aria-hidden="true"></span>
                        <h2>Hero Message</h2>
                        <p>Adjust the first impression, supporting copy and homepage call-to-action labels.</p>
                    </article>

                    <article class="homepage-editor-focus__card">
                        <span class="homepage-editor-focus__mark" aria-hidden="true"></span>
                        <h2>Section Flow</h2>
                        <p>Work through journeys, experiences, FAQ and footer content in a single editing route.</p>
                    </article>

                    <article class="homepage-editor-focus__card">
                        <span class="homepage-editor-focus__mark" aria-hidden="true"></span>
                        <h2>Public Preview</h2>
                        <p>Open the live homepage anytime to confirm the tone, spacing and final copy.</p>
                    </article>
                </div>
            </section>

            @include('partials.dashboard-homepage-editor')
        </main>
    </div>
@endsection
