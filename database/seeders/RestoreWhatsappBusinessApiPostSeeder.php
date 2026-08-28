<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class RestoreWhatsappBusinessApiPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slug = 'whatsapp-business-api-mengubah-chat-jadi-mesin-penjualan';

        if (Post::query()->where('slug', $slug)->exists()) {
            throw new RuntimeException("Post {$slug} already exists; restore aborted.");
        }

        DB::transaction(function () use ($slug): void {
            Post::query()->create([
                'title' => 'WhatsApp API Chat: Integrasi CRM, Bot, dan Agen Manusia',
                'slug' => $slug,
                'category' => 'AI & Teknologi',
                'category_color' => 'emerald',
                'excerpt' => 'Panduan WhatsApp API chat: arsitektur Cloud API, webhook, CRM, template pesan, bot, handoff agen, kepatuhan, keamanan data, dan KPI implementasi.',
                'content' => <<<'HTML'
<p>WhatsApp API chat bukan aplikasi WhatsApp Business yang dipasang di satu ponsel. Istilah ini biasanya merujuk pada WhatsApp Business Platform, termasuk Cloud API resmi yang di-host oleh Meta. Platform tersebut memberi akses programatis agar bisnis dapat menghubungkan percakapan WhatsApp dengan CRM, helpdesk, sistem pesanan, notifikasi, bot, dan agen manusia. Nilai bisnisnya muncul dari integrasi proses, bukan dari kemampuan mengirim pesan massal.</p>

<p>Artikel ini diperbarui pada 28 Agustus 2026 dengan merujuk pada <a href="https://www.postman.com/meta/whatsapp-business-platform/documentation/wlk6lh4/whatsapp-cloud-api" target="_blank" rel="noopener noreferrer">dokumentasi Cloud API resmi Meta di Postman</a>, <a href="https://whatsappbusiness.com/products/business-platform/" target="_blank" rel="noopener noreferrer">halaman WhatsApp Business Platform</a>, <a href="https://whatsappbusiness.com/policy/" target="_blank" rel="noopener noreferrer">WhatsApp Business Messaging Policy</a>, <a href="https://whatsappbusiness.com/products/platform-pricing/" target="_blank" rel="noopener noreferrer">halaman pricing resmi</a>, dan <a href="https://www.facebookblueprint.com/student/path/253055-message-templates" target="_blank" rel="noopener noreferrer">materi Meta Blueprint tentang message templates</a>. Fitur, harga, batas pengiriman, dan kebijakan dapat berubah; periksa sumber resmi saat merancang implementasi.</p>

<h2>WhatsApp Business App atau WhatsApp Business Platform?</h2>

<p>WhatsApp Business App cocok untuk usaha yang percakapannya masih dapat ditangani dari aplikasi dan jumlah agen terbatas. WhatsApp Business Platform cocok ketika bisnis membutuhkan integrasi backend, routing percakapan, otomasi berbasis event, banyak agen, pencatatan ke CRM, notifikasi transaksional, atau kontrol operasional yang tidak dapat dikelola hanya dari satu perangkat.</p>

<table>
<thead><tr><th>Kebutuhan</th><th>Business App</th><th>Business Platform/Cloud API</th></tr></thead>
<tbody>
<tr><td>Operasi sederhana</td><td>Cocok untuk chat manual dan katalog dasar</td><td>Bisa digunakan, tetapi mungkin terlalu kompleks</td></tr>
<tr><td>Integrasi CRM/ERP</td><td>Terbatas dan bergantung fitur yang tersedia</td><td>Didesain untuk integrasi programatis</td></tr>
<tr><td>Bot dan routing</td><td>Fitur otomatisasi dasar</td><td>Dapat memakai webhook, rules, bot, dan handoff agen</td></tr>
<tr><td>Audit operasional</td><td>Lebih manual</td><td>Dapat mencatat event, status pesan, owner, dan SLA</td></tr>
<tr><td>Pengembangan</td><td>Tidak selalu memerlukan developer</td><td>Memerlukan desain sistem, keamanan, pengujian, dan monitoring</td></tr>
</tbody>
</table>

<p>Keputusan tidak boleh hanya mengikuti tren. Jika volume percakapan rendah dan tidak ada kebutuhan integrasi, Business App dapat lebih ekonomis. Jika pesan harus memicu update order, membuat ticket, mengambil data pelanggan, atau berpindah antaragen dengan jejak audit, Business Platform lebih relevan.</p>

<h2>Arsitektur WhatsApp API chat yang sehat</h2>

<p>Cloud API menerima dan mengirim pesan melalui layanan Meta. Saat pelanggan mengirim pesan atau status pesan berubah, webhook mengirim event ke endpoint bisnis. Middleware memvalidasi event, mencatat idempotency key, menentukan customer dan conversation, lalu meneruskan pekerjaan ke CRM, ticketing, bot, atau queue. Balasan dikirim kembali melalui API dengan token dan izin yang dikelola secara aman.</p>

<ol>
<li><strong>Pelanggan mengirim pesan.</strong> Nomor WhatsApp bisnis menerima percakapan melalui platform resmi.</li>
<li><strong>Webhook menerima event.</strong> Sistem memverifikasi sumber, signature atau token yang relevan, timestamp, dan message ID.</li>
<li><strong>Conversation router menentukan jalur.</strong> Pesan dapat masuk ke FAQ bot, sales queue, customer service, atau prioritas khusus.</li>
<li><strong>CRM atau ticketing diperbarui.</strong> Sistem menghubungkan pesan dengan customer, lead, order, ticket, dan owner yang benar.</li>
<li><strong>Bot atau agen merespons.</strong> Bot menangani intent yang aman dan terdefinisi; kasus ambigu, sensitif, atau bernilai tinggi dialihkan ke manusia.</li>
<li><strong>Status dan outcome dicatat.</strong> Delivered, read, failed, resolved, converted, opt-out, dan exception masuk ke dashboard operasional.</li>
</ol>

<p>Arsitektur perlu asynchronous queue agar lonjakan pesan tidak membuat aplikasi utama lambat. Message ID harus dipakai untuk mencegah event webhook diproses dua kali. Retry harus membedakan error sementara dan error permanen. Token tidak boleh ditanam di source code, log, browser, atau spreadsheet.</p>

<h2>Aturan 24 jam dan message template</h2>

<p>Ketika pengguna mengirim pesan kepada bisnis, terbuka customer service window selama 24 jam. Dalam periode tersebut bisnis dapat merespons dengan service message. Di luar window tersebut, bisnis hanya dapat mengirim pesan menggunakan message template yang disetujui dan sesuai tujuan kategorinya. WhatsApp mengelompokkan pesan antara lain sebagai marketing, utility, authentication, dan service; pricing serta ketentuan masing-masing perlu dilihat pada halaman resmi.</p>

<p>Message template bukan celah untuk mengirim promosi tanpa kendali. Template harus relevan, diharapkan penerima, memakai variabel yang benar, dan dipakai untuk tujuan yang disetujui. Bisnis harus menghormati opt-out. Jangan membeli database nomor, mengimpor kontak tanpa dasar, atau mengirim pesan berulang kepada orang yang tidak meminta komunikasi.</p>

<h2>Contoh use case yang layak diintegrasikan</h2>

<h3>Lead masuk dari iklan atau website</h3>

<p>Percakapan baru dapat membuat lead di CRM, menyimpan sumber kampanye, memilih produk yang diminati, lalu menugaskan sales berdasarkan wilayah atau layanan. Bot sebaiknya hanya mengumpulkan informasi minimum yang benar-benar diperlukan. Setelah data cukup, sales menerima ringkasan dan mengambil alih percakapan.</p>

<h3>Update pesanan atau pengiriman</h3>

<p>Sistem dapat memicu pesan utility ketika order dikonfirmasi, pembayaran diverifikasi, barang diproses, atau pengiriman berubah status. Event harus berasal dari sistem sumber yang dipercaya. Jangan mengirim status “selesai”, “dibayar”, atau “terkirim” hanya berdasarkan teks bebas dari operator tanpa verifikasi.</p>

<h3>Reminder dan appointment</h3>

<p>Reminder yang diminta pelanggan dapat dikirim berdasarkan jadwal sistem. Perhatikan zona waktu, frekuensi, jenis layanan, status pembatalan, dan kanal alternatif. Untuk informasi sensitif, batasi isi pesan dan arahkan pengguna ke portal yang aman.</p>

<h3>Customer service dan ticketing</h3>

<p>Pertanyaan yang tidak selesai dalam satu interaksi harus menjadi ticket dengan kategori, prioritas, SLA internal, owner, dan riwayat tindakan. Jika pelanggan mengirim data pribadi atau dokumen, tentukan apakah file boleh disimpan, berapa lama retensinya, dan siapa yang dapat mengaksesnya.</p>

<h2>Bot harus mempunyai handoff ke agen manusia</h2>

<p>WhatsApp Business Messaging Policy mengizinkan otomatisasi, tetapi bisnis harus menyediakan jalur eskalasi yang jelas dan langsung. Bot tidak boleh memaksa pelanggan berputar pada menu yang sama. Handoff perlu dipicu ketika intent tidak dikenali, pelanggan meminta agen, terjadi transaksi bernilai tinggi, ada komplain, muncul risiko hukum, atau sistem sumber tidak memberikan data yang dapat dipercaya.</p>

<p>Saat handoff, agen sebaiknya menerima ringkasan konteks: identitas customer yang sudah diverifikasi, tujuan percakapan, jawaban bot, data yang telah dikumpulkan, order atau ticket terkait, dan alasan eskalasi. Hindari mengirim seluruh data pribadi jika agen tidak membutuhkannya.</p>

<h2>Checklist kepatuhan dan keamanan</h2>

<ul>
<li>Gunakan WhatsApp Business Platform atau partner yang sah, bukan otomasi tidak resmi berbasis manipulasi WhatsApp Web.</li>
<li>Publikasikan identitas bisnis, kontak dukungan, kebijakan privasi, tujuan pemrosesan, dan mekanisme opt-out.</li>
<li>Dapatkan izin yang diperlukan sebelum menghubungi pelanggan dan simpan evidence consent secara proporsional.</li>
<li>Jangan meminta nomor kartu lengkap, kredensial, OTP untuk dibagikan kepada agen, atau identitas sensitif melalui chat tanpa kontrol yang sesuai.</li>
<li>Simpan access token di secret manager atau environment server dengan hak akses terbatas.</li>
<li>Validasi webhook, gunakan HTTPS, cegah replay, dan log hanya data yang diperlukan.</li>
<li>Terapkan role-based access agar sales, support, supervisor, dan developer tidak melihat data di luar tugasnya.</li>
<li>Tentukan retensi chat, lampiran, log teknis, dan backup. Hapus data ketika tujuan dan kewajiban retensinya selesai.</li>
<li>Uji fallback jika CRM, ERP, queue, atau Meta API sedang bermasalah.</li>
<li>Pantau quality rating, delivery failure, blokir, laporan spam, serta opt-out sebagai indikator kesehatan kanal.</li>
</ul>

<h2>Rencana implementasi bertahap</h2>

<h3>Fase 1: satu use case dan satu sumber data</h3>

<p>Pilih use case yang jelas, misalnya lead dari website atau notifikasi status order. Tetapkan owner bisnis, source of truth, event yang memicu pesan, template, data minimum, kondisi gagal, dan jalur eskalasi. Jangan memulai sekaligus dengan marketing, support, pembayaran, chatbot AI, dan integrasi ERP.</p>

<h3>Fase 2: sandbox dan test number</h3>

<p>Bangun webhook, queue, logging, mapping customer, dan status message. Uji message ID ganda, payload tidak lengkap, token kedaluwarsa, timeout, rate limit, template ditolak, nomor tidak valid, dan database tidak tersedia. Pastikan retry tidak menghasilkan pesan ganda.</p>

<h3>Fase 3: pilot terbatas</h3>

<p>Mulai dari kelompok pelanggan yang memang mengharapkan pesan. Batasi jumlah agen dan template. Setiap hari tinjau delivery, read rate, response time, handoff, opt-out, error, dan keluhan. Perbaiki knowledge base serta routing sebelum menambah volume.</p>

<h3>Fase 4: integrasi lanjutan</h3>

<p>Setelah pilot stabil, hubungkan ticketing, CRM, order management, payment status, dan analytics secara bertahap. Setiap integrasi harus mempunyai kontrak data, owner, audit trail, test, rollback, dan indikator keberhasilan sendiri.</p>

<h2>KPI yang perlu diukur</h2>

<table>
<thead><tr><th>KPI</th><th>Makna operasional</th><th>Risiko jika dibaca sendiri</th></tr></thead>
<tbody>
<tr><td>Delivery rate</td><td>Pesan berhasil mencapai tujuan</td><td>Tinggi belum berarti pesan diinginkan</td></tr>
<tr><td>First response time</td><td>Kecepatan respons awal</td><td>Respons cepat belum tentu menyelesaikan masalah</td></tr>
<tr><td>Resolution rate</td><td>Percakapan selesai tanpa kontak ulang</td><td>Perlu validasi agar ticket tidak ditutup prematur</td></tr>
<tr><td>Handoff rate</td><td>Porsi bot yang dialihkan ke agen</td><td>Terlalu rendah dapat berarti bot menahan kasus kompleks</td></tr>
<tr><td>Opt-out dan block rate</td><td>Sinyal relevansi dan kualitas pesan</td><td>Harus dianalisis per template dan segmen</td></tr>
<tr><td>Qualified lead rate</td><td>Lead yang memenuhi kriteria bisnis</td><td>Jangan menyamakan semua chat dengan peluang penjualan</td></tr>
</tbody>
</table>

<h2>Kesalahan implementasi yang perlu dihindari</h2>

<ul>
<li>Membeli “WhatsApp blast” tanpa memeriksa apakah kanal dan consent sesuai kebijakan.</li>
<li>Mengukur keberhasilan hanya dari jumlah pesan terkirim.</li>
<li>Menyimpan token, nomor pelanggan, dan isi chat di log tanpa pembatasan.</li>
<li>Membiarkan bot memberi harga, stok, janji layanan, atau status transaksi dari data yang tidak sinkron.</li>
<li>Tidak menyediakan human handoff dan jalur komplain.</li>
<li>Menghubungkan langsung webhook ke proses berat tanpa queue dan idempotency.</li>
<li>Menganggap biaya platform tetap; pricing dapat berubah berdasarkan kategori dan pasar.</li>
</ul>

<h2>Kesimpulan</h2>

<p>WhatsApp API chat layak dipakai ketika bisnis memerlukan integrasi, skala, routing, dan audit yang tidak dapat dipenuhi oleh chat manual. Mulailah dari satu use case yang terukur, gunakan Cloud API resmi, patuhi customer service window dan message template, sediakan handoff manusia, serta lindungi data pelanggan. Teknologi tidak mengubah chat menjadi mesin penjualan secara otomatis; proses, data, consent, dan kualitas layananlah yang menentukan hasil.</p>

<h2>Referensi resmi</h2>

<ul>
<li><a href="https://www.postman.com/meta/whatsapp-business-platform/documentation/wlk6lh4/whatsapp-cloud-api" target="_blank" rel="noopener noreferrer">Meta — WhatsApp Cloud API documentation</a></li>
<li><a href="https://whatsappbusiness.com/products/business-platform/" target="_blank" rel="noopener noreferrer">WhatsApp Business Platform</a></li>
<li><a href="https://whatsappbusiness.com/policy/" target="_blank" rel="noopener noreferrer">WhatsApp Business Messaging Policy</a></li>
<li><a href="https://whatsappbusiness.com/products/platform-pricing/" target="_blank" rel="noopener noreferrer">WhatsApp Business Platform pricing</a></li>
<li><a href="https://www.facebookblueprint.com/student/path/253055-message-templates" target="_blank" rel="noopener noreferrer">Meta Blueprint — message templates</a></li>
</ul>
HTML,
                'author_name' => 'Tim Mora Bangun',
                'author_role' => 'Integration & Automation Team',
                'reading_time' => 10,
                'tags' => ['WhatsApp API', 'Cloud API', 'CRM', 'Chatbot', 'Customer Service'],
                'is_featured' => false,
                'published_at' => now(),
            ]);
        });
    }
}
