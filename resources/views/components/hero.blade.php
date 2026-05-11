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
                        <span x-show="$store.locale === 'id'">Berbasis AI &bull; Dari Medan, Melayani Seluruh Indonesia</span>
                        <span x-show="$store.locale === 'en'" x-cloak>AI-Powered &bull; From Medan, Serving All of Indonesia</span>
                    </span>
                </div>

                <!-- Headline -->
                <div class="scroll-reveal">
                    <h1 class="text-5xl md:text-6xl font-bold leading-[1.1] tracking-tight">
                        <span x-show="$store.locale === 'id'">
                            Transformasi Digital<br>
                            <span class="gradient-text">Indonesia</span><br>
                            Dimulai dari Sini
                        </span>
                        <span x-show="$store.locale === 'en'" x-cloak>
                            Indonesia's Digital<br>
                            <span class="gradient-text">Transformation</span><br>
                            Starts Here
                        </span>
                    </h1>
                </div>

                <!-- Subtext -->
                <p class="scroll-reveal text-lg text-slate-400 leading-relaxed max-w-xl font-body">
                    <span x-show="$store.locale === 'id'">
                        Kami merancang <strong class="text-white font-semibold">ERP, CRM, Portal Korporat &amp; Workflow Automation</strong> berbasis AI untuk Korporasi, BUMN, dan UKM Indonesia yang ingin tumbuh lebih cepat.
                    </span>
                    <span x-show="$store.locale === 'en'" x-cloak>
                        We design <strong class="text-white font-semibold">AI-powered ERP, CRM, Corporate Portals &amp; Workflow Automation</strong> for Indonesia's corporations, SOEs, and SMEs ready to grow faster.
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

            <!-- ========== RIGHT: WORLD MAP GLOBE ========== -->
            <div class="scroll-reveal hidden lg:flex items-center justify-center relative">
                <!-- Ambient glow behind globe -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-80 h-80 rounded-full bg-cyan-500/6 blur-3xl"></div>
                </div>

                <!-- Globe SVG -->
                <div class="relative w-full max-w-[560px]">
                    <!-- Floating labels around globe -->
                    <div class="absolute top-8 right-12 glass-card px-3 py-1.5 text-xs text-slate-300 flex items-center gap-2 z-20 float-anim" style="animation-delay:0.5s">
                        <div class="w-1.5 h-1.5 rounded-full bg-cyan-400"></div>
                        <span x-show="$store.locale === 'id'">Korporasi &amp; BUMN</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Corporations &amp; SOEs</span>
                    </div>
                    <div class="absolute bottom-12 left-8 glass-card px-3 py-1.5 text-xs text-slate-300 flex items-center gap-2 z-20 float-anim" style="animation-delay:1.5s">
                        <div class="w-1.5 h-1.5 rounded-full bg-blue-400"></div>
                        <span x-show="$store.locale === 'id'">AI-Powered Solutions</span>
                        <span x-show="$store.locale === 'en'" x-cloak>AI-Powered Solutions</span>
                    </div>

                    <!-- ===== WORLD MAP SVG (Asia-Pacific centered on Indonesia) ===== -->
                    <svg viewBox="0 0 600 360" class="w-full h-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <!-- Neon glow filter for Indonesia -->
                            <filter id="neon-glow" x="-40%" y="-40%" width="180%" height="180%">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur1"/>
                                <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur2"/>
                                <feMerge>
                                    <feMergeNode in="blur1"/>
                                    <feMergeNode in="blur2"/>
                                    <feMergeNode in="SourceGraphic"/>
                                </feMerge>
                            </filter>

                            <!-- Center radial glow -->
                            <radialGradient id="id-radial" cx="48%" cy="54%" r="35%">
                                <stop offset="0%" stop-color="#00e5ff" stop-opacity="0.18"/>
                                <stop offset="100%" stop-color="#00e5ff" stop-opacity="0"/>
                            </radialGradient>

                            <!-- Animated dash gradient -->
                            <linearGradient id="dash-grad-1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%"   stop-color="#00e5ff" stop-opacity="0"/>
                                <stop offset="50%"  stop-color="#00e5ff" stop-opacity="0.9"/>
                                <stop offset="100%" stop-color="#00e5ff" stop-opacity="0"/>
                            </linearGradient>

                            <!-- Globe clip -->
                            <clipPath id="map-clip">
                                <rect width="600" height="360" rx="16"/>
                            </clipPath>
                        </defs>

                        <!-- Dark background -->
                        <rect width="600" height="360" rx="16" fill="#050d1e"/>
                        <rect width="600" height="360" rx="16" fill="url(#id-radial)"/>

                        <g clip-path="url(#map-clip)">
                            <!-- Grid lines -->
                            <!-- Latitude -->
                            <line x1="0" y1="90"  x2="600" y2="90"  stroke="#0f2240" stroke-width="0.8"/>
                            <line x1="0" y1="180" x2="600" y2="180" stroke="#0f2240" stroke-width="0.8"/>
                            <line x1="0" y1="198" x2="600" y2="198" stroke="#1e3a5f" stroke-width="1" stroke-dasharray="5,8"/>
                            <line x1="0" y1="270" x2="600" y2="270" stroke="#0f2240" stroke-width="0.8"/>
                            <!-- Longitude -->
                            <line x1="150" y1="0" x2="150" y2="360" stroke="#0f2240" stroke-width="0.8"/>
                            <line x1="300" y1="0" x2="300" y2="360" stroke="#0f2240" stroke-width="0.8"/>
                            <line x1="450" y1="0" x2="450" y2="360" stroke="#0f2240" stroke-width="0.8"/>

                            <!-- Equator label -->
                            <text x="10" y="196" fill="#1e3a5f" font-size="7" font-family="monospace">EQUATOR</text>

                            <!-- === SURROUNDING COUNTRIES (muted dark shapes) === -->

                            <!-- India (partially visible at left edge) -->
                            <path d="M 28,90 C 50,75 80,72 105,82 C 130,92 142,115 140,140 C 138,165 122,178 100,182 C 78,186 55,172 40,152 C 25,132 18,108 28,90 Z"
                                  fill="#0f2240" opacity="0.8"/>
                            <!-- Indian Peninsula tip -->
                            <path d="M 80,182 C 85,192 90,205 88,215 C 82,218 76,210 74,198 Z"
                                  fill="#0f2240" opacity="0.7"/>

                            <!-- Indochina / SE Asia mainland -->
                            <path d="M 175,60 C 200,46 232,44 258,56 C 283,68 295,95 290,125 C 285,155 262,170 238,172 C 214,174 190,160 178,138 C 165,116 170,78 175,60 Z"
                                  fill="#0f2240" opacity="0.9"/>

                            <!-- Malay Peninsula (finger going south) -->
                            <path d="M 228,172 C 240,165 252,170 258,186 C 264,202 257,222 244,232 C 232,222 218,202 218,188 Z"
                                  fill="#0f2240" opacity="0.8"/>

                            <!-- Philippines -->
                            <path d="M 392,72 C 415,57 445,57 465,72 C 484,87 488,118 476,148 C 464,178 438,192 410,188 C 382,184 360,165 355,138 C 350,112 365,87 392,72 Z"
                                  fill="#0f2240" opacity="0.8"/>

                            <!-- Taiwan (small) -->
                            <ellipse cx="416" cy="50" rx="12" ry="8" fill="#0f2240" opacity="0.8"/>

                            <!-- China (bottom portion visible) -->
                            <path d="M 175,8 C 225,-5 290,-8 360,0 C 428,8 488,28 520,55 C 538,72 535,95 512,108 C 488,121 452,125 412,122 C 372,119 330,108 290,98 C 250,88 210,78 182,65 C 158,54 152,25 175,8 Z"
                                  fill="#0f2240" opacity="0.7"/>

                            <!-- Japan (partially visible at top right) -->
                            <ellipse cx="528" cy="42" rx="22" ry="12" fill="#0f2240" opacity="0.7" transform="rotate(-30 528 42)"/>
                            <ellipse cx="508" cy="55" rx="16" ry="9" fill="#0f2240" opacity="0.6" transform="rotate(-20 508 55)"/>

                            <!-- Papua New Guinea (east of Papua) -->
                            <path d="M 572,205 C 582,198 594,200 598,210 C 600,220 596,232 586,236 C 576,230 568,218 572,205 Z"
                                  fill="#0f2240" opacity="0.7"/>

                            <!-- Australia -->
                            <path d="M 320,272 C 362,258 420,255 476,262 C 530,269 572,288 588,315 C 600,336 594,358 574,371 C 552,384 518,390 480,388 C 442,386 405,373 375,352 C 345,331 316,302 308,280 Z"
                                  fill="#0f2240" opacity="0.85"/>

                            <!-- === INDONESIA (NEON CYAN — MAIN FEATURE) === -->

                            <!-- Background glow for Indonesia region -->
                            <ellipse cx="290" cy="210" rx="180" ry="60" fill="#00e5ff" opacity="0.03"/>

                            <!-- Sumatra (elongated NW-SE diagonal) -->
                            <path d="M 165,170 C 178,158 198,156 215,166 C 236,178 250,200 252,222 C 254,240 244,252 230,252 C 214,246 196,228 178,212 C 160,196 152,180 165,170 Z"
                                  fill="#00e5ff" opacity="0.92" filter="url(#neon-glow)"/>

                            <!-- Java (thin elongated E-W) -->
                            <path d="M 248,235 C 268,226 298,225 328,230 C 348,234 362,244 358,254 C 342,262 308,260 272,256 C 250,252 240,241 248,235 Z"
                                  fill="#00e5ff" opacity="0.92" filter="url(#neon-glow)"/>

                            <!-- Bali (small) -->
                            <circle cx="368" cy="244" r="6" fill="#00e5ff" filter="url(#neon-glow)"/>

                            <!-- Kalimantan / Borneo (large central blob) -->
                            <path d="M 248,168 C 272,154 310,150 348,158 C 386,167 408,190 408,218 C 408,246 388,264 355,268 C 322,272 285,262 264,244 C 242,226 228,210 232,190 C 235,175 240,176 248,168 Z"
                                  fill="#00e5ff" opacity="0.92" filter="url(#neon-glow)"/>

                            <!-- Sulawesi (4-arm star / K shape) -->
                            <path d="M 426,168
                                     C 436,156 452,154 460,166
                                     C 467,178 461,196 448,204
                                     C 462,212 478,218 483,232
                                     C 488,246 478,256 466,250
                                     C 456,266 450,284 438,286
                                     C 426,282 424,266 432,250
                                     C 420,262 408,270 402,260
                                     C 396,248 406,234 422,226
                                     C 408,216 396,200 400,186
                                     C 404,172 416,164 426,168 Z"
                                  fill="#00e5ff" opacity="0.92" filter="url(#neon-glow)"/>

                            <!-- Small islands (NTB, NTT, Maluku) -->
                            <circle cx="382" cy="248" r="4" fill="#00e5ff" opacity="0.8"/>
                            <circle cx="396" cy="250" r="4" fill="#00e5ff" opacity="0.75"/>
                            <circle cx="410" cy="252" r="3" fill="#00e5ff" opacity="0.65"/>
                            <circle cx="422" cy="254" r="3" fill="#00e5ff" opacity="0.55"/>

                            <!-- Maluku/Spice Islands -->
                            <circle cx="490" cy="200" r="4" fill="#00e5ff" opacity="0.75"/>
                            <circle cx="506" cy="210" r="3" fill="#00e5ff" opacity="0.65"/>
                            <circle cx="498" cy="222" r="3" fill="#00e5ff" opacity="0.55"/>

                            <!-- Papua / West Papua (large eastern) -->
                            <path d="M 510,190 C 530,176 564,174 594,185 C 616,195 624,215 616,238 C 608,260 580,272 550,268 C 520,264 494,248 484,225 C 474,202 488,196 510,190 Z"
                                  fill="#00e5ff" opacity="0.92" filter="url(#neon-glow)"/>

                            <!-- === CONNECTION LINES (animated dashed) === -->

                            <!-- Indonesia center (290, 210) → Singapore (242, 208) -->
                            <path d="M 290,210 L 246,208" stroke="#00e5ff" stroke-width="1" stroke-dasharray="5,3" opacity="0.6">
                                <animate attributeName="stroke-dashoffset" from="80" to="0" dur="2s" repeatCount="indefinite"/>
                            </path>

                            <!-- Indonesia center → KL -->
                            <path d="M 290,210 L 230,222" stroke="#00e5ff" stroke-width="0.8" stroke-dasharray="4,3" opacity="0.45">
                                <animate attributeName="stroke-dashoffset" from="80" to="0" dur="2.8s" repeatCount="indefinite"/>
                            </path>

                            <!-- Indonesia center → Manila -->
                            <path d="M 290,210 L 428,130" stroke="#00e5ff" stroke-width="0.8" stroke-dasharray="4,4" opacity="0.35">
                                <animate attributeName="stroke-dashoffset" from="160" to="0" dur="3.5s" repeatCount="indefinite"/>
                            </path>

                            <!-- Indonesia center → Tokyo -->
                            <path d="M 290,210 L 518,50" stroke="#2962ff" stroke-width="0.8" stroke-dasharray="4,5" opacity="0.28">
                                <animate attributeName="stroke-dashoffset" from="280" to="0" dur="4.5s" repeatCount="indefinite"/>
                            </path>

                            <!-- Indonesia center → Sydney -->
                            <path d="M 290,210 L 480,342" stroke="#2962ff" stroke-width="0.8" stroke-dasharray="4,5" opacity="0.28">
                                <animate attributeName="stroke-dashoffset" from="240" to="0" dur="4s" repeatCount="indefinite"/>
                            </path>

                            <!-- === CITY NODES === -->

                            <!-- Singapore -->
                            <circle cx="246" cy="208" r="4" fill="#00e5ff" opacity="0.95"/>
                            <circle cx="246" cy="208" r="8" fill="none" stroke="#00e5ff" stroke-width="0.8" opacity="0.4">
                                <animate attributeName="r" values="5;12;5" dur="2s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.6;0;0.6" dur="2s" repeatCount="indefinite"/>
                            </circle>
                            <text x="252" y="204" fill="#64748b" font-size="8" font-family="monospace">SG</text>

                            <!-- KL -->
                            <circle cx="230" cy="222" r="3" fill="#00e5ff" opacity="0.8"/>
                            <text x="218" y="232" fill="#64748b" font-size="7" font-family="monospace">KUL</text>

                            <!-- Jakarta (west Java) -->
                            <circle cx="264" cy="243" r="3" fill="#00e5ff" opacity="0.88"/>
                            <circle cx="264" cy="243" r="7" fill="none" stroke="#00e5ff" stroke-width="0.8" opacity="0.35">
                                <animate attributeName="r" values="4;10;4" dur="2.5s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.5;0;0.5" dur="2.5s" repeatCount="indefinite"/>
                            </circle>
                            <text x="256" y="254" fill="#475569" font-size="7" font-family="monospace">JKT</text>

                            <!-- Surabaya (east Java) -->
                            <circle cx="334" cy="245" r="2.5" fill="#00e5ff" opacity="0.8"/>
                            <text x="327" y="255" fill="#475569" font-size="7" font-family="monospace">SUB</text>

                            <!-- Makassar (south Sulawesi) -->
                            <circle cx="432" cy="262" r="2.5" fill="#00e5ff" opacity="0.78"/>
                            <text x="436" y="270" fill="#475569" font-size="7" font-family="monospace">UPG</text>

                            <!-- Manila -->
                            <circle cx="428" cy="130" r="3" fill="#2962ff" opacity="0.8"/>
                            <text x="432" y="128" fill="#475569" font-size="7" font-family="monospace">MNL</text>

                            <!-- Tokyo -->
                            <circle cx="518" cy="50" r="3.5" fill="#2962ff" opacity="0.75"/>
                            <text x="522" y="48" fill="#475569" font-size="7" font-family="monospace">TYO</text>

                            <!-- Sydney -->
                            <circle cx="480" cy="342" r="3.5" fill="#2962ff" opacity="0.75"/>
                            <text x="484" y="340" fill="#475569" font-size="7" font-family="monospace">SYD</text>

                            <!-- Dubai (partial, left edge hint) -->
                            <circle cx="18" cy="120" r="3" fill="#7c3aed" opacity="0.7"/>
                            <text x="22" y="118" fill="#475569" font-size="7" font-family="monospace">DXB</text>

                            <!-- === MEDAN PULSE (headquarters) === -->
                            <circle cx="185" cy="178" r="6" fill="#00e5ff" opacity="1.0">
                                <animate attributeName="r" values="5;9;5" dur="2s" repeatCount="indefinite"/>
                            </circle>
                            <circle cx="185" cy="178" r="22" fill="none" stroke="#00e5ff" stroke-width="1.2" opacity="0.5">
                                <animate attributeName="r" values="10;28;10" dur="2s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.5;0;0.5" dur="2s" repeatCount="indefinite"/>
                            </circle>
                            <circle cx="185" cy="178" r="38" fill="none" stroke="#00e5ff" stroke-width="0.8" opacity="0.25">
                                <animate attributeName="r" values="10;45;10" dur="2s" begin="0.7s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.3;0;0.3" dur="2s" begin="0.7s" repeatCount="indefinite"/>
                            </circle>
                            <text x="195" y="170" fill="#00e5ff" font-size="8.5" font-weight="bold" font-family="monospace">MEDAN</text>
                            <text x="195" y="181" fill="#00e5ff" font-size="6.5" font-family="monospace" opacity="0.7">INDONESIA</text>

                            <!-- === INDONESIA CENTER PULSE === -->
                            <circle cx="290" cy="210" r="4" fill="#00e5ff" opacity="0.9"/>
                            <circle cx="290" cy="210" r="5" fill="none" stroke="#00e5ff" stroke-width="1.5" opacity="0">
                                <animate attributeName="r" values="5;55;5" dur="3s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.7;0;0.7" dur="3s" repeatCount="indefinite"/>
                            </circle>
                            <circle cx="290" cy="210" r="5" fill="none" stroke="#00e5ff" stroke-width="0.8" opacity="0">
                                <animate attributeName="r" values="5;90;5" dur="3s" begin="1s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.4;0;0.4" dur="3s" begin="1s" repeatCount="indefinite"/>
                            </circle>
                        </g>

                        <!-- Frame border glow -->
                        <rect width="600" height="360" rx="16" fill="none" stroke="rgba(0,229,255,0.12)" stroke-width="1.5"/>
                        <rect width="600" height="360" rx="16" fill="none" stroke="rgba(0,229,255,0.05)" stroke-width="5"/>
                    </svg>

                    <!-- Map caption -->
                    <div class="mt-3 flex items-center justify-center gap-6 text-xs text-slate-600">
                        <div class="flex items-center gap-1.5">
                            <div class="w-2 h-2 rounded-full bg-cyan-400"></div>
                            <span x-show="$store.locale === 'id'">Kantor Pusat: Medan</span>
                            <span x-show="$store.locale === 'en'" x-cloak>HQ: Medan</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <div class="w-2 h-2 rounded-full bg-blue-400"></div>
                            <span x-show="$store.locale === 'id'">Jaringan Global</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Global Network</span>
                        </div>
                    </div>
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
