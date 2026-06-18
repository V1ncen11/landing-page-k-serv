<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>K-SERV | Jasa Pembuatan Website & Sistem Web Custom</title>
    <meta name="description" content="K-SERV melayani jasa pembuatan website company profile, landing page promosi, dan sistem web custom profesional. Gratis domain & hosting super cepat.">
    <meta name="keywords" content="jasa pembuatan website, bikin web company profile, jasa landing page, aplikasi ujian, sistem web custom, web developer, k-serv, pembuatan website murah, kserv">
    <meta name="author" content="Kevin Nurachman">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="K-SERV (KServ) - Jasa Pembuatan Website">
    <meta property="og:description" content="K-SERV melayani jasa pembuatan website company profile, landing page promosi, dan sistem web custom profesional. Gratis domain & hosting.">
    <meta property="og:image" content="{{ asset('images/favicon.png') }}">
    <meta name="theme-color" content="#f8fafc">
    

  
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Defer Google Fonts -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"></noscript>
    
    <!-- Defer AOS CSS -->
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"></noscript>
    
    {{-- Favicon K hitam (seperti logo iPhone) --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}?v=6">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <style> 
        html { scroll-behavior: auto; /* Disabled for Lenis */ }
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-signature { font-family: 'La Belle Aurore', cursive; }
        .nav-transparent { background-color: transparent !important; border-color: transparent !important; box-shadow: none !important; }
        .nav-transparent .nav-text-color { color: white !important; }

    </style>
</head>

<body class="bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-slate-50 antialiased transition-colors duration-300 overflow-x-hidden w-full relative">
    <div class="w-full overflow-x-hidden max-w-[100vw]">
        @php
            $is_transparent_nav = View::hasSection('is_transparent_nav');
        @endphp
        @include('partials.navbar', ['is_transparent_nav' => $is_transparent_nav])
        
        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>


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
            const isHome = document.getElementById('beranda') !== null;
            if (nav) {
                if (isHome) {
                    nav.classList.remove('sticky', 'bg-white', 'dark:bg-slate-900', 'border-b', 'border-slate-100', 'dark:border-slate-800', 'shadow-sm');
                    nav.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'z-50');
                    if (window.scrollY <= 50) {
                        nav.classList.add('nav-transparent', 'border-transparent');
                    }
                }
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 50) {
                        nav.classList.add('shadow-md', 'shadow-slate-100', 'dark:shadow-none', 'bg-white', 'dark:bg-slate-900', 'border-b', 'border-slate-100', 'dark:border-slate-800');
                        nav.classList.remove('nav-transparent', 'border-transparent');
                    } else {
                        nav.classList.remove('shadow-md', 'shadow-slate-100', 'dark:shadow-none');
                        if (isHome) {
                            nav.classList.add('nav-transparent', 'border-transparent');
                            nav.classList.remove('bg-white', 'dark:bg-slate-900', 'border-b', 'border-slate-100', 'dark:border-slate-800');
                        } else {
                            nav.classList.add('border-b', 'border-slate-100', 'dark:border-slate-800');
                        }
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
            
            // ─── Smooth Scrolling (Lenis) Setup for Anchor Links ───
            document.querySelectorAll('a[href*="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if(href.includes('#')) {
                        const targetId = href.split('#')[1];
                        const targetElement = document.getElementById(targetId);
                        if (targetElement) {
                            // Only prevent default if target exists on current page
                            if(window.location.pathname === '/' || href.startsWith('#')) {
                                e.preventDefault();
                                if (window.lenis) {
                                    window.lenis.scrollTo(targetElement);
                                } else {
                                    targetElement.scrollIntoView({ behavior: 'smooth' });
                                }
                            }
                        }
                    }
                });
            });
        });
    </script>
    <script src="https://unpkg.com/lenis@1.1.2/dist/lenis.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lenis Smooth Scrolling
            if (typeof Lenis !== 'undefined') {
                window.lenis = new Lenis({
                    lerp: 0.1,
                    smoothWheel: true
                });

                function raf(time) {
                    window.lenis.raf(time);
                    requestAnimationFrame(raf);
                }

                requestAnimationFrame(raf);
            }
        });
    </script>
    @stack('scripts')
</body>
</html>