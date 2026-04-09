@php
    $editorSections = [
        ['id' => 'editor-brand-seo', 'code' => 'BR', 'label' => 'Brand and SEO', 'detail' => 'Logo, name and metadata'],
        ['id' => 'editor-menu-drawer', 'code' => 'MN', 'label' => 'Menu drawer', 'detail' => 'Top navigation callout'],
        ['id' => 'editor-hero', 'code' => 'HR', 'label' => 'Hero', 'detail' => 'Main landing section'],
        ['id' => 'editor-feature-band', 'code' => 'FB', 'label' => 'Feature band', 'detail' => 'Introductory message'],
        ['id' => 'editor-story', 'code' => 'ST', 'label' => 'Story', 'detail' => 'Editorial section copy'],
        ['id' => 'editor-section-copy', 'code' => 'CP', 'label' => 'Section copy', 'detail' => 'Journeys, FAQ and footer'],
        ['id' => 'editor-destinations', 'code' => 'DS', 'label' => 'Destinations', 'detail' => 'Homepage destination cards'],
        ['id' => 'editor-journeys', 'code' => 'JR', 'label' => 'Journeys', 'detail' => 'Signature journey cards'],
        ['id' => 'editor-experiences', 'code' => 'XP', 'label' => 'Experiences', 'detail' => 'Experience cards'],
        ['id' => 'editor-faqs', 'code' => 'FQ', 'label' => 'FAQs', 'detail' => 'Question cards'],
    ];
@endphp

<section class="editor-section" id="content-editor" data-reveal data-dashboard-section>
    <div class="container">
        <div class="editor-head">
            <div>
                <p class="dashboard-panel__eyebrow">Homepage editor</p>
                <h2>Edit homepage content and upload your logo.</h2>
            </div>
            <div class="editor-meta">
                <span class="dashboard-panel__badge">Current logo {{ $homepageBrand['logo_url'] ? 'uploaded' : 'not set' }}</span>
                @if ($homepageLastUpdatedAt)
                    <span class="dashboard-panel__badge">Last updated {{ $homepageLastUpdatedAt }}</span>
                @endif
            </div>
        </div>

        @if (session('status'))
            <div class="editor-alert editor-alert--success">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="editor-alert editor-alert--error">The homepage editor could not save yet. Review the highlighted fields and try again.</div>
        @endif

        <form class="editor-form" method="POST" action="{{ route('dashboard.homepage.update') }}" enctype="multipart/form-data">
            @csrf

            <div class="editor-shell">
                <aside class="editor-menu">
                    <div class="editor-menu__head">
                        <p class="dashboard-panel__eyebrow">Edit menu</p>
                        <h3>Homepage sections</h3>
                        <p>Jump straight to the part of the homepage you want to revise.</p>
                    </div>

                    <nav class="editor-menu__nav" aria-label="Homepage editor sections">
                        @foreach ($editorSections as $section)
                            <a
                                class="editor-menu__link{{ $loop->first ? ' is-active' : '' }}"
                                href="#{{ $section['id'] }}"
                                data-editor-link
                                data-editor-target="{{ $section['id'] }}"
                            >
                                <span class="editor-menu__code" aria-hidden="true">{{ $section['code'] }}</span>
                                <span>
                                    <strong>{{ $section['label'] }}</strong>
                                    <small>{{ $section['detail'] }}</small>
                                </span>
                            </a>
                        @endforeach
                    </nav>

                    <div class="editor-menu__meta">
                        <span class="dashboard-panel__badge">{{ count($editorSections) }} editing groups</span>
                        <a class="dashboard-chip" href="{{ route('home') }}" target="_blank" rel="noreferrer">Preview homepage</a>
                    </div>
                </aside>

                <div class="editor-form__body">
                    <div class="editor-grid">
                <article class="editor-card" id="editor-brand-seo" data-editor-section>
                    <div class="dashboard-panel__head">
                        <div>
                            <p class="dashboard-panel__eyebrow">Brand and SEO</p>
                            <h3>Logo, site title and metadata</h3>
                        </div>
                    </div>

                    <div class="editor-fields editor-fields--two">
                        <label class="editor-field">
                            <span>Brand name</span>
                            <input type="text" name="brand[name]" value="{{ old('brand.name', $homepageContent['brand']['name']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Brand subtitle</span>
                            <input type="text" name="brand[subtitle]" value="{{ old('brand.subtitle', $homepageContent['brand']['subtitle']) }}">
                        </label>

                        <label class="editor-field editor-field--full">
                            <span>Browser title</span>
                            <input type="text" name="seo[title]" value="{{ old('seo.title', $homepageContent['seo']['title']) }}">
                        </label>

                        <label class="editor-field editor-field--full">
                            <span>Meta description</span>
                            <textarea name="seo[description]" rows="3">{{ old('seo.description', $homepageContent['seo']['description']) }}</textarea>
                        </label>
                    </div>

                    <div class="editor-logo">
                        <div class="editor-logo__preview">
                            @if ($homepageBrand['logo_url'])
                                <img src="{{ $homepageBrand['logo_url'] }}" alt="{{ $homepageBrand['full_name'] }} logo preview">
                            @else
                                <div class="editor-logo__placeholder">No uploaded logo</div>
                            @endif
                        </div>

                        <div class="editor-logo__controls">
                            <label class="editor-field">
                                <span>Upload logo</span>
                                <input type="file" name="logo" accept=".jpg,.jpeg,.png,.webp">
                            </label>

                            <label class="editor-check">
                                <input type="checkbox" name="remove_logo" value="1" @checked(old('remove_logo'))>
                                <span>Remove current uploaded logo and fall back to the default mark</span>
                            </label>
                        </div>
                    </div>
                </article>

                <article class="editor-card" id="editor-menu-drawer" data-editor-section>
                    <div class="dashboard-panel__head">
                        <div>
                            <p class="dashboard-panel__eyebrow">Menu drawer</p>
                            <h3>Top navigation callout</h3>
                        </div>
                    </div>

                    <div class="editor-fields">
                        <label class="editor-field">
                            <span>Kicker</span>
                            <input type="text" name="menuDrawer[kicker]" value="{{ old('menuDrawer.kicker', $homepageContent['menuDrawer']['kicker']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Title</span>
                            <input type="text" name="menuDrawer[title]" value="{{ old('menuDrawer.title', $homepageContent['menuDrawer']['title']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Body</span>
                            <textarea name="menuDrawer[body]" rows="3">{{ old('menuDrawer.body', $homepageContent['menuDrawer']['body']) }}</textarea>
                        </label>

                        <label class="editor-field">
                            <span>Button label</span>
                            <input type="text" name="menuDrawer[buttonLabel]" value="{{ old('menuDrawer.buttonLabel', $homepageContent['menuDrawer']['buttonLabel']) }}">
                        </label>
                    </div>
                </article>

                <article class="editor-card editor-card--wide" id="editor-hero" data-editor-section>
                    <div class="dashboard-panel__head">
                        <div>
                            <p class="dashboard-panel__eyebrow">Hero section</p>
                            <h3>Main homepage hero</h3>
                        </div>
                    </div>

                    <div class="editor-fields editor-fields--two">
                        <label class="editor-field">
                            <span>Eyebrow</span>
                            <input type="text" name="hero[eyebrow]" value="{{ old('hero.eyebrow', $homepageContent['hero']['eyebrow']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Title</span>
                            <input type="text" name="hero[title]" value="{{ old('hero.title', $homepageContent['hero']['title']) }}">
                        </label>

                        <label class="editor-field editor-field--full">
                            <span>Subtitle</span>
                            <textarea name="hero[subtitle]" rows="3">{{ old('hero.subtitle', $homepageContent['hero']['subtitle']) }}</textarea>
                        </label>

                        <label class="editor-field">
                            <span>Primary button</span>
                            <input type="text" name="hero[buttons][primary]" value="{{ old('hero.buttons.primary', $homepageContent['hero']['buttons']['primary']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Secondary button</span>
                            <input type="text" name="hero[buttons][secondary]" value="{{ old('hero.buttons.secondary', $homepageContent['hero']['buttons']['secondary']) }}">
                        </label>

                        <label class="editor-field editor-field--full">
                            <span>Hero background image</span>
                            <input type="text" name="hero[image]" value="{{ old('hero.image', $homepageContent['hero']['image']) }}">
                        </label>
                    </div>

                    <div class="editor-subgrid">
                        <div class="editor-stack">
                            <p class="editor-subtitle">Breadcrumbs</p>
                            @foreach ($homepageContent['hero']['breadcrumbs'] as $index => $breadcrumb)
                                <label class="editor-field">
                                    <span>Breadcrumb {{ $loop->iteration }}</span>
                                    <input type="text" name="hero[breadcrumbs][{{ $index }}]" value="{{ old("hero.breadcrumbs.$index", $breadcrumb) }}">
                                </label>
                            @endforeach
                        </div>

                        <div class="editor-stack">
                            <p class="editor-subtitle">Hero stats</p>
                            @foreach ($homepageContent['hero']['stats'] as $index => $stat)
                                <div class="editor-fields editor-fields--two editor-fields--tight">
                                    <label class="editor-field">
                                        <span>Value {{ $loop->iteration }}</span>
                                        <input type="text" name="hero[stats][{{ $index }}][value]" value="{{ old("hero.stats.$index.value", $stat['value']) }}">
                                    </label>

                                    <label class="editor-field">
                                        <span>Label {{ $loop->iteration }}</span>
                                        <input type="text" name="hero[stats][{{ $index }}][label]" value="{{ old("hero.stats.$index.label", $stat['label']) }}">
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </article>

                <article class="editor-card" id="editor-feature-band" data-editor-section>
                    <div class="dashboard-panel__head">
                        <div>
                            <p class="dashboard-panel__eyebrow">Feature band</p>
                            <h3>Introductory message</h3>
                        </div>
                    </div>

                    <div class="editor-fields">
                        <label class="editor-field">
                            <span>Badge top</span>
                            <input type="text" name="featured[badgeTop]" value="{{ old('featured.badgeTop', $homepageContent['featured']['badgeTop']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Badge year</span>
                            <input type="text" name="featured[badgeYear]" value="{{ old('featured.badgeYear', $homepageContent['featured']['badgeYear']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Title</span>
                            <textarea name="featured[title]" rows="3">{{ old('featured.title', $homepageContent['featured']['title']) }}</textarea>
                        </label>

                        <label class="editor-field">
                            <span>Subtitle</span>
                            <textarea name="featured[subtitle]" rows="3">{{ old('featured.subtitle', $homepageContent['featured']['subtitle']) }}</textarea>
                        </label>
                    </div>
                </article>

                <article class="editor-card" id="editor-story" data-editor-section>
                    <div class="dashboard-panel__head">
                        <div>
                            <p class="dashboard-panel__eyebrow">Story section</p>
                            <h3>Editorial content</h3>
                        </div>
                    </div>

                    <div class="editor-fields">
                        <label class="editor-field">
                            <span>Eyebrow</span>
                            <input type="text" name="story[eyebrow]" value="{{ old('story.eyebrow', $homepageContent['story']['eyebrow']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Title</span>
                            <textarea name="story[title]" rows="3">{{ old('story.title', $homepageContent['story']['title']) }}</textarea>
                        </label>

                        @foreach ($homepageContent['story']['paragraphs'] as $index => $paragraph)
                            <label class="editor-field">
                                <span>Paragraph {{ $loop->iteration }}</span>
                                <textarea name="story[paragraphs][{{ $index }}]" rows="4">{{ old("story.paragraphs.$index", $paragraph) }}</textarea>
                            </label>
                        @endforeach

                        <label class="editor-field">
                            <span>Panel kicker</span>
                            <input type="text" name="story[panelKicker]" value="{{ old('story.panelKicker', $homepageContent['story']['panelKicker']) }}">
                        </label>

                        <label class="editor-field">
                            <span>Panel title</span>
                            <input type="text" name="story[panelTitle]" value="{{ old('story.panelTitle', $homepageContent['story']['panelTitle']) }}">
                        </label>

                        @foreach ($homepageContent['story']['panelItems'] as $index => $item)
                            <label class="editor-field">
                                <span>Panel item {{ $loop->iteration }}</span>
                                <input type="text" name="story[panelItems][{{ $index }}]" value="{{ old("story.panelItems.$index", $item) }}">
                            </label>
                        @endforeach
                    </div>
                </article>
                    </div>

                    @include('partials.dashboard-homepage-editor-sections')
                </div>
            </div>

            <div class="editor-actions">
                <button class="button button--accent" type="submit">Save homepage content</button>
                <a class="dashboard-chip" href="{{ route('home') }}" target="_blank" rel="noreferrer">Preview homepage</a>
            </div>
        </form>
    </div>
</section>
