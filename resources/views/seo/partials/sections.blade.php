@foreach ($page['sections'] ?? [] as $section)
    <section class="seo-section" data-reveal>
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
    </section>
@endforeach
