<x-layouts.app
    pageTitle="Blog — Mora Bangun Solutions"
    metaDescription="Insight dan artikel terbaru tentang transformasi digital, ERP, CRM, AI, dan strategi teknologi untuk bisnis Indonesia."
    ogTitle="Blog — Mora Bangun Solutions"
    ogDescription="Insight dan artikel terbaru tentang transformasi digital, ERP, CRM, AI, dan strategi teknologi untuk bisnis Indonesia.">

@if(config('services.adsense.enabled') && config('services.adsense.client_id'))
@push('head_scripts')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client={{ config('services.adsense.client_id') }}"
        crossorigin="anonymous"></script>
@endpush
@endif

<div class="min-h-screen bg-surface">

    {{-- ── HERO HEADER ── --}}
    <section class="relative pt-32 pb-16 overflow-hidden">
        <div class="absolute inset-0 grid-bg opacity-30 pointer-events-none"></div>
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/40 to-transparent"></div>
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[700px] h-[400px] rounded-full bg-cyan-500/4 blur-3xl pointer-events-none"></div>

        <div class="container-max relative z-10 text-center">
            <span class="section-label inline-flex items-center gap-2">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Insight & Artikel
            </span>
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight mt-3 mb-4">
                Blog <span class="gradient-text">Mora Bangun</span>
            </h1>
            <p class="text-slate-400 max-w-xl mx-auto font-body">
                Insight praktis tentang transformasi digital, strategi teknologi, dan inovasi bisnis untuk perusahaan Indonesia.
            </p>

            {{-- Search --}}
            <form method="GET" action="{{ route('blog.index') }}" class="mt-8 flex max-w-md mx-auto gap-2">
                @if($category)
                    <input type="hidden" name="category" value="{{ $category }}">
                @endif
                <div class="flex-1 relative">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input type="text" name="q" value="{{ $search }}"
                           placeholder="Cari artikel..."
                           class="w-full pl-10 pr-4 py-2.5 bg-slate-900/80 border border-slate-700/60 hover:border-cyan-500/40 focus:border-cyan-500/60 focus:outline-none rounded-xl text-sm text-white placeholder-slate-500 transition-colors">
                </div>
                <button type="submit" class="px-5 py-2.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-semibold text-sm rounded-xl transition-colors">
                    Cari
                </button>
            </form>
        </div>
    </section>

    <div class="container-max pb-24">

        {{-- ── CATEGORY FILTER ── --}}
        <div class="flex flex-wrap gap-2 mb-10">
            <a href="{{ route('blog.index', $search ? ['q' => $search] : []) }}"
               class="px-4 py-1.5 rounded-full text-sm font-medium transition-all {{ !$category ? 'bg-cyan-500 text-slate-950' : 'bg-slate-800/60 text-slate-400 hover:text-white border border-slate-700/50 hover:border-cyan-500/30' }}">
                Semua
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('blog.index', array_filter(['category' => $cat->category, 'q' => $search])) }}"
                   class="px-4 py-1.5 rounded-full text-sm font-medium transition-all {{ $category === $cat->category ? 'bg-cyan-500 text-slate-950' : 'bg-slate-800/60 text-slate-400 hover:text-white border border-slate-700/50 hover:border-cyan-500/30' }}">
                    {{ $cat->category }}
                </a>
            @endforeach
        </div>

        <div class="grid lg:grid-cols-3 gap-8">

            {{-- ── MAIN CONTENT ── --}}
            <div class="lg:col-span-2 space-y-8">

                {{-- Featured Post --}}
                @if($featured && !$search && !$category)
                <a href="{{ route('blog.show', $featured->slug) }}"
                   class="group block relative rounded-2xl border border-slate-800/60 bg-slate-900/40 overflow-hidden hover:border-cyan-500/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-cyan-500/5">
                    <div class="absolute top-4 left-4 z-10 flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-cyan-500 text-slate-950">Featured</span>
                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-slate-800/80 border border-slate-700/50 text-slate-300">
                            {{ $featured->category }}
                        </span>
                    </div>
                    <div class="relative h-48 bg-gradient-to-br from-cyan-950 via-slate-900 to-slate-950 overflow-hidden">
                        <div class="absolute inset-0 grid-bg opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-20 h-20 rounded-2xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center">
                                <svg class="w-10 h-10 text-cyan-500/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors mb-2 leading-snug">
                            {{ $featured->title }}
                        </h2>
                        <p class="text-slate-400 text-sm leading-relaxed font-body mb-4 line-clamp-2">{{ $featured->excerpt }}</p>
                        <div class="flex items-center gap-4 text-xs text-slate-500">
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                {{ $featured->author_name }}
                            </span>
                            <span class="flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                {{ $featured->reading_time }}
                            </span>
                            <span>{{ $featured->published_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </a>
                @endif

                {{-- Post Grid --}}
                @if($posts->count())
                    <div class="grid sm:grid-cols-2 gap-6">
                        @foreach($posts as $post)
                        @if($post->is_featured && !$search && !$category)
                            @continue
                        @endif
                        <a href="{{ route('blog.show', $post->slug) }}"
                           class="group flex flex-col rounded-2xl border border-slate-800/60 bg-slate-900/30 overflow-hidden hover:border-cyan-500/30 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-cyan-500/5">
                            <div class="h-32 bg-gradient-to-br from-slate-900 to-slate-950 relative overflow-hidden">
                                <div class="absolute inset-0 grid-bg opacity-20"></div>
                                @php
                                    $colorMap = [
                                        'cyan'    => 'text-cyan-500/50',
                                        'blue'    => 'text-blue-500/50',
                                        'violet'  => 'text-violet-500/50',
                                        'emerald' => 'text-emerald-500/50',
                                        'amber'   => 'text-amber-500/50',
                                    ];
                                    $iconColor = $colorMap[$post->category_color] ?? 'text-cyan-500/50';
                                @endphp
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg class="w-8 h-8 {{ $iconColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div class="absolute top-3 left-3">
                                    @php
                                        $badgeMap = [
                                            'cyan'    => 'bg-cyan-500/15 border-cyan-500/30 text-cyan-400',
                                            'blue'    => 'bg-blue-500/15 border-blue-500/30 text-blue-400',
                                            'violet'  => 'bg-violet-500/15 border-violet-500/30 text-violet-400',
                                            'emerald' => 'bg-emerald-500/15 border-emerald-500/30 text-emerald-400',
                                            'amber'   => 'bg-amber-500/15 border-amber-500/30 text-amber-400',
                                        ];
                                        $badgeClass = $badgeMap[$post->category_color] ?? $badgeMap['cyan'];
                                    @endphp
                                    <span class="text-xs px-2.5 py-0.5 rounded-full border font-medium {{ $badgeClass }}">{{ $post->category }}</span>
                                </div>
                            </div>
                            <div class="flex flex-col flex-1 p-5">
                                <h3 class="font-bold text-white group-hover:text-cyan-400 transition-colors text-sm leading-snug mb-2 line-clamp-2">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-slate-500 text-xs leading-relaxed font-body flex-1 mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                                <div class="flex items-center justify-between text-xs text-slate-600">
                                    <span class="flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                        {{ $post->reading_time }}
                                    </span>
                                    <span>{{ $post->published_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    {{-- Pagination --}}
                    @if($posts->hasPages())
                    <div class="mt-8 flex justify-center">
                        {{ $posts->links('blog.pagination') }}
                    </div>
                    @endif
                @else
                    <div class="flex flex-col items-center justify-center py-20 text-center">
                        <div class="w-16 h-16 rounded-2xl bg-slate-800/60 border border-slate-700/50 flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <p class="text-slate-400 font-medium">Tidak ada artikel ditemukan.</p>
                        <a href="{{ route('blog.index') }}" class="mt-4 text-sm text-cyan-400 hover:text-cyan-300 transition-colors">Lihat semua artikel</a>
                    </div>
                @endif
            </div>

            {{-- ── SIDEBAR ── --}}
            <aside class="space-y-6">

                {{-- Popular Posts --}}
                <div class="rounded-2xl border border-slate-800/60 bg-slate-900/30 p-5">
                    <h3 class="font-bold text-white text-sm mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 rounded-full bg-cyan-500 inline-block"></span>
                        Artikel Populer
                    </h3>
                    <div class="space-y-4">
                        @foreach($popular as $i => $p)
                        <a href="{{ route('blog.show', $p->slug) }}" class="group flex gap-3">
                            <span class="text-2xl font-black text-slate-800 group-hover:text-cyan-500/50 transition-colors leading-none mt-0.5 w-6 flex-shrink-0">{{ $i + 1 }}</span>
                            <div>
                                <p class="text-sm text-slate-300 group-hover:text-cyan-400 transition-colors leading-snug font-medium line-clamp-2">{{ $p->title }}</p>
                                <p class="text-xs text-slate-600 mt-1">{{ $p->reading_time }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Categories Widget --}}
                <div class="rounded-2xl border border-slate-800/60 bg-slate-900/30 p-5">
                    <h3 class="font-bold text-white text-sm mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 rounded-full bg-violet-500 inline-block"></span>
                        Kategori
                    </h3>
                    <div class="space-y-2">
                        @foreach($categories as $cat)
                        <a href="{{ route('blog.index', ['category' => $cat->category]) }}"
                           class="flex items-center justify-between group py-1.5 border-b border-slate-800/40 last:border-0">
                            <span class="text-sm text-slate-400 group-hover:text-cyan-400 transition-colors">{{ $cat->category }}</span>
                            <svg class="w-3.5 h-3.5 text-slate-700 group-hover:text-cyan-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- CTA Card --}}
                <div class="rounded-2xl border border-cyan-500/20 bg-cyan-500/5 p-5 text-center">
                    <div class="w-10 h-10 rounded-xl bg-cyan-500/15 border border-cyan-500/20 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h4 class="font-bold text-white text-sm mb-1.5">Konsultasi Gratis</h4>
                    <p class="text-xs text-slate-400 font-body leading-relaxed mb-4">Punya pertanyaan tentang transformasi digital untuk bisnis Anda?</p>
                    <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%2C%20saya%20ingin%20konsultasi%20transformasi%20digital"
                       target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 px-4 py-2 bg-cyan-500 hover:bg-cyan-400 text-slate-950 text-xs font-bold rounded-xl transition-colors w-full justify-center">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat WhatsApp
                    </a>
                </div>

            </aside>
        </div>
    </div>
</div>
</x-layouts.app>
