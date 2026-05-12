<section id="process" class="section-padding relative bg-surface overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/30 to-transparent"></div>
    <div class="absolute inset-0 grid-bg opacity-30 pointer-events-none"></div>
    <div class="absolute -bottom-40 left-1/2 -translate-x-1/2 w-[600px] h-[300px] rounded-full bg-cyan-500/3 blur-3xl pointer-events-none"></div>

    <div class="container-max relative z-10">

        {{-- Header --}}
        <div class="text-center mb-16">
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Cara Kerja Kami</span>
                <span x-show="$store.locale === 'en'" x-cloak>How We Work</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-2 mb-4">
                <span x-show="$store.locale === 'id'">Dari <span class="gradient-text">Konsultasi</span> hingga <span class="gradient-text">Go-Live</span></span>
                <span x-show="$store.locale === 'en'" x-cloak>From <span class="gradient-text">Consultation</span> to <span class="gradient-text">Go-Live</span></span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Proses terstruktur yang telah terbukti menghasilkan sistem yang tepat waktu, sesuai anggaran, dan benar-benar digunakan oleh tim Anda.</span>
                <span x-show="$store.locale === 'en'" x-cloak>A structured process proven to deliver systems that are on time, on budget, and actually used by your team.</span>
            </p>
        </div>

        {{-- Desktop Flowchart: horizontal top row + vertical connector + horizontal bottom row --}}
        <div class="scroll-reveal hidden md:block">

            {{-- Row 1: Steps 1-5 --}}
            <div class="flex items-center justify-center gap-0">

                @php
                $steps = [
                    ['num'=>1, 'color'=>'cyan',   'icon'=>'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z', 'id'=>'Konsultasi',  'en'=>'Consultation',  'sub_id'=>'Diskusi kebutuhan & tujuan bisnis', 'sub_en'=>'Discuss needs & business goals'],
                    ['num'=>2, 'color'=>'blue',   'icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'id'=>'Analisis',    'en'=>'Analysis',      'sub_id'=>'Pemetaan proses & audit sistem', 'sub_en'=>'Process mapping & system audit'],
                    ['num'=>3, 'color'=>'violet', 'icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'id'=>'Proposal',    'en'=>'Proposal',      'sub_id'=>'Solusi, timeline & anggaran', 'sub_en'=>'Solution, timeline & budget'],
                    ['num'=>4, 'color'=>'amber',  'icon'=>'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'id'=>'Persetujuan', 'en'=>'Agreement',     'sub_id'=>'Kontrak & kickoff meeting', 'sub_en'=>'Contract & kickoff meeting'],
                    ['num'=>5, 'color'=>'cyan',   'icon'=>'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'id'=>'Development', 'en'=>'Development',   'sub_id'=>'Agile sprint & demo berkala', 'sub_en'=>'Agile sprints & regular demos'],
                ];
                $steps2 = [
                    ['num'=>6, 'color'=>'emerald','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4', 'id'=>'Testing',     'en'=>'Testing',       'sub_id'=>'QA, UAT & bug fixing', 'sub_en'=>'QA, UAT & bug fixing'],
                    ['num'=>7, 'color'=>'blue',   'icon'=>'M5 12h14M12 5l7 7-7 7', 'id'=>'Deployment',  'en'=>'Deployment',    'sub_id'=>'Go-live ke server produksi', 'sub_en'=>'Go-live to production server'],
                    ['num'=>8, 'color'=>'violet', 'icon'=>'M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'id'=>'Training',    'en'=>'Training',      'sub_id'=>'Pelatihan tim & dokumentasi', 'sub_en'=>'Team training & documentation'],
                    ['num'=>9, 'color'=>'amber',  'icon'=>'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.9l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'id'=>'Support',     'en'=>'Support',       'sub_id'=>'Garansi & pemeliharaan sistem', 'sub_en'=>'Warranty & system maintenance'],
                ];

                $colorMap = [
                    'cyan'    => ['ring'=>'ring-cyan-500/30',    'bg'=>'bg-cyan-500/10',    'border'=>'border-cyan-500/20',    'text'=>'text-cyan-400',    'num'=>'text-cyan-500',    'dot'=>'bg-cyan-400',    'glow'=>'shadow-cyan-500/20'],
                    'blue'    => ['ring'=>'ring-blue-500/30',    'bg'=>'bg-blue-500/10',    'border'=>'border-blue-500/20',    'text'=>'text-blue-400',    'num'=>'text-blue-500',    'dot'=>'bg-blue-400',    'glow'=>'shadow-blue-500/20'],
                    'violet'  => ['ring'=>'ring-violet-500/30',  'bg'=>'bg-violet-500/10',  'border'=>'border-violet-500/20',  'text'=>'text-violet-400',  'num'=>'text-violet-500',  'dot'=>'bg-violet-400',  'glow'=>'shadow-violet-500/20'],
                    'amber'   => ['ring'=>'ring-amber-500/30',   'bg'=>'bg-amber-500/10',   'border'=>'border-amber-500/20',   'text'=>'text-amber-400',   'num'=>'text-amber-500',   'dot'=>'bg-amber-400',   'glow'=>'shadow-amber-500/20'],
                    'emerald' => ['ring'=>'ring-emerald-500/30', 'bg'=>'bg-emerald-500/10', 'border'=>'border-emerald-500/20', 'text'=>'text-emerald-400', 'num'=>'text-emerald-500', 'dot'=>'bg-emerald-400', 'glow'=>'shadow-emerald-500/20'],
                ];
                @endphp

                @foreach($steps as $s)
                @php $c = $colorMap[$s['color']]; @endphp

                {{-- Step node --}}
                <div class="flex flex-col items-center text-center w-[150px] flex-shrink-0 group">
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
                    <p class="mt-1 text-xs text-slate-500 font-body leading-tight max-w-[120px]">
                        <span x-show="$store.locale === 'id'">{{ $s['sub_id'] }}</span>
                        <span x-show="$store.locale === 'en'" x-cloak>{{ $s['sub_en'] }}</span>
                    </p>
                </div>

                {{-- Arrow (not after last in row) --}}
                @if(!$loop->last)
                <div class="flex items-center pb-10 flex-shrink-0">
                    <svg width="40" height="16" viewBox="0 0 40 16" class="text-slate-700 group-hover:text-cyan-600 transition-colors">
                        <line x1="0" y1="8" x2="32" y2="8" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 3"/>
                        <path d="M30 3 L38 8 L30 13" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif
                @endforeach
            </div>

            {{-- Connector: down arrow from step 5 to step 6, curving right-to-left --}}
            <div class="flex justify-end pr-[75px] my-1">
                <svg width="80" height="48" viewBox="0 0 80 48">
                    <path d="M40 0 L40 20 Q40 40 10 40 L0 40" fill="none" stroke="#334155" stroke-width="1.5" stroke-dasharray="4 3"/>
                    <path d="M4 34 L-2 40 L4 46" fill="none" stroke="#334155" stroke-width="1.5" stroke-linejoin="round" transform="translate(2,0)"/>
                </svg>
            </div>

            {{-- Row 2: Steps 6-9 + FINISH (RTL order displayed LTR with arrows pointing left) --}}
            <div class="flex items-center justify-end gap-0">

                {{-- SELESAI badge --}}
                <div class="flex flex-col items-center text-center w-[150px] flex-shrink-0 order-last">
                    <div class="relative w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 border border-cyan-400/40 ring-1 ring-cyan-400/20 flex items-center justify-center shadow-lg shadow-cyan-500/20 animate-pulse-slow">
                        <svg class="w-7 h-7 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <p class="mt-3 text-sm font-black text-cyan-400 uppercase tracking-widest">
                        <span x-show="$store.locale === 'id'">Selesai!</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Done!</span>
                    </p>
                    <p class="mt-1 text-xs text-slate-500 font-body leading-tight max-w-[120px]">
                        <span x-show="$store.locale === 'id'">Sistem live & tim siap</span>
                        <span x-show="$store.locale === 'en'" x-cloak>System live & team ready</span>
                    </p>
                </div>

                {{-- Steps 6-9 in reverse visual order with left-pointing arrows --}}
                @foreach(array_reverse($steps2) as $s)
                @php $c = $colorMap[$s['color']]; @endphp

                {{-- Arrow before each (except the first in reversed = step 9) --}}
                @if(!$loop->first)
                <div class="flex items-center pb-10 flex-shrink-0">
                    <svg width="40" height="16" viewBox="0 0 40 16" class="text-slate-700">
                        <line x1="40" y1="8" x2="8" y2="8" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 3"/>
                        <path d="M10 3 L2 8 L10 13" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                @endif

                <div class="flex flex-col items-center text-center w-[150px] flex-shrink-0 group">
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
                    <p class="mt-1 text-xs text-slate-500 font-body leading-tight max-w-[120px]">
                        <span x-show="$store.locale === 'id'">{{ $s['sub_id'] }}</span>
                        <span x-show="$store.locale === 'en'" x-cloak>{{ $s['sub_en'] }}</span>
                    </p>
                </div>

                @endforeach

            </div>
        </div>

        {{-- Mobile Flowchart: vertical list --}}
        <div class="scroll-reveal md:hidden space-y-0">
            @foreach(array_merge($steps, $steps2) as $s)
            @php $c = $colorMap[$s['color']]; @endphp
            <div class="flex gap-4">
                <div class="flex flex-col items-center">
                    <div class="relative w-11 h-11 rounded-xl {{ $c['bg'] }} border {{ $c['border'] }} flex items-center justify-center flex-shrink-0 shadow-md {{ $c['glow'] }}">
                        <svg class="w-5 h-5 {{ $c['text'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $s['icon'] }}"/>
                        </svg>
                        <span class="absolute -top-1.5 -right-1.5 w-4 h-4 rounded-full bg-slate-900 border border-slate-700 text-[9px] font-black {{ $c['num'] }} flex items-center justify-center">{{ $s['num'] }}</span>
                    </div>
                    @if(!$loop->last)
                    <div class="w-px flex-1 min-h-[40px] border-l border-dashed border-slate-700/60 my-1"></div>
                    @endif
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
                        <span x-show="$store.locale === 'id'">Sistem live & tim siap</span>
                        <span x-show="$store.locale === 'en'" x-cloak>System live & team ready</span>
                    </p>
                </div>
            </div>
        </div>

        {{-- Bottom CTA --}}
        <div class="scroll-reveal mt-16 text-center">
            <p class="text-slate-400 font-body text-sm mb-6">
                <span x-show="$store.locale === 'id'">Rata-rata dari konsultasi pertama hingga sistem live: <strong class="text-white">8–16 minggu</strong></span>
                <span x-show="$store.locale === 'en'" x-cloak>Average from first consultation to system go-live: <strong class="text-white">8–16 weeks</strong></span>
            </p>
            <a href="#contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-cyan-500/25 hover:-translate-y-0.5">
                <span x-show="$store.locale === 'id'">Mulai Konsultasi Sekarang</span>
                <span x-show="$store.locale === 'en'" x-cloak>Start Consultation Now</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>
