<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Mora Bangun Solutions — Build Smart. Automate Everything.')</title>
    <meta name="description" content="@yield('description', 'Mora Bangun Solutions — Solusi IT berbasis AI dari Medan. ERP, CRM, Portal, Chatbot, Otomasi, & Custom Development untuk bisnis Anda.')">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Mora Bangun Solutions — Build Smart. Automate Everything.')">
    <meta property="og:description" content="@yield('og_description', 'Mora Bangun Solutions — Solusi IT berbasis AI dari Medan. ERP, CRM, Portal, Chatbot, Otomasi, & Custom Development.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="id_ID">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Mora Bangun Solutions')">
    <meta name="twitter:description" content="@yield('og_description', 'Solusi IT berbasis AI dari Medan.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-default.png'))">

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <meta name="theme-color" content="#0b1326">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-surface-950 text-white">
    <x-navigation />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @stack('scripts')
</body>
</html>
