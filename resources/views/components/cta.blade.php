<section class="section-padding relative overflow-hidden bg-[#050d1e]">
    <!-- Background effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 via-transparent to-blue-600/5 pointer-events-none"></div>
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-500/40 to-transparent"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-cyan-500/4 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container-max relative z-10">
        <div class="cta-card p-12 md:p-16 text-center max-w-4xl mx-auto">
            <!-- Top accent line -->
            <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-cyan-500 to-transparent rounded-t-3xl"></div>

            <!-- Label -->
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Ambil Tindakan Sekarang</span>
                <span x-show="$store.locale === 'en'" x-cloak>Take Action Now</span>
            </span>

            <!-- Headline -->
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-3 mb-5">
                <span x-show="$store.locale === 'id'">
                    Jangan Biarkan <span class="gradient-text">Kompetitor</span><br>
                    Melaju Lebih Dulu
                </span>
                <span x-show="$store.locale === 'en'" x-cloak>
                    Don't Let <span class="gradient-text">Competitors</span><br>
                    Get Ahead of You
                </span>
            </h2>

            <p class="scroll-reveal text-slate-400 max-w-xl mx-auto mb-10 text-lg leading-relaxed font-body">
                <span x-show="$store.locale === 'id'">Setiap hari tanpa sistem yang tepat adalah peluang yang hilang. Jadikan bisnis Anda lebih cerdas, efisien, dan kompetitif dengan solusi AI kami.</span>
                <span x-show="$store.locale === 'en'" x-cloak>Every day without the right system is an opportunity lost. Make your business smarter, more efficient, and competitive with our AI solutions.</span>
            </p>

            <!-- CTA Buttons -->
            <div class="scroll-reveal flex flex-col sm:flex-row items-center justify-center gap-4 mb-10">
                <a href="https://wa.me/6281266686678?text=Halo%20Mora%20Bangun%20Solutions%2C%20saya%20ingin%20konsultasi%20gratis"
                   target="_blank"
                   data-testid="cta-whatsapp-btn"
                   class="inline-flex items-center gap-3 px-8 py-4 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl transition-all duration-300 hover:shadow-2xl hover:shadow-cyan-500/40 hover:-translate-y-1 w-full sm:w-auto justify-center">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    <span x-show="$store.locale === 'id'">Konsultasi Gratis via WhatsApp</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Free Consultation via WhatsApp</span>
                </a>
                <a href="#contact"
                   data-testid="cta-form-btn"
                   class="inline-flex items-center gap-3 px-8 py-4 border border-slate-600 hover:border-cyan-500/60 text-slate-300 hover:text-white font-semibold rounded-xl transition-all duration-300 hover:-translate-y-1 w-full sm:w-auto justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span x-show="$store.locale === 'id'">Kirim Email</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Send Email</span>
                </a>
            </div>

            <!-- Trust Elements -->
            <div class="scroll-reveal flex flex-wrap items-center justify-center gap-6 text-xs text-slate-500">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span x-show="$store.locale === 'id'">Konsultasi 100% Gratis</span>
                    <span x-show="$store.locale === 'en'" x-cloak>100% Free Consultation</span>
                </div>
                <div class="w-1 h-1 rounded-full bg-slate-700 hidden sm:block"></div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span x-show="$store.locale === 'id'">Respons &lt; 2 Jam</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Response &lt; 2 Hours</span>
                </div>
                <div class="w-1 h-1 rounded-full bg-slate-700 hidden sm:block"></div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    <span x-show="$store.locale === 'id'">No Komitmen Diperlukan</span>
                    <span x-show="$store.locale === 'en'" x-cloak>No Commitment Required</span>
                </div>
                <div class="w-1 h-1 rounded-full bg-slate-700 hidden sm:block"></div>
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-violet-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span x-show="$store.locale === 'id'">50+ Klien Puas</span>
                    <span x-show="$store.locale === 'en'" x-cloak>50+ Happy Clients</span>
                </div>
            </div>
        </div>
    </div>
</section>
