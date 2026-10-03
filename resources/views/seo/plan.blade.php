@extends('layouts.app')

@php
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
            <section class="seo-hero seo-hero--compact" style="--hero-image: url('{{ $heroImage }}');">
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
                </div>
            </section>

            <section class="section seo-plan" data-reveal>
                <div class="container seo-plan__grid">
                    <div class="seo-plan__form">
                        <h2 class="seo-section__title">Tell us about your journey</h2>

                        @if (session('enquiry_status'))
                            <p class="enquiry-alert enquiry-alert--success">{{ session('enquiry_status') }}</p>
                        @endif

                        @if (session('enquiry_error'))
                            <p class="enquiry-alert enquiry-alert--error">{{ session('enquiry_error') }}</p>
                        @endif

                        @if ($errors->any())
                            <p class="enquiry-alert enquiry-alert--error">Please check the highlighted details and try again.</p>
                        @endif

                        <form id="plan-form" class="enquiry-form" method="POST" action="{{ route('enquire.store') }}">
                            @csrf

                            <div class="enquiry-form__grid">
                                <label class="enquiry-field">
                                    <span>Name *</span>
                                    <input name="name" type="text" autocomplete="name" value="{{ old('name') }}" required>
                                </label>

                                <label class="enquiry-field">
                                    <span>Email *</span>
                                    <input name="email" type="email" autocomplete="email" value="{{ old('email') }}" required>
                                </label>
                            </div>

                            <div class="enquiry-form__grid">
                                <label class="enquiry-field">
                                    <span>Telephone *</span>
                                    <input name="telephone" type="tel" autocomplete="tel" value="{{ old('telephone') }}" required>
                                </label>

                                <label class="enquiry-field">
                                    <span>Country</span>
                                    <input name="country" type="text" autocomplete="country-name" value="{{ old('country') }}">
                                </label>
                            </div>

                            <div class="enquiry-form__grid">
                                <label class="enquiry-field">
                                    <span>Number of adults *</span>
                                    <input name="adults" type="number" inputmode="numeric" min="1" value="{{ old('adults') }}" required>
                                </label>

                                <label class="enquiry-field">
                                    <span>Number of children</span>
                                    <input name="children" type="number" inputmode="numeric" min="0" value="{{ old('children') }}" data-children-count>
                                </label>
                            </div>

                            <div class="enquiry-children-ages" data-children-ages hidden>
                                <p>Ages of children</p>
                                <div class="enquiry-children-ages__grid" data-children-age-fields></div>
                            </div>

                            <div class="enquiry-form__grid">
                                <label class="enquiry-field">
                                    <span>Arrival date</span>
                                    <input name="arrival_date" type="date" value="{{ old('arrival_date') }}">
                                </label>

                                <label class="enquiry-field">
                                    <span>Departure date</span>
                                    <input name="departure_date" type="date" value="{{ old('departure_date') }}">
                                </label>
                            </div>

                            <label class="enquiry-field">
                                <span>Message</span>
                                <textarea name="message" rows="5" placeholder="Tell us about your interests, preferred pace, camps and any special occasion.">{{ old('message') }}</textarea>
                            </label>
                        </form>

                        <div class="enquiry-actions">
                            <button class="button button--accent" type="submit" form="plan-form">Send enquiry</button>
                            <a class="button enquiry-button--light" href="{{ $companyDirectEmailUrl }}" target="_blank" rel="noopener">Email us directly</a>
                            <a class="button enquiry-button--light" href="tel:{{ $companyPhone }}">Call us</a>
                        </div>
                    </div>

                    <aside class="seo-plan__aside">
                        <div class="seo-plan__card">
                            <p class="section-kicker">Why Caracal</p>
                            <h3>Private, tailor-made and Kenya-based</h3>
                            <ul class="seo-bullets">
                                <li>Kenya specialists, not a global catalogue</li>
                                <li>Private guides, vehicles and pacing</li>
                                <li>Handpicked luxury camps and conservancies</li>
                                <li>Bush flights and seamless logistics</li>
                                <li>Complimentary planning and proposals</li>
                            </ul>
                        </div>

                        <div class="seo-plan__card seo-plan__card--contact">
                            <p class="section-kicker">Prefer to talk?</p>
                            <h3>Speak with a safari specialist</h3>
                            <p>We are happy to talk through ideas before you commit to anything.</p>
                            <a class="seo-plan__contact" href="tel:{{ $companyPhone }}">{{ $companyPhoneLabel }}</a>
                            <a class="seo-plan__contact" href="mailto:{{ $companyEmail }}">{{ $companyEmail }}</a>
                            <a class="seo-plan__contact" href="https://wa.me/{{ $companyWhatsapp }}" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                        </div>
                    </aside>
                </div>
            </section>

            @if (! empty($page['sections']))
                <section class="seo-section" data-reveal>
                    @foreach ($page['sections'] as $section)
                        <div class="container seo-section__grid">
                            <div class="seo-section__head">
                                @if (! empty($section['kicker']))
                                    <p class="section-kicker">{{ $section['kicker'] }}</p>
                                @endif
                                <h2 class="seo-section__title">{{ $section['title'] }}</h2>
                            </div>

                            <div class="seo-prose">
                                @foreach ($section['paragraphs'] ?? [] as $paragraph)
                                    <p>{{ $paragraph }}</p>
                                @endforeach

                                @if (! empty($section['bullets']))
                                    <ul class="seo-bullets">
                                        @foreach ($section['bullets'] as $bullet)
                                            <li>{{ $bullet }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </section>
            @endif
        </main>

        @include('seo.partials.footer')
    </div>
@endsection
