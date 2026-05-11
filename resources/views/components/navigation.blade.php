<nav x-data="{ mobileOpen: false, scrolled: false }"
     x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 20)"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
     :class="scrolled ? 'bg-surface-dim/90 backdrop-blur-xl border-b border-outline-variant/20' : 'bg-transparent'">
    <div class="container-max flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">
        <a href="#" class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-bold text-sm">M</div>
            <span class="font-display font-semibold text-lg tracking-tight">
                Mora <span class="text-primary">Bangun</span>
            </span>
        </a>

        <div class="hidden md:flex items-center gap-8">
            <a href="#services" class="text-sm text-on-surface-variant hover:text-on-surface transition-colors font-body">Layanan</a>
            <a href="#portfolio" class="text-sm text-on-surface-variant hover:text-on-surface transition-colors font-body">Portfolio</a>
            <a href="#tech" class="text-sm text-on-surface-variant hover:text-on-surface transition-colors font-body">Teknologi</a>
            <a href="#testimonials" class="text-sm text-on-surface-variant hover:text-on-surface transition-colors font-body">Testimoni</a>
            <a href="https://wa.me/6281266686678?text=Halo%20Mora%20Bangun%20Solutions%2C%20saya%20tertarik%20dengan%20layanan%20Anda"
               target="_blank"
               class="inline-flex items-center gap-2 px-5 py-2 rounded-lg bg-primary text-on-primary text-sm font-semibold hover:shadow-lg hover:shadow-primary/20 transition-all duration-300">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Hubungi Kami
            </a>
        </div>

        <button @click="mobileOpen = !mobileOpen" class="md:hidden text-on-surface p-2">
            <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <div x-show="mobileOpen"
         x-cloak
         @click.outside="mobileOpen = false"
         class="md:hidden bg-surface-container-high/95 backdrop-blur-xl border-t border-outline-variant/20">
        <div class="px-4 py-4 space-y-3">
            <a @click="mobileOpen = false" href="#services" class="block text-on-surface-variant hover:text-on-surface transition-colors py-2 font-body">Layanan</a>
            <a @click="mobileOpen = false" href="#portfolio" class="block text-on-surface-variant hover:text-on-surface transition-colors py-2 font-body">Portfolio</a>
            <a @click="mobileOpen = false" href="#tech" class="block text-on-surface-variant hover:text-on-surface transition-colors py-2 font-body">Teknologi</a>
            <a @click="mobileOpen = false" href="#testimonials" class="block text-on-surface-variant hover:text-on-surface transition-colors py-2 font-body">Testimoni</a>
            <a href="https://wa.me/6281266686678?text=Halo%20Mora%20Bangun%20Solutions%2C%20saya%20tertarik%20dengan%20layanan%20Anda"
               target="_blank"
               class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary text-on-primary text-sm font-semibold mt-2">
                Hubungi Kami
            </a>
        </div>
    </div>
</nav>
