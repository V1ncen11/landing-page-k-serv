<nav id="mainNav" class="sticky top-0 z-50 bg-white dark:bg-slate-900 border-b border-slate-100 dark:border-slate-800 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3 group cursor-pointer" onclick="window.location.href='{{ url('/') }}'">
                <img src="{{ asset('images/logo.png') }}" alt="Logo KS" width="40" height="40" class="h-10 w-auto mix-blend-multiply dark:invert dark:mix-blend-screen">
                <div class="text-2xl font-extrabold tracking-tight text-blue-600">
                    K-SERV<span class="text-slate-400">.</span>
                </div>
            </div>

            <div class="flex items-center gap-4 md:gap-8">
                {{-- Desktop Nav --}}
                <div class="hidden md:flex items-center gap-8 font-medium">
                    <a href="{{ url('/') }}#beranda" class="text-slate-600 dark:text-slate-300 hover:text-blue-600 transition">Beranda</a>
                    <a href="{{ url('/') }}#katalog" class="text-slate-600 dark:text-slate-300 hover:text-blue-600 transition">Katalog</a>
                    <a href="{{ url('/') }}#portofolio" class="text-slate-600 dark:text-slate-300 hover:text-blue-600 transition">Portofolio</a>
                    <a href="{{ url('/') }}#faq" class="text-slate-600 dark:text-slate-300 hover:text-blue-600 transition">FAQ</a>
                </div>

                {{-- Action Buttons --}}
                <div class="flex items-center gap-3">
                    {{-- Dark Mode Toggle --}}
                    <button id="darkToggle" aria-label="Toggle Dark Mode"
                        class="w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 flex items-center justify-center text-slate-500 dark:text-slate-300 hover:border-blue-300 hover:text-blue-600 transition-all">
                        <svg id="iconSun" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
                        <svg id="iconMoon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                    </button>

                    <a href="https://wa.me/6287870402431" target="_blank" class="hidden md:flex bg-blue-600 text-white px-5 py-2.5 rounded-xl text-sm font-bold hover:bg-blue-700 transition shadow-md shadow-blue-100 dark:shadow-none">
                        Pesan Jasa
                    </a>

                    {{-- Hamburger Button (Mobile) --}}
                    <button id="hamburgerBtn" class="md:hidden flex flex-col justify-center items-center w-10 h-10 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 transition" aria-label="Menu">
                        <span id="bar1" class="block w-6 h-0.5 bg-slate-700 dark:bg-slate-300 rounded-full transition-all duration-300"></span>
                        <span id="bar2" class="block w-6 h-0.5 bg-slate-700 dark:bg-slate-300 rounded-full mt-1.5 transition-all duration-300"></span>
                        <span id="bar3" class="block w-6 h-0.5 bg-slate-700 dark:bg-slate-300 rounded-full mt-1.5 transition-all duration-300"></span>
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="md:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
            <div class="px-6 pb-6 pt-2 flex flex-col gap-3 border-t border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900">
                <a href="{{ url('/') }}#beranda" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 font-medium hover:bg-blue-50 dark:hover:bg-slate-800 hover:text-blue-600 transition-all">Beranda</a>
                <a href="{{ url('/') }}#katalog" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 font-medium hover:bg-blue-50 dark:hover:bg-slate-800 hover:text-blue-600 transition-all">Katalog</a>
                <a href="{{ url('/') }}#portofolio" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 font-medium hover:bg-blue-50 dark:hover:bg-slate-800 hover:text-blue-600 transition-all">Portofolio</a>
                <a href="{{ url('/') }}#faq" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 font-medium hover:bg-blue-50 dark:hover:bg-slate-800 hover:text-blue-600 transition-all">FAQ</a>
                <a href="https://wa.me/6287870402431" target="_blank" class="mt-2 bg-blue-600 text-white px-5 py-3 rounded-xl text-sm font-bold text-center hover:bg-blue-700 transition shadow-md shadow-blue-100 dark:shadow-none">
                    Pesan Jasa
                </a>
            </div>
        </div>
    </nav>

