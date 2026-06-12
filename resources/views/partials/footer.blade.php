    {{-- ═══════════════════════ PREMIUM FOOTER ═══════════════════════ --}}
    <footer class="bg-slate-900 pt-20 pb-10 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                {{-- Brand Info --}}
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6 group">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo KS" class="h-10 w-auto invert mix-blend-screen">
                        <div class="text-2xl font-extrabold text-blue-500">
                            K-SERV<a href="{{ route('login') }}" class="text-slate-500 cursor-default" style="text-decoration: none;">.</a>
                        </div>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">Solusi digital beres tanpa ribet. K-Serv hadir membantu individu dan bisnis tampil profesional dengan harga yang sangat bersahabat.</p>
                    <div class="flex items-center gap-4">
                        <a href="https://instagram.com/kevin_nurachman" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-300 hover:bg-pink-600 hover:text-white transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.20 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
                        <a href="https://linkedin.com/in/kevin-nurachman" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-300 hover:bg-blue-600 hover:text-white transition-all"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                    </div>
                </div>

                {{-- Navigasi --}}
                <div class="lg:col-span-1">
                    <h4 class="text-white font-bold mb-6">Navigasi</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/') }}#beranda" class="text-slate-400 hover:text-blue-400 transition text-sm">Beranda</a></li>
                        <li><a href="{{ url('/') }}#katalog" class="text-slate-400 hover:text-blue-400 transition text-sm">Katalog Layanan</a></li>
                        <li><a href="{{ url('/') }}#portofolio" class="text-slate-400 hover:text-blue-400 transition text-sm">Portofolio Kami</a></li>
                        <li><a href="{{ url('/') }}#faq" class="text-slate-400 hover:text-blue-400 transition text-sm">FAQ / Bantuan</a></li>
                    </ul>
                </div>

                {{-- Legal --}}
                <div class="lg:col-span-1">
                    <h4 class="text-white font-bold mb-6">Informasi</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('informasi.syarat') }}" class="text-slate-400 hover:text-blue-400 transition text-sm">Syarat &amp; Ketentuan</a></li>
                        <li><a href="{{ route('informasi.privasi') }}" class="text-slate-400 hover:text-blue-400 transition text-sm">Kebijakan Privasi</a></li>
                        <li><a href="{{ route('informasi.garansi') }}" class="text-slate-400 hover:text-blue-400 transition text-sm">Garansi Revisi</a></li>
                        <li><a href="{{ route('informasi.pembayaran') }}" class="text-slate-400 hover:text-blue-400 transition text-sm">Cara Pembayaran</a></li>
                    </ul>
                </div>

                {{-- Newsletter --}}
                <div class="lg:col-span-1">
                    <h4 class="text-white font-bold mb-6">Berlangganan Info Promo</h4>
                    <p class="text-slate-400 text-sm mb-4 leading-relaxed">Dapatkan info promo spesial dan tips digital langsung ke emailmu.</p>
                    <form class="flex flex-col gap-3">
                        <input type="email" placeholder="Alamat email kamu" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white text-sm placeholder-slate-500 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition">
                        <button type="button" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold text-sm rounded-xl px-4 py-3 transition shadow-lg shadow-blue-600/30">Berlangganan</button>
                    </form>
                </div>
            </div>

            {{-- Bottom Footer --}}
            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-500 text-sm font-medium">© 2026 K-SERV. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="https://github.com/V1ncen11" target="_blank" class="text-slate-500 hover:text-white transition text-sm font-bold">Built by Kevin</a>
                    <a href="https://linkedin.com/in/kevin-nurachman" target="_blank" class="text-slate-500 hover:text-white transition text-sm font-bold">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>
