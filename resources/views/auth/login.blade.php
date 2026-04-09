@extends('layouts.app')

@section('content')
    <div class="auth-page">
        <div class="auth-page__backdrop"></div>

        <main class="auth-shell">
            <section class="auth-panel auth-panel--intro" data-reveal>
                @include('partials.brand', [
                    'class' => 'auth-brand',
                    'href' => route('home'),
                    'ariaLabel' => $homepageBrand['full_name'].' home',
                    'logoUrl' => $homepageBrand['logo_url'],
                    'title' => $homepageBrand['name'],
                    'subtitle' => 'Operations',
                ])

                <p class="dashboard-eyebrow">Protected access</p>
                <h1>Enter the safari operations dashboard.</h1>
                <p>Monitor departures, guest readiness, lodge load and concierge follow-through from one secure control room.</p>

                <div class="auth-highlights">
                    <div class="auth-highlight">
                        <span>Live boards</span>
                        <strong>Departures, pipeline and regional load</strong>
                    </div>
                    <div class="auth-highlight">
                        <span>Login user</span>
                        <strong>{{ $demoUsername }}</strong>
                    </div>
                </div>
            </section>

            <section class="auth-panel auth-panel--form" data-reveal>
                <div class="auth-card">
                    <p class="dashboard-panel__eyebrow">Dashboard login</p>
                    <h2>Sign in</h2>
                    <p>Use the provided admin credentials to access the dashboard.</p>

                    <form class="auth-form" method="POST" action="{{ route('login.store') }}">
                        @csrf

                        <label class="auth-field" for="username">
                            <span>Username</span>
                            <input
                                id="username"
                                name="username"
                                type="email"
                                value="{{ old('username', $demoUsername) }}"
                                autocomplete="username"
                                required
                            >
                        </label>

                        @error('username')
                            <p class="auth-error">{{ $message }}</p>
                        @enderror

                        <label class="auth-field" for="password">
                            <span>Password</span>
                            <input
                                id="password"
                                name="password"
                                type="password"
                                autocomplete="current-password"
                                required
                            >
                        </label>

                        @error('password')
                            <p class="auth-error">{{ $message }}</p>
                        @enderror

                        <button class="button button--accent auth-submit" type="submit">Open dashboard</button>
                    </form>
                </div>
            </section>
        </main>
    </div>
@endsection
