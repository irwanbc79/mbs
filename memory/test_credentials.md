# Test Credentials

This is a **public landing page** with no authentication, no admin panel, and no protected routes. There are no credentials to test against.

## Lead capture verification
The contact form (POST `/contact` or `/api/contact`) writes leads to:
```
/app/storage/logs/laravel.log
```
Look for log lines tagged `[MORABANGUN_CONTACT_LEAD]` and the mocked email body destined for `info@morabangun.com`.

## Mail
- `MAIL_MAILER=log` (mocked). To switch to real delivery, set `MAIL_*` env vars in `/app/.env`.
