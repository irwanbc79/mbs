@if ($paginator->hasPages())
<nav class="flex items-center gap-1">
    {{-- Previous --}}
    @if ($paginator->onFirstPage())
        <span class="px-3 py-2 rounded-xl text-sm text-slate-700 cursor-not-allowed">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-2 rounded-xl text-sm text-slate-400 hover:text-white hover:bg-slate-800/60 border border-slate-800/60 hover:border-cyan-500/30 transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </a>
    @endif

    {{-- Pages --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="px-3 py-2 text-sm text-slate-600">{{ $element }}</span>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="px-3.5 py-2 rounded-xl text-sm font-semibold bg-cyan-500 text-slate-950">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="px-3.5 py-2 rounded-xl text-sm text-slate-400 hover:text-white hover:bg-slate-800/60 border border-slate-800/60 hover:border-cyan-500/30 transition-all">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-2 rounded-xl text-sm text-slate-400 hover:text-white hover:bg-slate-800/60 border border-slate-800/60 hover:border-cyan-500/30 transition-all">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
    @else
        <span class="px-3 py-2 rounded-xl text-sm text-slate-700 cursor-not-allowed">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </span>
    @endif
</nav>
@endif
