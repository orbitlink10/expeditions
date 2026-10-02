@extends('layouts.dashboard-management')
@section('management')
<p class="dashboard-eyebrow">Company preferences</p>
<h1>Settings</h1>
<p class="management-description">Manage enquiry notifications and the contact details shown to travellers.</p>
<form class="dashboard-panel settings-form" method="POST" action="{{ route('dashboard.settings.update') }}">
    @csrf
    @method('PUT')
    <h2>Email notifications</h2>
    <label>Notification email<input type="email" name="notification_email" value="{{ old('notification_email', config('company.notification_email') ?: config('company.email')) }}" required maxlength="160"><small>New safari enquiries are sent to this address.</small></label>
    <label>Send notifications<select name="notifications_enabled"><option value="1" @selected(old('notifications_enabled', config('company.notifications_enabled')) == 1)>Enabled</option><option value="0" @selected(old('notifications_enabled', config('company.notifications_enabled')) == 0)>Disabled</option></select></label>
    <h2>Company contact details</h2>
    <label>Public email<input type="email" name="email" value="{{ old('email', config('company.email')) }}" required maxlength="160"></label>
    <label>Telephone number<input type="tel" name="phone" value="{{ old('phone', config('company.phone')) }}" required placeholder="+254701942724"><small>Use the country code without spaces.</small></label>
    <label>Telephone display text<input name="phone_label" value="{{ old('phone_label', config('company.phone_label')) }}" required maxlength="60"></label>
    <label>WhatsApp number<input type="tel" name="whatsapp_phone" value="{{ old('whatsapp_phone', config('company.whatsapp_phone')) }}" required placeholder="254701942724"><small>Country code and digits only, without + or spaces.</small></label>
    <p class="management-description">Email delivery uses the server's configured mail service. If notifications fail, check the SMTP settings in the server environment. Enquiries are saved even when email is unavailable.</p>
    <button class="button button--accent" type="submit">Save settings</button>
</form>
@endsection
