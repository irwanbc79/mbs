<!DOCTYPE html>
<html lang="id" class="dark h-full bg-[#0B0F17]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Portal — Mora Bangun Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-card {
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(51, 65, 85, 0.4);
        }
        .glow-cyan {
            box-shadow: 0 0 40px -10px rgba(6, 182, 212, 0.35);
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full text-slate-100 antialiased selection:bg-cyan-500 selection:text-white relative overflow-x-hidden" x-data="{ locale: 'id', tab: 'magic' }">

    <!-- Background Ambient Light -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-gradient-to-tr from-cyan-600/20 to-blue-600/20 blur-[130px] pointer-events-none -z-10"></div>

    <div class="min-h-screen flex flex-col justify-between">
        
        <!-- Header Nav -->
        <header class="max-w-7xl w-full mx-auto flex items-center justify-between px-4 sm:px-6 lg:px-8 py-5">
            <a href="https://morabangun.com" class="flex items-center gap-2.5 group" aria-label="Mora Bangun Solutions">
                <div class="h-10 w-10 flex-shrink-0 transition-all duration-300 group-hover:scale-105"
                     style="filter:drop-shadow(0 0 8px rgba(34,211,238,0.35))">
                    <img src="{{ asset('images/brand/mbs-symbol-160.png') }}"
                         alt="MBS" width="160" height="118"
                         class="w-full h-full object-contain">
                </div>
                <span class="font-bold text-base tracking-tight text-white">
                    Mora <span class="text-cyan-400">Bangun</span>
                    <span class="text-slate-500 font-normal text-xs ml-1 hidden sm:inline">Solutions</span>
                </span>
            </a>

            <div class="flex items-center gap-3">
                <!-- Language Switcher -->
                <button @click="locale = locale === 'id' ? 'en' : 'id'"
                        class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-white/10 hover:border-cyan-500/40 text-xs font-medium text-slate-400 hover:text-cyan-400 transition-all bg-slate-900/60">
                    <span x-show="locale === 'id'" class="flex items-center gap-1.5">
                        <svg class="w-4 h-3 rounded-sm flex-shrink-0" viewBox="0 0 20 14" fill="none"><rect width="20" height="7" fill="#CE1126"/><rect y="7" width="20" height="7" fill="#FFFFFF"/></svg>
                        ID
                    </span>
                    <span x-show="locale === 'en'" x-cloak class="flex items-center gap-1.5">
                        <svg class="w-4 h-3 rounded-sm flex-shrink-0" viewBox="0 0 20 14"><rect width="20" height="14" fill="#012169"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#fff" stroke-width="2.8"/><path d="M10,0 V14 M0,7 H20" stroke="#fff" stroke-width="4.5"/><path d="M10,0 V14 M0,7 H20" stroke="#C8102E" stroke-width="2.8"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#C8102E" stroke-width="1.5"/></svg>
                        EN
                    </span>
                </button>

                <a href="https://morabangun.com" class="text-xs font-semibold text-slate-400 hover:text-cyan-400 transition-colors flex items-center gap-1.5 bg-slate-900/60 px-3 py-1.5 rounded-lg border border-slate-800">
                    <span x-show="locale === 'id'">Website Utama</span>
                    <span x-show="locale === 'en'" x-cloak>Main Website</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 my-auto py-8">
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                
                <!-- Left Column -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-cyan-950/60 border border-cyan-800/40 text-cyan-400 text-xs font-semibold">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                        <span>Client Operations Platform (COP)</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white leading-tight">
                        <span x-show="locale === 'id'">Pusat Kendali Interaktif &amp; Dokumentasi <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-blue-400 to-indigo-400">Proyek Anda</span></span>
                        <span x-show="locale === 'en'" x-cloak>Interactive Command &amp; Documentation Hub for <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-blue-400 to-indigo-400">Your Project</span></span>
                    </h1>

                    <p class="text-slate-400 text-sm sm:text-base max-w-xl leading-relaxed">
                        <span x-show="locale === 'id'">Pantau milestone pengerjaan, lakukan approval UAT, kelola invoice pembayaran, serta bertukar dokumen secara transparan &amp; realtime bersama Mora Bangun Solutions.</span>
                        <span x-show="locale === 'en'" x-cloak>Track project milestones, perform UAT approvals, manage invoices, and exchange documents transparently in real-time with Mora Bangun Solutions.</span>
                    </p>

                    <!-- Feature Grid -->
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="glass-card p-4 rounded-2xl border border-slate-800">
                            <div class="w-9 h-9 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-2 font-bold">📍</div>
                            <h3 class="font-bold text-sm text-slate-200" x-show="locale === 'id'">Progress Tracker &amp; UAT</h3>
                            <h3 class="font-bold text-sm text-slate-200" x-show="locale === 'en'" x-cloak>Progress Tracker &amp; UAT</h3>
                            <p class="text-xs text-slate-400 mt-1" x-show="locale === 'id'">Pantau milestone live &amp; persetujuan digital.</p>
                            <p class="text-xs text-slate-400 mt-1" x-show="locale === 'en'" x-cloak>Monitor live milestones &amp; digital sign-off.</p>
                        </div>

                        <div class="glass-card p-4 rounded-2xl border border-slate-800">
                            <div class="w-9 h-9 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center mb-2 font-bold">📂</div>
                            <h3 class="font-bold text-sm text-slate-200" x-show="locale === 'id'">Document &amp; Vault</h3>
                            <h3 class="font-bold text-sm text-slate-200" x-show="locale === 'en'" x-cloak>Document &amp; Vault</h3>
                            <p class="text-xs text-slate-400 mt-1" x-show="locale === 'id'">Dokumen kontrak &amp; kredensial terenkripsi.</p>
                            <p class="text-xs text-slate-400 mt-1" x-show="locale === 'en'" x-cloak>Encrypted contracts &amp; access credentials.</p>
                        </div>

                        <div class="glass-card p-4 rounded-2xl border border-slate-800">
                            <div class="w-9 h-9 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-2 font-bold">💳</div>
                            <h3 class="font-bold text-sm text-slate-200" x-show="locale === 'id'">Invoice &amp; Pembayaran</h3>
                            <h3 class="font-bold text-sm text-slate-200" x-show="locale === 'en'" x-cloak>Invoices &amp; Payments</h3>
                            <p class="text-xs text-slate-400 mt-1" x-show="locale === 'id'">Unduh invoice &amp; upload bukti transfer.</p>
                            <p class="text-xs text-slate-400 mt-1" x-show="locale === 'en'" x-cloak>Download invoices &amp; upload receipt.</p>
                        </div>

                        <div class="glass-card p-4 rounded-2xl border border-slate-800">
                            <div class="w-9 h-9 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center mb-2 font-bold">🤖</div>
                            <h3 class="font-bold text-sm text-slate-200" x-show="locale === 'id'">AI Support 24/7</h3>
                            <h3 class="font-bold text-sm text-slate-200" x-show="locale === 'en'" x-cloak>AI Support 24/7</h3>
                            <p class="text-xs text-slate-400 mt-1" x-show="locale === 'id'">Layanan tiket &amp; AI Assistant 24 jam.</p>
                            <p class="text-xs text-slate-400 mt-1" x-show="locale === 'en'" x-cloak>24/7 Support Ticketing &amp; AI Assistant.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column (Login Form) -->
                <div class="lg:col-span-5">
                    <div class="glass-card glow-cyan p-6 sm:p-8 rounded-3xl relative">
                        
                        <div class="text-center mb-6">
                            <h2 class="text-xl font-bold text-white">
                                <span x-show="locale === 'id'">Masuk ke Portal Klien</span>
                                <span x-show="locale === 'en'" x-cloak>Client Portal Sign In</span>
                            </h2>
                            <p class="text-xs text-slate-400 mt-1">
                                <span x-show="locale === 'id'">Mora Bangun Solutions Customer Access</span>
                                <span x-show="locale === 'en'" x-cloak>Mora Bangun Solutions Customer Access</span>
                            </p>
                        </div>

                        <!-- Tab Switcher -->
                        <div class="grid grid-cols-2 p-1 bg-slate-900/90 rounded-xl border border-slate-800 mb-6">
                            <button @click="tab = 'magic'" :class="tab === 'magic' ? 'bg-cyan-500 text-slate-950 font-bold shadow-md' : 'text-slate-400 font-medium hover:text-slate-200'" class="py-2 text-xs rounded-lg transition-all">
                                ✨ Magic Link
                            </button>
                            <button @click="tab = 'password'" :class="tab === 'password' ? 'bg-cyan-500 text-slate-950 font-bold shadow-md' : 'text-slate-400 font-medium hover:text-slate-200'" class="py-2 text-xs rounded-lg transition-all">
                                🔑 Password
                            </button>
                        </div>

                        <!-- Magic Link Form -->
                        <div x-show="tab === 'magic'" class="space-y-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Email / No. WhatsApp</label>
                                <input type="text" placeholder="klien@perusahaan.com" class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-cyan-500 transition-all">
                            </div>
                            <button class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-sm shadow-lg shadow-cyan-500/25 transition-all">
                                <span x-show="locale === 'id'">Kirim Link Akses Instan</span>
                                <span x-show="locale === 'en'" x-cloak>Send Instant Magic Link</span>
                            </button>
                        </div>

                        <!-- Password Login Form -->
                        <form x-show="tab === 'password'" action="{{ route('client.login.post') }}" method="POST" class="space-y-4" style="display: none;">
                            @csrf
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Email Klien</label>
                                <input type="email" name="email" required placeholder="klien@perusahaan.com" class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-cyan-500 transition-all">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Password</label>
                                <input type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-cyan-500 transition-all">
                            </div>
                            <button type="submit" class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-sm shadow-lg shadow-cyan-500/25 transition-all">
                                Masuk Portal
                            </button>
                        </form>

                        <!-- Demo Access Button -->
                        <div class="mt-6 pt-6 border-t border-slate-800/80 text-center">
                            <a href="{{ route('client.dashboard') }}" class="inline-flex items-center gap-2 text-xs font-bold text-cyan-400 hover:text-cyan-300 transition-colors bg-cyan-950/60 hover:bg-cyan-900/60 px-5 py-2.5 rounded-xl border border-cyan-800/60 shadow-lg shadow-cyan-500/10">
                                <span>🚀 <span x-show="locale === 'id'">Masuk Dashboard Demo Klien (Langsung)</span><span x-show="locale === 'en'" x-cloak>Enter Client Demo Dashboard (Direct)</span></span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <!-- Footer -->
        <x-footer />

    </div>

</body>
</html>
