<a class="brand {{ $class ?? '' }}" href="{{ $href }}" aria-label="{{ $ariaLabel }}">
    @if (! empty($logoUrl))
        <span class="brand-logo-wrap" aria-hidden="true">
            <img class="brand-logo" src="{{ $logoUrl }}" alt="">
        </span>
    @else
        <span class="brand-mark" aria-hidden="true">
            <span class="brand-mark__face"></span>
        </span>
    @endif

    <span class="brand-copy">
        <span class="brand-copy__title">{{ $title }}</span>
        @if (! empty($subtitle))
            <span class="brand-copy__subtitle">{{ $subtitle }}</span>
        @endif
    </span>
</a>
