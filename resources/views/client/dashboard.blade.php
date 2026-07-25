<!DOCTYPE html>
<html lang="id" class="dark h-full bg-[#0B0F17]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Workspace — Mora Bangun Solutions</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
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
<body class="h-full text-slate-100 antialiased selection:bg-cyan-500 selection:text-white" x-data="{ locale: 'id', tab: 'project', modalUpload: false }">

    <!-- Background Ambient Light -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[300px] bg-gradient-to-tr from-cyan-600/15 via-blue-600/15 to-indigo-600/15 blur-[140px] pointer-events-none -z-10"></div>

    <div class="min-h-screen flex flex-col">

        <!-- Navbar Header -->
        <header class="border-b border-slate-800/80 bg-slate-950/80 backdrop-blur-xl sticky top-0 z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5 flex items-center justify-between">
                
                <div class="flex items-center gap-3.5">
                    <a href="https://morabangun.com" class="flex items-center gap-3 group">
                        <div class="h-16 w-16 flex-shrink-0" style="filter:drop-shadow(0 0 12px rgba(34,211,238,0.4))">
                            <img src="{{ asset('images/brand/mbs-symbol-160.png') }}" alt="MBS" width="160" height="118" class="w-full h-full object-contain">
                        </div>
                        <div class="hidden sm:block">
                            <span class="font-extrabold text-base tracking-tight text-white block leading-tight">
                                Mora <span class="text-cyan-400">Bangun</span>
                            </span>
                            <span class="text-slate-400 font-mono tracking-widest uppercase text-[10px] block font-semibold">Solutions</span>
                        </div>
                    </a>

                    <div class="h-5 w-[1px] bg-slate-800 hidden sm:block"></div>

                    <div>
                        <div class="flex items-center gap-2">
                            <span class="font-extrabold text-sm sm:text-base text-white">PT Trans Logistik Utama</span>
                            <span class="px-2 py-0.5 rounded-full bg-emerald-950/80 text-emerald-400 border border-emerald-800/50 text-[10px] font-bold">Active Client</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <!-- Language Toggle -->
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

                    <a href="{{ route('client.login') }}" class="px-3.5 py-1.5 rounded-xl bg-slate-900 hover:bg-slate-800 border border-slate-800 text-slate-300 hover:text-white text-xs font-semibold transition-all">
                        <span x-show="locale === 'id'">Keluar</span>
                        <span x-show="locale === 'en'" x-cloak>Log Out</span>
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Workspace -->
        <main class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 flex-1 space-y-6">

            <!-- Metrics Header -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <div class="glass-card p-5 rounded-2xl">
                    <div class="flex items-center justify-between text-slate-400 mb-2 text-xs">
                        <span x-show="locale === 'id'">Proyek Aktif</span>
                        <span x-show="locale === 'en'" x-cloak>Active Project</span>
                        <span class="p-1.5 rounded-lg bg-cyan-500/10 text-cyan-400">📍</span>
                    </div>
                    <div class="text-xl font-extrabold text-white">Portal Forwarder H2H</div>
                    <div class="mt-2 text-xs text-cyan-400 font-semibold flex items-center gap-1">
                        <span>Stage: UAT Testing</span>
                        <span class="text-slate-500">•</span>
                        <span>Progress 85%</span>
                    </div>
                </div>

                <div class="glass-card p-5 rounded-2xl">
                    <div class="flex items-center justify-between text-slate-400 mb-2 text-xs">
                        <span x-show="locale === 'id'">Status Tagihan</span>
                        <span x-show="locale === 'en'" x-cloak>Invoice Status</span>
                        <span class="p-1.5 rounded-lg bg-amber-500/10 text-amber-400">💳</span>
                    </div>
                    <div class="text-xl font-extrabold text-white">Rp 5.000.000</div>
                    <div class="mt-2 text-xs text-amber-400 font-semibold">
                        <span x-show="locale === 'id'">1 Tagihan Pending (Termin 2)</span>
                        <span x-show="locale === 'en'" x-cloak>1 Pending Invoice (Term 2)</span>
                    </div>
                </div>

                <div class="glass-card p-5 rounded-2xl">
                    <div class="flex items-center justify-between text-slate-400 mb-2 text-xs">
                        <span x-show="locale === 'id'">Masa Berlaku SaaS/Domain</span>
                        <span x-show="locale === 'en'" x-cloak>SaaS/Domain Expiry</span>
                        <span class="p-1.5 rounded-lg bg-emerald-500/10 text-emerald-400">🔄</span>
                    </div>
                    <div class="text-xl font-extrabold text-white">15 Des 2026</div>
                    <div class="mt-2 text-xs text-emerald-400 font-semibold">
                        <span x-show="locale === 'id'">Aktif (Perpanjangan Otomatis)</span>
                        <span x-show="locale === 'en'" x-cloak>Active (Auto-Renew)</span>
                    </div>
                </div>

                <div class="glass-card p-5 rounded-2xl">
                    <div class="flex items-center justify-between text-slate-400 mb-2 text-xs">
                        <span x-show="locale === 'id'">Tiket Support &amp; AI</span>
                        <span x-show="locale === 'en'" x-cloak>Support &amp; AI Tickets</span>
                        <span class="p-1.5 rounded-lg bg-purple-500/10 text-purple-400">🤖</span>
                    </div>
                    <div class="text-xl font-extrabold text-white">0 Open Tickets</div>
                    <div class="mt-2 text-xs text-slate-400 font-medium">
                        AI Assistant Active 24/7
                    </div>
                </div>

            </div>

            <!-- Tabs Navigation -->
            <div class="flex items-center gap-2 border-b border-slate-800 pb-2 overflow-x-auto">
                <button @click="tab = 'project'" :class="tab === 'project' ? 'border-cyan-500 text-cyan-400 bg-cyan-950/40 font-bold' : 'border-transparent text-slate-400 hover:text-slate-200'" class="px-4 py-2.5 rounded-xl border text-xs sm:text-sm transition-all flex items-center gap-2 whitespace-nowrap">
                    <span>📍 Project Tracker &amp; UAT</span>
                </button>
                <button @click="tab = 'docs'" :class="tab === 'docs' ? 'border-cyan-500 text-cyan-400 bg-cyan-950/40 font-bold' : 'border-transparent text-slate-400 hover:text-slate-200'" class="px-4 py-2.5 rounded-xl border text-xs sm:text-sm transition-all flex items-center gap-2 whitespace-nowrap">
                    <span>📂 Document &amp; Vault</span>
                </button>
                <button @click="tab = 'invoices'" :class="tab === 'invoices' ? 'border-cyan-500 text-cyan-400 bg-cyan-950/40 font-bold' : 'border-transparent text-slate-400 hover:text-slate-200'" class="px-4 py-2.5 rounded-xl border text-xs sm:text-sm transition-all flex items-center gap-2 whitespace-nowrap">
                    <span>💳 Invoice &amp; Payment</span>
                </button>
                <button @click="tab = 'ai'" :class="tab === 'ai' ? 'border-cyan-500 text-cyan-400 bg-cyan-950/40 font-bold' : 'border-transparent text-slate-400 hover:text-slate-200'" class="px-4 py-2.5 rounded-xl border text-xs sm:text-sm transition-all flex items-center gap-2 whitespace-nowrap">
                    <span>🤖 AI Support 24/7</span>
                </button>
            </div>

            <!-- TAB 1: Project & UAT -->
            <div x-show="tab === 'project'" class="space-y-6">
                <div class="glass-card p-6 rounded-3xl space-y-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-800/80 pb-4">
                        <div>
                            <h2 class="text-lg font-bold text-white">Sistem Logistik Forwarder H2H CEISA 4.0</h2>
                            <p class="text-xs text-slate-400 mt-1">Staging Preview: <a href="https://translogistik.m2b.co.id" target="_blank" class="text-cyan-400 underline font-semibold">translogistik.m2b.co.id</a></p>
                        </div>
                        <span class="px-3 py-1.5 rounded-xl bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 text-xs font-semibold">Stage 3 of 4: UAT Testing</span>
                    </div>

                    <div class="grid sm:grid-cols-4 gap-3">
                        <div class="p-3.5 rounded-xl bg-emerald-950/40 border border-emerald-800/50">
                            <div class="text-emerald-400 font-bold text-xs">✓ Milestone 1</div>
                            <div class="text-slate-200 text-sm font-semibold mt-1">Requirements Specs</div>
                            <div class="text-[10px] text-emerald-400 mt-2 font-medium">Approved</div>
                        </div>
                        <div class="p-3.5 rounded-xl bg-emerald-950/40 border border-emerald-800/50">
                            <div class="text-emerald-400 font-bold text-xs">✓ Milestone 2</div>
                            <div class="text-slate-200 text-sm font-semibold mt-1">CEISA API Integration</div>
                            <div class="text-[10px] text-emerald-400 mt-2 font-medium">Approved</div>
                        </div>
                        <div class="p-3.5 rounded-xl bg-cyan-950/60 border border-cyan-500/60 shadow-lg shadow-cyan-500/10">
                            <div class="text-cyan-400 font-bold text-xs">⚡ Milestone 3 (Active)</div>
                            <div class="text-slate-100 text-sm font-bold mt-1">UAT Testing &amp; Review</div>
                            <div class="text-[10px] text-cyan-400 mt-2 font-semibold">Pending Client Review</div>
                        </div>
                        <div class="p-3.5 rounded-xl bg-slate-900/40 border border-slate-800">
                            <div class="text-slate-500 font-bold text-xs">Milestone 4</div>
                            <div class="text-slate-400 text-sm font-semibold mt-1">Handover &amp; Go-Live</div>
                            <div class="text-[10px] text-slate-500 mt-2 font-medium">Upcoming</div>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-800/80">
                        <h3 class="text-sm font-bold text-white mb-2" x-show="locale === 'id'">Catatan UAT &amp; Digital Sign-Off</h3>
                        <h3 class="text-sm font-bold text-white mb-2" x-show="locale === 'en'" x-cloak>UAT Feedback &amp; Digital Sign-Off</h3>
                        <div class="space-y-3">
                            <textarea rows="3" placeholder="Tuliskan masukan atau persetujuan Anda..." class="w-full p-3.5 rounded-xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-500 text-xs focus:outline-none focus:border-cyan-500"></textarea>
                            <div class="flex items-center gap-3">
                                <button class="px-4 py-2.5 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-bold text-xs shadow-md shadow-emerald-500/20">
                                    ✓ Approve UAT Milestone
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2: Documents -->
            <div x-show="tab === 'docs'" class="space-y-6" style="display: none;">
                <div class="glass-card p-6 rounded-3xl space-y-4">
                    <h2 class="text-lg font-bold text-white">Document &amp; Credential Vault</h2>
                    <div class="divide-y divide-slate-800/80">
                        <div class="py-3 flex items-center justify-between">
                            <div>
                                <h4 class="text-sm font-semibold text-slate-200">Kontrak Kerjasama &amp; Proposal Technical Specs</h4>
                                <p class="text-xs text-slate-500">Mora Bangun Solutions Official Contract</p>
                            </div>
                            <button class="px-3 py-1.5 rounded-lg bg-slate-900 border border-slate-800 text-cyan-400 hover:text-cyan-300 text-xs font-semibold">Download PDF</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 3: Invoices -->
            <div x-show="tab === 'invoices'" class="space-y-6" style="display: none;">
                <div class="glass-card p-6 rounded-3xl space-y-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-bold text-white">Invoices &amp; Payments</h2>
                        <button @click="modalUpload = true" class="px-4 py-2 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-white font-bold text-xs shadow-md shadow-cyan-500/20">
                            + Upload Bukti Transfer
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs text-slate-300">
                            <thead class="bg-slate-950/60 uppercase font-semibold text-slate-400">
                                <tr>
                                    <th class="p-3">No. Invoice</th>
                                    <th class="p-3">Termin</th>
                                    <th class="p-3">Total</th>
                                    <th class="p-3">Status</th>
                                    <th class="p-3 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800/60">
                                <tr>
                                    <td class="p-3 font-bold text-white">INV-20260517-001</td>
                                    <td class="p-3">Termin 1 - DP 50%</td>
                                    <td class="p-3 font-semibold">Rp 5.000.000</td>
                                    <td class="p-3"><span class="px-2 py-0.5 rounded-full bg-emerald-950 text-emerald-400 border border-emerald-800 font-bold">Lunas</span></td>
                                    <td class="p-3 text-right"><a href="#" class="text-cyan-400 hover:underline">Download PDF</a></td>
                                </tr>
                                <tr>
                                    <td class="p-3 font-bold text-white">INV-20260715-002</td>
                                    <td class="p-3">Termin 2 - UAT 50%</td>
                                    <td class="p-3 font-semibold">Rp 5.000.000</td>
                                    <td class="p-3"><span class="px-2 py-0.5 rounded-full bg-amber-950 text-amber-400 border border-amber-800 font-bold">Unpaid</span></td>
                                    <td class="p-3 text-right"><button @click="modalUpload = true" class="text-cyan-400 hover:underline font-bold">Pay Now</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- TAB 4: AI Support -->
            <div x-show="tab === 'ai'" class="space-y-6" style="display: none;">
                <div class="glass-card p-6 rounded-3xl space-y-4">
                    <h2 class="text-lg font-bold text-white">MBS AI Support 24/7</h2>
                    <div class="h-64 p-4 rounded-2xl bg-slate-950/80 border border-slate-800 text-xs space-y-3">
                        <div class="flex items-start gap-2.5">
                            <div class="w-7 h-7 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold">AI</div>
                            <div class="p-3 rounded-2xl bg-slate-900 border border-slate-800 max-w-md text-slate-200">
                                Halo! Saya AI Support dari Mora Bangun Solutions. Ada yang dapat saya bantu?
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- Modal Upload -->
        <div x-show="modalUpload" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4" style="display: none;">
            <div class="glass-card p-6 rounded-3xl max-w-md w-full space-y-4 relative">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-bold text-white">Upload Bukti Transfer</h3>
                    <button @click="modalUpload = false" class="text-slate-400 hover:text-white text-lg font-bold">&times;</button>
                </div>
                <div class="space-y-3 text-xs">
                    <input type="file" class="w-full p-2 rounded-xl bg-slate-950/80 border border-slate-800 text-slate-400">
                    <button @click="modalUpload = false" class="w-full py-3 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold">
                        Kirim Bukti Pembayaran
                    </button>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <x-footer />

    </div>

</body>
</html>
