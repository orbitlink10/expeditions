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
                    <p class="dashboard-nav__heading">Operations management</p>
                    @foreach ($navLinks as $link)
                        <a
                            class="dashboard-nav__link{{ (isset($activeMenu) ? $activeMenu === $link['code'] : $link['code'] === 'HM') ? ' is-active' : '' }}"
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
                        <a class="button button--accent" href="mailto:{{ config('company.email') }}?subject=Operations%20Dashboard%20Follow-up">Alert concierge</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dashboard-chip dashboard-chip--button" type="submit">Sign out</button>
                        </form>
                    </div>
                </div>
            </aside>