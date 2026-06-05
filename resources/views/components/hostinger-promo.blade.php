<section class="section-padding relative overflow-hidden bg-surface">
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-violet-500/30 to-transparent"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[350px] bg-violet-600/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container-max relative z-10">
        <div class="relative overflow-hidden w-full max-w-5xl mx-auto rounded-3xl bg-gradient-to-br from-slate-950/80 via-slate-900/50 to-slate-950/80 border border-violet-500/20 p-8 md:p-12 shadow-2xl backdrop-blur-xl">
            <!-- Neon glow accents inside card -->
            <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-violet-600/10 blur-[90px] pointer-events-none"></div>
            <div class="absolute -left-20 -bottom-20 w-64 h-64 rounded-full bg-cyan-500/8 blur-[90px] pointer-events-none"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <!-- Left Content Column (7 cols on lg) -->
                <div class="lg:col-span-7 space-y-6 text-left relative z-10">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 text-violet-400 text-xs font-bold uppercase tracking-[2px] bg-violet-400/10 px-4 py-2 rounded-full border border-violet-400/25">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <span x-show="$store.locale === 'id'">OFFICIAL CLOUD HOSTING PARTNER</span>
                            <span x-show="$store.locale === 'en'" x-cloak>OFFICIAL CLOUD HOSTING PARTNER</span>
                        </span>
                    </div>
                    
                    <h3 class="text-3xl md:text-4xl font-bold text-white tracking-tight leading-tight">
                        <span x-show="$store.locale === 'id'">Bangun Web Bisnis Anda dengan <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-fuchsia-400">Server Indonesia Terbaik</span></span>
                        <span x-show="$store.locale === 'en'" x-cloak>Build Your Business Web with the <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-fuchsia-400">Best Indonesian Server</span></span>
                    </h3>
                    
                    <p class="text-slate-400 text-base leading-relaxed font-body">
                        <span x-show="$store.locale === 'id'">Nikmati kecepatan server Jakarta ultra-cepat dengan uptime maksimal. Morabangun merekomendasikan Hostinger untuk skalabilitas tinggi, proteksi DDoS, dan kemudahan manajemen. Klaim diskon eksklusif <strong class="text-violet-400 font-bold">20% + Domain Gratis</strong> untuk Anda sekarang!</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Enjoy ultra-fast Jakarta server speeds with maximum uptime. Morabangun recommends Hostinger for high scalability, DDoS protection, and easy management. Claim an exclusive <strong class="text-violet-400 font-bold">20% discount + Free Domain</strong> for you now!</span>
                    </p>
                    
                    <!-- Call To Action -->
                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <a href="https://www.hostinger.com/id?REFERRALCODE=7YYIRWANB72L"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="group inline-flex items-center justify-center px-8 py-4 rounded-xl text-white font-bold text-base tracking-wide transition-all duration-300 bg-gradient-to-r from-violet-600 via-indigo-600 to-violet-700 hover:from-violet-500 hover:to-violet-600 hover:shadow-xl hover:shadow-violet-600/30 hover:-translate-y-0.5 active:scale-[0.98]">
                            <span class="flex items-center gap-2">
                                <span x-show="$store.locale === 'id'">Klaim Diskon 20% Hosting</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Claim 20% Hosting Discount</span>
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </a>
                        
                        <div class="flex items-center justify-center gap-1.5 text-xs text-slate-500">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span x-show="$store.locale === 'id'">Aktif & Terverifikasi</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Active & Verified</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Image Column (5 cols on lg) -->
                <div class="lg:col-span-5 relative flex justify-center items-center">
                    <!-- Glow behind image -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-violet-500/20 to-cyan-500/20 rounded-2xl blur-2xl opacity-60 pointer-events-none"></div>
                    
                    <!-- Main Mockup Image -->
                    <div class="relative overflow-hidden rounded-2xl border border-white/10 shadow-2xl bg-slate-950/60 p-2 max-w-sm sm:max-w-md lg:max-w-none transition-transform duration-500 hover:scale-[1.02] float-anim">
                        <img src="{{ asset('images/hostinger_promo.png') }}"
                             alt="Hostinger Promo Mockup"
                             class="w-full h-auto rounded-xl object-cover" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
