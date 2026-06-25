<section id="services" class="section-padding relative bg-surface"
    x-data="{
        open: false,
        service: null,
        services: {
            erp: {
                icon: 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                color: 'cyan',
                title_id: 'Sistem ERP',
                title_en: 'ERP System',
                definisi_id: 'Enterprise Resource Planning (ERP) adalah sistem perangkat lunak terintegrasi yang menyatukan seluruh proses bisnis utama perusahaan — dari keuangan, produksi, pengadaan, inventori, hingga SDM — ke dalam satu platform tunggal yang saling terhubung secara real-time.',
                definisi_en: 'Enterprise Resource Planning (ERP) is an integrated software system that unifies all major business processes — finance, production, procurement, inventory, and HR — into a single platform connected in real-time.',
                fungsi_id: ['Mengelola inventori dan supply chain secara real-time', 'Otomatisasi proses keuangan dan akuntansi', 'Manajemen SDM, rekrutmen, dan payroll', 'Perencanaan produksi dan kontrol kualitas', 'Dashboard eksekutif dengan analytics bisnis terintegrasi'],
                fungsi_en: ['Manage inventory and supply chain in real-time', 'Automate financial and accounting processes', 'HR management, recruitment, and payroll', 'Production planning and quality control', 'Executive dashboard with integrated business analytics'],
                akibat_id: ['Data tersebar di puluhan spreadsheet yang tidak sinkron', 'Laporan keuangan membutuhkan berhari-hari untuk disusun manual', 'Keputusan bisnis dibuat berdasarkan data lama, bukan real-time', 'Human error tinggi karena entry data berulang', 'Tidak ada visibilitas cross-departemen yang menyebabkan bottle neck operasional'],
                akibat_en: ['Data scattered across dozens of unsynchronized spreadsheets', 'Financial reports take days to compile manually', 'Business decisions made on outdated data, not real-time', 'High human error due to repeated data entry', 'No cross-department visibility causes operational bottlenecks'],
                benefit_id: ['Efisiensi operasional meningkat 30-45% sejak bulan pertama', 'Laporan keuangan otomatis siap dalam hitungan detik', 'Keputusan lebih cepat & akurat berbasis data real-time', 'Satu sumber kebenaran untuk seluruh data bisnis', 'Skalabel — tumbuh bersama bisnis Anda tanpa ganti sistem'],
                benefit_en: ['Operational efficiency up 30-45% from the first month', 'Financial reports auto-generated in seconds', 'Faster & more accurate decisions based on real-time data', 'Single source of truth for all business data', 'Scalable — grows with your business without system replacement'],
                tags: ['Inventori', 'Keuangan', 'HR', 'Supply Chain'],
                cocok_id: ['Manufaktur', 'Retail', 'Logistik', 'BUMN', 'Konstruksi', 'Distribusi'],
                cocok_en: ['Manufacturing', 'Retail', 'Logistics', 'SOE', 'Construction', 'Distribution'],
                infographic: '/images/services/service-erp.jpg'
            },
            crm: {
                icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                color: 'blue',
                title_id: 'Sistem CRM',
                title_en: 'CRM System',
                definisi_id: 'Customer Relationship Management (CRM) adalah sistem yang membantu bisnis mengelola seluruh interaksi dengan pelanggan dan prospek — mulai dari first contact, nurturing, closing deal, hingga after-sales service — dalam satu platform yang cerdas dan terotomasi.',
                definisi_en: 'CRM is a system that helps businesses manage all interactions with customers and prospects — from first contact, nurturing, deal closing, to after-sales service — in one intelligent and automated platform.',
                fungsi_id: ['Manajemen pipeline penjualan dengan visualisasi Kanban', 'Tracking seluruh riwayat interaksi per pelanggan', 'Forecast penjualan berbasis data historis + AI', 'Otomatisasi follow-up dan reminder tim sales', 'Segmentasi pelanggan untuk marketing yang tepat sasaran'],
                fungsi_en: ['Sales pipeline management with Kanban visualization', 'Track all interaction history per customer', 'Sales forecast based on historical data + AI', 'Automated follow-up and reminders for sales team', 'Customer segmentation for targeted marketing'],
                akibat_id: ['Prospek terlupakan karena tidak ada sistem tracking', 'Tim sales tidak tahu di tahap mana setiap deal berada', 'Tidak ada data untuk menganalisa mengapa deal gagal', 'Customer service lambat karena tidak ada riwayat interaksi', 'Revenue unpredictable karena tidak ada sales forecast yang akurat'],
                akibat_en: ['Leads forgotten because there\'s no tracking system', 'Sales team doesn\'t know what stage each deal is in', 'No data to analyze why deals fail', 'Slow customer service due to no interaction history', 'Unpredictable revenue due to no accurate sales forecast'],
                benefit_id: ['Konversi penjualan meningkat rata-rata 29%', 'Zero prospek yang terlupakan dengan automated reminder', 'Sales forecast akurat untuk perencanaan bisnis yang lebih baik', 'Layanan pelanggan lebih personal dengan riwayat lengkap', 'Visibilitas penuh manajemen terhadap performa tim sales'],
                benefit_en: ['Sales conversion increases by an average of 29%', 'Zero forgotten prospects with automated reminders', 'Accurate sales forecast for better business planning', 'More personal customer service with complete history', 'Full management visibility into sales team performance'],
                tags: ['Pipeline', 'Analytics', 'Notifikasi', 'Follow-up'],
                cocok_id: ['Properti', 'Perbankan', 'Asuransi', 'Jasa Profesional', 'Retail', 'Trading'],
                cocok_en: ['Property', 'Banking', 'Insurance', 'Professional Services', 'Retail', 'Trading'],
                infographic: '/images/services/service-crm.jpg'
            },
            portal: {
                icon: 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                color: 'violet',
                title_id: 'Corporate Portal',
                title_en: 'Corporate Portal',
                definisi_id: 'Corporate Portal adalah platform digital terpadu yang menjadi pusat saraf operasional korporasi — menyatukan seluruh sistem, informasi, workflow, dan kolaborasi tim dalam satu antarmuka yang aman, terstruktur, dan mudah diakses oleh seluruh pemangku kepentingan.',
                definisi_en: 'A Corporate Portal is a unified digital platform that serves as the operational nerve center of a corporation — uniting all systems, information, workflows, and team collaboration in one secure, structured interface accessible to all stakeholders.',
                fungsi_id: ['Single Sign-On (SSO) untuk semua sistem perusahaan', 'Dashboard eksekutif dengan KPI real-time', 'Manajemen dokumen, kebijakan, dan SOP terpusat', 'Workflow digital: pengajuan, approval, eskalasi otomatis', 'Direktori karyawan, kalender, dan portal layanan internal'],
                fungsi_en: ['Single Sign-On (SSO) for all company systems', 'Executive dashboard with real-time KPIs', 'Centralized document, policy, and SOP management', 'Digital workflows: submission, approval, automated escalation', 'Employee directory, calendar, and internal service portal'],
                akibat_id: ['Karyawan harus login ke 5-10 sistem berbeda setiap hari', 'Informasi perusahaan tersebar dan sulit ditemukan', 'Proses approval lambat karena masih manual via email/chat', 'Manajemen tidak punya visibility real-time terhadap operasional', 'Onboarding karyawan baru membutuhkan waktu dan effort berlebihan'],
                akibat_en: ['Employees must log in to 5-10 different systems daily', 'Company information scattered and hard to find', 'Slow approvals due to manual email/chat processes', 'Management lacks real-time operational visibility', 'New employee onboarding takes excessive time and effort'],
                benefit_id: ['Produktivitas karyawan meningkat signifikan dengan one-stop platform', 'Transparansi dan akuntabilitas dengan audit trail lengkap', 'Compliance regulasi lebih mudah dengan sistem dokumentasi terstruktur', 'Onboarding karyawan baru 60% lebih cepat', 'Dirancang khusus untuk kebutuhan BUMN dan korporasi Indonesia'],
                benefit_en: ['Employee productivity significantly improved with one-stop platform', 'Transparency and accountability with complete audit trail', 'Regulatory compliance easier with structured documentation', 'New employee onboarding 60% faster', 'Designed specifically for Indonesian SOEs and corporations'],
                tags: ['SSO', 'Dashboard', 'RBAC', 'BUMN'],
                cocok_id: ['BUMN', 'Holding Group', 'Korporasi', 'Pemerintahan', 'Universitas'],
                cocok_en: ['SOE', 'Holding Group', 'Corporation', 'Government', 'University'],
                infographic: '/images/services/service-portal.jpg'
            },
            automation: {
                icon: 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
                color: 'cyan',
                title_id: 'AI Workflow Automation',
                title_en: 'AI Workflow Automation',
                definisi_id: 'AI Workflow Automation adalah sistem cerdas yang menggunakan kecerdasan buatan dan RPA (Robotic Process Automation) untuk mengidentifikasi, mendesain, dan mengeksekusi proses bisnis berulang secara otomatis — tanpa campur tangan manusia untuk tugas-tugas yang dapat diprediksi.',
                definisi_en: 'AI Workflow Automation is an intelligent system using artificial intelligence and RPA to identify, design, and execute repetitive business processes automatically — without human intervention for predictable tasks.',
                fungsi_id: ['Otomatisasi transfer data antar sistem via API integration', 'OCR cerdas untuk ekstraksi data dari dokumen fisik/digital', 'Automated approval workflow dengan routing berbasis aturan', 'Notifikasi dan escalation otomatis sesuai kondisi', 'Monitoring proses 24/7 dengan alert anomali real-time'],
                fungsi_en: ['Automated data transfer between systems via API integration', 'Intelligent OCR for data extraction from physical/digital documents', 'Automated approval workflow with rule-based routing', 'Automatic notifications and escalation based on conditions', '24/7 process monitoring with real-time anomaly alerts'],
                akibat_id: ['Rata-rata karyawan membuang 19% waktu untuk pekerjaan berulang', 'Human error akibat entry data manual yang berulang', 'Proses lambat karena harus menunggu tindakan manusia di setiap langkah', 'Biaya operasional tinggi akibat volume pekerjaan administratif', 'Tidak ada visibilitas terhadap status proses secara real-time'],
                akibat_en: ['Average employee wastes 19% of time on repetitive work', 'Human errors from repeated manual data entry', 'Slow processes waiting for human action at every step', 'High operational costs from administrative work volume', 'No real-time visibility into process status'],
                benefit_id: ['Pengurangan human error hingga 90%', 'Kecepatan pemrosesan 5-10x lebih cepat dari proses manual', 'Karyawan fokus pada pekerjaan bernilai tinggi, bukan admin', 'ROI terukur dan terbukti dalam 3-6 bulan', 'Sistem berjalan 24/7 tanpa overtime atau sakit'],
                benefit_en: ['Human error reduction up to 90%', 'Processing speed 5-10x faster than manual processes', 'Employees focus on high-value work, not admin', 'Measurable and proven ROI within 3-6 months', 'System runs 24/7 without overtime or sick days'],
                tags: ['RPA', 'API Integration', 'OCR', 'AI'],
                cocok_id: ['Logistik', 'Keuangan', 'Healthcare', 'Manufaktur', 'Ekspor-Impor'],
                cocok_en: ['Logistics', 'Finance', 'Healthcare', 'Manufacturing', 'Import-Export'],
                infographic: '/images/services/service-automation.jpg'
            },
            chatbot: {
                icon: 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z',
                color: 'emerald',
                title_id: 'Chatbot AI & Virtual Assistant',
                title_en: 'AI Chatbot & Virtual Assistant',
                definisi_id: 'Chatbot AI adalah agen percakapan cerdas berbasis Large Language Model (LLM) yang mampu memahami konteks, menjawab pertanyaan kompleks, dan melakukan tindakan nyata di sistem — melalui WhatsApp, Telegram, atau antarmuka web — layaknya staf customer service terbaik yang bekerja tanpa henti.',
                definisi_en: 'An AI Chatbot is an intelligent conversational agent based on Large Language Models (LLM) that understands context, answers complex questions, and takes real actions in systems — via WhatsApp, Telegram, or web interfaces — like your best customer service staff working non-stop.',
                fungsi_id: ['Menjawab pertanyaan pelanggan 24/7 tanpa jeda', 'Integrasi WhatsApp Business API untuk auto-reply profesional', 'Cek status pesanan, stok, dan informasi produk secara real-time', 'Eskalasi seamless ke agen manusia dengan transfer riwayat percakapan', 'Pengumpulan lead otomatis dari percakapan yang masuk'],
                fungsi_en: ['Answer customer questions 24/7 without breaks', 'WhatsApp Business API integration for professional auto-reply', 'Check order status, stock, and product information in real-time', 'Seamless escalation to human agents with conversation history transfer', 'Automatic lead collection from incoming conversations'],
                akibat_id: ['Respon pelanggan lambat (rata-rata 4+ jam) menyebabkan kehilangan deal', 'Tim customer service kewalahan dengan pertanyaan berulang', 'Tidak ada layanan di luar jam kerja padahal pelanggan aktif 24/7', 'Biaya CS tinggi namun kualitas layanan tidak konsisten', 'Lead dari WhatsApp tidak terdata dan sering terlewat'],
                akibat_en: ['Slow customer response (avg. 4+ hours) causes lost deals', 'Customer service team overwhelmed with repetitive questions', 'No service outside office hours but customers are active 24/7', 'High CS costs but inconsistent service quality', 'WhatsApp leads not recorded and often missed'],
                benefit_id: ['Respon instan < 3 detik untuk 80% pertanyaan pelanggan', 'Kepuasan pelanggan meningkat dengan layanan 24/7 tanpa delay', 'Biaya CS turun hingga 60% dengan otomatisasi pertanyaan rutin', 'Zero lead yang terlewat — semua percakapan terdata di CRM', 'Konsisten dan profesional di setiap interaksi'],
                benefit_en: ['Instant response < 3 seconds for 80% of customer questions', 'Customer satisfaction improved with 24/7 service without delay', 'CS costs reduced by up to 60% with routine question automation', 'Zero missed leads — all conversations recorded in CRM', 'Consistent and professional in every interaction'],
                tags: ['LLM', 'WhatsApp', '24/7', 'Customer Service'],
                cocok_id: ['E-Commerce', 'Perbankan', 'Asuransi', 'Retail', 'Properti', 'BUMN'],
                cocok_en: ['E-Commerce', 'Banking', 'Insurance', 'Retail', 'Property', 'SOE'],
                infographic: '/images/services/service-chatbot.jpg'
            },
            custom: {
                icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                color: 'amber',
                title_id: 'Custom Development & Konsultasi',
                title_en: 'Custom Development & Consulting',
                definisi_id: 'Custom Software Development adalah layanan pembuatan aplikasi web dan mobile yang dirancang khusus sesuai kebutuhan unik bisnis Anda — bukan solusi generik yang dipaksakan ke proses Anda. Didukung konsultasi IT strategis untuk memastikan setiap investasi teknologi menghasilkan ROI yang terukur.',
                definisi_en: 'Custom Software Development is a web and mobile application development service designed specifically for your unique business needs — not a generic solution forced onto your processes. Supported by strategic IT consulting to ensure every technology investment delivers measurable ROI.',
                fungsi_id: ['Pengembangan aplikasi web berbasis Laravel, React, atau Vue.js', 'Aplikasi mobile iOS & Android (React Native / Flutter)', 'Audit sistem IT dan rekomendasi modernisasi infrastruktur', 'API development dan integrasi sistem third-party', 'Konsultasi arsitektur teknologi dan technology roadmap'],
                fungsi_en: ['Web application development in Laravel, React, or Vue.js', 'iOS & Android mobile apps (React Native / Flutter)', 'IT system audit and infrastructure modernization recommendations', 'API development and third-party system integration', 'Technology architecture consulting and roadmap'],
                akibat_id: ['SaaS off-the-shelf memaksa bisnis menyesuaikan proses ke software, bukan sebaliknya', 'Biaya lisensi SaaS per-user terus membengkak seiring pertumbuhan bisnis', 'Fitur yang Anda butuhkan tidak ada, tapi vendor tidak mau custom', 'Sistem lama tidak bisa terintegrasi dan menciptakan data silo', 'Teknisi IT vendor tidak memahami konteks bisnis lokal Indonesia'],
                akibat_en: ['Off-the-shelf SaaS forces business to adapt processes to software, not the other way around', 'Per-user SaaS license costs keep growing with business', 'Features you need don\'t exist, but vendor won\'t customize', 'Old systems can\'t integrate, creating data silos', 'Vendor IT technicians don\'t understand local Indonesian business context'],
                benefit_id: ['Sistem yang benar-benar sesuai kebutuhan bisnis Anda, bukan kompromi', 'Keunggulan kompetitif yang tidak bisa ditiru pesaing dengan SaaS generik', 'Ownership penuh — tidak ada vendor lock-in atau biaya lisensi per-user', 'Tim yang memahami regulasi dan konteks bisnis Indonesia', 'Support & maintenance jangka panjang dari tim yang sama yang membangunnya'],
                benefit_en: ['System truly tailored to your business needs, no compromise', 'Competitive advantage that competitors can\'t replicate with generic SaaS', 'Full ownership — no vendor lock-in or per-user license fees', 'Team that understands Indonesian business regulations and context', 'Long-term support & maintenance from the same team that built it'],
                tags: ['Web', 'Mobile', 'API', 'Audit IT'],
                cocok_id: ['Semua Industri', 'Startup', 'UKM', 'Korporasi', 'Pemerintahan'],
                cocok_en: ['All Industries', 'Startups', 'SME', 'Corporations', 'Government'],
                infographic: '/images/services/service-custom.jpg'
            }
        },
        openService(key) {
            this.service = this.services[key];
            this.open = true;
            document.body.style.overflow = 'hidden';
        },
        close() {
            this.open = false;
            document.body.style.overflow = '';
        }
    }">

    <!-- Background accent -->
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/30 to-transparent"></div>
    <div class="absolute inset-0 grid-bg opacity-40 pointer-events-none"></div>

    <div class="container-max relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Layanan Kami</span>
                <span x-show="$store.locale === 'en'" x-cloak>Our Services</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-2 mb-4">
                <span x-show="$store.locale === 'id'">Komponen <span class="gradient-text">AI Business Brain</span></span>
                <span x-show="$store.locale === 'en'" x-cloak>Components of the <span class="gradient-text">AI Business Brain</span></span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Kami mengintegrasikan seluruh sistem operasional Anda ke dalam satu pusat saraf berbasis AI yang cerdas, scalable, dan berjalan secara otonom.</span>
                <span x-show="$store.locale === 'en'" x-cloak>We integrate all your core operational systems into a single AI-powered nerve center that is smart, scalable, and runs autonomously.</span>
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- 1. ERP -->
            <div data-testid="service-erp" class="scroll-reveal glass-card-hover p-8 group cursor-pointer" @click="openService('erp')">
                <div class="service-icon mb-6 group-hover:bg-cyan-500/15 group-hover:border-cyan-500/30 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">
                    <span x-show="$store.locale === 'id'">Sistem ERP</span>
                    <span x-show="$store.locale === 'en'" x-cloak>ERP System</span>
                </h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Enterprise Resource Planning terintegrasi untuk manajemen inventori, keuangan, SDM, dan operasional bisnis dalam satu platform cerdas.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Integrated ERP for inventory, finance, HR, and business operations management in one intelligent platform.</span>
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">Inventori</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">Keuangan</span>
                    </div>
                    <span class="text-xs text-cyan-400 flex items-center gap-1 group-hover:gap-2 transition-all">
                        <span x-show="$store.locale === 'id'">Selengkapnya</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Learn more</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </div>

            <!-- 2. CRM -->
            <div data-testid="service-crm" class="scroll-reveal glass-card-hover p-8 group cursor-pointer" @click="openService('crm')">
                <div class="service-icon mb-6 group-hover:bg-blue-500/15 group-hover:border-blue-500/30 transition-all" style="color:#2962ff; background:rgba(41,98,255,0.08); border-color:rgba(41,98,255,0.15)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">CRM</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Customer Relationship Management yang cerdas untuk meningkatkan retensi klien, pipeline penjualan, dan produktivitas tim penjualan Anda.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Intelligent CRM to improve client retention, sales pipeline, and your sales team's productivity.</span>
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-blue-500/8 border border-blue-500/20 text-blue-400">Pipeline</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-blue-500/8 border border-blue-500/20 text-blue-400">Analytics</span>
                    </div>
                    <span class="text-xs text-blue-400 flex items-center gap-1 group-hover:gap-2 transition-all">
                        <span x-show="$store.locale === 'id'">Selengkapnya</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Learn more</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </div>

            <!-- 3. Corporate Portal -->
            <div data-testid="service-portal" class="scroll-reveal glass-card-hover p-8 group cursor-pointer" @click="openService('portal')">
                <div class="service-icon mb-6" style="color:#7c3aed; background:rgba(124,58,237,0.08); border-color:rgba(124,58,237,0.15)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Corporate Portal</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Portal digital terpadu untuk korporasi dan BUMN: manajemen konten, layanan internal, dashboard eksekutif, dan integrasi sistem yang mulus.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Integrated digital portal for corporations and SOEs: content management, internal services, executive dashboards, and seamless system integration.</span>
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-violet-500/8 border border-violet-500/20 text-violet-400">SSO</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-violet-500/8 border border-violet-500/20 text-violet-400">RBAC</span>
                    </div>
                    <span class="text-xs text-violet-400 flex items-center gap-1 group-hover:gap-2 transition-all">
                        <span x-show="$store.locale === 'id'">Selengkapnya</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Learn more</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </div>

            <!-- 4. AI Workflow Automation -->
            <div data-testid="service-automation" class="scroll-reveal glass-card-hover p-8 group relative overflow-hidden cursor-pointer" @click="openService('automation')">
                <div class="absolute top-4 right-4 text-xs px-2.5 py-1 rounded-full bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 font-medium">AI</div>
                <div class="service-icon mb-6 group-hover:bg-cyan-500/15 group-hover:border-cyan-500/30 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">AI Workflow Automation</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Otomatisasi proses bisnis dengan kecerdasan buatan: integrasi API, pemrosesan dokumen otomatis, approval workflow, dan pengurangan human error hingga 90%.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Automate business processes with AI: API integration, automatic document processing, approval workflows, and reduce human error by up to 90%.</span>
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">RPA</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">OCR</span>
                    </div>
                    <span class="text-xs text-cyan-400 flex items-center gap-1 group-hover:gap-2 transition-all">
                        <span x-show="$store.locale === 'id'">Selengkapnya</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Learn more</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </div>

            <!-- 5. Chatbot AI -->
            <div data-testid="service-chatbot" class="scroll-reveal glass-card-hover p-8 group cursor-pointer" @click="openService('chatbot')">
                <div class="service-icon mb-6" style="color:#10b981; background:rgba(16,185,129,0.08); border-color:rgba(16,185,129,0.15)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">
                    <span x-show="$store.locale === 'id'">Chatbot AI &amp; Virtual Assistant</span>
                    <span x-show="$store.locale === 'en'" x-cloak>AI Chatbot &amp; Virtual Assistant</span>
                </h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Asisten virtual cerdas berbasis LLM untuk layanan pelanggan 24/7, auto-reply WhatsApp/Telegram, dan escalation ke agen manusia secara seamless.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Intelligent LLM-based virtual assistant for 24/7 customer service, WhatsApp/Telegram auto-reply, and seamless escalation to human agents.</span>
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-500/8 border border-emerald-500/20 text-emerald-400">LLM</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-500/8 border border-emerald-500/20 text-emerald-400">24/7</span>
                    </div>
                    <span class="text-xs text-emerald-400 flex items-center gap-1 group-hover:gap-2 transition-all">
                        <span x-show="$store.locale === 'id'">Selengkapnya</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Learn more</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </div>

            <!-- 6. Custom Dev & Consulting -->
            <div data-testid="service-custom" class="scroll-reveal glass-card-hover p-8 group cursor-pointer" @click="openService('custom')">
                <div class="service-icon mb-6" style="color:#f59e0b; background:rgba(245,158,11,0.08); border-color:rgba(245,158,11,0.15)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">
                    <span x-show="$store.locale === 'id'">Custom Development &amp; Konsultasi</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Custom Development &amp; Consulting</span>
                </h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Pengembangan aplikasi web &amp; mobile custom, audit sistem IT, konsultasi infrastruktur, dan rekomendasi teknologi yang tepat untuk bisnis Anda.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Custom web &amp; mobile app development, IT system audits, infrastructure consulting, and tailored technology recommendations.</span>
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex flex-wrap gap-2">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-amber-500/8 border border-amber-500/20 text-amber-400">Web</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-amber-500/8 border border-amber-500/20 text-amber-400">Mobile</span>
                    </div>
                    <span class="text-xs text-amber-400 flex items-center gap-1 group-hover:gap-2 transition-all">
                        <span x-show="$store.locale === 'id'">Selengkapnya</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Learn more</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </span>
                </div>
            </div>

        </div><!-- end services grid -->

        <!-- Trust Banner -->
        <div class="scroll-reveal mt-16 p-6 rounded-2xl border border-slate-800/60 bg-slate-900/30 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-white text-sm">
                        <span x-show="$store.locale === 'id'">Cocok untuk Korporasi, BUMN &amp; UKM Indonesia</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Built for Indonesian Corporations, SOEs &amp; SMEs</span>
                    </p>
                    <p class="text-slate-400 text-xs mt-1 font-body">
                        <span x-show="$store.locale === 'id'">Solusi kami dirancang sesuai regulasi dan kebutuhan bisnis lokal Indonesia, dengan tim support berbahasa Indonesia.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Our solutions are designed per Indonesian local business regulations and needs, with a Bahasa Indonesia support team.</span>
                    </p>
                </div>
            </div>
            <a href="#contact" class="flex-shrink-0 inline-flex items-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 text-sm font-bold rounded-xl transition-all duration-200 hover:shadow-lg hover:shadow-cyan-500/25 hover:-translate-y-0.5">
                <span x-show="$store.locale === 'id'">Diskusi Kebutuhan Anda</span>
                <span x-show="$store.locale === 'en'" x-cloak>Discuss Your Needs</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>

    {{-- ════ SERVICE DETAIL MODAL ════ --}}
    <div x-show="open" x-cloak
         class="fixed inset-0 z-[100] flex items-end md:items-center justify-center p-0 md:p-3 lg:p-5"
         @keydown.escape.window="close()">

        {{-- Backdrop --}}
        <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="close()"></div>

        {{-- Panel: bottom-sheet on mobile, centered dialog on desktop --}}
        <div class="relative z-10 w-full md:max-w-6xl bg-slate-900
                    rounded-t-2xl md:rounded-2xl
                    border-t border-slate-700/60 md:border
                    shadow-2xl flex flex-col
                    h-[92dvh] md:h-[90vh]"
             x-transition:enter="transition ease-out duration-250"
             x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
             @click.stop>

            {{-- Pull handle (mobile only) --}}
            <div class="md:hidden flex justify-center pt-2.5 pb-0 flex-shrink-0">
                <div class="w-10 h-1 rounded-full bg-slate-700"></div>
            </div>

            {{-- Header --}}
            <div class="flex-shrink-0 flex items-center justify-between px-5 md:px-7 py-4 md:py-5 border-b border-slate-800/60 bg-gradient-to-r from-slate-900 via-slate-900/95 to-slate-900">
                <template x-if="service">
                    <div class="flex items-center gap-3 md:gap-4">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-2xl flex items-center justify-center shadow-lg"
                             :class="{
                                'bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 shadow-cyan-500/10':       service.color === 'cyan',
                                'bg-blue-500/15 border border-blue-500/30 text-blue-400 shadow-blue-500/10':       service.color === 'blue',
                                'bg-violet-500/15 border border-violet-500/30 text-violet-400 shadow-violet-500/10': service.color === 'violet',
                                'bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 shadow-emerald-500/10': service.color === 'emerald',
                                'bg-amber-500/15 border border-amber-500/30 text-amber-400 shadow-amber-500/10':   service.color === 'amber',
                             }">
                            <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" :d="service.icon"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-[0.2em] text-slate-500 font-semibold mb-0.5">
                                <span x-show="$store.locale === 'id'">Layanan</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Service</span>
                            </p>
                            <h2 class="font-bold text-white text-base md:text-xl tracking-tight" x-text="$store.locale === 'id' ? service.title_id : service.title_en"></h2>
                        </div>
                    </div>
                </template>
                <button @click="close()" aria-label="Close" class="w-9 h-9 rounded-xl bg-slate-800 hover:bg-slate-700 border border-slate-700/60 flex items-center justify-center text-slate-400 hover:text-white transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            {{-- Body: stacked scroll on mobile, 3-panel side-by-side on desktop --}}
            <template x-if="service">
            <div class="flex-1 min-h-0 flex flex-col md:flex-row overflow-y-auto md:overflow-hidden">

                {{-- INFOGRAPHIC: compact top strip on mobile, full left panel on desktop --}}
                <div class="flex-shrink-0 h-52 md:h-auto md:w-[40%]
                            flex flex-col overflow-hidden cursor-zoom-in group/img
                            border-b md:border-b-0 md:border-r border-slate-800/60 bg-slate-950/70"
                     @click.stop="window.dispatchEvent(new CustomEvent('open-lightbox', { detail: { src: service.infographic, title: ($store.locale === 'id' ? service.title_id : service.title_en) } }))">
                    <div class="relative flex-1 m-3 rounded-xl overflow-hidden bg-white border border-slate-700/30">
                        <img :src="service.infographic" :alt="service.title_id"
                             class="w-full h-full object-contain object-center transition-transform duration-300 group-hover/img:scale-[1.02]"
                             x-on:error="$el.parentElement.style.display='none'">
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover/img:opacity-100 transition-opacity bg-black/20 rounded-xl">
                            <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-black/60 backdrop-blur-sm">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                <span class="text-white text-xs font-medium">Klik untuk zoom</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-xs text-slate-600 flex-shrink-0 pb-2 hidden md:block">Klik untuk memperbesar</p>
                </div>

                {{-- TEXT: single scroll on mobile, 2-col side-by-side on desktop --}}
                <div class="flex-1 min-h-0 flex flex-col md:flex-row md:overflow-hidden">

                    {{-- Col 1: Definisi + Fungsi + Cocok Untuk --}}
                    <div class="flex flex-col gap-5 px-5 md:px-7 py-5 md:py-7
                                md:flex-1 md:min-h-0 md:overflow-y-auto
                                border-b md:border-b-0 md:border-r border-slate-800/40">

                        {{-- DEFINISI --}}
                        <div>
                            <div class="flex items-center gap-2 mb-2.5">
                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-md"
                                      :class="{
                                        'bg-cyan-500/15 text-cyan-400': service.color === 'cyan',
                                        'bg-blue-500/15 text-blue-400': service.color === 'blue',
                                        'bg-violet-500/15 text-violet-400': service.color === 'violet',
                                        'bg-emerald-500/15 text-emerald-400': service.color === 'emerald',
                                        'bg-amber-500/15 text-amber-400': service.color === 'amber',
                                      }">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </span>
                                <h3 class="font-bold text-white text-[11px] md:text-xs uppercase tracking-[0.18em]">
                                    <span x-show="$store.locale === 'id'">Apa Itu?</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>What Is It?</span>
                                </h3>
                            </div>
                            <p class="text-slate-300 text-sm md:text-[15px] leading-relaxed font-body" x-text="$store.locale === 'id' ? service.definisi_id : service.definisi_en"></p>
                        </div>

                        <div class="h-px bg-gradient-to-r from-transparent via-slate-700/50 to-transparent"></div>

                        {{-- FUNGSI UTAMA --}}
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-md"
                                      :class="{
                                        'bg-cyan-500/15 text-cyan-400': service.color === 'cyan',
                                        'bg-blue-500/15 text-blue-400': service.color === 'blue',
                                        'bg-violet-500/15 text-violet-400': service.color === 'violet',
                                        'bg-emerald-500/15 text-emerald-400': service.color === 'emerald',
                                        'bg-amber-500/15 text-amber-400': service.color === 'amber',
                                      }">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </span>
                                <h3 class="font-bold text-white text-[11px] md:text-xs uppercase tracking-[0.18em]">
                                    <span x-show="$store.locale === 'id'">Fungsi Utama</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>Key Functions</span>
                                </h3>
                            </div>
                            <ul class="space-y-2.5">
                                <template x-for="(item, i) in ($store.locale === 'id' ? service.fungsi_id : service.fungsi_en)" :key="i">
                                    <li class="flex items-start gap-3 text-sm leading-relaxed text-slate-200 font-body">
                                        <span class="flex-shrink-0 mt-0.5 inline-flex items-center justify-center w-5 h-5 rounded-md text-[10px] font-bold"
                                              :class="{
                                                'bg-cyan-500/10 text-cyan-400 border border-cyan-500/25':   service.color === 'cyan',
                                                'bg-blue-500/10 text-blue-400 border border-blue-500/25':   service.color === 'blue',
                                                'bg-violet-500/10 text-violet-400 border border-violet-500/25': service.color === 'violet',
                                                'bg-emerald-500/10 text-emerald-400 border border-emerald-500/25': service.color === 'emerald',
                                                'bg-amber-500/10 text-amber-400 border border-amber-500/25': service.color === 'amber',
                                              }"
                                              x-text="(i+1).toString().padStart(2,'0')"></span>
                                        <span x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <div class="h-px bg-gradient-to-r from-transparent via-slate-700/50 to-transparent"></div>

                        {{-- Cocok Untuk --}}
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <svg class="w-4 h-4 flex-shrink-0"
                                     :class="{ 'text-cyan-400': service.color === 'cyan', 'text-blue-400': service.color === 'blue', 'text-violet-400': service.color === 'violet', 'text-emerald-400': service.color === 'emerald', 'text-amber-400': service.color === 'amber' }"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <h3 class="font-bold text-white text-[11px] md:text-xs uppercase tracking-[0.18em]">
                                    <span x-show="$store.locale === 'id'">Cocok Untuk Industri</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>Perfect For Industries</span>
                                </h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="(ind, i) in ($store.locale === 'id' ? service.cocok_id : service.cocok_en)" :key="i">
                                    <span class="text-xs px-3 py-1 rounded-full border font-medium"
                                          :class="{
                                            'bg-cyan-500/10 border-cyan-500/30 text-cyan-300': service.color === 'cyan',
                                            'bg-blue-500/10 border-blue-500/30 text-blue-300': service.color === 'blue',
                                            'bg-violet-500/10 border-violet-500/30 text-violet-300': service.color === 'violet',
                                            'bg-emerald-500/10 border-emerald-500/30 text-emerald-300': service.color === 'emerald',
                                            'bg-amber-500/10 border-amber-500/30 text-amber-300': service.color === 'amber',
                                          }"
                                          x-text="ind"></span>
                                </template>
                            </div>
                        </div>

                    </div>{{-- end col 1 --}}

                    {{-- Col 2: Tanpa Sistem + Manfaat + CTA --}}
                    <div class="flex flex-col gap-4 px-5 md:px-7 py-5 md:py-7
                                md:flex-1 md:min-h-0 md:overflow-y-auto bg-slate-950/40">

                        {{-- TANPA SISTEM --}}
                        <div class="rounded-xl border border-red-500/25 bg-gradient-to-br from-red-500/[0.07] to-rose-500/[0.04] p-4 md:p-5">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-red-500/15 text-red-400 border border-red-500/30">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                                </span>
                                <h3 class="font-bold text-red-300 text-[11px] md:text-xs uppercase tracking-[0.18em]">
                                    <span x-show="$store.locale === 'id'">Tanpa Sistem Ini, Anda…</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>Without This System, You…</span>
                                </h3>
                            </div>
                            <ul class="space-y-2">
                                <template x-for="(item, i) in ($store.locale === 'id' ? service.akibat_id : service.akibat_en)" :key="i">
                                    <li class="flex items-start gap-2.5 text-sm leading-relaxed text-red-100/80 font-body">
                                        <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-red-500/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>
                                        <span x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        {{-- MANFAAT --}}
                        <div class="rounded-xl border border-emerald-500/25 bg-gradient-to-br from-emerald-500/[0.07] to-teal-500/[0.04] p-4 md:p-5 md:flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-emerald-500/15 text-emerald-400 border border-emerald-500/30">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </span>
                                <h3 class="font-bold text-emerald-300 text-[11px] md:text-xs uppercase tracking-[0.18em]">
                                    <span x-show="$store.locale === 'id'">Manfaat yang Anda Dapatkan</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>Benefits You Get</span>
                                </h3>
                            </div>
                            <ul class="space-y-2">
                                <template x-for="(item, i) in ($store.locale === 'id' ? service.benefit_id : service.benefit_en)" :key="i">
                                    <li class="flex items-start gap-2.5 text-sm leading-relaxed text-emerald-50/85 font-body">
                                        <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                        <span x-text="item"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        {{-- CTA --}}
                        <div class="flex flex-col gap-2 flex-shrink-0 pt-1">
                            <a :href="'https://wa.me/6281399997132?text=' + encodeURIComponent('Halo Mora Bangun, saya tertarik dengan layanan ' + ($store.locale === 'id' ? service.title_id : service.title_en) + '. Mohon info lebih lanjut.')"
                               target="_blank" rel="noopener"
                               class="inline-flex items-center justify-center gap-2 w-full px-5 py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-sm rounded-xl transition-all hover:-translate-y-0.5 hover:shadow-xl hover:shadow-cyan-500/30">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                <span x-show="$store.locale === 'id'">Konsultasi Gratis via WhatsApp</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Free Consultation via WhatsApp</span>
                            </a>
                            <a href="#contact" @click="close()"
                               class="inline-flex items-center justify-center gap-2 w-full px-5 py-2.5 bg-slate-800/80 hover:bg-slate-700 border border-slate-700/60 hover:border-cyan-500/40 text-white font-semibold text-sm rounded-xl transition-all">
                                <span x-show="$store.locale === 'id'">Isi Form Kebutuhan</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Fill Inquiry Form</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>

                    </div>{{-- end col 2 --}}

                </div>{{-- end text --}}

            </div>{{-- end body --}}
            </template>

        </div>{{-- end panel --}}
    </div>{{-- end modal --}}


</section>
