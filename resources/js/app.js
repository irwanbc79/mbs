import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Global locale store — persisted to localStorage
Alpine.store('locale', localStorage.getItem('mbs_locale') || 'id');
Alpine.effect(() => {
    localStorage.setItem('mbs_locale', Alpine.store('locale'));
});

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    // === SCROLL REVEAL ===
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.08, rootMargin: '0px 0px -40px 0px' }
    );
    document.querySelectorAll('.scroll-reveal').forEach((el) => revealObserver.observe(el));

    // === ANIMATED COUNTER ===
    function animateCounter(el) {
        const target  = parseInt(el.getAttribute('data-counter'), 10);
        const suffix  = el.getAttribute('data-suffix') || '';
        const dur     = 1800; // ms
        const fps     = 60;
        const steps   = dur / (1000 / fps);
        let current   = 0;

        const timer = setInterval(() => {
            current += target / steps;
            if (current >= target) {
                el.textContent = target + suffix;
                clearInterval(timer);
            } else {
                el.textContent = Math.floor(current) + suffix;
            }
        }, 1000 / fps);
    }

    const counterObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.6 }
    );
    document.querySelectorAll('[data-counter]').forEach((el) => counterObserver.observe(el));

    // === MARQUEE PAUSE ON HOVER ===
    document.querySelectorAll('.marquee-inner').forEach((el) => {
        el.parentElement.addEventListener('mouseenter', () => (el.style.animationPlayState = 'paused'));
        el.parentElement.addEventListener('mouseleave', () => (el.style.animationPlayState = 'running'));
    });

    // === PORTFOLIO LIVE SCREENSHOTS ===
    // Inject real website screenshots via thum.io (free, no API key).
    // Screenshots load on top of the UI mockup fallback — invisible until loaded.
    const injectScreenshot = (card) => {
        const urlEl  = card.querySelector('.browser-url');
        const preview = card.querySelector('[style*="aspect-ratio"]');
        if (!urlEl || !preview) return;

        const siteUrl = urlEl.textContent.trim();
        if (!siteUrl.startsWith('http') || siteUrl.includes('darulfurqon.my')) return;

        const img = document.createElement('img');
        img.src     = `https://image.thum.io/get/width/1280/crop/720/${siteUrl}`;
        img.alt     = `${siteUrl} preview`;
        img.loading = 'lazy';
        img.className = 'absolute inset-0 w-full h-full object-cover object-top';
        img.style.cssText = 'opacity:0; transition:opacity 0.9s ease; z-index:1';
        img.onload  = () => { img.style.opacity = '1'; };
        preview.appendChild(img);
    };

    // Load screenshots when portfolio section scrolls into view
    const screenshotObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Stagger each card slightly so requests don't all fire at once
                const cards = entry.target.querySelectorAll('[data-testid^="portfolio-"]');
                cards.forEach((card, i) => setTimeout(() => injectScreenshot(card), i * 300));
                screenshotObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    const portfolioSection = document.querySelector('#portfolio');
    if (portfolioSection) screenshotObserver.observe(portfolioSection);
});
