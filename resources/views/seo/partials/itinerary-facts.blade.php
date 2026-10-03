@if (! empty($page['facts']))
    <section class="seo-facts" data-reveal>
        <div class="container seo-facts__grid">
            @foreach ($page['facts'] as $fact)
                <div class="seo-fact">
                    <span class="seo-fact__label">{{ $fact['label'] }}</span>
                    <strong class="seo-fact__value">{{ $fact['value'] }}</strong>
                </div>
            @endforeach
        </div>
    </section>
@endif
