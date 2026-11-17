@php
$paths = [
    'search' => 'm21 21-4.5-4.5 M19 10.5a8.5 8.5 0 1 1-17 0 8.5 8.5 0 0 1 17 0',
    'close' => 'm6 6 12 12 M6 18 18 6',
    'settings' => 'm9 3 1-1h4l1 3 3 1 3-1 2 4-2 2v3l2 2-2 4-3-1-3 1-1 3h-4l-1-3-3-1-3 1-2-4 2-2v-3L1 9l2-4 3 1 3-1z M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0',
    'edit' => 'm16 3 5 5-13 13H3v-5L16 3z M13 6l5 5',
    'inbox' => 'M4 3h16l2 12v6H2v-6L4 3z M2 15h6l2 3h4l2-3h6',
    'back' => 'm12 5-7 7 7 7 M5 12h15',
    'refresh' => 'M20 7v5h-5 M20 12a8 8 0 1 0-2 6 M20 7l-3-3',
    'left' => 'm15 6-6 6 6 6',
    'right' => 'm9 6 6 6-6 6',
    'mail' => 'M3 5h18v14H3z M3 5l9 8 9-8',
];
@endphp
<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="{{ $paths[$name] ?? $paths['mail'] }}"/></svg>
