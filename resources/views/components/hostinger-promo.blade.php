<section class="section-padding relative overflow-hidden bg-surface">
    <!-- Thin top border line -->
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-violet-500/25 to-transparent"></div>
    
    <div class="container-max relative z-10">
        <div class="relative overflow-hidden w-full max-w-4xl mx-auto rounded-3xl bg-slate-900/30 border border-slate-800/80 p-8 md:p-10 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl backdrop-blur-md">
            <!-- Decorative Glows -->
            <div class="absolute -right-20 -top-20 w-48 h-48 rounded-full bg-violet-600/10 blur-[80px] pointer-events-none"></div>
            <div class="absolute -left-20 -bottom-20 w-48 h-48 rounded-full bg-cyan-500/5 blur-[80px] pointer-events-none"></div>
            
            <!-- Left Content -->
            <div class="flex-1 space-y-4 text-left">
                <div class="flex items-center gap-2">
                    <span class="text-emerald-400 text-[10px] font-bold uppercase tracking-[2px] bg-emerald-400/10 px-3.5 py-1.5 rounded-full border border-emerald-400/20">
                        OFFICIAL CLOUD HOSTING PARTNER
                    </span>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-white tracking-tight leading-tight">
                    <span x-show="$store.locale === 'id'">Bangun Web Bisnis Anda dengan Server Indonesia Terbaik</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Build Your Business Web with the Best Indonesian Server</span>
                </h3>
                <p class="text-slate-400 text-sm md:text-base max-w-xl leading-relaxed font-body">
                    <span x-show="$store.locale === 'id'">Dapatkan performa server Jakarta ultra-cepat dengan proteksi maksimal. Klaim diskon eksklusif <strong class="text-white">20% + Domain Gratis</strong> khusus client & pembaca Morabangun.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Get ultra-fast Jakarta server performance with maximum protection. Claim an exclusive <strong class="text-white">20% discount + Free Domain</strong> only for Morabangun clients & readers.</span>
                </p>
            </div>

            <!-- Right CTA Button -->
            <div class="shrink-0 w-full md:w-auto text-center z-10">
                <a href="https://www.hostinger.com/id?REFERRALCODE=7YYIRWANB72L"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="inline-flex items-center justify-center w-full md:w-auto px-8 py-4 rounded-xl text-white font-bold text-sm tracking-wide transition-all duration-300 bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-500 hover:to-indigo-500 hover:shadow-lg hover:shadow-violet-600/20 hover:-translate-y-0.5 active:scale-[0.98]">
                    <span x-show="$store.locale === 'id'">Klaim Diskon 20% Hosting →</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Claim 20% Hosting Discount →</span>
                </a>
            </div>
        </div>
    </div>
</section>
