@extends('layouts.dashboard-management')
@section('management')
<p class="dashboard-eyebrow">Content library</p>
<h1>Create new page</h1>
<p class="management-description">Add your page details below. Creating the page publishes it on the website. You can then add images, sections and FAQs in the page editor.</p>
<form class="editor-form" method="POST" action="{{ route('dashboard.pages.store') }}">
    @csrf
    <article class="editor-card">
        <div class="editor-fields">
            <label class="editor-field">
                <span>Page URL</span>
                <input name="path" value="{{ old('path') }}" placeholder="our-new-safari" maxlength="200" required aria-describedby="page-url-help">
                <small id="page-url-help">Use lowercase letters, numbers and hyphens, for example our-new-safari or guides/packing.</small>
            </label>
            <label class="editor-field">
                <span>Page heading</span>
                <input name="h1" value="{{ old('h1') }}" maxlength="255" required>
            </label>
            <label class="editor-field">
                <span>Browser title</span>
                <input name="title" value="{{ old('title') }}" maxlength="255" required>
            </label>
            <label class="editor-field">
                <span>Short description</span>
                <textarea name="description" rows="3" maxlength="400" required>{{ old('description') }}</textarea>
            </label>
            <label class="editor-field">
                <span>Page content (one paragraph per line)</span>
                <textarea name="body" rows="10" maxlength="50000" required>{{ old('body') }}</textarea>
            </label>
        </div>
    </article>
    <div class="editor-actions">
        <button class="button button--accent" type="submit">Create and publish page</button>
        <a class="dashboard-chip" href="{{ route('dashboard.pages.index') }}">Cancel</a>
    </div>
</form>
@endsection
