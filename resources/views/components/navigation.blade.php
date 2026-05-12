<nav x-data="{ mobileOpen: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     :class="scrolled ? 'bg-slate-950/80 backdrop-blur-2xl border-b border-white/5 shadow-2xl shadow-black/40' : 'bg-transparent'">

    <div class="container-max flex items-center justify-between h-16 px-6 lg:px-24">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
            <div class="h-9 w-9 flex-shrink-0 transition-all duration-300"
                 style="filter:drop-shadow(0 0 6px rgba(34,211,238,0.3))"
                 onmouseenter="this.style.filter='drop-shadow(0 0 14px rgba(34,211,238,0.7))'"
                 onmouseleave="this.style.filter='drop-shadow(0 0 6px rgba(34,211,238,0.3))'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-full h-full">
                  <defs>
                    <linearGradient id="nl-bg" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#0d1f42"/><stop offset="100%" stop-color="#060e1f"/>
                    </linearGradient>
                    <linearGradient id="nl-bd" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#22d3ee"/><stop offset="50%" stop-color="#3b82f6"/><stop offset="100%" stop-color="#1e40af"/>
                    </linearGradient>
                    <linearGradient id="nl-bld" x1="0%" y1="100%" x2="60%" y2="0%">
                      <stop offset="0%" stop-color="#1d4ed8"/><stop offset="100%" stop-color="#38bdf8"/>
                    </linearGradient>
                    <linearGradient id="nl-mb" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#7dd3fc"/><stop offset="100%" stop-color="#2563eb"/>
                    </linearGradient>
                    <filter id="nl-gw" x="-30%" y="-30%" width="160%" height="160%">
                      <feGaussianBlur stdDeviation="1.2" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
                    </filter>
                  </defs>
                  <!-- Outer glow -->
                  <polygon points="50,1.5 93.5,25.5 93.5,74.5 50,98.5 6.5,74.5 6.5,25.5" fill="none" stroke="#22d3ee" stroke-width="0.7" opacity="0.18"/>
                  <!-- Hex fill -->
                  <polygon points="50,4 90,27 90,73 50,96 10,73 10,27" fill="url(#nl-bg)"/>
                  <!-- Hex border -->
                  <polygon points="50,4 90,27 90,73 50,96 10,73 10,27" fill="none" stroke="url(#nl-bd)" stroke-width="2.5"/>
                  <!-- Inner hex accent -->
                  <polygon points="50,11 83,30 83,70 50,89 17,70 17,30" fill="none" stroke="#22d3ee" stroke-width="0.5" opacity="0.2"/>
                  <!-- Corner dots -->
                  <circle cx="50" cy="4"  r="3"   fill="#22d3ee" filter="url(#nl-gw)"/>
                  <circle cx="90" cy="27" r="2.5" fill="#f0b429" filter="url(#nl-gw)"/>
                  <circle cx="90" cy="73" r="2.5" fill="#22d3ee" filter="url(#nl-gw)"/>
                  <circle cx="50" cy="96" r="3"   fill="#f0b429" filter="url(#nl-gw)"/>
                  <circle cx="10" cy="73" r="2.5" fill="#22d3ee" filter="url(#nl-gw)"/>
                  <circle cx="10" cy="27" r="2.5" fill="#f0b429" filter="url(#nl-gw)"/>
                  <!-- Signal waves -->
                  <circle cx="50" cy="23" r="1.5" fill="#22d3ee" filter="url(#nl-gw)"/>
                  <path d="M45.5,19.5 A6,6 0 0,1 54.5,19.5"   fill="none" stroke="#22d3ee" stroke-width="1.4" stroke-linecap="round" opacity="0.9"/>
                  <path d="M41,15.5 A11.5,11.5 0 0,1 59,15.5" fill="none" stroke="#22d3ee" stroke-width="1.2" stroke-linecap="round" opacity="0.55"/>
                  <path d="M37,11.5 A16,16 0 0,1 63,11.5"     fill="none" stroke="#22d3ee" stroke-width="1"   stroke-linecap="round" opacity="0.25"/>
                  <!-- Building silhouette -->
                  <rect x="34" y="44" width="7"  height="22" rx="0.5" fill="url(#nl-bld)" opacity="0.6"/>
                  <rect x="42" y="34" width="11" height="32" rx="0.5" fill="url(#nl-bld)" opacity="0.85"/>
                  <rect x="54" y="47" width="6"  height="19" rx="0.5" fill="url(#nl-bld)" opacity="0.55"/>
                  <line x1="47.5" y1="34" x2="47.5" y2="26" stroke="#22d3ee" stroke-width="1.5" stroke-linecap="round"/>
                  <circle cx="47.5" cy="25.5" r="1.4" fill="#22d3ee" filter="url(#nl-gw)"/>
                  <!-- MB text -->
                  <text x="50" y="82" font-family="Arial Black,Arial,sans-serif" font-size="24" font-weight="900" fill="url(#nl-mb)" text-anchor="middle" letter-spacing="-0.5">MB</text>
                  <!-- Circuit swirl accents -->
                  <path d="M20,54 Q35,41 50,54 Q65,67 80,54" fill="none" stroke="#22d3ee" stroke-width="0.7" opacity="0.28"/>
                  <path d="M20,60 Q35,47 50,60 Q65,73 80,60" fill="none" stroke="#f0b429" stroke-width="0.7" opacity="0.2"/>
                </svg>
            </div>
            <span class="font-bold text-base tracking-tight">
                Mora <span class="text-cyan-400">Bangun</span>
                <span class="text-slate-500 font-normal text-xs ml-1">Solutions</span>
            </span>
        </a>

        <!-- Desktop Nav -->
        <div class="hidden lg:flex items-center gap-1">
            <a href="{{ route('home') }}#services" class="px-4 py-2 text-sm text-slate-400 hover:text-white transition-colors rounded-lg hover:bg-white/5">
                <span x-show="$store.locale === 'id'">Layanan</span>
                <span x-show="$store.locale === 'en'" x-cloak>Services</span>
            </a>
            <a href="{{ route('home') }}#portfolio" class="px-4 py-2 text-sm text-slate-400 hover:text-white transition-colors rounded-lg hover:bg-white/5">
                <span x-show="$store.locale === 'id'">Portfolio</span>
                <span x-show="$store.locale === 'en'" x-cloak>Portfolio</span>
            </a>
            <a href="{{ route('home') }}#tech" class="px-4 py-2 text-sm text-slate-400 hover:text-white transition-colors rounded-lg hover:bg-white/5">
                <span x-show="$store.locale === 'id'">Teknologi</span>
                <span x-show="$store.locale === 'en'" x-cloak>Technology</span>
            </a>
            <a href="{{ route('home') }}#testimonials" class="px-4 py-2 text-sm text-slate-400 hover:text-white transition-colors rounded-lg hover:bg-white/5">
                <span x-show="$store.locale === 'id'">Testimoni</span>
                <span x-show="$store.locale === 'en'" x-cloak>Testimonials</span>
            </a>
            <a href="{{ route('home') }}#contact" class="px-4 py-2 text-sm text-slate-400 hover:text-white transition-colors rounded-lg hover:bg-white/5">
                <span x-show="$store.locale === 'id'">Kontak</span>
                <span x-show="$store.locale === 'en'" x-cloak>Contact</span>
            </a>
            <a href="{{ route('harga') }}" class="px-4 py-2 text-sm text-slate-400 hover:text-white transition-colors rounded-lg hover:bg-white/5">
                <span x-show="$store.locale === 'id'">Harga</span>
                <span x-show="$store.locale === 'en'" x-cloak>Pricing</span>
            </a>
            <a href="{{ route('blog.index') }}" class="px-4 py-2 text-sm text-slate-400 hover:text-white transition-colors rounded-lg hover:bg-white/5">
                Blog
            </a>
        </div>

        <!-- Right Actions -->
        <div class="hidden lg:flex items-center gap-3">
            <!-- Language Toggle -->
            <button @click="$store.locale = $store.locale === 'id' ? 'en' : 'id'"
                    data-testid="lang-toggle"
                    class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-white/10 hover:border-cyan-500/40 text-xs font-medium text-slate-400 hover:text-cyan-400 transition-all">
                <span x-show="$store.locale === 'id'" class="flex items-center gap-1.5">
                    <svg class="w-4 h-3 rounded-sm flex-shrink-0" viewBox="0 0 20 14" fill="none"><rect width="20" height="7" fill="#CE1126"/><rect y="7" width="20" height="7" fill="#FFFFFF"/></svg>
                    ID
                </span>
                <span x-show="$store.locale === 'en'" x-cloak class="flex items-center gap-1.5">
                    <svg class="w-4 h-3 rounded-sm flex-shrink-0" viewBox="0 0 20 14"><rect width="20" height="14" fill="#012169"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#fff" stroke-width="2.8"/><path d="M10,0 V14 M0,7 H20" stroke="#fff" stroke-width="4.5"/><path d="M10,0 V14 M0,7 H20" stroke="#C8102E" stroke-width="2.8"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#C8102E" stroke-width="1.5"/></svg>
                    EN
                </span>
                <svg class="w-3 h-3 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>

            <!-- CTA Button -->
            <a href="#contact"
               data-testid="nav-cta-btn"
               class="inline-flex items-center gap-2 px-5 py-2.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 text-sm font-bold rounded-lg transition-all duration-200 hover:shadow-lg hover:shadow-cyan-500/30 hover:-translate-y-0.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                <span x-show="$store.locale === 'id'">Konsultasi Gratis</span>
                <span x-show="$store.locale === 'en'" x-cloak>Free Consultation</span>
            </a>
        </div>

        <!-- Mobile Hamburger -->
        <div class="lg:hidden flex items-center gap-3">
            <button @click="$store.locale = $store.locale === 'id' ? 'en' : 'id'"
                    data-testid="lang-toggle-mobile"
                    class="px-2 py-1 rounded border border-white/10 text-xs font-medium text-slate-400 flex items-center gap-1.5">
                <span x-show="$store.locale === 'id'" class="flex items-center gap-1">
                    <svg class="w-3.5 h-2.5 rounded-sm flex-shrink-0" viewBox="0 0 20 14"><rect width="20" height="14" fill="#012169"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#fff" stroke-width="2.8"/><path d="M10,0 V14 M0,7 H20" stroke="#fff" stroke-width="4.5"/><path d="M10,0 V14 M0,7 H20" stroke="#C8102E" stroke-width="2.8"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#C8102E" stroke-width="1.5"/></svg>
                    EN
                </span>
                <span x-show="$store.locale === 'en'" x-cloak class="flex items-center gap-1">
                    <svg class="w-3.5 h-2.5 rounded-sm flex-shrink-0" viewBox="0 0 20 14" fill="none"><rect width="20" height="7" fill="#CE1126"/><rect y="7" width="20" height="7" fill="#FFFFFF"/></svg>
                    ID
                </span>
            </button>
            <button @click="mobileOpen = !mobileOpen"
                    data-testid="mobile-menu-toggle"
                    aria-label="Toggle menu"
                    class="p-2 text-slate-400 hover:text-white">
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="mobileOpen"  class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileOpen"
         x-cloak
         @click.outside="mobileOpen = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="lg:hidden bg-slate-950/95 backdrop-blur-2xl border-t border-white/5">
        <div class="px-6 py-5 space-y-1">
            <a @click="mobileOpen=false" href="{{ route('home') }}#services"     class="block px-3 py-3 text-slate-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors text-sm">
                <span x-show="$store.locale === 'id'">Layanan</span><span x-show="$store.locale === 'en'" x-cloak>Services</span>
            </a>
            <a @click="mobileOpen=false" href="{{ route('home') }}#portfolio"    class="block px-3 py-3 text-slate-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors text-sm">Portfolio</a>
            <a @click="mobileOpen=false" href="{{ route('home') }}#tech"         class="block px-3 py-3 text-slate-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors text-sm">
                <span x-show="$store.locale === 'id'">Teknologi</span><span x-show="$store.locale === 'en'" x-cloak>Technology</span>
            </a>
            <a @click="mobileOpen=false" href="{{ route('home') }}#testimonials" class="block px-3 py-3 text-slate-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors text-sm">
                <span x-show="$store.locale === 'id'">Testimoni</span><span x-show="$store.locale === 'en'" x-cloak>Testimonials</span>
            </a>
            <a @click="mobileOpen=false" href="{{ route('home') }}#contact"      class="block px-3 py-3 text-slate-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors text-sm">
                <span x-show="$store.locale === 'id'">Kontak</span><span x-show="$store.locale === 'en'" x-cloak>Contact</span>
            </a>
            <a @click="mobileOpen=false" href="{{ route('harga') }}" class="block px-3 py-3 text-slate-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors text-sm">
                <span x-show="$store.locale === 'id'">Harga</span><span x-show="$store.locale === 'en'" x-cloak>Pricing</span>
            </a>
            <a @click="mobileOpen=false" href="{{ route('blog.index') }}" class="block px-3 py-3 text-slate-300 hover:text-white hover:bg-white/5 rounded-lg transition-colors text-sm">Blog</a>
            <div class="pt-3">
                <a href="#contact" @click="mobileOpen=false"
                   class="flex items-center justify-center gap-2 w-full px-5 py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 text-sm font-bold rounded-lg transition-all">
                    <span x-show="$store.locale === 'id'">Konsultasi Gratis</span>
                    <span x-show="$store.locale === 'en'" x-cloak>Free Consultation</span>
                </a>
            </div>
        </div>
    </div>
</nav>
