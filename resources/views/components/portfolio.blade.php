<section id="portfolio" class="section-padding relative bg-[#050d1e]">
    <!-- Top accent line -->
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

    <div class="container-max">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Portfolio</span>
                <span x-show="$store.locale === 'en'" x-cloak>Portfolio</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-2 mb-4">
                <span x-show="$store.locale === 'id'">Proyek <span class="gradient-text">Live &amp; Berjalan</span></span>
                <span x-show="$store.locale === 'en'" x-cloak>Live &amp; <span class="gradient-text">Running Projects</span></span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Berikut adalah beberapa proyek nyata yang telah kami bangun, diakses, dan digunakan oleh klien setiap hari.</span>
                <span x-show="$store.locale === 'en'" x-cloak>Here are real projects we've built, accessed, and used by clients every day.</span>
            </p>
        </div>

        <!-- Portfolio Grid (3x2) - Browser Frame Style -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- 1: m2b.co.id -->
            <a href="https://m2b.co.id" target="_blank" rel="noopener noreferrer"
               data-testid="portfolio-m2b"
               class="scroll-reveal group block browser-frame hover:border-cyan-500/30 hover:shadow-xl hover:shadow-cyan-500/5 transition-all duration-300 hover:-translate-y-1">
                <!-- Browser Chrome -->
                <div class="browser-topbar">
                    <span class="browser-dot bg-[#FF5F57]"></span>
                    <span class="browser-dot bg-[#FFBD2E]"></span>
                    <span class="browser-dot bg-[#28CA41]"></span>
                    <div class="browser-url">https://m2b.co.id</div>
                    <span class="text-[9px] text-emerald-400 font-medium">LIVE</span>
                </div>
                <!-- Preview Area -->
                <div class="relative overflow-hidden" style="aspect-ratio: 16/9;">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-950 via-blue-900 to-slate-900 flex flex-col group-hover:scale-105 transition-transform duration-500 overflow-hidden">
                        <!-- Nav bar -->
                        <div class="flex items-center px-3 bg-blue-900/70 border-b border-blue-700/30 shrink-0" style="height:26px">
                            <div class="w-10 h-2 bg-blue-400/50 rounded mr-auto"></div>
                            <div class="flex gap-2 items-center">
                                <div class="w-6 h-1.5 bg-blue-400/15 rounded"></div>
                                <div class="w-6 h-1.5 bg-blue-400/15 rounded"></div>
                                <div class="w-6 h-1.5 bg-blue-400/15 rounded"></div>
                                <div class="w-12 h-4 bg-blue-500/25 rounded border border-blue-400/20"></div>
                            </div>
                        </div>
                        <!-- Hero section -->
                        <div class="flex items-center px-4 gap-3 grow border-b border-blue-900/40 py-2">
                            <div class="flex-1">
                                <div class="w-20 h-2.5 bg-blue-300/40 rounded mb-1.5"></div>
                                <div class="w-28 h-1.5 bg-blue-300/20 rounded mb-1"></div>
                                <div class="w-24 h-1.5 bg-blue-300/15 rounded mb-3"></div>
                                <div class="flex gap-2">
                                    <div class="w-14 h-4 bg-blue-500/30 border border-blue-400/25 rounded"></div>
                                    <div class="w-12 h-4 bg-blue-800/40 border border-blue-700/30 rounded"></div>
                                </div>
                            </div>
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-700/30 to-cyan-700/20 border border-blue-600/30 shrink-0 flex items-center justify-center">
                                <div class="w-6 h-6 rounded-lg bg-blue-500/30"></div>
                            </div>
                        </div>
                        <!-- Stats strip -->
                        <div class="flex items-center justify-around px-3 shrink-0 bg-blue-950/50" style="height:34px">
                            <div class="text-center"><div class="w-7 h-2 bg-blue-400/45 rounded mx-auto mb-0.5"></div><div class="w-10 h-1 bg-blue-400/15 rounded mx-auto"></div></div>
                            <div class="w-px h-4 bg-blue-800/60"></div>
                            <div class="text-center"><div class="w-7 h-2 bg-cyan-400/45 rounded mx-auto mb-0.5"></div><div class="w-10 h-1 bg-blue-400/15 rounded mx-auto"></div></div>
                            <div class="w-px h-4 bg-blue-800/60"></div>
                            <div class="text-center"><div class="w-7 h-2 bg-blue-400/45 rounded mx-auto mb-0.5"></div><div class="w-10 h-1 bg-blue-400/15 rounded mx-auto"></div></div>
                        </div>
                    </div>
                </div>
                <!-- Info -->
                <div class="p-5">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="font-bold text-white group-hover:text-cyan-400 transition-colors">PT. Mora Multi Berkah</h3>
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-cyan-400 transition-colors flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </div>
                    <p class="text-xs text-slate-500 mb-3 font-body">
                        <span x-show="$store.locale === 'id'">Platform digital terintegrasi untuk bisnis modern.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Integrated digital platform for modern business.</span>
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-xs px-2 py-0.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400">Laravel</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400">Filament</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400">MySQL</span>
                    </div>
                </div>
            </a>

            <!-- 2: portal.m2b.co.id -->
            <a href="https://portal.m2b.co.id" target="_blank" rel="noopener noreferrer"
               data-testid="portfolio-portal-m2b"
               class="scroll-reveal group block browser-frame hover:border-violet-500/30 hover:shadow-xl hover:shadow-violet-500/5 transition-all duration-300 hover:-translate-y-1">
                <div class="browser-topbar">
                    <span class="browser-dot bg-[#FF5F57]"></span>
                    <span class="browser-dot bg-[#FFBD2E]"></span>
                    <span class="browser-dot bg-[#28CA41]"></span>
                    <div class="browser-url">https://portal.m2b.co.id</div>
                    <span class="text-[9px] text-emerald-400 font-medium">LIVE</span>
                </div>
                <div class="relative overflow-hidden" style="aspect-ratio: 16/9;">
                    <div class="absolute inset-0 bg-gradient-to-br from-violet-950 via-purple-900 to-indigo-950 flex group-hover:scale-105 transition-transform duration-500 overflow-hidden">
                        <!-- Sidebar -->
                        <div class="flex flex-col items-center pt-3 gap-2.5 shrink-0 bg-violet-950/80 border-r border-violet-800/30" style="width:42px">
                            <div class="w-5 h-5 rounded-md bg-violet-600/40 border border-violet-500/30"></div>
                            <div class="w-5 h-5 rounded-md bg-violet-500/50 border border-violet-400/40"></div>
                            <div class="w-5 h-5 rounded-md bg-violet-600/30 border border-violet-500/20"></div>
                            <div class="w-5 h-5 rounded-md bg-violet-600/30 border border-violet-500/20"></div>
                            <div class="mt-auto mb-3 w-5 h-5 rounded-full bg-violet-700/40 border border-violet-600/30"></div>
                        </div>
                        <!-- Main content -->
                        <div class="flex flex-col flex-1 min-w-0 p-2.5 gap-2">
                            <!-- Topbar -->
                            <div class="flex items-center justify-between">
                                <div class="w-16 h-2 bg-violet-300/30 rounded"></div>
                                <div class="flex gap-1.5">
                                    <div class="w-4 h-4 rounded bg-violet-700/40 border border-violet-600/20"></div>
                                    <div class="w-4 h-4 rounded-full bg-violet-600/40 border border-violet-500/30"></div>
                                </div>
                            </div>
                            <!-- Stat cards -->
                            <div class="grid grid-cols-3 gap-1.5">
                                <div class="bg-violet-800/20 rounded p-1.5 border border-violet-700/25"><div class="w-8 h-1.5 bg-violet-400/25 rounded mb-1"></div><div class="w-5 h-2.5 bg-violet-300/40 rounded"></div></div>
                                <div class="bg-violet-800/20 rounded p-1.5 border border-violet-700/25"><div class="w-8 h-1.5 bg-violet-400/25 rounded mb-1"></div><div class="w-5 h-2.5 bg-purple-300/40 rounded"></div></div>
                                <div class="bg-violet-800/20 rounded p-1.5 border border-violet-700/25"><div class="w-8 h-1.5 bg-violet-400/25 rounded mb-1"></div><div class="w-5 h-2.5 bg-indigo-300/40 rounded"></div></div>
                            </div>
                            <!-- Activity list -->
                            <div class="space-y-1.5 grow">
                                <div class="flex gap-1.5 items-center h-4 bg-violet-900/30 rounded border border-violet-800/20 px-1.5">
                                    <div class="w-2 h-2 rounded-full bg-violet-400/50 shrink-0"></div>
                                    <div class="flex-1 h-1 bg-violet-400/20 rounded"></div>
                                    <div class="w-7 h-1 bg-violet-400/15 rounded"></div>
                                </div>
                                <div class="flex gap-1.5 items-center h-4 bg-violet-900/20 rounded border border-violet-800/15 px-1.5">
                                    <div class="w-2 h-2 rounded-full bg-violet-400/35 shrink-0"></div>
                                    <div class="flex-1 h-1 bg-violet-400/15 rounded"></div>
                                    <div class="w-7 h-1 bg-violet-400/10 rounded"></div>
                                </div>
                                <div class="flex gap-1.5 items-center h-4 bg-violet-900/20 rounded border border-violet-800/15 px-1.5">
                                    <div class="w-2 h-2 rounded-full bg-violet-400/35 shrink-0"></div>
                                    <div class="flex-1 h-1 bg-violet-400/15 rounded"></div>
                                    <div class="w-7 h-1 bg-violet-400/10 rounded"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="font-bold text-white group-hover:text-violet-400 transition-colors">Portal M2B</h3>
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-violet-400 transition-colors flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </div>
                    <p class="text-xs text-slate-500 mb-3 font-body">
                        <span x-show="$store.locale === 'id'">Portal korporasi digital untuk layanan &amp; informasi terintegrasi.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Digital corporate portal for integrated services &amp; information.</span>
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-xs px-2 py-0.5 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400">Portal</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400">Livewire</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-400">SSO</span>
                    </div>
                </div>
            </a>

            <!-- 3: dira.co.id -->
            <a href="https://dira.co.id" target="_blank" rel="noopener noreferrer"
               data-testid="portfolio-dira"
               class="scroll-reveal group block browser-frame hover:border-amber-500/30 hover:shadow-xl hover:shadow-amber-500/5 transition-all duration-300 hover:-translate-y-1">
                <div class="browser-topbar">
                    <span class="browser-dot bg-[#FF5F57]"></span>
                    <span class="browser-dot bg-[#FFBD2E]"></span>
                    <span class="browser-dot bg-[#28CA41]"></span>
                    <div class="browser-url">https://dira.co.id</div>
                    <span class="text-[9px] text-emerald-400 font-medium">LIVE</span>
                </div>
                <div class="relative overflow-hidden" style="aspect-ratio: 16/9;">
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-950 via-orange-900 to-amber-950 flex flex-col group-hover:scale-105 transition-transform duration-500 overflow-hidden">
                        <!-- Nav -->
                        <div class="flex items-center px-3 bg-amber-900/60 border-b border-amber-700/25 shrink-0" style="height:24px">
                            <div class="w-8 h-2 bg-amber-300/45 rounded mr-auto"></div>
                            <div class="flex gap-1.5 items-center">
                                <div class="w-5 h-1 bg-amber-400/15 rounded"></div>
                                <div class="w-5 h-1 bg-amber-400/15 rounded"></div>
                                <div class="w-10 h-3.5 bg-amber-500/25 rounded border border-amber-500/25"></div>
                            </div>
                        </div>
                        <!-- Hero -->
                        <div class="flex items-center px-4 gap-3 py-2" style="height:55%">
                            <div class="flex-1">
                                <div class="w-4 h-3 bg-amber-500/40 rounded mb-2"></div>
                                <div class="w-24 h-3 bg-amber-300/40 rounded mb-1.5"></div>
                                <div class="w-32 h-2 bg-amber-300/20 rounded mb-1"></div>
                                <div class="w-28 h-1.5 bg-amber-300/15 rounded mb-3"></div>
                                <div class="flex gap-1.5">
                                    <div class="w-14 h-4 bg-amber-500/30 border border-amber-400/25 rounded"></div>
                                    <div class="w-12 h-4 bg-amber-900/40 border border-amber-700/30 rounded"></div>
                                </div>
                            </div>
                            <div class="w-16 h-16 rounded-xl bg-amber-800/30 border border-amber-700/30 shrink-0"></div>
                        </div>
                        <!-- Service cards -->
                        <div class="flex gap-1.5 px-3 pb-2 grow">
                            <div class="flex-1 bg-amber-800/20 rounded border border-amber-700/20 p-2">
                                <div class="w-5 h-5 rounded bg-amber-500/25 mb-1.5"></div>
                                <div class="w-full h-1 bg-amber-400/20 rounded mb-1"></div>
                                <div class="w-4/5 h-1 bg-amber-400/15 rounded"></div>
                            </div>
                            <div class="flex-1 bg-amber-800/20 rounded border border-amber-700/20 p-2">
                                <div class="w-5 h-5 rounded bg-amber-500/25 mb-1.5"></div>
                                <div class="w-full h-1 bg-amber-400/20 rounded mb-1"></div>
                                <div class="w-4/5 h-1 bg-amber-400/15 rounded"></div>
                            </div>
                            <div class="flex-1 bg-amber-800/20 rounded border border-amber-700/20 p-2">
                                <div class="w-5 h-5 rounded bg-amber-500/25 mb-1.5"></div>
                                <div class="w-full h-1 bg-amber-400/20 rounded mb-1"></div>
                                <div class="w-4/5 h-1 bg-amber-400/15 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="font-bold text-white group-hover:text-amber-400 transition-colors">PT. Dira Baraka Mulia</h3>
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-amber-400 transition-colors flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </div>
                    <p class="text-xs text-slate-500 mb-3 font-body">
                        <span x-show="$store.locale === 'id'">Website profesional untuk konsultan &amp; layanan bisnis korporasi.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Professional website for corporate consulting &amp; business services.</span>
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-xs px-2 py-0.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400">Laravel</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400">Tailwind</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400">CRM</span>
                    </div>
                </div>
            </a>

            <!-- 4: indoplas.co.id -->
            <a href="https://indoplas.co.id" target="_blank" rel="noopener noreferrer"
               data-testid="portfolio-indoplas"
               class="scroll-reveal group block browser-frame hover:border-emerald-500/30 hover:shadow-xl hover:shadow-emerald-500/5 transition-all duration-300 hover:-translate-y-1">
                <div class="browser-topbar">
                    <span class="browser-dot bg-[#FF5F57]"></span>
                    <span class="browser-dot bg-[#FFBD2E]"></span>
                    <span class="browser-dot bg-[#28CA41]"></span>
                    <div class="browser-url">https://indoplas.co.id</div>
                    <span class="text-[9px] text-emerald-400 font-medium">LIVE</span>
                </div>
                <div class="relative overflow-hidden" style="aspect-ratio: 16/9;">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-950 via-teal-900 to-emerald-950 flex flex-col group-hover:scale-105 transition-transform duration-500 overflow-hidden">
                        <!-- Nav -->
                        <div class="flex items-center px-3 bg-emerald-900/60 border-b border-emerald-700/25 shrink-0" style="height:24px">
                            <div class="w-10 h-2 bg-emerald-300/45 rounded mr-auto"></div>
                            <div class="flex gap-1.5 items-center">
                                <div class="w-5 h-1 bg-emerald-400/15 rounded"></div>
                                <div class="w-5 h-1 bg-emerald-400/15 rounded"></div>
                                <div class="w-4 h-4 rounded-full bg-emerald-700/40 border border-emerald-600/25 flex items-center justify-center">
                                    <div class="w-2 h-2 rounded-full bg-emerald-400/40"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Products grid -->
                        <div class="px-2 pt-2 pb-1 grow">
                            <div class="w-16 h-2 bg-emerald-300/25 rounded mb-2"></div>
                            <div class="grid grid-cols-3 gap-1.5 h-4/5">
                                <div class="bg-emerald-800/20 rounded border border-emerald-700/20 overflow-hidden flex flex-col">
                                    <div class="flex-1 bg-emerald-700/20"></div>
                                    <div class="p-1 shrink-0">
                                        <div class="w-full h-1 bg-emerald-400/20 rounded mb-1"></div>
                                        <div class="w-8 h-1.5 bg-emerald-500/30 rounded"></div>
                                    </div>
                                </div>
                                <div class="bg-emerald-800/20 rounded border border-emerald-700/20 overflow-hidden flex flex-col">
                                    <div class="flex-1 bg-teal-700/20"></div>
                                    <div class="p-1 shrink-0">
                                        <div class="w-full h-1 bg-emerald-400/20 rounded mb-1"></div>
                                        <div class="w-8 h-1.5 bg-emerald-500/30 rounded"></div>
                                    </div>
                                </div>
                                <div class="bg-emerald-800/20 rounded border border-emerald-700/20 overflow-hidden flex flex-col">
                                    <div class="flex-1 bg-emerald-700/15"></div>
                                    <div class="p-1 shrink-0">
                                        <div class="w-full h-1 bg-emerald-400/20 rounded mb-1"></div>
                                        <div class="w-8 h-1.5 bg-emerald-500/30 rounded"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="font-bold text-white group-hover:text-emerald-400 transition-colors">CV. Indoplas Mandiri Sejahtera</h3>
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-emerald-400 transition-colors flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </div>
                    <p class="text-xs text-slate-500 mb-3 font-body">
                        <span x-show="$store.locale === 'id'">Company profile &amp; katalog produk supplier bahan bangunan di Aceh.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Company profile &amp; product catalogue for building materials supplier in Aceh.</span>
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400">Blade</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400">Tailwind</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400">SEO</span>
                    </div>
                </div>
            </a>

            <!-- 5: gma-world.co.id -->
            <a href="https://gma-world.co.id" target="_blank" rel="noopener noreferrer"
               data-testid="portfolio-gma"
               class="scroll-reveal group block browser-frame hover:border-sky-500/30 hover:shadow-xl hover:shadow-sky-500/5 transition-all duration-300 hover:-translate-y-1">
                <div class="browser-topbar">
                    <span class="browser-dot bg-[#FF5F57]"></span>
                    <span class="browser-dot bg-[#FFBD2E]"></span>
                    <span class="browser-dot bg-[#28CA41]"></span>
                    <div class="browser-url">https://gma-world.co.id</div>
                    <span class="text-[9px] text-emerald-400 font-medium">LIVE</span>
                </div>
                <div class="relative overflow-hidden" style="aspect-ratio: 16/9;">
                    <div class="absolute inset-0 bg-gradient-to-br from-sky-950 via-blue-900 to-indigo-950 flex flex-col group-hover:scale-105 transition-transform duration-500 overflow-hidden">
                        <!-- Top bar -->
                        <div class="flex items-center px-3 bg-sky-900/70 border-b border-sky-700/25 shrink-0 gap-3" style="height:24px">
                            <div class="w-8 h-2 bg-sky-300/45 rounded"></div>
                            <div class="flex gap-1.5 text-[6px] text-sky-400/50 font-mono items-center">
                                <span class="bg-sky-500/20 px-1 rounded">Dashboard</span>
                                <span>CRM</span>
                                <span>Laporan</span>
                            </div>
                            <div class="ml-auto w-5 h-5 rounded-full bg-sky-700/50 border border-sky-600/30 shrink-0"></div>
                        </div>
                        <!-- Stat cards -->
                        <div class="flex gap-1.5 px-2 pt-2 shrink-0">
                            <div class="flex-1 bg-sky-800/20 rounded border border-sky-700/20 px-2 py-1.5">
                                <div class="text-[7px] text-sky-400/50 font-mono mb-0.5">LEADS</div>
                                <div class="text-[10px] font-bold text-sky-300/70">142</div>
                            </div>
                            <div class="flex-1 bg-sky-800/20 rounded border border-sky-700/20 px-2 py-1.5">
                                <div class="text-[7px] text-sky-400/50 font-mono mb-0.5">DEALS</div>
                                <div class="text-[10px] font-bold text-sky-300/70">38</div>
                            </div>
                            <div class="flex-1 bg-sky-800/20 rounded border border-sky-700/20 px-2 py-1.5">
                                <div class="text-[7px] text-sky-400/50 font-mono mb-0.5">CLIENTS</div>
                                <div class="text-[10px] font-bold text-sky-300/70">91</div>
                            </div>
                        </div>
                        <!-- CRM list -->
                        <div class="px-2 pt-2 pb-2 space-y-1 grow">
                            <div class="flex gap-1.5 items-center h-5 bg-sky-900/40 rounded border border-sky-700/20 px-1.5">
                                <div class="w-2.5 h-2.5 rounded-full bg-sky-500/50 shrink-0"></div>
                                <div class="flex-1 h-1 bg-sky-400/20 rounded"></div>
                                <div class="w-8 h-1 bg-sky-400/15 rounded"></div>
                                <div class="w-6 h-3 bg-sky-500/20 rounded border border-sky-500/25"></div>
                            </div>
                            <div class="flex gap-1.5 items-center h-5 bg-sky-900/25 rounded border border-sky-700/15 px-1.5">
                                <div class="w-2.5 h-2.5 rounded-full bg-sky-500/35 shrink-0"></div>
                                <div class="flex-1 h-1 bg-sky-400/15 rounded"></div>
                                <div class="w-8 h-1 bg-sky-400/10 rounded"></div>
                                <div class="w-6 h-3 bg-sky-500/15 rounded border border-sky-500/15"></div>
                            </div>
                            <div class="flex gap-1.5 items-center h-5 bg-sky-900/25 rounded border border-sky-700/15 px-1.5">
                                <div class="w-2.5 h-2.5 rounded-full bg-sky-500/35 shrink-0"></div>
                                <div class="flex-1 h-1 bg-sky-400/15 rounded"></div>
                                <div class="w-8 h-1 bg-sky-400/10 rounded"></div>
                                <div class="w-6 h-3 bg-sky-500/15 rounded border border-sky-500/15"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="font-bold text-white group-hover:text-sky-400 transition-colors">PT. Geya Mora Agung</h3>
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-sky-400 transition-colors flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </div>
                    <p class="text-xs text-slate-500 mb-3 font-body">
                        <span x-show="$store.locale === 'id'">Portal informasi &amp; layanan digital terintegrasi dengan fitur CRM.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Integrated digital information portal &amp; services with CRM features.</span>
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-xs px-2 py-0.5 rounded-full bg-sky-500/10 border border-sky-500/20 text-sky-400">Portal</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-sky-500/10 border border-sky-500/20 text-sky-400">CRM</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-sky-500/10 border border-sky-500/20 text-sky-400">API</span>
                    </div>
                </div>
            </a>

            <!-- 6: ladaik.store -->
            <a href="https://ladaik.store" target="_blank" rel="noopener noreferrer"
               data-testid="portfolio-ladaik"
               class="scroll-reveal group block browser-frame hover:border-rose-500/30 hover:shadow-xl hover:shadow-rose-500/5 transition-all duration-300 hover:-translate-y-1">
                <div class="browser-topbar">
                    <span class="browser-dot bg-[#FF5F57]"></span>
                    <span class="browser-dot bg-[#FFBD2E]"></span>
                    <span class="browser-dot bg-[#28CA41]"></span>
                    <div class="browser-url">https://ladaik.store</div>
                    <span class="text-[9px] text-emerald-400 font-medium">LIVE</span>
                </div>
                <div class="relative overflow-hidden" style="aspect-ratio: 16/9;">
                    <div class="absolute inset-0 bg-gradient-to-br from-rose-950 via-pink-900 to-rose-950 flex flex-col group-hover:scale-105 transition-transform duration-500 overflow-hidden">
                        <!-- Nav / header -->
                        <div class="flex items-center px-3 bg-rose-900/60 border-b border-rose-700/25 shrink-0" style="height:24px">
                            <div class="w-10 h-2 bg-rose-300/45 rounded mr-auto"></div>
                            <div class="flex items-center gap-2">
                                <div class="w-5 h-1 bg-rose-400/15 rounded"></div>
                                <div class="w-5 h-1 bg-rose-400/15 rounded"></div>
                                <div class="relative">
                                    <div class="w-4 h-4 text-rose-400/60">
                                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M6 2h13l-1.68 9H7.39L6 2zM4 20a2 2 0 104 0 2 2 0 00-4 0zm13 0a2 2 0 104 0 2 2 0 00-4 0z"/></svg>
                                    </div>
                                    <div class="absolute -top-1 -right-1 w-2.5 h-2.5 rounded-full bg-rose-500/70 flex items-center justify-center text-[5px] text-white">3</div>
                                </div>
                            </div>
                        </div>
                        <!-- Product grid -->
                        <div class="grid grid-cols-3 gap-1.5 px-2 pt-2 grow">
                            <div class="bg-rose-800/20 rounded border border-rose-700/20 overflow-hidden flex flex-col">
                                <div class="flex-1 bg-gradient-to-b from-rose-700/25 to-rose-800/15"></div>
                                <div class="p-1 shrink-0"><div class="w-full h-1 bg-rose-400/20 rounded mb-1"></div><div class="w-7 h-1.5 bg-rose-500/35 rounded"></div></div>
                            </div>
                            <div class="bg-rose-800/20 rounded border border-rose-700/20 overflow-hidden flex flex-col">
                                <div class="flex-1 bg-gradient-to-b from-pink-700/25 to-rose-800/15"></div>
                                <div class="p-1 shrink-0"><div class="w-full h-1 bg-rose-400/20 rounded mb-1"></div><div class="w-7 h-1.5 bg-rose-500/35 rounded"></div></div>
                            </div>
                            <div class="bg-rose-800/20 rounded border border-rose-700/20 overflow-hidden flex flex-col">
                                <div class="flex-1 bg-gradient-to-b from-fuchsia-700/25 to-rose-800/15"></div>
                                <div class="p-1 shrink-0"><div class="w-full h-1 bg-rose-400/20 rounded mb-1"></div><div class="w-7 h-1.5 bg-rose-500/35 rounded"></div></div>
                            </div>
                        </div>
                        <!-- Checkout bar -->
                        <div class="flex items-center justify-between px-3 shrink-0 bg-rose-950/60 border-t border-rose-800/25" style="height:30px">
                            <div class="flex items-center gap-1.5">
                                <div class="w-2 h-2 rounded-full bg-rose-400/50"></div>
                                <div class="w-12 h-1.5 bg-rose-400/20 rounded"></div>
                            </div>
                            <div class="px-3 h-5 bg-rose-500/30 rounded border border-rose-400/30 flex items-center">
                                <div class="text-[7px] text-rose-300/80 font-mono font-bold">CHECKOUT</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="font-bold text-white group-hover:text-rose-400 transition-colors">Ladaik Store</h3>
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-rose-400 transition-colors flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </div>
                    <p class="text-xs text-slate-500 mb-3 font-body">
                        <span x-show="$store.locale === 'id'">Toko online dengan manajemen produk &amp; pembayaran terintegrasi (Midtrans).</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Online store with product management &amp; integrated payments (Midtrans).</span>
                    </p>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-xs px-2 py-0.5 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-400">E-Commerce</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-400">Midtrans</span>
                        <span class="text-xs px-2 py-0.5 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-400">Laravel</span>
                    </div>
                </div>
            </a>

        </div><!-- end portfolio grid -->

        <!-- CTA -->
        <div class="scroll-reveal text-center mt-12">
            <p class="text-slate-500 text-sm mb-4">
                <span x-show="$store.locale === 'id'">Ingin proyek Anda jadi yang berikutnya?</span>
                <span x-show="$store.locale === 'en'" x-cloak>Want your project to be the next one?</span>
            </p>
            <a href="#contact" class="inline-flex items-center gap-2 px-7 py-3.5 border border-cyan-500/40 hover:border-cyan-500 text-cyan-400 hover:text-white font-semibold rounded-xl transition-all duration-200 hover:bg-cyan-500/10">
                <span x-show="$store.locale === 'id'">Mulai Proyek Bersama Kami</span>
                <span x-show="$store.locale === 'en'" x-cloak>Start a Project With Us</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>
