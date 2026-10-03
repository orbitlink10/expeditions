@if (! empty($relatedPages))
    <section class="seo-section seo-section--related" data-reveal>
        <div class="container">
            <div class="seo-section__head seo-section__head--center">
                <p class="section-kicker">Continue exploring</p>
                <h2 class="seo-section__title">Related journeys and destinations</h2>
            </div>

            <div class="seo-related">
                @foreach ($relatedPages as $related)
                    <a class="seo-related__card" href="{{ $related['canonical'] }}">
                        <span class="seo-related__eyebrow">{{ $related['eyebrow'] }}</span>
                        <strong>{{ $related['h1'] }}</strong>
                        <span class="seo-related__more">View more</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif
