@extends('layouts.app')

@section('content')
<div class="bg-slate-50 text-slate-900 antialiased">

    {{-- ═══════════════════════ NAVBAR ═══════════════════════ --}}
    <nav id="mainNav" class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 md:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo KS" class="h-10 w-auto">
                <div class="text-2xl font-extrabold tracking-tight text-indigo-600">
                    K-SERV<span class="text-slate-400">.</span>
                </div>
            </div>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-8 font-medium">
                <a href="#beranda" class="text-slate-600 hover:text-indigo-600 transition">Beranda</a>
                <a href="#katalog" class="text-slate-600 hover:text-indigo-600 transition">Katalog</a>
                <a href="#portofolio" class="text-slate-600 hover:text-indigo-600 transition">Portofolio</a>
                <a href="#faq" class="text-slate-600 hover:text-indigo-600 transition">FAQ</a>
                <a href="https://wa.me/6287870402431" target="_blank" class="bg-indigo-600 text-white px-5 py-2.5 rounded-xl text-sm font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                    Pesan Jasa
                </a>
            </div>

            {{-- Hamburger Button (Mobile) --}}
            <button id="hamburgerBtn" class="md:hidden flex flex-col justify-center items-center w-10 h-10 rounded-xl hover:bg-slate-50 transition" aria-label="Menu">
                <span id="bar1" class="block w-6 h-0.5 bg-slate-700 rounded-full transition-all duration-300"></span>
                <span id="bar2" class="block w-6 h-0.5 bg-slate-700 rounded-full mt-1.5 transition-all duration-300"></span>
                <span id="bar3" class="block w-6 h-0.5 bg-slate-700 rounded-full mt-1.5 transition-all duration-300"></span>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="md:hidden overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
            <div class="px-6 pb-6 pt-2 flex flex-col gap-3 border-t border-slate-100 bg-white/95 backdrop-blur-md">
                <a href="#beranda" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 font-medium hover:bg-indigo-50 hover:text-indigo-600 transition-all">Beranda</a>
                <a href="#katalog" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 font-medium hover:bg-indigo-50 hover:text-indigo-600 transition-all">Katalog</a>
                <a href="#portofolio" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 font-medium hover:bg-indigo-50 hover:text-indigo-600 transition-all">Portofolio</a>
                <a href="#faq" class="mobile-nav-link px-4 py-3 rounded-xl text-slate-600 font-medium hover:bg-indigo-50 hover:text-indigo-600 transition-all">FAQ</a>
                <a href="https://wa.me/6287870402431" target="_blank" class="mt-2 bg-indigo-600 text-white px-5 py-3 rounded-xl text-sm font-bold text-center hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                    Pesan Jasa
                </a>
            </div>
        </div>
    </nav>

    {{-- ═══════════════════════ HERO ═══════════════════════ --}}
    <header id="beranda" class="relative overflow-hidden bg-slate-50/50">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full pointer-events-none">
            <div class="absolute -top-[20%] -left-[10%] w-[70%] h-[70%] bg-indigo-200/40 blur-[120px] rounded-full"></div>
            <div class="absolute top-[10%] -right-[10%] w-[60%] h-[60%] bg-blue-200/30 blur-[100px] rounded-full"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 md:px-8 py-28 md:py-36 flex flex-col items-center text-center" data-aos="fade-down">
            <div class="inline-flex items-center gap-2 px-4 py-2 mb-10 text-xs font-bold tracking-widest text-indigo-600 bg-white border border-indigo-100 rounded-full shadow-sm">
                <span class="flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                </span>
                SOLUSI DIGITAL TERPERCAYA
            </div>

            <h1 class="text-5xl md:text-8xl font-black mb-8 leading-[1.05] tracking-tight text-slate-900 w-full text-center">
                Beresin Tugas <br class="hidden md:block"> & Bisnis
                <span class="block mt-2 bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-blue-500 italic">
                    Tanpa Ribet.
                </span>
            </h1>

            <p class="text-lg md:text-xl text-slate-500 max-w-2xl mb-14 leading-relaxed text-center">
                Fokus ke yang penting, sisanya biar <span class="text-slate-900 font-bold">K-Serv</span> yang urus.
                Dari jasa olah data sampai desain.
            </p>

            <div class="relative z-10 flex flex-col sm:flex-row gap-5 w-full sm:w-auto">
                <a href="#katalog" class="px-10 py-4 bg-slate-900 text-white font-bold rounded-2xl hover:bg-indigo-600 hover:scale-105 transition-all shadow-2xl shadow-indigo-200/50 text-center">
                    Lihat Katalog Produk
                </a>
                <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20ingin%20konsultasi%20jasa/produk." target="_blank" class="px-10 py-4 bg-white border border-slate-200 text-slate-700 font-bold rounded-2xl hover:bg-slate-50 transition-all text-center">
                    Konsultasi Sekarang
                </a>
            </div>
        </div>
    </header>

    {{-- ═══════════════════════ STATS COUNTER ═══════════════════════ --}}
    <section class="max-w-5xl mx-auto px-6 md:px-8 -mt-10 relative z-10" data-aos="fade-up">
        <div class="bg-gradient-to-r from-indigo-600 to-blue-500 rounded-[28px] shadow-2xl shadow-indigo-300/40 p-8 md:p-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <div class="text-center group">
                    <div class="text-3xl md:text-4xl font-black text-white counter" data-target="15">0</div>
                    <div class="text-indigo-100 text-sm font-medium mt-1">Proyek Selesai</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl md:text-4xl font-black text-white counter" data-target="15">0</div>
                    <div class="text-indigo-100 text-sm font-medium mt-1">Klien Puas</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl md:text-4xl font-black text-white counter" data-target="5">0</div>
                    <div class="text-indigo-100 text-sm font-medium mt-1">Jenis Layanan</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl md:text-4xl font-black text-white flex items-center justify-center gap-1">
                        <span class="counter" data-target="100">0</span><span>%</span>
                    </div>
                    <div class="text-indigo-100 text-sm font-medium mt-1">Garansi Revisi</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ MARQUEE ═══════════════════════ --}}
    <div class="overflow-hidden py-12 md:py-16 relative">
        {{-- Gradient fade kiri-kanan --}}
        <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-slate-50 to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-slate-50 to-transparent z-10 pointer-events-none"></div>

        <div class="flex animate-marquee whitespace-nowrap">
            {{-- Set 1 --}}
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">CEPAT & TEPAT</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">BERGARANSI</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">TERPERCAYA</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">HARGA BERSAHABAT</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">REVISI GRATIS</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            {{-- Set 2 (duplicate for seamless loop) --}}
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">CEPAT & TEPAT</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">BERGARANSI</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">TERPERCAYA</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">HARGA BERSAHABAT</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
            <span class="mx-6 md:mx-10 text-2xl md:text-3xl font-black text-slate-200 tracking-tight">REVISI GRATIS</span>
            <span class="mx-4 text-2xl md:text-3xl text-indigo-300">✦</span>
        </div>
    </div>

    {{-- ═══════════════════════ KENAPA K-SERV ═══════════════════════ --}}
    <section class="max-w-7xl mx-auto px-6 md:px-8 py-20 border-t border-slate-100" data-aos="fade-up">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-bold text-slate-900">Kenapa Harus K-Serv?</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            {{-- Cepat --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="w-14 h-14 mx-auto mb-4 bg-indigo-50 rounded-2xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Pengerjaan Cepat</h3>
                <p class="text-slate-500 text-sm">Proyek selesai tepat waktu, tanpa molor.</p>
            </div>

            {{-- Bergaransi --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="w-14 h-14 mx-auto mb-4 bg-emerald-50 rounded-2xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Garansi Revisi</h3>
                <p class="text-slate-500 text-sm">Revisi gratis sampai kamu puas dengan hasilnya.</p>
            </div>

            {{-- Harga Bersahabat --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center" data-aos="zoom-in" data-aos-delay="300">
                <div class="w-14 h-14 mx-auto mb-4 bg-amber-50 rounded-2xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Harga Bersahabat</h3>
                <p class="text-slate-500 text-sm">Kualitas premium tanpa bikin kantong jebol.</p>
            </div>

            {{-- Support --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center" data-aos="zoom-in" data-aos-delay="400">
                <div class="w-14 h-14 mx-auto mb-4 bg-blue-50 rounded-2xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Respon Cepat</h3>
                <p class="text-slate-500 text-sm">Chat kapan aja, kita fast response via WhatsApp.</p>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ KATALOG ═══════════════════════ --}}
    <section id="katalog" class="max-w-7xl mx-auto px-6 md:px-8 py-20" data-aos="fade-up">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-slate-900">Katalog Layanan & Produk</h2>
                <p class="text-slate-500 mt-2">Pilih solusi digital terbaik buat kebutuhanmu.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produks as $item)
                @if(strtolower($item->kategori) != 'portofolio')
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col" data-aos="zoom-in" data-aos-delay="100">
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

    {{-- ═══════════════════════ PORTOFOLIO ═══════════════════════ --}}
    <section id="portofolio" class="max-w-7xl mx-auto px-6 md:px-8 py-24 border-t border-slate-100" data-aos="fade-up">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Hasil Karya & Proyek</h2>
            <p class="text-slate-500 mt-2">Kumpulan bukti nyata kualitas pengerjaan K-Serv.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produks as $item)
                @if(strtolower($item->kategori) == 'portofolio')
                <div class="group relative bg-slate-200 rounded-[24px] aspect-video overflow-hidden shadow-sm border border-slate-100 hover:shadow-xl transition-shadow duration-500" data-aos="flip-left" data-aos-delay="100">
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

    {{-- ═══════════════════════ TOOLS ═══════════════════════ --}}
    <section class="max-w-7xl mx-auto px-6 md:px-8 py-24 border-t border-slate-100" data-aos="fade-up">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-bold text-slate-900">Tools yang Sering Kita Pakai</h2>
            <p class="text-slate-500 mt-3 max-w-xl mx-auto">Peralatan profesional untuk hasil yang maksimal.</p>
        </div>

        <div class="grid grid-cols-3 md:grid-cols-7 gap-6 max-w-5xl mx-auto">
            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center gap-3" data-aos="zoom-in" data-aos-delay="50">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma" class="h-10 w-10">
                <span class="text-xs font-bold text-slate-500">Figma</span>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center gap-3" data-aos="zoom-in" data-aos-delay="100">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/canva/canva-original.svg" alt="Canva" class="h-10 w-10">
                <span class="text-xs font-bold text-slate-500">Canva</span>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center gap-3" data-aos="zoom-in" data-aos-delay="150">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="h-10 w-10">
                <span class="text-xs font-bold text-slate-500">Laravel</span>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center gap-3" data-aos="zoom-in" data-aos-delay="200">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind CSS" class="h-10 w-10">
                <span class="text-xs font-bold text-slate-500">Tailwind</span>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center gap-3" data-aos="zoom-in" data-aos-delay="250">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="h-10 w-10">
                <span class="text-xs font-bold text-slate-500">JavaScript</span>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center gap-3" data-aos="zoom-in" data-aos-delay="300">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" alt="VS Code" class="h-10 w-10">
                <span class="text-xs font-bold text-slate-500">VS Code</span>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center gap-3" data-aos="zoom-in" data-aos-delay="350">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="h-10 w-10">
                    <path fill="#D14524" d="M6 6h36v36H6z"/>
                    <path fill="#FFF" d="M20.1 29.2h-3.5v5.4H13V17.4h7.1c4.4 0 6.7 2 6.7 5.7 0 4.1-2.8 6.1-6.7 6.1zm-.2-8.6H16.6v5.5h3.3c2.3 0 3.6-1 3.6-2.9s-1.3-2.6-3.6-2.6zM33.1 29.2h-3.5v5.4h-3.6V17.4h7.1c4.4 0 6.7 2 6.7 5.7 0 4.1-2.8 6.1-6.7 6.1zm-.2-8.6h-3.3v5.5h3.3c2.3 0 3.6-1 3.6-2.9s-1.3-2.6-3.6-2.6z"/>
                </svg>
                <span class="text-xs font-bold text-slate-500">PowerPoint</span>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ CARA KERJA ═══════════════════════ --}}
    <section id="cara-kerja" class="max-w-7xl mx-auto px-6 md:px-8 py-24 border-t border-slate-100" data-aos="fade-right">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-900">Gak Pakai Ribet, Gini Alurnya</h2>
            <p class="text-slate-500 mt-3">Proses cepat dan transparan buat setiap kebutuhan digitalmu.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="flex flex-col items-center text-center group" data-aos="zoom-in" data-aos-delay="100">
                <div class="w-16 h-16 bg-indigo-600 text-white rounded-2xl flex items-center justify-center text-2xl font-black mb-6 shadow-xl shadow-indigo-100 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">1</div>
                <h3 class="text-xl font-bold mb-3 italic">Konsultasi Gratis</h3>
                <p class="text-slate-500 text-sm">Klik tombol pesan, ceritakan kebutuhanmu lewat WhatsApp.</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="zoom-in" data-aos-delay="200">
                <div class="w-16 h-16 bg-white text-indigo-600 border-2 border-indigo-100 rounded-2xl flex items-center justify-center text-2xl font-black mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">2</div>
                <h3 class="text-xl font-bold mb-3 italic">Pengerjaan Cepat</h3>
                <p class="text-slate-500 text-sm">Kita langsung gaskeun ngerjain proyek kamu dengan teliti.</p>
            </div>
            <div class="flex flex-col items-center text-center group" data-aos="zoom-in" data-aos-delay="300">
                <div class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center text-2xl font-black mb-6 shadow-xl shadow-slate-200 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">3</div>
                <h3 class="text-xl font-bold mb-3 italic">Serah Terima</h3>
                <p class="text-slate-500 text-sm">Proyek beres, revisi aman sampai kamu bener-bener puas!</p>
            </div>
        </div>

        <div class="mt-20 bg-indigo-600 rounded-[32px] p-8 md:p-12 text-center text-white shadow-2xl shadow-indigo-200" data-aos="zoom-out">
            <h3 class="text-2xl md:text-3xl font-bold mb-4 italic">Punya Proyek Khusus?</h3>
            <p class="text-indigo-100 mb-8 max-w-xl mx-auto">Gak nemu yang cocok di katalog? Tenang, kita bisa bantu custom proyek kamu.</p>
            <a href="https://wa.me/6287870402431" class="inline-block bg-white text-indigo-600 px-8 py-4 rounded-2xl font-black hover:bg-slate-900 hover:text-white hover:scale-105 transition-all shadow-lg">
                Tanya Dulu Aja, Gratis!
            </a>
        </div>
    </section>

    {{-- ═══════════════════════ FAQ ═══════════════════════ --}}
    <section id="faq" class="max-w-7xl mx-auto px-6 md:px-8 py-24 border-t border-slate-100" data-aos="fade-up">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Sering Ditanyakan</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow duration-300" data-aos="fade-right">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-indigo-200">Berapa lama pengerjaan pembuatan dokumen?</h4>
                <p class="text-slate-500 text-sm">Biasanya 2-3 hari kerja untuk pembuatan dokumen tergantung tingkat kesulitannya.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow duration-300" data-aos="fade-left">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-indigo-200">Apakah ada garansi revisi?</h4>
                <p class="text-slate-500 text-sm">Pasti! Kita kasih garansi revisi sampai sesuai dengan brief awal.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow duration-300" data-aos="fade-right">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-indigo-200">Berapa lama pengerjaan pembuatan Website/Aplikasi?</h4>
                <p class="text-slate-500 text-sm">Biasanya 2-3 Minggu pengerjaan untuk pembuatan projeknya tergantung tingkat kesulitannya.</p>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ FOOTER ═══════════════════════ --}}
    <footer class="bg-white border-t border-slate-100 py-16">
        <div class="max-w-7xl mx-auto px-6 md:px-8 flex flex-col md:flex-row justify-between items-center gap-8">
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

{{-- ═══════════════════════ BACK TO TOP BUTTON ═══════════════════════ --}}
<button id="backToTop" class="fixed bottom-8 right-8 z-50 w-12 h-12 bg-indigo-600 text-white rounded-full shadow-xl shadow-indigo-200 flex items-center justify-center opacity-0 translate-y-4 pointer-events-none transition-all duration-300 hover:bg-indigo-700 hover:scale-110">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7" />
    </svg>
</button>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ─── AOS Init ───
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-in-out',
    });

    // ─── Hamburger Menu Toggle ───
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const bar1 = document.getElementById('bar1');
    const bar2 = document.getElementById('bar2');
    const bar3 = document.getElementById('bar3');
    let menuOpen = false;

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

    // Close menu saat klik link
    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', function() {
            menuOpen = false;
            mobileMenu.style.maxHeight = '0';
            bar1.style.transform = '';
            bar2.style.opacity = '1';
            bar3.style.transform = '';
        });
    });

    // ─── Navbar Scroll Effect ───
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            nav.classList.add('shadow-lg', 'shadow-slate-200/30');
            nav.classList.remove('border-b', 'border-slate-100');
        } else {
            nav.classList.remove('shadow-lg', 'shadow-slate-200/30');
            nav.classList.add('border-b', 'border-slate-100');
        }
    });

    // ─── Back to Top Button ───
    const backToTopBtn = document.getElementById('backToTop');
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
                // Ease out cubic
                const ease = 1 - Math.pow(1 - progress, 3);
                counter.textContent = Math.floor(target * ease);
                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    counter.textContent = target + '+';
                }
            }
            requestAnimationFrame(update);
        });
    }

    // Trigger counter saat section visible
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
        statsObserver.observe(counterSection.closest('section'));
    }
});
</script>

@endsection