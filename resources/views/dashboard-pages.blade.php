@extends('layouts.dashboard-management')
@section('management')
<p class="dashboard-eyebrow">Content library</p>
<h1>Published pages</h1>
<p class="management-description">
    {{ $totalPages }} live pages across {{ $totalLocales }} regions. Create a page or select Edit to update its content.
</p>

<p><a class="button button--accent" href="{{ route('dashboard.pages.create') }}">Create new page</a></p>

<div class="pages-admin__summary">
    @foreach ($groups as $locale => $pages)
        <div class="pages-admin__stat">
            <strong>{{ $pages->count() }}</strong>
            <span>{{ $localeLabels[$locale] ?? strtoupper($locale) }}</span>
        </div>
    @endforeach
    <div class="pages-admin__stat">
        <strong>{{ $totalPages }}</strong>
        <span>Total pages</span>
    </div>
</div>

<div class="pages-admin">
    @foreach ($groups as $locale => $pages)
        <article class="dashboard-panel">
            <div class="dashboard-panel__head">
                <div>
                    <p class="dashboard-panel__eyebrow">{{ $locale }}</p>
                    <h2>{{ $localeLabels[$locale] ?? strtoupper($locale) }} pages</h2>
                </div>
                <span class="dashboard-panel__badge">{{ $pages->count() }} pages</span>
            </div>

            <div class="pages-admin__grid">
                @foreach ($pages as $page)
                    <div class="pages-admin__item">
                        <div>
                            <strong>{{ $page['h1'] }}</strong>
                            <span>{{ $page['canonical'] }}</span>
                        </div>
                        <div class="pages-admin__meta">
                            @if (in_array($page['path'], $overridden, true))
                                <span class="pages-admin__badge pages-admin__badge--edited">Edited</span>
                            @endif
                            <span class="pages-admin__badge">{{ $page['type'] }}</span>
                            <a class="dashboard-chip" href="{{ route('dashboard.pages.edit', ['path' => $page['path']]) }}">Edit</a>
                            <a class="dashboard-chip" href="{{ $page['canonical'] }}" target="_blank" rel="noopener">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </article>
    @endforeach
</div>
@endsection
