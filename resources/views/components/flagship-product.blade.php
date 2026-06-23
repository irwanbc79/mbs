<section id="moratrade-ai" class="section-padding relative overflow-hidden bg-surface-dim">
    <!-- Background grid & glow -->
    <div class="absolute inset-0 grid-bg opacity-30 pointer-events-none"></div>
    <div class="absolute top-1/3 left-1/4 w-[400px] h-[400px] bg-cyan-500/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-blue-600/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 container-max px-6 lg:px-24">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="scroll-reveal inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-xs text-cyan-400 font-bold uppercase tracking-widest">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
                <span x-show="$store.locale === 'id'">Produk Andalan</span>
                <span x-show="$store.locale === 'en'" x-cloak>Flagship Product</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-black tracking-tight mt-4 mb-4">
                MoraTrade <span class="gradient-text">AI</span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-3xl mx-auto font-body text-base md:text-lg">
                <span x-show="$store.locale === 'id'">Revolusi Otomasi Pabean &amp; Logistik Enterprise. Menghubungkan Dokumen Impor/Ekspor Anda langsung ke sistem <strong>CEISA 4.0 Bea Cukai</strong> melalui integrasi Host-to-Host (H2H) berbasis kecerdasan buatan.</span>
                <span x-show="$store.locale === 'en'" x-cloak>Revolutionizing Enterprise Customs &amp; Logistics Automation. Direct Host-to-Host (H2H) integration between your Import/Export documents and the <strong>CEISA 4.0 Customs</strong> system, driven by AI.</span>
            </p>
        </div>

        <!-- Main Product Layout Grid -->
        <div class="grid lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Side: Product Description & Highlights (5 Columns) -->
            <div class="lg:col-span-5 space-y-8">
                <div class="space-y-4">
                    <h3 class="text-2xl md:text-3xl font-bold text-white tracking-tight">
                        <span x-show="$store.locale === 'id'">Otomatiskan Alur Dokumen Pabean Anda 10x Lebih Cepat</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Automate Your Customs Workflows 10x Faster</span>
                    </h3>
                    <p class="text-slate-400 leading-relaxed font-body text-sm md:text-base">
                        <span x-show="$store.locale === 'id'">Tidak ada lagi input manual lembar per lembar. MoraTrade AI bertindak sebagai jembatan pintar yang mengekstrak, memverifikasi, dan mensinkronisasikan dokumen ekspor-impor secara aman dan real-time.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>No more manual sheet-by-sheet data entry. MoraTrade AI acts as a smart bridge that securely extracts, verifies, and synchronizes your import-export documents in real-time.</span>
                    </p>
                </div>

                <!-- Feature list -->
                <div class="space-y-4 font-body">
                    <!-- Feature 1 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-900/40 border border-slate-800 hover:border-cyan-500/20 transition-all group">
                        <div class="w-10 h-10 rounded-lg bg-cyan-500/10 flex items-center justify-center text-cyan-400 group-hover:bg-cyan-500 group-hover:text-slate-950 transition-all duration-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-sm md:text-base">
                                <span x-show="$store.locale === 'id'">AI Document Reader (OCR)</span>
                                <span x-show="$store.locale === 'en'" x-cloak>AI Document Reader (OCR)</span>
                            </h4>
                            <p class="text-slate-500 text-xs md:text-sm mt-1">
                                <span x-show="$store.locale === 'id'">Ekstraksi instan untuk Invoice, Packing List, B/L, dan Shipping Instruction dengan akurasi hingga 99.4%.</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Instant extraction of Invoice, Packing List, B/L, and Shipping Instructions with up to 99.4% accuracy.</span>
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-900/40 border border-slate-800 hover:border-blue-500/20 transition-all group">
                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-400 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-sm md:text-base">
                                <span x-show="$store.locale === 'id'">AI Compliance Audit</span>
                                <span x-show="$store.locale === 'en'" x-cloak>AI Compliance Audit</span>
                            </h4>
                            <p class="text-slate-500 text-xs md:text-sm mt-1">
                                <span x-show="$store.locale === 'id'">Validasi HS Code, lisensi importir (NIB/API), dan kalkulasi tarif bea masuk secara otomatis untuk meminimalisir reject.</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Automated validation of HS Codes, importer licenses (NIB/API), and duty calculations to minimize rejections.</span>
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-900/40 border border-slate-800 hover:border-violet-500/20 transition-all group">
                        <div class="w-10 h-10 rounded-lg bg-violet-500/10 flex items-center justify-center text-violet-400 group-hover:bg-violet-500 group-hover:text-white transition-all duration-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-sm md:text-base">
                                <span x-show="$store.locale === 'id'">CEISA 4.0 H2H Integration</span>
                                <span x-show="$store.locale === 'en'" x-cloak>CEISA 4.0 H2H Integration</span>
                            </h4>
                            <p class="text-slate-500 text-xs md:text-sm mt-1">
                                <span x-show="$store.locale === 'id'">Kirim draft PIB/PEB ke Bea Cukai &amp; terima respon SPJM/SPPB real-time langsung ke sistem internal Anda.</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Submit PIB/PEB drafts to Customs &amp; receive real-time SPJM/SPPB statuses directly inside your internal systems.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Interactive Sandbox Simulator (7 Columns) -->
            <div class="lg:col-span-7 bg-slate-950/85 rounded-2xl border border-slate-800 shadow-2xl p-6 relative overflow-hidden" 
                 x-data="{
                     step: 1,
                     selectedDoc: '',
                     ocrProgress: 0,
                     auditLogs: [],
                     auditDone: false,
                     ceisaStatus: 'idle',
                     billingCode: '',
                     responseDoc: '',
                     notifSent: false,
                     
                     startDemo(docType) {
                         this.selectedDoc = docType;
                         this.step = 2;
                         this.ocrProgress = 0;
                         let interval = setInterval(() => {
                             if (this.ocrProgress < 100) {
                                 this.ocrProgress += 10;
                             } else {
                                 clearInterval(interval);
                                 setTimeout(() => { this.step3(); }, 600);
                             }
                         }, 150);
                     },
                     
                     step3() {
                         this.step = 3;
                         this.auditLogs = [];
                         this.auditDone = false;
                         
                         let logs = [
                             { id: 'NIB verified (API-U Active)', en: 'NIB verified (API-U Active)', status: 'pass' },
                             { id: 'HS Code 8708.29.95 valid & aktif', en: 'HS Code 8708.29.95 valid & active', status: 'pass' },
                             { id: 'Ketentuan Lartas: BEBAS LARTAS', en: 'Restriction Check: FREE/NO RESTRICTIONS', status: 'pass' },
                             { id: 'Valuta USD ke IDR terkonversi (Kurs Pajak)', en: 'Currency USD to IDR converted (Tax Rate)', status: 'pass' }
                         ];
                         
                         let i = 0;
                         let logInterval = setInterval(() => {
                             if (i < logs.length) {
                                 this.auditLogs.push(logs[i]);
                                 i++;
                             } else {
                                 clearInterval(logInterval);
                                 this.auditDone = true;
                             }
                         }, 600);
                     },
                     
                     submitToCeisa() {
                         this.step = 4;
                         this.ceisaStatus = 'submitting';
                         
                         setTimeout(() => {
                             this.ceisaStatus = 'registered';
                             this.billingCode = '820260623000958';
                             
                             setTimeout(() => {
                                 this.ceisaStatus = 'approved';
                                 this.responseDoc = this.selectedDoc === 'import' ? 'SPPB (Persetujuan Pengeluaran)' : 'NPE (Nota Pelayanan Ekspor)';
                                 this.notifSent = true;
                             }, 2000);
                         }, 2000);
                     },
                     
                     resetDemo() {
                         this.step = 1;
                         this.selectedDoc = '';
                         this.ocrProgress = 0;
                         this.auditLogs = [];
                         this.auditDone = false;
                         this.ceisaStatus = 'idle';
                         this.billingCode = '';
                         this.responseDoc = '';
                         this.notifSent = false;
                     }
                 }">
                
                <!-- Terminal Header -->
                <div class="flex items-center justify-between pb-4 border-b border-slate-900 mb-6">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-red-500/80"></span>
                        <span class="w-3 h-3 rounded-full bg-yellow-500/80"></span>
                        <span class="w-3 h-3 rounded-full bg-green-500/80"></span>
                        <span class="text-xs font-mono text-slate-500 ml-2 select-none">MoraTrade AI - Interactive Sandbox</span>
                    </div>
                    <button x-show="step > 1" @click="resetDemo()" class="text-xs text-slate-400 hover:text-cyan-400 transition-colors flex items-center gap-1 font-body font-semibold cursor-pointer">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.21 8H18"/></svg>
                        <span x-show="$store.locale === 'id'">Reset Demo</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Reset Demo</span>
                    </button>
                </div>

                <!-- STEP 1: Select Document Mockup -->
                <div x-show="step === 1" class="space-y-5">
                    <div class="text-center py-4">
                        <p class="text-slate-300 font-bold mb-2 text-sm md:text-base">
                            <span x-show="$store.locale === 'id'">Simulasikan Kekuatan AI MoraTrade</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Simulate MoraTrade AI Capabilities</span>
                        </p>
                        <p class="text-slate-500 text-xs md:text-sm font-body">
                            <span x-show="$store.locale === 'id'">Pilih salah satu contoh dokumen untuk memulai alur otomatisasi pabean:</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Select one of the sample documents to initiate the customs automation flow:</span>
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Card 1: Import Document -->
                        <button @click="startDemo('import')" class="group relative rounded-xl border border-slate-800 bg-slate-900/50 p-5 text-left transition-all hover:border-cyan-500/40 hover:bg-cyan-500/5 hover:-translate-y-1 cursor-pointer">
                            <div class="absolute top-4 right-4 text-cyan-500/20 group-hover:text-cyan-400 transition-colors">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"/></svg>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-cyan-500/10 flex items-center justify-center text-cyan-400 mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            </div>
                            <h4 class="font-bold text-white text-sm md:text-base">
                                <span x-show="$store.locale === 'id'">Dokumen Impor (PIB)</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Import Document (PIB)</span>
                            </h4>
                            <p class="text-slate-500 text-xs mt-1 font-body">Invoice, Packing List, &amp; Bill of Lading (B/L) sparepart otomotif (USD 24,500).</p>
                        </button>

                        <!-- Card 2: Export Document -->
                        <button @click="startDemo('export')" class="group relative rounded-xl border border-slate-800 bg-slate-900/50 p-5 text-left transition-all hover:border-blue-500/40 hover:bg-blue-500/5 hover:-translate-y-1 cursor-pointer">
                            <div class="absolute top-4 right-4 text-blue-500/20 group-hover:text-blue-400 transition-colors">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"/></svg>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-400 mb-3">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg>
                            </div>
                            <h4 class="font-bold text-white text-sm md:text-base">
                                <span x-show="$store.locale === 'id'">Dokumen Ekspor (PEB)</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Export Document (PEB)</span>
                            </h4>
                            <p class="text-slate-500 text-xs mt-1 font-body">Invoice &amp; Packing List produk biji kopi Arabika lintong ke Jepang (USD 42,000).</p>
                        </button>
                    </div>
                </div>

                <!-- STEP 2: AI OCR Scanning Animation -->
                <div x-show="step === 2" class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h4 class="text-sm font-mono text-cyan-400 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                            <span x-show="$store.locale === 'id'">AI Engine: Melakukan OCR &amp; Ekstraksi Dokumen...</span>
                            <span x-show="$store.locale === 'en'" x-cloak>AI Engine: Running OCR &amp; Document Extraction...</span>
                        </h4>
                        <span class="text-xs font-mono text-slate-400" x-text="ocrProgress + '%'"></span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="w-full h-1.5 rounded-full bg-slate-800 overflow-hidden">
                        <div class="h-full bg-cyan-400 transition-all duration-150" :style="'width: ' + ocrProgress + '%'"></div>
                    </div>

                    <!-- Scanning Document Mock -->
                    <div class="relative rounded-xl border border-slate-800 bg-slate-900/30 p-4 font-mono text-[11px] text-slate-500 leading-relaxed overflow-hidden h-36">
                        <!-- Laser line animation -->
                        <div class="absolute left-0 right-0 h-0.5 bg-cyan-500/80 shadow-md shadow-cyan-500/50 animate-bounce" style="top: 15%;"></div>
                        
                        <div class="space-y-1">
                            <p class="text-slate-400"># DECLARED INVOICE DATA</p>
                            <p>INVOICE NO: INV-2026-0623-01</p>
                            <p>SHIPPER: LINTONG COFFEE EXPORTER INDONESIA</p>
                            <p>CONSIGNEE: KYOTO ROASTERS CORP, JAPAN</p>
                            <p>DESCRIPTION: ARABICA COFFEE BEANS GRADE A (10,000 KGS)</p>
                            <p>TOTAL VALUE: USD 42,000.00</p>
                            <p>H.S. CODE DECLARED: 0901.11.10</p>
                        </div>
                    </div>
                </div>

                <!-- STEP 3: AI Compliance Check -->
                <div x-show="step === 3" class="space-y-6">
                    <h4 class="text-sm font-mono text-cyan-400 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                        <span x-show="$store.locale === 'id'">AI Auditor: Memeriksa Kepatuhan Pabean...</span>
                        <span x-show="$store.locale === 'en'" x-cloak>AI Auditor: Checking Customs Compliance...</span>
                    </h4>

                    <!-- Compliance Logs -->
                    <div class="space-y-2 font-mono text-xs">
                        <template x-for="log in auditLogs" :key="log.id">
                            <div class="flex items-center gap-3 p-3 rounded-lg bg-slate-900/60 border border-slate-800">
                                <span class="text-green-400">✓</span>
                                <span class="text-slate-300" x-text="$store.locale === 'id' ? log.id : log.en"></span>
                            </div>
                        </template>
                        
                        <!-- Temporary waiting element -->
                        <div x-show="!auditDone" class="flex items-center gap-3 p-3 text-slate-500 italic">
                            <svg class="animate-spin h-3 w-3 text-cyan-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            <span x-show="$store.locale === 'id'">Menyusun data XML/JSON CEISA 4.0...</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Structuring CEISA 4.0 XML/JSON payload...</span>
                        </div>
                    </div>

                    <!-- Action Submit Button -->
                    <div x-show="auditDone" class="text-center pt-2">
                        <button @click="submitToCeisa()" class="px-6 py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl transition-all shadow-lg shadow-cyan-500/20 hover:shadow-cyan-500/30 flex items-center justify-center gap-2 mx-auto cursor-pointer">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                            <span x-show="$store.locale === 'id'">Kirim ke CEISA Bea Cukai H2H Gateway</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Submit to CEISA Customs H2H Gateway</span>
                        </button>
                    </div>
                </div>

                <!-- STEP 4: CEISA Status & Response Sync -->
                <div x-show="step === 4" class="space-y-6">
                    <!-- Progress / Status Indicator -->
                    <div class="flex flex-col items-center justify-center py-6 text-center">
                        <!-- Submitting Spinner -->
                        <div x-show="ceisaStatus === 'submitting'" class="space-y-4">
                            <div class="w-12 h-12 rounded-full border-t-2 border-r-2 border-cyan-400 animate-spin mx-auto"></div>
                            <p class="text-sm font-mono text-cyan-400">
                                <span x-show="$store.locale === 'id'">Mengirim paket pabean via Host-to-Host API...</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Sending customs payload via Host-to-Host API...</span>
                            </p>
                        </div>

                        <!-- Registered State -->
                        <div x-show="ceisaStatus === 'registered'" class="space-y-3">
                            <div class="w-12 h-12 rounded-full bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 mx-auto animate-pulse">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <p class="text-base font-bold text-white">
                                <span x-show="$store.locale === 'id'">Dokumen Terdaftar di Bea Cukai</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Document Registered at Customs</span>
                            </p>
                            <p class="text-xs font-mono text-slate-500">
                                NO AJU: 050700-001249-20260623-000452
                            </p>
                            <div class="inline-block px-3 py-1 bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 rounded-full text-[10px] font-mono">
                                BILLING: Kode Billing Terbit (ID Billing: <span x-text="billingCode"></span>)
                            </div>
                        </div>

                        <!-- Approved State (Success) -->
                        <div x-show="ceisaStatus === 'approved'" class="space-y-4 w-full">
                            <div class="w-14 h-14 rounded-full bg-green-500/20 border border-green-500/40 flex items-center justify-center text-green-400 mx-auto">
                                <svg class="w-8 h-8 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <div>
                                <p class="text-lg font-bold text-green-400">
                                    <span x-show="$store.locale === 'id'">Persetujuan Bea Cukai Dirilis!</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>Customs Clearance Approved!</span>
                                </p>
                                <p class="text-xs text-slate-400 mt-1 font-body">
                                    <span x-show="$store.locale === 'id'">Mendapatkan respon pabean akhir:</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>Final customs response received:</span>
                                    <span class="font-bold text-white font-mono" x-text="responseDoc"></span>
                                </p>
                            </div>

                            <!-- Dashboard & Notification mockup -->
                            <div class="rounded-xl border border-slate-800 bg-slate-900/60 p-4 text-left space-y-3 max-w-md mx-auto font-body">
                                <div class="flex items-center justify-between text-xs text-slate-400">
                                    <span>Sync Status: <strong class="text-green-400 font-semibold">SUCCESS</strong></span>
                                    <span class="font-mono">21:11</span>
                                </div>
                                <div class="p-2.5 rounded bg-slate-950 border border-slate-800 text-[11px] font-mono text-slate-400 flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/></svg>
                                    <span>WA Sent to Customer: "Kargo Anda telah rilis (SPPB)..."</span>
                                </div>
                                <div class="flex gap-2">
                                    <button class="flex-grow py-2 rounded bg-cyan-500/10 border border-cyan-500/30 hover:bg-cyan-500/20 text-cyan-400 text-xs font-semibold tracking-wide transition-colors cursor-pointer">
                                        Unduh PDF
                                    </button>
                                    <button @click="resetDemo()" class="px-4 py-2 rounded border border-slate-700 hover:border-slate-500 text-slate-300 text-xs font-semibold transition-colors cursor-pointer">
                                        Uji Ulang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Glow effects on corners -->
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-cyan-500/10 rounded-full blur-xl pointer-events-none"></div>
                <div class="absolute -bottom-10 -left-10 w-24 h-24 bg-blue-600/10 rounded-full blur-xl pointer-events-none"></div>
            </div>
        </div>
    </div>
</section>
