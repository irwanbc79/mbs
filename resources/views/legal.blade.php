<x-layouts.app
    :page-title="$title . ' — Mora Bangun Solutions'"
    :meta-description="$description"
    :og-title="$title . ' — Mora Bangun Solutions'"
    :og-description="$description">
    <section class="pt-32 pb-20">
        <div class="container-max max-w-4xl px-6 lg:px-0">
            <p class="text-xs font-mono uppercase tracking-[0.2em] text-cyan-400 mb-3">Transparansi Situs</p>
            <h1 class="text-3xl md:text-5xl font-bold tracking-tight mb-4">{{ $title }}</h1>
            <p class="text-sm text-slate-500 mb-10">Terakhir diperbarui: 18 Agustus 2026</p>

            <article class="space-y-7 text-slate-300 leading-8 font-body">
                @if($page === 'privacy')
                    <p>Kami hanya mengumpulkan data yang Anda kirim secara sadar melalui formulir kontak atau dukungan, serta data teknis dasar yang diperlukan untuk keamanan, performa, dan analitik situs.</p>
                    <h2 class="text-xl font-bold text-white">Cookies dan periklanan</h2>
                    <p>Situs ini dapat menggunakan cookies dari layanan analitik dan Google AdSense. Google dan mitra periklanannya dapat menggunakan cookies untuk menayangkan, mengukur, dan mempersonalisasi iklan sesuai persetujuan serta ketentuan yang berlaku. Anda dapat mengatur atau menolak cookies melalui browser dan pilihan privasi yang tersedia.</p>
                    <h2 class="text-xl font-bold text-white">Penggunaan dan perlindungan data</h2>
                    <p>Data kontak digunakan untuk menanggapi permintaan Anda, memberikan dukungan, dan menjaga keamanan layanan. Kami tidak menjual data pribadi. Akses dibatasi kepada pihak yang membutuhkannya untuk menjalankan layanan atau memenuhi kewajiban hukum.</p>
                    <h2 class="text-xl font-bold text-white">Kontak privasi</h2>
                    <p>Permintaan akses, koreksi, atau penghapusan data dapat dikirim ke <a class="text-cyan-400 hover:underline" href="mailto:info@morabangun.com">info@morabangun.com</a>.</p>
                @elseif($page === 'terms')
                    <p>Dengan mengakses situs ini, Anda setuju menggunakan konten dan fitur secara sah, tidak mengganggu keamanan sistem, dan tidak menyalahgunakan formulir atau layanan yang tersedia.</p>
                    <h2 class="text-xl font-bold text-white">Konten dan layanan</h2>
                    <p>Artikel bersifat edukatif. Ruang lingkup, biaya, jadwal, dan hasil pekerjaan pengembangan perangkat lunak hanya mengikat setelah disepakati dalam proposal atau kontrak tertulis.</p>
                    <h2 class="text-xl font-bold text-white">Hak kekayaan intelektual</h2>
                    <p>Merek, desain, source code, dan materi milik Mora Bangun Solutions tidak boleh disalin atau dijual kembali tanpa izin tertulis. Kutipan wajar harus menyertakan sumber dan tautan.</p>
                    <h2 class="text-xl font-bold text-white">Perubahan ketentuan</h2>
                    <p>Kami dapat memperbarui ketentuan ini untuk menyesuaikan layanan dan hukum yang berlaku. Versi terbaru selalu ditampilkan pada halaman ini.</p>
                @else
                    <p>Konten blog disusun untuk edukasi bisnis dan teknologi. Informasi bukan pengganti konsultasi profesional yang mempertimbangkan data, kontrak, regulasi, keamanan, dan kebutuhan organisasi Anda.</p>
                    <h2 class="text-xl font-bold text-white">Akurasi dan pembaruan</h2>
                    <p>Kami berupaya menggunakan sumber yang layak dan meninjau informasi penting, tetapi teknologi, harga, regulasi, serta spesifikasi produk dapat berubah. Verifikasi kembali sumber resmi sebelum mengambil keputusan.</p>
                    <h2 class="text-xl font-bold text-white">Iklan dan tautan eksternal</h2>
                    <p>Halaman dapat memuat iklan atau tautan ke pihak ketiga. Kehadiran iklan tidak berarti Mora Bangun Solutions mendukung klaim pengiklan. Keputusan transaksi tetap menjadi tanggung jawab pengguna.</p>
                    <h2 class="text-xl font-bold text-white">Koreksi editorial</h2>
                    <p>Temuan kesalahan faktual dapat dilaporkan ke <a class="text-cyan-400 hover:underline" href="mailto:info@morabangun.com">info@morabangun.com</a> agar dapat ditinjau dan dikoreksi.</p>
                @endif
            </article>
        </div>
    </section>
</x-layouts.app>
