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
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-slate-900 flex flex-col items-center justify-center gap-3 group-hover:scale-105 transition-transform duration-500">
                        <div class="text-4xl font-bold font-mono text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">m2b</div>
                        <div class="text-blue-300 text-xs font-mono opacity-70">PT. Mora Multi Berkah</div>
                        <!-- Decorative elements -->
                        <div class="absolute top-4 right-4 w-16 h-1 bg-blue-500/30 rounded"></div>
                        <div class="absolute top-8 right-4 w-10 h-1 bg-blue-500/20 rounded"></div>
                        <div class="absolute bottom-4 left-4 flex gap-1">
                            <div class="w-6 h-6 rounded bg-blue-600/30 border border-blue-500/20"></div>
                            <div class="w-6 h-6 rounded bg-blue-600/30 border border-blue-500/20"></div>
                            <div class="w-6 h-6 rounded bg-blue-600/30 border border-blue-500/20"></div>
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
                    <div class="absolute inset-0 bg-gradient-to-br from-violet-900 via-purple-800 to-indigo-900 flex flex-col items-center justify-center gap-3 group-hover:scale-105 transition-transform duration-500">
                        <div class="text-4xl font-bold font-mono text-transparent bg-clip-text bg-gradient-to-r from-violet-300 to-purple-300">Portal</div>
                        <div class="text-violet-300 text-xs font-mono opacity-70">Corporate Portal System</div>
                        <div class="absolute top-4 left-4 flex flex-col gap-1">
                            <div class="w-20 h-1.5 bg-violet-500/30 rounded"></div>
                            <div class="w-14 h-1.5 bg-violet-500/20 rounded"></div>
                            <div class="w-18 h-1.5 bg-violet-500/15 rounded"></div>
                        </div>
                        <div class="absolute bottom-3 right-4 w-10 h-10 rounded-lg bg-violet-600/20 border border-violet-500/20 flex items-center justify-center">
                            <div class="w-4 h-4 rounded-full bg-violet-400/40"></div>
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
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-900 via-orange-800 to-yellow-900 flex flex-col items-center justify-center gap-3 group-hover:scale-105 transition-transform duration-500">
                        <div class="text-4xl font-bold font-mono text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-yellow-300">Dira</div>
                        <div class="text-amber-300 text-xs font-mono opacity-70">PT. Dira Baraka Mulia</div>
                        <div class="absolute bottom-3 left-3 right-3 h-8 bg-amber-600/15 rounded flex items-center px-3 gap-2">
                            <div class="w-3 h-3 rounded-full bg-amber-400/50"></div>
                            <div class="w-24 h-1.5 bg-amber-400/20 rounded"></div>
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
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-900 via-teal-800 to-green-900 flex flex-col items-center justify-center gap-3 group-hover:scale-105 transition-transform duration-500">
                        <div class="text-4xl font-bold font-mono text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 to-teal-300">IMS</div>
                        <div class="text-emerald-300 text-xs font-mono opacity-70">CV. Indoplas Mandiri Sejahtera</div>
                        <div class="absolute top-3 right-3 grid grid-cols-3 gap-1">
                            <div class="w-5 h-5 rounded bg-emerald-600/20 border border-emerald-500/15"></div>
                            <div class="w-5 h-5 rounded bg-emerald-600/20 border border-emerald-500/15"></div>
                            <div class="w-5 h-5 rounded bg-emerald-600/20 border border-emerald-500/15"></div>
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
                    <div class="absolute inset-0 bg-gradient-to-br from-sky-900 via-blue-800 to-indigo-900 flex flex-col items-center justify-center gap-3 group-hover:scale-105 transition-transform duration-500">
                        <div class="text-4xl font-bold font-mono text-transparent bg-clip-text bg-gradient-to-r from-sky-300 to-blue-300">GMA</div>
                        <div class="text-sky-300 text-xs font-mono opacity-70">PT. Geya Mora Agung</div>
                        <div class="absolute bottom-3 left-3 right-3 flex gap-2">
                            <div class="flex-1 h-6 bg-sky-600/15 rounded flex items-center px-2"><div class="w-8 h-1 bg-sky-400/30 rounded"></div></div>
                            <div class="flex-1 h-6 bg-sky-600/15 rounded flex items-center px-2"><div class="w-6 h-1 bg-sky-400/20 rounded"></div></div>
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
                    <div class="absolute inset-0 bg-gradient-to-br from-rose-900 via-pink-800 to-fuchsia-900 flex flex-col items-center justify-center gap-3 group-hover:scale-105 transition-transform duration-500">
                        <div class="text-4xl font-bold font-mono text-transparent bg-clip-text bg-gradient-to-r from-rose-300 to-pink-300">Ladaik</div>
                        <div class="text-rose-300 text-xs font-mono opacity-70">E-Commerce Platform</div>
                        <div class="absolute top-3 left-3 flex gap-2">
                            <div class="w-8 h-8 rounded bg-rose-600/20 border border-rose-500/20 flex items-center justify-center">
                                <div class="w-3 h-3 rounded-full bg-rose-400/50"></div>
                            </div>
                            <div class="w-8 h-8 rounded bg-rose-600/20 border border-rose-500/20"></div>
                        </div>
                        <div class="absolute bottom-3 right-3 px-3 py-1.5 rounded-lg bg-rose-500/20 border border-rose-500/20 text-xs text-rose-300 font-mono">ORDER</div>
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
