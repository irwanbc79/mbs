<x-layouts.app
    :pageTitle="$post->title . ' — Mora Bangun Solutions Blog'"
    :metaDescription="$post->excerpt"
    :ogTitle="$post->title"
    :ogDescription="$post->excerpt"
    ogType="article">

@push('head_scripts')
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5616961797801657"
        crossorigin="anonymous"></script>
@endpush

@push('json_ld')
<script type="application/ld+json">{!! json_encode(['@context'=>'https://schema.org','@type'=>'Article','headline'=>$post->title,'description'=>$post->excerpt,'author'=>['@type'=>'Person','name'=>$post->author_name],'publisher'=>['@type'=>'Organization','name'=>'Mora Bangun Solutions','logo'=>['@type'=>'ImageObject','url'=>asset('images/brand/logo.png')]],'datePublished'=>$post->published_at->toIso8601String(),'dateModified'=>$post->updated_at->toIso8601String(),'url'=>url()->current(),'mainEntityOfPage'=>['@type'=>'WebPage','@id'=>url()->current()],'breadcrumb'=>['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Beranda','item'=>config('app.url')],['@type'=>'ListItem','position'=>2,'name'=>'Blog','item'=>route('blog.index')],['@type'=>'ListItem','position'=>3,'name'=>$post->title,'item'=>url()->current()]]]], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}</script>
@endpush


<div class="min-h-screen bg-surface">

    {{-- Top accent line --}}
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/40 to-transparent"></div>

    {{-- ── ARTICLE HERO ── --}}
    <section class="relative pt-32 pb-12 overflow-hidden">
        <div class="absolute inset-0 grid-bg opacity-20 pointer-events-none"></div>
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[600px] h-[350px] rounded-full bg-cyan-500/4 blur-3xl pointer-events-none"></div>

        <div class="container-max relative z-10 max-w-4xl">
            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-2 text-xs text-slate-500 mb-8">
                <a href="{{ route('home') }}" class="hover:text-cyan-400 transition-colors">Beranda</a>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <a href="{{ route('blog.index') }}" class="hover:text-cyan-400 transition-colors">Blog</a>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-slate-400 truncate max-w-xs">{{ $post->category }}</span>
            </nav>

            {{-- Meta badges --}}
            <div class="flex flex-wrap items-center gap-2 mb-5">
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
                <span class="text-xs px-3 py-1 rounded-full border font-medium {{ $badgeClass }}">{{ $post->category }}</span>
                @if($post->is_featured)
                <span class="text-xs px-3 py-1 rounded-full bg-cyan-500 text-slate-950 font-bold">Featured</span>
                @endif
            </div>

            {{-- Title --}}
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight leading-tight mb-6">
                {{ $post->title }}
            </h1>

            {{-- Author + Meta --}}
            <div class="flex items-center gap-6 pb-8 border-b border-slate-800/60">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        {{ mb_substr($post->author_name, 0, 1) }}
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-white">{{ $post->author_name }}</p>
                        <p class="text-xs text-slate-500">{{ $post->author_role }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 text-xs text-slate-500 ml-auto">
                    <span class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        {{ $post->published_at->translatedFormat('d F Y') }}
                    </span>
                    <span class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $post->reading_time }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- ── AD: BANNER ATAS ARTIKEL ── --}}
    <div class="container-max max-w-4xl px-6 lg:px-0 -mt-4 mb-2">
        @include('partials.adsense', ['type' => 'horizontal', 'slot' => ''])
    </div>

    {{-- ── ARTICLE BODY ── --}}
    <section class="pb-20">
        <div class="container-max max-w-4xl">
            <div class="grid lg:grid-cols-[1fr_260px] gap-12">

                {{-- Article Content --}}
                <article class="prose prose-invert prose-slate max-w-none
                    prose-headings:font-bold prose-headings:tracking-tight
                    prose-h2:text-2xl prose-h2:text-white prose-h2:mt-10 prose-h2:mb-4
                    prose-h3:text-lg prose-h3:text-slate-200 prose-h3:mt-6 prose-h3:mb-3
                    prose-p:text-slate-400 prose-p:leading-relaxed prose-p:font-body
                    prose-strong:text-white
                    prose-ul:text-slate-400 prose-ul:font-body
                    prose-ol:text-slate-400 prose-ol:font-body
                    prose-li:my-1
                    prose-a:text-cyan-400 prose-a:no-underline hover:prose-a:text-cyan-300">
                    {!! $post->content !!}
                </article>

                {{-- Sticky Sidebar --}}
                <aside class="space-y-5">
                    <div class="sticky top-24 space-y-5">

                        {{-- Tags --}}
                        @if($post->tags)
                        <div class="rounded-2xl border border-slate-800/60 bg-slate-900/30 p-5">
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">Tags</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($post->tags as $tag)
                                <span class="text-xs px-2.5 py-1 rounded-full bg-slate-800/60 border border-slate-700/50 text-slate-400">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        {{-- Share --}}
                        <div class="rounded-2xl border border-slate-800/60 bg-slate-900/30 p-5">
                            <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-3">Bagikan</h4>
                            <div class="flex gap-2">
                                <a href="https://wa.me/?text={{ urlencode($post->title . ' — ' . url()->current()) }}"
                                   target="_blank" rel="noopener"
                                   class="flex-1 flex items-center justify-center gap-1.5 py-2 rounded-xl bg-[#25D366]/10 border border-[#25D366]/20 text-[#25D366] text-xs hover:bg-[#25D366]/20 transition-colors">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                    WA
                                </a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                                   target="_blank" rel="noopener"
                                   class="flex-1 flex items-center justify-center gap-1.5 py-2 rounded-xl bg-blue-600/10 border border-blue-600/20 text-blue-400 text-xs hover:bg-blue-600/20 transition-colors">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                    LinkedIn
                                </a>
                            </div>
                        </div>

                        {{-- AdSense Rectangle --}}
                        @include('partials.adsense', ['type' => 'rectangle', 'slot' => ''])

                        {{-- CTA --}}
                        <div class="rounded-2xl border border-cyan-500/20 bg-cyan-500/5 p-5 text-center">
                            <p class="text-sm font-bold text-white mb-1.5">Siap Mulai?</p>
                            <p class="text-xs text-slate-400 font-body mb-4">Konsultasi gratis dengan tim kami</p>
                            <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%2C%20saya%20baru%20membaca%20artikel%20{{ urlencode($post->title) }}%20dan%20ingin%20konsultasi"
                               target="_blank" rel="noopener"
                               class="inline-flex items-center gap-2 w-full justify-center px-4 py-2 bg-cyan-500 hover:bg-cyan-400 text-slate-950 text-xs font-bold rounded-xl transition-colors">
                                Hubungi Kami
                            </a>
                        </div>

                    </div>
                </aside>
            </div>

            {{-- ── AD: BANNER BAWAH ARTIKEL ── --}}
            @include('partials.adsense', ['type' => 'horizontal', 'slot' => ''])

            {{-- ── RELATED POSTS ── --}}
            @if($related->count())
            <div class="mt-16 pt-10 border-t border-slate-800/60">
                <h3 class="text-xl font-bold mb-6">Artikel Terkait</h3>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach($related as $rel)
                    <a href="{{ route('blog.show', $rel->slug) }}"
                       class="group flex flex-col rounded-2xl border border-slate-800/60 bg-slate-900/30 overflow-hidden hover:border-cyan-500/30 transition-all duration-300 hover:-translate-y-1">
                        <div class="h-24 bg-gradient-to-br from-slate-900 to-slate-950 relative overflow-hidden">
                            <div class="absolute inset-0 grid-bg opacity-20"></div>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            <p class="text-xs text-cyan-400 mb-1.5">{{ $rel->category }}</p>
                            <h4 class="text-sm font-bold text-white group-hover:text-cyan-400 transition-colors leading-snug line-clamp-2 flex-1">{{ $rel->title }}</h4>
                            <p class="text-xs text-slate-600 mt-3">{{ $rel->reading_time }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- Back to blog --}}
            <div class="mt-10 text-center">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-sm text-slate-400 hover:text-cyan-400 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    Kembali ke Blog
                </a>
            </div>

        </div>
    </section>
</div>
</x-layouts.app>
