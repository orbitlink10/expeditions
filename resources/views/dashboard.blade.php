@extends('layouts.app')

@section('content')
    <div class="dashboard-page">
        <button class="dashboard-sidebar-scrim" type="button" aria-label="Close dashboard navigation" data-dashboard-sidebar-scrim></button>

        <div class="dashboard-shell">
            <aside class="dashboard-sidebar" id="dashboard-sidebar" data-dashboard-sidebar aria-hidden="false">
                <div class="dashboard-sidebar__top">
                    @include('partials.brand', [
                        'class' => 'dashboard-brand',
                        'href' => route('dashboard'),
                        'ariaLabel' => $homepageBrand['full_name'].' dashboard',
                        'logoUrl' => $homepageBrand['logo_url'],
                        'title' => $homepageBrand['name'],
                        'subtitle' => 'Operations Console',
                    ])

                    <button class="dashboard-sidebar__close" type="button" data-dashboard-sidebar-close aria-label="Close dashboard navigation">
                        Close
                    </button>
                </div>

                <nav class="dashboard-nav" aria-label="Dashboard sections">
                    @foreach ($navLinks as $link)
                        <a
                            class="dashboard-nav__link{{ $loop->first ? ' is-active' : '' }}"
                            href="{{ $link['href'] }}"
                            @if (str_starts_with($link['href'], '#'))
                                data-dashboard-link
                                data-dashboard-target="{{ ltrim($link['href'], '#') }}"
                            @endif
                        >
                            <span class="dashboard-nav__icon" aria-hidden="true">{{ $link['code'] }}</span>
                            <strong>{{ $link['label'] }}</strong>
                        </a>
                    @endforeach
                </nav>

                <div class="dashboard-sidebar__meta">
                    <p class="dashboard-sidebar__label">Signed in</p>
                    <strong>{{ $dashboardUser }}</strong>
                    <p>Monitor live safari movement, regional pressure and the homepage from one control rail.</p>

                    <div class="dashboard-sidebar__actions">
                        <a class="dashboard-chip" href="{{ route('home') }}">Public website</a>
                        <a class="button button--accent" href="mailto:journeys@caracalexpeditions.com?subject=Operations%20Dashboard%20Follow-up">Alert concierge</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dashboard-chip dashboard-chip--button" type="submit">Sign out</button>
                        </form>
                    </div>
                </div>
            </aside>

            <div class="dashboard-content">
                <header class="dashboard-header" data-header>
                    <div class="dashboard-header__inner">
                        <div class="dashboard-header__intro">
                            <button class="dashboard-sidebar-toggle" type="button" data-dashboard-sidebar-toggle aria-expanded="false" aria-controls="dashboard-sidebar">
                                <span class="dashboard-sidebar-toggle__bars" aria-hidden="true">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span>Sections</span>
                            </button>

                            <div>
                                <p class="dashboard-header__eyebrow">Safari operations dashboard</p>
                                <strong>Control room overview</strong>
                            </div>
                        </div>

                        <div class="dashboard-header__actions">
                            <span class="dashboard-header__status">14 departures live today</span>
                            <span class="dashboard-user">{{ $dashboardUser }}</span>
                        </div>
                    </div>
                </header>

                <main class="dashboard-main">
                    <section class="dashboard-hero" id="overview" data-reveal data-dashboard-section>
                        <div class="container dashboard-hero__grid">
                            <div class="dashboard-hero__copy">
                                <p class="dashboard-eyebrow">{{ $hero['eyebrow'] }}</p>
                                <h1>{{ $hero['title'] }}</h1>
                                <p>{{ $hero['subtitle'] }}</p>

                                <div class="dashboard-hero__actions">
                                    <a class="button button--accent" href="#departures">Open departure board</a>
                                    <a class="dashboard-button-secondary" href="{{ route('dashboard.homepage.edit') }}">Edit homepage content</a>
                                </div>
                            </div>

                            <aside class="dashboard-spotlight" style="--spotlight-image: url('{{ asset($hero['image']) }}');">
                                <p class="dashboard-panel__eyebrow">{{ $hero['spotlight']['eyebrow'] }}</p>
                                <h2>{{ $hero['spotlight']['title'] }}</h2>
                                <p>{{ $hero['spotlight']['body'] }}</p>

                                <div class="dashboard-spotlight__stats">
                                    @foreach ($hero['spotlight']['stats'] as $stat)
                                        <div class="dashboard-spotlight__stat">
                                            <span>{{ $stat['label'] }}</span>
                                            <strong>{{ $stat['value'] }}</strong>
                                        </div>
                                    @endforeach
                                </div>
                            </aside>
                        </div>
                    </section>

                    <section class="dashboard-summary" data-reveal>
                        <div class="container dashboard-summary__grid">
                            @foreach ($summaryMetrics as $metric)
                                <article class="dashboard-metric">
                                    <p class="dashboard-panel__eyebrow">{{ $metric['label'] }}</p>
                                    <strong>{{ $metric['value'] }}</strong>
                                    <span class="dashboard-metric__delta dashboard-metric__delta--{{ $metric['tone'] }}">{{ $metric['delta'] }}</span>
                                    <p>{{ $metric['detail'] }}</p>
                                </article>
                            @endforeach
                        </div>
                    </section>

                    <section class="dashboard-grid-section" data-reveal>
                        <div class="container dashboard-grid">
                            <article class="dashboard-panel dashboard-panel--wide" id="departures" data-dashboard-section>
                                <div class="dashboard-panel__head">
                                    <div>
                                        <p class="dashboard-panel__eyebrow">Departure board</p>
                                        <h2>Today's safari movement</h2>
                                    </div>
                                    <span class="dashboard-panel__badge">5 parties in motion</span>
                                </div>

                                <div class="dashboard-table">
                                    @foreach ($departures as $departure)
                                        <article class="dashboard-table__row">
                                            <div>
                                                <strong>{{ $departure['party'] }}</strong>
                                                <span>{{ $departure['guests'] }}</span>
                                            </div>
                                            <div>
                                                <span class="dashboard-table__label">Routing</span>
                                                <strong>{{ $departure['route'] }}</strong>
                                            </div>
                                            <div>
                                                <span class="dashboard-table__label">Window</span>
                                                <strong>{{ $departure['window'] }}</strong>
                                            </div>
                                            <div>
                                                <span class="dashboard-table__label">Lead</span>
                                                <strong>{{ $departure['lead'] }}</strong>
                                            </div>
                                            <div class="dashboard-table__status">
                                                <span class="status-pill status-pill--{{ $departure['tone'] }}">{{ $departure['status'] }}</span>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </article>

                            <article class="dashboard-panel">
                                <div class="dashboard-panel__head">
                                    <div>
                                        <p class="dashboard-panel__eyebrow">Booking pipeline</p>
                                        <h2>Value by stage</h2>
                                    </div>
                                </div>

                                <div class="dashboard-stack">
                                    @foreach ($pipeline as $stage)
                                        <div class="dashboard-meter">
                                            <div class="dashboard-meter__head">
                                                <div>
                                                    <strong>{{ $stage['stage'] }}</strong>
                                                    <span>{{ $stage['count'] }}</span>
                                                </div>
                                                <strong>{{ $stage['value'] }}</strong>
                                            </div>
                                            <div class="dashboard-meter__track" aria-hidden="true">
                                                <span style="width: {{ $stage['share'] }}%;"></span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </article>

                            <article class="dashboard-panel" id="regions" data-dashboard-section>
                                <div class="dashboard-panel__head">
                                    <div>
                                        <p class="dashboard-panel__eyebrow">Regional load</p>
                                        <h2>Where pressure is building</h2>
                                    </div>
                                </div>

                                <div class="dashboard-stack">
                                    @foreach ($regions as $region)
                                        <article class="region-card">
                                            <div class="region-card__top">
                                                <strong>{{ $region['name'] }}</strong>
                                                <span>{{ $region['load'] }}%</span>
                                            </div>
                                            <p>{{ $region['focus'] }}</p>
                                            <div class="dashboard-meter__track dashboard-meter__track--soft" aria-hidden="true">
                                                <span style="width: {{ $region['load'] }}%;"></span>
                                            </div>
                                            <span class="region-card__meta">{{ $region['camps'] }}</span>
                                        </article>
                                    @endforeach
                                </div>
                            </article>

                            <article class="dashboard-panel" id="concierge" data-dashboard-section>
                                <div class="dashboard-panel__head">
                                    <div>
                                        <p class="dashboard-panel__eyebrow">Concierge queue</p>
                                        <h2>Immediate follow-through</h2>
                                    </div>
                                </div>

                                <div class="dashboard-stack">
                                    @foreach ($conciergeTasks as $task)
                                        <article class="task-card">
                                            <span class="task-card__priority task-card__priority--{{ $task['tone'] }}">{{ $task['priority'] }}</span>
                                            <strong>{{ $task['task'] }}</strong>
                                            <p>{{ $task['owner'] }} | {{ $task['due'] }}</p>
                                        </article>
                                    @endforeach
                                </div>
                            </article>

                            <article class="dashboard-panel dashboard-panel--wide">
                                <div class="dashboard-panel__head">
                                    <div>
                                        <p class="dashboard-panel__eyebrow">Field highlights</p>
                                        <h2>Signals behind the numbers</h2>
                                    </div>
                                </div>

                                <div class="highlight-grid">
                                    @foreach ($highlights as $highlight)
                                        <article class="highlight-card" style="--highlight-image: url('{{ asset($highlight['image']) }}');">
                                            <p class="dashboard-panel__eyebrow">{{ $highlight['metric'] }}</p>
                                            <h3>{{ $highlight['title'] }}</h3>
                                            <p>{{ $highlight['summary'] }}</p>
                                        </article>
                                    @endforeach
                                </div>
                            </article>

                            <article class="dashboard-panel">
                                <div class="dashboard-panel__head">
                                    <div>
                                        <p class="dashboard-panel__eyebrow">Next 72 hours</p>
                                        <h2>Watch list</h2>
                                    </div>
                                </div>

                                <div class="timeline">
                                    @foreach ($timeline as $item)
                                        <article class="timeline__item">
                                            <span class="timeline__time">{{ $item['window'] }}</span>
                                            <div>
                                                <strong>{{ $item['title'] }}</strong>
                                                <p>{{ $item['summary'] }}</p>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </article>
                        </div>
                    </section>

                </main>
            </div>
        </div>
    </div>
@endsection
