@extends('layouts.app')

@section('content')
<div class="bg-slate-50 text-slate-900 antialiased">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo KS" class="h-10 w-auto">
                <div class="text-2xl font-extrabold tracking-tight text-indigo-600">
                    K-SERV<span class="text-slate-400">.</span>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-8 font-medium">
                <a href="#beranda" class="text-slate-600 hover:text-indigo-600 transition">Beranda</a>
                <a href="#katalog" class="text-slate-600 hover:text-indigo-600 transition">Katalog</a>
                <a href="#portofolio" class="text-slate-600 hover:text-indigo-600 transition">Portofolio</a>
                <a href="#faq" class="text-slate-600 hover:text-indigo-600 transition">FAQ</a>
                <a href="https://wa.me/6287870402431" target="_blank" class="bg-indigo-600 text-white px-5 py-2.5 rounded-xl text-sm font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                    Pesan Jasa
                </a>
            </div>
        </div>
    </nav>

    <header id="beranda" class="relative overflow-hidden bg-slate-50/50">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none">
            <div class="absolute -top-[20%] -left-[10%] w-[70%] h-[70%] bg-indigo-200/40 blur-[120px] rounded-full"></div>
            <div class="absolute top-[10%] -right-[10%] w-[60%] h-[60%] bg-blue-200/30 blur-[100px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-8 py-28 md:py-36 flex flex-col items-center text-center" data-aos="fade-down">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-10 text-xs font-bold tracking-widest text-indigo-600 bg-white border border-indigo-100 rounded-full shadow-sm">
                <span class="flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                </span>
                SOLUSI DIGITAL TERPERCAYA
            </div>

            <h1 class="text-6xl md:text-8xl font-black mb-8 leading-[1.05] tracking-tight text-slate-900 w-full text-center">
                Beresin Tugas <br class="hidden md:block"> & Bisnis 
                <span class="block mt-2 bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-blue-500 italic">
                    Tanpa Ribet.
                </span>
            </h1>

            <p class="text-lg md:text-xl text-slate-500 max-w-2xl mb-14 leading-relaxed text-center">
                Fokus ke yang penting, sisanya biar <span class="text-slate-900 font-bold">K-Serv</span> yang urus. 
                Dari jasa olah data sampai desain.
            </p>

            <div class="relative z-10 flex flex-col sm:flex-row gap-5">
                <a href="#katalog" class="px-10 py-4 bg-slate-900 text-white font-bold rounded-2xl hover:bg-indigo-600 hover:scale-105 transition-all shadow-2xl shadow-indigo-200/50 text-center">
                    Lihat Katalog Produk
                </a>
                <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20ingin%20konsultasi%20jasa/produk." target="_blank" class="px-10 py-4 bg-white border border-slate-200 text-slate-700 font-bold rounded-2xl hover:bg-slate-50 transition-all text-center">
                    Konsultasi Sekarang
                </a>
            </div>
        </div>
    </header>

    <section id="katalog" class="max-w-7xl mx-auto px-8 py-20" data-aos="fade-up">
        <div class="flex justify-between items-end mb-10">
            <div>  
                <h2 class="text-3xl font-bold text-slate-900">Katalog Layanan & Produk</h2>
                <p class="text-slate-500 mt-2">Pilih solusi digital terbaik buat kebutuhanmu.</p>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produks as $item)
                @if(strtolower($item->kategori) != 'portofolio')
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-md transition duration-300 flex flex-col" data-aos="zoom-in" data-aos-delay="100">
                    <span class="px-3 py-1 self-start text-xs font-bold text-indigo-600 uppercase bg-indigo-50 rounded-full">
                        {{ $item->kategori }}
                    </span>
                    <h3 class="text-xl font-bold mt-4 mb-2">{{ $item->nama }}</h3>
                    <p class="text-slate-600 text-sm mb-6 leading-relaxed line-clamp-3">{{ $item->deskripsi }}</p>
                    
                    <div class="flex justify-between items-center mt-auto pt-4 border-t border-slate-50">
                        <div class="flex flex-col">
                            <span class="text-xs text-slate-400">Mulai dari</span>
                            <span class="font-bold text-lg text-slate-900">Rp {{ $item->harga }}</span>
                        </div>
                        <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20mau%20konsultasi%20tentang%20{{ urlencode($item->nama) }}" 
                        target="_blank" 
                        class="bg-indigo-600 text-white px-5 py-2.5 rounded-xl text-sm font-bold hover:bg-slate-900 transition shadow-lg shadow-indigo-100 text-center">
                            Konsultasi
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>

    <section id="portofolio" class="max-w-7xl mx-auto px-8 py-24 border-t border-slate-100" data-aos="fade-up">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Hasil Karya & Proyek</h2>
            <p class="text-slate-500 mt-2">Kumpulan bukti nyata kualitas pengerjaan K-Serv.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produks as $item)
                @if(strtolower($item->kategori) == 'portofolio')
                <div class="group relative bg-slate-200 rounded-[24px] aspect-video overflow-hidden shadow-sm border border-slate-100" data-aos="flip-left" data-aos-delay="100">
                    <img src="{{ $item->gambar ?: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80' }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-700" 
                         alt="{{ $item->nama }}">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <span class="inline-block px-2 py-1 rounded-md bg-indigo-600 text-white text-[10px] font-black uppercase tracking-widest mb-2 shadow-lg shadow-indigo-500/50">
                                Project Done
                            </span>
                            <h4 class="text-white font-bold text-lg leading-tight">{{ $item->nama }}</h4>
                            <p class="text-slate-300 text-xs mt-2 line-clamp-2 leading-relaxed">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>

    <section id="cara-kerja" class="max-w-7xl mx-auto px-8 py-24 border-t border-slate-100" data-aos="fade-right">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-900">Gak Pakai Ribet, Gini Alurnya</h2>
            <p class="text-slate-500 mt-3">Proses cepat dan transparan buat setiap kebutuhan digitalmu.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="flex flex-col items-center text-center group" data-aos="zoom-in" data-aos-delay="100">
                <div class="w-16 h-16 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl font-black mb-6 shadow-xl shadow-indigo-100 group-hover:scale-110 transition-transform">1</div>
                <h3 class="text-xl font-bold mb-3 italic">Konsultasi Gratis</h3>
                <p class="text-slate-500 text-sm">Klik tombol pesan, ceritakan kebutuhanmu lewat WhatsApp.</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="zoom-in" data-aos-delay="200">
                <div class="w-16 h-16 bg-white text-indigo-600 border-2 border-indigo-100 rounded-2xl flex items-center justify-center text-2xl font-black mb-6 group-hover:scale-110 transition-transform">2</div>
                <h3 class="text-xl font-bold mb-3 italic">Pengerjaan Cepat</h3>
                <p class="text-slate-500 text-sm">Kita langsung gaskeun ngerjain proyek kamu dengan teliti.</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="zoom-in" data-aos-delay="300">
                <div class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center text-2xl font-black mb-6 shadow-xl shadow-slate-200 group-hover:scale-110 transition-transform">3</div>
                <h3 class="text-xl font-bold mb-3 italic">Serah Terima</h3>
                <p class="text-slate-500 text-sm">Proyek beres, revisi aman sampai kamu bener-bener puas!</p>
            </div>
        </div>

        <div class="mt-20 bg-indigo-600 rounded-[32px] p-8 md:p-12 text-center text-white shadow-2xl shadow-indigo-200" data-aos="zoom-out">
            <h3 class="text-2xl md:text-3xl font-bold mb-4 italic">Punya Proyek Khusus?</h3>
            <p class="text-indigo-100 mb-8 max-w-xl mx-auto">Gak nemu yang cocok di katalog? Tenang, gue bisa bantu custom proyek lo.</p>
            <a href="https://wa.me/6287870402431" class="inline-block bg-white text-indigo-600 px-8 py-4 rounded-2xl font-black hover:bg-slate-900 hover:text-white transition-all shadow-lg">
                Tanya Dulu Aja, Gratis!
            </a>
        </div>
    </section>

    <section id="faq" class="max-w-7xl mx-auto px-8 py-24 border-t border-slate-100" data-aos="fade-up">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Sering Ditanyakan</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm" data-aos="fade-right">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-indigo-200">Berapa lama pengerjaan pembuatan dokumen?</h4>
                <p class="text-slate-500 text-sm">Biasanya 2-3 hari kerja untuk pembuatan dokumen tergantung tingkat kesulitannya.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm" data-aos="fade-left">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-indigo-200">Apakah ada garansi revisi?</h4>
                <p class="text-slate-500 text-sm">Pasti! Kita kasih garansi revisi sampai sesuai dengan brief awal.</p>
            </div>
             <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm" data-aos="fade-left">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-indigo-200">Berapa lama pengerjaan pembuatan Website/Aplikasi?</h4>
                <p class="text-slate-500 text-sm">Biasanya 2-3 Minggu pengerjaan untuk pembuatan projeknya tergantung tingkat kesulitannya.</p>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t border-slate-100 py-16">
        <div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="flex flex-col items-center md:items-start">
                <div class="flex items-center gap-2 mb-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo KS" class="h-8 w-auto">
                    <div class="text-2xl font-extrabold text-indigo-600">K-SERV<span class="text-slate-400">.</span></div>
                </div>
                <p class="text-slate-500 text-sm italic tracking-wide">Solusi Digital Beres Tanpa Ribet.</p>
            </div>
            
            <div class="flex gap-6 items-center">
                <a href="https://github.com/V1ncen11" target="_blank" class="text-slate-400 hover:text-indigo-600 transition text-sm font-bold">GitHub</a>
                <a href="https://linkedin.com/in/kevin-nurachman" target="_blank" class="text-slate-400 hover:text-indigo-600 transition text-sm font-bold">LinkedIn</a>
                <div class="h-4 w-[1px] bg-slate-200"></div>
                <p class="text-slate-400 text-sm font-medium">© 2026 Built by Kevin.</p>
            </div>
        </div>
    </footer>

</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-in-out',
    });
});
</script>

@endsection