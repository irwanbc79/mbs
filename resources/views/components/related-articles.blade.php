@props(['vertical'])

@php
    $keywordMap = [
        'ceisa'             => ['ceisa', 'pib', 'peb', 'bea cukai', 'kepabeanan', 'ppjk', 'hs code'],
        'sekolah'           => ['sekolah', 'pesantren', 'santri', 'yayasan', 'spp', 'madrasah'],
        'distributor'       => ['distributor', 'grosir', 'toko bangunan'],
        'klinik'            => ['klinik', 'satusehat', 'rekam medis', 'puskesmas', 'praktek dokter', 'praktik dokter', 'apotek'],
        'umroh'             => ['umroh', 'haji', 'jamaah', 'travel umroh'],
        'kontraktor'        => ['kontraktor', 'proyek konstruksi', 'rab', 'konstruksi bangunan'],
        'bengkel'           => ['bengkel', 'servis kendaraan', 'sparepart motor'],
        'properti'          => ['developer perumahan', 'siteplan', 'kpr', 'properti', 'perumahan'],
        'koperasi'          => ['koperasi', 'simpan pinjam'],
        'trucking'          => ['trucking', 'ekspedisi', 'armada truk', 'logistik darat'],
        'percetakan'        => ['percetakan', 'konveksi', 'sablon'],
        'reseller'          => ['reseller', 'dropship', 'online shop'],
        'kos'               => ['kos', 'kontrakan', 'rumah sewa'],
        'jastip'            => ['jastip', 'jasa titip', 'jastiper'],
        'portal-forwarder'  => ['forwarder', 'freight forwarding', 'shipment', 'ekspor impor'],
    ];

    $terms = $keywordMap[$vertical] ?? [$vertical];

    // Word-boundary match di PHP (bukan SQL LIKE polos) — LIKE '%kos%' juga kena
    // "ekosistem", '%rab%' bisa kena kata lain, dst. Tabel posts kecil (~50-100
    // baris) jadi filter di memori aman dan portable lintas MySQL/SQLite.
    $relatedArticles = \App\Models\Post::published()
        ->orderByDesc('published_at')
        ->get(['title', 'slug', 'excerpt'])
        ->filter(function ($post) use ($terms) {
            $haystack = strtolower($post->title . ' ' . $post->excerpt);
            foreach ($terms as $term) {
                $pattern = '/(?<![a-z0-9])' . preg_quote(strtolower($term), '/') . '(?![a-z0-9])/';
                if (preg_match($pattern, $haystack)) {
                    return true;
                }
            }
            return false;
        })
        ->take(3);
@endphp

@if($relatedArticles->isNotEmpty())
<section id="artikel-terkait">
  <div class="container center">
    <span class="eyebrow">Baca Juga</span>
    <h2>Artikel Terkait dari Blog Kami</h2>
    <div class="feat-grid" style="text-align:left">
      @foreach($relatedArticles as $post)
      <a href="{{ url('/blog/' . $post->slug) }}" class="feat" style="text-decoration:none;color:inherit;display:block">
        <div class="ico">📄</div>
        <h3>{{ $post->title }}</h3>
        <p>{{ \Illuminate\Support\Str::limit($post->excerpt ?? '', 90) }}</p>
      </a>
      @endforeach
    </div>
  </div>
</section>
@endif
