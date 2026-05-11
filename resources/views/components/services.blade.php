<section id="services" class="section-padding relative bg-surface">
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
                <span x-show="$store.locale === 'id'">Solusi Lengkap untuk <span class="gradient-text">Bisnis Digital</span></span>
                <span x-show="$store.locale === 'en'" x-cloak>Complete Solutions for <span class="gradient-text">Digital Business</span></span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Dari kebutuhan internal hingga customer-facing, kami hadirkan platform IT yang scalable, terintegrasi, dan didukung kecerdasan buatan.</span>
                <span x-show="$store.locale === 'en'" x-cloak>From internal operations to customer-facing solutions, we deliver scalable, integrated IT platforms powered by artificial intelligence.</span>
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- 1. ERP -->
            <div data-testid="service-erp" class="scroll-reveal glass-card-hover p-8 group">
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
                    <span x-show="$store.locale === 'en'" x-cloak>Integrated Enterprise Resource Planning for inventory, finance, HR, and business operations management in one intelligent platform.</span>
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">
                        <span x-show="$store.locale === 'id'">Inventori</span><span x-show="$store.locale === 'en'" x-cloak>Inventory</span>
                    </span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">
                        <span x-show="$store.locale === 'id'">Keuangan</span><span x-show="$store.locale === 'en'" x-cloak>Finance</span>
                    </span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">HR</span>
                </div>
            </div>

            <!-- 2. CRM -->
            <div data-testid="service-crm" class="scroll-reveal glass-card-hover p-8 group">
                <div class="service-icon mb-6 group-hover:bg-cyan-500/15 group-hover:border-cyan-500/30 transition-all" style="color:#2962ff; background:rgba(41,98,255,0.08); border-color:rgba(41,98,255,0.15)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">CRM</h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Customer Relationship Management yang cerdas untuk meningkatkan retensi klien, pipeline penjualan, dan produktivitas tim penjualan Anda.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Intelligent Customer Relationship Management to improve client retention, sales pipeline, and your sales team's productivity.</span>
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs px-2.5 py-1 rounded-full bg-blue-500/8 border border-blue-500/20 text-blue-400">
                        <span x-show="$store.locale === 'id'">Pipeline</span><span x-show="$store.locale === 'en'" x-cloak>Pipeline</span>
                    </span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-blue-500/8 border border-blue-500/20 text-blue-400">Analytics</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-blue-500/8 border border-blue-500/20 text-blue-400">
                        <span x-show="$store.locale === 'id'">Notifikasi</span><span x-show="$store.locale === 'en'" x-cloak>Alerts</span>
                    </span>
                </div>
            </div>

            <!-- 3. Corporate Portal -->
            <div data-testid="service-portal" class="scroll-reveal glass-card-hover p-8 group">
                <div class="service-icon mb-6" style="color:#7c3aed; background:rgba(124,58,237,0.08); border-color:rgba(124,58,237,0.15)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">
                    <span x-show="$store.locale === 'id'">Corporate Portal</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Corporate Portal</span>
                </h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Portal digital terpadu untuk korporasi dan BUMN: manajemen konten, layanan internal, dashboard eksekutif, dan integrasi sistem yang mulus.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Integrated digital portal for corporations and SOEs: content management, internal services, executive dashboards, and seamless system integration.</span>
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs px-2.5 py-1 rounded-full bg-violet-500/8 border border-violet-500/20 text-violet-400">SSO</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-violet-500/8 border border-violet-500/20 text-violet-400">Dashboard</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-violet-500/8 border border-violet-500/20 text-violet-400">RBAC</span>
                </div>
            </div>

            <!-- 4. AI Workflow Automation -->
            <div data-testid="service-automation" class="scroll-reveal glass-card-hover p-8 group relative overflow-hidden">
                <!-- Featured badge -->
                <div class="absolute top-4 right-4 text-xs px-2.5 py-1 rounded-full bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 font-medium">AI</div>
                <div class="service-icon mb-6 group-hover:bg-cyan-500/15 group-hover:border-cyan-500/30 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">
                    <span x-show="$store.locale === 'id'">AI Workflow Automation</span>
                    <span x-show="$store.locale === 'en'" x-cloak>AI Workflow Automation</span>
                </h3>
                <p class="text-slate-400 text-sm leading-relaxed mb-5 font-body">
                    <span x-show="$store.locale === 'id'">Otomatisasi proses bisnis dengan kecerdasan buatan: integrasi API, pemrosesan dokumen otomatis, approval workflow, dan pengurangan human error hingga 90%.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Automate business processes with AI: API integration, automatic document processing, approval workflows, and reduce human error by up to 90%.</span>
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">RPA</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">
                        <span x-show="$store.locale === 'id'">Integrasi API</span><span x-show="$store.locale === 'en'" x-cloak>API Integration</span>
                    </span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-cyan-500/8 border border-cyan-500/20 text-cyan-400">OCR</span>
                </div>
            </div>

            <!-- 5. Chatbot AI -->
            <div data-testid="service-chatbot" class="scroll-reveal glass-card-hover p-8 group">
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
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-500/8 border border-emerald-500/20 text-emerald-400">LLM</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-500/8 border border-emerald-500/20 text-emerald-400">WhatsApp</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-500/8 border border-emerald-500/20 text-emerald-400">24/7</span>
                </div>
            </div>

            <!-- 6. Custom Dev & Consulting -->
            <div data-testid="service-custom" class="scroll-reveal glass-card-hover p-8 group">
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
                    <span x-show="$store.locale === 'en'" x-cloak>Custom web &amp; mobile app development, IT system audits, infrastructure consulting, and tailored technology recommendations for your business.</span>
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-xs px-2.5 py-1 rounded-full bg-amber-500/8 border border-amber-500/20 text-amber-400">Web</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-amber-500/8 border border-amber-500/20 text-amber-400">Mobile</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-amber-500/8 border border-amber-500/20 text-amber-400">
                        <span x-show="$store.locale === 'id'">Audit IT</span><span x-show="$store.locale === 'en'" x-cloak>IT Audit</span>
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
</section>
