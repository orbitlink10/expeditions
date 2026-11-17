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
<form class="dashboard-panel settings-form" method="POST" action="{{ route('dashboard.inbox.settings') }}">
    @csrf
    @method('PUT')
    <h2>Inbox email connection</h2>
    <p class="management-description">Connect the email account whose received messages you want to read in Inbox. Enable IMAP with your email provider and use an app password if required.</p>
    <label>Email address / IMAP username<input type="email" name="inbox_username" value="{{ old('inbox_username', $inboxSettings['inbox_username'] ?? '') }}" required maxlength="254" autocomplete="off"></label>
    <label>IMAP server<input name="inbox_host" value="{{ old('inbox_host', $inboxSettings['inbox_host'] ?? '') }}" placeholder="mail.example.com" required maxlength="253"></label>
    <label>IMAP port<input type="number" name="inbox_port" value="{{ old('inbox_port', $inboxSettings['inbox_port'] ?? 993) }}" min="1" max="65535" required><small>Usually 993 for SSL/TLS or 143 for STARTTLS.</small></label>
    <label>Encryption<select name="inbox_encryption"><option value="ssl" @selected(old('inbox_encryption', $inboxSettings['inbox_encryption'] ?? 'ssl') === 'ssl')>SSL/TLS</option><option value="tls" @selected(old('inbox_encryption', $inboxSettings['inbox_encryption'] ?? 'ssl') === 'tls')>STARTTLS</option></select></label>
    <label>Password / app password<input type="password" name="inbox_password" autocomplete="new-password" maxlength="1000" @required(empty($inboxSettings['inbox_password']))><small>{{ empty($inboxSettings['inbox_password']) ? 'Enter the mailbox password or provider app password.' : 'A password is saved. Leave blank to keep it.' }} Passwords are stored encrypted.</small></label>
    <button class="button button--accent" type="submit">Save inbox settings</button>
    <a class="dashboard-chip" href="{{ route('dashboard.inbox.index') }}">Open Inbox</a>
</form>
@endsection
