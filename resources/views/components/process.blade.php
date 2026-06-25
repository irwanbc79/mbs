<section id="process" class="section-padding relative bg-surface overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/30 to-transparent"></div>
    <div class="absolute inset-0 grid-bg opacity-30 pointer-events-none"></div>
    <div class="absolute -bottom-40 left-1/2 -translate-x-1/2 w-[600px] h-[300px] rounded-full bg-cyan-500/3 blur-3xl pointer-events-none"></div>

    <div class="container-max relative z-10">

        {{-- Header --}}
        <div class="text-center mb-16">
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Kerangka Kerja</span>
                <span x-show="$store.locale === 'en'" x-cloak>Methodology</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-2 mb-4">
                <span x-show="$store.locale === 'id'">MBS AI <span class="gradient-text">Transformation</span> Framework</span>
                <span x-show="$store.locale === 'en'" x-cloak>MBS AI <span class="gradient-text">Transformation</span> Framework</span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Metodologi 5 langkah terstruktur untuk mengubah bisnis tradisional yang padat karya menjadi bisnis cerdas yang berjalan otonom.</span>
                <span x-show="$store.locale === 'en'" x-cloak>A structured 5-step methodology to transform manual, labor-intensive operations into an autonomous, AI-driven business.</span>
            </p>
        </div>

        {{-- Desktop Flowchart: Horizontal Single Row (Steps 1-5 + SUCCESS) --}}
        <div class="scroll-reveal hidden md:block">
            <div class="flex items-center justify-center gap-0 flex-wrap">

                @php
                $steps = [
                    [
                        'num' => 1,
                        'color' => 'cyan',
                        'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                        'id' => 'Discovery',
                        'en' => 'Discovery',
                        'sub_id' => 'Audit & pemetaan SOP manual',
                        'sub_en' => 'Audit & mapping manual SOPs'
                    ],
                    [
                        'num' => 2,
                        'color' => 'blue',
                        'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                        'id' => 'Digitalize',
                        'en' => 'Digitalize',
                        'sub_id' => 'AI OCR dokumen & email',
                        'sub_en' => 'AI OCR of docs & emails'
                    ],
                    [
                        'num' => 3,
                        'color' => 'violet',
                        'icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z',
                        'id' => 'Automate',
                        'en' => 'Automate',
                        'sub_id' => 'Orkestrasi alur kerja otonom',
                        'sub_en' => 'Autonomous workflow orchestration'
                    ],
                    [
                        'num' => 4,
                        'color' => 'amber',
                        'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 9.172V5L8 4z',
                        'id' => 'AI Integrate',
                        'en' => 'AI Integrate',
                        'sub_id' => 'Model & simulator kepabeanan',
                        'sub_en' => 'Customs models & simulator'
                    ],
                    [
                        'num' => 5,
                        'color' => 'emerald',
                        'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                        'id' => 'Autonomous',
                        'en' => 'Autonomous',
                        'sub_id' => 'Sistem operasi & AI Board live',
                        'sub_en' => 'Operating system & AI Board live'
                    ]
                ];

                $colorMap = [
                    'cyan'    => ['ring'=>'ring-cyan-500/30',    'bg'=>'bg-cyan-500/10',    'border'=>'border-cyan-500/20',    'text'=>'text-cyan-400',    'num'=>'text-cyan-500',    'glow'=>'shadow-cyan-500/20'],
                    'blue'    => ['ring'=>'ring-blue-500/30',    'bg'=>'bg-blue-500/10',    'border'=>'border-blue-500/20',    'text'=>'text-blue-400',    'num'=>'text-blue-500',    'glow'=>'shadow-blue-500/20'],
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
                    <svg width="40" height="16" viewBox="0 0 40 16" class="text-slate-700 group-hover:text-cyan-600 transition-colors">
                        <line x1="0" y1="8" x2="32" y2="8" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 3"/>
                        <path d="M30 3 L38 8 L30 13" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif
                @endforeach

                {{-- Success badge connection --}}
                <div class="flex items-center pb-10 flex-shrink-0">
                    <svg width="40" height="16" viewBox="0 0 40 16" class="text-cyan-500/50">
                        <line x1="0" y1="8" x2="32" y2="8" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 3"/>
                        <path d="M30 3 L38 8 L30 13" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </div>

                {{-- SELESAI badge --}}
                <div class="flex flex-col items-center text-center w-[160px] flex-shrink-0 my-4">
                    <div class="relative w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 border border-cyan-400/40 ring-1 ring-cyan-400/20 flex items-center justify-center shadow-lg shadow-cyan-500/20 animate-pulse-slow">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <p class="mt-3 text-sm font-black text-cyan-400 uppercase tracking-widest">
                        <span x-show="$store.locale === 'id'">Selesai!</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Done!</span>
                    </p>
                    <p class="mt-1 text-xs text-slate-500 font-body leading-tight max-w-[140px]">
                        <span x-show="$store.locale === 'id'">Bisnis Anda Berjalan Otonom</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Your Business Runs Autonomously</span>
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
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 border border-cyan-400/40 flex items-center justify-center flex-shrink-0 shadow-md shadow-cyan-500/20">
                        <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                </div>
                <div class="pb-2">
                    <p class="font-black text-cyan-400 text-sm uppercase tracking-widest">
                        <span x-show="$store.locale === 'id'">Selesai!</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Done!</span>
                    </p>
                    <p class="text-xs text-slate-500 font-body mt-0.5">
                        <span x-show="$store.locale === 'id'">Sistem Operasi Aktif &amp; Bisnis Berjalan Otonom</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Operating System Active &amp; Business Runs Autonomously</span>
                    </p>
                </div>
            </div>
        </div>

        {{-- Bottom CTA --}}
        <div class="scroll-reveal mt-16 text-center">
            <p class="text-slate-400 font-body text-sm mb-6">
                <span x-show="$store.locale === 'id'">Rata-rata proses transformasi menyeluruh: <strong class="text-white">6–12 minggu</strong></span>
                <span x-show="$store.locale === 'en'" x-cloak>Average time for a complete transformation: <strong class="text-white">6–12 weeks</strong></span>
            </p>
            <a href="#contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-cyan-500/25 hover:-translate-y-0.5">
                <span x-show="$store.locale === 'id'">Mulai Transformasi AI Anda</span>
                <span x-show="$store.locale === 'en'" x-cloak>Start Your AI Transformation</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>
