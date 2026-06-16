@extends('layouts.app')

@section('content')
    <main class="enquiry-page">
        <section class="enquiry-shell">
            <aside class="enquiry-sidebar" aria-label="Company contact details">
                @include('partials.brand', [
                    'class' => 'enquiry-brand',
                    'href' => route('home'),
                    'ariaLabel' => $brand['full_name'].' home',
                    'logoUrl' => $brand['logo_url'],
                    'title' => $brand['name'],
                    'subtitle' => $brand['subtitle'],
                ])

                <div class="enquiry-contact-list">
                    <a href="tel:{{ $companyPhone }}">
                        <span aria-hidden="true">P</span>
                        {{ $companyPhoneLabel }}
                    </a>
                    <a href="mailto:{{ $companyEmail }}">
                        <span aria-hidden="true">E</span>
                        {{ $companyEmail }}
                    </a>
                    <a href="{{ route('home') }}">
                        <span aria-hidden="true">W</span>
                        caracalexpeditions.co.ke
                    </a>
                </div>
            </aside>

            <section class="enquiry-panel" aria-labelledby="enquiry-title">
                <a class="enquiry-back" href="{{ route('home') }}">Back to home</a>
                <p class="section-kicker">Safari planning desk</p>
                <h1 id="enquiry-title">Enquire about this trip</h1>

                @if (session('enquiry_status'))
                    <p class="enquiry-alert enquiry-alert--success">{{ session('enquiry_status') }}</p>
                @endif

                @if (session('enquiry_error'))
                    <p class="enquiry-alert enquiry-alert--error">{{ session('enquiry_error') }}</p>
                @endif

                @if ($errors->any())
                    <p class="enquiry-alert enquiry-alert--error">Please check the highlighted details and try again.</p>
                @endif

                <form id="enquiry-form" class="enquiry-form" method="POST" action="{{ route('enquire.store') }}" data-enquiry-form>
                    @csrf
                    <label class="enquiry-field">
                        <span>Name *</span>
                        <input name="name" type="text" autocomplete="name" value="{{ old('name') }}" required>
                    </label>

                    <label class="enquiry-field">
                        <span>Email *</span>
                        <input name="email" type="email" autocomplete="email" value="{{ old('email') }}" required>
                    </label>

                    <label class="enquiry-field">
                        <span>Telephone *</span>
                        <input name="telephone" type="tel" autocomplete="tel" value="{{ old('telephone') }}" required>
                    </label>

                    <fieldset class="enquiry-preference">
                        <legend>Contact Preference</legend>
                        <label>
                            <input type="radio" name="contact_preference" value="Email" @checked(old('contact_preference', 'Email') === 'Email')>
                            <span>Email</span>
                        </label>
                        <label>
                            <input type="radio" name="contact_preference" value="Phone" @checked(old('contact_preference') === 'Phone')>
                            <span>Phone</span>
                        </label>
                    </fieldset>

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
                        <textarea name="message" rows="5">{{ old('message') }}</textarea>
                    </label>

                </form>

                <div class="enquiry-actions">
                    <button class="button button--accent" type="submit" form="enquiry-form">Send enquiry</button>
                    <a class="button enquiry-button--light" href="mailto:{{ $companyEmail }}?subject=Caracal%20Expeditions%20Enquiry">Email company directly</a>
                    <a class="button enquiry-button--light" href="tel:{{ $companyPhone }}">Call company</a>
                </div>

                <p class="enquiry-note" data-enquiry-note>Send the form to Caracal Expeditions, email us directly, or call the planning desk.</p>

                <section class="enquiry-terms" aria-labelledby="enquiry-terms-title">
                    <div class="enquiry-terms__banner">
                        <h2 id="enquiry-terms-title">Terms and Conditions</h2>
                    </div>

                    <div class="enquiry-terms__body">
                        <h3>Itinerary Terms and Conditions</h3>
                        <p>Please note</p>
                        <ul>
                            <li>This is just a quote</li>
                            <li>No booking has been done</li>
                            <li>Room rates are subject to change and availability at the time of confirmation</li>
                            <li>Booking can only be done once the client has made payment.</li>
                        </ul>
                    </div>
                </section>
            </section>
        </section>
    </main>
@endsection
