<footer class="bg-surface border-t border-white/5">
    <div class="container-max px-6 lg:px-24 py-16">
        <div class="grid md:grid-cols-12 gap-10 mb-12">

            <!-- Brand Col -->
            <div class="md:col-span-4">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-cyan-400 to-blue-600 flex items-center justify-center font-bold text-slate-950 text-sm shadow-lg shadow-cyan-500/20">M</div>
                    <div>
                        <span class="font-bold text-base tracking-tight">
                            Mora <span class="text-cyan-400">Bangun</span>
                        </span>
                        <p class="text-slate-600 text-xs font-mono">Solutions</p>
                    </div>
                </div>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-body max-w-xs">
                    <span x-show="$store.locale === 'id'">Partner transformasi digital berbasis AI dari Medan. Spesialis ERP, CRM, Corporate Portal &amp; Workflow Automation untuk Indonesia.</span>
                    <span x-show="$store.locale === 'en'" x-cloak>AI-based digital transformation partner from Medan. Specializing in ERP, CRM, Corporate Portal &amp; Workflow Automation for Indonesia.</span>
                </p>
                <!-- Social Links -->
                <div class="flex gap-3">
                    <a href="https://linkedin.com" target="_blank" class="w-9 h-9 rounded-lg border border-slate-800 hover:border-cyan-500/40 flex items-center justify-center text-slate-500 hover:text-cyan-400 transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="mailto:info@morabangun.com" class="w-9 h-9 rounded-lg border border-slate-800 hover:border-cyan-500/40 flex items-center justify-center text-slate-500 hover:text-cyan-400 transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </a>
                    <a href="https://wa.me/?text=Halo%20Mora%20Bangun%20Solutions" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg border border-slate-800 hover:border-green-500/40 flex items-center justify-center text-slate-500 hover:text-green-400 transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Services Col -->
            <div class="md:col-span-2">
                <h4 class="font-semibold text-xs uppercase tracking-widest text-slate-400 mb-5">
                    <span x-show="$store.locale === 'id'">Layanan</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Services</span>
                </h4>
                <ul class="space-y-3">
                    @foreach([
                        ['id' => 'Sistem ERP',            'en' => 'ERP System'],
                        ['id' => 'CRM',                   'en' => 'CRM'],
                        ['id' => 'Corporate Portal',      'en' => 'Corporate Portal'],
                        ['id' => 'AI Workflow',           'en' => 'AI Workflow'],
                        ['id' => 'Chatbot AI',            'en' => 'AI Chatbot'],
                        ['id' => 'Custom Development',    'en' => 'Custom Development'],
                    ] as $item)
                    <li>
                        <a href="#services" class="text-sm text-slate-500 hover:text-white transition-colors font-body">
                            <span x-show="$store.locale === 'id'">{{ $item['id'] }}</span>
                            <span x-show="$store.locale === 'en'" x-cloak>{{ $item['en'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Company Col -->
            <div class="md:col-span-2">
                <h4 class="font-semibold text-xs uppercase tracking-widest text-slate-400 mb-5">
                    <span x-show="$store.locale === 'id'">Perusahaan</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Company</span>
                </h4>
                <ul class="space-y-3">
                    <li><a href="#portfolio" class="text-sm text-slate-500 hover:text-white transition-colors font-body">Portfolio</a></li>
                    <li><a href="#tech" class="text-sm text-slate-500 hover:text-white transition-colors font-body">
                        <span x-show="$store.locale === 'id'">Teknologi</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Technology</span>
                    </a></li>
                    <li><a href="#testimonials" class="text-sm text-slate-500 hover:text-white transition-colors font-body">
                        <span x-show="$store.locale === 'id'">Testimoni</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Testimonials</span>
                    </a></li>
                    <li><a href="#contact" class="text-sm text-slate-500 hover:text-white transition-colors font-body">
                        <span x-show="$store.locale === 'id'">Kontak</span>
                        <span x-show="$store.locale === 'en'" x-cloak>Contact</span>
                    </a></li>
                </ul>
            </div>

            <!-- Contact Col -->
            <div class="md:col-span-4">
                <h4 class="font-semibold text-xs uppercase tracking-widest text-slate-400 mb-5">
                    <span x-show="$store.locale === 'id'">Hubungi Kami</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Contact Us</span>
                </h4>
                <ul class="space-y-4">
                    <li>
                        <a href="mailto:info@morabangun.com" class="flex items-center gap-3 group">
                            <svg class="w-4 h-4 text-cyan-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span class="text-sm text-slate-500 group-hover:text-white transition-colors font-body">info@morabangun.com</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/6281266686678" target="_blank" class="flex items-center gap-3 group">
                            <svg class="w-4 h-4 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            <span class="text-sm text-slate-500 group-hover:text-white transition-colors font-body">+62 812-6668-6678</span>
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-violet-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-sm text-slate-500 font-body">Medan, Sumatera Utara,<br>Indonesia 20111</span>
                    </li>
                </ul>
            </div>

        </div><!-- end grid -->

        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-sm text-slate-600">
                &copy; {{ date('Y') }} Mora Bangun Solutions.
                <span x-show="$store.locale === 'id'">Hak cipta dilindungi.</span>
                <span x-show="$store.locale === 'en'" x-cloak>All rights reserved.</span>
            </p>
            <div class="flex items-center gap-4 flex-wrap justify-center md:justify-end">
                <div class="flex items-center gap-1.5 text-xs text-slate-600">
                    <svg class="w-3 h-3 text-emerald-500/70" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/></svg>
                    <span>SSL Secured</span>
                </div>
                <span class="text-slate-800 hidden md:inline">·</span>
                <div class="flex items-center gap-1.5 text-xs text-slate-600">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500/70 animate-pulse inline-block"></span>
                    <span>Production Ready</span>
                </div>
                <span class="text-slate-800 hidden md:inline">·</span>
                <div class="flex items-center gap-1.5 text-xs text-slate-600">
                    <svg class="w-4 h-3 rounded-sm flex-shrink-0" viewBox="0 0 20 14" fill="none"><rect width="20" height="7" fill="#CE1126"/><rect y="7" width="20" height="7" fill="#FFFFFF"/></svg>
                    <span>Made in Indonesia</span>
                </div>
            </div>
        </div>
    </div>
</footer>
