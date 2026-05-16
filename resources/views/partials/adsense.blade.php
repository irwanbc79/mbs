@props(['type' => 'horizontal', 'slot' => ''])

@php
    $client = 'ca-pub-5616961797801657';
@endphp

@if($type === 'horizontal')
{{-- Responsive leaderboard — pasang di atas/bawah konten artikel --}}
<div class="my-6 overflow-hidden rounded-xl bg-slate-900/40 border border-slate-800/40 flex items-center justify-center min-h-[90px]">
    <ins class="adsbygoogle"
         style="display:block;width:100%;min-height:90px"
         data-ad-client="{{ $client }}"
         data-ad-slot="{{ $slot ?: 'AUTO' }}"
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
         data-ad-slot="{{ $slot ?: 'AUTO' }}"
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
         data-ad-slot="{{ $slot ?: 'AUTO' }}"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
@endif
