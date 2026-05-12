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

    {{-- SVG filter: removes white/light background from logo PNG --}}
    <svg xmlns="http://www.w3.org/2000/svg" width="0" height="0" style="position:absolute;overflow:hidden;pointer-events:none">
        <defs>
            <filter id="rm-white" color-interpolation-filters="sRGB">
                <feColorMatrix type="matrix"
                    values="1 0 0 0 0
                            0 1 0 0 0
                            0 0 1 0 0
                            -1.5 -1.5 -1.5 4.5 0"/>
            </filter>
        </defs>
    </svg>

    <x-navigation />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    <!-- Floating Action Buttons -->
    <div x-data="{ showTop: false }"
         x-init="window.addEventListener('scroll', () => showTop = window.scrollY > 400)"
         class="fixed bottom-6 right-6 z-50 flex flex-col items-center gap-3">

        <!-- WhatsApp -->
        <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%20Solutions%2C%20saya%20ingin%20konsultasi"
           target="_blank" rel="noopener noreferrer"
           title="Chat via WhatsApp"
           class="group w-12 h-12 rounded-full bg-[#25D366] hover:bg-[#20b958] shadow-lg shadow-green-500/30 hover:shadow-green-500/50 flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:scale-110">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
        </a>

        <!-- Email -->
        <a href="mailto:info@morabangun.com"
           title="Kirim Email"
           class="group w-12 h-12 rounded-full bg-cyan-500 hover:bg-cyan-400 shadow-lg shadow-cyan-500/30 hover:shadow-cyan-500/50 flex items-center justify-center transition-all duration-300 hover:-translate-y-1 hover:scale-110">
            <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
        </a>

        <!-- Scroll to Top -->
        <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                x-show="showTop"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-75"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-75"
                title="Kembali ke atas"
                class="w-12 h-12 rounded-full bg-slate-800 hover:bg-slate-700 border border-slate-700 hover:border-cyan-500/50 shadow-lg flex items-center justify-center text-slate-400 hover:text-cyan-400 transition-all duration-300 hover:-translate-y-1">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/>
            </svg>
        </button>
    </div>

    {{-- Global Infographic Lightbox --}}
    <div x-data="{ visible: false, src: '', title: '' }"
         @open-lightbox.window="visible = true; src = $event.detail.src; title = $event.detail.title; document.body.style.overflow = 'hidden'"
         x-show="visible"
         style="display:none"
         class="fixed inset-0 z-[9999] flex items-center justify-center overflow-y-auto bg-black/95 backdrop-blur-md p-4 sm:p-8"
         @keydown.escape.window="if(visible){ visible = false; document.body.style.overflow = '' }"
         @click.self="visible = false; document.body.style.overflow = ''"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <div class="relative w-full max-w-5xl my-auto">
            <button @click="visible = false; document.body.style.overflow = ''"
                    class="absolute -top-3 -right-3 z-10 w-9 h-9 rounded-full bg-slate-800 hover:bg-slate-700 border border-slate-600 flex items-center justify-center text-slate-300 hover:text-white transition-colors shadow-xl">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
            <img :src="src" :alt="title"
                 class="w-full rounded-2xl shadow-2xl border border-slate-700/40 cursor-zoom-out"
                 @click="visible = false; document.body.style.overflow = ''">
            <p class="text-center text-xs text-slate-500 mt-3" x-text="title + ' · Klik gambar atau tekan ESC untuk menutup'"></p>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
