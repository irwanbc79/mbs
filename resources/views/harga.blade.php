<x-layouts.app
    pageTitle="Harga & Paket Layanan — Mora Bangun Solutions"
    metaDescription="Pilih paket layanan digital Mora Bangun Solutions yang sesuai kebutuhan bisnis Anda. Dari landing page UMKM hingga enterprise system korporasi. Harga transparan, hasil nyata."
    ogTitle="Harga & Paket Layanan — Mora Bangun Solutions"
    ogDescription="Paket Starter Rp 2,5jt, Professional, Enterprise, hingga Corporate custom. Temukan paket terbaik untuk transformasi digital bisnis Anda.">

@push('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('pricing', () => ({
        showCompare: false,
        activeQuiz: false,
        quizStep: 0,
        quizAnswers: {},
        recommended: null,

        quizQuestions: [
            {
                key: 'size',
                q_id: 'Berapa skala bisnis Anda saat ini?',
                q_en: 'What is your current business scale?',
                options: [
                    { label_id: 'Freelancer / Solopreneur', label_en: 'Freelancer / Solopreneur', value: 'starter' },
                    { label_id: 'UMKM / Startup (< 20 karyawan)', label_en: 'SME / Startup (< 20 employees)', value: 'professional' },
                    { label_id: 'Bisnis menengah (20–200 karyawan)', label_en: 'Mid-size business (20–200 employees)', value: 'enterprise' },
                    { label_id: 'Korporasi / BUMN (200+ karyawan)', label_en: 'Corporation / SOE (200+ employees)', value: 'corporate' },
                ]
            },
            {
                key: 'need',
                q_id: 'Apa kebutuhan utama bisnis Anda?',
                q_en: 'What is your primary business need?',
                options: [
                    { label_id: 'Kehadiran online & profil sederhana', label_en: 'Online presence & simple profile', value: 'starter' },
                    { label_id: 'Katalog produk & generate leads', label_en: 'Product catalog & lead generation', value: 'professional' },
                    { label_id: 'Website lengkap yang bisa dikelola sendiri', label_en: 'Full website you can manage yourself', value: 'enterprise' },
                    { label_id: 'Sistem custom + integrasi ERP/API', label_en: 'Custom system + ERP/API integration', value: 'corporate' },
                ]
            },
            {
                key: 'logistics',
                q_id: 'Apakah bisnis Anda memerlukan integrasi bea cukai (CEISA 4.0) atau logistik ekspor-impor?',
                q_en: 'Does your business require customs (CEISA 4.0) or export-import logistics integration?',
                options: [
                    { label_id: 'Ya, kami butuh otomasi pabean / H2H CEISA', label_en: 'Yes, we need customs automation / CEISA H2H', value: 'moratrade' },
                    { label_id: 'Tidak, kami tidak memerlukan sistem logistik khusus', label_en: 'No, we do not need custom logistics systems', value: 'no' }
                ]
            }
        ],

        answerQuiz(stepKey, value) {
            this.quizAnswers[stepKey] = value;
            if (this.quizStep < this.quizQuestions.length - 1) {
                this.quizStep++;
            } else {
                this.calcRecommendation();
            }
        },

        calcRecommendation() {
            if (this.quizAnswers['logistics'] === 'moratrade') {
                this.recommended = 'corporate';
                this.quizStep = 99;
                this.$nextTick(() => {
                    const el = document.getElementById('pkg-corporate');
                    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    setTimeout(() => {
                        window.dispatchEvent(new CustomEvent('set-active-tab', { detail: 'moratrade' }));
                        const tabEl = document.getElementById('enterprise-pricing-tabs');
                        if (tabEl) tabEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 800);
                });
            } else {
                const score = { starter: 0, professional: 0, enterprise: 0, corporate: 0 };
                Object.values(this.quizAnswers).forEach(v => { if (score[v] !== undefined) score[v]++; });
                this.recommended = Object.keys(score).reduce((a, b) => score[a] >= score[b] ? a : b);
                this.quizStep = 99;
                this.$nextTick(() => {
                    const el = document.getElementById('pkg-' + this.recommended);
                    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                });
            }
        },

        resetQuiz() {
            this.quizStep = 0;
            this.quizAnswers = {};
            this.recommended = null;
        },

        pkgLabel(key) {
            if (this.quizAnswers['logistics'] === 'moratrade') {
                const scale = this.quizAnswers['size'] || 'starter';
                if (scale === 'starter' || scale === 'professional') {
                    return 'MoraTrade SaaS Starter (UMKM Special)';
                } else if (scale === 'enterprise') {
                    return 'MoraTrade SaaS Pro (Forwarder)';
                } else {
                    return 'MoraTrade On-Premise Enterprise';
                }
            }
            const labels = { starter: 'STARTER', professional: 'PROFESSIONAL', enterprise: 'ENTERPRISE', corporate: 'CORPORATE' };
            return labels[key] || key;
        }
    }));
});
</script>
@endpush

<div x-data="pricing">

{{-- ── HERO ── --}}
<section class="relative pt-32 pb-16 overflow-hidden bg-surface">
    <div class="absolute inset-0 grid-bg opacity-30 pointer-events-none"></div>
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/30 to-transparent"></div>

    <div class="container-max px-6 lg:px-24 relative z-10 text-center">
        <span class="section-label">
            <span x-show="$store.locale === 'id'">Paket Harga</span>
            <span x-show="$store.locale === 'en'" x-cloak>Pricing Plans</span>
        </span>
        <h1 class="text-4xl md:text-6xl font-black tracking-tight mt-3 mb-4 leading-tight">
            <span x-show="$store.locale === 'id'">Investasi Tepat untuk<br><span class="gradient-text">Transformasi Digital</span> Anda</span>
            <span x-show="$store.locale === 'en'" x-cloak>The Right Investment for<br>Your <span class="gradient-text">Digital Transformation</span></span>
        </h1>
        <p class="text-slate-400 max-w-2xl mx-auto mb-8 font-body text-lg">
            <span x-show="$store.locale === 'id'">Harga transparan, hasil nyata. Dari landing page UMKM hingga sistem enterprise korporasi — pilih paket yang paling sesuai dengan skala dan kebutuhan bisnis Anda.</span>
            <span x-show="$store.locale === 'en'" x-cloak>Transparent pricing, real results. From SME landing pages to corporate enterprise systems — choose the plan that fits your business scale and needs.</span>
        </p>

        {{-- Quiz trigger --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
            <button @click="activeQuiz = !activeQuiz; quizStep = 0; quizAnswers = {}; recommended = null"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl transition-all hover:shadow-lg hover:shadow-cyan-500/30 hover:-translate-y-0.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                <span x-show="$store.locale === 'id'">Rekomendasikan Paket untuk Saya</span>
                <span x-show="$store.locale === 'en'" x-cloak>Recommend My Package</span>
            </button>
            <button @click="showCompare = !showCompare"
                    class="inline-flex items-center gap-2 px-6 py-3 border border-slate-700 hover:border-cyan-500/40 text-slate-300 hover:text-white font-semibold rounded-xl transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7"/></svg>
                <span x-show="$store.locale === 'id'" x-text="showCompare ? 'Sembunyikan Perbandingan' : 'Bandingkan Semua Paket'"></span>
                <span x-show="$store.locale === 'en'" x-cloak x-text="showCompare ? 'Hide Comparison' : 'Compare All Plans'"></span>
            </button>
        </div>

        {{-- Quiz Widget --}}
        <div x-show="activeQuiz" x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             class="mt-8 max-w-lg mx-auto p-6 rounded-2xl border border-cyan-500/20 bg-slate-900/80 backdrop-blur-sm text-left">

            {{-- Step questions --}}
            <template x-if="quizStep < quizQuestions.length">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-xs text-slate-500 font-mono" x-text="(quizStep + 1) + ' / ' + quizQuestions.length"></span>
                        <div class="flex-1 h-1 rounded-full bg-slate-800">
                            <div class="h-1 rounded-full bg-cyan-500 transition-all duration-300"
                                 :style="'width:' + ((quizStep + 1) / quizQuestions.length * 100) + '%'"></div>
                        </div>
                    </div>
                    <p class="font-bold text-white mb-4" x-text="$store.locale === 'id' ? quizQuestions[quizStep].q_id : quizQuestions[quizStep].q_en"></p>
                    <div class="space-y-2">
                        <template x-for="opt in quizQuestions[quizStep].options" :key="opt.value">
                            <button @click="answerQuiz(quizQuestions[quizStep].key, opt.value)"
                                    class="w-full text-left px-4 py-2.5 rounded-xl border border-slate-700/60 hover:border-cyan-500/40 hover:bg-cyan-500/5 text-slate-300 hover:text-white text-sm transition-all"
                                    x-text="$store.locale === 'id' ? opt.label_id : opt.label_en">
                            </button>
                        </template>
                    </div>
                </div>
            </template>

            {{-- Result --}}
            <template x-if="quizStep === 99 && recommended">
                <div class="text-center">
                    <div class="w-12 h-12 rounded-full bg-cyan-500/15 border border-cyan-500/30 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <p class="text-slate-400 text-sm mb-1">
                        <span x-show="$store.locale === 'id'">Berdasarkan jawaban Anda, paket terbaik adalah</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Based on your answers, the best plan for you is</span>
                    </p>
                    <p class="text-xl font-black text-white mb-1">Paket <span class="text-cyan-400" x-text="pkgLabel(recommended)"></span></p>
                    <p class="text-xs text-slate-500 mb-4">
                        <span x-show="$store.locale === 'id'">Kami sudah scroll ke paket tersebut di bawah.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>We've scrolled to that package below.</span>
                    </p>
                    <div class="flex gap-2 justify-center">
                        <button @click="activeQuiz = false" class="px-4 py-2 text-xs text-slate-400 hover:text-white border border-slate-700 rounded-lg transition-colors">
                            <span x-show="$store.locale === 'id'">Tutup</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Close</span>
                        </button>
                        <button @click="resetQuiz()" class="px-4 py-2 text-xs text-cyan-400 hover:text-cyan-300 border border-cyan-500/30 rounded-lg transition-colors">
                            <span x-show="$store.locale === 'id'">Coba lagi</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Try again</span>
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>

{{-- ── PRICING CARDS ── --}}
<section class="section-padding bg-surface relative">
    <div class="container-max px-6 lg:px-24">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 items-start">

            {{-- ── STARTER ── --}}
            <div id="pkg-starter"
                 :class="recommended === 'starter' ? 'ring-2 ring-slate-400/60 ring-offset-2 ring-offset-slate-950' : ''"
                 class="rounded-2xl border border-slate-800/60 bg-slate-900/50 flex flex-col overflow-hidden transition-all duration-300 hover:border-slate-600/60">
                <div class="p-6 flex flex-col flex-1">
                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-7 h-7 rounded-lg bg-slate-700/60 flex items-center justify-center">
                                <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                            </div>
                            <h3 class="font-black text-white tracking-wide text-sm">PAKET STARTER</h3>
                        </div>
                        <p class="text-slate-500 text-xs italic">Ideal untuk: Bisnis yang butuh kehadiran online cepat &amp; terjangkau</p>
                    </div>
                    <div class="mb-5">
                        <div class="text-3xl font-black text-white">Rp 2.500.000</div>
                        <div class="text-xs text-slate-500 mt-0.5">Sekali bayar · 3–5 hari kerja</div>
                    </div>
                    <div class="space-y-2 mb-5 flex-1">
                        @foreach([
                            '1 halaman landing page (single page)',
                            'Desain berdasarkan referensi klien',
                            'Tombol WhatsApp terintegrasi',
                            'Tampilan mobile responsive',
                            'Up to 5 section konten',
                            '1 (satu) kali revisi desain',
                            'File HTML siap pakai (delivered)',
                        ] as $f)
                        <div class="flex items-start gap-2 text-xs text-slate-300 font-body">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            {{ $f }}
                        </div>
                        @endforeach
                        <div class="pt-2 border-t border-slate-800/60">
                            <p class="text-xs text-slate-600 font-medium mb-1.5">Tidak termasuk:</p>
                            @foreach(['Hosting & domain', 'CMS / panel admin', 'SEO optimization', 'Maintenance bulanan'] as $x)
                            <div class="flex items-start gap-2 text-xs text-slate-600 font-body">
                                <svg class="w-3 h-3 text-slate-700 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                {{ $x }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%2C%20saya%20tertarik%20dengan%20Paket%20Starter"
                       target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 bg-slate-800 hover:bg-slate-700 border border-slate-700/60 hover:border-slate-500/60 text-white font-bold text-sm rounded-xl transition-all">
                        <span x-show="$store.locale === 'id'">Mulai Sekarang</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Get Started</span>
                    </a>
                </div>
            </div>

            {{-- ── PROFESSIONAL (FEATURED) ── --}}
            <div id="pkg-professional"
                 :class="recommended === 'professional' ? 'ring-2 ring-orange-500/80 ring-offset-2 ring-offset-slate-950' : ''"
                 class="rounded-2xl border border-cyan-500/30 bg-gradient-to-b from-slate-900 to-slate-950 flex flex-col overflow-visible transition-all duration-300 hover:border-orange-500/50 shadow-xl shadow-cyan-500/10 relative">
                {{-- Featured badge --}}
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-orange-500 to-transparent"></div>
                <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 rounded-full bg-gradient-to-r from-orange-500 to-amber-500 border border-orange-400/40 text-white text-[9px] font-black tracking-widest uppercase shadow-lg shadow-orange-500/25 flex items-center gap-1 z-20 whitespace-nowrap">
                    <span>★</span>
                    <span x-show="$store.locale === 'id'">REKOMENDASI</span>
                    <span x-show="$store.locale === 'en'" x-cloak>RECOMMENDED</span>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-7 h-7 rounded-lg bg-cyan-500/15 border border-cyan-500/20 flex items-center justify-center">
                                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <h3 class="font-black text-white tracking-wide text-sm">PAKET PROFESSIONAL</h3>
                        </div>
                        <p class="text-slate-500 text-xs italic">Ideal untuk: Bisnis yang ingin tampil profesional &amp; menghasilkan leads</p>
                    </div>
                    <div class="mb-5">
                        <div class="text-3xl font-black text-cyan-400">Rp 5.500.000</div>
                        <div class="text-xs text-slate-500 mt-0.5">Sekali bayar · 5–7 hari kerja</div>
                    </div>
                    <div class="space-y-2 mb-5 flex-1">
                        @foreach([
                            'Semua fitur Paket Starter',
                            'Katalog produk interaktif dengan filter kategori',
                            'Multi CTA WhatsApp per produk (pesan otomatis)',
                            'Section: Hero, About, Produk, Testimoni, Kontak',
                            'Animasi scroll & hover effect modern',
                            'Google Maps integration',
                            'FREE domain .com 1 tahun (Rp 150.000)',
                            'FREE hosting cPanel 1 tahun (Rp 600.000)',
                            'SSL Certificate (HTTPS)',
                            '3 (tiga) kali revisi desain',
                            'Training penggunaan dasar (online 1 jam)',
                            'Garansi bug-fix 30 hari',
                        ] as $f)
                        <div class="flex items-start gap-2 text-xs text-slate-300 font-body">
                            <svg class="w-3.5 h-3.5 text-cyan-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            {{ $f }}
                        </div>
                        @endforeach
                        <div class="pt-2 border-t border-cyan-500/10">
                            <p class="text-xs text-cyan-400/70 font-bold mb-1.5 flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/></svg>
                                BONUS EKSKLUSIF
                            </p>
                            @foreach(['Setup Google Analytics 4', 'Setup Google Search Console', 'Optimasi kecepatan loading (PageSpeed)', 'Panduan update konten mandiri'] as $b)
                            <div class="flex items-start gap-2 text-xs text-cyan-300/70 font-body">
                                <svg class="w-3 h-3 text-cyan-400/60 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                {{ $b }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%2C%20saya%20tertarik%20dengan%20Paket%20Professional"
                       target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-sm rounded-xl transition-all hover:shadow-lg hover:shadow-cyan-500/25">
                        <span x-show="$store.locale === 'id'">Pilih Paket Ini</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Choose This Plan</span>
                    </a>
                </div>
            </div>

            {{-- ── ENTERPRISE ── --}}
            <div id="pkg-enterprise"
                 :class="recommended === 'enterprise' ? 'ring-2 ring-violet-400/60 ring-offset-2 ring-offset-slate-950' : ''"
                 class="rounded-2xl border border-violet-500/20 bg-slate-900/50 flex flex-col overflow-hidden transition-all duration-300 hover:border-violet-500/40">
                <div class="p-6 flex flex-col flex-1">
                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-7 h-7 rounded-lg bg-violet-500/10 border border-violet-500/15 flex items-center justify-center">
                                <svg class="w-4 h-4 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <h3 class="font-black text-white tracking-wide text-sm">PAKET ENTERPRISE</h3>
                        </div>
                        <p class="text-slate-500 text-xs italic">Ideal untuk: Bisnis menengah yang butuh website lengkap + bisa kelola sendiri</p>
                    </div>
                    <div class="mb-5">
                        <div class="text-3xl font-black text-violet-400">Rp 12.000.000</div>
                        <div class="text-xs text-slate-500 mt-0.5">Sekali bayar · 14–21 hari kerja</div>
                    </div>
                    <div class="space-y-2 mb-5 flex-1">
                        @foreach([
                            'Semua fitur Paket Professional',
                            'CMS (Content Management System) berbasis Laravel/WordPress',
                            'Panel admin: kelola produk, harga, foto sendiri',
                            'Halaman Blog/Artikel untuk SEO',
                            'Form inquiry terintegrasi email & WA',
                            'Speed optimization (target PageSpeed 90+)',
                            'Backup otomatis harian',
                            'Unlimited revisi selama pengerjaan',
                            'FREE domain .com + hosting VPS 1 tahun',
                            '6 bulan maintenance & support',
                            'Laporan trafik & performa bulanan',
                        ] as $f)
                        <div class="flex items-start gap-2 text-xs text-slate-300 font-body">
                            <svg class="w-3.5 h-3.5 text-violet-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            {{ $f }}
                        </div>
                        @endforeach
                        <div class="pt-2 border-t border-violet-500/10">
                            <p class="text-xs text-violet-400/70 font-bold mb-1.5">FITUR PREMIUM:</p>
                            @foreach(['WhatsApp Business API (opsional)', 'Live Chat widget', 'Schema markup (rich snippets)', 'Sitemap XML otomatis', 'Redirect management'] as $p)
                            <div class="flex items-start gap-2 text-xs text-violet-300/70 font-body">
                                <svg class="w-3 h-3 text-violet-400/60 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                {{ $p }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%2C%20saya%20tertarik%20dengan%20Paket%20Enterprise"
                       target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 bg-violet-600/80 hover:bg-violet-500 text-white font-bold text-sm rounded-xl transition-all hover:shadow-lg hover:shadow-violet-500/20">
                        <span x-show="$store.locale === 'id'">Konsultasi Sekarang</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Consult Now</span>
                    </a>
                </div>
            </div>

            {{-- ── CORPORATE ── --}}
            <div id="pkg-corporate"
                 :class="recommended === 'corporate' ? 'ring-2 ring-amber-400/60 ring-offset-2 ring-offset-slate-950' : ''"
                 class="rounded-2xl border border-amber-500/20 bg-slate-900/50 flex flex-col overflow-hidden transition-all duration-300 hover:border-amber-500/40">
                <div class="p-6 flex flex-col flex-1">
                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-1">
                            <div class="w-7 h-7 rounded-lg bg-amber-500/10 border border-amber-500/15 flex items-center justify-center">
                                <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            </div>
                            <h3 class="font-black text-white tracking-wide text-sm">PAKET CORPORATE</h3>
                        </div>
                        <p class="text-slate-500 text-xs italic">Ideal untuk: Perusahaan besar, korporasi, BUMN, distributor nasional</p>
                    </div>
                    <div class="mb-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-amber-500/10 border border-amber-500/20 mb-2">
                            <svg class="w-3.5 h-3.5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span class="text-amber-400 font-bold text-sm">Hubungi Kami</span>
                        </div>
                        <p class="text-xs text-slate-400 leading-relaxed">Harga disesuaikan dengan skala & kompleksitas kebutuhan bisnis Anda. Konsultasi gratis, tanpa komitmen.</p>
                        <div class="text-xs text-slate-500 mt-1.5">Custom quote · 30–90 hari kerja</div>
                    </div>
                    <div class="space-y-2 mb-5 flex-1">
                        @foreach([
                            'Semua fitur Paket Enterprise',
                            'Multi-user login dengan role & permission',
                            'Custom web application (bukan template)',
                            'Otomasi Pabean (CEISA H2H & MoraTrade AI)',
                            'Customer portal (tracking order/status)',
                            'Dashboard analytics & laporan eksekutif',
                            'Integrasi API ke ERP / Odoo / Accurate',
                            'WhatsApp Business API multi-agent',
                            'Live Chat + chatbot AI terintegrasi',
                        ] as $f)
                        <div class="flex items-start gap-2 text-xs text-slate-300 font-body">
                            <svg class="w-3.5 h-3.5 text-amber-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            {{ $f }}
                        </div>
                        @endforeach
                        <div class="pt-2 border-t border-amber-500/10">
                            <p class="text-xs text-amber-400/70 font-bold mb-1.5">INFRASTRUKTUR PREMIUM:</p>
                            @foreach(['Dedicated VPS / Cloud Server', 'SSL Wildcard + Firewall + DDoS protection', 'Load balancing & CDN (Cloudflare)', '12 bulan maintenance & support priority', 'Dedicated Account Manager', 'Source code ownership (hak milik penuh)'] as $i)
                            <div class="flex items-start gap-2 text-xs text-amber-300/70 font-body">
                                <svg class="w-3 h-3 text-amber-400/60 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                {{ $i }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%2C%20saya%20tertarik%20dengan%20Paket%20Corporate%2C%20mohon%20custom%20quote"
                       target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center gap-2 w-full px-4 py-2.5 bg-amber-500/90 hover:bg-amber-400 text-slate-950 font-bold text-sm rounded-xl transition-all hover:shadow-lg hover:shadow-amber-500/20">
                        <span x-show="$store.locale === 'id'">Minta Custom Quote</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Request Custom Quote</span>
                    </a>
                </div>
            </div>

        </div>{{-- end grid --}}

        {{-- Payment note --}}
        <div class="mt-6 flex flex-wrap items-center justify-center gap-6 text-xs text-slate-600">
            <div class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-emerald-500/60" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span>Harga sudah termasuk konsultasi awal</span>
            </div>
            <div class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-emerald-500/60" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span>Pembayaran: DP 50% · Lunas setelah selesai</span>
            </div>
            <div class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-emerald-500/60" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span>Transfer BCA / Mandiri / BRI / QRIS</span>
            </div>
            <div class="flex items-center gap-1.5">
                <svg class="w-3.5 h-3.5 text-emerald-500/60" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span>Corporate: Termin DP 40% · Progress 30% · UAT 20% · Go-Live 10%</span>
            </div>
        </div>
    </div>
</section>

{{-- ── ENTERPRISE SOLUTIONS PRICING (ERP, CRM, Portal, AI) ── --}}
<section id="enterprise-pricing-tabs" class="section-padding bg-slate-950/40 border-t border-white/5" x-data="{ activeTab: 'erp' }" @set-active-tab.window="activeTab = $event.detail">
    <div class="container-max px-6 lg:px-24">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-12">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-violet-500/10 border border-violet-500/30 mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-violet-400 animate-pulse"></span>
                <span class="text-violet-300 text-[10px] uppercase tracking-[0.25em] font-bold">Enterprise Systems</span>
            </div>
            <h2 class="font-heading text-3xl md:text-5xl font-bold text-white mb-4 leading-tight">
                <span x-show="$store.locale === 'id'">Paket <span class="text-cyan-400">Sistem Bisnis</span> Korporat</span>
                <span x-show="$store.locale === 'en'" x-cloak>Enterprise <span class="text-cyan-400">Business Systems</span> Packages</span>
            </h2>
            <p class="text-base md:text-lg text-slate-400 leading-relaxed font-body max-w-2xl mx-auto">
                <span x-show="$store.locale === 'id'">ERP, CRM, Corporate Portal, AI Workflow, Chatbot AI, dan Custom Development — solusi sistem yang scalable untuk UMKM hingga BUMN.</span>
                <span x-show="$store.locale === 'en'" x-cloak>ERP, CRM, Corporate Portal, AI Workflow, AI Chatbot, and Custom Development — scalable systems from SMEs to large enterprises.</span>
            </p>
        </div>

        {{-- Tabs --}}
        <div class="flex flex-wrap justify-center gap-2 mb-10">
            @php
                $tabs = [
                    ['key'=>'erp',     'id'=>'Sistem ERP',         'en'=>'ERP System',        'color'=>'cyan',    'icon'=>'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                    ['key'=>'crm',    'id'=>'CRM',                'en'=>'CRM',               'color'=>'blue',    'icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                    ['key'=>'portal', 'id'=>'Corporate Portal',   'en'=>'Corporate Portal',  'color'=>'violet',  'icon'=>'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                    ['key'=>'ai',     'id'=>'AI Workflow',        'en'=>'AI Workflow',       'color'=>'amber',   'icon'=>'M13 10V3L4 14h7v7l9-11h-7z'],
                    ['key'=>'moratrade','id'=>'MoraTrade AI',     'en'=>'MoraTrade AI',      'color'=>'cyan',    'icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                    ['key'=>'chatbot','id'=>'Chatbot AI',         'en'=>'AI Chatbot',        'color'=>'emerald', 'icon'=>'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z'],
                    ['key'=>'custom', 'id'=>'Custom Dev',         'en'=>'Custom Dev',        'color'=>'amber',   'icon'=>'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'],
                ];
            @endphp
            @foreach($tabs as $tab)
                <button @click="activeTab = '{{ $tab['key'] }}'"
                        data-testid="tab-{{ $tab['key'] }}"
                        class="group relative inline-flex items-center gap-2 px-5 py-3 rounded-xl font-semibold text-sm transition-all duration-300 border"
                        :class="activeTab === '{{ $tab['key'] }}'
                            ? 'bg-{{ $tab['color'] }}-500/10 border-{{ $tab['color'] }}-500/40 text-{{ $tab['color'] }}-300 shadow-lg shadow-{{ $tab['color'] }}-500/10'
                            : 'bg-slate-900/40 border-slate-800/60 text-slate-400 hover:text-white hover:border-slate-700'">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $tab['icon'] }}"/>
                    </svg>
                    <span x-show="$store.locale === 'id'">{{ $tab['id'] }}</span>
                    <span x-show="$store.locale === 'en'" x-cloak>{{ $tab['en'] }}</span>
                </button>
            @endforeach
        </div>

        @include('partials.harga-enterprise-tabs')

    </div>
</section>

{{-- ── COMPARISON TABLE ── --}}
<section x-show="showCompare" x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="section-padding bg-surface border-t border-white/5">
    <div class="container-max px-6 lg:px-24">
        <h2 class="text-2xl font-bold text-white mb-8 text-center">
            <span x-show="$store.locale === 'id'">Perbandingan Lengkap Paket</span>
            <span x-show="$store.locale === 'en'" x-cloak>Full Plan Comparison</span>
        </h2>
        <div class="overflow-x-auto rounded-2xl border border-slate-800/60">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-slate-800/60">
                        <th class="text-left px-4 py-3 text-slate-500 font-medium w-1/3">
                            <span x-show="$store.locale === 'id'">Fitur</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Features</span>
                        </th>
                        <th class="text-center px-3 py-3 text-slate-300 font-bold text-xs">
                            STARTER<br>
                            <span class="text-slate-500 font-normal">
                                <span x-show="$store.locale === 'id'">Rp 2,5jt</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Rp 2.5M</span>
                            </span>
                        </th>
                        <th class="text-center px-3 py-3 text-cyan-400 font-bold text-xs bg-cyan-500/5">
                            PROFESSIONAL<br>
                            <span class="text-slate-500 font-normal">
                                <span x-show="$store.locale === 'id'">Rp 5,5jt</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Rp 5.5M</span>
                            </span>
                        </th>
                        <th class="text-center px-3 py-3 text-violet-400 font-bold text-xs">
                            ENTERPRISE<br>
                            <span class="text-slate-500 font-normal">
                                <span x-show="$store.locale === 'id'">Rp 12jt</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Rp 12M</span>
                            </span>
                        </th>
                        <th class="text-center px-3 py-3 text-amber-400 font-bold text-xs">
                            CORPORATE<br>
                            <span class="text-slate-500 font-normal">
                                <span x-show="$store.locale === 'id'">Rp 25jt+</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Rp 25M+</span>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/40">
                    @php
                    $rows = [
                        [['id' => 'Landing page responsive', 'en' => 'Responsive landing page'], true, true, true, true],
                        [['id' => 'Multi-section website', 'en' => 'Multi-section website'], false, true, true, true],
                        [['id' => 'Domain .com 1 tahun', 'en' => '1-year .com domain'], false, true, true, true],
                        [['id' => 'Hosting cPanel / VPS', 'en' => 'cPanel / VPS Hosting'], false, 'cPanel', 'VPS', 'Dedicated'],
                        [['id' => 'SSL Certificate', 'en' => 'SSL Certificate'], false, true, true, 'Wildcard'],
                        [['id' => 'CMS / Panel admin', 'en' => 'CMS / Admin panel'], false, false, true, true],
                        [['id' => 'Blog / Artikel', 'en' => 'Blog / Articles'], false, false, true, true],
                        [['id' => 'Katalog produk + filter', 'en' => 'Product catalog + filter'], false, true, true, true],
                        [['id' => 'Google Analytics setup', 'en' => 'Google Analytics setup'], false, true, true, true],
                        [['id' => 'Integrasi WhatsApp', 'en' => 'WhatsApp Integration'], '1 WA', 'Multi WA', 'Business API', 'Multi-Agent'],
                        [['id' => 'Chatbot AI', 'en' => 'AI Chatbot'], false, false, false, true],
                        [['id' => 'Custom web app', 'en' => 'Custom web app'], false, false, false, true],
                        [['id' => 'Integrasi ERP/API', 'en' => 'ERP/API Integration'], false, false, false, true],
                        [['id' => 'Otomasi Pabean (CEISA H2H)', 'en' => 'Customs Automation (CEISA H2H)'], false, false, false, ['id' => 'Opsional (MoraTrade AI)', 'en' => 'Optional (MoraTrade AI)']],
                        [['id' => 'AI OCR Dokumen Ekspor-Impor', 'en' => 'Export-Import Document AI OCR'], false, false, false, ['id' => 'Opsional (MoraTrade AI)', 'en' => 'Optional (MoraTrade AI)']],
                        [
                            ['id' => 'Langganan SaaS Cloud', 'en' => 'SaaS Cloud Subscription'],
                            false,
                            false,
                            false,
                            ['id' => 'Tersedia (Mulai Rp 499rb/bln)', 'en' => 'Available (From Rp 499k/mo)']
                        ],
                        [
                            ['id' => 'Kuota Dokumen Bulanan', 'en' => 'Monthly Document Quota'],
                            false,
                            false,
                            false,
                            ['id' => '25 dok (Starter) / 150 dok (Pro) / Unlimited (On-Premise)', 'en' => '25 docs (Starter) / 150 docs (Pro) / Unlimited (On-Premise)']
                        ],
                        [
                            ['id' => 'Biaya Kelebihan Dokumen', 'en' => 'Excess Document Fee'],
                            false,
                            false,
                            false,
                            ['id' => 'Rp 15k (Starter) / Rp 12k (Pro) / Bebas (On-Premise)', 'en' => 'Rp 15k (Starter) / Rp 12k (Pro) / Free (On-Premise)']
                        ],
                        [['id' => 'Optimasi kecepatan', 'en' => 'Speed optimization'], false, ['id' => 'Dasar', 'en' => 'Basic'], 'PageSpeed 90+', 'Core Web Vitals'],
                        [['id' => 'Maintenance', 'en' => 'Maintenance'], false, ['id' => 'Bug-fix 30 hari', 'en' => '30-day bug-fix'], ['id' => '6 bulan', 'en' => '6 months'], ['id' => '12 bulan', 'en' => '12 months']],
                        [['id' => 'Revisi desain', 'en' => 'Design revisions'], '1×', '3×', 'Unlimited', 'Unlimited'],
                        [['id' => 'Kepemilikan source code', 'en' => 'Source code ownership'], false, false, false, true],
                        [['id' => 'Dedicated Acc. Manager', 'en' => 'Dedicated Acc. Manager'], false, false, false, true],
                        [['id' => 'Estimasi pengerjaan', 'en' => 'Estimated timeline'], ['id' => '3–5 hari', 'en' => '3–5 days'], ['id' => '5–7 hari', 'en' => '5–7 days'], ['id' => '14–21 hari', 'en' => '14–21 days'], ['id' => '30–90 hari', 'en' => '30–90 days']],
                    ];
                    @endphp
                    @foreach($rows as $row)
                    <tr class="hover:bg-white/[0.02] transition-colors">
                        <td class="px-4 py-2.5 text-slate-400 font-body text-xs">
                            @if(is_array($row[0]))
                                <span x-show="$store.locale === 'id'">{{ $row[0]['id'] }}</span>
                                <span x-show="$store.locale === 'en'" x-cloak>{{ $row[0]['en'] }}</span>
                            @else
                                {{ $row[0] }}
                            @endif
                        </td>
                        @foreach([1, 2, 3, 4] as $col)
                        <td class="px-3 py-2.5 text-center text-xs {{ $col === 2 ? 'bg-cyan-500/[0.03]' : '' }}">
                            @if($row[$col] === true)
                                <svg class="w-4 h-4 mx-auto {{ $col === 2 ? 'text-cyan-400' : ($col === 3 ? 'text-violet-400' : ($col === 4 ? 'text-amber-400' : 'text-slate-400')) }}" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            @elseif($row[$col] === false)
                                <span class="text-slate-700">—</span>
                            @elseif(is_array($row[$col]))
                                <span class="{{ $col === 2 ? 'text-cyan-400/80' : ($col === 3 ? 'text-violet-400/80' : ($col === 4 ? 'text-amber-400/80' : 'text-slate-400')) }} font-medium">
                                    <span x-show="$store.locale === 'id'">{{ $row[$col]['id'] }}</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>{{ $row[$col]['en'] }}</span>
                                </span>
                            @else
                                <span class="{{ $col === 2 ? 'text-cyan-400/80' : ($col === 3 ? 'text-violet-400/80' : ($col === 4 ? 'text-amber-400/80' : 'text-slate-400')) }} font-medium">{{ $row[$col] }}</span>
                            @endif
                        </td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- ── GUARANTEES ── --}}
<section class="section-padding bg-surface border-t border-white/5">
    <div class="container-max px-6 lg:px-24">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-white">
                <span x-show="$store.locale === 'id'">Kenapa Pilih <span class="gradient-text">Mora Bangun?</span></span>
                <span x-show="$store.locale === 'en'" x-cloak>Why Choose <span class="gradient-text">Mora Bangun?</span></span>
            </h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'color' => 'cyan', 'title' => 'Garansi Bug-Fix', 'desc' => 'Setiap paket dilengkapi garansi perbaikan bug pasca-launch. Anda tidak sendirian setelah go-live.'],
                ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'color' => 'amber', 'title' => 'Pengerjaan Cepat', 'desc' => 'Starter selesai 3-5 hari. Professional 5-7 hari. Tidak ada drama, ada timeline yang jelas dan terukur.'],
                ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'color' => 'violet', 'title' => 'Tim Lokal Indonesia', 'desc' => 'Kami mengerti konteks bisnis lokal. Komunikasi mudah, support dalam Bahasa Indonesia, respons cepat.'],
                ['icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'color' => 'emerald', 'title' => 'Teknologi Modern', 'desc' => 'Laravel, Tailwind, Alpine.js — stack yang cepat, aman, dan scalable. Bukan template WordPress murahan.'],
            ] as $g)
            <div class="p-5 rounded-2xl border border-slate-800/60 bg-slate-900/30 hover:border-{{ $g['color'] }}-500/30 transition-all group">
                <div class="w-9 h-9 rounded-xl bg-{{ $g['color'] }}-500/10 border border-{{ $g['color'] }}-500/20 flex items-center justify-center mb-4">
                    <svg class="w-4 h-4 text-{{ $g['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $g['icon'] }}"/></svg>
                </div>
                <h3 class="font-bold text-white text-sm mb-1.5">{{ $g['title'] }}</h3>
                <p class="text-slate-500 text-xs leading-relaxed font-body">{{ $g['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── FAQ ── --}}
<section class="section-padding bg-surface border-t border-white/5" x-data="{ open: null }">
    <div class="container-max px-6 lg:px-24">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-2xl font-bold text-white mb-8 text-center">
                <span x-show="$store.locale === 'id'">Pertanyaan yang Sering Ditanyakan</span>
                <span x-show="$store.locale === 'en'" x-cloak>Frequently Asked Questions</span>
            </h2>
            <div class="space-y-3">
                @foreach([
                    ['q' => 'Apakah harga sudah termasuk hosting dan domain?', 'a' => 'Paket Starter TIDAK termasuk. Paket Professional ke atas sudah TERMASUK domain .com 1 tahun dan hosting (cPanel untuk Professional, VPS untuk Enterprise, Dedicated Server untuk Corporate).'],
                    ['q' => 'Bagaimana proses pembayaran?', 'a' => 'Starter & Professional: DP 50% di awal, pelunasan 50% setelah selesai. Enterprise: DP 50% di awal, 50% sebelum launch. Corporate: Termin DP 40% · Progress 30% · UAT 20% · Go-Live 10%. Pembayaran via transfer bank atau QRIS.'],
                    ['q' => 'Apakah ada biaya tambahan setelah selesai?', 'a' => 'Tidak ada biaya tersembunyi. Setelah masa garansi/maintenance paket berakhir, Anda bebas memilih layanan maintenance lanjutan atau mengelola sendiri. Domain dan hosting renewal dibayar sendiri oleh klien setelah tahun pertama.'],
                    ['q' => 'Berapa lama revisi yang bisa saya minta?', 'a' => 'Starter: 1 revisi. Professional: 3 revisi. Enterprise & Corporate: Unlimited revisi selama masa pengerjaan. Revisi di luar lingkup yang disepakati di awal akan dihitung terpisah.'],
                    ['q' => 'Apakah saya bisa upgrade paket di kemudian hari?', 'a' => 'Ya! Anda bisa upgrade dari Starter ke Professional atau Enterprise kapan saja. Biaya upgrade dihitung berdasarkan selisih harga + biaya integrasi fitur baru ke website yang sudah ada.'],
                    ['q' => 'Apakah tersedia demo website sebelum membayar?', 'a' => 'Untuk Paket Professional ke atas, kami menyediakan demo website yang sudah siap dan bisa dilihat langsung. Untuk Starter, kami presentasikan referensi desain serupa dari proyek sebelumnya.'],
                ] as $i => $faq)
                <div class="rounded-xl border border-slate-800/60 bg-slate-900/30 overflow-hidden">
                    <button @click="open === {{ $i }} ? open = null : open = {{ $i }}"
                            class="w-full flex items-center justify-between px-5 py-4 text-left hover:bg-white/[0.02] transition-colors">
                        <span class="font-semibold text-sm text-white pr-4">{{ $faq['q'] }}</span>
                        <svg class="w-4 h-4 text-slate-500 flex-shrink-0 transition-transform duration-200"
                             :class="open === {{ $i }} ? 'rotate-180' : ''"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open === {{ $i }}"
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 -translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="px-5 pb-4">
                        <p class="text-slate-400 text-sm leading-relaxed font-body">{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ── CTA ── --}}
<section class="section-padding bg-surface border-t border-white/5">
    <div class="container-max px-6 lg:px-24">
        <div class="rounded-2xl border border-cyan-500/20 bg-gradient-to-br from-slate-900 to-slate-950 p-10 text-center">
            <p class="text-xs text-cyan-400 font-bold uppercase tracking-widest mb-3">Masih bingung memilih?</p>
            <h2 class="text-3xl font-black text-white mb-3">
                <span x-show="$store.locale === 'id'">Konsultasi <span class="gradient-text">Gratis</span> — 0 Komitmen</span>
                <span x-show="$store.locale === 'en'" x-cloak><span class="gradient-text">Free</span> Consultation — Zero Commitment</span>
            </h2>
            <p class="text-slate-400 max-w-lg mx-auto mb-8 font-body">
                <span x-show="$store.locale === 'id'">Ceritakan kebutuhan bisnis Anda, kami bantu analisis dan rekomendasikan solusi paling tepat — tanpa biaya, tanpa tekanan.</span>
                <span x-show="$store.locale === 'en'" x-cloak>Tell us about your business needs, we'll help analyze and recommend the best solution — no cost, no pressure.</span>
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%2C%20saya%20ingin%20konsultasi%20paket%20layanan"
                   target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 px-8 py-3.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl transition-all hover:shadow-lg hover:shadow-cyan-500/30 hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    <span x-show="$store.locale === 'id'">Chat WhatsApp Sekarang</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Chat on WhatsApp Now</span>
                </a>
                <a href="{{ route('home') }}#contact"
                   class="inline-flex items-center gap-2 px-8 py-3.5 border border-slate-700 hover:border-cyan-500/40 text-slate-300 hover:text-white font-semibold rounded-xl transition-all">
                    <span x-show="$store.locale === 'id'">Isi Form Kebutuhan</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Fill Inquiry Form</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-14 border-t border-white/5">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <div class="rounded-2xl border border-white/10 bg-white/[.02] p-8">
            <p class="text-sm text-slate-400 font-body mb-4">
                <span x-show="$store.locale === 'id'">Butuh paket spesifik industri Anda — CEISA, klinik, sekolah, distributor, dan lainnya?</span>
                <span x-show="$store.locale === 'en'" x-cloak>Need a plan built for your specific industry — CEISA, clinics, schools, distributors, and more?</span>
            </p>
            <a href="{{ route('solusi.index') }}"
               class="inline-flex items-center gap-2 px-6 py-3 border border-cyan-500/30 hover:border-cyan-500/60 hover:bg-cyan-500/10 text-cyan-400 font-semibold rounded-xl transition-all">
                <span x-show="$store.locale === 'id'">Lihat Solusi per Industri</span>
                <span x-show="$store.locale === 'en'" x-cloak>See Industry Solutions</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</section>

</div>
</x-layouts.app>
