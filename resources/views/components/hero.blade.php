<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-surface">
    <!-- Subtle grid background -->
    <div class="absolute inset-0 grid-bg pointer-events-none opacity-60"></div>

    <!-- Soft directional ambient highlight -->
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-600/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative z-10 w-full container-max px-6 lg:px-24 pt-24 pb-16">
        <div class="grid lg:grid-cols-2 gap-12 xl:gap-16 items-center">

            <!-- ========== LEFT: CONTENT ========== -->
            <div class="space-y-8 lg:space-y-10">

                <!-- Badge -->
                <div data-testid="hero-badge" class="scroll-reveal inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full border border-blue-500/30 bg-blue-500/10 text-sm">
                    <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                    <span class="text-blue-300 font-semibold text-xs tracking-wider uppercase">
                        <span x-show="$store.locale === 'id'">Enterprise Software &bull; Sistem ERP &bull; Integrasi API</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Enterprise Software &bull; Custom ERP &bull; API Integration</span>
                    </span>
                </div>

                <!-- Headline -->
                <div class="scroll-reveal">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-[1.12] tracking-tight text-white">
                        <span x-show="$store.locale === 'id'">
                            Sistem ERP &amp; Portal Bisnis<br>
                            Untuk Operasional yang<br>
                            <span class="gradient-text-blue">Presisi &amp; Terintegrasi</span>
                        </span>
                        <span x-show="$store.locale === 'en'" x-cloak>
                            Enterprise ERP &amp; Portals<br>
                            Engineered For<br>
                            <span class="gradient-text-blue">Precision Operations</span>
                        </span>
                    </h1>
                </div>

                <!-- Subtext -->
                <p class="scroll-reveal text-base sm:text-lg text-slate-300 leading-relaxed max-w-xl font-body">
                    <span x-show="$store.locale === 'id'">
                        Mora Bangun Solutions membangun piranti lunak kustom berkinerja tinggi—mengintegrasikan <strong class="text-white font-semibold">alur data pabean, logistik, inventaris gudang, hingga otomasi dokumen cerdas</strong> untuk korporasi, BUMN, dan industri nasional.
                    </span>
                    <span x-show="$store.locale === 'en'" x-cloak>
                        Mora Bangun Solutions builds high-performance custom enterprise software—unifying <strong class="text-white font-semibold">customs workflows, logistics pipelines, warehouse ERP, and smart document automation</strong> for enterprises and industrial leaders in Indonesia.
                    </span>
                </p>

                <!-- CTA Buttons -->
                <div class="scroll-reveal flex flex-wrap gap-4">
                    <a href="#contact"
                       data-testid="hero-cta-primary"
                       class="inline-flex items-center gap-2.5 px-7 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl transition-all duration-300 shadow-lg shadow-blue-600/25 hover:shadow-blue-500/40 hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span x-show="$store.locale === 'id'">Konsultasi Solusi Sistem</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Consult System Solutions</span>
                    </a>
                    <a href="#portfolio"
                       data-testid="hero-cta-secondary"
                       class="inline-flex items-center gap-2.5 px-7 py-3.5 border border-slate-700 hover:border-slate-500 text-slate-200 hover:text-white font-medium rounded-xl transition-all duration-300 hover:-translate-y-0.5 bg-slate-900/60">
                        <span x-show="$store.locale === 'id'">Eksplorasi Proyek Nyata</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Explore Live Projects</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Stats Row -->
                <div class="animate-visible grid grid-cols-2 sm:grid-cols-4 gap-4 pt-6 border-t border-slate-800/80">
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-white">B2B &amp; BUMN</div>
                        <div class="text-xs text-slate-400 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Kesiapan Sistem</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Enterprise Ready</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-blue-400">100%</div>
                        <div class="text-xs text-slate-400 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Bespoke Software</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Custom Architecture</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-emerald-400">CEISA 4.0</div>
                        <div class="text-xs text-slate-400 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Kepatuhan Regulasi</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Compliance Ready</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-slate-200">99.9%</div>
                        <div class="text-xs text-slate-400 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Target Reliabilitas</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Target Uptime</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== RIGHT: ENTERPRISE SYSTEM ARCHITECTURE PREVIEW ========== -->
            <div class="scroll-reveal hidden lg:block relative">
                <!-- Outer Card Frame -->
                <div class="relative w-full max-w-[560px] mx-auto rounded-2xl border border-slate-800/90 bg-[#0e1628] shadow-2xl overflow-hidden">
                    
                    <!-- Control Bar -->
                    <div class="px-5 py-3.5 bg-slate-900/90 border-b border-slate-800 flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span class="text-xs font-mono font-semibold text-slate-200">Production Control Hub &bull; Live</span>
                        </div>
                        <div class="flex items-center gap-2 text-[11px] font-mono text-slate-400 bg-slate-800/60 px-2.5 py-1 rounded-md border border-slate-700/50">
                            <span>CEISA 4.0 &amp; ERP Core</span>
                        </div>
                    </div>

                    <!-- Inner Body -->
                    <div class="p-6 space-y-5">
                        
                        <!-- Live Workflow Topology -->
                        <div>
                            <div class="text-[11px] font-mono uppercase tracking-wider text-slate-400 mb-2.5 flex items-center justify-between">
                                <span>Arsitektur Alur Data Operasional</span>
                                <span class="text-blue-400 font-semibold">Sinkronisasi Real-Time</span>
                            </div>
                            <div class="grid grid-cols-3 gap-2.5">
                                <div class="p-3 rounded-xl bg-slate-900/80 border border-slate-800 text-center">
                                    <div class="text-[10px] text-slate-400 font-mono">Tahap 1</div>
                                    <div class="text-xs font-bold text-white mt-1">Dokumen &amp; Order</div>
                                    <div class="text-[10px] text-emerald-400 mt-1 flex items-center justify-center gap-1 font-mono">
                                        <span>●</span> Terverifikasi
                                    </div>
                                </div>
                                <div class="p-3 rounded-xl bg-blue-950/40 border border-blue-800/50 text-center">
                                    <div class="text-[10px] text-blue-300 font-mono">Tahap 2</div>
                                    <div class="text-xs font-bold text-blue-200 mt-1">Validasi Pabean/Pajak</div>
                                    <div class="text-[10px] text-blue-300 mt-1 flex items-center justify-center gap-1 font-mono">
                                        <span>●</span> Engine Otomasi
                                    </div>
                                </div>
                                <div class="p-3 rounded-xl bg-slate-900/80 border border-slate-800 text-center">
                                    <div class="text-[10px] text-slate-400 font-mono">Tahap 3</div>
                                    <div class="text-xs font-bold text-white mt-1">ERP &amp; Gudang</div>
                                    <div class="text-[10px] text-emerald-400 mt-1 flex items-center justify-center gap-1 font-mono">
                                        <span>●</span> Terkonsiliasi
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Operational Modules -->
                        <div class="space-y-2.5">
                            <div class="text-[11px] font-mono uppercase tracking-wider text-slate-400">Status Modul Operasional</div>
                            
                            <!-- Item 1 -->
                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-900/60 border border-slate-800/80">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-blue-600/15 border border-blue-500/30 flex items-center justify-center text-blue-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-white">Integrasi H2H Gateway CEISA 4.0</div>
                                        <div class="text-[11px] text-slate-400">DJBC Ekspor-Impor &bull; Protokol Aman</div>
                                    </div>
                                </div>
                                <span class="text-[11px] font-mono text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/20">Connected</span>
                            </div>

                            <!-- Item 2 -->
                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-900/60 border border-slate-800/80">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-indigo-600/15 border border-indigo-500/30 flex items-center justify-center text-indigo-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-white">Sinkronisasi Multi-Gudang &amp; Stok</div>
                                        <div class="text-[11px] text-slate-400">Pelacakan Kontainer &amp; Inventori Fisik</div>
                                    </div>
                                </div>
                                <span class="text-[11px] font-mono text-blue-400 bg-blue-500/10 px-2 py-0.5 rounded border border-blue-500/20">Sync 0s</span>
                            </div>

                            <!-- Item 3 -->
                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-900/60 border border-slate-800/80">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-600/15 border border-emerald-500/30 flex items-center justify-center text-emerald-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-bold text-white">Enkripsi Audit Trail &amp; RBAC</div>
                                        <div class="text-[11px] text-slate-400">Pencatatan Log Transaksi Tidak Dapat Diubah</div>
                                    </div>
                                </div>
                                <span class="text-[11px] font-mono text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/20">Secured</span>
                            </div>
                        </div>

                        <!-- Key Performance Metrics -->
                        <div class="pt-3 border-t border-slate-800/80 grid grid-cols-3 gap-3 text-center">
                            <div>
                                <div class="text-lg font-bold text-white font-mono">94.8%</div>
                                <div class="text-[10px] text-slate-400">Efisiensi Alur Dokumen</div>
                            </div>
                            <div>
                                <div class="text-lg font-bold text-blue-400 font-mono">&lt; 3 Mnt</div>
                                <div class="text-[10px] text-slate-400">Validasi Pabean</div>
                            </div>
                            <div>
                                <div class="text-lg font-bold text-emerald-400 font-mono">0 Discrepancy</div>
                                <div class="text-[10px] text-slate-400">Rekonsiliasi Data</div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-5 py-2.5 bg-slate-950/90 border-t border-slate-800 text-[10px] font-mono text-slate-400 flex items-center justify-between">
                        <span>Stack: Laravel 12 &bull; MySQL &bull; REST API &bull; VPS Nginx</span>
                        <span class="text-blue-400 font-medium">Bespoke Architecture</span>
                    </div>
                </div>
            </div>

        </div><!-- end grid -->
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-slate-500 text-xs hidden md:flex">
        <span class="tracking-[0.2em] uppercase text-[10px] font-mono font-medium">
            <span x-show="$store.locale === 'id'">Gulir</span>
            <span x-show="$store.locale === 'en'" x-cloak>Scroll</span>
        </span>
        <div class="w-px h-8 bg-gradient-to-b from-slate-600 to-transparent"></div>
    </div>
</section>
