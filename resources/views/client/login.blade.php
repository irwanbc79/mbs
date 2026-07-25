<!DOCTYPE html>
<html lang="id" class="dark h-full bg-[#0B0F17]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Customer — PT Mora Bangun Nusantara (MBS)</title>
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
    </style>
</head>
<body class="h-full text-slate-100 antialiased selection:bg-cyan-500 selection:text-white relative overflow-x-hidden">

    <!-- Background Ambient Light -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-gradient-to-tr from-cyan-600/20 to-blue-600/20 blur-[130px] pointer-events-none -z-10"></div>

    <div class="min-h-screen flex flex-col justify-between p-4 sm:p-6 lg:p-8">
        
        <!-- Header -->
        <header class="max-w-7xl w-full mx-auto flex items-center justify-between py-4">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center font-bold text-white shadow-lg shadow-cyan-500/20">
                    MBS
                </div>
                <div>
                    <span class="font-extrabold text-lg tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white via-slate-200 to-cyan-400">Mora Bangun</span>
                    <span class="block text-[10px] font-semibold tracking-widest text-cyan-400 uppercase">Client Portal</span>
                </div>
            </div>
            <a href="https://morabangun.com" class="text-xs font-semibold text-slate-400 hover:text-cyan-400 transition-colors flex items-center gap-1.5 bg-slate-900/60 px-3 py-1.5 rounded-lg border border-slate-800">
                <span>Website Utama</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </header>

        <!-- Main Container -->
        <main class="max-w-7xl w-full mx-auto my-auto py-8">
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                
                <!-- Left Column: Branding & Value Showcase -->
                <div class="lg:col-span-7 space-y-8 pr-0 lg:pr-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-cyan-950/60 border border-cyan-800/40 text-cyan-400 text-xs font-semibold">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                        Client Operations Platform (COP)
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white leading-tight">
                        Pusat Kendali Interaktif & Dokumentasi <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-blue-400 to-indigo-400">Proyek Anda</span>
                    </h1>

                    <p class="text-slate-400 text-base sm:text-lg max-w-xl leading-relaxed">
                        Pantau milestone pengerjaan, lakukan approval UAT, kelola invoice pembayaran, serta bertukar dokumen secara transparan & realtime bersama PT Mora Bangun Nusantara.
                    </p>

                    <!-- Feature Cards Grid -->
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="glass-card p-4 rounded-2xl hover:border-cyan-500/40 transition-all duration-300">
                            <div class="w-9 h-9 rounded-xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center mb-3 font-bold">📍</div>
                            <h3 class="font-bold text-sm text-slate-200">Progress Tracker & UAT</h3>
                            <p class="text-xs text-slate-400 mt-1">Pantau milestone live dan berikan persetujuan sign-off secara digital.</p>
                        </div>

                        <div class="glass-card p-4 rounded-2xl hover:border-blue-500/40 transition-all duration-300">
                            <div class="w-9 h-9 rounded-xl bg-blue-500/10 text-blue-400 flex items-center justify-center mb-3 font-bold">📂</div>
                            <h3 class="font-bold text-sm text-slate-200">Document & Credential Vault</h3>
                            <p class="text-xs text-slate-400 mt-1">Akses aman dokumen kontrak, user manual, dan kredensial terenkripsi.</p>
                        </div>

                        <div class="glass-card p-4 rounded-2xl hover:border-emerald-500/40 transition-all duration-300">
                            <div class="w-9 h-9 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center mb-3 font-bold">💳</div>
                            <h3 class="font-bold text-sm text-slate-200">Invoice & Upload Bukti</h3>
                            <p class="text-xs text-slate-400 mt-1">Unduh invoice termin & upload bukti transfer pembayaran 1-klik.</p>
                        </div>

                        <div class="glass-card p-4 rounded-2xl hover:border-purple-500/40 transition-all duration-300">
                            <div class="w-9 h-9 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center mb-3 font-bold">🤖</div>
                            <h3 class="font-bold text-sm text-slate-200">AI Support 24/7</h3>
                            <p class="text-xs text-slate-400 mt-1">Layanan tiket dan AI Assistant siap menjawab pertanyaan teknis Anda.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Login Card -->
                <div class="lg:col-span-5">
                    <div class="glass-card glow-cyan p-6 sm:p-8 rounded-3xl relative" x-data="{ tab: 'magic' }">
                        
                        <div class="text-center mb-6">
                            <h2 class="text-xl font-bold text-white">Masuk ke Portal Klien</h2>
                            <p class="text-xs text-slate-400 mt-1">Pilih metode masuk yang sesuai dengan akun Anda</p>
                        </div>

                        <!-- Tab Switcher -->
                        <div class="grid grid-cols-2 p-1 bg-slate-900/90 rounded-xl border border-slate-800 mb-6">
                            <button @click="tab = 'magic'" :class="tab === 'magic' ? 'bg-cyan-500 text-white font-bold shadow-md' : 'text-slate-400 font-medium hover:text-slate-200'" class="py-2 text-xs rounded-lg transition-all">
                                ✨ Magic Link WA / Email
                            </button>
                            <button @click="tab = 'password'" :class="tab === 'password' ? 'bg-cyan-500 text-white font-bold shadow-md' : 'text-slate-400 font-medium hover:text-slate-200'" class="py-2 text-xs rounded-lg transition-all">
                                🔑 Password Login
                            </button>
                        </div>

                        <!-- Magic Link Form -->
                        <div x-show="tab === 'magic'" class="space-y-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Email atau No. WhatsApp Terdaftar</label>
                                <input type="text" placeholder="contoh: klien@perusahaan.com / 0812xxxx" class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all">
                            </div>
                            <button class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-sm shadow-lg shadow-cyan-500/25 transition-all">
                                Kirim Link Akses Instan
                            </button>
                            <p class="text-[11px] text-slate-500 text-center">Kami akan mengirimkan link masuk langsung tanpa perlu password.</p>
                        </div>

                        <!-- Password Login Form -->
                        <form x-show="tab === 'password'" action="{{ route('client.login.post') }}" method="POST" class="space-y-4" style="display: none;">
                            @csrf
                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Email Klien</label>
                                <input type="email" name="email" required placeholder="klien@perusahaan.com" class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-slate-300 mb-1.5">Password</label>
                                <input type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-3 rounded-xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all">
                            </div>

                            <button type="submit" class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-sm shadow-lg shadow-cyan-500/25 transition-all">
                                Masuk Portal
                            </button>
                        </form>

                        <div class="mt-6 pt-6 border-t border-slate-800/80 text-center">
                            <a href="{{ route('client.dashboard') }}?demo=1" class="inline-flex items-center gap-2 text-xs font-semibold text-cyan-400 hover:text-cyan-300 transition-colors bg-cyan-950/50 px-4 py-2 rounded-xl border border-cyan-800/50">
                                <span>🚀 Masuk Mode Demo / Preview Portal</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <!-- Footer -->
        <footer class="max-w-7xl w-full mx-auto py-4 border-t border-slate-800/60 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-slate-500">
            <p>&copy; {{ date('Y') }} PT Mora Bangun Nusantara (MBS). All rights reserved.</p>
            <p class="text-slate-600">Client Operations Platform v3.0</p>
        </footer>

    </div>

</body>
</html>
