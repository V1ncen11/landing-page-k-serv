@extends('layouts.app')
@section('is_transparent_nav', 'true')

@section('content')
<style>
    /* Hostinger-style: navbar is always dark navy */
    #mainNav {
        background-color: #1a1a2e !important;
        border-bottom: 1px solid rgba(255,255,255,0.08) !important;
        box-shadow: none !important;
    }
</style>
<div class="text-slate-900 antialiased">



            {{-- ═══════════════════════ HERO ═══════════════════════ --}}
    <header id="beranda" class="w-full overflow-hidden relative z-10 flex items-center" style="min-height: 100vh; padding-top: 80px; padding-bottom: 80px; background-color: #13111c;">
        {{-- Subtle dot pattern --}}
        <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(103,61,230,0.15) 1px, transparent 1px); background-size: 40px 40px;"></div>
        {{-- Purple glow top left --}}
        <div class="absolute top-0 left-0 w-[600px] h-[600px] pointer-events-none" style="background: radial-gradient(circle, rgba(103,61,230,0.2) 0%, transparent 70%);"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 w-full relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                {{-- Text Content --}}
                <div data-aos="fade-right" class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight tracking-tight">
                        Bangun Website Profesional <br class="hidden lg:block"> untuk <span style="color: #a78bfa;">Bisnis Anda</span>
                    </h1>
                    <p class="text-lg md:text-xl mb-10 leading-relaxed max-w-2xl mx-auto lg:mx-0" style="color: #94a3b8;">
                        Website profesional dan sistem custom modern yang dirancang khusus untuk mengakselerasi bisnis Anda di era digital.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#katalog" class="px-8 py-4 bg-white text-slate-900 font-black rounded-full hover:bg-gray-100 transition-all duration-300 text-center uppercase tracking-wide text-sm hover:-translate-y-0.5 shadow-lg">
                            Lihat Katalog
                        </a>
                        <a href="https://wa.me/6287870402431" target="_blank" class="px-8 py-4 font-bold rounded-full transition-all duration-300 text-center uppercase tracking-wide text-sm border border-white/30 hover:border-white/60 hover:bg-white/10 text-white">
                            Konsultasi Gratis
                        </a>
                    </div>
                    <p class="mt-6 text-sm" style="color: #64748b;">&#10003; Garansi revisi &nbsp;&nbsp; &#10003; Fast response 24/7</p>
                </div>

                {{-- Hero SVG Illustration --}}
                <div data-aos="fade-left" data-aos-delay="200" class="relative flex justify-center lg:justify-end">
                    <img 
                        src="/images/hero_startup.svg" 
                        alt="Web Development Team" 
                        class="w-full max-w-[520px] h-auto opacity-90"
                        style="filter: drop-shadow(0 0 40px rgba(103,61,230,0.3));"
                    />
                </div>
            </div>
        </div>
    </header>

    {{-- ═══════════════════════ KENAPA K-SERV ═══════════════════════ --}}
    {{-- ═══════════════════════ KENAPA K-SERV ═══════════════════════ --}}
    <section class="w-full bg-gray-50 flex flex-col py-24 relative z-10">
        <div class="max-w-6xl mx-auto px-6 md:px-8 w-full">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-5xl font-black text-slate-900 mb-4 tracking-tight">Kenapa Harus K-Serv?</h2>
                <p class="text-lg text-slate-500">Alasan kenapa ratusan klien mempercayakan proyek digitalnya ke kami.</p>
            </div>
            
            <div class="flex flex-col gap-24">
                {{-- Cepat --}}
                <div class="flex flex-col md:flex-row items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" data-aos="fade-right">
                    <img src="/images/kserv_cepat.svg" alt="Pengerjaan Cepat" class="w-[300px] md:w-[400px] h-auto object-contain" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-left">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Pengerjaan Cepat</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Proyek selesai tepat waktu, tanpa molor. Fokus pada deadline yang disepakati agar bisnis kamu bisa segera online tanpa harus menunggu lama.</p>
                  </div>
                </div>

                {{-- Garansi Revisi --}}
                <div class="flex flex-col md:flex-row-reverse items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" data-aos="fade-left">
                    <img src="/images/kserv_garansi.svg" alt="Garansi Revisi" class="w-[300px] md:w-[400px] h-auto object-contain" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-right">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Garansi Revisi</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Revisi gratis sampai kamu puas dengan hasilnya. Kepuasan klien adalah prioritas utama kami dalam menyelesaikan setiap baris kode.</p>
                  </div>
                </div>

                {{-- Harga Bersahabat --}}
                <div class="flex flex-col md:flex-row items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" data-aos="fade-right">
                    <img src="/images/kserv_harga.svg" alt="Harga Bersahabat" class="w-[300px] md:w-[400px] h-auto object-contain" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-left">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Harga Bersahabat</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Kualitas premium skala korporasi tanpa bikin kantong jebol. Kami menawarkan solusi terbaik sesuai dengan budget usahamu.</p>
                  </div>
                </div>

                {{-- Respon Cepat --}}
                <div class="flex flex-col md:flex-row-reverse items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" data-aos="fade-left">
                    <img src="/images/kserv_respon.svg" alt="Respon Cepat" class="w-[300px] md:w-[400px] h-auto object-contain" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-right">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Respon Cepat 24/7</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Punya pertanyaan atau butuh update progress proyek? Chat kapan aja, tim developer kami pastikan fast response via WhatsApp.</p>
                  </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════ KATALOG ═══════════════════════ --}}
    <section id="katalog" class="max-w-7xl mx-auto px-6 md:px-8 py-24 bg-white" data-aos="fade-up">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black text-slate-900">Pilihan Paket Layanan</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($produks as $index => $item)
                @if(strtolower($item->kategori) != 'portofolio')
                {{-- Hostinger-style card: popular card gets elevated with purple header --}}
                @php $isPopular = ($index === 1 || strpos(strtolower($item->nama), 'ujian') !== false); @endphp
                <div class="tilt-card relative bg-white rounded-3xl border transition-all duration-300 flex flex-col overflow-hidden group {{ $isPopular ? 'shadow-2xl border-transparent -translate-y-2' : 'shadow-sm border-slate-200 hover:border-slate-300 hover:shadow-md' }}" data-tilt data-tilt-gyroscope="false" data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.2" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    {{-- Hostinger-style: popular card has full purple header bar --}}
                    @if($isPopular)
                    <div class="w-full py-3 text-center text-white text-xs font-black uppercase tracking-widest" style="background-color: #673de6;">⭐ Paling Dicari</div>
                    @endif

                    <div class="p-8 flex flex-col h-full">
                        {{-- Label --}}
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-3 py-1 text-xs font-bold uppercase rounded-md {{ $isPopular ? 'text-white' : 'text-slate-600 bg-gray-100' }}" style="{{ $isPopular ? 'background-color:#673de6;' : '' }}">
                                {{ $item->kategori }}
                            </span>
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
                                <span class="text-[10px] font-black text-white px-2 py-0.5 rounded-full uppercase tracking-wider" style="background: linear-gradient(135deg, #7c3aed, #3b82f6);">Promo Diskon</span>
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
                           class="w-full px-5 py-3.5 rounded-xl text-sm font-bold transition-all text-center flex items-center justify-center gap-2 {{ $isPopular ? 'text-white shadow-md hover:opacity-90' : 'bg-white border border-slate-200 hover:border-[#673de6] text-slate-800' }}" style="{{ $isPopular ? 'background-color: #673de6;' : '' }}">
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
                <div class="tilt-card group relative bg-slate-200 rounded-[24px] aspect-video overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-shadow duration-500 block" data-tilt data-tilt-gyroscope="false" data-tilt-max="8" data-tilt-glare="true" data-tilt-max-glare="0.3" data-aos="flip-left" data-aos-delay="100">
                    {{-- Main link for the whole card --}}
                    <a href="{{ route('portofolio.show', $item->id) }}" class="absolute inset-0 z-10"></a>

                    <img src="{{ $item->gambar ?: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80&w=600' }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-700 rounded-[24px]"
                         alt="{{ $item->nama }}" loading="lazy">

                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent flex flex-col justify-end p-6 opacity-0 group-hover:opacity-100 transition-all duration-500 z-20 pointer-events-none">
                        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500 pointer-events-auto">
                            <span class="inline-block px-2 py-1 rounded-md bg-slate-900 text-white text-[10px] font-black uppercase tracking-widest mb-2 shadow-lg shadow-slate-900/50 border border-slate-700">
                                Project Done
                            </span>
                            <h4 class="text-white font-bold text-lg leading-tight">{{ $item->nama }}</h4>
                            <p class="text-slate-300 text-xs mt-2 line-clamp-2 leading-relaxed">{{ $item->deskripsi }}</p>
                            
                            <div class="mt-4 flex flex-wrap items-center gap-2">
                                <a href="{{ route('portofolio.show', $item->id) }}" class="flex items-center gap-2 text-white text-xs font-bold bg-white/20 hover:bg-white/30 transition-colors w-fit px-3 py-1.5 rounded-full backdrop-blur-sm">
                                    Detail
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg>
                                </a>
                                
                                @if($item->link && strpos($item->link, 'wa.me') === false)
                                <a href="{{ $item->link }}" target="_blank" class="flex items-center gap-2 text-slate-900 text-xs font-bold bg-white hover:bg-slate-100 transition-colors w-fit px-3 py-1.5 rounded-full shadow-sm">
                                    Kunjungi Web
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </section>



    {{-- ═══════════════════════ CARA KERJA (TIMELINE) ═══════════════════════ --}}
    <section id="cara-kerja" class="max-w-7xl mx-auto px-6 md:px-8 py-24 border-t border-slate-100 bg-slate-50" data-aos="fade-right">
        <div class="text-center mb-20">
            <h2 class="text-3xl font-bold text-slate-900">Gak Pakai Ribet, Gini Alurnya</h2>
            <p class="text-slate-500 mt-3">Proses cepat dan transparan buat setiap kebutuhan digitalmu.</p>
        </div>

        <div class="max-w-6xl mx-auto px-6 md:px-8 mt-12">
            <div class="flex flex-col gap-24">
                {{-- Step 1 --}}
                <div class="flex flex-col md:flex-row items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" style="mix-blend-mode: multiply;" data-aos="fade-right">
                    <img src="/images/timeline_konsultasi.svg" alt="Konsultasi Gratis" class="w-[300px] md:w-[400px] h-auto object-contain" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-left">
                    <span class="text-violet-600 font-bold tracking-widest text-sm uppercase mb-2 block">Langkah 1</span>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Konsultasi Gratis</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Klik tombol pesan, ceritakan kebutuhanmu lewat WhatsApp. Bebas nanya apa aja, mumpung gratis! Kita bahas sampai nemu solusi yang pas.</p>
                  </div>
                </div>

                {{-- Step 2 --}}
                <div class="flex flex-col md:flex-row-reverse items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" style="mix-blend-mode: multiply;" data-aos="fade-left">
                    <img src="/images/timeline_pengerjaan.svg" alt="Pengerjaan Cepat" class="w-[300px] md:w-[400px] h-auto object-contain" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-right">
                    <span class="text-violet-600 font-bold tracking-widest text-sm uppercase mb-2 block">Langkah 2</span>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Pengerjaan Cepat</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Setelah deal, tim developer kita langsung gaskeun ngerjain proyek kamu dengan teliti sesuai deadline yang disepakati bersama.</p>
                  </div>
                </div>

                {{-- Step 3 --}}
                <div class="flex flex-col md:flex-row items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" data-aos="fade-right">
                    <img src="/images/timeline_serah_terima.svg" alt="Serah Terima & Revisi" class="w-[300px] md:w-[400px] h-auto object-contain" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-left">
                    <span class="text-violet-600 font-bold tracking-widest text-sm uppercase mb-2 block">Langkah 3</span>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Serah Terima &amp; Revisi</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Proyek beres, kita review bareng. Kurang pas? Tenang, ada garansi revisi sampai kamu bener-bener puas sama hasilnya!</p>
                  </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ═══════════════════════ CTA SECTION ═══════════════════════ --}}
    <section class="py-24 bg-white transition-colors duration-300">
        <div class="max-w-5xl mx-auto px-6 md:px-8">
            <div class="rounded-[3rem] py-16 md:py-24 px-8 md:px-20 text-center relative overflow-hidden" style="background-color: #13111c;">
                
                {{-- Subtle dot pattern --}}
                <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(103,61,230,0.15) 1px, transparent 1px); background-size: 40px 40px;"></div>

                <div class="relative z-10">
                    <h2 class="text-3xl md:text-5xl font-black text-white mb-6 tracking-tight">Punya Ide? Kita Wujudkan Bareng.</h2>
                    
                    <p class="text-base mb-10 max-w-xl mx-auto leading-relaxed" style="color: #94a3b8;">
                        Gak nemu yang cocok di katalog? Tenang, K-Serv bisa bantu custom proyek apapun. Konsultasi pertama selalu gratis!
                    </p>
                    
                    <div class="flex flex-col sm:flex-row justify-center gap-4">
                        <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20punya%20ide%20project%20nih." target="_blank"
                           class="inline-flex justify-center items-center gap-2 px-8 py-4 text-white font-bold rounded-full hover:-translate-y-1 shadow-lg transition-all duration-300" style="background-color: #673de6;">
                            <i class="fab fa-whatsapp text-xl"></i> Chat WhatsApp Sekarang
                        </a>
                        <a href="{{ url('/#katalog') }}" 
                           class="inline-flex justify-center items-center gap-2 px-8 py-4 bg-transparent text-white border border-white/30 hover:border-white/60 hover:bg-white/10 font-bold rounded-full transition-all duration-300">
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
                <p class="text-slate-500 mt-3 max-w-xl mx-auto">Beberapa klien sudah mempercayakan kebutuhan digitalnya kepada K-Serv.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- Testimoni 1 --}}
                <div class="bg-white rounded-[24px] p-7 shadow-sm border border-slate-100 hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex text-amber-400 mb-4 gap-0.5">
                        @for($i=0; $i<5; $i++)<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>@endfor
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed flex-grow italic">"Gila cepet banget pengerjaannya! Website company profile kita jadi dalam 2 minggu dan hasilnya melebihi ekspektasi. Client kita langsung kesan pertama udah wow banget."</p>
                    <div class="flex items-center gap-3 mt-6 pt-5 border-t border-slate-100">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-black text-sm" style="background-color: #673de6;">RD</div>
                        <div>
                            <div class="font-bold text-slate-800 text-sm">Rizky D.</div>
                            <div class="text-slate-400 text-xs">Owner, CV Maju Bersama</div>
                        </div>
                    </div>
                </div>

                {{-- Testimoni 2 --}}
                <div class="rounded-[24px] p-7 shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col" style="background-color: #673de6;" data-aos="fade-up" data-aos-delay="200">
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
                        <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-black text-sm" style="background-color: #673de6;">BW</div>
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
                <h4 class="font-bold text-slate-900 mb-2 italic underline decoration-slate-300">Berapa lama pengerjaan website atau sistem?</h4>
                <p class="text-slate-500 text-sm">Biasanya memakan waktu 1-2 minggu untuk website, dan menyesuaikan untuk sistem custom tergantung tingkat kesulitannya.</p>
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
                        Dari UMKM yang ingin go-digital, sekolah dan instansi yang butuh sistem informasi terintegrasi, hingga pemilik bisnis yang ingin punya website profesional—K-SERV siap menjadi partner digital Anda yang responsif, transparan, dan bergaransi.
                    </p>
                </div>

                {{-- Kanan: Illustration --}}
                <div class="flex justify-center" data-aos="fade-left" data-aos-delay="150">
                    <img src="/images/tentang_kami_team.svg" alt="Tim K-SERV" class="w-full max-w-[500px] h-auto object-contain drop-shadow-xl" />
                </div>

            </div>
        </div>
    </section>



@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
@endpush