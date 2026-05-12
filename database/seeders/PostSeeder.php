<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title'          => 'Mengapa ERP Bukan Hanya untuk Perusahaan Besar: Panduan untuk UKM Indonesia',
                'category'       => 'ERP',
                'category_color' => 'cyan',
                'excerpt'        => 'Banyak pelaku UKM berpikir ERP hanya cocok untuk perusahaan multinasional. Kenyataannya, ERP modern dirancang skalabel — dan UKM yang mengadopsinya lebih awal terbukti tumbuh 2-3x lebih cepat.',
                'content'        => '<h2>ERP Bukan Lagi Hak Eksklusif Perusahaan Besar</h2><p>Dulu, implementasi ERP membutuhkan anggaran ratusan juta hingga miliaran rupiah, tim IT khusus, dan berbulan-bulan waktu implementasi. Wajar jika UKM menganggapnya tidak terjangkau. Tapi lanskap teknologi telah berubah drastis.</p><p>ERP modern berbasis cloud dengan model <em>Software as a Service (SaaS)</em> atau solusi open-source seperti yang kami bangun di Mora Bangun Solutions memungkinkan UKM dengan 10–200 karyawan untuk mendapatkan manfaat yang sama dengan biaya yang jauh lebih terjangkau.</p><h2>Tanda-tanda UKM Anda Sudah Butuh ERP</h2><ul><li>Data stok tersebar di spreadsheet berbeda dan sering tidak sinkron</li><li>Laporan keuangan membutuhkan waktu berhari-hari untuk disusun</li><li>Pesanan pelanggan sering terlewat atau terlambat diproses</li><li>Tidak ada visibilitas real-time terhadap performa bisnis</li><li>Proses approval masih manual via chat atau kertas</li></ul><h2>ROI Nyata yang Bisa Diharapkan</h2><p>Berdasarkan pengalaman kami mengimplementasikan ERP untuk klien UKM di Medan dan sekitarnya, berikut hasil rata-rata yang tercapai dalam 6 bulan pertama:</p><ul><li><strong>30-45% pengurangan</strong> waktu pemrosesan pesanan</li><li><strong>25% peningkatan</strong> akurasi stok</li><li><strong>40% lebih cepat</strong> dalam penyusunan laporan keuangan</li><li><strong>20-30% penurunan</strong> biaya operasional akibat eliminasi proses manual</li></ul><h2>Modul ERP yang Paling Kritis untuk UKM</h2><p>Tidak semua modul ERP dibutuhkan dari hari pertama. Kami selalu merekomendasikan pendekatan bertahap:</p><ol><li><strong>Fase 1:</strong> Manajemen Inventori + Point of Sale</li><li><strong>Fase 2:</strong> Keuangan + Pembelian (Purchase Order)</li><li><strong>Fase 3:</strong> SDM + Payroll</li><li><strong>Fase 4:</strong> Business Intelligence + Reporting</li></ol><h2>Kesimpulan</h2><p>ERP bukan pengeluaran — ini adalah investasi yang membayar kembali dirinya sendiri. Dengan perencanaan yang tepat dan mitra implementasi yang berpengalaman, UKM Anda bisa mulai menikmati manfaatnya dalam 2-3 bulan pertama.</p>',
                'author_name'    => 'Tim Mora Bangun',
                'author_role'    => 'ERP Specialist',
                'reading_time'   => 8,
                'tags'           => ['ERP', 'UKM', 'Digital Transformation', 'Bisnis Indonesia'],
                'is_featured'    => true,
                'published_at'   => now()->subDays(2),
            ],
            [
                'title'          => 'CRM: Senjata Rahasia Tim Penjualan yang Sering Diabaikan',
                'category'       => 'CRM',
                'category_color' => 'blue',
                'excerpt'        => 'Data menunjukkan bahwa bisnis yang menggunakan CRM secara konsisten mencatat peningkatan konversi penjualan hingga 29%. Namun sebagian besar UKM Indonesia masih mengandalkan catatan manual atau grup WhatsApp.',
                'content'        => '<h2>Masalah yang Tidak Anda Sadari</h2><p>Tim penjualan Anda mungkin bekerja keras setiap hari — menelepon prospek, menghadiri meeting, mengirim proposal. Tapi tanpa sistem CRM, berapa persen dari effort itu yang benar-benar menghasilkan penjualan? Dan yang lebih penting, <em>mengapa</em> sebagian deal gagal ditutup?</p><p>Tanpa data, Anda hanya bisa menebak. Dengan CRM, Anda bisa tahu pasti.</p><h2>Apa Sebenarnya yang Dilakukan CRM?</h2><p>CRM (Customer Relationship Management) bukan sekadar database kontak. Sistem CRM modern mengelola:</p><ul><li><strong>Pipeline penjualan</strong> — lihat semua prospek dan di tahap mana mereka berada</li><li><strong>Riwayat interaksi</strong> — setiap telepon, email, meeting tercatat otomatis</li><li><strong>Forecast penjualan</strong> — prediksi pendapatan bulan depan berdasarkan data nyata</li><li><strong>Manajemen tugas</strong> — follow-up otomatis agar tidak ada prospek yang terlupakan</li><li><strong>Analitik performa</strong> — siapa sales terbaik Anda dan mengapa mereka berhasil</li></ul><h2>Studi Kasus: Distributor FMCG di Sumatra Utara</h2><p>Salah satu klien kami, sebuah perusahaan distribusi produk konsumer dengan 15 sales representative, mengalami masalah klasik: tingkat konversi hanya 12% dan tidak ada visibility terhadap pipeline.</p><p>Setelah 3 bulan implementasi CRM kami, hasilnya:</p><ul><li>Konversi naik dari 12% menjadi 31%</li><li>Rata-rata deal size meningkat 18%</li><li>Waktu follow-up turun dari 4 hari menjadi 6 jam</li><li>Revenue meningkat 43% dalam kuartal berikutnya</li></ul><h2>Integrasi yang Mengubah Segalanya</h2><p>CRM terbaik adalah yang terintegrasi dengan sistem lain. Di Mora Bangun Solutions, kami menghubungkan CRM dengan:</p><ul><li>WhatsApp Business API untuk komunikasi otomatis</li><li>ERP untuk visibilitas stok real-time saat negosiasi</li><li>Email marketing untuk nurturing prospek</li><li>Dashboard eksekutif untuk laporan otomatis</li></ul>',
                'author_name'    => 'Tim Mora Bangun',
                'author_role'    => 'CRM Consultant',
                'reading_time'   => 6,
                'tags'           => ['CRM', 'Sales', 'Penjualan', 'Bisnis'],
                'is_featured'    => false,
                'published_at'   => now()->subDays(5),
            ],
            [
                'title'          => 'AI Generatif di Dunia Bisnis 2025: Peluang Nyata atau Hype Semata?',
                'category'       => 'AI & Teknologi',
                'category_color' => 'violet',
                'excerpt'        => 'Dari ChatGPT hingga Gemini, AI generatif sudah bukan sekadar eksperimen lab. Perusahaan-perusahaan yang mengintegrasikannya ke dalam operasional bisnis hari ini akan menjadi pemimpin industri esok hari.',
                'content'        => '<h2>Melewati Hype, Menuju Implementasi Nyata</h2><p>Sejak GPT-4 diluncurkan, hampir setiap diskusi bisnis menyinggung AI. Tapi ada jurang besar antara membicarakan AI dan benar-benar mengintegrasikannya ke dalam proses bisnis yang menghasilkan nilai nyata.</p><p>Di Mora Bangun Solutions, kami sudah membantu beberapa klien mengimplementasikan AI — bukan sebagai gimmick, tapi sebagai komponen inti dari sistem operasional mereka.</p><h2>Use Case AI yang Sudah Proven di Bisnis Indonesia</h2><h3>1. Otomatisasi Dokumen dan OCR Cerdas</h3><p>Perusahaan logistik dan trading memproses ratusan dokumen per hari — invoice, packing list, bill of lading, surat jalan. AI dapat membaca, mengekstrak data, dan memasukkannya ke sistem ERP secara otomatis dengan akurasi 95%+.</p><h3>2. Chatbot Layanan Pelanggan 24/7</h3><p>AI berbasis LLM dapat menjawab 80% pertanyaan pelanggan tanpa campur tangan manusia — mulai dari cek status pesanan, informasi produk, hingga troubleshooting dasar. Eskalasi ke agen manusia terjadi hanya untuk kasus kompleks.</p><h3>3. Analitik Prediktif untuk Inventori</h3><p>Dengan machine learning, sistem dapat memprediksi kebutuhan stok 2-4 minggu ke depan berdasarkan pola historis, musim, dan tren pasar. Hasilnya: overstocking turun 30%, stockout hampir eliminasi total.</p><h3>4. Summarisasi Laporan Otomatis</h3><p>Alih-alih membaca 50 halaman laporan, eksekutif mendapatkan ringkasan 1 halaman yang dihasilkan AI — dengan highlight tren kritis, anomali, dan rekomendasi tindakan.</p><h2>Yang Perlu Anda Ketahui Sebelum Memulai</h2><p>AI bukan solusi ajaib. Keberhasilan implementasi AI bergantung pada:</p><ul><li><strong>Kualitas data:</strong> AI hanya sebaik data yang diberikan kepadanya</li><li><strong>Proses yang jelas:</strong> Otomatisasi proses yang kacau hanya menghasilkan kekacauan lebih cepat</li><li><strong>Change management:</strong> Tim Anda perlu disiapkan untuk bekerja bersama AI, bukan takut digantikannya</li></ul>',
                'author_name'    => 'Tim Mora Bangun',
                'author_role'    => 'AI Solution Architect',
                'reading_time'   => 10,
                'tags'           => ['AI', 'Generative AI', 'Otomatisasi', 'Inovasi'],
                'is_featured'    => true,
                'published_at'   => now()->subDays(1),
            ],
            [
                'title'          => 'Corporate Portal: Lebih dari Sekadar Intranet',
                'category'       => 'Corporate Portal',
                'category_color' => 'violet',
                'excerpt'        => 'Portal korporat modern bukan lagi papan pengumuman digital. Ia adalah pusat saraf operasional yang menghubungkan seluruh ekosistem bisnis — karyawan, sistem, data, dan keputusan — dalam satu antarmuka yang kohesif.',
                'content'        => '<h2>Evolusi Intranet Menjadi Platform Operasional</h2><p>Generasi pertama intranet adalah tempat menyimpan kebijakan perusahaan dan bagan organisasi. Tidak ada yang menggunakannya secara sukarela. Corporate portal generasi terbaru adalah sesuatu yang sama sekali berbeda.</p><p>Platform yang kami bangun adalah ruang kerja digital yang terintegrasi — tempat karyawan memulai hari kerja mereka, bukan hanya sumber informasi statis.</p><h2>Fitur yang Mendefinisikan Corporate Portal Modern</h2><h3>Single Sign-On (SSO)</h3><p>Satu login untuk semua sistem. Tidak perlu mengingat 10 password berbeda untuk ERP, email, absensi, dan sistem lainnya.</p><h3>Dashboard Personal yang Adaptif</h3><p>Setiap karyawan melihat informasi yang relevan dengan perannya. Manajer melihat KPI tim, sales melihat pipeline, HR melihat status rekrutmen — semua dalam satu layar.</p><h3>Workflow Digital End-to-End</h3><p>Pengajuan cuti, permintaan pembelian, approval kontrak — semua bisa dimulai, diproses, dan diselesaikan dalam portal tanpa satu lembar kertas pun.</p><h3>Knowledge Base Terstruktur</h3><p>SOP, manual produk, kebijakan HR — semua dapat dicari dengan full-text search dan diperbarui tanpa perlu IT.</p><h2>Keunggulan Khusus untuk BUMN dan Korporasi</h2><p>BUMN memiliki kebutuhan unik: transparansi, akuntabilitas, dan kepatuhan regulasi. Portal kami dirancang dengan:</p><ul><li>Audit trail lengkap untuk setiap tindakan</li><li>Manajemen level akses berbasis peran (RBAC)</li><li>Enkripsi data end-to-end</li><li>Integrasi dengan sistem pemerintah (SIMBG, OSS, dll)</li></ul>',
                'author_name'    => 'Tim Mora Bangun',
                'author_role'    => 'Enterprise Solutions Lead',
                'reading_time'   => 7,
                'tags'           => ['Corporate Portal', 'BUMN', 'Intranet', 'Digital Workplace'],
                'is_featured'    => false,
                'published_at'   => now()->subDays(8),
            ],
            [
                'title'          => 'WhatsApp Business API: Mengubah Chat Jadi Mesin Penjualan',
                'category'       => 'AI & Teknologi',
                'category_color' => 'emerald',
                'excerpt'        => 'Indonesia adalah negara dengan penetrasi WhatsApp tertinggi di Asia Tenggara. Bisnis yang belum mengintegrasikan WhatsApp Business API ke dalam sistem mereka sedang meninggalkan peluang besar di atas meja.',
                'content'        => '<h2>WhatsApp Bukan Hanya untuk Chat Personal</h2><p>Dengan 170+ juta pengguna aktif di Indonesia, WhatsApp adalah platform komunikasi yang lebih dominan dari email, telepon, dan media sosial lainnya. Konsekuensinya? Pelanggan Anda mengharapkan bisnis Anda ada di sana — dan merespons cepat.</p><p>WhatsApp Business API (bukan aplikasi Business biasa) membuka level baru yang memungkinkan integrasi penuh dengan sistem bisnis Anda.</p><h2>Apa yang Bisa Dilakukan WhatsApp API?</h2><h3>Notifikasi Transaksional Otomatis</h3><p>Konfirmasi pesanan, update status pengiriman, reminder pembayaran, OTP — semua dikirim otomatis dari sistem Anda ke WhatsApp pelanggan tanpa sentuhan manusia.</p><h3>Chatbot AI Terintegrasi</h3><p>AI yang bisa menjawab pertanyaan umum, cek stok, bantu pilih produk, bahkan proses pesanan sederhana — semuanya dalam antarmuka WhatsApp yang sudah familiar bagi pelanggan.</p><h3>Broadcast yang Legal dan Terarah</h3><p>Berbeda dengan broadcast biasa yang bisa diblokir, API memungkinkan pengiriman pesan template yang disetujui ke segmen pelanggan spesifik — dengan personalisasi nama, nomor pesanan, dan data lainnya.</p><h3>Escalation ke Agen Manusia</h3><p>Ketika AI tidak bisa menjawab, percakapan seamlessly dialihkan ke agen layanan pelanggan — lengkap dengan riwayat percakapan, sehingga pelanggan tidak perlu mengulangi informasi.</p><h2>Implementasi di Bisnis Anda</h2><p>Di Mora Bangun Solutions, kami mengintegrasikan WhatsApp API dengan:</p><ul><li>ERP untuk notifikasi stok dan pesanan</li><li>CRM untuk follow-up otomatis dan lead nurturing</li><li>Sistem ticketing untuk dukungan pelanggan</li><li>Dashboard untuk monitoring semua percakapan</li></ul>',
                'author_name'    => 'Tim Mora Bangun',
                'author_role'    => 'Chatbot & Integration Specialist',
                'reading_time'   => 6,
                'tags'           => ['WhatsApp', 'Chatbot', 'AI', 'Customer Service'],
                'is_featured'    => false,
                'published_at'   => now()->subDays(12),
            ],
            [
                'title'          => 'Workflow Automation: Cara Menghilangkan Pekerjaan Berulang yang Menguras Energi Tim Anda',
                'category'       => 'Otomatisasi',
                'category_color' => 'cyan',
                'excerpt'        => 'Rata-rata karyawan menghabiskan 19% waktu kerjanya untuk pekerjaan berulang yang bisa diotomatisasi. Itu hampir satu hari penuh dari 5 hari kerja setiap minggu — terbuang sia-sia.',
                'content'        => '<h2>Masalah yang Tidak Terlihat tapi Sangat Mahal</h2><p>Coba hitung: berapa banyak karyawan Anda yang setiap hari melakukan hal-hal seperti memindahkan data dari satu spreadsheet ke sistem lain, mengirim email konfirmasi yang formatnya selalu sama, mengingatkan atasan untuk approval via chat, atau membuat laporan harian/mingguan dari data yang sudah ada di sistem?</p><p>Pekerjaan-pekerjaan ini tidak menambah nilai. Mereka hanya memastikan informasi mengalir dari titik A ke titik B — sesuatu yang seharusnya dilakukan oleh mesin, bukan manusia.</p><h2>Framework Tiga Lapisan Otomatisasi</h2><h3>Lapisan 1: Trigger-Based Automation</h3><p>Jika X terjadi, lakukan Y. Sederhana tapi powerful. Contoh: ketika invoice diupload, otomatis ekstrak data dengan OCR, masukkan ke sistem akuntansi, kirim notifikasi ke tim keuangan.</p><h3>Lapisan 2: Approval Workflow</h3><p>Proses yang melibatkan keputusan manusia di beberapa titik, tapi dengan routing dan notifikasi yang otomatis. Pengajuan budget → notif ke manajer → jika disetujui, lanjut ke CFO → jika approved, otomatis buat PO di sistem.</p><h3>Lapisan 3: AI-Powered Decision Support</h3><p>Untuk keputusan yang lebih kompleks, AI menganalisis data dan memberikan rekomendasi, sementara manusia memberikan keputusan final. Contoh: sistem mendeteksi anomali dalam laporan keuangan dan memberi alert beserta konteks analitisnya.</p><h2>Proses yang Paling Menguntungkan untuk Diotomatisasi</h2><ul><li><strong>Onboarding karyawan baru</strong> — pembuatan akun, setup email, orientasi digital</li><li><strong>Proses pembelian</strong> — dari permintaan hingga PO hingga pembayaran</li><li><strong>Rekonsiliasi keuangan</strong> — pencocokan bank statement otomatis</li><li><strong>Laporan periodik</strong> — report harian/mingguan/bulanan yang auto-generate</li><li><strong>Follow-up pelanggan</strong> — reminder pembayaran, survey kepuasan post-delivery</li></ul>',
                'author_name'    => 'Tim Mora Bangun',
                'author_role'    => 'Process Automation Expert',
                'reading_time'   => 9,
                'tags'           => ['Otomatisasi', 'Workflow', 'RPA', 'Produktivitas'],
                'is_featured'    => false,
                'published_at'   => now()->subDays(15),
            ],
            [
                'title'          => 'Roadmap Transformasi Digital: Dari Mana Harus Memulai?',
                'category'       => 'Strategi Digital',
                'category_color' => 'amber',
                'excerpt'        => 'Transformasi digital bukan tentang membeli software terbaru. Ini tentang mengubah cara bisnis beroperasi, mengambil keputusan, dan menciptakan nilai — dan itu dimulai jauh sebelum teknologi dipilih.',
                'content'        => '<h2>Kesalahan Paling Umum dalam Transformasi Digital</h2><p>Setiap minggu kami berbicara dengan pebisnis yang sudah "mencoba digitalisasi" tapi gagal. Penyebabnya hampir selalu sama: mereka membeli teknologi terlebih dahulu, lalu mencoba menyesuaikan proses bisnis ke teknologi tersebut. Seharusnya terbalik.</p><p>Transformasi digital yang berhasil dimulai dari pemahaman mendalam tentang proses bisnis, pain points, dan tujuan — baru kemudian teknologi dipilih sebagai enabler, bukan driver.</p><h2>Fase 1: Audit dan Diagnosis (Minggu 1-4)</h2><p>Sebelum menyentuh satu baris kode pun, kami melakukan:</p><ul><li><strong>Process mapping:</strong> dokumentasi setiap proses bisnis dari hulu ke hilir</li><li><strong>Pain point inventory:</strong> identifikasi bottleneck, manual handoff, dan titik kegagalan</li><li><strong>Data audit:</strong> di mana data hidup, seberapa akurat, siapa yang punya akses</li><li><strong>Stakeholder alignment:</strong> memastikan semua pemimpin bisnis sepakat tentang prioritas</li></ul><h2>Fase 2: Desain Arsitektur Digital (Minggu 5-8)</h2><p>Berdasarkan diagnosis, kami merancang ekosistem teknologi yang kohesif — bukan kumpulan sistem yang berdiri sendiri. Keputusan kunci di fase ini:</p><ul><li>Sistem mana yang menjadi "master" data (biasanya ERP)</li><li>Bagaimana integrasi antar sistem dirancang</li><li>Urutan implementasi yang meminimalkan gangguan operasional</li><li>KPI yang akan digunakan untuk mengukur keberhasilan</li></ul><h2>Fase 3: Implementasi Bertahap (Bulan 3-12)</h2><p>Kami tidak percaya pada "big bang implementation" — meluncurkan semua sekaligus adalah resep untuk kegagalan. Pendekatan kami:</p><ol><li>Quick wins dulu (2-4 minggu): otomatisasi proses yang paling menyakitkan</li><li>Core systems (1-3 bulan): ERP atau CRM sebagai tulang punggung</li><li>Integration layer (3-6 bulan): menghubungkan semua sistem</li><li>Intelligence layer (6-12 bulan): analytics, AI, dan optimization</li></ol><h2>Faktor Keberhasilan yang Sering Diabaikan</h2><p>Teknologi hanya 30% dari persamaan. 70% sisanya adalah people dan process:</p><ul><li><strong>Change champion:</strong> butuh pemimpin internal yang aktif mendorong adopsi</li><li><strong>Training yang memadai:</strong> bukan sekadar webinar 2 jam, tapi pendampingan berkelanjutan</li><li><strong>Quick wins yang dikomunikasikan:</strong> tim perlu melihat manfaat nyata sejak dini</li></ul>',
                'author_name'    => 'Tim Mora Bangun',
                'author_role'    => 'Digital Strategy Consultant',
                'reading_time'   => 11,
                'tags'           => ['Transformasi Digital', 'Strategi', 'Roadmap', 'Change Management'],
                'is_featured'    => false,
                'published_at'   => now()->subDays(20),
            ],
            [
                'title'          => 'Custom Software vs SaaS: Mana yang Lebih Baik untuk Bisnis Anda?',
                'category'       => 'Strategi Digital',
                'category_color' => 'amber',
                'excerpt'        => 'SaaS menawarkan kemudahan dan kecepatan, tapi custom software memberikan keunggulan kompetitif yang tidak bisa ditiru pesaing. Pilihan yang tepat bergantung pada posisi bisnis Anda saat ini.',
                'content'        => '<h2>Pertanyaan yang Sering Salah Dijawab</h2><p>Ketika klien datang ke kami, pertanyaan pertama yang sering diajukan adalah: "Lebih baik pakai Salesforce atau buat CRM sendiri?" Jawaban jujur kami: tergantung. Tapi bukan tergantung yang tidak helpful — ada framework yang jelas untuk memilih.</p><h2>Kapan SaaS adalah Pilihan Tepat</h2><p>SaaS (Software as a Service) — seperti Salesforce, Odoo, Zoho, atau SAP Business One — adalah pilihan yang masuk akal ketika:</p><ul><li><strong>Proses bisnis Anda standar:</strong> tidak ada keunikan signifikan dibanding kompetitor</li><li><strong>Speed to market kritis:</strong> perlu sistem dalam hitungan minggu, bukan bulan</li><li><strong>Budget terbatas:</strong> SaaS biasanya lebih murah di fase awal</li><li><strong>Tim IT minimal:</strong> SaaS di-maintain oleh vendor</li></ul><h2>Kapan Custom Software Menjadi Keharusan</h2><p>Custom software adalah investasi yang tepat ketika:</p><ul><li><strong>Proses bisnis Anda adalah keunggulan kompetitif:</strong> SaaS memaksa Anda mengikuti cara kerja vendor, bukan cara kerja unik Anda</li><li><strong>Integrasi kompleks:</strong> perlu terhubung dengan sistem legacy yang tidak punya API standar</li><li><strong>Data sovereignty:</strong> regulasi atau kebutuhan keamanan mengharuskan data di server Anda</li><li><strong>Skala besar:</strong> biaya SaaS per-user bisa melebihi custom development dalam jangka panjang</li></ul><h2>Model Hybrid: Yang Paling Sering Kami Rekomendasikan</h2><p>Kenyataannya, sebagian besar bisnis tidak perlu memilih satu atau yang lain. Kami sering merekomendasikan pendekatan hybrid:</p><ul><li>Gunakan SaaS untuk fungsi yang benar-benar standar (email marketing, meeting, HR dasar)</li><li>Bangun custom untuk core business logic yang membedakan Anda dari kompetitor</li><li>Integrasikan keduanya dengan API layer yang kami rancang</li></ul><h2>Perhitungan Total Cost of Ownership</h2><p>Jangan hanya bandingkan biaya implementasi awal. Hitung TCO 3-5 tahun:</p><ul><li>SaaS: subscription bulanan × jumlah user × 36/60 bulan + biaya kustomisasi + biaya konsultan implementasi</li><li>Custom: development cost + hosting + maintenance tahunan (biasanya 15-20% dari development cost)</li></ul><p>Untuk banyak bisnis dengan 30+ user, custom software mulai lebih cost-effective dalam 18-24 bulan.</p>',
                'author_name'    => 'Tim Mora Bangun',
                'author_role'    => 'Solution Architect',
                'reading_time'   => 8,
                'tags'           => ['Custom Software', 'SaaS', 'Teknologi', 'Strategi'],
                'is_featured'    => false,
                'published_at'   => now()->subDays(25),
            ],
        ];

        foreach ($posts as $data) {
            $data['slug'] = Str::slug($data['title']);
            Post::create($data);
        }
    }
}
