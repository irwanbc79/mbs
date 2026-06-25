<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-surface">
    <!-- Animated grid background -->
    <div class="absolute inset-0 grid-bg pointer-events-none"></div>

    <!-- Ambient glow orbs -->
    <div class="absolute top-1/4 left-0 w-[500px] h-[500px] bg-cyan-500/4 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-1/3 right-0 w-[400px] h-[400px] bg-blue-600/4 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-0 right-1/4 w-64 h-64 bg-violet-600/4 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 w-full container-max px-6 lg:px-24 pt-24 pb-16">
        <div class="grid lg:grid-cols-2 gap-10 xl:gap-20 items-center">

            <!-- ========== LEFT: CONTENT ========== -->
            <div class="space-y-8 lg:space-y-10">

                <!-- Badge -->
                <div data-testid="hero-badge" class="scroll-reveal inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-cyan-500/25 bg-cyan-500/5 text-sm">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                    <span class="text-cyan-400 font-medium text-xs tracking-wide">
                        <span x-show="$store.locale === 'id'">AI Operating System &bull; Transformasi Bisnis Otonom</span>
                        <span x-show="$store.locale === 'en'" x-cloak>AI Operating System &bull; Autonomous Business Transformation</span>
                    </span>
                </div>

                <!-- Headline -->
                <div class="scroll-reveal">
                    <h1 class="text-5xl md:text-6xl font-bold leading-[1.1] tracking-tight">
                        <span x-show="$store.locale === 'id'">
                            Sistem Operasi AI<br>
                            Untuk Bisnis yang<br>
                            <span class="gradient-text">Berjalan Otonom</span>
                        </span>
                        <span x-show="$store.locale === 'en'" x-cloak>
                            Building AI<br>
                            Operating Systems<br>
                            For <span class="gradient-text">Autonomous Business</span>
                        </span>
                    </h1>
                </div>

                <!-- Subtext -->
                <p class="scroll-reveal text-lg text-slate-400 leading-relaxed max-w-xl font-body">
                    <span x-show="$store.locale === 'id'">
                        Kami mentransformasi bisnis tradisional menjadi bertenaga AI dengan membangun <strong class="text-white font-semibold">AI Business Brain</strong>—sistem yang tidak hanya menjawab pertanyaan, tetapi aktif menjalankan operasional Anda.
                    </span>
                    <span x-show="$store.locale === 'en'" x-cloak>
                        We transform traditional businesses into AI-powered companies by building the <strong class="text-white font-semibold">AI Business Brain</strong>—operating systems that don't just answer questions, but run your business.
                    </span>
                </p>

                <!-- CTA Buttons -->
                <div class="scroll-reveal flex flex-wrap gap-4">
                    <a href="#contact"
                       data-testid="hero-cta-primary"
                       class="inline-flex items-center gap-2.5 px-8 py-4 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl transition-all duration-300 hover:shadow-xl hover:shadow-cyan-500/30 hover:-translate-y-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span x-show="$store.locale === 'id'">Konsultasi Gratis</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Free Consultation</span>
                    </a>
                    <a href="#portfolio"
                       data-testid="hero-cta-secondary"
                       class="inline-flex items-center gap-2.5 px-8 py-4 border border-slate-700 hover:border-cyan-500/50 text-slate-300 hover:text-white font-semibold rounded-xl transition-all duration-300 hover:-translate-y-1 hover:bg-white/3">
                        <span x-show="$store.locale === 'id'">Lihat Portfolio</span>
                        <span x-show="$store.locale === 'en'" x-cloak>View Portfolio</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Stats Row -->
                <div class="animate-visible grid grid-cols-2 sm:grid-cols-4 gap-4 pt-6 border-t border-slate-800/60">
                    <div>
                        <div class="text-3xl font-bold text-white" data-counter="50" data-suffix="+">50+</div>
                        <div class="text-xs text-slate-500 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Proyek Selesai</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Projects Done</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-cyan-400" data-counter="25" data-suffix="+">25+</div>
                        <div class="text-xs text-slate-500 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Klien Aktif</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Active Clients</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-blue-400" data-counter="6">6</div>
                        <div class="text-xs text-slate-500 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Layanan Utama</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Core Services</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-violet-400">AI</div>
                        <div class="text-xs text-slate-500 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Smart Solutions</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Smart Solutions</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== RIGHT: AI ECOSYSTEM ANIMATION ========== -->
            <div class="scroll-reveal hidden lg:flex items-center justify-center relative">
                <!-- Ambient glow -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-96 h-96 rounded-full bg-cyan-500/5 blur-3xl"></div>
                    <div class="absolute w-64 h-64 rounded-full bg-violet-600/5 blur-2xl"></div>
                </div>

                <div class="relative w-full max-w-[540px]">
                    <svg viewBox="0 0 540 420" class="w-full h-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <!-- Hub glow -->
                            <filter id="hub-glow" x="-60%" y="-60%" width="220%" height="220%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur1"/>
                                <feGaussianBlur in="SourceGraphic" stdDeviation="3"  result="blur2"/>
                                <feMerge><feMergeNode in="blur1"/><feMergeNode in="blur2"/><feMergeNode in="SourceGraphic"/></feMerge>
                            </filter>
                            <!-- Node glow -->
                            <filter id="nd-glow" x="-50%" y="-50%" width="200%" height="200%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"/>
                                <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                            </filter>
                            <!-- Packet glow -->
                            <filter id="pk-glow" x="-200%" y="-200%" width="500%" height="500%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur"/>
                                <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                            </filter>
                            <!-- Radial gradients -->
                            <radialGradient id="bg-glow" cx="50%" cy="50%" r="50%">
                                <stop offset="0%"   stop-color="#00e5ff" stop-opacity="0.07"/>
                                <stop offset="100%" stop-color="#00e5ff" stop-opacity="0"/>
                            </radialGradient>
                            <radialGradient id="hub-fill" cx="50%" cy="50%" r="50%">
                                <stop offset="0%"   stop-color="#00e5ff" stop-opacity="0.18"/>
                                <stop offset="100%" stop-color="#00e5ff" stop-opacity="0.04"/>
                            </radialGradient>
                            <radialGradient id="nd-cyan" cx="50%" cy="50%" r="50%">
                                <stop offset="0%"   stop-color="#00e5ff" stop-opacity="0.14"/>
                                <stop offset="100%" stop-color="#00e5ff" stop-opacity="0.02"/>
                            </radialGradient>
                            <radialGradient id="nd-blue" cx="50%" cy="50%" r="50%">
                                <stop offset="0%"   stop-color="#2962ff" stop-opacity="0.14"/>
                                <stop offset="100%" stop-color="#2962ff" stop-opacity="0.02"/>
                            </radialGradient>
                            <radialGradient id="nd-violet" cx="50%" cy="50%" r="50%">
                                <stop offset="0%"   stop-color="#7c3aed" stop-opacity="0.14"/>
                                <stop offset="100%" stop-color="#7c3aed" stop-opacity="0.02"/>
                            </radialGradient>
                            <!-- Clip -->
                            <clipPath id="main-clip"><rect width="540" height="420" rx="20"/></clipPath>
                        </defs>

                        <!-- Background -->
                        <rect width="540" height="420" rx="20" fill="#030d1c"/>
                        <rect width="540" height="420" rx="20" fill="url(#bg-glow)"/>

                        <!-- Grid -->
                        <g clip-path="url(#main-clip)" opacity="1">
                            <line x1="0" y1="60"  x2="540" y2="60"  stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="0" y1="120" x2="540" y2="120" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="0" y1="180" x2="540" y2="180" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="0" y1="210" x2="540" y2="210" stroke="#0d2240" stroke-width="0.6" stroke-dasharray="4,8"/>
                            <line x1="0" y1="240" x2="540" y2="240" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="0" y1="300" x2="540" y2="300" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="0" y1="360" x2="540" y2="360" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="60"  y1="0" x2="60"  y2="420" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="120" y1="0" x2="120" y2="420" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="180" y1="0" x2="180" y2="420" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="270" y1="0" x2="270" y2="420" stroke="#0d2240" stroke-width="0.6" stroke-dasharray="4,8"/>
                            <line x1="360" y1="0" x2="360" y2="420" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="420" y1="0" x2="420" y2="420" stroke="#0a1a2e" stroke-width="1"/>
                            <line x1="480" y1="0" x2="480" y2="420" stroke="#0a1a2e" stroke-width="1"/>
                        </g>

                        <!-- === CONNECTION LINES (center 270,210 → each node) === -->
                        <!-- ERP: top-right (375,140) -->
                        <line x1="270" y1="210" x2="375" y2="140" stroke="#00e5ff" stroke-width="1.2" stroke-dasharray="6,5" opacity="0.3">
                            <animate attributeName="stroke-dashoffset" from="110" to="0" dur="1.8s" repeatCount="indefinite"/>
                        </line>
                        <!-- CRM: right (375,280) -->
                        <line x1="270" y1="210" x2="375" y2="280" stroke="#00e5ff" stroke-width="1.2" stroke-dasharray="6,5" opacity="0.3">
                            <animate attributeName="stroke-dashoffset" from="110" to="0" dur="2.3s" repeatCount="indefinite"/>
                        </line>
                        <!-- Portal: bottom (270,325) -->
                        <line x1="270" y1="210" x2="270" y2="325" stroke="#2962ff" stroke-width="1.2" stroke-dasharray="6,5" opacity="0.28">
                            <animate attributeName="stroke-dashoffset" from="115" to="0" dur="2.6s" repeatCount="indefinite"/>
                        </line>
                        <!-- Chatbot: bottom-left (165,280) -->
                        <line x1="270" y1="210" x2="165" y2="280" stroke="#7c3aed" stroke-width="1.2" stroke-dasharray="6,5" opacity="0.28">
                            <animate attributeName="stroke-dashoffset" from="110" to="0" dur="2.9s" repeatCount="indefinite"/>
                        </line>
                        <!-- Workflow: left (165,140) -->
                        <line x1="270" y1="210" x2="165" y2="140" stroke="#7c3aed" stroke-width="1.2" stroke-dasharray="6,5" opacity="0.28">
                            <animate attributeName="stroke-dashoffset" from="110" to="0" dur="2.1s" repeatCount="indefinite"/>
                        </line>
                        <!-- Custom Dev: top (270,90) -->
                        <line x1="270" y1="210" x2="270" y2="90" stroke="#2962ff" stroke-width="1.2" stroke-dasharray="6,5" opacity="0.28">
                            <animate attributeName="stroke-dashoffset" from="120" to="0" dur="2.0s" repeatCount="indefinite"/>
                        </line>

                        <!-- === ANIMATED DATA PACKETS === -->
                        <!-- ERP -->
                        <circle r="3.5" fill="#00e5ff" filter="url(#pk-glow)" opacity="0.95">
                            <animateMotion dur="1.8s" repeatCount="indefinite" path="M 270,210 L 375,140"/>
                        </circle>
                        <circle r="3.5" fill="#00e5ff" filter="url(#pk-glow)" opacity="0.6">
                            <animateMotion dur="1.8s" begin="0.9s" repeatCount="indefinite" path="M 375,140 L 270,210"/>
                        </circle>
                        <!-- CRM -->
                        <circle r="3.5" fill="#00e5ff" filter="url(#pk-glow)" opacity="0.95">
                            <animateMotion dur="2.3s" begin="0.5s" repeatCount="indefinite" path="M 270,210 L 375,280"/>
                        </circle>
                        <circle r="3" fill="#00e5ff" filter="url(#pk-glow)" opacity="0.6">
                            <animateMotion dur="2.3s" begin="1.65s" repeatCount="indefinite" path="M 375,280 L 270,210"/>
                        </circle>
                        <!-- Portal -->
                        <circle r="3" fill="#2962ff" filter="url(#pk-glow)" opacity="0.9">
                            <animateMotion dur="2.6s" begin="1.0s" repeatCount="indefinite" path="M 270,210 L 270,325"/>
                        </circle>
                        <!-- Chatbot -->
                        <circle r="3" fill="#7c3aed" filter="url(#pk-glow)" opacity="0.9">
                            <animateMotion dur="2.9s" begin="0.3s" repeatCount="indefinite" path="M 270,210 L 165,280"/>
                        </circle>
                        <circle r="2.5" fill="#7c3aed" filter="url(#pk-glow)" opacity="0.6">
                            <animateMotion dur="2.9s" begin="1.75s" repeatCount="indefinite" path="M 165,280 L 270,210"/>
                        </circle>
                        <!-- Workflow -->
                        <circle r="3" fill="#7c3aed" filter="url(#pk-glow)" opacity="0.9">
                            <animateMotion dur="2.1s" begin="1.3s" repeatCount="indefinite" path="M 270,210 L 165,140"/>
                        </circle>
                        <!-- Custom Dev -->
                        <circle r="3" fill="#2962ff" filter="url(#pk-glow)" opacity="0.9">
                            <animateMotion dur="2.0s" begin="0.7s" repeatCount="indefinite" path="M 270,210 L 270,90"/>
                        </circle>
                        <circle r="2.5" fill="#2962ff" filter="url(#pk-glow)" opacity="0.6">
                            <animateMotion dur="2.0s" begin="1.7s" repeatCount="indefinite" path="M 270,90 L 270,210"/>
                        </circle>

                        <!-- === CENTRAL AI HUB (270, 210) === -->
                        <!-- Outer pulse rings -->
                        <circle cx="270" cy="210" r="50" fill="none" stroke="#00e5ff" stroke-width="0.8" opacity="0">
                            <animate attributeName="r"       values="48;95;48"   dur="3s" repeatCount="indefinite"/>
                            <animate attributeName="opacity" values="0.45;0;0.45" dur="3s" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="270" cy="210" r="50" fill="none" stroke="#00e5ff" stroke-width="0.6" opacity="0">
                            <animate attributeName="r"       values="48;78;48"   dur="3s" begin="1.2s" repeatCount="indefinite"/>
                            <animate attributeName="opacity" values="0.3;0;0.3"  dur="3s" begin="1.2s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Hub fill circle -->
                        <circle cx="270" cy="210" r="50" fill="url(#hub-fill)" filter="url(#hub-glow)"/>
                        <!-- Hub ring -->
                        <circle cx="270" cy="210" r="50" fill="none" stroke="#00e5ff" stroke-width="1.8" opacity="0.75"/>
                        <!-- Rotating dashed orbit -->
                        <circle cx="270" cy="210" r="42" fill="none" stroke="#00e5ff" stroke-width="0.6" stroke-dasharray="4,10" opacity="0.4">
                            <animateTransform attributeName="transform" type="rotate" from="0 270 210" to="360 270 210" dur="18s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Orbiting dot 1 -->
                        <circle cx="270" cy="160" r="3.5" fill="#00e5ff" opacity="0.8" filter="url(#pk-glow)">
                            <animateTransform attributeName="transform" type="rotate" from="0 270 210" to="360 270 210" dur="6s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Orbiting dot 2 -->
                        <circle cx="310" cy="218" r="2.5" fill="#2962ff" opacity="0.7" filter="url(#pk-glow)">
                            <animateTransform attributeName="transform" type="rotate" from="0 270 210" to="-360 270 210" dur="9s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Hub inner circle -->
                        <circle cx="270" cy="210" r="32" fill="rgba(0,229,255,0.06)"/>
                        <!-- AI icon: crosshair / target -->
                        <circle cx="270" cy="204" r="13" fill="none" stroke="#00e5ff" stroke-width="1.3" opacity="0.7"/>
                        <circle cx="270" cy="204" r="5"  fill="#00e5ff" opacity="1.0" filter="url(#pk-glow)"/>
                        <line x1="270" y1="189" x2="270" y2="185" stroke="#00e5ff" stroke-width="1.3" opacity="0.7"/>
                        <line x1="270" y1="219" x2="270" y2="223" stroke="#00e5ff" stroke-width="1.3" opacity="0.7"/>
                        <line x1="255" y1="204" x2="251" y2="204" stroke="#00e5ff" stroke-width="1.3" opacity="0.7"/>
                        <line x1="285" y1="204" x2="289" y2="204" stroke="#00e5ff" stroke-width="1.3" opacity="0.7"/>
                        <!-- Hub label -->
                        <text x="270" y="224" text-anchor="middle" fill="#00e5ff" font-size="6.5" font-weight="700" font-family="monospace" letter-spacing="2.5" opacity="0.9">AI CORE</text>

                        <!-- === ERP NODE (top-right: 375,140) === -->
                        <circle cx="375" cy="140" r="32" fill="url(#nd-cyan)" filter="url(#nd-glow)"/>
                        <circle cx="375" cy="140" r="32" fill="none" stroke="#00e5ff" stroke-width="1.2" opacity="0.65"/>
                        <circle cx="375" cy="140" r="26" fill="none" stroke="#00e5ff" stroke-width="0.4" stroke-dasharray="3,8" opacity="0.3">
                            <animateTransform attributeName="transform" type="rotate" from="0 375 140" to="360 375 140" dur="15s" repeatCount="indefinite"/>
                        </circle>
                        <!-- ERP icon: stacked DB layers -->
                        <ellipse cx="375" cy="132" rx="10" ry="3.5" fill="none" stroke="#00e5ff" stroke-width="1.2" opacity="0.85"/>
                        <ellipse cx="375" cy="140" rx="10" ry="3.5" fill="none" stroke="#00e5ff" stroke-width="1.2" opacity="0.85"/>
                        <ellipse cx="375" cy="148" rx="10" ry="3.5" fill="none" stroke="#00e5ff" stroke-width="1.2" opacity="0.85"/>
                        <line x1="365" y1="132" x2="365" y2="148" stroke="#00e5ff" stroke-width="1.2" opacity="0.85"/>
                        <line x1="385" y1="132" x2="385" y2="148" stroke="#00e5ff" stroke-width="1.2" opacity="0.85"/>
                        <!-- ERP label (above node) -->
                        <text x="375" y="96"  text-anchor="middle" fill="#e2e8f0" font-size="9.5" font-weight="700" font-family="monospace">ERP</text>
                        <text x="375" y="107" text-anchor="middle" fill="#475569" font-size="7"   font-family="monospace">Sistem</text>

                        <!-- === CRM NODE (bottom-right: 375,280) === -->
                        <circle cx="375" cy="280" r="32" fill="url(#nd-cyan)" filter="url(#nd-glow)"/>
                        <circle cx="375" cy="280" r="32" fill="none" stroke="#00e5ff" stroke-width="1.2" opacity="0.65"/>
                        <circle cx="375" cy="280" r="26" fill="none" stroke="#00e5ff" stroke-width="0.4" stroke-dasharray="3,8" opacity="0.3">
                            <animateTransform attributeName="transform" type="rotate" from="360 375 280" to="0 375 280" dur="18s" repeatCount="indefinite"/>
                        </circle>
                        <!-- CRM icon: users -->
                        <circle cx="369" cy="273" r="5"  fill="none" stroke="#00e5ff" stroke-width="1.2" opacity="0.85"/>
                        <path d="M 359,285 C 359,279 364,276 369,276 C 374,276 379,279 379,285" stroke="#00e5ff" stroke-width="1.2" fill="none" opacity="0.85"/>
                        <circle cx="382" cy="271" r="3.5" fill="none" stroke="#00e5ff" stroke-width="1"   opacity="0.6"/>
                        <path d="M 379,282 C 379,278 382,276 385,276" stroke="#00e5ff" stroke-width="1" fill="none" opacity="0.6"/>
                        <!-- CRM label (below node) -->
                        <text x="375" y="324" text-anchor="middle" fill="#e2e8f0" font-size="9.5" font-weight="700" font-family="monospace">CRM</text>
                        <text x="375" y="335" text-anchor="middle" fill="#475569" font-size="7"   font-family="monospace">Customer</text>

                        <!-- === CORPORATE PORTAL NODE (bottom: 270,340) === -->
                        <circle cx="270" cy="340" r="32" fill="url(#nd-blue)" filter="url(#nd-glow)"/>
                        <circle cx="270" cy="340" r="32" fill="none" stroke="#2962ff" stroke-width="1.2" opacity="0.65"/>
                        <circle cx="270" cy="340" r="26" fill="none" stroke="#2962ff" stroke-width="0.4" stroke-dasharray="3,8" opacity="0.3">
                            <animateTransform attributeName="transform" type="rotate" from="0 270 340" to="360 270 340" dur="22s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Portal icon: browser/globe -->
                        <circle cx="270" cy="340" r="12" fill="none" stroke="#2962ff" stroke-width="1.3" opacity="0.85"/>
                        <ellipse cx="270" cy="340" rx="6" ry="12" fill="none" stroke="#2962ff" stroke-width="0.8" opacity="0.65"/>
                        <line x1="258" y1="340" x2="282" y2="340" stroke="#2962ff" stroke-width="0.8" opacity="0.65"/>
                        <line x1="260" y1="333" x2="280" y2="333" stroke="#2962ff" stroke-width="0.6" opacity="0.5"/>
                        <line x1="260" y1="347" x2="280" y2="347" stroke="#2962ff" stroke-width="0.6" opacity="0.5"/>
                        <!-- Portal label — INSIDE SVG near bottom edge -->
                        <text x="270" y="385" text-anchor="middle" fill="#e2e8f0" font-size="9.5" font-weight="700" font-family="monospace">Portal</text>
                        <text x="270" y="396" text-anchor="middle" fill="#475569" font-size="7"   font-family="monospace">Korporat</text>

                        <!-- === CHATBOT AI NODE (bottom-left: 165,280) === -->
                        <circle cx="165" cy="280" r="32" fill="url(#nd-violet)" filter="url(#nd-glow)"/>
                        <circle cx="165" cy="280" r="32" fill="none" stroke="#7c3aed" stroke-width="1.2" opacity="0.65"/>
                        <circle cx="165" cy="280" r="26" fill="none" stroke="#7c3aed" stroke-width="0.4" stroke-dasharray="3,8" opacity="0.3">
                            <animateTransform attributeName="transform" type="rotate" from="360 165 280" to="0 165 280" dur="16s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Chatbot icon: speech bubble -->
                        <path d="M 153,273 C 153,268 157,265 165,265 C 173,265 177,268 177,273 C 177,278 173,281 165,281 L 161,287 L 160,281 C 156,280 153,277 153,273 Z"
                              fill="none" stroke="#7c3aed" stroke-width="1.3" opacity="0.85"/>
                        <circle cx="161" cy="273" r="1.8" fill="#7c3aed" opacity="0.85"/>
                        <circle cx="165" cy="273" r="1.8" fill="#7c3aed" opacity="0.85"/>
                        <circle cx="169" cy="273" r="1.8" fill="#7c3aed" opacity="0.85"/>
                        <!-- Chatbot label (below node) -->
                        <text x="165" y="324" text-anchor="middle" fill="#e2e8f0" font-size="9.5" font-weight="700" font-family="monospace">Chatbot</text>
                        <text x="165" y="335" text-anchor="middle" fill="#475569" font-size="7"   font-family="monospace">AI</text>

                        <!-- === WORKFLOW AUTOMATION NODE (top-left: 165,140) === -->
                        <circle cx="165" cy="140" r="32" fill="url(#nd-violet)" filter="url(#nd-glow)"/>
                        <circle cx="165" cy="140" r="32" fill="none" stroke="#7c3aed" stroke-width="1.2" opacity="0.65"/>
                        <circle cx="165" cy="140" r="26" fill="none" stroke="#7c3aed" stroke-width="0.4" stroke-dasharray="3,8" opacity="0.3">
                            <animateTransform attributeName="transform" type="rotate" from="0 165 140" to="360 165 140" dur="20s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Workflow icon: flow diagram -->
                        <rect x="153" y="132" width="9"  height="6" rx="1.5" fill="none" stroke="#7c3aed" stroke-width="1.2" opacity="0.85"/>
                        <rect x="165" y="136" width="9"  height="6" rx="1.5" fill="none" stroke="#7c3aed" stroke-width="1.2" opacity="0.85"/>
                        <rect x="153" y="144" width="9"  height="6" rx="1.5" fill="none" stroke="#7c3aed" stroke-width="1.2" opacity="0.85"/>
                        <path d="M 162,135 L 165,138" stroke="#7c3aed" stroke-width="1" opacity="0.6"/>
                        <path d="M 162,147 L 165,142" stroke="#7c3aed" stroke-width="1" opacity="0.6"/>
                        <line x1="174" y1="139" x2="178" y2="139" stroke="#7c3aed" stroke-width="0.8" opacity="0.5"/>
                        <!-- Workflow label (above node) -->
                        <text x="165" y="96"  text-anchor="middle" fill="#e2e8f0" font-size="9.5" font-weight="700" font-family="monospace">Workflow</text>
                        <text x="165" y="107" text-anchor="middle" fill="#475569" font-size="7"   font-family="monospace">Automation</text>

                        <!-- === CUSTOM DEV NODE (top: 270,80) === -->
                        <circle cx="270" cy="75" r="32" fill="url(#nd-blue)" filter="url(#nd-glow)"/>
                        <circle cx="270" cy="75" r="32" fill="none" stroke="#2962ff" stroke-width="1.2" opacity="0.65"/>
                        <circle cx="270" cy="75" r="26" fill="none" stroke="#2962ff" stroke-width="0.4" stroke-dasharray="3,8" opacity="0.3">
                            <animateTransform attributeName="transform" type="rotate" from="360 270 75" to="0 270 75" dur="17s" repeatCount="indefinite"/>
                        </circle>
                        <!-- Custom Dev icon: </> brackets -->
                        <text x="270" y="81" text-anchor="middle" fill="#2962ff" font-size="16" font-weight="700" font-family="monospace" opacity="0.88">&lt;/&gt;</text>
                        <!-- Dev label (above node) -->
                        <text x="270" y="28" text-anchor="middle" fill="#e2e8f0" font-size="9.5" font-weight="700" font-family="monospace">Custom</text>
                        <text x="270" y="39" text-anchor="middle" fill="#475569" font-size="7"   font-family="monospace">Development</text>

                        <!-- === STATUS BADGES === -->
                        <!-- Top-right: Uptime -->
                        <g transform="translate(418,32)">
                            <rect width="108" height="30" rx="7" fill="rgba(0,229,255,0.05)" stroke="rgba(0,229,255,0.18)" stroke-width="0.8"/>
                            <circle cx="12" cy="15" r="3.5" fill="#00e5ff" opacity="0.85">
                                <animate attributeName="opacity" values="0.85;0.3;0.85" dur="1.4s" repeatCount="indefinite"/>
                            </circle>
                            <text x="22" y="11" fill="#64748b"  font-size="6.5" font-family="monospace">UPTIME</text>
                            <text x="22" y="22" fill="#00e5ff"  font-size="10"  font-weight="700" font-family="monospace">99.9%</text>
                        </g>
                        <!-- Bottom-left: Active Clients -->
                        <g transform="translate(14,302)">
                            <rect width="110" height="30" rx="7" fill="rgba(124,58,237,0.05)" stroke="rgba(124,58,237,0.18)" stroke-width="0.8"/>
                            <circle cx="12" cy="15" r="3.5" fill="#7c3aed" opacity="0.85">
                                <animate attributeName="opacity" values="0.85;0.3;0.85" dur="2.0s" repeatCount="indefinite"/>
                            </circle>
                            <text x="22" y="11" fill="#64748b"  font-size="6.5" font-family="monospace">KLIEN AKTIF</text>
                            <text x="22" y="22" fill="#7c3aed"  font-size="10"  font-weight="700" font-family="monospace">25+ Klien</text>
                        </g>
                        <!-- Top-left: AI Powered -->
                        <g transform="translate(14,32)">
                            <rect width="108" height="30" rx="7" fill="rgba(41,98,255,0.05)" stroke="rgba(41,98,255,0.18)" stroke-width="0.8"/>
                            <circle cx="12" cy="15" r="3.5" fill="#2962ff" opacity="0.85">
                                <animate attributeName="opacity" values="0.85;0.4;0.85" dur="1.7s" repeatCount="indefinite"/>
                            </circle>
                            <text x="22" y="11" fill="#64748b" font-size="6.5" font-family="monospace">AI-POWERED</text>
                            <text x="22" y="22" fill="#2962ff" font-size="10"  font-weight="700" font-family="monospace">Generative</text>
                        </g>
                        <!-- Bottom-right: Projects Done -->
                        <g transform="translate(418,352)">
                            <rect width="108" height="30" rx="7" fill="rgba(0,229,255,0.05)" stroke="rgba(0,229,255,0.18)" stroke-width="0.8"/>
                            <circle cx="12" cy="15" r="3.5" fill="#00e5ff" opacity="0.8">
                                <animate attributeName="opacity" values="0.8;0.3;0.8" dur="2.2s" repeatCount="indefinite"/>
                            </circle>
                            <text x="22" y="11" fill="#64748b" font-size="6.5" font-family="monospace">PROYEK</text>
                            <text x="22" y="22" fill="#00e5ff" font-size="10"  font-weight="700" font-family="monospace">50+ Done</text>
                        </g>

                        <!-- Frame border glow -->
                        <rect width="540" height="420" rx="20" fill="none" stroke="rgba(0,229,255,0.12)" stroke-width="1.5"/>
                        <rect width="540" height="420" rx="20" fill="none" stroke="rgba(0,229,255,0.04)" stroke-width="6"/>
                    </svg>
                </div>
            </div>

        </div><!-- end grid -->
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-slate-600 text-xs hidden md:flex">
        <span class="tracking-[0.2em] uppercase text-[10px]">
            <span x-show="$store.locale === 'id'">Gulir</span>
            <span x-show="$store.locale === 'en'" x-cloak>Scroll</span>
        </span>
        <div class="w-px h-10 bg-gradient-to-b from-slate-600 to-transparent"></div>
    </div>
</section>
