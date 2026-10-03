@if (! empty($page['itinerary']))
    <section class="seo-section seo-section--itinerary" data-reveal>
        <div class="container">
            <div class="seo-section__head seo-section__head--center">
                <p class="section-kicker">Day by day</p>
                <h2 class="seo-section__title">Your journey at a glance</h2>
            </div>

            <ol class="seo-timeline">
                @foreach ($page['itinerary'] as $day)
                    <li class="seo-timeline__item">
                        <span class="seo-timeline__day">{{ $day['day'] }}</span>
                        <div class="seo-timeline__body">
                            <h3>{{ $day['title'] }}</h3>
                            <p>{{ $day['text'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>
@endif
