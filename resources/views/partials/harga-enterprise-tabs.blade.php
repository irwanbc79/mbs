{{-- ── Enterprise pricing tabs content (ERP, CRM, Portal, AI) ── --}}
@php
    $services = [
        'erp' => [
            'color' => 'cyan',
            'name_id' => 'Sistem ERP',
            'name_en' => 'ERP System',
            'tagline_id' => 'Integrasikan operasional bisnis Anda dengan platform ERP komprehensif.',
            'tagline_en' => 'Integrate your business operations with a comprehensive ERP platform.',
            'tiers' => [
                [
                    'badge' => 'UMKM BASIC', 'price' => '15.000.000', 'price_from' => true,
                    'desc_id' => 'Solusi ERP untuk usaha kecil-menengah: manajemen inventori, pembelian, penjualan, akuntansi dasar.',
                    'desc_en' => 'ERP for SMEs: inventory, purchasing, sales, basic accounting.',
                    'features_id' => ['Manajemen Inventori & Gudang','Purchase Order & Vendor Management','Sales Order & Faktur Otomatis','Akuntansi Dasar (Jurnal, Neraca, L/R)','Laporan Stok & Penjualan','Maks. 5 user aktif','Training Tim 8 Jam','Setup di Server Klien'],
                    'features_en' => ['Inventory & Warehouse Management','Purchase Order & Vendor Management','Sales Order & Auto Invoicing','Basic Accounting (Journal, BS, P/L)','Stock & Sales Reports','Max 5 active users','Team Training 8 hours','Setup on Client Server'],
                    'target_id' => 'Usaha kecil-menengah, startup, toko/distributor (tim ≤ 10 orang)',
                    'target_en' => 'SMEs, startups, retailers (≤ 10 team members)',
                ],
                [
                    'badge' => 'SME PROFESSIONAL', 'featured' => true, 'price' => '30.000.000', 'price_from' => true,
                    'desc_id' => 'ERP untuk perusahaan menengah dengan HR, CRM, dan kustomisasi workflow.',
                    'desc_en' => 'ERP for mid-size firms with HR, CRM, and custom workflows.',
                    'features_id' => ['Semua modul UMKM Basic','HR & Payroll','CRM Terintegrasi','Multi-gudang & Multi-lokasi','Custom Workflow Approval','Notifikasi WhatsApp Otomatis','Dashboard Eksekutif Real-time','Maks. 20 user aktif'],
                    'features_en' => ['All UMKM Basic modules','HR & Payroll','Integrated CRM','Multi-warehouse & Multi-location','Custom Approval Workflow','Auto WhatsApp Notifications','Real-time Executive Dashboard','Max 20 active users'],
                    'target_id' => 'Perusahaan menengah, tim 10–50 orang dengan proses kompleks',
                    'target_en' => 'Mid-size firms, 10–50 employees with complex processes',
                ],
                [
                    'badge' => 'ENTERPRISE CUSTOM', 'price' => '75.000.000', 'price_from' => true,
                    'desc_id' => 'ERP sangat kustom untuk korporasi: multi-entitas, integrasi kompleks, modul custom.',
                    'desc_en' => 'Highly custom ERP for corporations: multi-entity, complex integrations, custom modules.',
                    'features_id' => ['Semua modul SME Professional','Multi-perusahaan & Multi-currency','Custom Modul Sesuai Proses Bisnis','Integrasi API: Bank, Marketplace, Pemerintah','Integrasi e-Faktur Pajak DJP','Dedicated Cloud Server','12 Bulan Support Priority','Source Code Ownership Penuh'],
                    'features_en' => ['All SME Professional modules','Multi-company & Multi-currency','Custom modules to fit your processes','API integrations: Bank, Marketplace, Gov','DJP e-Invoice integration','Dedicated Cloud Server','12-month Priority Support','Full Source Code Ownership'],
                    'target_id' => 'Korporasi, multi-entitas, multi-cabang dengan integrasi sistem kompleks',
                    'target_en' => 'Corporations, multi-entity, multi-branch with complex integrations',
                ],
            ],
        ],
        'crm' => [
            'color' => 'blue',
            'name_id' => 'CRM',
            'name_en' => 'CRM',
            'tagline_id' => 'Optimalkan interaksi pelanggan, kelola pipeline penjualan, dan tingkatkan loyalitas.',
            'tagline_en' => 'Optimize customer interactions, manage sales pipelines, and boost loyalty.',
            'tiers' => [
                [
                    'badge' => 'BASIC', 'price' => '8.000.000', 'price_from' => true,
                    'desc_id' => 'CRM dasar untuk pencatatan kontak, manajemen pipeline, dan reminder otomatis.',
                    'desc_en' => 'Basic CRM for contact records, pipeline management, and auto-reminders.',
                    'features_id' => ['Manajemen Kontak & Company','Pipeline Penjualan (Kanban Board)','Reminder Follow-up Otomatis','Integrasi WhatsApp (Klik-to-Chat)','Laporan Pipeline & Konversi','Import Kontak dari Excel','Maks. 5 user','Setup + 3 Bulan Support'],
                    'features_en' => ['Contact & Company Management','Sales Pipeline (Kanban)','Auto Follow-up Reminders','WhatsApp Integration (Click-to-Chat)','Pipeline & Conversion Reports','Excel Contact Import','Max 5 users','Setup + 3-month Support'],
                    'target_id' => 'Tim sales kecil 2–5 orang yang butuh pencatatan & follow-up terstruktur',
                    'target_en' => 'Small sales teams (2–5) needing structured records & follow-ups',
                ],
                [
                    'badge' => 'PROFESSIONAL', 'featured' => true, 'price' => '15.000.000', 'price_from' => true,
                    'desc_id' => 'CRM canggih dengan automation, email marketing, lead scoring, dan analytics mendalam.',
                    'desc_en' => 'Advanced CRM with automation, email marketing, lead scoring, and deep analytics.',
                    'features_id' => ['Semua fitur Basic','Email Marketing Automation','Lead Scoring & Segmentasi Otomatis','Funnel Analytics & Forecasting','Integrasi WhatsApp Business API','Activity Tracking (Call, Meeting, Email Log)','Dashboard Performa per Sales','Maks. 20 user'],
                    'features_en' => ['All Basic features','Email Marketing Automation','Auto Lead Scoring & Segmentation','Funnel Analytics & Forecasting','WhatsApp Business API Integration','Activity Tracking (Call, Meeting, Email)','Per-Sales Performance Dashboard','Max 20 users'],
                    'target_id' => 'Tim sales 5–20 orang yang butuh automation & analytics mendalam',
                    'target_en' => 'Sales teams of 5–20 needing automation & deep analytics',
                ],
                [
                    'badge' => 'ENTERPRISE', 'price' => '35.000.000', 'price_from' => true,
                    'desc_id' => 'CRM enterprise terintegrasi dengan ERP, custom pipeline, dan AI lead recommendation.',
                    'desc_en' => 'Enterprise CRM integrated with ERP, custom pipeline, and AI lead recommendation.',
                    'features_id' => ['Semua fitur Professional','Integrasi Penuh dengan ERP/Odoo/Accurate','Custom Pipeline per Produk/Divisi','Laporan Eksekutif Custom','Mobile App (Android/iOS)','Multi-Branch Management','AI-Powered Lead Recommendation','12 Bulan Support Priority'],
                    'features_en' => ['All Professional features','Full ERP/Odoo/Accurate Integration','Custom Pipeline per Product/Division','Custom Executive Reports','Mobile App (Android/iOS)','Multi-Branch Management','AI-Powered Lead Recommendation','12-month Priority Support'],
                    'target_id' => 'Perusahaan besar dengan kebutuhan integrasi ERP & custom workflow',
                    'target_en' => 'Large enterprises needing ERP integration & custom workflows',
                ],
            ],
        ],
        'portal' => [
            'color' => 'violet',
            'name_id' => 'Corporate Portal',
            'name_en' => 'Corporate Portal',
            'tagline_id' => 'Platform digital terpadu untuk informasi internal, layanan karyawan, dan dashboard eksekutif.',
            'tagline_en' => 'Unified digital platform for internal info, employee services, and executive dashboards.',
            'tiers' => [
                [
                    'badge' => 'STANDARD', 'price' => '25.000.000', 'price_from' => true,
                    'desc_id' => 'Portal internal untuk manajemen informasi, pengumuman, direktori, dan workflow dasar.',
                    'desc_en' => 'Internal portal for information management, announcements, directory, and basic workflows.',
                    'features_id' => ['Single Sign-On (SSO)','Role-Based Access Control (RBAC)','Manajemen Dokumen Internal','Pengumuman & Berita Perusahaan','Employee Directory','Request & Approval Workflow','Dashboard KPI per Departemen','Maks. 100 user'],
                    'features_en' => ['Single Sign-On (SSO)','Role-Based Access Control (RBAC)','Internal Document Management','Company Announcements & News','Employee Directory','Request & Approval Workflow','Department KPI Dashboard','Max 100 users'],
                    'target_id' => 'Perusahaan menengah yang butuh portal internal untuk informasi & layanan karyawan',
                    'target_en' => 'Mid-size firms needing an internal portal for info & employee services',
                ],
                [
                    'badge' => 'ADVANCED', 'featured' => true, 'price' => '50.000.000', 'price_from' => true,
                    'desc_id' => 'Portal korporat canggih dengan integrasi sistem, executive dashboard, dan employee self-service.',
                    'desc_en' => 'Advanced corporate portal with system integration, executive dashboard, and employee self-service.',
                    'features_id' => ['Semua fitur Standard','Executive Dashboard — Live Analytics Multi-Divisi','Integrasi ke HR/ERP/Akuntansi Existing','Employee Self-Service (Slip Gaji, Sertifikat)','Digital Approval Multi-Level','Customer Portal (Tracking Order & Status)','Multi-Kantor & Multi-Departemen','12 Bulan Support Priority'],
                    'features_en' => ['All Standard features','Executive Dashboard — Live Multi-Division Analytics','Integration to existing HR/ERP/Accounting','Employee Self-Service (Payslip, Certificates)','Multi-Level Digital Approval','Customer Portal (Order Tracking & Status)','Multi-Office & Multi-Department','12-month Priority Support'],
                    'target_id' => 'Korporasi multi-divisi atau BUMN yang butuh integrasi sistem & laporan eksekutif',
                    'target_en' => 'Multi-division corps or SOEs needing system integration & exec reports',
                ],
                [
                    'badge' => 'ENTERPRISE CUSTOM', 'price' => 'CUSTOM',
                    'desc_id' => 'Portal kustom untuk BUMN, holding, atau lembaga pemerintah dengan integrasi kompleks.',
                    'desc_en' => 'Custom portal for SOEs, holdings, or government agencies with complex integrations.',
                    'features_id' => ['Semua fitur Advanced','Arsitektur Microservices','Integrasi 5+ Sistem Eksternal','Compliance ISO 27001 / ISO 9001','Audit Trail Lengkap','High-Availability Hosting','Custom Branding & White-label','Dedicated Project Manager'],
                    'features_en' => ['All Advanced features','Microservices Architecture','5+ External System Integrations','ISO 27001 / ISO 9001 Compliance','Full Audit Trail','High-Availability Hosting','Custom Branding & White-label','Dedicated Project Manager'],
                    'target_id' => 'BUMN besar, holding korporasi, lembaga pemerintah',
                    'target_en' => 'Large SOEs, corporate holdings, government agencies',
                ],
            ],
        ],
        'chatbot' => [
            'color' => 'emerald',
            'name_id' => 'Chatbot AI & Virtual Assistant',
            'name_en' => 'AI Chatbot & Virtual Assistant',
            'tagline_id' => 'Layani pelanggan 24/7 tanpa henti — respon instan, zero lead terlewat, biaya CS turun hingga 60%.',
            'tagline_en' => 'Serve customers 24/7 without pause — instant response, zero missed leads, CS costs down by up to 60%.',
            'tiers' => [
                [
                    'badge' => 'STARTER CHATBOT', 'price' => '5.000.000', 'price_from' => true,
                    'desc_id' => 'Chatbot berbasis keyword untuk FAQ, auto-reply WhatsApp, dan notifikasi otomatis bisnis Anda.',
                    'desc_en' => 'Keyword-based chatbot for FAQ, WhatsApp auto-reply, and automatic business notifications.',
                    'features_id' => ['Auto-reply WhatsApp berbasis keyword & menu','FAQ otomatis hingga 50 pertanyaan umum','Jam operasional & info kontak otomatis','Notifikasi pesanan/konfirmasi otomatis','Transfer ke agen manusia via handoff','Laporan chat & jumlah interaksi harian','Setup + Training Tim','1 Channel (WhatsApp)'],
                    'features_en' => ['Keyword & menu-based WhatsApp auto-reply','Auto FAQ up to 50 common questions','Operating hours & contact info automation','Auto order/confirmation notifications','Handoff to human agents','Daily chat & interaction reports','Setup + Team Training','1 Channel (WhatsApp)'],
                    'target_id' => 'Bisnis kecil-menengah yang butuh auto-reply dasar & pengurangan beban CS',
                    'target_en' => 'SMEs needing basic auto-reply & CS load reduction',
                ],
                [
                    'badge' => 'PROFESSIONAL AI', 'featured' => true, 'price' => '12.000.000', 'price_from' => true,
                    'desc_id' => 'Chatbot berbasis LLM yang memahami konteks percakapan, menangkap lead, dan terintegrasi ke sistem bisnis.',
                    'desc_en' => 'LLM-based chatbot that understands conversation context, captures leads, and integrates with business systems.',
                    'features_id' => ['Semua fitur Starter Chatbot','AI berbasis LLM (pemahaman konteks bebas)','Integrasi WhatsApp Business API resmi','Lead capture otomatis → simpan ke spreadsheet/CRM','Cek stok & status pesanan real-time','Multi-topik: CS, penjualan, support teknis','Eskalasi seamless ke agen manusia + riwayat chat','Maks. 3 Channel (WA, Telegram, Web)'],
                    'features_en' => ['All Starter Chatbot features','LLM-based AI (free-form context understanding)','Official WhatsApp Business API integration','Auto lead capture → save to spreadsheet/CRM','Real-time stock & order status check','Multi-topic: CS, sales, tech support','Seamless escalation to human agent + chat history','Max 3 Channels (WA, Telegram, Web)'],
                    'target_id' => 'Bisnis dengan volume chat tinggi yang butuh AI percakapan canggih & lead capture',
                    'target_en' => 'High-volume businesses needing advanced conversational AI & lead capture',
                ],
                [
                    'badge' => 'ENTERPRISE AI AGENT', 'price' => 'CUSTOM',
                    'desc_id' => 'AI agent kustom yang terintegrasi penuh ke ERP/CRM, mampu memproses transaksi, dan beroperasi multi-platform.',
                    'desc_en' => 'Custom AI agent fully integrated with ERP/CRM, capable of processing transactions, multi-platform operation.',
                    'features_id' => ['Semua fitur Professional AI','Custom knowledge base dari dokumen perusahaan','Integrasi penuh ke ERP, CRM, & akuntansi','Pemrosesan transaksi langsung via chat','AI multi-bahasa (Indonesia, Inggris, daerah)','Dashboard monitoring percakapan real-time','Custom persona & voice brand perusahaan','12 Bulan Support Priority + Fine-tuning'],
                    'features_en' => ['All Professional AI features','Custom knowledge base from company documents','Full ERP, CRM & accounting integration','Direct transaction processing via chat','Multi-language AI (Indonesian, English, regional)','Real-time conversation monitoring dashboard','Custom persona & company brand voice','12-month Priority Support + Fine-tuning'],
                    'target_id' => 'Korporasi, BUMN, & e-commerce dengan kebutuhan AI agent kompleks & multi-sistem',
                    'target_en' => 'Corporations, SOEs & e-commerce with complex multi-system AI agent needs',
                ],
            ],
        ],
        'custom' => [
            'color' => 'amber',
            'name_id' => 'Custom Development & Konsultasi',
            'name_en' => 'Custom Development & Consulting',
            'tagline_id' => 'Sistem yang benar-benar sesuai bisnis Anda — bukan kompromi. Ownership penuh, tanpa vendor lock-in.',
            'tagline_en' => 'A system truly built for your business — no compromise. Full ownership, no vendor lock-in.',
            'tiers' => [
                [
                    'badge' => 'WEB MVP', 'price' => '15.000.000', 'price_from' => true,
                    'desc_id' => 'Aplikasi web custom untuk satu proses bisnis spesifik: manajemen data, form digital, atau dashboard sederhana.',
                    'desc_en' => 'Custom web app for one specific business process: data management, digital forms, or simple dashboard.',
                    'features_id' => ['Analisis kebutuhan & wireframe','Aplikasi web custom (Laravel)','Hingga 10 fitur / modul','CRUD lengkap + manajemen user','Role & permission (RBAC)','Responsive & mobile-friendly','Deployment di server klien','3 Bulan Support & Bug-fix'],
                    'features_en' => ['Needs analysis & wireframe','Custom web application (Laravel)','Up to 10 features / modules','Full CRUD + user management','Role & permission (RBAC)','Responsive & mobile-friendly','Deployment on client server','3-month Support & Bug-fix'],
                    'target_id' => 'UMKM, startup, atau departemen yang butuh satu aplikasi spesifik cepat',
                    'target_en' => 'SMEs, startups, or departments needing one specific app quickly',
                ],
                [
                    'badge' => 'FULL SYSTEM', 'featured' => true, 'price' => '35.000.000', 'price_from' => true,
                    'desc_id' => 'Sistem bisnis lengkap multi-modul dengan integrasi API, mobile-ready, dan panel admin komprehensif.',
                    'desc_en' => 'Full multi-module business system with API integrations, mobile-ready, and comprehensive admin panel.',
                    'features_id' => ['Semua fitur Web MVP','Multi-modul terintegrasi (tidak terbatas)','REST API + integrasi ke sistem 3rd party','Progressive Web App (PWA) / Mobile-ready','Dashboard analytics & laporan eksekutif','Notifikasi WhatsApp & Email otomatis','CI/CD pipeline + staging environment','6 Bulan Support & Maintenance'],
                    'features_en' => ['All Web MVP features','Integrated multi-modules (unlimited)','REST API + 3rd party system integrations','Progressive Web App (PWA) / Mobile-ready','Analytics dashboard & executive reports','Auto WhatsApp & Email notifications','CI/CD pipeline + staging environment','6-month Support & Maintenance'],
                    'target_id' => 'Perusahaan menengah yang butuh sistem bisnis terintegrasi penuh, bukan solusi partial',
                    'target_en' => 'Mid-size companies needing a fully integrated business system, not a partial solution',
                ],
                [
                    'badge' => 'ENTERPRISE CUSTOM', 'price' => 'CUSTOM',
                    'desc_id' => 'Pengembangan kustom skala enterprise: aplikasi web+mobile, audit IT, konsultasi arsitektur, dan technology roadmap.',
                    'desc_en' => 'Enterprise-scale custom development: web+mobile apps, IT audit, architecture consulting, and technology roadmap.',
                    'features_id' => ['Semua fitur Full System','Mobile App iOS & Android (React Native/Flutter)','Audit sistem IT & rekomendasi modernisasi','Konsultasi arsitektur teknologi & roadmap','Integrasi ERP/Odoo/Accurate & marketplace','Dedicated Cloud Server + CDN','Source Code Ownership Penuh','12 Bulan Support Priority + Dedicated PM'],
                    'features_en' => ['All Full System features','iOS & Android Mobile App (React Native/Flutter)','IT system audit & modernization recommendations','Technology architecture consulting & roadmap','ERP/Odoo/Accurate & marketplace integrations','Dedicated Cloud Server + CDN','Full Source Code Ownership','12-month Priority Support + Dedicated PM'],
                    'target_id' => 'Korporasi & lembaga yang butuh solusi custom end-to-end dengan konsultasi IT strategis',
                    'target_en' => 'Corporations & institutions needing end-to-end custom solutions with strategic IT consulting',
                ],
            ],
        ],
        'ai' => [
            'color' => 'amber',
            'name_id' => 'AI Workflow Automation',
            'name_en' => 'AI Workflow Automation',
            'tagline_id' => 'Otomatisasi proses bisnis repetitif dengan AI untuk efisiensi dan akurasi maksimal.',
            'tagline_en' => 'Automate repetitive processes with AI for maximum efficiency and accuracy.',
            'tiers' => [
                [
                    'badge' => 'SIMPLE WORKFLOW', 'price' => '8.000.000', 'price_from' => true,
                    'desc_id' => 'Otomatisasi sederhana: OCR dokumen, auto-reply, notifikasi otomatis.',
                    'desc_en' => 'Simple automation: document OCR, auto-reply, auto-notifications.',
                    'features_id' => ['Auto-reply WhatsApp Berdasarkan Keyword','OCR Invoice/Kuitansi → Spreadsheet/Sistem','Notifikasi Otomatis Saat Transaksi','Pengiriman Laporan Harian/Mingguan Otomatis','Sinkronisasi Data Antar Spreadsheet/Form','Auto-Reminder Tagihan Jatuh Tempo','Setup Tools Automation','Testing & Deployment'],
                    'features_en' => ['Keyword-based WhatsApp Auto-Reply','Invoice/Receipt OCR → Spreadsheet/System','Auto-Notifications on Transactions','Auto Daily/Weekly Reports','Cross-Spreadsheet/Form Sync','Auto-Reminders for Due Bills','Automation Tools Setup','Testing & Deployment'],
                    'target_id' => '1–3 proses bisnis yang ingin diotomasi, kompleksitas rendah',
                    'target_en' => '1–3 processes to automate, low complexity',
                ],
                [
                    'badge' => 'MEDIUM COMPLEXITY', 'featured' => true, 'price' => '18.000.000', 'price_from' => true,
                    'desc_id' => 'Otomasi multi-flow dengan API integration, RPA, dan monitoring dashboard.',
                    'desc_en' => 'Multi-flow automation with API integration, RPA, and monitoring dashboard.',
                    'features_id' => ['Semua fitur Simple Workflow','RPA: Otomasi Pengisian Form Web/Sistem Lama','OCR Multi-Dokumen + Validasi + Routing Approval','Integrasi API Marketplace','Pipeline Data: Extract → Transform → Load','Monitoring Dashboard Real-time','Error Handling & Alert System','Integrasi ke ERP/CRM Existing'],
                    'features_en' => ['All Simple Workflow features','RPA: Auto-fill Web/Legacy Forms','Multi-Doc OCR + Validation + Approval Routing','Marketplace API Integration','Data Pipeline: Extract → Transform → Load','Real-time Monitoring Dashboard','Error Handling & Alert System','Integration to existing ERP/CRM'],
                    'target_id' => 'Multi-flow automation dengan API integration & monitoring',
                    'target_en' => 'Multi-flow automation with API integration & monitoring',
                ],
                [
                    'badge' => 'ENTERPRISE AI', 'price' => 'CUSTOM',
                    'desc_id' => 'Automation end-to-end yang sangat kustom dengan AI decision-making.',
                    'desc_en' => 'Highly custom end-to-end automation with AI decision-making.',
                    'features_id' => ['AI-Powered Document Classification & Extraction','Intelligent Process Automation (IPA)','Predictive Analytics & Anomaly Detection','Multi-Sistem Orchestration (ERP + CRM + Marketplace)','Custom ML Model untuk Kebutuhan Spesifik','Real-time Monitoring & Self-Healing Workflows','Full Consulting & Implementation','Dedicated Support'],
                    'features_en' => ['AI-Powered Document Classification & Extraction','Intelligent Process Automation (IPA)','Predictive Analytics & Anomaly Detection','Multi-System Orchestration (ERP + CRM + Marketplace)','Custom ML Model for Specific Needs','Real-time Monitoring & Self-Healing','Full Consulting & Implementation','Dedicated Support'],
                    'target_id' => 'Sistem automation kompleks dengan AI decision-making & multi-sistem integration',
                    'target_en' => 'Complex automation systems with AI decision-making & multi-system integration',
                ],
            ],
        ],
        'moratrade' => [
            'color' => 'cyan',
            'name_id' => 'MoraTrade AI',
            'name_en' => 'MoraTrade AI',
            'tagline_id' => 'Otomasi Pabean & Logistik H2H Bea Cukai (CEISA 4.0, AI OCR, & Shipment Tracking).',
            'tagline_en' => 'Customs & Logistics H2H Bea Cukai Automation (CEISA 4.0, AI OCR, & Shipment Tracking).',
            'tiers' => [
                [
                    'badge' => 'CUSTOMS AI LITE', 'price' => '25.000.000', 'price_from' => true,
                    'desc_id' => 'Ekstraksi dokumen pabean otomatis (OCR) & pembuatan draf PIB/PEB siap kirim.',
                    'desc_en' => 'Auto customs document extraction (OCR) & ready-to-submit PIB/PEB draft generation.',
                    'features_id' => [
                        'AI OCR Invoice & Packing List',
                        'Draft PIB / PEB Generator',
                        'HS Code database & tariff calculation',
                        'Export data ke excel / XML pabean',
                        'Maks. 3 user aktif',
                        'Training & Setup Dasar'
                    ],
                    'features_en' => [
                        'AI OCR Invoice & Packing List',
                        'Draft PIB / PEB Generator',
                        'HS Code database & tariff calculation',
                        'Export data to excel / customs XML',
                        'Max 3 active users',
                        'Training & Basic Setup'
                    ],
                    'target_id' => 'PPJK kecil, Importir/Eksportir pemula (kargo ≤ 20 shipment/bulan)',
                    'target_en' => 'Small PPJK, beginner importers/exporters (≤ 20 shipments/month)',
                ],
                [
                    'badge' => 'CEISA H2H SUITE', 'featured' => true, 'price' => '65.000.000', 'price_from' => true,
                    'desc_id' => 'Integrasi API Host-to-Host langsung ke gateway CEISA Bea Cukai dengan AI Compliance Guard.',
                    'desc_en' => 'Direct API Host-to-Host integration to CEISA Bea Cukai gateway with AI Compliance Guard.',
                    'features_id' => [
                        'Semua fitur Customs AI Lite',
                        'Koneksi API H2H Bea Cukai (openapi.beacukai.go.id)',
                        'AI Compliance Guard (Pre-submit Validator)',
                        'Auto-Submit PIB / PEB ke CEISA 4.0',
                        'Sync status respon DJBC (SPJM, SPPB, NPE)',
                        'Notifikasi otomatis WhatsApp/email ke klien',
                        'Maks. 15 user aktif',
                        'Setup Security & SSL VPN Bea Cukai'
                    ],
                    'features_en' => [
                        'All Customs AI Lite features',
                        'Direct CEISA H2H API connection',
                        'AI Compliance Guard (Pre-submit Validator)',
                        'Auto-Submit PIB / PEB to CEISA 4.0',
                        'DJP status sync (SPJM, SPPB, NPE)',
                        'Auto WhatsApp/email notifications to clients',
                        'Max 15 active users',
                        'Setup Security & SSL VPN Bea Cukai'
                    ],
                    'target_id' => 'Freight Forwarder menengah, PPJK besar, Perusahaan dagang/trading aktif',
                    'target_en' => 'Mid-size Freight Forwarders, large PPJK, active trading companies',
                ],
                [
                    'badge' => 'CUSTOMS ENTERPRISE', 'price' => 'CUSTOM',
                    'desc_id' => 'Sistem pabean & logistik custom terintegrasi penuh ke Core ERP/WMS perusahaan.',
                    'desc_en' => 'Custom customs & logistics system fully integrated to company\'s Core ERP/WMS.',
                    'features_id' => [
                        'Semua fitur CEISA H2H Suite',
                        'Integrasi penuh ke SAP / Oracle / Odoo existing',
                        'Custom workflow multi-cabang & multi-entitas',
                        'AI-Powered Intelligent Duty Optimization',
                        'Dedicated VM/Server Hosting',
                        'SLA Response & Support 24/7',
                        'Source Code Ownership Penuh',
                        'Dedicated Account Manager'
                    ],
                    'features_en' => [
                        'All CEISA H2H Suite features',
                        'Full integration to existing SAP / Oracle / Odoo',
                        'Multi-branch & multi-entity custom workflows',
                        'AI-Powered Intelligent Duty Optimization',
                        'Dedicated VM/Server Hosting',
                        '24/7 SLA Response & Support',
                        'Full Source Code Ownership',
                        'Dedicated Account Manager'
                    ],
                    'target_id' => 'Distributor multinasional, BUMN logistik, Kawasan Berikat/TPB besar',
                    'target_en' => 'Multinational distributors, logistics SOEs, large Bonded Zones',
                ],
            ],
        ],
    ];
@endphp

@foreach($services as $svcKey => $svc)
    <div x-show="activeTab === '{{ $svcKey }}'" x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-3"
         x-transition:enter-end="opacity-100 translate-y-0">

        {{-- Tagline --}}
        <p class="text-center text-base md:text-lg text-{{ $svc['color'] }}-300/90 mb-8 max-w-3xl mx-auto font-body italic">
            <span x-show="$store.locale === 'id'">"{{ $svc['tagline_id'] }}"</span>
            <span x-show="$store.locale === 'en'" x-cloak>"{{ $svc['tagline_en'] }}"</span>
        </p>

        {{-- Tier cards --}}
        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            @foreach($svc['tiers'] as $tier)
                @php $featured = $tier['featured'] ?? false; @endphp
                <div class="relative rounded-2xl border p-6 md:p-7 flex flex-col bg-slate-900/40 backdrop-blur-sm transition-all duration-300 hover:-translate-y-1
                            {{ $featured
                                ? 'border-'.$svc['color'].'-500/50 shadow-xl shadow-'.$svc['color'].'-500/10'
                                : 'border-slate-800/60 hover:border-'.$svc['color'].'-500/30' }}">

                    @if($featured)
                        <span class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 rounded-full bg-{{ $svc['color'] }}-500 text-slate-950 text-[10px] font-black uppercase tracking-widest shadow-lg shadow-{{ $svc['color'] }}-500/30 whitespace-nowrap">
                            <span x-show="$store.locale === 'id'">Paling Populer</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Most Popular</span>
                        </span>
                    @endif

                    {{-- Badge & Price --}}
                    <div class="mb-5">
                        <span class="inline-block text-[10px] font-bold tracking-[0.2em] px-2.5 py-1 rounded-md bg-{{ $svc['color'] }}-500/10 text-{{ $svc['color'] }}-300 border border-{{ $svc['color'] }}-500/25 mb-4">{{ $tier['badge'] }}</span>
                        <div class="flex items-end gap-2 flex-wrap">
                            @if($tier['price'] === 'CUSTOM')
                                <span class="text-3xl md:text-4xl font-black text-white tracking-tight">Custom</span>
                                <span class="text-xs text-slate-500 mb-1.5">
                                    <span x-show="$store.locale === 'id'">sesuai scope</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>scope-based</span>
                                </span>
                            @else
                                @if($tier['price_from'] ?? false)
                                    <span class="text-xs text-slate-500 mb-2">
                                        <span x-show="$store.locale === 'id'">mulai</span>
                                        <span x-show="$store.locale === 'en'" x-cloak>from</span>
                                    </span>
                                @endif
                                <span class="text-sm font-semibold text-slate-400 mb-2">Rp</span>
                                <span class="text-3xl md:text-4xl font-black text-white tracking-tight">{{ $tier['price'] }}</span>
                            @endif
                        </div>
                    </div>

                    {{-- Description --}}
                    <p class="text-sm text-slate-400 leading-relaxed mb-5 font-body">
                        <span x-show="$store.locale === 'id'">{{ $tier['desc_id'] }}</span>
                        <span x-show="$store.locale === 'en'" x-cloak>{{ $tier['desc_en'] }}</span>
                    </p>

                    {{-- Features --}}
                    <ul class="space-y-2.5 mb-6 flex-1">
                        @foreach($tier['features_id'] as $i => $f_id)
                            <li class="flex items-start gap-2.5 text-sm text-slate-300 font-body">
                                <svg class="w-4 h-4 flex-shrink-0 mt-0.5 text-{{ $svc['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                <span>
                                    <span x-show="$store.locale === 'id'">{{ $f_id }}</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>{{ $tier['features_en'][$i] ?? $f_id }}</span>
                                </span>
                            </li>
                        @endforeach
                    </ul>

                    {{-- Target --}}
                    <div class="text-[11px] text-slate-500 italic mb-5 leading-relaxed border-t border-slate-800/60 pt-3">
                        <span class="font-semibold text-slate-400 not-italic">
                            <span x-show="$store.locale === 'id'">Cocok untuk:</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Perfect for:</span>
                        </span>
                        <span x-show="$store.locale === 'id'">{{ $tier['target_id'] }}</span>
                        <span x-show="$store.locale === 'en'" x-cloak>{{ $tier['target_en'] }}</span>
                    </div>

                    {{-- WhatsApp Prefill CTA --}}
                    @php
                        $waText = 'Halo Mora Bangun, saya tertarik dengan Paket ' . $tier['badge'] . ' untuk layanan ' . $svc['name_id'] .
                            ($tier['price'] !== 'CUSTOM' ? ' (mulai Rp ' . $tier['price'] . ')' : ' (custom scope)') .
                            '. Mohon info lebih lanjut.';
                        $waUrl = 'https://wa.me/6281399997132?text=' . rawurlencode($waText);
                    @endphp
                    <a href="{{ $waUrl }}"
                       target="_blank" rel="noopener noreferrer"
                       data-testid="cta-{{ $svcKey }}-{{ \Illuminate\Support\Str::slug($tier['badge']) }}"
                       class="inline-flex items-center justify-center gap-2 w-full px-5 py-3 rounded-xl font-bold text-sm transition-all hover:-translate-y-0.5
                              {{ $featured
                                ? 'bg-'.$svc['color'].'-500 hover:bg-'.$svc['color'].'-400 text-slate-950 shadow-lg shadow-'.$svc['color'].'-500/30 hover:shadow-'.$svc['color'].'-500/50'
                                : 'bg-slate-800/80 hover:bg-slate-700 border border-slate-700/60 hover:border-'.$svc['color'].'-500/40 text-white' }}">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        <span x-show="$store.locale === 'id'">Pesan via WhatsApp</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Order via WhatsApp</span>
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Disclaimer --}}
        <p class="mt-8 text-xs text-slate-500 text-center max-w-2xl mx-auto leading-relaxed">
            <svg class="inline w-3.5 h-3.5 text-amber-500/70 mr-1 -mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-.001v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
            <span x-show="$store.locale === 'id'">Harga adalah <em>estimasi mulai</em>; harga final disesuaikan dengan kompleksitas, integrasi, dan jumlah user yang dibutuhkan.</span>
            <span x-show="$store.locale === 'en'" x-cloak>Prices shown are <em>starting estimates</em>; final price depends on complexity, integrations, and user count.</span>
        </p>

    </div>
@endforeach
