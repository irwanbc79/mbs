@props(['type' => 'horizontal', 'slot' => ''])

@php
    $enabled = config('services.adsense.enabled', false);
    $client = config('services.adsense.client_id', 'ca-pub-5616961797801657');
    $isDebug = config('app.debug', false) || app()->environment('local');
@endphp

@if($enabled && $slot)
    @if($type === 'horizontal')
        {{-- Responsive leaderboard — pasang di atas/bawah konten artikel --}}
        <div class="my-6 overflow-hidden rounded-xl bg-slate-900/40 border border-slate-800/40 flex items-center justify-center min-h-[90px]">
            <ins class="adsbygoogle"
                 style="display:block;width:100%;min-height:90px"
                 data-ad-client="{{ $client }}"
                 data-ad-slot="{{ $slot }}"
                 data-ad-format="horizontal"
                 data-full-width-responsive="true"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
    @elseif($type === 'rectangle')
        {{-- 300×250 rectangle — cocok untuk sidebar --}}
        <div class="overflow-hidden rounded-2xl bg-slate-900/40 border border-slate-800/40 flex items-center justify-center min-h-[250px]">
            <ins class="adsbygoogle"
                 style="display:block;width:100%;min-height:250px"
                 data-ad-client="{{ $client }}"
                 data-ad-slot="{{ $slot }}"
                 data-ad-format="rectangle"
                 data-full-width-responsive="false"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
    @elseif($type === 'in-article')
        {{-- In-article native ad — menyatu dengan konten --}}
        <div class="my-8 overflow-hidden rounded-xl">
            <ins class="adsbygoogle"
                 style="display:block;text-align:center"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="{{ $client }}"
                 data-ad-slot="{{ $slot }}"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
    @endif
@elseif($isDebug)
    {{-- Placeholder visual untuk development --}}
    @if($type === 'horizontal')
        <div class="my-6 p-4 rounded-xl border border-dashed border-slate-700/60 bg-slate-900/20 text-slate-500 flex flex-col items-center justify-center min-h-[90px] text-xs font-mono">
            <div class="flex items-center gap-2 mb-1">
                <span class="w-2 h-2 rounded-full bg-amber-500/60 animate-pulse"></span>
                <span class="font-bold text-slate-400">AdSense: {{ strtoupper($type) }}</span>
            </div>
            <span>Status: {{ $enabled ? 'Slot Belum Dikonfigurasi' : 'Iklan Dinonaktifkan (Mode Lokal)' }}</span>
            @if(!$slot)
                <span class="text-[10px] text-slate-600 mt-0.5">Atur variabel ADSENSE_SLOT_TOP / ADSENSE_SLOT_BOTTOM di .env</span>
            @endif
        </div>
    @elseif($type === 'rectangle')
        <div class="p-6 rounded-2xl border border-dashed border-slate-700/60 bg-slate-900/20 text-slate-500 flex flex-col items-center justify-center min-h-[250px] text-xs font-mono text-center">
            <span class="w-2 h-2 rounded-full bg-amber-500/60 animate-pulse mb-2"></span>
            <span class="font-bold text-slate-400 mb-1">AdSense: {{ strtoupper($type) }} (Sidebar)</span>
            <span>Status: {{ $enabled ? 'Slot Belum Dikonfigurasi' : 'Iklan Dinonaktifkan' }}</span>
            @if(!$slot)
                <span class="text-[10px] text-slate-600 mt-1 max-w-[200px]">Atur variabel ADSENSE_SLOT_SIDEBAR di .env</span>
            @endif
        </div>
    @elseif($type === 'in-article')
        <div class="my-8 p-6 rounded-xl border border-dashed border-slate-700/60 bg-slate-900/20 text-slate-500 flex flex-col items-center justify-center min-h-[100px] text-xs font-mono">
            <div class="flex items-center gap-2 mb-1">
                <span class="w-2 h-2 rounded-full bg-amber-500/60 animate-pulse"></span>
                <span class="font-bold text-slate-400">AdSense: IN-ARTICLE (Native)</span>
            </div>
            <span>Status: {{ $enabled ? 'Slot Belum Dikonfigurasi' : 'Iklan Dinonaktifkan' }}</span>
        </div>
    @endif
@endif
