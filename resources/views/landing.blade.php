@extends('layouts.app')
@section('is_transparent_nav', 'true')

@section('content')
<style>
    /* Bulletproof force transparent and fixed navbar on landing page */
    #mainNav {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100% !important;
        background-color: transparent !important;
        border-color: transparent !important;
        box-shadow: none !important;
    }
    #mainNav .nav-text-color {
        color: white !important;
    }
    #mainNav #darkToggle {
        border-color: rgba(255,255,255,0.2) !important;
        background-color: rgba(255,255,255,0.1) !important;
        color: white !important;
    }
</style>
<div class="bg-white text-slate-900 antialiased">



            {{-- ═══════════════════════ HERO ═══════════════════════ --}}
    <header id="beranda" class="relative w-full min-h-[600px] flex items-center justify-center overflow-hidden bg-black" style="height: 100vh;">
        
        {{-- Background Image (Realistic bright coding setup - No full-screen muddy filters!) --}}
        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=1200" 
             srcset="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=600 600w,
                     https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=1200 1200w,
                     https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=2000 2000w"
             sizes="100vw"
             fetchpriority="high"
             alt="Developer Workspace" 
             class="absolute inset-0 w-full h-full object-cover">
             
        {{-- Top Gradient (Khusus buat nge-gelapin area Navbar & Logo biar kebaca jelas) --}}
        <div class="absolute top-0 inset-x-0 h-32 pointer-events-none" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%, transparent 100%);"></div>
        
        {{-- Localized Shadow (Foolproof inline CSS radial gradient exactly behind the text) --}}
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div style="width: 100%; max-width: 1000px; height: 500px; background: radial-gradient(ellipse at center, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 40%, transparent 70%);"></div>
        </div>

        {{-- Content --}}
        <div class="relative z-10 text-center px-4 max-w-6xl mx-auto" data-aos="fade-up">
            <h1 class="text-2xl md:text-4xl lg:text-5xl font-light text-white mb-8 leading-[1.5] tracking-wide" style="text-shadow: 0 4px 15px rgba(0,0,0,0.4), 0 0 25px rgba(0,0,0,0.3);">
                Bangun sistem digital <span class="font-signature text-rose-400 font-normal text-4xl md:text-6xl lg:text-7xl inline-block transform -rotate-3 translate-y-2 px-1" style="text-shadow: 0 4px 12px rgba(0,0,0,0.3);">impianmu</span><br class="hidden md:block"> tanpa perlu ribet.
            </h1>
            <div class="flex flex-col sm:flex-row gap-6 md:gap-10 justify-center mt-12 items-center">
                <a href="#katalog" class="text-white font-medium text-sm md:text-base hover:text-rose-300 transition-colors tracking-widest uppercase pb-1 border-b border-transparent hover:border-rose-300">
                    Lihat Katalog
                </a>

                <a href="https://wa.me/6287870402431" target="_blank" class="text-white font-medium text-sm md:text-base hover:text-rose-300 transition-colors tracking-widest uppercase pb-1 border-b border-transparent hover:border-rose-300">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </header>

    {{-- ═══════════════════════ STATS & KENAPA K-SERV (Combined Background) ═══════════════════════ --}}
    <section class="w-full bg-slate-50 pt-0 pb-20 relative z-10">
        
        {{-- Stats Counter (Overlaps Hero) --}}
        <div class="max-w-5xl mx-auto px-6 md:px-8 -mt-20 mb-24 relative z-20" data-aos="fade-up">
            <div class="bg-white border border-slate-100 rounded-[28px] shadow-xl p-8 md:p-10">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                    <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-3xl md:text-4xl font-black text-slate-900 counter group-hover:scale-110 transition-transform duration-300" data-target="15" data-suffix="+">0</div>
                        <div class="text-slate-500 text-sm font-medium mt-1">Proyek Selesai</div>
                    </div>
                    <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-3xl md:text-4xl font-black text-slate-900 counter group-hover:scale-110 transition-transform duration-300" data-target="15" data-suffix="+">0</div>
                        <div class="text-slate-500 text-sm font-medium mt-1">Klien Puas</div>
                    </div>
                    <div class="text-center group" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-3xl md:text-4xl font-black text-slate-900 counter group-hover:scale-110 transition-transform duration-300" data-target="5" data-suffix="+">0</div>
                        <div class="text-slate-500 text-sm font-medium mt-1">Jenis Layanan</div>
                    </div>
                    <div class="text-center group" data-aos="fade-up" data-aos-delay="400">
                        <div class="text-3xl md:text-4xl font-black text-slate-900 flex items-center justify-center gap-1 group-hover:scale-110 transition-transform duration-300">
                            <span class="counter" data-target="100" data-suffix="">0</span><span>%</span>
                        </div>
                        <div class="text-slate-500 text-sm font-medium mt-1">Garansi Revisi</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kenapa Harus K-Serv? --}}
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="text-center mb-14" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-slate-900">Kenapa Harus K-Serv?</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                {{-- Cepat --}}
                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group text-left" data-aos="zoom-in" data-aos-delay="100">
                    <div class="absolute leading-none font-black select-none pointer-events-none" style="font-size: 120px; right: -1rem; bottom: -1rem; color: #f8fafc;">
                        01
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Pengerjaan Cepat</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Proyek selesai tepat waktu, tanpa molor.</p>
                    </div>
                </div>

                {{-- Bergaransi --}}
                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group text-left" data-aos="zoom-in" data-aos-delay="200">
                    <div class="absolute leading-none font-black select-none pointer-events-none" style="font-size: 120px; right: -1rem; bottom: -1rem; color: #f8fafc;">
                        02
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Garansi Revisi</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Revisi gratis sampai kamu puas dengan hasilnya.</p>
                    </div>
                </div>

                {{-- Harga Bersahabat --}}
                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group text-left" data-aos="zoom-in" data-aos-delay="300">
                    <div class="absolute leading-none font-black select-none pointer-events-none" style="font-size: 120px; right: -1rem; bottom: -1rem; color: #f8fafc;">
                        03
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Harga Bersahabat</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Kualitas premium tanpa bikin kantong jebol.</p>
                    </div>
                </div>

                {{-- Support --}}
                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden group text-left" data-aos="zoom-in" data-aos-delay="400">
                    <div class="absolute leading-none font-black select-none pointer-events-none" style="font-size: 120px; right: -1rem; bottom: -1rem; color: #f8fafc;">
                        04
                    </div>
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors">Respon Cepat</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">Chat kapan aja, kita fast response via WhatsApp.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ KATALOG ═══════════════════════ --}}
    <section id="katalog" class="max-w-7xl mx-auto px-6 md:px-8 py-20 bg-white" data-aos="fade-up">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
            <div>
                <h2 class="text-3xl font-bold text-slate-900">Katalog Layanan & Produk</h2>
                <p class="text-slate-500 mt-2">Pilih solusi digital terbaik buat kebutuhanmu.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produks as $index => $item)
                @if(strtolower($item->kategori) != 'portofolio')
                <div class="tilt-card relative bg-white rounded-3xl shadow-sm border border-slate-200 hover:border-slate-900 hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group" data-tilt data-tilt-gyroscope="false" data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.2" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    {{-- Top border accent --}}
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-slate-900 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="p-8 flex flex-col h-full">
                        {{-- Label & Popular Badge --}}
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-3 py-1 text-xs font-bold text-slate-600 uppercase bg-slate-50 rounded-md border border-slate-200">
                                {{ $item->kategori }}
                            </span>
                            @if($index === 1 || strpos(strtolower($item->nama), 'ujian') !== false)
                                <span class="px-3 py-1 text-[10px] font-black text-white uppercase tracking-wider bg-slate-900 rounded-full shadow-sm animate-pulse shadow-slate-200">
                                    ⭐ Paling Dicari
                                </span>
                            @endif
                        </div>

                        {{-- Title & Description --}}
                        <h3 class="text-2xl font-black text-slate-900 mb-3">{{ $item->nama }}</h3>
                        <p class="text-slate-500 text-sm mb-6 leading-relaxed line-clamp-3 min-h-[60px]">{{ $item->deskripsi }}</p>

                        {{-- Price --}}
                        <div class="mb-8 flex flex-col">
                            <span class="text-sm font-semibold text-slate-400 mb-1">Mulai dari</span>
                            @php
                                $hargaAsli = '';
                                $parts = explode(' - ', $item->harga);
                                $asliParts = [];
                                foreach($parts as $p) {
                                    $val = (int)str_replace('.', '', $p);
                                    if($val > 0) {
                                        // Fake original price (+50%, rounded to nearest 100k)
                                        $asliParts[] = number_format(round(($val * 1.5) / 100000) * 100000, 0, ',', '.');
                                    }
                                }
                                if(count($asliParts) > 0) {
                                    $hargaAsli = implode(' - ', $asliParts);
                                }
                            @endphp
                            
                            @if($hargaAsli)
                            <div class="flex items-center gap-2 mb-0.5">
                                <span class="text-sm font-bold text-slate-400 line-through decoration-slate-400/70 decoration-2">Rp {{ $hargaAsli }}</span>
                                <span class="text-[10px] font-black text-white bg-slate-900 px-2 py-0.5 rounded-full uppercase tracking-wider">Promo Diskon</span>
                            </div>
                            @endif
                            
                            <div class="flex items-baseline gap-1 text-slate-900">
                                <span class="text-2xl font-black tracking-tight">Rp {{ $item->harga }}</span>
                            </div>
                        </div>

                        <hr class="border-slate-100 mb-6">

                        {{-- Spesifikasi / Fitur --}}
                        <div class="flex-grow mb-8">
                            <p class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Yang kamu dapatkan:</p>
                            <ul class="space-y-3">
                                @php
                                    // Parse spesifikasi line by line. Fallback if empty.
                                    $rawSpecs = trim($item->spesifikasi);
                                    $specsList = [];
                                    if(!empty($rawSpecs)) {
                                        $specsList = explode("\n", str_replace("\r", "", $rawSpecs));
                                    } else {
                                        // Default fallback generic specs
                                        $specsList = [
                                            'Pengerjaan Cepat & Tepat',
                                            'Kualitas Kode Standar Industri',
                                            'Garansi Bebas Error (Bugs)',
                                            'Konsultasi Via WhatsApp'
                                        ];
                                    }
                                @endphp
                                @foreach($specsList as $spec)
                                    @if(trim($spec) != '')
                                    <li class="flex items-start gap-3 text-sm text-slate-600">
                                        <div class="mt-0.5 bg-slate-100 p-1 rounded-full text-slate-700 shrink-0">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <span class="leading-relaxed">{{ trim($spec) }}</span>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                        {{-- Full Width Button --}}
                        <a href="{{ $item->link ?: 'https://wa.me/6287870402431' }}?text=Halo%20K-Serv,%20mau%20konsultasi%20tentang%20{{ urlencode($item->nama) }}" 
                           target="_blank" 
                           class="w-full bg-slate-50 text-slate-900 border border-slate-200 px-5 py-3.5 rounded-xl text-sm font-bold hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all shadow-sm text-center flex items-center justify-center gap-2 group-hover:bg-slate-900 group-hover:text-white group-hover:shadow-md">
                            Konsultasi Sekarang
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>

    {{-- ═══════════════════════ PORTOFOLIO ═══════════════════════ --}}
    <section id="portofolio" class="max-w-7xl mx-auto px-6 md:px-8 py-24 border-t border-slate-100 bg-slate-50" data-aos="fade-up">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Hasil Karya & Proyek</h2>
            <p class="text-slate-500 mt-2">Kumpulan bukti nyata kualitas pengerjaan K-Serv.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produks as $item)
                @if(strtolower($item->kategori) == 'portofolio')
                <a href="{{ route('portofolio.show', $item->id) }}" class="tilt-card group relative bg-slate-200 rounded-[24px] aspect-video overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-shadow duration-500 block" data-tilt data-tilt-gyroscope="false" data-tilt-max="8" data-tilt-glare="true" data-tilt-max-glare="0.3" data-aos="flip-left" data-aos-delay="100">
                    <img src="{{ $item->gambar ?: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80&w=600' }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-700 rounded-[24px]"
                         alt="{{ $item->nama }}" loading="lazy">

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <span class="inline-block px-2 py-1 rounded-md bg-slate-900 text-white text-[10px] font-black uppercase tracking-widest mb-2 shadow-lg shadow-slate-900/50 border border-slate-700">
                                Project Done
                            </span>
                            <h4 class="text-white font-bold text-lg leading-tight">{{ $item->nama }}</h4>
                            <p class="text-slate-300 text-xs mt-2 line-clamp-2 leading-relaxed">{{ $item->deskripsi }}</p>
                            <div class="mt-4 flex items-center gap-2 text-white text-xs font-bold bg-white/20 w-fit px-3 py-1.5 rounded-full backdrop-blur-sm">
                                Lihat Detail
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg>
                            </div>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </section>

    {{-- ═══════════════════════ ALUR KERJA ═══════════════════════ --}}
    <section class="max-w-7xl mx-auto px-6 md:px-8 py-24 bg-white" data-aos="fade-up">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-slate-900">Alur Kerja K-Serv</h2>
            <p class="text-slate-500 mt-3 max-w-xl mx-auto">Proses yang simpel, transparan, dan tanpa ribet. Duduk manis, biar kami yang bekerja.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto relative">
            {{-- Connecting Line (Desktop Only) --}}
            <div class="hidden md:block absolute top-12 left-[16%] right-[16%] h-0.5 bg-gradient-to-r from-slate-200 via-slate-300 to-slate-200 z-0"></div>

            {{-- Step 1 --}}
            <div class="relative z-10 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-24 h-24 bg-white rounded-full border-8 border-slate-50 shadow-lg shadow-slate-200 flex items-center justify-center mb-6 group-hover:border-slate-100 group-hover:scale-110 transition-all duration-300">
                    <div class="w-14 h-14 bg-slate-100 rounded-full flex items-center justify-center text-slate-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">1. Konsultasi Gratis</h3>
                <p class="text-slate-500 text-sm leading-relaxed px-4">Ceritakan masalah dan kebutuhan bisnismu. Kami akan memberikan solusi dan penawaran terbaik.</p>
            </div>

            {{-- Step 2 --}}
            <div class="relative z-10 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-24 h-24 bg-white rounded-full border-8 border-slate-50 shadow-lg shadow-slate-200 flex items-center justify-center mb-6 group-hover:border-slate-100 group-hover:scale-110 transition-all duration-300">
                    <div class="w-14 h-14 bg-slate-900 rounded-full flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">2. Proses Development</h3>
                <p class="text-slate-500 text-sm leading-relaxed px-4">Tim ahli kami langsung mengerjakan UI/UX & coding website sesuai dengan kesepakatan.</p>
            </div>

            {{-- Step 3 --}}
            <div class="relative z-10 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-24 h-24 bg-white rounded-full border-8 border-slate-50 shadow-lg shadow-slate-200 flex items-center justify-center mb-6 group-hover:border-slate-100 group-hover:scale-110 transition-all duration-300">
                    <div class="w-14 h-14 bg-slate-100 rounded-full flex items-center justify-center text-slate-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">3. Review & Launching</h3>
                <p class="text-slate-500 text-sm leading-relaxed px-4">Website direview bersama. Jika sudah OK, website langsung di-online-kan ke publik!</p>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ CARA KERJA (TIMELINE) ═══════════════════════ --}}
    <section id="cara-kerja" class="max-w-7xl mx-auto px-6 md:px-8 py-24 border-t border-slate-100 bg-slate-50" data-aos="fade-right">
        <div class="text-center mb-20">
            <h2 class="text-3xl font-bold text-slate-900">Gak Pakai Ribet, Gini Alurnya</h2>
            <p class="text-slate-500 mt-3">Proses cepat dan transparan buat setiap kebutuhan digitalmu.</p>
        </div>

        <div class="relative max-w-4xl mx-auto">
            {{-- Garis tengah --}}
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-1 bg-slate-200 -translate-x-1/2"></div>
            
            {{-- Step 1 --}}
            <div class="relative flex flex-col md:flex-row justify-between items-center w-full mb-16 group" data-aos="fade-up">
                <div class="order-1 md:w-5/12 text-center md:text-right pr-0 md:pr-12">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Konsultasi Gratis</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Klik tombol pesan, ceritakan kebutuhanmu lewat WhatsApp. Bebas nanya apa aja, mumpung gratis!</p>
                </div>
                <div class="order-2 w-16 h-16 rounded-full bg-slate-900 border-4 border-slate-50 text-white flex items-center justify-center font-black text-2xl z-10 shadow-xl shadow-slate-300 group-hover:scale-110 transition-transform my-6 md:my-0">1</div>
                <div class="order-3 md:w-5/12 pl-0 md:pl-12 hidden md:block">
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-200 text-sm text-slate-500 italic relative">
                        <div class="absolute top-1/2 -left-2 w-4 h-4 bg-white border-b border-l border-slate-200 rotate-45 -translate-y-1/2"></div>
                        "Halo min, aku mau dibuatin website undangan pernikahan..."
                    </div>
                </div>
            </div>

            {{-- Step 2 --}}
            <div class="relative flex flex-col md:flex-row justify-between items-center w-full mb-16 group" data-aos="fade-up" data-aos-delay="100">
                <div class="order-1 md:w-5/12 pr-0 md:pr-12 hidden md:block text-right">
                    <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-200 text-sm text-slate-500 italic relative">
                        <div class="absolute top-1/2 -right-2 w-4 h-4 bg-white border-t border-r border-slate-200 rotate-45 -translate-y-1/2"></div>
                        Proses desain, coding, dan setup server dikerjakan...
                    </div>
                </div>
                <div class="order-2 w-16 h-16 rounded-full bg-white border-4 border-slate-900 text-slate-900 flex items-center justify-center font-black text-2xl z-10 shadow-xl shadow-slate-200 group-hover:scale-110 transition-transform my-6 md:my-0">2</div>
                <div class="order-3 md:w-5/12 text-center md:text-left pl-0 md:pl-12">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Pengerjaan Cepat</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Kita langsung gaskeun ngerjain proyek kamu dengan teliti sesuai deadline yang disepakati.</p>
                </div>
            </div>

            {{-- Step 3 --}}
            <div class="relative flex flex-col md:flex-row justify-between items-center w-full group" data-aos="fade-up" data-aos-delay="200">
                <div class="order-1 md:w-5/12 text-center md:text-right pr-0 md:pr-12">
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Serah Terima &amp; Revisi</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Proyek beres, kita review bareng. Kurang pas? Garansi revisi sampai kamu bener-bener puas!</p>
                </div>
                <div class="order-2 w-16 h-16 rounded-full bg-slate-900 border-4 border-slate-50 text-white flex items-center justify-center font-black text-2xl z-10 shadow-xl shadow-slate-300 group-hover:scale-110 transition-transform my-6 md:my-0">3</div>
                <div class="order-3 md:w-5/12 pl-0 md:pl-12 hidden md:block">
                    <div class="bg-slate-900 text-white p-4 rounded-2xl border border-slate-900 text-sm font-bold flex items-center gap-3 relative">
                        <div class="absolute top-1/2 -left-2 w-4 h-4 bg-slate-900 border-b border-l border-slate-900 rotate-45 -translate-y-1/2"></div>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                        Proyek Selesai!
                    </div>
                </div>
            </div>
        </div>
    {{-- ═══════════════════════ CTA SECTION ═══════════════════════ --}}
    <section class="py-24 bg-slate-50 dark:bg-slate-900 transition-colors duration-300">
        <div class="max-w-5xl mx-auto px-6 md:px-8">
            <div class="bg-slate-100 dark:bg-slate-800 rounded-[3rem] py-16 md:py-24 px-8 md:px-20 text-center relative overflow-hidden border border-slate-200 dark:border-slate-700 transition-colors duration-300">
                
                {{-- Minimalist Grid Background --}}
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#cbd5e1_1px,transparent_1px),linear-gradient(to_bottom,#cbd5e1_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,#334155_1px,transparent_1px),linear-gradient(to_bottom,#334155_1px,transparent_1px)] bg-[size:3rem_3rem] opacity-30"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-slate-100 via-transparent to-transparent dark:from-slate-800 pointer-events-none"></div>

                <div class="relative z-10">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">Punya Ide? Kita Wujudkan Bareng.</h2>
                    
                    <p class="text-slate-500 dark:text-slate-400 text-base mb-10 max-w-xl mx-auto leading-relaxed">
                        Gak nemu yang cocok di katalog? Tenang, K-Serv bisa bantu custom proyek apapun. Konsultasi pertama selalu gratis!
                    </p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20punya%20ide%20project%20nih." target="_blank"
                           class="inline-flex justify-center items-center gap-2 px-8 py-4 bg-slate-900 hover:bg-black text-white font-bold rounded-2xl hover:-translate-y-1 shadow-lg shadow-slate-900/30 transition-all duration-300">
                            <i class="fab fa-whatsapp text-xl"></i> Chat WhatsApp Sekarang
                        </a>
                        <a href="{{ url('/#katalog') }}" 
                           class="inline-flex justify-center items-center gap-2 px-8 py-4 bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-950 font-bold rounded-2xl hover:-translate-y-1 shadow-sm border border-slate-200 dark:border-slate-700 transition-all duration-300">
                            Lihat Katalog Dulu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ═══════════════════════ TESTIMONI ═══════════════════════ --}}
    <section class="bg-slate-50 border-t border-slate-100 py-24" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl font-bold text-slate-900">Kata Mereka tentang K-Serv</h2>
                <p class="text-slate-500 mt-3 max-w-xl mx-auto">Ratusan klien sudah percaya kami. Ini yang mereka bilang.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- Testimoni 1 --}}
                <div class="bg-white rounded-[24px] p-7 shadow-sm border border-slate-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex text-amber-400 mb-4 gap-0.5">
                        @for($i=0; $i<5; $i++)<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed flex-grow italic">"Gila cepet banget pengerjaannya! Website company profile kita jadi dalam 2 minggu dan hasilnya melebihi ekspektasi. Client kita langsung kesan pertama udah wow banget."</p>
                    <div class="flex items-center gap-3 mt-6 pt-5 border-t border-slate-100">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-slate-700 to-slate-500 flex items-center justify-center text-white font-black text-sm">RD</div>
                        <div>
                            <div class="font-bold text-slate-800 text-sm">Rizky D.</div>
                            <div class="text-slate-400 text-xs">Owner, CV Maju Bersama</div>
                        </div>
                    </div>
                </div>

                {{-- Testimoni 2 --}}
                <div class="bg-slate-900 rounded-[24px] p-7 shadow-xl shadow-slate-300 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex text-amber-300 mb-4 gap-0.5">
                        @for($i=0; $i<5; $i++)<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor
                    </div>
                    <p class="text-slate-300 text-sm leading-relaxed flex-grow italic">"Sistem kasir custom yang dibuatin K-Serv udah jalan 3 bulan tanpa masalah. Laporannya real-time dan super mudah dipakai. Worth every rupiah! Langsung rekomendasi ke temen-temen."</p>
                    <div class="flex items-center gap-3 mt-6 pt-5 border-t border-slate-700">
                        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white font-black text-sm">SA</div>
                        <div>
                            <div class="font-bold text-white text-sm">Siti A.</div>
                            <div class="text-slate-400 text-xs">Pemilik Toko Sembako Online</div>
                        </div>
                    </div>
                </div>

                {{-- Testimoni 3 --}}
                <div class="bg-white rounded-[24px] p-7 shadow-sm border border-slate-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex text-amber-400 mb-4 gap-0.5">
                        @for($i=0; $i<5; $i++)<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed flex-grow italic">"Awalnya ragu karena baru pertama pakai jasa freelance, tapi K-Serv responsif banget dan selalu update progress. Landing page kita udah naik 40% lead sejak dipasang. Mantap!"</p>
                    <div class="flex items-center gap-3 mt-6 pt-5 border-t border-slate-100">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-slate-800 to-slate-600 flex items-center justify-center text-white font-black text-sm">BW</div>
                        <div>
                            <div class="font-bold text-slate-800 text-sm">Bayu W.</div>
                            <div class="text-slate-400 text-xs">Marketing Manager, StartupX</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════ FAQ ═══════════════════════ --}}
    <section id="faq" class="max-w-7xl mx-auto px-6 md:px-8 py-24 bg-white" data-aos="fade-up">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Sering Ditanyakan</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-slate-400 transition-all duration-300" data-aos="fade-right">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-slate-300">Berapa lama pengerjaan pembuatan dokumen?</h4>
                <p class="text-slate-500 text-sm">Biasanya 2-3 hari kerja untuk pembuatan dokumen tergantung tingkat kesulitannya.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-slate-400 transition-all duration-300" data-aos="fade-left">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-slate-300">Apakah ada garansi revisi?</h4>
                <p class="text-slate-500 text-sm">Pasti! Kita kasih garansi revisi sampai sesuai dengan brief awal.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-slate-400 transition-all duration-300" data-aos="fade-right">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-slate-300">Berapa lama pengerjaan pembuatan Website/Aplikasi?</h4>
                <p class="text-slate-500 text-sm">Biasanya 2-3 Minggu pengerjaan untuk pembuatan projeknya tergantung tingkat kesulitannya.</p>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ TENTANG KAMI ═══════════════════════ --}}
    <section class="bg-white border-t border-slate-100 py-24" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                {{-- Kiri: Teks --}}
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6 leading-tight">
                        Kami Hadir untuk <br>
                        Beresin Urusan Digital<br>Kamu.
                    </h2>
                    <p class="text-slate-500 leading-relaxed mb-6">
                        K-Serv adalah layanan jasa digital yang didirikan dengan satu misi sederhana: <strong class="text-slate-700">membantu individu dan bisnis tampil profesional di dunia digital tanpa harus ribet dan mahal.</strong>
                    </p>
                    <p class="text-slate-500 leading-relaxed mb-8">
                        Dari mahasiswa yang butuh tugas selesai cepat, sampai pemilik bisnis yang ingin punya website profesional K-Serv siap jadi partner digital kamu yang responsif, transparan, dan bergaransi.
                    </p>
                </div>

                {{-- Kanan: Visual Stats Card --}}
                <div class="grid grid-cols-2 gap-5" data-aos="fade-left" data-aos-delay="150">
                    <div class="bg-slate-900 rounded-[24px] p-7 text-white shadow-xl shadow-slate-300 hover:-translate-y-1 transition-all duration-300">
                        <div class="text-4xl font-black mb-1">15+</div>
                        <div class="text-slate-300 text-sm font-medium">Proyek Berhasil Diselesaikan</div>
                        <div class="mt-4 text-slate-400 text-xs">Dari website, sistem, hingga desain</div>
                    </div>
                    <div class="bg-white border border-slate-100 rounded-[24px] p-7 shadow-sm hover:-translate-y-1 transition-all duration-300">
                        <div class="text-4xl font-black text-slate-900 mb-1">15+</div>
                        <div class="text-slate-500 text-sm font-medium">Klien Puas & Percaya</div>
                        <div class="mt-4 text-slate-400 text-xs">Dan terus bertambah setiap bulannya</div>
                    </div>
                    <div class="bg-white border border-slate-100 rounded-[24px] p-7 shadow-sm hover:-translate-y-1 transition-all duration-300">
                        <div class="text-4xl font-black text-slate-900 mb-1">100%</div>
                        <div class="text-slate-500 text-sm font-medium">Garansi Revisi</div>
                        <div class="mt-4 text-slate-400 text-xs">Revisi sampai kamu beneran puas</div>
                    </div>
                    <div class="bg-slate-900 rounded-[24px] p-7 text-white shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="text-4xl font-black mb-1">24/7</div>
                        <div class="text-slate-300 text-sm font-medium">Siap Konsultasi</div>
                        <div class="mt-4 text-slate-500 text-xs">Fast response via WhatsApp</div>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
@endpush