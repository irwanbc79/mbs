<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-surface">
    <!-- Subtle grid background -->
    <div class="absolute inset-0 grid-bg pointer-events-none opacity-60"></div>

    <!-- Soft directional ambient highlight -->
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-600/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative z-10 w-full container-max px-6 lg:px-24 pt-24 pb-16">
        <div class="grid lg:grid-cols-2 gap-12 xl:gap-16 items-center">

            <!-- ========== LEFT: CONTENT ========== -->
            <div class="space-y-8 lg:space-y-10">

                <!-- Badge -->
                <div data-testid="hero-badge" class="scroll-reveal inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full border border-blue-500/30 bg-blue-500/10 text-sm">
                    <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                    <span class="text-blue-300 font-semibold text-xs tracking-wider uppercase">
                        <span x-show="$store.locale === 'id'">Enterprise Software House &bull; Sistem ERP Kustom &bull; Digitalisasi Korporat</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Enterprise Software House &bull; Custom ERP Systems &bull; Corporate Portals</span>
                    </span>
                </div>

                <!-- Headline -->
                <div class="scroll-reveal">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-[1.12] tracking-tight text-white">
                        <span x-show="$store.locale === 'id'">
                            Sistem ERP Terpadu<br>
                            &amp; Portal Korporat Untuk<br>
                            <span class="gradient-text-blue">Operasional Skala Besar</span>
                        </span>
                        <span x-show="$store.locale === 'en'" x-cloak>
                            Unified Enterprise ERP<br>
                            &amp; Corporate Portals For<br>
                            <span class="gradient-text-blue">Large-Scale Operations</span>
                        </span>
                    </h1>
                </div>

                <!-- Subtext -->
                <p class="scroll-reveal text-base sm:text-lg text-slate-300 leading-relaxed max-w-xl font-body">
                    <span x-show="$store.locale === 'id'">
                        Mora Bangun Solutions merekayasa piranti lunak enterprise kustom berkinerja tinggi—mengintegrasikan <strong class="text-white font-semibold">manajemen operasional ERP, rantai pasok (supply chain), portal korporat multi-cabang, hingga otomatisasi alur kerja cerdas</strong> untuk perusahaan skala menengah, korporasi, dan BUMN.
                    </span>
                    <span x-show="$store.locale === 'en'" x-cloak>
                        Mora Bangun Solutions engineers high-performance custom enterprise software—unifying <strong class="text-white font-semibold">core ERP operations, supply chain logistics, multi-branch corporate portals, and intelligent workflow automation</strong> for medium-to-large enterprises and SOEs.
                    </span>
                </p>

                <!-- CTA Buttons -->
                <div class="scroll-reveal flex flex-wrap gap-4">
                    <a href="#contact"
                       data-testid="hero-cta-primary"
                       class="inline-flex items-center gap-2.5 px-7 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl transition-all duration-300 shadow-lg shadow-blue-600/25 hover:shadow-blue-500/40 hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        <span x-show="$store.locale === 'id'">Konsultasi Solusi Sistem</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Consult System Solutions</span>
                    </a>
                    <a href="#portfolio"
                       data-testid="hero-cta-secondary"
                       class="inline-flex items-center gap-2.5 px-7 py-3.5 border border-slate-700 hover:border-slate-500 text-slate-200 hover:text-white font-medium rounded-xl transition-all duration-300 hover:-translate-y-0.5 bg-slate-900/60">
                        <span x-show="$store.locale === 'id'">Eksplorasi Proyek Nyata</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Explore Live Projects</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Stats Row -->
                <div class="animate-visible grid grid-cols-2 sm:grid-cols-4 gap-4 pt-6 border-t border-slate-800/80">
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-white">B2B</div>
                        <div class="text-xs text-slate-400 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Fokus Solusi Bisnis</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Business Solutions</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-blue-400">Custom</div>
                        <div class="text-xs text-slate-400 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Sesuai Kebutuhan</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Built to Fit</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-emerald-400">18</div>
                        <div class="text-xs text-slate-400 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Skenario Demo Industri</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Industry Demo Scenarios</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-slate-200">SLA</div>
                        <div class="text-xs text-slate-400 mt-1 font-body">
                            <span x-show="$store.locale === 'id'">Disepakati per Proyek</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Agreed per Project</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== RIGHT: FUTURISTIC ENTERPRISE ECOSYSTEM VISUALIZATION ========== -->
            <div class="scroll-reveal hidden lg:block relative">
                <!-- Ambient Multi-Color Core Glow -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none -z-10">
                    <div class="w-[480px] h-[380px] rounded-full bg-blue-600/10 blur-[100px]"></div>
                    <div class="w-[300px] h-[300px] rounded-full bg-indigo-600/10 blur-[80px]"></div>
                    <div class="w-[200px] h-[200px] rounded-full bg-emerald-500/5 blur-[60px]"></div>
                </div>

                <!-- Main Futuristic Visual Glass Container -->
                <div class="relative w-full max-w-[560px] mx-auto rounded-3xl border border-blue-500/20 bg-[#0B101D]/90 backdrop-blur-xl shadow-2xl overflow-hidden group hover:border-blue-500/35 transition-all duration-500">
                    
                    <!-- Top HUD Status Bar -->
                    <div class="px-5 py-3.5 bg-slate-900/80 border-b border-slate-800/80 flex items-center justify-between z-20 relative">
                        <div class="flex items-center gap-2.5">
                            <div class="flex gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-blue-400/80"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-slate-600"></span>
                            </div>
                            <span class="text-xs font-mono font-bold tracking-wider text-slate-200 uppercase">Enterprise Digital Core</span>
                        </div>
                        <div class="flex items-center gap-2 text-[11px] font-mono text-emerald-400 bg-emerald-950/40 px-3 py-1 rounded-full border border-emerald-800/40">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                            <span>SYSTEM DESIGN &bull; DEMO</span>
                        </div>
                    </div>

                    <!-- Interactive Animated Canvas -->
                    <div class="relative p-3 sm:p-5">
                        <svg viewBox="0 0 580 440" class="w-full h-auto select-none" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <!-- Gradients -->
                                <radialGradient id="futuristic-core-glow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#3B82F6" stop-opacity="0.35"/>
                                    <stop offset="60%" stop-color="#1D4ED8" stop-opacity="0.12"/>
                                    <stop offset="100%" stop-color="#1E3A8A" stop-opacity="0"/>
                                </radialGradient>
                                <radialGradient id="center-hub-fill" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#1E293B"/>
                                    <stop offset="100%" stop-color="#0F172A"/>
                                </radialGradient>
                                <linearGradient id="stream-blue" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#60A5FA" stop-opacity="0.8"/>
                                    <stop offset="100%" stop-color="#2563EB" stop-opacity="0.2"/>
                                </linearGradient>
                                <linearGradient id="stream-emerald" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#34D399" stop-opacity="0.8"/>
                                    <stop offset="100%" stop-color="#059669" stop-opacity="0.2"/>
                                </linearGradient>
                                <linearGradient id="stream-violet" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#A78BFA" stop-opacity="0.8"/>
                                    <stop offset="100%" stop-color="#7C3AED" stop-opacity="0.2"/>
                                </linearGradient>

                                <!-- Filters -->
                                <filter id="laser-glow" x="-50%" y="-50%" width="200%" height="200%">
                                    <feGaussianBlur stdDeviation="3" result="blur"/>
                                    <feMerge>
                                        <feMergeNode in="blur"/>
                                        <feMergeNode in="SourceGraphic"/>
                                    </feMerge>
                                </filter>
                                <filter id="packet-glow" x="-100%" y="-100%" width="300%" height="300%">
                                    <feGaussianBlur stdDeviation="3.5" result="blur"/>
                                    <feMerge>
                                        <feMergeNode in="blur"/>
                                        <feMergeNode in="SourceGraphic"/>
                                    </feMerge>
                                </filter>
                            </defs>

                            <!-- Background Isometric Wireframe Grid -->
                            <g opacity="0.35">
                                <line x1="0" y1="70" x2="580" y2="70" stroke="#1E293B" stroke-width="0.8"/>
                                <line x1="0" y1="150" x2="580" y2="150" stroke="#1E293B" stroke-width="0.8"/>
                                <line x1="0" y1="220" x2="580" y2="220" stroke="#1E293B" stroke-width="0.8" stroke-dasharray="4,6"/>
                                <line x1="0" y1="290" x2="580" y2="290" stroke="#1E293B" stroke-width="0.8"/>
                                <line x1="0" y1="370" x2="580" y2="370" stroke="#1E293B" stroke-width="0.8"/>

                                <line x1="80" y1="0" x2="80" y2="440" stroke="#1E293B" stroke-width="0.8"/>
                                <line x1="180" y1="0" x2="180" y2="440" stroke="#1E293B" stroke-width="0.8"/>
                                <line x1="290" y1="0" x2="290" y2="440" stroke="#1E293B" stroke-width="0.8" stroke-dasharray="4,6"/>
                                <line x1="400" y1="0" x2="400" y2="440" stroke="#1E293B" stroke-width="0.8"/>
                                <line x1="500" y1="0" x2="500" y2="440" stroke="#1E293B" stroke-width="0.8"/>

                                <!-- Grid Crosshair Accents -->
                                <circle cx="180" cy="150" r="2" fill="#3B82F6" opacity="0.6"/>
                                <circle cx="400" cy="150" r="2" fill="#3B82F6" opacity="0.6"/>
                                <circle cx="180" cy="290" r="2" fill="#3B82F6" opacity="0.6"/>
                                <circle cx="400" cy="290" r="2" fill="#3B82F6" opacity="0.6"/>
                            </g>

                            <!-- Ambient Aura behind center core -->
                            <circle cx="290" cy="220" r="140" fill="url(#futuristic-core-glow)"/>

                            <!-- ================= HIGHWAY DATA BUS PIPELINES ================= -->
                            <!-- Core to Top-Left (Finance & Ledger) -->
                            <path id="path-to-finance" d="M 290 220 L 210 160 L 175 140" stroke="url(#stream-blue)" stroke-width="1.8" stroke-dasharray="6,4" fill="none"/>
                            <!-- Core to Top-Right (Smart Supply Chain) -->
                            <path id="path-to-supply" d="M 290 220 L 370 160 L 405 140" stroke="url(#stream-emerald)" stroke-width="1.8" stroke-dasharray="6,4" fill="none"/>
                            <!-- Core to Bottom-Left (Workflow Automation) -->
                            <path id="path-to-workflow" d="M 290 220 L 210 280 L 175 300" stroke="url(#stream-violet)" stroke-width="1.8" stroke-dasharray="6,4" fill="none"/>
                            <!-- Core to Bottom-Right (Corporate Portal & SSO) -->
                            <path id="path-to-portal" d="M 290 220 L 370 280 L 405 300" stroke="url(#stream-blue)" stroke-width="1.8" stroke-dasharray="6,4" fill="none"/>

                            <!-- ================= ANIMATED LASER DATA PACKETS ================= -->
                            <!-- Packets on Path 1 (Finance) -->
                            <circle r="4" fill="#60A5FA" filter="url(#packet-glow)">
                                <animateMotion dur="2.2s" repeatCount="indefinite" path="M 290 220 L 210 160 L 175 140"/>
                            </circle>
                            <circle r="3" fill="#93C5FD" filter="url(#packet-glow)" opacity="0.7">
                                <animateMotion dur="2.2s" begin="1.1s" repeatCount="indefinite" path="M 175 140 L 210 160 L 290 220"/>
                            </circle>

                            <!-- Packets on Path 2 (Supply Chain) -->
                            <circle r="4" fill="#34D399" filter="url(#packet-glow)">
                                <animateMotion dur="2.5s" repeatCount="indefinite" path="M 290 220 L 370 160 L 405 140"/>
                            </circle>
                            <circle r="3" fill="#6EE7B7" filter="url(#packet-glow)" opacity="0.7">
                                <animateMotion dur="2.5s" begin="1.25s" repeatCount="indefinite" path="M 405 140 L 370 160 L 290 220"/>
                            </circle>

                            <!-- Packets on Path 3 (Workflow) -->
                            <circle r="4" fill="#C084FC" filter="url(#packet-glow)">
                                <animateMotion dur="2.0s" repeatCount="indefinite" path="M 290 220 L 210 280 L 175 300"/>
                            </circle>
                            <circle r="3" fill="#DDD6FE" filter="url(#packet-glow)" opacity="0.7">
                                <animateMotion dur="2.0s" begin="1.0s" repeatCount="indefinite" path="M 175 300 L 210 280 L 290 220"/>
                            </circle>

                            <!-- Packets on Path 4 (Portal) -->
                            <circle r="4" fill="#38BDF8" filter="url(#packet-glow)">
                                <animateMotion dur="2.4s" repeatCount="indefinite" path="M 290 220 L 370 280 L 405 300"/>
                            </circle>
                            <circle r="3" fill="#7DD3FC" filter="url(#packet-glow)" opacity="0.7">
                                <animateMotion dur="2.4s" begin="1.2s" repeatCount="indefinite" path="M 405 300 L 370 280 L 290 220"/>
                            </circle>

                            <!-- ================= SATELLITE MODULE NODE 1 (Top-Left: Finance & General Ledger) ================= -->
                            <g transform="translate(18, 75)" class="cursor-pointer">
                                <!-- Card Glass Base -->
                                <rect width="170" height="74" rx="14" fill="#0E172A" fill-opacity="0.9" stroke="#3B82F6" stroke-opacity="0.4" stroke-width="1.2"/>
                                <!-- Top Accent Bar -->
                                <path d="M 0 14 C 0 6.27 6.27 0 14 0 L 156 0 C 163.73 0 170 6.27 170 14 L 170 16 L 0 16 Z" fill="#1E3A8A" fill-opacity="0.5"/>
                                <!-- Icon Badge -->
                                <rect x="12" y="24" width="34" height="34" rx="8" fill="#1E293B" stroke="#3B82F6" stroke-opacity="0.4"/>
                                <path d="M 23 41 L 35 41 M 29 29 L 29 43 M 24 33 C 24 30 34 30 34 33 C 34 37 24 37 24 41 C 24 44 34 44 34 41" stroke="#60A5FA" stroke-width="1.8" stroke-linecap="round"/>
                                <!-- Text Labels -->
                                <text x="54" y="38" fill="#FFFFFF" font-family="ui-monospace, monospace" font-size="11" font-weight="700" letter-spacing="0.5">FINANCE &amp; LEDGER</text>
                                <text x="54" y="52" fill="#94A3B8" font-family="sans-serif" font-size="9.5">Auto-Jurnal &bull; Neraca</text>
                                <!-- Status Tag -->
                                <rect x="54" y="58" width="62" height="12" rx="4" fill="#10B981" fill-opacity="0.15"/>
                                <text x="58" y="67" fill="#34D399" font-family="ui-monospace, monospace" font-size="8" font-weight="600">● WORKFLOW SAMPLE</text>
                            </g>

                            <!-- ================= SATELLITE MODULE NODE 2 (Top-Right: Smart Supply Chain & Inventory) ================= -->
                            <g transform="translate(392, 75)" class="cursor-pointer">
                                <rect width="170" height="74" rx="14" fill="#0E172A" fill-opacity="0.9" stroke="#10B981" stroke-opacity="0.4" stroke-width="1.2"/>
                                <path d="M 0 14 C 0 6.27 6.27 0 14 0 L 156 0 C 163.73 0 170 6.27 170 14 L 170 16 L 0 16 Z" fill="#064E3B" fill-opacity="0.5"/>
                                <rect x="12" y="24" width="34" height="34" rx="8" fill="#1E293B" stroke="#10B981" stroke-opacity="0.4"/>
                                <path d="M 29 27 L 41 33 L 29 39 L 17 33 Z M 17 33 L 17 41 L 29 47 L 29 39 M 41 33 L 41 41 L 29 47" stroke="#34D399" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <text x="54" y="38" fill="#FFFFFF" font-family="ui-monospace, monospace" font-size="11" font-weight="700" letter-spacing="0.5">SUPPLY CHAIN</text>
                                <text x="54" y="52" fill="#94A3B8" font-family="sans-serif" font-size="9.5">Multi-Gudang &bull; Stok Live</text>
                                <rect x="54" y="58" width="60" height="12" rx="4" fill="#3B82F6" fill-opacity="0.15"/>
                                <text x="58" y="67" fill="#60A5FA" font-family="ui-monospace, monospace" font-size="8" font-weight="600">● INVENTORY FLOW</text>
                            </g>

                            <!-- ================= SATELLITE MODULE NODE 3 (Bottom-Left: Workflow & Event Automation) ================= -->
                            <g transform="translate(18, 285)" class="cursor-pointer">
                                <rect width="170" height="74" rx="14" fill="#0E172A" fill-opacity="0.9" stroke="#8B5CF6" stroke-opacity="0.4" stroke-width="1.2"/>
                                <path d="M 0 14 C 0 6.27 6.27 0 14 0 L 156 0 C 163.73 0 170 6.27 170 14 L 170 16 L 0 16 Z" fill="#4C1D95" fill-opacity="0.5"/>
                                <rect x="12" y="24" width="34" height="34" rx="8" fill="#1E293B" stroke="#8B5CF6" stroke-opacity="0.4"/>
                                <path d="M 31 27 L 22 36 L 29 36 L 27 45 L 36 34 L 29 34 Z" stroke="#C084FC" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                <text x="54" y="38" fill="#FFFFFF" font-family="ui-monospace, monospace" font-size="11" font-weight="700" letter-spacing="0.5">AUTO WORKFLOW</text>
                                <text x="54" y="52" fill="#94A3B8" font-family="sans-serif" font-size="9.5">Event-Driven Pipeline</text>
                                <rect x="54" y="58" width="64" height="12" rx="4" fill="#8B5CF6" fill-opacity="0.15"/>
                                <text x="58" y="67" fill="#C084FC" font-family="ui-monospace, monospace" font-size="8" font-weight="600">● EVENT-DRIVEN</text>
                            </g>

                            <!-- ================= SATELLITE MODULE NODE 4 (Bottom-Right: Corporate Portal & RBAC) ================= -->
                            <g transform="translate(392, 285)" class="cursor-pointer">
                                <rect width="170" height="74" rx="14" fill="#0E172A" fill-opacity="0.9" stroke="#3B82F6" stroke-opacity="0.4" stroke-width="1.2"/>
                                <path d="M 0 14 C 0 6.27 6.27 0 14 0 L 156 0 C 163.73 0 170 6.27 170 14 L 170 16 L 0 16 Z" fill="#1E3A8A" fill-opacity="0.5"/>
                                <rect x="12" y="24" width="34" height="34" rx="8" fill="#1E293B" stroke="#3B82F6" stroke-opacity="0.4"/>
                                <path d="M 29 27 L 38 31 V 37 C 38 42 29 46 29 46 C 29 46 20 42 20 37 V 31 Z" stroke="#60A5FA" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                <text x="54" y="38" fill="#FFFFFF" font-family="ui-monospace, monospace" font-size="11" font-weight="700" letter-spacing="0.5">CORPORATE PORTAL</text>
                                <text x="54" y="52" fill="#94A3B8" font-family="sans-serif" font-size="9.5">SSO &bull; Audit Trail &bull; RBAC</text>
                                <rect x="54" y="58" width="60" height="12" rx="4" fill="#3B82F6" fill-opacity="0.15"/>
                                <text x="58" y="67" fill="#60A5FA" font-family="ui-monospace, monospace" font-size="8" font-weight="600">● MULTI-BRANCH</text>
                            </g>

                            <!-- ================= CENTRAL FUTURISTIC ERP CORE (290, 220) ================= -->
                            <!-- Outer Rotating Ticks Ring (Clockwise) -->
                            <circle cx="290" cy="220" r="82" stroke="#3B82F6" stroke-opacity="0.4" stroke-width="1.5" stroke-dasharray="8 6" fill="none">
                                <animateTransform attributeName="transform" type="rotate" from="0 290 220" to="360 290 220" dur="24s" repeatCount="indefinite"/>
                            </circle>

                            <!-- Middle Counter-Rotating Ring (Counter-Clockwise) -->
                            <circle cx="290" cy="220" r="68" stroke="#60A5FA" stroke-opacity="0.3" stroke-width="1.2" stroke-dasharray="14 10" fill="none">
                                <animateTransform attributeName="transform" type="rotate" from="360 290 220" to="0 290 220" dur="18s" repeatCount="indefinite"/>
                            </circle>

                            <!-- Radar Sweep Ray -->
                            <line x1="290" y1="220" x2="290" y2="145" stroke="#60A5FA" stroke-width="1.5" opacity="0.5" filter="url(#laser-glow)">
                                <animateTransform attributeName="transform" type="rotate" from="0 290 220" to="360 290 220" dur="6s" repeatCount="indefinite"/>
                            </line>

                            <!-- Core Hexagon Base -->
                            <circle cx="290" cy="220" r="54" fill="url(#center-hub-fill)" stroke="#3B82F6" stroke-width="2.5" filter="url(#laser-glow)"/>
                            <circle cx="290" cy="220" r="46" fill="#0B1329" stroke="#60A5FA" stroke-opacity="0.4" stroke-width="1"/>

                            <!-- Center Core Content -->
                            <!-- Central Holographic Cube / Stack -->
                            <path d="M 290 196 L 306 205 L 290 214 L 274 205 Z" fill="#3B82F6" fill-opacity="0.5"/>
                            <path d="M 274 205 L 290 214 L 290 227 L 274 218 Z" fill="#1D4ED8" fill-opacity="0.7"/>
                            <path d="M 306 205 L 290 214 L 290 227 L 306 218 Z" fill="#2563EB" fill-opacity="0.9"/>

                            <!-- Center Text -->
                            <text x="290" y="238" fill="#FFFFFF" font-family="ui-monospace, monospace" font-size="10.5" font-weight="800" text-anchor="middle" letter-spacing="1">MBS CORE</text>
                            <text x="290" y="250" fill="#60A5FA" font-family="ui-monospace, monospace" font-size="8" font-weight="600" text-anchor="middle" letter-spacing="0.5">ERP ENGINE</text>

                            <!-- Live Radar Pulse Ripples -->
                            <circle cx="290" cy="220" r="54" fill="none" stroke="#60A5FA" stroke-width="1" opacity="0">
                                <animate attributeName="r" values="54;120;54" dur="4s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.6;0;0.6" dur="4s" repeatCount="indefinite"/>
                            </circle>
                        </svg>
                    </div>

                    <!-- Bottom Floating HUD Banner (Multi-Branch Mesh Indicator) -->
                    <div class="px-5 py-3 bg-slate-950/90 border-t border-slate-800/80 flex flex-wrap items-center justify-between gap-3 text-xs font-mono">
                        <div class="flex items-center gap-2 text-slate-300">
                            <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                            <span>Konsep Arsitektur: <strong class="text-white">Multi-cabang &bull; Role-based Access</strong></span>
                        </div>
                        <div class="flex items-center gap-2 text-emerald-400 text-[11px]">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Multi-Tenant &bull; Scalable Design</span>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- end grid -->
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-slate-500 text-xs hidden md:flex">
        <span class="tracking-[0.2em] uppercase text-[10px] font-mono font-medium">
            <span x-show="$store.locale === 'id'">Gulir</span>
            <span x-show="$store.locale === 'en'" x-cloak>Scroll</span>
        </span>
        <div class="w-px h-8 bg-gradient-to-b from-slate-600 to-transparent"></div>
    </div>
</section>
