@extends('layouts.app')

@section('content')
    <div class="site-shell">
        <header class="site-header" data-header>
            <div class="container site-header__inner">
                @include('partials.brand', [
                    'class' => '',
                    'href' => '#top',
                    'ariaLabel' => $brand['full_name'].' home',
                    'logoUrl' => $brand['logo_url'],
                    'title' => $brand['name'],
                    'subtitle' => $brand['subtitle'],
                ])

                <div class="header-tools">
                    <label class="search-field" for="site-search">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M10.5 4.5a6 6 0 1 0 0 12a6 6 0 0 0 0-12Zm0-1.5a7.5 7.5 0 1 1 0 15a7.5 7.5 0 0 1 0-15Zm9.53 15.97l-3.6-3.6l1.06-1.06l3.6 3.6l-1.06 1.06Z" fill="currentColor" />
                        </svg>
                        <input id="site-search" type="search" placeholder="Search journeys, regions or experiences" autocomplete="off" data-search-input>
                    </label>

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

            <nav class="menu-drawer__nav" aria-label="Primary">
                @foreach ($menuLinks as $link)
                    <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                @endforeach
            </nav>

            <div class="menu-drawer__card">
                <p class="menu-drawer__kicker">{{ $menuDrawer['kicker'] }}</p>
                <h2>{{ $menuDrawer['title'] }}</h2>
                <p>{{ $menuDrawer['body'] }}</p>
                <a class="button button--accent" href="mailto:journeys@caracalexpeditions.com?subject=Caracal%20Expeditions%20Enquiry">{{ $menuDrawer['buttonLabel'] }}</a>
            </div>
        </aside>

        <main id="top">
            <section class="hero" style="--hero-image: url('{{ asset($hero['image']) }}');">
                <div class="container hero__inner" data-reveal>
                    <div class="hero__breadcrumbs" aria-label="Breadcrumb">
                        @foreach ($hero['breadcrumbs'] as $crumb)
                            <span>{{ $crumb }}</span>
                        @endforeach
                    </div>

                    <p class="hero__eyebrow">{{ $hero['eyebrow'] }}</p>
                    <h1 class="hero__title">{{ $hero['title'] }}</h1>
                    <p class="hero__subtitle">{{ $hero['subtitle'] }}</p>

                    <div class="hero__actions">
                        <a class="button button--accent" href="#enquire">{{ $hero['buttons']['primary'] }}</a>
                        <a class="button button--ghost" href="#journeys">{{ $hero['buttons']['secondary'] }}</a>
                    </div>

                    <div class="hero__stats">
                        @foreach ($hero['stats'] as $stat)
                            <div class="hero-stat">
                                <strong>{{ $stat['value'] }}</strong>
                                <span>{{ $stat['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="feature-band" data-reveal>
                <div class="container feature-band__inner">
                    <div class="feature-band__badge" aria-hidden="true">
                        <span>{{ $featured['badgeTop'] }}</span>
                        <strong>{{ $featured['badgeYear'] }}</strong>
                    </div>

                    <div class="feature-band__copy">
                        <h2>{{ $featured['title'] }}</h2>
                        <p>{{ $featured['subtitle'] }}</p>
                    </div>
                </div>
            </section>

            <section class="section section--story" id="destinations" data-reveal>
                <div class="container editorial-grid">
                    <div class="story-copy">
                        <p class="section-kicker">{{ $story['eyebrow'] }}</p>
                        <h2 class="section-title">{{ $story['title'] }}</h2>

                        @foreach ($story['paragraphs'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                    </div>

                    <div class="story-panel">
                        <p class="story-panel__kicker">{{ $story['panelKicker'] }}</p>
                        <h3>{{ $story['panelTitle'] }}</h3>

                        <ul class="story-panel__list">
                            @foreach ($story['panelItems'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <p class="search-feedback" data-search-feedback hidden></p>
                </div>

                <div class="container destination-grid">
                    @foreach ($destinations as $destination)
                        <article class="image-card" data-search-card data-search-text="{{ strtolower($destination['title'].' '.$destination['region'].' '.$destination['summary']) }}">
                            <img src="{{ asset($destination['image']) }}" alt="{{ $destination['title'] }}">
                            <div class="image-card__body">
                                <p class="card-kicker">{{ $destination['region'] }}</p>
                                <h3>{{ $destination['title'] }}</h3>
                                <p>{{ $destination['summary'] }}</p>
                                <a href="#enquire">{{ $destination['cta'] }}</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="section section--journeys" id="journeys" data-reveal>
                <div class="container section-head">
                    <div>
                        <p class="section-kicker">{{ $journeysSection['kicker'] }}</p>
                        <h2 class="section-title">{{ $journeysSection['title'] }}</h2>
                    </div>
                    <p>{{ $journeysSection['intro'] }}</p>
                </div>

                <div class="container split-grid">
                    @foreach ($signatureJourneys as $journey)
                        <article class="offer-card" data-search-card data-search-text="{{ strtolower($journey['title'].' '.$journey['summary'].' '.$journey['tag']) }}">
                            <div class="offer-card__media">
                                <img src="{{ asset($journey['image']) }}" alt="{{ $journey['title'] }}">
                                <span class="offer-pill">{{ $journey['tag'] }}</span>
                            </div>

                            <div class="offer-card__body">
                                <p class="offer-meta"><strong>From:</strong> {{ $journey['meta'] }} <span>|</span> <strong>Duration:</strong> {{ $journey['duration'] }}</p>
                                <h3>{{ $journey['title'] }}</h3>
                                <p>{{ $journey['summary'] }}</p>
                                <a class="ghost-button" href="#enquire">{{ $journey['cta'] }}</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="section section--experiences" id="experiences" data-reveal>
                <div class="container section-head">
                    <div>
                        <p class="section-kicker">{{ $experiencesSection['kicker'] }}</p>
                        <h2 class="section-title">{{ $experiencesSection['title'] }}</h2>
                    </div>
                    <p>{{ $experiencesSection['intro'] }}</p>
                </div>

                <div class="container experience-grid">
                    @foreach ($experiences as $experience)
                        <article class="experience-card" data-search-card data-search-text="{{ strtolower($experience['title'].' '.$experience['region'].' '.$experience['summary']) }}">
                            <img src="{{ asset($experience['image']) }}" alt="{{ $experience['title'] }}">
                            <div class="experience-card__body">
                                <p class="card-kicker">{{ $experience['region'] }}</p>
                                <h3>{{ $experience['title'] }}</h3>
                                <p>{{ $experience['summary'] }}</p>
                                <a class="ghost-button" href="#enquire">{{ $experience['cta'] }}</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="tailor-band" id="enquire" data-reveal>
                <div class="container tailor-band__content">
                    <p class="section-kicker">{{ $tailorBand['kicker'] }}</p>
                    <h2>{{ $tailorBand['title'] }}</h2>
                    <p>{{ $tailorBand['body'] }}</p>
                    <a class="button button--accent" href="mailto:journeys@caracalexpeditions.com?subject=Caracal%20Expeditions%20Enquiry">{{ $tailorBand['buttonLabel'] }}</a>
                </div>
            </section>

            <section class="section section--faq" id="faq" data-reveal>
                <div class="container section-head">
                    <div>
                        <p class="section-kicker">{{ $faqSection['kicker'] }}</p>
                        <h2 class="section-title">{{ $faqSection['title'] }}</h2>
                    </div>
                    <p>{{ $faqSection['intro'] }}</p>
                </div>

                <div class="container faq-grid">
                    @foreach ($faqs as $faq)
                        <article class="faq-card" data-search-card data-search-text="{{ strtolower($faq['question'].' '.$faq['answer']) }}">
                            <img src="{{ asset($faq['image']) }}" alt="{{ $faq['question'] }}">
                            <div class="faq-card__body">
                                <h3>{{ $faq['question'] }}</h3>
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container footer-grid">
                @foreach ($footerGroups as $group)
                    <div>
                        <p class="site-footer__heading">{{ $group['title'] }}</p>
                        <ul class="site-footer__list">
                            @foreach ($group['items'] as $item)
                                <li><a href="{{ $item['href'] }}">{{ $item['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <div class="container footer-bottom">
                <p>{{ $footer['intro'] }}</p>

                <div class="social-links" aria-label="Social links">
                    <a href="#" aria-label="Instagram">IG</a>
                    <a href="#" aria-label="Pinterest">PI</a>
                    <a href="#" aria-label="YouTube">YT</a>
                </div>
            </div>
        </footer>

        <a class="floating-chat" href="mailto:journeys@caracalexpeditions.com?subject=Caracal%20Expeditions%20Enquiry">
            <span class="floating-chat__copy">
                <strong>{{ $footer['chatTitle'] }}</strong>
                <span>{{ $footer['chatBody'] }}</span>
            </span>
            <span class="floating-chat__icon" aria-hidden="true">?</span>
        </a>
    </div>
@endsection
