<section id="testimonials" class="section-padding relative">
    <div class="container-max">
        <div class="text-center mb-16">
            <span class="scroll-reveal inline-block text-sm font-medium text-primary uppercase tracking-[0.1em] mb-3 font-mono">Testimoni</span>
            <h2 class="scroll-reveal font-display text-3xl md:text-4xl font-bold mb-4">Apa Kata <span class="gradient-text">Klien Kami</span></h2>
            <p class="scroll-reveal text-on-surface-variant max-w-2xl mx-auto font-body">Kepercayaan klien adalah prioritas utama kami. Berikut tanggapan mereka setelah bekerja sama dengan kami.</p>
        </div>

        <div x-data="{ current: 0 }" class="relative max-w-4xl mx-auto">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out"
                     :style="`transform: translateX(-${current * 100}%)`">
                    <div class="min-w-full px-4">
                        <div class="glass-card p-8 md:p-10 text-center">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary to-cyan-500 flex items-center justify-center mx-auto mb-6 text-xl font-bold text-on-primary">D</div>
                            <p class="text-lg md:text-xl text-on-surface leading-relaxed mb-6 italic font-body">
                                "Tim Mora Bangun Solutions sangat profesional dan responsif. Hasil kerja mereka melebihi ekspektasi kami. Sistem ERP yang dibangun sangat membantu operasional perusahaan."
                            </p>
                            <div class="text-sm">
                                <p class="font-semibold text-white">Dira Baraka</p>
                                <p class="text-on-surface-variant">CEO, PT. Dira Baraka Mulia</p>
                            </div>
                        </div>
                    </div>
                    <div class="min-w-full px-4">
                        <div class="glass-card p-8 md:p-10 text-center">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center mx-auto mb-6 text-xl font-bold">I</div>
                            <p class="text-lg md:text-xl text-on-surface leading-relaxed mb-6 italic font-body">
                                "Website company profile kami jadi jauh lebih profesional setelah direvamp oleh Mora Bangun. Loading cepat, desain modern, dan mudah dikelola."
                            </p>
                            <div class="text-sm">
                                <p class="font-semibold text-white">Indoplas</p>
                                <p class="text-on-surface-variant">Direktur, CV. Indoplas Mandiri Sejahtera</p>
                            </div>
                        </div>
                    </div>
                    <div class="min-w-full px-4">
                        <div class="glass-card p-8 md:p-10 text-center">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-br from-secondary to-orange-500 flex items-center justify-center mx-auto mb-6 text-xl font-bold text-on-secondary">L</div>
                            <p class="text-lg md:text-xl text-on-surface leading-relaxed mb-6 italic font-body">
                                "Platform e-commerce yang dibangun sangat memudahkan kami mengelola produk dan pesanan. Fitur pembayaran terintegrasi bikin pelanggan nyaman bertransaksi."
                            </p>
                            <div class="text-sm">
                                <p class="font-semibold text-white">Ladaik Store</p>
                                <p class="text-on-surface-variant">Owner, Ladaik Store</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center gap-3 mt-8">
                <template x-for="(_, index) in [0, 1, 2]" :key="index">
                    <button @click="current = index"
                            class="w-2.5 h-2.5 rounded-full transition-all duration-300"
                            :class="current === index ? 'bg-primary w-8' : 'bg-outline-variant hover:bg-outline'">
                    </button>
                </template>
            </div>
        </div>
    </div>
</section>
