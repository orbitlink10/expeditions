@extends('layouts.dashboard-management')
@push('head')
<link rel="stylesheet" href="{{ asset('css/emails.css') }}?v=4">
@endpush
@section('management')
@php
    $icon = function ($name) { return view('partials.email-icon', ['name' => $name]); };
    $inboxUrl = route('dashboard.inbox.index', array_filter(['q' => request('q'), 'page' => request('page')]));
@endphp
<div class="email-app email-app--embedded">
    <header class="email-header">
        <a class="email-brand" href="{{ route('dashboard.inbox.index') }}" aria-label="Emails home"><span class="email-brand-mark">M</span><span>Emails</span></a>
        <form class="email-search" method="GET" action="{{ route('dashboard.inbox.index') }}" role="search">
            <button class="email-icon-button" type="submit" aria-label="Search mail">{{ $icon('search') }}</button>
            <input type="search" name="q" value="{{ request('q') }}" placeholder="Search mail" aria-label="Search mail" maxlength="200">
            @if(request('q'))<a class="email-icon-button" href="{{ route('dashboard.inbox.index') }}" aria-label="Clear search">{{ $icon('close') }}</a>@endif
        </form>
        <a class="email-icon-button" href="{{ route('dashboard.settings.edit') }}" aria-label="Email settings" title="Email settings">{{ $icon('settings') }}</a>
        <span class="email-avatar" title="{{ $dashboardUser }}">{{ strtoupper(substr($dashboardUser, 0, 1)) }}</span>
    </header>
    <aside class="email-rail">
        <a class="email-compose" href="{{ route('dashboard.inbox.index', ['compose' => 1]) }}">{{ $icon('edit') }}<span>Compose</span></a>
        <nav aria-label="Email navigation">
            <a class="email-folder is-active" href="{{ route('dashboard.inbox.index') }}" aria-current="page">{{ $icon('inbox') }}<span>Inbox</span>@if(($unreadCount ?? 0) > 0)<strong aria-label="{{ $unreadCount }} unread emails">{{ number_format($unreadCount) }}</strong>@endif</a>
            <a class="email-folder" href="{{ route('dashboard.settings.edit') }}">{{ $icon('settings') }}<span>Email settings</span></a>
            <a class="email-folder" href="{{ route('dashboard') }}">{{ $icon('back') }}<span>Operations dashboard</span></a>
        </nav>
        <div class="email-account"><strong>Connected account</strong><span>{{ $mailboxAddress ?: 'No account connected' }}</span></div>
    </aside>
    <section class="email-surface" aria-label="Emails">
        <div class="email-toolbar">
            @if($selected)<a class="email-icon-button" href="{{ $inboxUrl }}" aria-label="Back to inbox">{{ $icon('back') }}</a>@else<span class="email-toolbar-label">{{ request('q') ? 'Search results' : 'Inbox' }}</span>@endif
            <a class="email-icon-button" href="{{ $inboxUrl }}" aria-label="Refresh emails" title="Refresh">{{ $icon('refresh') }}</a>
            <span class="email-toolbar-spacer"></span>
            @if($messages && $messages->total())
                <span class="email-range">{{ $messages->firstItem() ?? 0 }}&ndash;{{ $messages->lastItem() ?? 0 }} of {{ number_format($messages->total()) }}</span>
                @if($messages->previousPageUrl())<a class="email-icon-button" href="{{ $messages->previousPageUrl() }}" aria-label="Newer messages">{{ $icon('left') }}</a>@else<span class="email-icon-button is-disabled">{{ $icon('left') }}</span>@endif
                @if($messages->nextPageUrl())<a class="email-icon-button" href="{{ $messages->nextPageUrl() }}" aria-label="Older messages">{{ $icon('right') }}</a>@else<span class="email-icon-button is-disabled">{{ $icon('right') }}</span>@endif
            @endif
        </div>
        @if(session('status'))<p class="email-notice" role="status">{{ session('status') }}</p>@endif
        @if($errors->any())<div class="email-notice" role="alert">@foreach($errors->all() as $error)<p>{{ $error }}</p>@endforeach</div>@endif
        @if(request('compose') || (request('reply') && $selected))
            @if(empty(app(\App\Support\InboxMailbox::class)->settings()['inbox_smtp_host']))
                <p class="email-notice">Set up outgoing SMTP in <a href="{{ route('dashboard.settings.edit') }}">Email settings</a> before sending.</p>
            @endif
            <form class="email-editor" method="POST" action="{{ route('dashboard.inbox.send') }}">
                @csrf
                <h1>{{ request('reply') ? 'Reply' : 'New message' }}</h1>
                <p>From: {{ $mailboxAddress }}</p>
                @if(request('reply') && $selected)<input type="hidden" name="reply_uid" value="{{ request('message') }}">@endif
                <label>To<input type="email" name="to" value="{{ old('to', request('reply') ? ($selected['reply_to'] ?? $selected['from']) : '') }}" maxlength="254" required></label>
                <label>Subject<input name="subject" value="{{ old('subject', request('reply') ? (preg_match('/^Re:/i', $selected['subject']) ? $selected['subject'] : 'Re: '.$selected['subject']) : '') }}" maxlength="255" required></label>
                <label>Message<textarea name="body" rows="12" maxlength="100000" required>{{ old('body') }}</textarea></label>
                <button class="email-action" type="submit">Send email</button>
                <a class="email-reply" href="{{ $inboxUrl }}">Cancel</a>
            </form>
        @elseif(! $configured)
            <div class="email-empty">{{ $icon('inbox') }}<h1>Connect your email</h1><p>Add your IMAP account to start reading received emails.</p><a class="email-action" href="{{ route('dashboard.settings.edit') }}">Configure email</a></div>
        @elseif($mailboxError)
            <div class="email-notice" role="alert"><h1>We could not load your emails</h1><p>{{ $mailboxError }}</p><a class="email-action" href="{{ route('dashboard.settings.edit') }}">Check email settings</a></div>
        @elseif($selected)
            <article class="email-reader">
                <h1>{{ $selected['subject'] ?: '(No subject)' }} <span class="email-tag">Inbox</span></h1>
                <div class="email-message-meta"><span class="email-avatar">{{ strtoupper(substr($selected['from'], 0, 1)) }}</span><div><strong>{{ $selected['from'] }}</strong><small>to {{ $mailboxAddress }}</small></div><time>{{ $selected['date'] }}</time></div>
                <div class="email-message-body">{{ $selected['body'] ?: 'This email has no readable text content.' }}</div>
                <a class="email-reply" href="{{ route('dashboard.inbox.index', ['message' => request('message'), 'reply' => 1]) }}">{{ $icon('back') }} Reply</a>
            </article>
        @else
            <div class="email-tabs"><span class="email-tab is-active">{{ $icon('inbox') }}{{ request('q') ? 'Search results' : 'Primary' }}</span><span class="email-live-note">{{ $mailboxAddress }}</span></div>
            <div class="email-list">
                @forelse($messages as $message)
                    <a class="email-row{{ ! empty($message['unread']) ? ' is-unread' : '' }}" href="{{ route('dashboard.inbox.index', ['message' => $message['uid'], 'page' => request('page', 1), 'q' => request('q')]) }}">
                        <span class="email-row-envelope">{{ $icon('mail') }}</span>
                        <span class="email-row-from">{{ $message['from'] }}</span>
                        <span class="email-row-subject">{{ $message['subject'] ?: '(No subject)' }}</span>
                        <time>{{ $message['date'] }}</time>
                    </a>
                @empty
                    <div class="email-empty">{{ $icon('inbox') }}<h1>{{ request('q') ? 'No matching emails' : 'Your inbox is empty' }}</h1><p>{{ request('q') ? 'Try a different sender, subject or keyword.' : 'Received emails will appear here. Use refresh to check for new mail.' }}</p></div>
                @endforelse
            </div>
            <footer class="email-footer">{{ $messages->total() }} messages &middot; Compose and reply directly in the system.</footer>
        @endif
    </section>
</div>
@endsection
