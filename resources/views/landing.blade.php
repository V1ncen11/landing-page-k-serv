@extends('layouts.app')

@section('content')
<div class="bg-white text-slate-900 antialiased">



    {{-- ═══════════════════════ HERO ═══════════════════════ --}}
    <header id="beranda" class="relative overflow-hidden bg-slate-50 dark:bg-slate-900 pt-28 pb-32 md:pt-36 md:pb-40 transition-colors duration-300">


        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            {{-- Bagian Kiri: Teks --}}
            <div class="flex flex-col items-start text-left" data-aos="fade-right">

                <h1 class="text-5xl md:text-7xl font-black mb-6 leading-[1.1] tracking-tight text-slate-900 dark:text-white transition-colors duration-300">
                    Beresin Tugas <br class="hidden md:block"> & Bisnis
                    <span class="inline-block mt-4 bg-blue-600 text-white px-8 py-2 md:py-3 rounded-[2rem] transform -rotate-2 shadow-[0_10px_40px_-10px_rgba(37,99,235,0.6)] border-4 border-blue-100/20">
                        Tanpa Ribet.
                    </span>
                </h1>

                <p class="text-lg text-slate-500 dark:text-slate-400 mb-6 leading-relaxed max-w-lg transition-colors duration-300">
                    Fokus ke yang penting, sisanya biar <span class="text-slate-900 dark:text-white font-bold">K-Serv</span> yang urus.
                    Dari jasa pembuatan website sampai desain visual premium.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <a href="#katalog" class="px-8 py-4 bg-blue-600 text-white font-bold rounded-2xl hover:bg-blue-700 hover:scale-105 transition-all shadow-xl shadow-blue-200 text-center flex justify-center items-center gap-2">
                        Lihat Katalog 
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20ingin%20konsultasi%20jasa/produk." target="_blank" class="px-8 py-4 bg-white border border-slate-200 text-slate-700 font-bold rounded-2xl hover:bg-slate-50 transition-all text-center shadow-sm">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>

            {{-- Bagian Kanan: Floating UI / Visual --}}
            <div class="relative mt-20 lg:mt-0 scale-75 sm:scale-90 lg:scale-100 transform origin-center" data-aos="fade-up" data-aos-delay="200">
                {{-- Glow Element (Hidden on mobile to save CPU/GPU) --}}
                <div class="hidden md:block absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl"></div>
                
                {{-- Mockup Container --}}
                <div class="relative w-full h-[450px] flex items-center justify-center">
                    
                    {{-- Main Code Window --}}
                    <div class="absolute z-10 w-80 bg-slate-900 rounded-2xl shadow-2xl shadow-slate-900/40 border border-slate-800 overflow-hidden -rotate-2 hover:rotate-0 transition-transform duration-500 animate-float">
                        <div class="flex items-center gap-2 px-4 py-3 bg-slate-800/50 border-b border-slate-800">
                            <div class="w-3 h-3 rounded-full bg-rose-500"></div>
                            <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                            <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                        </div>
                        <div class="p-5 font-mono text-sm text-sky-300 leading-relaxed">
                            <span class="text-purple-400">const</span> <span class="text-blue-300">kServ</span> = {<br>
                            &nbsp;&nbsp;quality: <span class="text-amber-300">'Premium'</span>,<br>
                            &nbsp;&nbsp;delivery: <span class="text-amber-300">'Lightning Fast'</span>,<br>
                            &nbsp;&nbsp;status: <span class="text-emerald-400">true</span><br>
                            };<br><br>
                            <span class="text-slate-500">// Deploying success...</span>
                        </div>
                    </div>

                    {{-- Floating Analytics Card --}}
                    <div class="absolute z-20 bottom-8 -left-12 w-64 bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 p-5 rotate-[4deg] animate-float-delayed">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            </div>
                            <div>
                                <div class="text-slate-500 text-xs font-bold uppercase tracking-wider">Performa Bisnis</div>
                                <div class="text-slate-900 font-black text-lg">Meningkat Tajam</div>
                            </div>
                        </div>
                        <div class="w-full h-12 bg-slate-50 rounded-lg overflow-hidden flex items-end px-2 gap-1.5 pb-2">
                            <div class="w-full bg-blue-200 rounded-sm h-[30%]"></div>
                            <div class="w-full bg-blue-300 rounded-sm h-[50%]"></div>
                            <div class="w-full bg-blue-400 rounded-sm h-[40%]"></div>
                            <div class="w-full bg-blue-500 rounded-sm h-[70%]"></div>
                            <div class="w-full bg-blue-600 rounded-sm h-[90%]"></div>
                        </div>
                    </div>

                    {{-- Floating Notification Card --}}
                    <div class="absolute z-20 top-12 -right-8 w-56 bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 p-4 rotate-[-3deg] animate-float-fast">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-blue-600 flex-shrink-0 flex items-center justify-center text-white shadow-md shadow-blue-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <div class="text-slate-900 font-bold text-sm">Project Done!</div>
                                <div class="text-slate-500 text-xs mt-0.5">Selesai lebih awal dari target.</div>
                            </div>
                        </div>
                    </div>

                    {{-- Floating Promo Card (The Hook) --}}
                    <div class="absolute z-30 top-2 -left-10 w-52 bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 p-4 rotate-[-5deg] animate-float hover:rotate-0 hover:scale-105 transition-all duration-300 cursor-pointer" onclick="document.getElementById('katalog').scrollIntoView({behavior: 'smooth'})">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-cyan-50 flex-shrink-0 flex items-center justify-center text-cyan-600 shadow-sm border border-cyan-100">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>
                            </div>
                            <div>
                                <div class="text-slate-500 font-bold text-[10px] uppercase tracking-wider mb-0.5">Promo Spesial</div>
                                <div class="text-slate-900 font-black text-sm">Mulai <span class="text-cyan-600">1 Jt-an!</span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </header>

    {{-- ═══════════════════════ STATS COUNTER ═══════════════════════ --}}
    <section class="max-w-5xl mx-auto px-6 md:px-8 -mt-10 relative z-10" data-aos="fade-up">
        <div class="bg-white border border-slate-100 rounded-[28px] shadow-xl p-8 md:p-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <div class="text-center group">
                    <div class="text-3xl md:text-4xl font-black text-blue-600 counter" data-target="15" data-suffix="+">0</div>
                    <div class="text-slate-500 text-sm font-medium mt-1">Proyek Selesai</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl md:text-4xl font-black text-blue-600 counter" data-target="15" data-suffix="+">0</div>
                    <div class="text-slate-500 text-sm font-medium mt-1">Klien Puas</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl md:text-4xl font-black text-blue-600 counter" data-target="5" data-suffix="+">0</div>
                    <div class="text-slate-500 text-sm font-medium mt-1">Jenis Layanan</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl md:text-4xl font-black text-blue-600 flex items-center justify-center gap-1">
                        <span class="counter" data-target="100" data-suffix="">0</span><span>%</span>
                    </div>
                    <div class="text-slate-500 text-sm font-medium mt-1">Garansi Revisi</div>
                </div>
            </div>
        </div>
    </section>


    {{-- ═══════════════════════ KENAPA K-SERV ═══════════════════════ --}}
    <section class="max-w-7xl mx-auto px-6 md:px-8 py-20 bg-slate-50 rounded-3xl my-10" data-aos="fade-up">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-bold text-slate-900">Kenapa Harus K-Serv?</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            {{-- Cepat --}}
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="w-14 h-14 mx-auto mb-4 bg-blue-50 rounded-2xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                <div class="tilt-card relative bg-white rounded-3xl shadow-sm border border-slate-200 hover:border-blue-400 hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group" data-tilt data-tilt-gyroscope="false" data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.2" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    {{-- Top border accent --}}
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-500 to-sky-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>

                    <div class="p-8 flex flex-col h-full">
                        {{-- Label & Popular Badge --}}
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-3 py-1 text-xs font-bold text-blue-700 uppercase bg-blue-50 rounded-md border border-blue-100">
                                {{ $item->kategori }}
                            </span>
                            @if($index === 1 || strpos(strtolower($item->nama), 'ujian') !== false)
                                <span class="px-3 py-1 text-[10px] font-black text-white uppercase tracking-wider bg-gradient-to-r from-sky-500 to-blue-600 rounded-full shadow-sm animate-pulse shadow-blue-200">
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
                                <span class="text-[10px] font-black text-cyan-700 bg-cyan-50 px-2 py-0.5 rounded-full border border-cyan-100 uppercase tracking-wider">Promo Diskon</span>
                            </div>
                            @endif
                            
                            <div class="flex items-baseline gap-1 text-blue-600">
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
                                        <div class="mt-0.5 bg-blue-50 p-1 rounded-full text-blue-500 shrink-0">
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
                           class="w-full bg-slate-50 text-blue-600 border border-blue-200 px-5 py-3.5 rounded-xl text-sm font-bold hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all shadow-sm text-center flex items-center justify-center gap-2 group-hover:bg-blue-600 group-hover:text-white group-hover:shadow-md">
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
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                         alt="{{ $item->nama }}" loading="lazy">

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <span class="inline-block px-2 py-1 rounded-md bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest mb-2 shadow-lg shadow-blue-500/50">
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
            <div class="hidden md:block absolute top-12 left-[16%] right-[16%] h-0.5 bg-gradient-to-r from-blue-100 via-blue-200 to-blue-100 z-0"></div>

            {{-- Step 1 --}}
            <div class="relative z-10 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-24 h-24 bg-white rounded-full border-8 border-slate-50 shadow-lg shadow-blue-100 flex items-center justify-center mb-6 group-hover:border-blue-50 group-hover:scale-110 transition-all duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">1. Konsultasi Gratis</h3>
                <p class="text-slate-500 text-sm leading-relaxed px-4">Ceritakan masalah dan kebutuhan bisnismu. Kami akan memberikan solusi dan penawaran terbaik.</p>
            </div>

            {{-- Step 2 --}}
            <div class="relative z-10 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-24 h-24 bg-white rounded-full border-8 border-slate-50 shadow-lg shadow-blue-100 flex items-center justify-center mb-6 group-hover:border-blue-50 group-hover:scale-110 transition-all duration-300">
                    <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">2. Proses Development</h3>
                <p class="text-slate-500 text-sm leading-relaxed px-4">Tim ahli kami langsung mengerjakan UI/UX & coding website sesuai dengan kesepakatan.</p>
            </div>

            {{-- Step 3 --}}
            <div class="relative z-10 flex flex-col items-center text-center group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-24 h-24 bg-white rounded-full border-8 border-slate-50 shadow-lg shadow-blue-100 flex items-center justify-center mb-6 group-hover:border-blue-50 group-hover:scale-110 transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600">
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
                <div class="order-2 w-16 h-16 rounded-full bg-blue-600 border-4 border-slate-50 text-white flex items-center justify-center font-black text-2xl z-10 shadow-xl shadow-blue-200 group-hover:scale-110 transition-transform my-6 md:my-0">1</div>
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
                <div class="order-2 w-16 h-16 rounded-full bg-white border-4 border-blue-600 text-blue-600 flex items-center justify-center font-black text-2xl z-10 shadow-xl shadow-blue-100 group-hover:scale-110 transition-transform my-6 md:my-0">2</div>
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
                    <div class="bg-emerald-50 text-emerald-600 p-4 rounded-2xl border border-emerald-100 text-sm font-bold flex items-center gap-3 relative">
                        <div class="absolute top-1/2 -left-2 w-4 h-4 bg-emerald-50 border-b border-l border-emerald-100 rotate-45 -translate-y-1/2"></div>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                        Proyek Selesai!
                    </div>
                </div>
            </div>
        </div>

        {{-- ═══════ DRAMATIC CTA ═══════ --}}
        <div class="mt-20 relative rounded-[32px] overflow-hidden" data-aos="zoom-out">
            {{-- Background dark gradient + grid pattern --}}
            <div class="absolute inset-0 bg-slate-900"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:3rem_3rem]"></div>
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[200px] bg-blue-600/10 blur-[100px] rounded-full"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-800/10 blur-[80px] rounded-full"></div>

            <div class="relative z-10 px-8 md:px-16 py-16 md:py-20 text-center">
                <span class="inline-block px-4 py-1.5 bg-white/10 text-blue-300 text-xs font-black rounded-full uppercase tracking-widest mb-6 border border-white/10">Mulai Sekarang</span>
                <h3 class="text-3xl md:text-5xl font-black text-white mb-5 leading-tight">
                    Punya Ide? <br>
                    <span class="text-slate-200">Kita Wujudkan Bareng.</span>
                </h3>
                <p class="text-slate-400 mb-10 max-w-xl mx-auto text-lg">Gak nemu yang cocok di katalog? Tenang, K-Serv bisa bantu custom proyek apapun. Konsultasi pertama selalu gratis!</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="https://wa.me/6287870402431?text=Halo%20K-Serv!%20Saya%20mau%20konsultasi%20proyek%20custom." target="_blank"
                        class="px-10 py-4 bg-blue-600 hover:bg-blue-500 text-white font-black rounded-2xl hover:scale-105 transition-all shadow-2xl shadow-blue-900/50 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat WhatsApp Sekarang
                    </a>
                    <a href="#katalog" class="px-10 py-4 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold rounded-2xl hover:scale-105 transition-all backdrop-blur-sm">
                        Lihat Katalog Dulu
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ TESTIMONI ═══════════════════════ --}}
    <section class="bg-slate-50 border-t border-slate-100 py-24" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="text-center mb-14">
                <span class="inline-block px-4 py-1.5 bg-blue-50 text-blue-600 text-xs font-black rounded-full uppercase tracking-widest mb-4">Testimoni</span>
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
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center text-white font-black text-sm">RD</div>
                        <div>
                            <div class="font-bold text-slate-800 text-sm">Rizky D.</div>
                            <div class="text-slate-400 text-xs">Owner, CV Maju Bersama</div>
                        </div>
                    </div>
                </div>

                {{-- Testimoni 2 --}}
                <div class="bg-blue-600 rounded-[24px] p-7 shadow-xl shadow-blue-200 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex text-amber-300 mb-4 gap-0.5">
                        @for($i=0; $i<5; $i++)<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor
                    </div>
                    <p class="text-blue-50 text-sm leading-relaxed flex-grow italic">"Sistem kasir custom yang dibuatin K-Serv udah jalan 3 bulan tanpa masalah. Laporannya real-time dan super mudah dipakai. Worth every rupiah! Langsung rekomendasi ke temen-temen."</p>
                    <div class="flex items-center gap-3 mt-6 pt-5 border-t border-blue-500">
                        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white font-black text-sm">SA</div>
                        <div>
                            <div class="font-bold text-white text-sm">Siti A.</div>
                            <div class="text-blue-200 text-xs">Pemilik Toko Sembako Online</div>
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
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-pink-400 flex items-center justify-center text-white font-black text-sm">BW</div>
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
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-blue-200 transition-all duration-300" data-aos="fade-right">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-blue-200">Berapa lama pengerjaan pembuatan dokumen?</h4>
                <p class="text-slate-500 text-sm">Biasanya 2-3 hari kerja untuk pembuatan dokumen tergantung tingkat kesulitannya.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-blue-200 transition-all duration-300" data-aos="fade-left">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-blue-200">Apakah ada garansi revisi?</h4>
                <p class="text-slate-500 text-sm">Pasti! Kita kasih garansi revisi sampai sesuai dengan brief awal.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md hover:border-blue-200 transition-all duration-300" data-aos="fade-right">
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-blue-200">Berapa lama pengerjaan pembuatan Website/Aplikasi?</h4>
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
                    <span class="inline-block px-4 py-1.5 bg-blue-50 text-blue-600 text-xs font-black rounded-full uppercase tracking-widest mb-5">Tentang Kami</span>
                    <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6 leading-tight">
                        Kami Hadir untuk <br>
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-cyan-500">Beresin Urusan Digital</span><br>Kamu.
                    </h2>
                    <p class="text-slate-500 leading-relaxed mb-6">
                        K-Serv adalah layanan jasa digital yang didirikan dengan satu misi sederhana: <strong class="text-slate-700">membantu individu dan bisnis tampil profesional di dunia digital tanpa harus ribet dan mahal.</strong>
                    </p>
                    <p class="text-slate-500 leading-relaxed mb-8">
                        Dari mahasiswa yang butuh tugas selesai cepat, sampai pemilik bisnis yang ingin punya website profesional K-Serv siap jadi partner digital kamu yang responsif, transparan, dan bergaransi.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center gap-2 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3">
                            <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center text-blue-600 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </div>
                            <div>
                                <div class="font-bold text-slate-800 text-sm">Misi</div>
                                <div class="text-slate-500 text-xs">Solusi digital yang simpel & powerful</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3">
                            <div class="w-8 h-8 rounded-lg bg-indigo-100 flex items-center justify-center text-indigo-600 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" /></svg>
                            </div>
                            <div>
                                <div class="font-bold text-slate-800 text-sm">Visi</div>
                                <div class="text-slate-500 text-xs">Jadi agensi digital #1 terpercaya</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kanan: Visual Stats Card --}}
                <div class="grid grid-cols-2 gap-5" data-aos="fade-left" data-aos-delay="150">
                    <div class="bg-blue-600 rounded-[24px] p-7 text-white shadow-xl shadow-blue-200 hover:-translate-y-1 transition-all duration-300">
                        <div class="text-4xl font-black mb-1">15+</div>
                        <div class="text-blue-100 text-sm font-medium">Proyek Berhasil Diselesaikan</div>
                        <div class="mt-4 text-blue-300 text-xs">Dari website, sistem, hingga desain</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
@endpush