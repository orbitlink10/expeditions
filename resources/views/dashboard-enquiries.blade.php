@extends('layouts.dashboard-management')
@section('management')
<p class="dashboard-eyebrow">Safari planning desk</p>
<h1>Enquiries</h1>
<p class="management-description">{{ $newCount }} new enquiries · Submissions from the safari enquiry form.</p>
<form class="enquiries-filter" method="GET">
    <label for="status-filter">Status</label>
    <select name="status" id="status-filter"><option value="">All enquiries</option>@foreach(['new', 'contacted', 'closed'] as $status)<option value="{{ $status }}" @selected(request('status') === $status)>{{ ucfirst($status) }}</option>@endforeach</select>
    <button class="dashboard-chip" type="submit">Filter</button>
</form>
<div class="enquiries-list">
@forelse($enquiries as $enquiry)
    <article class="dashboard-panel enquiry-record">
        <div class="dashboard-panel__head"><div><p class="dashboard-panel__eyebrow">Enquiry #{{ $enquiry->id }} · {{ $enquiry->created_at->format('d M Y, H:i') }}</p><h2>{{ $enquiry->name }}</h2></div><span class="dashboard-panel__badge">{{ ucfirst($enquiry->status) }}</span></div>
        <div class="enquiry-record__details">
            <div><span>Email</span><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></div>
            <div><span>Telephone</span><p>{{ $enquiry->telephone }}</p></div>
            <div><span>Contact preference</span><p>{{ $enquiry->contact_preference }}</p></div>
            <div><span>Travellers</span><p>{{ $enquiry->adults }} adults · {{ $enquiry->children }} children</p>@if($enquiry->child_ages)<p>Children's ages: {{ implode(', ', $enquiry->child_ages) }}</p>@endif</div>
            <div><span>Arrival</span><p>{{ $enquiry->arrival_date?->format('d M Y') ?? 'Not specified' }}</p></div>
            <div><span>Departure</span><p>{{ $enquiry->departure_date?->format('d M Y') ?? 'Not specified' }}</p></div>
        </div>
        <div class="enquiry-record__message"><span>Message</span><p>{{ $enquiry->message ?: 'No message provided.' }}</p></div>
        <p class="management-description">Notification: {{ ucfirst($enquiry->notification_status) }}@if($enquiry->notification_email) · {{ $enquiry->notification_email }}@endif</p>
        <div class="enquiry-record__actions">
            <form method="POST" action="{{ route('dashboard.enquiries.update', $enquiry) }}">@csrf @method('PATCH')<label for="enquiry-status-{{ $enquiry->id }}">Status</label><select id="enquiry-status-{{ $enquiry->id }}" name="status">@foreach(['new', 'contacted', 'closed'] as $status)<option value="{{ $status }}" @selected($enquiry->status === $status)>{{ ucfirst($status) }}</option>@endforeach</select><button class="dashboard-chip" type="submit">Update</button></form>
            @if($enquiry->notification_status !== 'sent')<form method="POST" action="{{ route('dashboard.enquiries.notify', $enquiry) }}">@csrf<button class="dashboard-chip" type="submit">Retry notification</button></form>@endif
        </div>
    </article>
@empty
    <div class="dashboard-panel"><h2>No enquiries yet</h2><p>Enquiries submitted through the safari form will appear here.</p></div>
@endforelse
</div>
<div class="enquiries-pagination">@if($enquiries->previousPageUrl())<a class="dashboard-chip" href="{{ $enquiries->previousPageUrl() }}">Previous</a>@endif<span>Page {{ $enquiries->currentPage() }} of {{ $enquiries->lastPage() }}</span>@if($enquiries->nextPageUrl())<a class="dashboard-chip" href="{{ $enquiries->nextPageUrl() }}">Next</a>@endif</div>
@endsection
