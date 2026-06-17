<nav id="mainNav" class="{{ (isset($is_transparent_nav) && $is_transparent_nav) || request()->is('/') ? 'fixed top-0 left-0 w-full nav-transparent border-transparent' : 'sticky top-0 bg-white dark:bg-slate-900 border-b border-slate-100 dark:border-slate-800 shadow-sm' }} z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-8 py-4 relative flex justify-between items-center">
            <div class="flex-shrink-0 flex items-center gap-3 group cursor-pointer" onclick="window.location.href='{{ url('/') }}'">
                <div class="text-2xl font-extrabold tracking-tight text-slate-900 nav-text-color transition-colors">
                    K-SERV<span class="text-slate-900 nav-text-color transition-colors">.</span>
                </div>
            </div>

            {{-- Desktop Nav (Absolute Center) --}}
            <div class="absolute left-1/2 transform -translate-x-1/2 hidden md:flex items-center gap-8 font-medium">
                <a href="{{ url('/') }}#beranda" class="text-slate-600 dark:text-slate-300 hover:text-slate-900 transition nav-text-color">Beranda</a>
                <a href="{{ url('/') }}#katalog" class="text-slate-600 dark:text-slate-300 hover:text-slate-900 transition nav-text-color">Katalog</a>
                <a href="{{ url('/') }}#portofolio" class="text-slate-600 dark:text-slate-300 hover:text-slate-900 transition nav-text-color">Portofolio</a>
                <a href="{{ url('/') }}#faq" class="text-slate-600 dark:text-slate-300 hover:text-slate-900 transition nav-text-color">FAQ</a>
            </div>

            {{-- Action Buttons (Right) --}}
            <div class="flex items-center gap-4 md:gap-6">

                <a href="https://wa.me/6287870402431" target="_blank" class="hidden md:flex font-bold text-slate-900 dark:text-white hover:text-rose-400 transition nav-text-color border-b-2 border-transparent hover:border-rose-400 pb-1">
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

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="md:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
            <div class="px-6 pb-6 pt-2 flex flex-col gap-3 border-t border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900">
                <a href="{{ url('/') }}#beranda" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 font-medium hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-slate-900 transition-all">Beranda</a>
                <a href="{{ url('/') }}#katalog" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 font-medium hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-slate-900 transition-all">Katalog</a>
                <a href="{{ url('/') }}#portofolio" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 font-medium hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-slate-900 transition-all">Portofolio</a>
                <a href="{{ url('/') }}#faq" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 dark:text-slate-300 font-medium hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-slate-900 transition-all">FAQ</a>
                <a href="https://wa.me/6287870402431" target="_blank" class="mt-2 bg-slate-900 text-white px-5 py-3 rounded-xl text-sm font-bold text-center hover:bg-black transition shadow-md shadow-slate-200 dark:shadow-none">
                    Pesan Jasa
                </a>
            </div>
        </div>
    </nav>

