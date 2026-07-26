<section class="section-padding relative bg-slate-950 border-t border-white/5">
    <div class="container-max relative z-10">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-3">
                <span x-show="$store.locale === 'id'">Solusi Siap Pakai per Industri</span>
                <span x-show="$store.locale === 'en'" x-cloak>Ready-Made Solutions per Industry</span>
            </h2>
            <p class="text-slate-500 text-sm max-w-xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Fondasi teknologi teruji, dibentuk untuk 13 industri — dari CEISA, klinik, sekolah, sampai distributor.</span>
                <span x-show="$store.locale === 'en'" x-cloak>A proven technology foundation, shaped for 13 industries — from CEISA to clinics, schools, and distributors.</span>
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-2.5 mb-9">
            @foreach([
                ['slug' => 'pabrik-kelapa-sawit', 'emoji' => '🌴', 'id' => 'Pabrik Sawit (PKS)', 'en' => 'Palm Oil Mill'],
                ['slug' => 'pabrik-kopi', 'emoji' => '☕', 'id' => 'Pabrik Kopi', 'en' => 'Coffee Mill'],
                ['slug' => 'ceisa', 'emoji' => '🛃', 'id' => 'CEISA H2H', 'en' => 'CEISA H2H'],
                ['slug' => 'portal-forwarder', 'emoji' => '🚢', 'id' => 'Forwarder', 'en' => 'Forwarder'],
                ['slug' => 'klinik', 'emoji' => '🏥', 'id' => 'Klinik', 'en' => 'Clinics'],
                ['slug' => 'sekolah', 'emoji' => '🕌', 'id' => 'Sekolah', 'en' => 'Schools'],
                ['slug' => 'umroh', 'emoji' => '🕋', 'id' => 'Umroh & Haji', 'en' => 'Umroh & Hajj'],
                ['slug' => 'distributor', 'emoji' => '🧱', 'id' => 'Distributor', 'en' => 'Distributors'],
                ['slug' => 'kontraktor', 'emoji' => '🏗️', 'id' => 'Kontraktor', 'en' => 'Contractors'],
                ['slug' => 'properti', 'emoji' => '🏠', 'id' => 'Developer', 'en' => 'Developers'],
                ['slug' => 'koperasi', 'emoji' => '🤝', 'id' => 'Koperasi', 'en' => 'Cooperatives'],
                ['slug' => 'trucking', 'emoji' => '🚚', 'id' => 'Trucking', 'en' => 'Trucking'],
                ['slug' => 'percetakan', 'emoji' => '🖨️', 'id' => 'Percetakan', 'en' => 'Printing'],
                ['slug' => 'reseller', 'emoji' => '🛍️', 'id' => 'Reseller', 'en' => 'Resellers'],
                ['slug' => 'bengkel', 'emoji' => '🔧', 'id' => 'Bengkel', 'en' => 'Workshops'],
                ['slug' => 'kos', 'emoji' => '🏘️', 'id' => 'Kos & Sewa', 'en' => 'Rentals'],
                ['slug' => 'jastip', 'emoji' => '🧳', 'id' => 'Jastip', 'en' => 'Jastip'],
            ] as $s)
            <a href="{{ route('solusi.' . $s['slug']) }}"
               class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-full border border-white/10 hover:border-cyan-500/40 bg-white/[.02] hover:bg-white/5 text-xs text-slate-400 hover:text-white transition-all">
                <span>{{ $s['emoji'] }}</span>
                <span x-show="$store.locale === 'id'">{{ $s['id'] }}</span>
                <span x-show="$store.locale === 'en'" x-cloak>{{ $s['en'] }}</span>
            </a>
            @endforeach
        </div>

        <div class="text-center">
            <a href="{{ route('solusi.index') }}"
               class="inline-flex items-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 text-sm font-bold rounded-lg transition-all duration-200 hover:shadow-lg hover:shadow-cyan-500/30 hover:-translate-y-0.5">
                <span x-show="$store.locale === 'id'">Lihat Semua Solusi</span>
                <span x-show="$store.locale === 'en'" x-cloak>See All Solutions</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</section>
