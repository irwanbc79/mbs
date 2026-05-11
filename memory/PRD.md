# Mora Bangun Solutions — Landing Page

## Original Problem Statement
Modern, futuristic, professional landing page for **morabangun.com** — an Indonesian enterprise software company specializing in ERP, CRM, Corporate Portal, and AI-based workflow automation for Corporations, BUMN, and UKM.

**Required elements:**
- Hero with glowing Indonesia map (centered within a world map)
- 6 portfolio projects in browser-frame mockups: `m2b.co.id`, `portal.m2b.co.id`, `dira.co.id`, `indoplas.co.id`, `gma-world.co.id`, `ladaik.store`
- Tech stack display: Laravel, Python, Livewire, Filament, MySQL, Docker, PHP, JavaScript
- High-conversion CTA structure
- Bilingual: Indonesian + English
- 3 example testimonials
- Contact form sending leads to `info@morabangun.com`
- WhatsApp number: placeholder `+62 812-XXXX-XXXX` (real number to follow)

## Stack
- **Backend**: Laravel 13 (PHP 8.2), routes in `routes/web.php`, controller `app/Http/Controllers/ContactController.php`
- **Frontend**: Blade components + Alpine.js 3 + Tailwind CSS v4 (Vite-built)
- **Mail**: `MAIL_MAILER=log` (MOCKED — body lands in `storage/logs/laravel.log`)
- **Hosting in preview**: two `php -S` instances via supervisor — `laravel-web` (:3000) + `laravel-api` (:8001), router `/app/server.php`

## Persona
- Direktur korporasi / BUMN / UKM Indonesia mencari partner transformasi digital
- Mengevaluasi proyek live + testimoni sebelum konsultasi gratis

## Theme — Cyber-Corporate Dark
- Base `#030712`, surface `#0F172A`, primary neon cyan `#00E5FF`, secondary electric blue `#2962FF`
- Glassmorphism cards, scroll-reveal entrance, animated counters, infinite tech-logo marquee

## Implemented (2026-02 / 2026-05-11)
- ✅ Layout shell `components/layouts/app.blade.php` with `@vite`, persistent Alpine `$store.locale` (localStorage `mbs_locale`)
- ✅ Sticky glass navigation w/ desktop + mobile menus, language toggle (desktop + mobile)
- ✅ Hero: animated SVG world map with neon-glow Indonesia islands, Medan pulse beacon, animated stats (50+ / 25+ / 6 / AI), dual CTAs
- ✅ Services bento grid (6 cards): ERP, CRM, Corporate Portal, AI Workflow, Chatbot, Custom Dev
- ✅ Portfolio: 6 macOS-style browser-frame cards (CSS mockups — by user choice), each anchors to live URL
- ✅ Tech stack: 8-logo marquee (Laravel, Python, Livewire, Filament, MySQL, Docker, PHP, JavaScript) + extras
- ✅ Testimonials: 3 fictitious client testimonials (Dira Baraka, Irawan Santoso, Laila Sari) with 5-star ratings, "Dipercaya oleh berbagai industri" strip
- ✅ Contact form: bilingual fields, Alpine fetch w/ CSRF, success/error states, POST `/contact` (alias POST `/api/contact`)
- ✅ Backend `ContactController` validates & **mocks** lead delivery via `Log::info('[MORABANGUN_CONTACT_LEAD]')` + `Mail::raw → info@morabangun.com` (driver=log)
- ✅ Footer: brand, services, company, contact columns with social links
- ✅ Bilingual ID/EN switching across **every** section, persisted in localStorage
- ✅ Data-testids on every interactive element (desktop + mobile)
- ✅ Testing agent verification: backend 13/13 pytest pass, frontend 100% flows pass, 0 console errors

## How leads are captured (until SMTP is configured)
```bash
tail -f /app/storage/logs/laravel.log | grep MORABANGUN_CONTACT_LEAD
```
When user sets real SMTP, simply update `MAIL_*` in `.env` — no code change needed.

## Roadmap / Backlog
### P1
- 🔲 Replace mocked mail with real SMTP / Resend / SendGrid (waiting on user's mail provider choice)
- 🔲 Replace `+62 812-XXXX-XXXX` placeholder with real WhatsApp number once user provides it
- 🔲 Drop in real client logo for nav/footer when user uploads it (currently a wordmark "Mora Bangun Solutions")
- 🔲 Replace fictitious testimonials with real client quotes when user provides them

### P2
- 🔲 Persist leads to MongoDB / MySQL (in addition to log) for an admin dashboard
- 🔲 Filament admin panel for leads & content management
- 🔲 SEO metadata expansion + sitemap + structured data (Organization, FAQPage)
- 🔲 Add a `/blog` content section for thought-leadership (helps SEO)

### P3
- 🔲 Real iframe live previews for portfolio (currently CSS mockups — needs partner sites to allow framing)
- 🔲 Add live chat widget (e.g. Crisp or self-hosted)
- 🔲 Convert testimonials into a swipeable carousel on desktop too

## File map
| Purpose | File |
|---|---|
| Routes | `/app/routes/web.php` |
| Controller | `/app/app/Http/Controllers/ContactController.php` |
| Home view | `/app/resources/views/welcome.blade.php` |
| Layout | `/app/resources/views/components/layouts/app.blade.php` |
| Hero + map | `/app/resources/views/components/hero.blade.php` |
| Sections | `services / portfolio / tech-stack / testimonials / contact / cta / footer / navigation .blade.php` |
| Tailwind | `/app/resources/css/app.css` |
| Alpine + JS | `/app/resources/js/app.js` |
| PHP router | `/app/server.php` |
| Supervisor | `/etc/supervisor/conf.d/laravel.conf` (laravel-web:3000, laravel-api:8001) |
| Tests | `/app/backend/tests/test_morabangun_backend.py` |
