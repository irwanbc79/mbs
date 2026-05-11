<section id="testimonials" class="section-padding relative bg-[#050d1e]">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-violet-500/25 to-transparent"></div>

    <div class="container-max">
        <!-- Header -->
        <div class="text-center mb-16">
            <span class="scroll-reveal section-label">
                <span x-show="$store.locale === 'id'">Testimoni Klien</span>
                <span x-show="$store.locale === 'en'" x-cloak>Client Testimonials</span>
            </span>
            <h2 class="scroll-reveal text-4xl md:text-5xl font-bold tracking-tight mt-2 mb-4">
                <span x-show="$store.locale === 'id'">Apa Kata <span class="gradient-text">Klien Kami</span></span>
                <span x-show="$store.locale === 'en'" x-cloak>What Our <span class="gradient-text">Clients Say</span></span>
            </h2>
            <p class="scroll-reveal text-slate-400 max-w-2xl mx-auto font-body">
                <span x-show="$store.locale === 'id'">Kepercayaan klien adalah aset terbesar kami. Berikut cerita sukses dari mereka yang telah bekerja sama dengan kami.</span>
                <span x-show="$store.locale === 'en'" x-cloak>Client trust is our greatest asset. Here are success stories from those who have worked with us.</span>
            </p>
        </div>

        <!-- 3-column Desktop, Carousel Mobile -->
        <div x-data="{ current: 0, total: 3 }">

            <!-- Desktop: 3 columns -->
            <div class="hidden md:grid md:grid-cols-3 gap-6">

                <!-- Testimonial 1 -->
                <div data-testid="testimonial-1" class="scroll-reveal glass-card p-8 flex flex-col relative">
                    <!-- Stars -->
                    <div class="flex gap-1 mb-5">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 star-filled" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <blockquote class="text-slate-300 text-sm leading-relaxed flex-grow mb-6 font-body italic">
                        <span x-show="$store.locale === 'id'">"Tim Mora Bangun Solutions sangat profesional dan responsif. Sistem ERP yang mereka bangun sangat membantu operasional perusahaan kami. Hasil kerja mereka melebihi ekspektasi, dan support after-sales yang luar biasa."</span>
                        <span x-show="$store.locale === 'en'" x-cloak>"Mora Bangun Solutions' team is very professional and responsive. The ERP system they built greatly helps our company operations. Their work exceeded expectations, and their after-sales support is outstanding."</span>
                    </blockquote>
                    <div class="flex items-center gap-3 pt-5 border-t border-white/8">
                        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-cyan-400 to-blue-600 flex items-center justify-center text-slate-950 font-bold text-sm flex-shrink-0">DB</div>
                        <div>
                            <p class="font-semibold text-white text-sm">Dira Baraka</p>
                            <p class="text-slate-500 text-xs">CEO, PT. Dira Baraka Mulia</p>
                        </div>
                        <div class="ml-auto text-xs px-2.5 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400">ERP</div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div data-testid="testimonial-2" class="scroll-reveal glass-card p-8 flex flex-col relative" style="transition-delay: 0.1s">
                    <div class="flex gap-1 mb-5">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 star-filled" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <blockquote class="text-slate-300 text-sm leading-relaxed flex-grow mb-6 font-body italic">
                        <span x-show="$store.locale === 'id'">"Website company profile kami jadi jauh lebih profesional setelah direvamp oleh Mora Bangun. Loading sangat cepat, desain modern, dan mudah kami kelola sendiri. Tim mereka juga sangat sabar dalam menjelaskan."</span>
                        <span x-show="$store.locale === 'en'" x-cloak>"Our company profile website became much more professional after being revamped by Mora Bangun. Very fast loading, modern design, and easy for us to manage ourselves. Their team is very patient in explaining."</span>
                    </blockquote>
                    <div class="flex items-center gap-3 pt-5 border-t border-white/8">
                        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">IS</div>
                        <div>
                            <p class="font-semibold text-white text-sm">Irawan Santoso</p>
                            <p class="text-slate-500 text-xs">
                                <span x-show="$store.locale === 'id'">Direktur, CV. Indoplas Mandiri Sejahtera</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Director, CV. Indoplas Mandiri Sejahtera</span>
                            </p>
                        </div>
                        <div class="ml-auto text-xs px-2.5 py-1 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400">
                            <span x-show="$store.locale === 'id'">Website</span>
                            <span x-show="$store.locale === 'en'" x-cloak>Website</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div data-testid="testimonial-3" class="scroll-reveal glass-card p-8 flex flex-col relative" style="transition-delay: 0.2s">
                    <div class="flex gap-1 mb-5">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 star-filled" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <blockquote class="text-slate-300 text-sm leading-relaxed flex-grow mb-6 font-body italic">
                        <span x-show="$store.locale === 'id'">"Platform e-commerce yang dibangun Mora Bangun benar-benar mengubah cara kami berjualan. Fitur manajemen produk, pembayaran terintegrasi, dan laporan real-time sangat membantu pertumbuhan bisnis kami."</span>
                        <span x-show="$store.locale === 'en'" x-cloak>"The e-commerce platform built by Mora Bangun truly changed how we sell. Product management features, integrated payments, and real-time reporting greatly support our business growth."</span>
                    </blockquote>
                    <div class="flex items-center gap-3 pt-5 border-t border-white/8">
                        <div class="w-11 h-11 rounded-full bg-gradient-to-br from-rose-400 to-pink-600 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">LS</div>
                        <div>
                            <p class="font-semibold text-white text-sm">Laila Sari</p>
                            <p class="text-slate-500 text-xs">
                                <span x-show="$store.locale === 'id'">Owner, Ladaik Store</span>
                                <span x-show="$store.locale === 'en'" x-cloak>Owner, Ladaik Store</span>
                            </p>
                        </div>
                        <div class="ml-auto text-xs px-2.5 py-1 rounded-full bg-rose-500/10 border border-rose-500/20 text-rose-400">E-Commerce</div>
                    </div>
                </div>

            </div><!-- end desktop grid -->

            <!-- Mobile Carousel -->
            <div class="md:hidden">
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-out"
                         :style="`transform: translateX(-${current * 100}%)`">

                        @foreach([
                            ['id' => 1, 'initial' => 'DB', 'color' => 'from-cyan-400 to-blue-600', 'tcolor' => 'text-slate-950', 'name_id' => 'Dira Baraka', 'name_en' => 'Dira Baraka', 'role_id' => 'CEO, PT. Dira Baraka Mulia', 'role_en' => 'CEO, PT. Dira Baraka Mulia', 'badge' => 'ERP', 'badge_color' => 'bg-emerald-500/10 border-emerald-500/20 text-emerald-400', 'quote_id' => '"Tim Mora Bangun Solutions sangat profesional dan responsif. Sistem ERP yang mereka bangun sangat membantu operasional perusahaan kami."', 'quote_en' => '"Mora Bangun Solutions team is very professional and responsive. The ERP system they built greatly helps our company operations."'],
                            ['id' => 2, 'initial' => 'IS', 'color' => 'from-emerald-400 to-teal-600', 'tcolor' => 'text-white', 'name_id' => 'Irawan Santoso', 'name_en' => 'Irawan Santoso', 'role_id' => 'Direktur, CV. Indoplas', 'role_en' => 'Director, CV. Indoplas', 'badge_id' => 'Website', 'badge_en' => 'Website', 'badge_color' => 'bg-blue-500/10 border-blue-500/20 text-blue-400', 'quote_id' => '"Website company profile kami jadi jauh lebih profesional dan loading sangat cepat setelah direvamp oleh Mora Bangun."', 'quote_en' => '"Our company profile website became much more professional and very fast loading after being revamped by Mora Bangun."'],
                            ['id' => 3, 'initial' => 'LS', 'color' => 'from-rose-400 to-pink-600', 'tcolor' => 'text-white', 'name_id' => 'Laila Sari', 'name_en' => 'Laila Sari', 'role_id' => 'Owner, Ladaik Store', 'role_en' => 'Owner, Ladaik Store', 'badge' => 'E-Commerce', 'badge_color' => 'bg-rose-500/10 border-rose-500/20 text-rose-400', 'quote_id' => '"Platform e-commerce yang dibangun Mora Bangun benar-benar mengubah cara kami berjualan. Fitur pembayaran terintegrasi sangat membantu."', 'quote_en' => '"The e-commerce platform built by Mora Bangun truly changed how we sell. Integrated payment features are very helpful."'],
                        ] as $t)
                        <div class="min-w-full px-2">
                            <div class="glass-card p-7">
                                <div class="flex gap-1 mb-5">
                                    @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 star-filled" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    @endfor
                                </div>
                                <blockquote class="text-slate-300 text-sm leading-relaxed mb-6 font-body italic">
                                    <span x-show="$store.locale === 'id'">{{ $t['quote_id'] }}</span>
                                    <span x-show="$store.locale === 'en'" x-cloak>{{ $t['quote_en'] }}</span>
                                </blockquote>
                                <div class="flex items-center gap-3 pt-5 border-t border-white/8">
                                    <div class="w-10 h-10 rounded-full bg-gradient-to-br {{ $t['color'] }} flex items-center justify-center {{ $t['tcolor'] }} font-bold text-sm flex-shrink-0">{{ $t['initial'] }}</div>
                                    <div>
                                        <p class="font-semibold text-white text-sm">
                                            <span x-show="$store.locale === 'id'">{{ $t['name_id'] }}</span>
                                            <span x-show="$store.locale === 'en'" x-cloak>{{ $t['name_en'] }}</span>
                                        </p>
                                        <p class="text-slate-500 text-xs">
                                            <span x-show="$store.locale === 'id'">{{ $t['role_id'] }}</span>
                                            <span x-show="$store.locale === 'en'" x-cloak>{{ $t['role_en'] }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Dots -->
                <div class="flex justify-center gap-2.5 mt-6">
                    <template x-for="i in total" :key="i">
                        <button @click="current = i - 1" data-testid="carousel-dot"
                                class="h-2 rounded-full transition-all duration-300"
                                :class="current === i - 1 ? 'w-6 bg-cyan-400' : 'w-2 bg-slate-700 hover:bg-slate-500'">
                        </button>
                    </template>
                </div>
            </div><!-- end mobile carousel -->

        </div><!-- end x-data -->

        <!-- Social Proof Bar -->
        <div class="scroll-reveal mt-14 flex flex-wrap items-center justify-center gap-8 opacity-50">
            <p class="text-xs text-slate-500 uppercase tracking-widest w-full text-center mb-2">
                <span x-show="$store.locale === 'id'">Dipercaya oleh berbagai industri</span>
                <span x-show="$store.locale === 'en'" x-cloak>Trusted across various industries</span>
            </p>
            <div class="text-xs text-slate-600 font-mono tracking-wider">MANUFACTURING</div>
            <div class="w-1 h-1 rounded-full bg-slate-700"></div>
            <div class="text-xs text-slate-600 font-mono tracking-wider">RETAIL</div>
            <div class="w-1 h-1 rounded-full bg-slate-700"></div>
            <div class="text-xs text-slate-600 font-mono tracking-wider">LOGISTICS</div>
            <div class="w-1 h-1 rounded-full bg-slate-700"></div>
            <div class="text-xs text-slate-600 font-mono tracking-wider">CONSTRUCTION</div>
            <div class="w-1 h-1 rounded-full bg-slate-700"></div>
            <div class="text-xs text-slate-600 font-mono tracking-wider">EDUCATION</div>
        </div>
    </div>
</section>
