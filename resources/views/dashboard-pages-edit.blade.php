@extends('layouts.app')

@php
    $hero = $page['hero_image'] ?? config('seo.site.default_image');
    $sectionRows = old('sections', $page['sections'] ?? []);
    $normalizedSections = collect($sectionRows)->map(function ($section) {
        $paragraphs = $section['paragraphs'] ?? '';
        $bullets = $section['bullets'] ?? '';

        return [
            'kicker' => $section['kicker'] ?? '',
            'title' => $section['title'] ?? '',
            'paragraphs' => is_array($paragraphs) ? implode("\n", $paragraphs) : $paragraphs,
            'bullets' => is_array($bullets) ? implode("\n", $bullets) : $bullets,
        ];
    })->all();
@endphp

@section('content')
    <div class="homepage-editor-page">
        <header class="homepage-editor-header" data-header>
            <div class="container homepage-editor-header__inner">
                @include('partials.brand', [
                    'class' => 'homepage-editor-brand',
                    'href' => route('dashboard.pages.index'),
                    'ariaLabel' => 'Caracal Expeditions published pages',
                    'logoUrl' => $homepageBrand['logo_url'],
                    'title' => $homepageBrand['name'],
                    'subtitle' => 'Page Editor',
                ])

                <div class="homepage-editor-header__actions">
                    <a class="homepage-editor-link" href="{{ route('dashboard.pages.index') }}">All pages</a>
                    <a class="homepage-editor-link" href="{{ $page['canonical'] }}" target="_blank" rel="noreferrer">View page</a>
                    <a class="homepage-editor-link" href="{{ route('dashboard') }}">Dashboard</a>
                    <span class="homepage-editor-user">{{ $dashboardUser }}</span>
                </div>
            </div>
        </header>

        <main class="homepage-editor-main">
            <section class="homepage-editor-hero">
                <div class="container homepage-editor-hero__inner">
                    <p class="homepage-editor-hero__eyebrow">{{ $page['locale'] ?? 'en' }} · {{ $page['eyebrow'] ?? '' }}</p>
                    <h1>{{ $page['h1'] }}</h1>
                    <p>Edit the metadata, hero, sections and FAQs for this page. Saving publishes your changes to the live website immediately.</p>

                    <div class="homepage-editor-hero__meta">
                        <span class="homepage-editor-pill">{{ $hasOverride ? 'Dashboard content' : 'Original content' }}</span>
                        <span class="homepage-editor-pill">{{ $page['path'] }}</span>
                    </div>
                </div>
            </section>

            <section class="editor-section" id="content-editor">
                <div class="container">
                    @if (session('status'))
                        <div class="editor-alert editor-alert--success">{{ session('status') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="editor-alert editor-alert--error">This page could not be saved. Review the highlighted fields and try again.</div>
                    @endif

                    <form class="editor-form" method="POST" action="{{ route('dashboard.pages.update', ['path' => $pagePath]) }}">
                        @csrf
                        @method('PUT')

                        <div class="editor-grid">
                            <article class="editor-card editor-card--wide">
                                <div class="dashboard-panel__head">
                                    <div>
                                        <p class="dashboard-panel__eyebrow">SEO metadata &amp; hero</p>
                                        <h3>{{ $page['h1'] }}</h3>
                                    </div>
                                </div>

                                <div class="editor-fields editor-fields--two">
                                    <label class="editor-field">
                                        <span>Browser title</span>
                                        <input type="text" name="title" value="{{ old('title', $page['title']) }}">
                                    </label>
                                    <label class="editor-field">
                                        <span>Eyebrow</span>
                                        <input type="text" name="eyebrow" value="{{ old('eyebrow', $page['eyebrow'] ?? '') }}">
                                    </label>
                                    <label class="editor-field editor-field--full">
                                        <span>H1 heading</span>
                                        <input type="text" name="h1" value="{{ old('h1', $page['h1']) }}">
                                    </label>
                                    <label class="editor-field editor-field--full">
                                        <span>Meta description</span>
                                        <textarea name="description" rows="3">{{ old('description', $page['description']) }}</textarea>
                                    </label>
                                    <label class="editor-field editor-field--full">
                                        <span>Hero subtitle</span>
                                        <textarea name="subtitle" rows="3">{{ old('subtitle', $page['subtitle'] ?? '') }}</textarea>
                                    </label>
                                    <label class="editor-field">
                                        <span>Hero image (path or URL)</span>
                                        <input type="text" name="hero_image" value="{{ old('hero_image', $page['hero_image'] ?? '') }}">
                                    </label>
                                    <label class="editor-field">
                                        <span>Hero image alt text</span>
                                        <input type="text" name="hero_alt" value="{{ old('hero_alt', $page['hero_alt'] ?? '') }}">
                                    </label>
                                </div>
                            </article>

                            @if (array_key_exists('stats', $basePage))
                                <article class="editor-card editor-card--wide">
                                    <div class="dashboard-panel__head">
                                        <div>
                                            <p class="dashboard-panel__eyebrow">Hero stats</p>
                                            <h3>Three quick facts</h3>
                                        </div>
                                    </div>

                                    <input type="hidden" name="stats_present" value="1">
                                    @php $statRows = old('stats', $page['stats'] ?? []); @endphp
                                    <div data-repeater>
                                        <div data-repeater-list class="editor-repeater-grid">
                                            @foreach ($statRows as $index => $stat)
                                                <article class="editor-repeater" data-repeater-row>
                                                    <div class="editor-fields editor-fields--two editor-fields--tight">
                                                        <label class="editor-field">
                                                            <span>Value</span>
                                                            <input type="text" name="stats[{{ $index }}][value]" value="{{ $stat['value'] ?? '' }}">
                                                        </label>
                                                        <label class="editor-field">
                                                            <span>Label</span>
                                                            <input type="text" name="stats[{{ $index }}][label]" value="{{ $stat['label'] ?? '' }}">
                                                        </label>
                                                    </div>
                                                    <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                                </article>
                                            @endforeach
                                        </div>
                                        <template>
                                            <article class="editor-repeater" data-repeater-row>
                                                <div class="editor-fields editor-fields--two editor-fields--tight">
                                                    <label class="editor-field">
                                                        <span>Value</span>
                                                        <input type="text" name="stats[__INDEX__][value]" value="">
                                                    </label>
                                                    <label class="editor-field">
                                                        <span>Label</span>
                                                        <input type="text" name="stats[__INDEX__][label]" value="">
                                                    </label>
                                                </div>
                                                <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                            </article>
                                        </template>
                                        <button class="dashboard-chip" type="button" data-repeater-add>Add stat</button>
                                    </div>
                                </article>
                            @endif

                            @if (array_key_exists('facts', $basePage))
                                <article class="editor-card editor-card--wide">
                                    <div class="dashboard-panel__head">
                                        <div>
                                            <p class="dashboard-panel__eyebrow">Journey facts</p>
                                            <h3>Duration, regions and style</h3>
                                        </div>
                                    </div>

                                    <input type="hidden" name="facts_present" value="1">
                                    @php $factRows = old('facts', $page['facts'] ?? []); @endphp
                                    <div data-repeater>
                                        <div data-repeater-list class="editor-repeater-grid">
                                            @foreach ($factRows as $index => $fact)
                                                <article class="editor-repeater" data-repeater-row>
                                                    <div class="editor-fields editor-fields--two editor-fields--tight">
                                                        <label class="editor-field">
                                                            <span>Label</span>
                                                            <input type="text" name="facts[{{ $index }}][label]" value="{{ $fact['label'] ?? '' }}">
                                                        </label>
                                                        <label class="editor-field">
                                                            <span>Value</span>
                                                            <input type="text" name="facts[{{ $index }}][value]" value="{{ $fact['value'] ?? '' }}">
                                                        </label>
                                                    </div>
                                                    <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                                </article>
                                            @endforeach
                                        </div>
                                        <template>
                                            <article class="editor-repeater" data-repeater-row>
                                                <div class="editor-fields editor-fields--two editor-fields--tight">
                                                    <label class="editor-field">
                                                        <span>Label</span>
                                                        <input type="text" name="facts[__INDEX__][label]" value="">
                                                    </label>
                                                    <label class="editor-field">
                                                        <span>Value</span>
                                                        <input type="text" name="facts[__INDEX__][value]" value="">
                                                    </label>
                                                </div>
                                                <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                            </article>
                                        </template>
                                        <button class="dashboard-chip" type="button" data-repeater-add>Add fact</button>
                                    </div>
                                </article>
                            @endif

                            @if (array_key_exists('sections', $basePage))
                                <article class="editor-card editor-card--wide">
                                    <div class="dashboard-panel__head">
                                        <div>
                                            <p class="dashboard-panel__eyebrow">Editorial sections</p>
                                            <h3>Body content</h3>
                                        </div>
                                    </div>

                                    <input type="hidden" name="sections_present" value="1">
                                    <div data-repeater>
                                        <div data-repeater-list class="editor-repeater-grid">
                                            @foreach ($normalizedSections as $index => $section)
                                                <article class="editor-repeater" data-repeater-row>
                                                    <div class="editor-fields">
                                                        <label class="editor-field">
                                                            <span>Kicker</span>
                                                            <input type="text" name="sections[{{ $index }}][kicker]" value="{{ $section['kicker'] }}">
                                                        </label>
                                                        <label class="editor-field">
                                                            <span>Heading</span>
                                                            <input type="text" name="sections[{{ $index }}][title]" value="{{ $section['title'] }}">
                                                        </label>
                                                        <label class="editor-field">
                                                            <span>Paragraphs (one per line)</span>
                                                            <textarea name="sections[{{ $index }}][paragraphs]" rows="5">{{ $section['paragraphs'] }}</textarea>
                                                        </label>
                                                        <label class="editor-field">
                                                            <span>Bullets (one per line, optional)</span>
                                                            <textarea name="sections[{{ $index }}][bullets]" rows="4">{{ $section['bullets'] }}</textarea>
                                                        </label>
                                                    </div>
                                                    <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                                </article>
                                            @endforeach
                                        </div>
                                        <template>
                                            <article class="editor-repeater" data-repeater-row>
                                                <div class="editor-fields">
                                                    <label class="editor-field">
                                                        <span>Kicker</span>
                                                        <input type="text" name="sections[__INDEX__][kicker]" value="">
                                                    </label>
                                                    <label class="editor-field">
                                                        <span>Heading</span>
                                                        <input type="text" name="sections[__INDEX__][title]" value="">
                                                    </label>
                                                    <label class="editor-field">
                                                        <span>Paragraphs (one per line)</span>
                                                        <textarea name="sections[__INDEX__][paragraphs]" rows="5"></textarea>
                                                    </label>
                                                    <label class="editor-field">
                                                        <span>Bullets (one per line, optional)</span>
                                                        <textarea name="sections[__INDEX__][bullets]" rows="4"></textarea>
                                                    </label>
                                                </div>
                                                <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                            </article>
                                        </template>
                                        <button class="dashboard-chip" type="button" data-repeater-add>Add section</button>
                                    </div>
                                </article>
                            @endif

                            @if (array_key_exists('itinerary', $basePage))
                                <article class="editor-card editor-card--wide">
                                    <div class="dashboard-panel__head">
                                        <div>
                                            <p class="dashboard-panel__eyebrow">Day by day</p>
                                            <h3>Itinerary</h3>
                                        </div>
                                    </div>

                                    <input type="hidden" name="itinerary_present" value="1">
                                    @php $itineraryRows = old('itinerary', $page['itinerary'] ?? []); @endphp
                                    <div data-repeater>
                                        <div data-repeater-list class="editor-repeater-grid">
                                            @foreach ($itineraryRows as $index => $day)
                                                <article class="editor-repeater" data-repeater-row>
                                                    <div class="editor-fields">
                                                        <label class="editor-field">
                                                            <span>Day label</span>
                                                            <input type="text" name="itinerary[{{ $index }}][day]" value="{{ $day['day'] ?? '' }}">
                                                        </label>
                                                        <label class="editor-field">
                                                            <span>Title</span>
                                                            <input type="text" name="itinerary[{{ $index }}][title]" value="{{ $day['title'] ?? '' }}">
                                                        </label>
                                                        <label class="editor-field">
                                                            <span>Description</span>
                                                            <textarea name="itinerary[{{ $index }}][text]" rows="3">{{ $day['text'] ?? '' }}</textarea>
                                                        </label>
                                                    </div>
                                                    <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                                </article>
                                            @endforeach
                                        </div>
                                        <template>
                                            <article class="editor-repeater" data-repeater-row>
                                                <div class="editor-fields">
                                                    <label class="editor-field">
                                                        <span>Day label</span>
                                                        <input type="text" name="itinerary[__INDEX__][day]" value="">
                                                    </label>
                                                    <label class="editor-field">
                                                        <span>Title</span>
                                                        <input type="text" name="itinerary[__INDEX__][title]" value="">
                                                    </label>
                                                    <label class="editor-field">
                                                        <span>Description</span>
                                                        <textarea name="itinerary[__INDEX__][text]" rows="3"></textarea>
                                                    </label>
                                                </div>
                                                <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                            </article>
                                        </template>
                                        <button class="dashboard-chip" type="button" data-repeater-add>Add day</button>
                                    </div>
                                </article>
                            @endif

                            @if (array_key_exists('inclusions', $basePage) || array_key_exists('exclusions', $basePage))
                                <article class="editor-card editor-card--wide">
                                    <div class="dashboard-panel__head">
                                        <div>
                                            <p class="dashboard-panel__eyebrow">What's included</p>
                                            <h3>Inclusions and exclusions</h3>
                                        </div>
                                    </div>

                                    <div class="editor-fields editor-fields--two">
                                        @if (array_key_exists('inclusions', $basePage))
                                            <input type="hidden" name="inclusions_present" value="1">
                                            <label class="editor-field">
                                                <span>Included (one per line)</span>
                                                <textarea name="inclusions" rows="8">{{ old('inclusions', implode("\n", $page['inclusions'] ?? [])) }}</textarea>
                                            </label>
                                        @endif
                                        @if (array_key_exists('exclusions', $basePage))
                                            <input type="hidden" name="exclusions_present" value="1">
                                            <label class="editor-field">
                                                <span>Not included (one per line)</span>
                                                <textarea name="exclusions" rows="8">{{ old('exclusions', implode("\n", $page['exclusions'] ?? [])) }}</textarea>
                                            </label>
                                        @endif
                                    </div>
                                </article>
                            @endif

                            @if (array_key_exists('faqs', $basePage))
                                <article class="editor-card editor-card--wide">
                                    <div class="dashboard-panel__head">
                                        <div>
                                            <p class="dashboard-panel__eyebrow">FAQs</p>
                                            <h3>Questions and answers</h3>
                                        </div>
                                    </div>

                                    <input type="hidden" name="faqs_present" value="1">
                                    @php $faqRows = old('faqs', $page['faqs'] ?? []); @endphp
                                    <div data-repeater>
                                        <div data-repeater-list class="editor-repeater-grid">
                                            @foreach ($faqRows as $index => $faq)
                                                <article class="editor-repeater" data-repeater-row>
                                                    <div class="editor-fields">
                                                        <label class="editor-field">
                                                            <span>Question</span>
                                                            <input type="text" name="faqs[{{ $index }}][q]" value="{{ $faq['q'] ?? '' }}">
                                                        </label>
                                                        <label class="editor-field">
                                                            <span>Answer</span>
                                                            <textarea name="faqs[{{ $index }}][a]" rows="3">{{ $faq['a'] ?? '' }}</textarea>
                                                        </label>
                                                    </div>
                                                    <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                                </article>
                                            @endforeach
                                        </div>
                                        <template>
                                            <article class="editor-repeater" data-repeater-row>
                                                <div class="editor-fields">
                                                    <label class="editor-field">
                                                        <span>Question</span>
                                                        <input type="text" name="faqs[__INDEX__][q]" value="">
                                                    </label>
                                                    <label class="editor-field">
                                                        <span>Answer</span>
                                                        <textarea name="faqs[__INDEX__][a]" rows="3"></textarea>
                                                    </label>
                                                </div>
                                                <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                            </article>
                                        </template>
                                        <button class="dashboard-chip" type="button" data-repeater-add>Add FAQ</button>
                                    </div>
                                </article>
                            @endif

                            @if (array_key_exists('related', $basePage))
                                <article class="editor-card editor-card--wide">
                                    <div class="dashboard-panel__head">
                                        <div>
                                            <p class="dashboard-panel__eyebrow">Related pages</p>
                                            <h3>Internal links</h3>
                                        </div>
                                    </div>

                                    <input type="hidden" name="related_present" value="1">
                                    @php $relatedRows = old('related', $page['related'] ?? []); @endphp
                                    <div data-repeater>
                                        <div data-repeater-list class="editor-repeater-grid">
                                            @foreach ($relatedRows as $index => $relatedPath)
                                                <article class="editor-repeater" data-repeater-row>
                                                    <label class="editor-field">
                                                        <span>Page path</span>
                                                        <input type="text" name="related[{{ $index }}]" value="{{ $relatedPath }}" list="seo-page-keys">
                                                    </label>
                                                    <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                                </article>
                                            @endforeach
                                        </div>
                                        <template>
                                            <article class="editor-repeater" data-repeater-row>
                                                <label class="editor-field">
                                                    <span>Page path</span>
                                                    <input type="text" name="related[__INDEX__]" value="" list="seo-page-keys">
                                                </label>
                                                <button class="dashboard-chip" type="button" data-repeater-remove>Remove</button>
                                            </article>
                                        </template>
                                        <button class="dashboard-chip" type="button" data-repeater-add>Add link</button>
                                    </div>

                                    <datalist id="seo-page-keys">
                                        @foreach ($pageKeys as $key)
                                            <option value="{{ $key }}"></option>
                                        @endforeach
                                    </datalist>
                                </article>
                            @endif
                        </div>

                        <div class="editor-actions">
                            <button class="button button--accent" type="submit">Save page</button>
                            <a class="dashboard-chip" href="{{ $page['canonical'] }}" target="_blank" rel="noreferrer">Preview page</a>
                        </div>
                    </form>

                    @if ($hasOverride)
                        <form class="editor-actions" method="POST" action="{{ route('dashboard.pages.reset', ['path' => $pagePath]) }}">
                            @csrf
                            <button class="dashboard-chip" type="submit">Reset to original content</button>
                        </form>
                    @endif
                </div>
            </section>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('[data-repeater]').forEach(function (repeater) {
                var list = repeater.querySelector('[data-repeater-list]');
                var template = repeater.querySelector('template');
                var add = repeater.querySelector('[data-repeater-add]');

                if (!list || !template || !add) {
                    return;
                }

                add.addEventListener('click', function () {
                    var index = 'n' + Date.now() + Math.floor(Math.random() * 1000);
                    var html = template.innerHTML.replace(/__INDEX__/g, index);
                    var wrapper = document.createElement('div');
                    wrapper.innerHTML = html.trim();
                    list.appendChild(wrapper.firstElementChild);
                });

                list.addEventListener('click', function (event) {
                    var remove = event.target.closest('[data-repeater-remove]');

                    if (remove) {
                        var row = remove.closest('[data-repeater-row]');

                        if (row) {
                            row.remove();
                        }
                    }
                });
            });
        });
    </script>
@endsection
