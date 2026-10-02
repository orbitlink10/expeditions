@extends('layouts.app')
@section('content')
<div class="dashboard-page">
    <button class="dashboard-sidebar-scrim" type="button" aria-label="Close dashboard navigation" data-dashboard-sidebar-scrim></button>
    <div class="dashboard-shell">
        @include('partials.dashboard-sidebar')
        <div class="dashboard-content">
            <header class="dashboard-header" data-header>
                <div class="dashboard-header__inner">
                    <div class="dashboard-header__intro">
                        <button class="dashboard-sidebar-toggle" type="button" data-dashboard-sidebar-toggle aria-expanded="false" aria-controls="dashboard-sidebar">Sections</button>
                        <strong>Caracal Expeditions</strong>
                    </div>
                    <span class="dashboard-user">{{ $dashboardUser }}</span>
                </div>
            </header>
            <main class="dashboard-main dashboard-management">
                @if(session('status'))<p class="enquiry-alert enquiry-alert--success" role="status">{{ session('status') }}</p>@endif
                @if(session('error'))<p class="enquiry-alert enquiry-alert--error" role="alert">{{ session('error') }}</p>@endif
                @if($errors->any())<div class="enquiry-alert enquiry-alert--error" role="alert">@foreach($errors->all() as $error)<p>{{ $error }}</p>@endforeach</div>@endif
                @yield('management')
            </main>
        </div>
    </div>
</div>
@endsection
