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
    /* Hero layout switch */
    #hero-mobile { display: flex; }
    #hero-desktop { display: none; }
    @media (min-width: 768px) {
        #hero-mobile { display: none !important; }
        #hero-desktop { display: grid !important; grid-template-columns: 1fr 1fr; gap: 2.5rem; align-items: center; }
    }
    @media (min-width: 1024px) {
        #hero-desktop { gap: 3rem; }
    }
</style>
<div class="text-slate-900 antialiased">



            {{-- ═══════════════════════ HERO ═══════════════════════ --}}
    <header id="beranda" class="w-full overflow-hidden relative z-10 flex items-center" style="min-height: 100svh; padding-top: 80px; padding-bottom: 48px; background-color: #13111c;">
        {{-- Subtle dot pattern --}}
        <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(103,61,230,0.15) 1px, transparent 1px); background-size: 40px 40px;"></div>
        {{-- Purple glow top left --}}
        <div class="absolute top-0 left-0 w-[600px] h-[600px] pointer-events-none" style="background: radial-gradient(circle, rgba(103,61,230,0.2) 0%, transparent 70%);"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 w-full relative z-10">

            {{-- Mobile layout: stacked (heading > image > desc+buttons), only below md --}}
            <div id="hero-mobile" class="flex-col items-center text-center gap-4">
                {{-- Heading --}}
                <h1 class="text-3xl font-black text-white leading-tight tracking-tight">
                    Bangun Website Profesional untuk <span style="color: #a78bfa;">Bisnis Anda</span>
                </h1>

                {{-- Big illustration center --}}
                <div class="w-full flex justify-center">
                    <img
                        src="/images/hero_startup.svg"
                        alt="Web Development Team"
                        class="w-full max-w-[340px] h-auto opacity-90"
                        style="filter: drop-shadow(0 0 40px rgba(103,61,230,0.3));"
                        fetchpriority="high"
                        loading="eager"
                    />
                </div>

                {{-- Description --}}
                <p class="text-base leading-relaxed max-w-sm" style="color: #94a3b8;">
                    Website profesional dan sistem custom modern untuk mengakselerasi bisnis Anda di era digital.
                </p>
            </div>

            {{-- Desktop layout: 2-column side by side, from md+ --}}
            <div id="hero-desktop">
                {{-- Text Content --}}
                <div data-aos="fade-right" class="text-left">
                    <h1 class="text-3xl md:text-4xl lg:text-6xl font-black text-white mb-4 lg:mb-6 leading-tight tracking-tight">
                        Bangun Website Profesional untuk <span style="color: #a78bfa;">Bisnis Anda</span>
                    </h1>
                    <p class="text-base md:text-base lg:text-xl leading-relaxed" style="color: #94a3b8;">
                        Website profesional dan sistem custom modern yang dirancang khusus untuk mengakselerasi bisnis Anda di era digital.
                    </p>
                </div>

                {{-- Hero SVG Illustration --}}
                <div data-aos="fade-left" data-aos-delay="200" class="relative flex justify-end">
                    <img
                        src="/images/hero_startup.svg"
                        alt="Web Development Team"
                        class="w-full max-w-[520px] h-auto opacity-90"
                        style="filter: drop-shadow(0 0 40px rgba(103,61,230,0.3));"
                        fetchpriority="high"
                        loading="eager"
                    />
                </div>
            </div>

        </div>
    </header>

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
                    <img src="/images/kserv_cepat.svg" alt="Pengerjaan Cepat" class="h-auto object-contain" style="width: 300px; max-width: 100%;" loading="lazy" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-left">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Pengerjaan Cepat</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Proyek selesai tepat waktu, tanpa molor. Fokus pada deadline yang disepakati agar bisnis kamu bisa segera online tanpa harus menunggu lama.</p>
                  </div>
                </div>

                {{-- Garansi Revisi --}}
                <div class="flex flex-col md:flex-row-reverse items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" data-aos="fade-left">
                    <img src="/images/kserv_garansi.svg" alt="Garansi Revisi" class="h-auto object-contain" style="width: 300px; max-width: 100%;" loading="lazy" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-right">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Garansi Revisi</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Revisi gratis sampai kamu puas dengan hasilnya. Kepuasan klien adalah prioritas utama kami dalam menyelesaikan setiap baris kode.</p>
                  </div>
                </div>

                {{-- Harga Bersahabat --}}
                <div class="flex flex-col md:flex-row items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" data-aos="fade-right">
                    <img src="/images/kserv_harga.svg" alt="Harga Bersahabat" class="h-auto object-contain" style="width: 300px; max-width: 100%;" loading="lazy" />
                  </div>
                  <div class="w-full md:w-1/2 text-center md:text-left" data-aos="fade-left">
                    <h3 class="text-3xl md:text-4xl font-bold mb-4 text-slate-900 tracking-tight">Harga Bersahabat</h3>
                    <p class="text-lg text-slate-500 leading-relaxed">Kualitas premium skala korporasi tanpa bikin kantong jebol. Kami menawarkan solusi terbaik sesuai dengan budget usahamu.</p>
                  </div>
                </div>

                {{-- Respon Cepat --}}
                <div class="flex flex-col md:flex-row-reverse items-center gap-10 md:gap-20">
                  <div class="w-full md:w-1/2 flex justify-center mix-blend-multiply" data-aos="fade-left">
                    <img src="/images/kserv_respon.svg" alt="Respon Cepat" class="h-auto object-contain" style="width: 300px; max-width: 100%;" loading="lazy" />
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
                @if(strtolower($item->kategori) != 'portofolio' && strpos(strtolower($item->nama), 'landing page') === false)
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

        {{-- ── Landing Page Pricing Cards ── --}}
        <div class="mt-20" data-aos="fade-up">
            <div class="text-center mb-12">
                <h3 class="text-2xl md:text-3xl font-black text-slate-900">Paket Landing Page</h3>
                <p class="text-slate-500 mt-2">Pilih paket yang sesuai kebutuhanmu</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- STARTER --}}
                <div class="relative bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden">
                    <div class="p-8 flex flex-col h-full">

                        <h3 class="text-2xl font-black text-slate-900 mb-1">Starter</h3>
                        <p class="text-slate-500 text-sm mb-6 leading-relaxed">Cocok untuk bisnis yang baru mulai go-digital dengan budget terjangkau.</p>
                        <div class="mb-6">
                            <span class="text-2xl font-black text-slate-900">Rp 990.000</span>
                        </div>
                        <hr class="border-slate-100 mb-6">
                        <p class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Yang kamu dapatkan:</p>
                        <ul class="space-y-2.5 flex-grow mb-8 text-sm text-slate-600">
                            @foreach([
                                'Desain Responsif (Mobile-Friendly)',
                                'Hosting 1 Tahun',
                                'SSL (HTTPS)',
                                'Integrasi WhatsApp',
                                'Google Maps',
                                'Domain .web.id / .my.id',
                                'Basic SEO',
                                'Maintenance 7 Hari',
                            ] as $feat)
                            <li class="flex items-start gap-3">
                                <div class="mt-0.5 bg-slate-100 p-1 rounded-full shrink-0">
                                    <svg class="w-3.5 h-3.5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span>{{ $feat }}</span>
                            </li>
                            @endforeach
                        </ul>
                        <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20tertarik%20dengan%20paket%20Landing%20Page%20Starter" target="_blank"
                           class="w-full px-5 py-3.5 rounded-xl text-sm font-bold transition-all text-center flex items-center justify-center gap-2 bg-white border border-slate-200 hover:border-[#673de6] text-slate-800">
                            Konsultasi Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- PROFESSIONAL (Popular) --}}
                <div class="relative bg-white rounded-3xl border-transparent shadow-2xl transition-all duration-300 flex flex-col overflow-hidden -translate-y-2">
                    <div class="w-full py-3 text-center text-white text-xs font-black uppercase tracking-widest" style="background-color: #673de6;">⭐ Paling Dicari</div>
                    <div class="p-8 flex flex-col h-full">

                        <h3 class="text-2xl font-black text-slate-900 mb-1">Professional</h3>
                        <p class="text-slate-500 text-sm mb-6 leading-relaxed">Untuk bisnis yang serius tampil profesional dan siap bersaing di Google.</p>
                        <div class="mb-6">
                            <span class="text-2xl font-black text-slate-900">Rp 2.200.000</span>
                        </div>
                        <hr class="border-slate-100 mb-6">
                        <p class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Yang kamu dapatkan:</p>
                        <ul class="space-y-2.5 flex-grow mb-8 text-sm text-slate-600">
                            @foreach([
                                'Semua fitur Starter',
                                'Domain .com',
                                'Sitemap & Robots.txt',
                                'Open Graph (Share Preview)',
                                'Animasi Premium',
                                'Revisi Mayor 1x',
                                'Maintenance 14 Hari',
                            ] as $feat)
                            <li class="flex items-start gap-3">
                                <div class="mt-0.5 p-1 rounded-full shrink-0" style="background-color: rgba(103,61,230,0.1);">
                                    <svg class="w-3.5 h-3.5" style="color:#673de6;" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span>{{ $feat }}</span>
                            </li>
                            @endforeach
                        </ul>
                        <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20tertarik%20dengan%20paket%20Landing%20Page%20Professional" target="_blank"
                           class="w-full px-5 py-3.5 rounded-xl text-sm font-bold transition-all text-center flex items-center justify-center gap-2 text-white shadow-md hover:opacity-90"
                           style="background-color: #673de6;">
                            Konsultasi Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- PREMIUM --}}
                <div class="relative bg-white rounded-3xl border border-slate-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col overflow-hidden">
                    <div class="p-8 flex flex-col h-full">

                        <h3 class="text-2xl font-black text-slate-900 mb-1">Premium</h3>
                        <p class="text-slate-500 text-sm mb-6 leading-relaxed">Paket lengkap untuk bisnis yang ingin tampil maksimal dan dominan di pencarian Google.</p>
                        <div class="mb-6">
                            <span class="text-2xl font-black text-slate-900">Rp 2.800.000</span>
                        </div>
                        <hr class="border-slate-100 mb-6">
                        <p class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-4">Yang kamu dapatkan:</p>
                        <ul class="space-y-2.5 flex-grow mb-8 text-sm text-slate-600">
                            @foreach([
                                'Semua fitur Professional',
                                'Domain .com',
                                'Google Search Console',
                                'Google Analytics',
                                'Schema Markup',
                                'Copywriting Dasar',
                                'Revisi Mayor 2x',
                                'Maintenance 30 Hari',
                            ] as $feat)
                            <li class="flex items-start gap-3">
                                <div class="mt-0.5 bg-slate-100 p-1 rounded-full shrink-0">
                                    <svg class="w-3.5 h-3.5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span>{{ $feat }}</span>
                            </li>
                            @endforeach
                        </ul>
                        <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20tertarik%20dengan%20paket%20Landing%20Page%20Premium" target="_blank"
                           class="w-full px-5 py-3.5 rounded-xl text-sm font-bold transition-all text-center flex items-center justify-center gap-2 bg-white border border-slate-200 hover:border-[#673de6] text-slate-800">
                            Konsultasi Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    {{-- ═══════════════════════ PORTOFOLIO ═══════════════════════ --}}
    <section id="portofolio" class="max-w-7xl mx-auto px-6 md:px-8 py-24 border-t border-slate-100 bg-slate-50" data-aos="fade-up">
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Hasil Karya & Proyek</h2>
            <p class="text-slate-500 mt-2">Kumpulan bukti nyata kualitas pengerjaan K-Serv.</p>
        </div>

        @php
            $portofolios = $produks->filter(function($p) { return strtolower($p->kategori) == 'portofolio'; })->values();
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            @foreach($portofolios as $index => $item)
                @php
                    $pattern = $index % 4;
                    if ($pattern == 0) $colClass = 'md:col-span-8';
                    elseif ($pattern == 1) $colClass = 'md:col-span-4';
                    elseif ($pattern == 2) $colClass = 'md:col-span-4';
                    else $colClass = 'md:col-span-8';
                @endphp
                <div class="tilt-card group relative bg-slate-900 rounded-[24px] overflow-hidden shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-500 block {{ $colClass }} min-h-[320px] lg:min-h-[400px]" data-tilt data-tilt-gyroscope="false" data-tilt-max="5" data-tilt-glare="true" data-tilt-max-glare="0.3" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    {{-- Main link for the whole card --}}
                    <a href="{{ route('portofolio.show', $item->id) }}" class="absolute inset-0 z-10" aria-label="Lihat detail portofolio {{ $item->nama }}"></a>

                    {{-- Skeleton Wrapper --}}
                    <div class="absolute inset-0 bg-slate-800 animate-pulse z-0" id="skeleton-port-{{ $item->id }}"></div>
                    <img src="{{ $item->gambar ?: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80&w=600' }}"
                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 group-hover:opacity-50 transition-all duration-700 opacity-0 z-10"
                         onload="this.classList.remove('opacity-0'); document.getElementById('skeleton-port-{{ $item->id }}')?.remove();"
                         alt="{{ $item->nama }}" loading="lazy">

                    {{-- Always visible gradient and title --}}
                    <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent flex flex-col justify-end p-6 md:p-8 z-20 pointer-events-none">
                        <div class="translate-y-8 group-hover:translate-y-0 transition-transform duration-500 pointer-events-auto">
                            <h4 class="text-white font-bold text-2xl leading-tight">{{ $item->nama }}</h4>
                            
                            {{-- Hidden content that shows on hover --}}
                            <div class="grid grid-rows-[0fr] group-hover:grid-rows-[1fr] transition-all duration-500">
                                <div class="overflow-hidden">
                                    <p class="text-slate-300 text-sm mt-3 line-clamp-2 leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">{{ $item->deskripsi }}</p>
                                    
                                    <div class="mt-5 flex flex-wrap items-center gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200 pb-1">
                                        <a href="{{ route('portofolio.show', $item->id) }}" class="flex items-center gap-2 text-white text-sm font-bold bg-white/20 hover:bg-white/30 transition-colors w-fit px-4 py-2 rounded-full backdrop-blur-sm relative z-30">
                                            Lihat Detail
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7" /></svg>
                                        </a>
                                        
                                        @if($item->link && strpos($item->link, 'wa.me') === false)
                                        <a href="{{ $item->link }}" target="_blank" class="flex items-center gap-2 text-slate-900 text-sm font-bold bg-white hover:bg-slate-100 transition-colors w-fit px-4 py-2 rounded-full shadow-sm relative z-30">
                                            Kunjungi Website
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    {{-- ═══════════════════════ CTA & KONTAK SECTION ═══════════════════════ --}}
    <section id="kontak" class="py-24 bg-white transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-6 md:px-8">
            <div class="rounded-[3rem] p-8 md:p-16 relative overflow-hidden" style="background-color: #13111c;">
                
                {{-- Subtle dot pattern --}}
                <div class="absolute inset-0 pointer-events-none" style="background-image: radial-gradient(circle, rgba(103,61,230,0.15) 1px, transparent 1px); background-size: 40px 40px;"></div>

                <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl md:text-5xl font-black text-white mb-6 tracking-tight">Punya Ide? Kita Wujudkan Bareng.</h2>
                        
                        <p class="text-base mb-10 max-w-xl leading-relaxed" style="color: #94a3b8;">
                            K-Serv bisa bantu wujudkan website, sistem kasir, profil perusahaan, hingga aplikasi custom. Isi formulir di samping, dan tim kami akan segera menghubungi Anda.
                        </p>
                        
                        <div class="flex items-center gap-4">
                            <a href="https://wa.me/6287870402431" target="_blank"
                               class="inline-flex justify-center items-center gap-2 px-6 py-3 text-white font-bold rounded-full shadow-lg transition-all duration-300" style="background-color: #25d366;">
                                <i class="fab fa-whatsapp text-lg"></i> Fast Respon WA
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-8 shadow-xl">
                        <h3 class="text-2xl font-black text-slate-900 mb-6">Tinggalkan Pesan</h3>
                        
                        @if(session('success_contact'))
                        <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl flex gap-3 items-start">
                            <svg class="w-5 h-5 text-emerald-500 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            <div>
                                <h4 class="font-bold text-sm">Berhasil Terkirim!</h4>
                                <p class="text-xs mt-0.5">{{ session('success_contact') }}</p>
                            </div>
                        </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-sm font-bold text-slate-700 mb-1">Nama Lengkap</label>
                                <input type="text" name="name" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#673de6]/50 focus:border-[#673de6] transition-colors" placeholder="Cth: Budi Santoso">
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-bold text-slate-700 mb-1">Alamat Email / WA</label>
                                <input type="text" name="email" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#673de6]/50 focus:border-[#673de6] transition-colors" placeholder="Cth: budi@gmail.com / 08123456789">
                            </div>
                            <div class="mb-6">
                                <label class="block text-sm font-bold text-slate-700 mb-1">Pesan / Kebutuhan</label>
                                <textarea name="message" required rows="3" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#673de6]/50 focus:border-[#673de6] transition-colors resize-none" placeholder="Ceritakan singkat kebutuhan bisnis Anda..."></textarea>
                            </div>
                            <button type="submit" class="w-full px-6 py-4 text-white font-bold rounded-xl hover:-translate-y-1 shadow-md transition-all duration-300" style="background-color: #673de6;">
                                Kirim Pesan Sekarang
                            </button>
                        </form>
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

    {{-- ═══════════════════════ LATEST BLOGS ═══════════════════════ --}}
    @if(isset($latestBlogs) && $latestBlogs->count() > 0)
    <section class="py-24 bg-slate-50 border-t border-slate-100 overflow-hidden" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-3">Artikel & Insights Terbaru</h2>
                    <p class="text-slate-500 max-w-2xl">Tips, trik, dan wawasan seputar dunia digital untuk perkembangan bisnis Anda.</p>
                </div>
                <div class="hidden md:block">
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 font-bold text-indigo-600 hover:text-indigo-800 transition">
                        Lihat Semua
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Horizontal Swipeable Container (Carousel) --}}
            <div class="flex overflow-x-auto snap-x snap-mandatory hide-scrollbar gap-6 pb-8 -mx-6 px-6 md:mx-0 md:px-0">
                @foreach($latestBlogs as $blog)
                <div class="snap-start shrink-0 w-[85vw] sm:w-[320px] md:w-[350px]">
                    <a href="{{ route('blog.show', $blog->slug) }}" class="group block bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 flex flex-col h-full">
                        <div class="relative h-48 overflow-hidden bg-slate-100 shrink-0">
                            @if($blog->image)
                                <div class="absolute inset-0 bg-slate-200 animate-pulse z-0" id="skeleton-blog-{{ $blog->id }}"></div>
                                <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-all duration-500 opacity-0 z-10" onload="this.classList.remove('opacity-0'); document.getElementById('skeleton-blog-{{ $blog->id }}')?.remove();" loading="lazy">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-400 font-medium">Artikel K-SERV</div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="text-xs font-bold text-slate-400 flex items-center gap-1.5 uppercase tracking-wider mb-3">
                                <svg class="w-4 h-4 text-[#673de6]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ $blog->created_at->format('d M Y') }}
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-[#673de6] transition-colors leading-snug line-clamp-2">{{ $blog->title }}</h3>
                            <p class="text-sm text-slate-500 line-clamp-2 mb-5 flex-grow leading-relaxed">
                                {{ Str::limit(strip_tags($blog->content), 80) }}
                            </p>
                            <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-50">
                                @if($blog->category)
                                    <span class="text-[11px] font-black text-slate-400 uppercase tracking-widest">{{ $blog->category }}</span>
                                @else
                                    <span></span>
                                @endif
                                <div class="flex items-center text-[#673de6] font-bold text-sm">
                                    Baca <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                {{-- Card Lihat Semua (Mobile only in carousel) --}}
                <div class="snap-start shrink-0 w-[85vw] sm:w-[320px] md:w-[350px] flex items-center justify-center p-4 md:hidden">
                    <a href="{{ route('blog.index') }}" class="flex flex-col items-center justify-center w-full h-full min-h-[300px] bg-indigo-50 hover:bg-indigo-100 rounded-3xl border-2 border-dashed border-indigo-200 transition-colors text-indigo-600 group">
                        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
                        <span class="font-bold text-lg">Lihat Semua Artikel</span>
                    </a>
                </div>
            </div>
            
            <style>
                /* Hide scrollbar for Chrome, Safari and Opera */
                .hide-scrollbar::-webkit-scrollbar {
                    display: none;
                }
                /* Hide scrollbar for IE, Edge and Firefox */
                .hide-scrollbar {
                    -ms-overflow-style: none;  /* IE and Edge */
                    scrollbar-width: none;  /* Firefox */
                }
            </style>
        </div>
    </section>
    @endif

    {{-- ═══════════════════════ FAQ ═══════════════════════ --}}
    <section id="faq" class="max-w-4xl mx-auto px-6 md:px-8 py-24 bg-white" data-aos="fade-up">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Sering Ditanyakan</h2>
            <p class="text-slate-500 mt-2">Punya pertanyaan? Mungkin jawabannya ada di bawah ini.</p>
        </div>
        
        <div class="space-y-4">
            @php
                $faqs = [
                    ['q' => 'Berapa lama pengerjaan website atau sistem?', 'a' => 'Biasanya memakan waktu 1-2 minggu untuk website, dan menyesuaikan untuk sistem custom tergantung tingkat kesulitannya.'],
                    ['q' => 'Apakah ada garansi revisi?', 'a' => 'Pasti! K-SERV memberikan garansi revisi desain sampai klien benar-benar puas sesuai dengan brief awal.'],
                    ['q' => 'Apakah biaya sudah termasuk domain dan hosting?', 'a' => 'Ya! Hampir semua paket pembuatan website di K-SERV sudah gratis domain (.com / .id dll) dan hosting super cepat selama 1 tahun pertama.'],
                    ['q' => 'Apakah saya akan dibantu mengelola website setelah selesai?', 'a' => 'Tentu saja. Kami memberikan dukungan teknis dan maintenance gratis selama 30 hari pertama, serta panduan cara menggunakan website.'],
                    ['q' => 'Apakah K-SERV bisa membuat aplikasi Android/iOS atau sistem kasir?', 'a' => 'Bisa banget. Selain website Company Profile, kami juga ahlinya membuat sistem custom, aplikasi kasir (POS), dan web ujian online.'],
                    ['q' => 'Apakah harga bisa disesuaikan dengan budget bisnis saya?', 'a' => 'Tentu. Kami paham setiap bisnis punya kebutuhan berbeda. Silakan konsultasikan budget Anda, dan kami akan berikan solusi teknis terbaik yang sesuai.'],
                ];
            @endphp
            
            @foreach($faqs as $index => $faq)
            <div x-data="{ open: false }" class="border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300" :class="open ? 'shadow-md border-indigo-200' : 'hover:border-slate-300'" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 bg-white text-left focus:outline-none">
                    <h4 class="font-bold text-slate-900 pr-4" :class="open ? 'text-[#673de6]' : ''">{{ $faq['q'] }}</h4>
                    <span class="shrink-0 text-slate-400 transition-transform duration-300" :class="open ? 'rotate-180 text-[#673de6]' : ''">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6 bg-white" style="display: none;">
                    <p class="text-slate-500 text-sm leading-relaxed border-t border-slate-100 pt-4">{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>



    {{-- ═══════════════════════ WHATSAPP FLOATING BUTTON ═══════════════════════ --}}
    <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20mau%20konsultasi%20nih!" 
       target="_blank" 
       id="wa-float"
       aria-label="Chat WhatsApp"
       style="position: fixed; bottom: 28px; right: 28px; z-index: 9999; display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; background-color: #25d366; border-radius: 50%; box-shadow: 0 4px 20px rgba(37,211,102,0.4); transition: transform 0.2s, box-shadow 0.2s; text-decoration: none;">
        {{-- Pulse ring --}}
        <span style="position: absolute; inset: 0; border-radius: 50%; background-color: #25d366; animation: waPulse 2s ease-out infinite; opacity: 0.6;"></span>
        {{-- WhatsApp icon --}}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" style="width: 30px; height: 30px; position: relative; z-index: 1;">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </a>

    <style>
        @keyframes waPulse {
            0% { transform: scale(1); opacity: 0.6; }
            70% { transform: scale(1.6); opacity: 0; }
            100% { transform: scale(1.6); opacity: 0; }
        }
        #wa-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 28px rgba(37,211,102,0.6);
        }
    </style>



@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>
@endpush

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LocalBusiness",
      "@id": "{{ url('/') }}#organization",
      "name": "K-SERV (KServ)",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/favicon.png') }}",
      "image": "{{ asset('images/hero_illustration.png') }}",
      "description": "Agensi developer di Tasikmalaya yang menyediakan jasa pembuatan website company profile, landing page promosi, aplikasi ujian online, dan sistem web custom profesional.",
      "telephone": "+6287870402431",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Singaparna",
        "addressRegion": "Tasikmalaya",
        "addressCountry": "ID"
      },
      "priceRange": "$$",
      "sameAs": [
        "https://www.instagram.com/k_serv.id"
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        @foreach($faqs as $index => $faq)
        {
          "@type": "Question",
          "name": "{{ $faq['q'] }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{{ $faq['a'] }}"
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
  ]
}
</script>
@endpush