<section id="tech" class="section-padding relative bg-surface overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/25 to-transparent"></div>

    <div class="container-max">
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Stack Teknologi</span>
                <span x-show="$store.locale === 'en'" x-cloak>Tech Stack</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-2 mb-4">
                <span x-show="$store.locale === 'id'">Teknologi yang <span class="gradient-text">Kami Kuasai</span></span>
                <span x-show="$store.locale === 'en'" x-cloak>Technologies We <span class="gradient-text">Master</span></span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Menggunakan framework dan tools modern untuk membangun solusi yang handal, scalable, dan aman.</span>
                <span x-show="$store.locale === 'en'" x-cloak>Using modern frameworks and tools to build reliable, scalable, and secure solutions.</span>
            </p>
        </div>

        <!-- ===== MARQUEE ROW 1 ===== -->
        <div class="scroll-reveal overflow-hidden relative mb-5">
            <!-- Fade edges -->
            <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-surface to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-surface to-transparent z-10 pointer-events-none"></div>

            <div class="marquee-inner gap-4">
                @php
                $techRow1 = [
                    ['name' => 'Laravel',     'icon' => 'https://cdn.simpleicons.org/laravel/FF2D20',     'color' => '#FF2D20'],
                    ['name' => 'PHP',         'icon' => 'https://cdn.simpleicons.org/php/777BB4',         'color' => '#777BB4'],
                    ['name' => 'Livewire',    'icon' => 'https://cdn.simpleicons.org/livewire/FB70A9',    'color' => '#FB70A9'],
                    ['name' => 'Filament',    'icon' => 'https://cdn.simpleicons.org/filament/FBBF24',    'color' => '#FBBF24'],
                    ['name' => 'Tailwind CSS','icon' => 'https://cdn.simpleicons.org/tailwindcss/06B6D4', 'color' => '#06B6D4'],
                    ['name' => 'JavaScript',  'icon' => 'https://cdn.simpleicons.org/javascript/F7DF1E',  'color' => '#F7DF1E'],
                    ['name' => 'Alpine.js',   'icon' => 'https://cdn.simpleicons.org/alpinedotjs/8BC0D0', 'color' => '#8BC0D0'],
                    ['name' => 'Vite',        'icon' => 'https://cdn.simpleicons.org/vite/646CFF',        'color' => '#646CFF'],
                    ['name' => 'Python',      'icon' => 'https://cdn.simpleicons.org/python/3776AB',      'color' => '#3776AB'],
                    ['name' => 'MySQL',       'icon' => 'https://cdn.simpleicons.org/mysql/4479A1',       'color' => '#4479A1'],
                ];
                @endphp

                @foreach(array_merge($techRow1, $techRow1) as $tech)
                <div class="tech-logo-card flex-shrink-0">
                    <img src="{{ $tech['icon'] }}" alt="{{ $tech['name'] }}" loading="lazy">
                    <span class="text-xs font-medium text-slate-500 group-hover:text-slate-300 transition-colors whitespace-nowrap">{{ $tech['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <!-- ===== MARQUEE ROW 2 (reverse direction) ===== -->
        <div class="scroll-reveal overflow-hidden relative">
            <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-surface to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-surface to-transparent z-10 pointer-events-none"></div>

            <div class="marquee-inner gap-4" style="animation-direction: reverse; animation-duration: 40s;">
                @php
                $techRow2 = [
                    ['name' => 'Docker',    'icon' => 'https://cdn.simpleicons.org/docker/2496ED',   'color' => '#2496ED'],
                    ['name' => 'Redis',     'icon' => 'https://cdn.simpleicons.org/redis/DC382D',    'color' => '#DC382D'],
                    ['name' => 'Nginx',     'icon' => 'https://cdn.simpleicons.org/nginx/009639',    'color' => '#009639'],
                    ['name' => 'Git',       'icon' => 'https://cdn.simpleicons.org/git/F05032',      'color' => '#F05032'],
                    ['name' => 'GitHub',    'icon' => 'https://cdn.simpleicons.org/github/ffffff',   'color' => '#ffffff'],
                    ['name' => 'PostgreSQL','icon' => 'https://cdn.simpleicons.org/postgresql/4169E1','color' => '#4169E1'],
                    ['name' => 'Vue.js',    'icon' => 'https://cdn.simpleicons.org/vuedotjs/42B883',  'color' => '#42B883'],
                    ['name' => 'Node.js',   'icon' => 'https://cdn.simpleicons.org/nodedotjs/339933', 'color' => '#339933'],
                    ['name' => 'SASS',      'icon' => 'https://cdn.simpleicons.org/sass/CC6699',     'color' => '#CC6699'],
                    ['name' => 'Ubuntu',    'icon' => 'https://cdn.simpleicons.org/ubuntu/E95420',   'color' => '#E95420'],
                ];
                @endphp

                @foreach(array_merge($techRow2, $techRow2) as $tech)
                <div class="tech-logo-card flex-shrink-0">
                    <img src="{{ $tech['icon'] }}" alt="{{ $tech['name'] }}" loading="lazy">
                    <span class="text-xs font-medium text-slate-500 whitespace-nowrap">{{ $tech['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tech Badges (Quality Indicators) -->
        <div class="scroll-reveal mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="flex items-center gap-4 p-4 rounded-xl border border-slate-800/60 bg-slate-900/30">
                <div class="w-10 h-10 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div>
                    <p class="font-semibold text-sm text-white">
                        <span x-show="$store.locale === 'id'">Keamanan Tinggi</span>
                        <span x-show="$store.locale === 'en'" x-cloak>High Security</span>
                    </p>
                    <p class="text-xs text-slate-500">
                        <span x-show="$store.locale === 'id'">Enkripsi end-to-end</span>
                        <span x-show="$store.locale === 'en'" x-cloak>End-to-end encryption</span>
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl border border-slate-800/60 bg-slate-900/30">
                <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <div>
                    <p class="font-semibold text-sm text-white">
                        <span x-show="$store.locale === 'id'">Performa Tinggi</span>
                        <span x-show="$store.locale === 'en'" x-cloak>High Performance</span>
                    </p>
                    <p class="text-xs text-slate-500">
                        <span x-show="$store.locale === 'id'">Dioptimalkan untuk skala besar</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Optimized for large scale</span>
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl border border-slate-800/60 bg-slate-900/30">
                <div class="w-10 h-10 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </div>
                <div>
                    <p class="font-semibold text-sm text-white">
                        <span x-show="$store.locale === 'id'">Dapat Diskalakan</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Scalable</span>
                    </p>
                    <p class="text-xs text-slate-500">
                        <span x-show="$store.locale === 'id'">Arsitektur microservices</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Microservices architecture</span>
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-xl border border-slate-800/60 bg-slate-900/30">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                </div>
                <div>
                    <p class="font-semibold text-sm text-white">
                        <span x-show="$store.locale === 'id'">Mudah Dikonfigurasi</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Highly Configurable</span>
                    </p>
                    <p class="text-xs text-slate-500">
                        <span x-show="$store.locale === 'id'">Disesuaikan kebutuhan Anda</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Tailored to your needs</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
