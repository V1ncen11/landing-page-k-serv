<nav id="mainNav" class="fixed top-0 left-0 w-full z-50 transition-all duration-300" style="background-color: #1a1a2e; border-bottom: 1px solid rgba(255,255,255,0.08);">
        <div class="max-w-7xl mx-auto px-6 md:px-8 py-4 relative flex justify-between items-center">
            <div class="flex-shrink-0 flex items-center gap-3 group cursor-pointer" onclick="window.location.href='{{ url('/') }}'">
                <div class="text-2xl font-extrabold tracking-tight text-white transition-colors">
                    K-SERV<span class="text-white">.</span>
                </div>
            </div>

            {{-- Desktop Nav (Absolute Center) --}}
            <div class="absolute left-1/2 transform -translate-x-1/2 hidden md:flex items-center gap-8 font-medium">
                <a href="{{ url('/') }}" class="text-slate-300 hover:text-white transition text-sm">Beranda</a>
                <a href="{{ route('about') }}" class="text-slate-300 hover:text-white transition text-sm">Tentang Kami</a>
                <a href="{{ url('/') }}#katalog" class="text-slate-300 hover:text-white transition text-sm">Layanan</a>
                <a href="{{ route('portofolio.index') }}" class="text-slate-300 hover:text-white transition text-sm">Portofolio</a>
                <a href="{{ route('blog.index') }}" class="text-slate-300 hover:text-white transition text-sm">Blog</a>
                <a href="#footer" class="text-slate-300 hover:text-white transition text-sm">Kontak</a>
            </div>

            {{-- Action Buttons (Right) --}}
            <div class="flex items-center gap-4 md:gap-6">

                <a href="https://wa.me/6287870402431" target="_blank" class="hidden md:flex items-center gap-2 font-bold text-white border border-white/30 hover:border-white/70 hover:bg-white/10 transition px-5 py-2 rounded-full text-sm">
                    Pesan Jasa
                </a>

                {{-- Hamburger Button (Mobile) --}}
                <button id="hamburgerBtn" class="md:hidden flex flex-col justify-center items-center w-10 h-10 rounded-xl hover:bg-white/10 transition" aria-label="Menu">
                    <span id="bar1" class="block w-6 h-0.5 bg-white rounded-full transition-all duration-300"></span>
                    <span id="bar2" class="block w-6 h-0.5 bg-white rounded-full mt-1.5 transition-all duration-300"></span>
                    <span id="bar3" class="block w-6 h-0.5 bg-white rounded-full mt-1.5 transition-all duration-300"></span>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="md:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out" style="background-color: #1a1a2e;">
            <div class="px-6 pb-6 pt-2 flex flex-col gap-3 border-t border-white/10">
                <a href="{{ url('/') }}" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-300 font-medium hover:bg-white/10 hover:text-white transition-all">Beranda</a>
                <a href="{{ route('about') }}" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-300 font-medium hover:bg-white/10 hover:text-white transition-all">Tentang Kami</a>
                <a href="{{ url('/') }}#katalog" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-300 font-medium hover:bg-white/10 hover:text-white transition-all">Layanan</a>
                <a href="{{ route('portofolio.index') }}" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-300 font-medium hover:bg-white/10 hover:text-white transition-all">Portofolio</a>
                <a href="{{ route('blog.index') }}" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-300 font-medium hover:bg-white/10 hover:text-white transition-all">Blog</a>
                <a href="#footer" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-300 font-medium hover:bg-white/10 hover:text-white transition-all">Kontak</a>
                <a href="https://wa.me/6287870402431" target="_blank" class="mt-2 text-white px-5 py-3 rounded-full text-sm font-bold text-center transition shadow-lg" style="background-color: #673de6;">
                    Pesan Jasa
                </a>
            </div>
        </div>
    </nav>

