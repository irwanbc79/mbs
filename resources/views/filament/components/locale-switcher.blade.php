<div class="flex items-center me-3">
    <a href="{{ route('admin.locale.switch', ['lang' => app()->getLocale() === 'id' ? 'en' : 'id']) }}"
       title="{{ app()->getLocale() === 'id' ? 'Switch to English' : 'Ganti ke Bahasa Indonesia' }}"
       class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-slate-700 hover:border-cyan-500 bg-slate-900/80 hover:bg-slate-800 text-xs font-bold text-slate-300 hover:text-cyan-400 transition-all shadow-sm">
        @if(app()->getLocale() === 'id')
            <svg class="w-4 h-3 rounded-sm flex-shrink-0" viewBox="0 0 20 14" fill="none"><rect width="20" height="7" fill="#CE1126"/><rect y="7" width="20" height="7" fill="#FFFFFF"/></svg>
            <span>ID (Bahasa)</span>
        @else
            <svg class="w-4 h-3 rounded-sm flex-shrink-0" viewBox="0 0 20 14"><rect width="20" height="14" fill="#012169"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#fff" stroke-width="2.8"/><path d="M10,0 V14 M0,7 H20" stroke="#fff" stroke-width="4.5"/><path d="M10,0 V14 M0,7 H20" stroke="#C8102E" stroke-width="2.8"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#C8102E" stroke-width="1.5"/></svg>
            <span>EN (English)</span>
        @endif
        <svg class="w-3 h-3 opacity-50 ml-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
    </a>
</div>
