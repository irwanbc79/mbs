<section id="process" class="section-padding relative bg-surface overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent"></div>
    <div class="absolute inset-0 grid-bg opacity-30 pointer-events-none"></div>
    <div class="absolute -bottom-40 left-1/2 -translate-x-1/2 w-[600px] h-[300px] rounded-full bg-blue-500/3 blur-3xl pointer-events-none"></div>

    <div class="container-max relative z-10">

        {{-- Header --}}
        <div class="text-center mb-16">
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Siklus Implementasi</span>
                <span x-show="$store.locale === 'en'" x-cloak>Implementation Lifecycle</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-2 mb-4">
                <span x-show="$store.locale === 'id'">Metodologi <span class="gradient-text">Rekayasa &amp; Integrasi</span> Sistem</span>
                <span x-show="$store.locale === 'en'" x-cloak>System <span class="gradient-text">Engineering &amp; Deployment</span> Lifecycle</span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Pendekatan terstruktur 5 tahapan untuk merancang, membangun, memvalidasi kepatuhan regulasi, dan meluncurkan sistem enterprise yang teruji dan terintegrasi.</span>
                <span x-show="$store.locale === 'en'" x-cloak>A structured 5-stage engineering lifecycle to architect, build, validate compliance, and deploy robust enterprise systems.</span>
            </p>
        </div>

        {{-- Desktop Flowchart: Horizontal Single Row (Steps 1-5 + SUCCESS) --}}
        <div class="scroll-reveal hidden md:block">
            <div class="flex items-center justify-center gap-0 flex-wrap">

                @php
                $steps = [
                    [
                        'num' => 1,
                        'color' => 'blue',
                        'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                        'id' => 'Audit & Blueprint',
                        'en' => 'Audit & Blueprint',
                        'sub_id' => 'Pemetaan SOP & arsitektur data',
                        'sub_en' => 'SOP mapping & data architecture'
                    ],
                    [
                        'num' => 2,
                        'color' => 'indigo',
                        'icon' => 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4',
                        'id' => 'Desain Arsitektur',
                        'en' => 'Architecture Design',
                        'sub_id' => 'Skema database relasional & API',
                        'sub_en' => 'Relational DB schema & APIs'
                    ],
                    [
                        'num' => 3,
                        'color' => 'violet',
                        'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                        'id' => 'Rekayasa Core',
                        'en' => 'Core Engineering',
                        'sub_id' => 'Pembangunan ERP & integrasi H2H',
                        'sub_en' => 'ERP development & H2H integration'
                    ],
                    [
                        'num' => 4,
                        'color' => 'amber',
                        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                        'id' => 'Validasi & UAT',
                        'en' => 'Validation & UAT',
                        'sub_id' => 'Uji kepatuhan regulasi & stres',
                        'sub_en' => 'Regulatory compliance & stress test'
                    ],
                    [
                        'num' => 5,
                        'color' => 'emerald',
                        'icon' => 'M5 13l4 4L19 7',
                        'id' => 'Go-Live & SLA',
                        'en' => 'Go-Live & SLA',
                        'sub_id' => 'Peluncuran terpandu & monitoring SLA',
                        'sub_en' => 'Guided rollout & SLA monitoring'
                    ]
                ];

                $colorMap = [
                    'blue'    => ['ring'=>'ring-blue-500/30',    'bg'=>'bg-blue-500/10',    'border'=>'border-blue-500/20',    'text'=>'text-blue-400',    'num'=>'text-blue-500',    'glow'=>'shadow-blue-500/20'],
                    'indigo'  => ['ring'=>'ring-indigo-500/30',  'bg'=>'bg-indigo-500/10',  'border'=>'border-indigo-500/20',  'text'=>'text-indigo-400',  'num'=>'text-indigo-500',  'glow'=>'shadow-indigo-500/20'],
                    'violet'  => ['ring'=>'ring-violet-500/30',  'bg'=>'bg-violet-500/10',  'border'=>'border-violet-500/20',  'text'=>'text-violet-400',  'num'=>'text-violet-500',  'glow'=>'shadow-violet-500/20'],
                    'amber'   => ['ring'=>'ring-amber-500/30',   'bg'=>'bg-amber-500/10',   'border'=>'border-amber-500/20',   'text'=>'text-amber-400',   'num'=>'text-amber-500',   'glow'=>'shadow-amber-500/20'],
                    'emerald' => ['ring'=>'ring-emerald-500/30', 'bg'=>'bg-emerald-500/10', 'border'=>'border-emerald-500/20', 'text'=>'text-emerald-400', 'num'=>'text-emerald-500', 'glow'=>'shadow-emerald-500/20'],
                ];
                @endphp

                @foreach($steps as $s)
                @php $c = $colorMap[$s['color']]; @endphp

                {{-- Step node --}}
                <div class="flex flex-col items-center text-center w-[160px] flex-shrink-0 group my-4">
                    <div class="relative w-14 h-14 rounded-2xl {{ $c['bg'] }} border {{ $c['border'] }} ring-1 {{ $c['ring'] }} flex items-center justify-center shadow-lg {{ $c['glow'] }} group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 {{ $c['text'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['icon'] }}"/>
                        </svg>
                        <span class="absolute -top-2 -right-2 w-5 h-5 rounded-full bg-slate-900 border border-slate-700/60 text-[10px] font-black {{ $c['num'] }} flex items-center justify-center">{{ $s['num'] }}</span>
                    </div>
                    <p class="mt-3 text-sm font-bold text-white">
                        <span x-show="$store.locale === 'id'">{{ $s['id'] }}</span>
                        <span x-show="$store.locale === 'en'" x-cloak>{{ $s['en'] }}</span>
                    </p>
                    <p class="mt-1 text-xs text-slate-500 font-body leading-tight max-w-[140px]">
                        <span x-show="$store.locale === 'id'">{{ $s['sub_id'] }}</span>
                        <span x-show="$store.locale === 'en'" x-cloak>{{ $s['sub_en'] }}</span>
                    </p>
                </div>

                {{-- Arrow --}}
                @if(!$loop->last)
                <div class="flex items-center pb-10 flex-shrink-0">
                    <svg width="40" height="16" viewBox="0 0 40 16" class="text-slate-700 group-hover:text-blue-500 transition-colors">
                        <line x1="0" y1="8" x2="32" y2="8" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 3"/>
                        <path d="M30 3 L38 8 L30 13" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif
                @endforeach

                {{-- Success badge connection --}}
                <div class="flex items-center pb-10 flex-shrink-0">
                    <svg width="40" height="16" viewBox="0 0 40 16" class="text-emerald-500/50">
                        <line x1="0" y1="8" x2="32" y2="8" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 3"/>
                        <path d="M30 3 L38 8 L30 13" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- SELESAI badge --}}
                <div class="flex flex-col items-center text-center w-[160px] flex-shrink-0 my-4">
                    <div class="relative w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-600/20 to-emerald-600/20 border border-emerald-500/40 ring-1 ring-emerald-500/20 flex items-center justify-center shadow-lg shadow-emerald-500/10">
                        <svg class="w-7 h-7 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <p class="mt-3 text-sm font-bold text-emerald-400 tracking-wide">
                        <span x-show="$store.locale === 'id'">Siap Produksi!</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Production Ready!</span>
                    </p>
                    <p class="mt-1 text-xs text-slate-500 font-body leading-tight max-w-[140px]">
                        <span x-show="$store.locale === 'id'">Sistem Operasi Stabil &amp; Terintegrasi</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Stable Operating System &amp; Full Integration</span>
                    </p>
                </div>

            </div>
        </div>

        {{-- Mobile Flowchart: vertical list --}}
        <div class="scroll-reveal md:hidden space-y-0">
            @foreach($steps as $s)
            @php $c = $colorMap[$s['color']]; @endphp
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="relative w-11 h-11 rounded-xl {{ $c['bg'] }} border {{ $c['border'] }} flex items-center justify-center flex-shrink-0 shadow-md {{ $c['glow'] }}">
                        <svg class="w-5 h-5 {{ $c['text'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['icon'] }}"/>
                        </svg>
                        <span class="absolute -top-1.5 -right-1.5 w-4 h-4 rounded-full bg-slate-900 border border-slate-700 text-[9px] font-black {{ $c['num'] }} flex items-center justify-center">{{ $s['num'] }}</span>
                    </div>
                    <div class="w-px flex-1 min-h-[40px] border-l border-dashed border-slate-700/60 my-1"></div>
                </div>
                <div class="pb-6">
                    <p class="font-bold text-white text-sm">
                        <span x-show="$store.locale === 'id'">{{ $s['id'] }}</span>
                        <span x-show="$store.locale === 'en'" x-cloak>{{ $s['en'] }}</span>
                    </p>
                    <p class="text-xs text-slate-500 font-body mt-0.5">
                        <span x-show="$store.locale === 'id'">{{ $s['sub_id'] }}</span>
                        <span x-show="$store.locale === 'en'" x-cloak>{{ $s['sub_en'] }}</span>
                    </p>
                </div>
            </div>
            @endforeach

            {{-- SELESAI mobile --}}
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-blue-600/20 to-emerald-600/20 border border-emerald-500/40 flex items-center justify-center flex-shrink-0 shadow-md shadow-emerald-500/10">
                        <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                </div>
                <div class="pb-2">
                    <p class="font-bold text-emerald-400 text-sm tracking-wide">
                        <span x-show="$store.locale === 'id'">Siap Produksi!</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Production Ready!</span>
                    </p>
                    <p class="text-xs text-slate-500 font-body mt-0.5">
                        <span x-show="$store.locale === 'id'">Sistem Operasi Stabil &amp; Terintegrasi</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Stable Operating System &amp; Full Integration</span>
                    </p>
                </div>
            </div>
        </div>

        {{-- Bottom CTA --}}
        <div class="scroll-reveal mt-16 text-center">
            <p class="text-slate-400 font-body text-sm mb-6">
                <span x-show="$store.locale === 'id'">Siklus implementasi terukur &amp; transparan: <strong class="text-white">6–12 minggu</strong></span>
                <span x-show="$store.locale === 'en'" x-cloak>Measurable &amp; transparent implementation cycle: <strong class="text-white">6–12 weeks</strong></span>
            </p>
            <a href="#contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-blue-600/25 hover:-translate-y-0.5">
                <span x-show="$store.locale === 'id'">Konsultasikan Rencana Sistem Anda</span>
                <span x-show="$store.locale === 'en'" x-cloak>Consult Your System Plan</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>
