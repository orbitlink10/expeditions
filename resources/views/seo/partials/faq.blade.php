@if (! empty($page['faqs']))
    <section class="seo-section seo-section--faq" data-reveal>
        <div class="container">
            <div class="seo-section__head seo-section__head--center">
                <p class="section-kicker">Frequently asked questions</p>
                <h2 class="seo-section__title">Everything you need to know</h2>
            </div>

            <div class="seo-faq">
                @foreach ($page['faqs'] as $faq)
                    <details class="seo-faq__item">
                        <summary>{{ $faq['q'] }}</summary>
                        <p>{{ $faq['a'] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>
@endif
