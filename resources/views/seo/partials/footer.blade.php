@php
    $registry = app(\App\Support\SeoPageRegistry::class);
    $footerColumns = $nav;
    $footerColumns[] = [
        'label' => 'Company',
        'items' => array_values(array_filter([
            $registry->exists('booking-payment-process') ? ['label' => 'Booking & Payment', 'url' => $registry->url('booking-payment-process')] : null,
            ['label' => 'Enquire', 'url' => route('enquire')],
            ['label' => 'Email Us', 'url' => 'mailto:'.$companyEmail],
            ['label' => 'Call Us', 'url' => 'tel:'.$companyPhone],
        ])),
    ];
@endphp
<footer class="site-footer">
    <div class="container footer-grid">
        @foreach ($footerColumns as $column)
            <div>
                <p class="site-footer__heading">{{ $column['label'] }}</p>
                <ul class="site-footer__list">
                    @foreach ($column['items'] as $item)
                        <li><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <div class="container footer-bottom">
        <p>Caracal Expeditions designs private, tailor-made luxury safaris across Kenya — expert guides, handpicked camps, bush flights and Indian Ocean extensions for international travellers.</p>

        <div class="social-links" aria-label="Social links">
            <a href="#" aria-label="Instagram">IG</a>
            <a href="#" aria-label="Pinterest">PI</a>
            <a href="#" aria-label="YouTube">YT</a>
        </div>
    </div>
</footer>
