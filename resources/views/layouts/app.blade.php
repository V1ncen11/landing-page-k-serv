<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>K-SERV | Jasa Pembuatan Website & Sistem Web Custom</title>
    <meta name="description" content="K-SERV melayani jasa pembuatan website company profile, landing page promosi, dan sistem web custom profesional. Gratis domain & hosting super cepat.">
    <meta name="keywords" content="jasa pembuatan website, bikin web company profile, jasa landing page, sistem web custom, web developer, k-serv, pembuatan website murah">
    <meta name="author" content="Kevin Nurachman">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="K-SERV | Jasa Pembuatan Website & Sistem Web Custom">
    <meta property="og:description" content="K-SERV melayani jasa pembuatan website company profile, landing page promosi, dan sistem web custom profesional. Gratis domain & hosting.">
    <meta property="og:image" content="{{ asset('images/favicon.png') }}">
    <meta name="theme-color" content="#f8fafc">

  
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Defer Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"></noscript>
    
    <!-- Defer AOS CSS -->
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"></noscript>
    
    {{-- Favicon sudah diperbaiki dari pavicon ke favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}?v=2">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <style> 
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; } 
    </style>
</head>

<body class="bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-slate-50 antialiased transition-colors duration-300 overflow-x-hidden w-full relative">
    <div class="w-full overflow-x-hidden max-w-[100vw]">
        @include('partials.navbar')
        
        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Dark Mode Logic (Runs before DOM load to prevent flash)
        const htmlEl    = document.documentElement;
        const darkToggle = document.getElementById('darkToggle');
        const iconSun   = document.getElementById('iconSun');
        const iconMoon  = document.getElementById('iconMoon');

        if (localStorage.getItem('kserv_dark') === '1') {
            htmlEl.classList.add('dark');
            if (iconSun && iconMoon) {
                iconSun.classList.remove('hidden');
                iconMoon.classList.add('hidden');
            }
        }

        if (darkToggle) {
            darkToggle.addEventListener('click', () => {
                const isDark = htmlEl.classList.toggle('dark');
                localStorage.setItem('kserv_dark', isDark ? '1' : '0');
                if (iconSun && iconMoon) {
                    iconSun.classList.toggle('hidden', !isDark);
                    iconMoon.classList.toggle('hidden', isDark);
                }
            });
        }

        // Promo Banner Dismiss
        const closeBanner = document.getElementById('closeBanner');
        const promoBanner = document.getElementById('promoBanner');
        if (closeBanner && promoBanner) {
            closeBanner.addEventListener('click', function() {
                promoBanner.style.maxHeight = promoBanner.scrollHeight + 'px';
                promoBanner.style.overflow = 'hidden';
                promoBanner.style.transition = 'max-height 0.4s ease, opacity 0.4s ease, padding 0.4s ease';
                requestAnimationFrame(() => {
                    promoBanner.style.maxHeight = '0';
                    promoBanner.style.opacity = '0';
                    promoBanner.style.paddingTop = '0';
                    promoBanner.style.paddingBottom = '0';
                });
                setTimeout(() => promoBanner.remove(), 400);
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true,
                easing: 'ease-in-out',
            });

            // Hamburger Menu Toggle
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const bar1 = document.getElementById('bar1');
            const bar2 = document.getElementById('bar2');
            const bar3 = document.getElementById('bar3');
            let menuOpen = false;

            if(hamburgerBtn) {
                hamburgerBtn.addEventListener('click', function() {
                    menuOpen = !menuOpen;
                    if (menuOpen) {
                        mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
                        bar1.style.transform = 'translateY(8px) rotate(45deg)';
                        bar2.style.opacity = '0';
                        bar3.style.transform = 'translateY(-8px) rotate(-45deg)';
                    } else {
                        mobileMenu.style.maxHeight = '0';
                        bar1.style.transform = '';
                        bar2.style.opacity = '1';
                        bar3.style.transform = '';
                    }
                });

                document.querySelectorAll('.mobile-nav-link').forEach(link => {
                    link.addEventListener('click', function() {
                        menuOpen = false;
                        mobileMenu.style.maxHeight = '0';
                        bar1.style.transform = '';
                        bar2.style.opacity = '1';
                        bar3.style.transform = '';
                    });
                });
            }
            // ─── Navbar Scroll Effect ───
            const nav = document.getElementById('mainNav');
            if (nav) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 50) {
                        nav.classList.add('shadow-md', 'shadow-slate-100', 'dark:shadow-none');
                        nav.classList.remove('border-b', 'border-slate-100', 'dark:border-slate-800');
                    } else {
                        nav.classList.remove('shadow-md', 'shadow-slate-100', 'dark:shadow-none');
                        nav.classList.add('border-b', 'border-slate-100', 'dark:border-slate-800');
                    }
                });
            }

            // ─── Back to Top Button ───
            const backToTopBtn = document.getElementById('backToTop');
            if (backToTopBtn) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 600) {
                        backToTopBtn.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
                        backToTopBtn.classList.add('opacity-100', 'translate-y-0');
                    } else {
                        backToTopBtn.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
                        backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
                    }
                });
                backToTopBtn.addEventListener('click', function() {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }

            // ─── Counter Animation ───
            const counters = document.querySelectorAll('.counter');
            let counterStarted = false;

            function animateCounters() {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const duration = 2000;
                    const start = performance.now();

                    function update(now) {
                        const elapsed = now - start;
                        const progress = Math.min(elapsed / duration, 1);
                        const ease = 1 - Math.pow(1 - progress, 3);
                        counter.textContent = Math.floor(target * ease);
                        if (progress < 1) {
                            requestAnimationFrame(update);
                        } else {
                            counter.textContent = target + (counter.hasAttribute('data-suffix') ? counter.getAttribute('data-suffix') : '+');
                        }
                    }
                    requestAnimationFrame(update);
                });
            }

            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !counterStarted) {
                        counterStarted = true;
                        animateCounters();
                    }
                });
            }, { threshold: 0.5 });

            const counterSection = document.querySelector('.counter');
            if (counterSection) {
                statsObserver.observe(counterSection.closest('section') || counterSection.parentElement);
            }
        });
    </script>
    @stack('scripts')
</body>
</html>