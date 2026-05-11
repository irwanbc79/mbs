<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Mora Bangun Solutions — AI-Powered Enterprise Software Indonesia')</title>
    <meta name="description" content="@yield('description', 'Mora Bangun Solutions — Partner transformasi digital berbasis AI dari Medan. Spesialis ERP, CRM, Corporate Portal & Workflow Automation untuk Korporasi, BUMN, dan UKM Indonesia.')">
    <meta name="keywords" content="ERP Indonesia, CRM Indonesia, Corporate Portal, Workflow Automation, AI Software, BUMN, digital transformation, Medan, Laravel, PHP">

    <meta property="og:type"        content="website">
    <meta property="og:title"       content="@yield('og_title', 'Mora Bangun Solutions — AI-Powered Enterprise Software')">
    <meta property="og:description" content="@yield('og_description', 'Partner transformasi digital berbasis AI. ERP, CRM, Corporate Portal & Workflow Automation.')">
    <meta property="og:image"       content="@yield('og_image', asset('images/og-default.png'))">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:locale"      content="id_ID">

    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="@yield('og_title', 'Mora Bangun Solutions')">
    <meta name="twitter:description" content="@yield('og_description', 'AI-Powered Enterprise Software Indonesia')">
    <meta name="twitter:image"       content="@yield('og_image', asset('images/og-default.png'))">

    <link rel="icon"          type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="manifest"      href="{{ asset('favicon/site.webmanifest') }}">
    <meta name="theme-color"  content="#030712">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data class="min-h-screen bg-surface text-white antialiased">

    <x-navigation />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @stack('scripts')
</body>
</html>
