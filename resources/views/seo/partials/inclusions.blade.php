@if (! empty($page['inclusions']) || ! empty($page['exclusions']))
    <section class="seo-section seo-section--inclusions" data-reveal>
        <div class="container">
            <div class="seo-section__head seo-section__head--center">
                <p class="section-kicker">The detail</p>
                <h2 class="seo-section__title">What's included</h2>
            </div>

            <div class="seo-inclusions">
                @if (! empty($page['inclusions']))
                    <div class="seo-inclusions__col seo-inclusions__col--yes">
                        <h3>Included</h3>
                        <ul class="seo-bullets">
                            @foreach ($page['inclusions'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (! empty($page['exclusions']))
                    <div class="seo-inclusions__col seo-inclusions__col--no">
                        <h3>Not included</h3>
                        <ul class="seo-bullets seo-bullets--muted">
                            @foreach ($page['exclusions'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endif
