@extends('layouts.dashboard-management')
@section('management')
<p class="dashboard-eyebrow">Email</p>
<h1>Inbox</h1>
<p class="management-description">Read received emails{{ $mailboxAddress ? ' for '.$mailboxAddress : '' }}. Messages are loaded from your mailbox when you open or refresh this page.</p>
<p><a class="dashboard-chip" href="{{ route('dashboard.inbox.index') }}">Refresh inbox</a> <a class="dashboard-chip" href="{{ route('dashboard.settings.edit') }}">Email settings</a></p>
@if(! $configured)
    <div class="dashboard-panel"><h2>Connect your email</h2><p>Configure an IMAP email account in Settings to start reading received messages.</p></div>
@elseif($mailboxError)
    <p class="enquiry-alert enquiry-alert--error" role="alert">{{ $mailboxError }}</p>
@else
    @if($selected)
        <article class="dashboard-panel">
            <h2>{{ $selected['subject'] ?: '(No subject)' }}</h2>
            <p><strong>From:</strong> {{ $selected['from'] }}</p>
            <p><strong>Date:</strong> {{ $selected['date'] }}</p>
            <div style="white-space: pre-wrap; overflow-wrap: anywhere;">{{ $selected['body'] ?: 'This email has no readable text content.' }}</div>
        </article>
    @endif
    <div class="dashboard-panel">
        <h2>Received messages</h2>
        @forelse($messages as $message)
            <article style="padding: 1rem 0; border-bottom: 1px solid #e4eaf0; overflow-wrap: anywhere;">
                <h3><a href="{{ route('dashboard.inbox.index', ['message' => $message['uid'], 'page' => request('page', 1)]) }}">{{ $message['subject'] ?: '(No subject)' }}</a></h3>
                <p>{{ $message['from'] }}</p><small>{{ $message['date'] }}</small>
            </article>
        @empty
            <p>No emails in this inbox yet.</p>
        @endforelse
    </div>
    {{ $messages->links() }}
@endif
@endsection
