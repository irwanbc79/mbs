<section id="contact" class="section-padding relative bg-surface">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/30 to-transparent"></div>
    <div class="absolute inset-0 grid-bg opacity-30 pointer-events-none"></div>

    <div class="container-max relative z-10">
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Hubungi Kami</span>
                <span x-show="$store.locale === 'en'" x-cloak>Contact Us</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-2 mb-4">
                <span x-show="$store.locale === 'id'">Siap Mulai <span class="gradient-text">Transformasi Digital?</span></span>
                <span x-show="$store.locale === 'en'" x-cloak>Ready to Start <span class="gradient-text">Digital Transformation?</span></span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Ceritakan tantangan bisnis Anda kepada kami. Tim ahli kami siap memberikan solusi terbaik dalam 1x24 jam.</span>
                <span x-show="$store.locale === 'en'" x-cloak>Tell us about your business challenges. Our expert team is ready to provide the best solution within 24 hours.</span>
            </p>
        </div>

        <div class="grid lg:grid-cols-5 gap-12 items-start">

            <!-- ===== LEFT: Contact Info ===== -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Info Card -->
                <div class="scroll-reveal glass-card p-6 space-y-5">
                    <h3 class="font-bold text-lg text-white">
                        <span x-show="$store.locale === 'id'">Informasi Kontak</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Contact Information</span>
                    </h3>

                    <!-- Email -->
                    <a href="mailto:info@morabangun.com" class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center flex-shrink-0 group-hover:bg-cyan-500/20 transition-colors">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 mb-0.5">Email</p>
                            <p class="text-sm text-white group-hover:text-cyan-400 transition-colors font-medium">info@morabangun.com</p>
                        </div>
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://wa.me/6281399997132?text=Halo%20Mora%20Bangun%20Solutions%2C%20saya%20tertarik%20dengan%20layanan%20Anda" target="_blank" rel="noopener noreferrer" data-testid="contact-whatsapp" class="flex items-center gap-4 group">
                        <div class="w-10 h-10 rounded-xl bg-green-500/10 border border-green-500/20 flex items-center justify-center flex-shrink-0 group-hover:bg-green-500/20 transition-colors">
                            <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 mb-0.5">WhatsApp</p>
                            <p class="text-sm text-white group-hover:text-green-400 transition-colors font-medium">+62 813-9999-7132</p>
                        </div>
                    </a>

                    <!-- Location -->
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-violet-500/10 border border-violet-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 mb-0.5">
                                <span x-show="$store.locale === 'id'">Lokasi</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Location</span>
                            </p>
                            <p class="text-sm text-white font-medium">Medan, Sumatera Utara, Indonesia</p>
                        </div>
                    </div>
                </div>

                <!-- Response Time -->
                <div class="scroll-reveal glass-card p-5">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-2.5 h-2.5 rounded-full bg-green-400 animate-pulse"></div>
                        <span class="text-sm font-semibold text-white">
                            <span x-show="$store.locale === 'id'">Tim Online Sekarang</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Team Online Now</span>
                        </span>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed font-body">
                        <span x-show="$store.locale === 'id'">Rata-rata waktu respons: <strong class="text-cyan-400">kurang dari 2 jam</strong> di hari kerja. Untuk urgent, hubungi via WhatsApp.</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Average response time: <strong class="text-cyan-400">less than 2 hours</strong> on business days. For urgent matters, contact via WhatsApp.</span>
                    </p>
                </div>

                <!-- What to Expect -->
                <div class="scroll-reveal space-y-2">
                    <p class="text-xs text-slate-500 uppercase tracking-widest font-mono">
                        <span x-show="$store.locale === 'id'">Setelah konsultasi</span>
                        <span x-show="$store.locale === 'en'" x-cloak>After consultation</span>
                    </p>
                    @foreach([
                        ['icon' => '1', 'id' => 'Analisis kebutuhan bisnis Anda', 'en' => 'Analysis of your business needs'],
                        ['icon' => '2', 'id' => 'Proposal solusi & estimasi biaya', 'en' => 'Solution proposal & cost estimate'],
                        ['icon' => '3', 'id' => 'Demo sistem & presentasi teknis', 'en' => 'System demo & technical presentation'],
                    ] as $step)
                    <div class="flex items-center gap-3 text-sm">
                        <div class="w-6 h-6 rounded-full bg-cyan-500/15 border border-cyan-500/25 flex items-center justify-center text-cyan-400 text-xs font-bold flex-shrink-0">{{ $step['icon'] }}</div>
                        <span class="text-slate-400">
                            <span x-show="$store.locale === 'id'">{{ $step['id'] }}</span>
                            <span x-show="$store.locale === 'en'" x-cloak>{{ $step['en'] }}</span>
                        </span>
                    </div>
                    @endforeach
                </div>

            </div><!-- end left col -->

            <!-- ===== RIGHT: Contact Form ===== -->
            <div class="lg:col-span-3">
                <div class="scroll-reveal glass-card p-8"
                     x-data="{
                         form: { name: '', email: '', phone: '', company: '', industry: '', message: '' },
                         loading: false,
                         success: false,
                         error: '',
                         async submit() {
                             this.loading = true;
                             this.error = '';
                             try {
                                 const res = await fetch('/contact', {
                                     method: 'POST',
                                     headers: {
                                         'Content-Type': 'application/json',
                                         'X-CSRF-TOKEN': document.querySelector('[name=csrf-token]').content
                                     },
                                     body: JSON.stringify(this.form)
                                 });
                                 const data = await res.json();
                                 if (res.ok && data.success) {
                                     this.success = true;
                                     this.form = { name: '', email: '', phone: '', company: '', industry: '', message: '' };
                                 } else {
                                     this.error = data.message || 'Terjadi kesalahan. Coba lagi.';
                                 }
                             } catch (e) {
                                 this.error = 'Gagal mengirim. Periksa koneksi Anda.';
                             } finally {
                                 this.loading = false;
                             }
                         }
                     }">

                    <!-- Success State -->
                    <div x-show="success" x-cloak class="text-center py-10">
                        <div class="w-16 h-16 rounded-full bg-green-500/15 border border-green-500/30 flex items-center justify-center mx-auto mb-5">
                            <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">
                            <span x-show="$store.locale === 'id'">Pesan Terkirim!</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Message Sent!</span>
                        </h3>
                        <p class="text-slate-400 text-sm font-body max-w-md mx-auto">
                            <span x-show="$store.locale === 'id'">Terima kasih! Tim kami akan menghubungi Anda dalam 1x24 jam. Cek email atau WhatsApp Anda.</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Thank you! Our team will contact you within 24 hours. Check your email or WhatsApp.</span>
                        </p>
                        <button @click="success = false" class="mt-6 text-cyan-400 hover:text-cyan-300 text-sm underline transition-colors">
                            <span x-show="$store.locale === 'id'">Kirim pesan lain</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Send another message</span>
                        </button>
                    </div>

                    <!-- Form -->
                    <form x-show="!success" @submit.prevent="submit">
                        <h3 class="text-lg font-bold text-white mb-6">
                            <span x-show="$store.locale === 'id'">Kirim Pesan kepada Kami</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Send Us a Message</span>
                        </h3>

                        <div class="grid sm:grid-cols-2 gap-4 mb-4">
                            <!-- Name -->
                            <div>
                                <label class="block text-xs text-slate-400 mb-1.5 font-medium">
                                    <span x-show="$store.locale === 'id'">Nama Lengkap <span class="text-red-400">*</span></span>
                                    <span x-show="$store.locale === 'en'" x-cloak>Full Name <span class="text-red-400">*</span></span>
                                </label>
                                <input type="text"
                                       x-model="form.name"
                                       data-testid="contact-name"
                                       required
                                       class="form-input"
                                       :placeholder="$store.locale === 'id' ? 'Nama Anda' : 'Your Name'">
                            </div>
                            <!-- Email -->
                            <div>
                                <label class="block text-xs text-slate-400 mb-1.5 font-medium">
                                    Email <span class="text-red-400">*</span>
                                </label>
                                <input type="email"
                                       x-model="form.email"
                                       data-testid="contact-email"
                                       required
                                       class="form-input"
                                       :placeholder="$store.locale === 'id' ? 'email@perusahaan.com' : 'email@company.com'">
                            </div>
                            <!-- Phone -->
                            <div>
                                <label class="block text-xs text-slate-400 mb-1.5 font-medium">
                                    <span x-show="$store.locale === 'id'">Nomor WhatsApp</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>WhatsApp Number</span>
                                </label>
                                <input type="tel"
                                       x-model="form.phone"
                                       data-testid="contact-phone"
                                       class="form-input"
                                       placeholder="+62 812-XXXX-XXXX">
                            </div>
                            <!-- Company -->
                            <div>
                                <label class="block text-xs text-slate-400 mb-1.5 font-medium">
                                    <span x-show="$store.locale === 'id'">Nama Perusahaan <span class="text-red-400">*</span></span>
                                    <span x-show="$store.locale === 'en'" x-cloak>Company Name <span class="text-red-400">*</span></span>
                                </label>
                                <input type="text"
                                       x-model="form.company"
                                       data-testid="contact-company"
                                       required
                                       class="form-input"
                                       :placeholder="$store.locale === 'id' ? 'PT / CV / BUMN Anda' : 'Your PT / CV / Company'">
                            </div>
                        </div>

                        <!-- Industry -->
                        <div class="mb-4">
                            <label class="block text-xs text-slate-400 mb-1.5 font-medium">
                                <span x-show="$store.locale === 'id'">Skala Perusahaan</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Company Scale</span>
                            </label>
                            <select x-model="form.industry"
                                    data-testid="contact-industry"
                                    class="form-input">
                                <option value="" disabled selected x-text="$store.locale === 'id' ? 'Pilih skala perusahaan Anda' : 'Select your company scale'"></option>
                                <option value="korporasi" x-text="$store.locale === 'id' ? 'Korporasi (Perusahaan Besar)' : 'Corporation (Large Enterprise)'"></option>
                                <option value="bumn">BUMN / BUMD</option>
                                <option value="startup">Startup &amp; Scale-up</option>
                                <option value="ukm" x-text="$store.locale === 'id' ? 'UKM / UMKM' : 'SME'"></option>
                                <option value="lainnya" x-text="$store.locale === 'id' ? 'Lainnya' : 'Other'"></option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div class="mb-6">
                            <label class="block text-xs text-slate-400 mb-1.5 font-medium">
                                <span x-show="$store.locale === 'id'">Pesan / Kebutuhan Anda <span class="text-red-400">*</span></span>
                                <span x-show="$store.locale === 'en'" x-cloak>Message / Your Needs <span class="text-red-400">*</span></span>
                            </label>
                            <textarea x-model="form.message"
                                      data-testid="contact-message"
                                      rows="4"
                                      required
                                      class="form-input resize-none"
                                      :placeholder="$store.locale === 'id' ? 'Ceritakan kebutuhan sistem / digital bisnis Anda...' : 'Tell us about your system / digital business needs...'"></textarea>
                        </div>

                        <!-- Error Message -->
                        <div x-show="error" x-cloak class="mb-4 p-3 rounded-lg bg-red-500/10 border border-red-500/20 text-red-400 text-sm">
                            <span x-text="error"></span>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                                data-testid="contact-submit"
                                :disabled="loading"
                                class="w-full flex items-center justify-center gap-2.5 px-8 py-4 bg-cyan-500 hover:bg-cyan-400 disabled:bg-slate-700 disabled:cursor-not-allowed text-slate-950 disabled:text-slate-500 font-bold rounded-xl transition-all duration-200 hover:shadow-xl hover:shadow-cyan-500/25 hover:-translate-y-0.5 disabled:transform-none">
                            <span x-show="!loading">
                                <span x-show="$store.locale === 'id'">Kirim Pesan Sekarang</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Send Message Now</span>
                            </span>
                            <span x-show="loading" class="flex items-center gap-2">
                                <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                <span x-show="$store.locale === 'id'">Mengirim...</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Sending...</span>
                            </span>
                        </button>

                        <p class="text-center text-xs text-slate-600 mt-4 font-body">
                            <span x-show="$store.locale === 'id'">Konsultasi 100% gratis &bullet; Tidak ada komitmen &bullet; Respons &lt; 2 jam</span>
                            <span x-show="$store.locale === 'en'" x-cloak>100% free consultation &bullet; No commitment &bullet; Response &lt; 2 hours</span>
                        </p>
                    </form>
                </div>
            </div><!-- end right col -->

        </div><!-- end grid -->
    </div>
</section>
