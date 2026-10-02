# Enquiries and notification settings

After deploying this change, run from the project directory:

```bash
php artisan migrate --force
php artisan optimize:clear
```

Sign into the dashboard and open **Settings**. Set the notification email,
enable notifications, and save the company email, telephone and WhatsApp number.
These settings are stored in the database; they do not edit `.env`.

Configure the production mail service in the server's `.env` using the SMTP
details supplied by your email provider:

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=your-provider-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-smtp-username
MAIL_PASSWORD=your-smtp-password
MAIL_FROM_ADDRESS=your-provider-verified-sender@example.com
MAIL_FROM_NAME="Caracal Expeditions"
```

Keep these credentials out of Git. After changing the environment, run
`php artisan optimize:clear`. The notification recipient can differ from the
verified sender address. No queue worker is required for these notifications.

Submit the public `/enquire` form and check **Enquiries** in the dashboard.
Every valid form submission is saved before an email notification is attempted.
The notification status shows whether the mail service accepted the message,
failed, or was disabled. Acceptance by the mail service does not confirm inbox
delivery; check the destination inbox and spam folder when verifying production.
For failed notifications, correct the mail configuration and use **Retry notification**.

The inbox captures submissions received after this change is deployed. Earlier
email-only enquiries are not imported automatically.
