@extends('layouts.app')

@section('title', $portofolio->nama . ' | K-SERV Portofolio')
@section('meta_description', Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags($portofolio->deskripsi))), 150))
@if($portofolio->gambar)
    @section('og_image', filter_var($portofolio->gambar, FILTER_VALIDATE_URL) ? $portofolio->gambar : asset($portofolio->gambar))
@endif
@section('content')
<div class="bg-white text-slate-900 antialiased pt-28">

    {{-- HEADER SECTION --}}
    <header class="relative max-w-7xl mx-auto px-6 md:px-8 pb-16">
        <div class="flex items-center gap-2 mb-6 text-sm font-bold">
            <a href="{{ url('/#portofolio') }}" class="text-slate-400 hover:text-slate-900 transition flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Beranda
            </a>
            <span class="text-slate-300">/</span>
            <span class="text-slate-600">Portofolio</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <span class="inline-block px-3 py-1 text-xs font-bold text-slate-700 bg-slate-100 rounded-md border border-slate-200 mb-4 uppercase tracking-wider">
                    Sistem Selesai
                </span>
                <h1 class="text-4xl md:text-5xl font-black mb-6 leading-tight text-slate-900">
                    {{ $portofolio->nama }}
                </h1>
                <p class="text-lg text-slate-500 leading-relaxed mb-8">
                    {{ $portofolio->deskripsi }}
                </p>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="https://wa.me/6287870402431?text=Halo%20K-Serv,%20saya%20tertarik%20bikin%20sistem%20mirip%20{{ urlencode($portofolio->nama) }}" target="_blank" class="px-8 py-4 bg-slate-900 text-white font-bold rounded-2xl hover:bg-black hover:scale-105 transition-all shadow-xl shadow-slate-200 text-center flex items-center gap-2">
                        Pesan Sistem Serupa
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    
                    @if($portofolio->link && strpos($portofolio->link, 'wa.me') === false)
                    <a href="{{ $portofolio->link }}" target="_blank" class="px-8 py-4 bg-white text-slate-900 border border-slate-200 font-bold rounded-2xl hover:bg-slate-50 hover:scale-105 transition-all shadow-sm text-center flex items-center gap-2">
                        Kunjungi Website
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                    @endif
                </div>
            </div>

            <div class="relative rounded-[24px] overflow-hidden shadow-2xl shadow-slate-200/50 border border-slate-100 aspect-video group" data-aos="fade-up">
                <img src="{{ $portofolio->gambar ?: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&q=80&w=800' }}" alt="{{ $portofolio->nama }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 rounded-[24px]">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent rounded-[24px]"></div>
            </div>
        </div>
    </header>

    {{-- CASE STUDY SECTION --}}
    @if($portofolio->masalah || $portofolio->solusi || $portofolio->hasil || $portofolio->teknologi)
    <section class="border-t border-slate-100 bg-white py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4">Studi Kasus</h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg">Bagaimana kami merancang solusi digital untuk memecahkan masalah klien dari awal hingga akhir.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
                @if($portofolio->masalah)
                <div class="bg-slate-50 rounded-3xl p-8 md:p-10 border border-slate-100 relative group hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 bg-red-100 text-red-500 rounded-2xl flex items-center justify-center mb-6 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Tantangan & Masalah</h3>
                    <div class="prose prose-slate text-slate-600 leading-relaxed text-left">
                        {!! nl2br(e($portofolio->masalah)) !!}
                    </div>
                </div>
                @endif

                @if($portofolio->solusi)
                <div class="bg-slate-50 rounded-3xl p-8 md:p-10 border border-slate-100 relative group hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-500 rounded-2xl flex items-center justify-center mb-6 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Solusi yang Diberikan</h3>
                    <div class="prose prose-slate text-slate-600 leading-relaxed text-left">
                        {!! nl2br(e($portofolio->solusi)) !!}
                    </div>
                </div>
                @endif
                
                @if($portofolio->teknologi)
                <div class="bg-slate-50 rounded-3xl p-8 md:p-10 border border-slate-100 relative group hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-100 text-blue-500 rounded-2xl flex items-center justify-center mb-6 shadow-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Teknologi yang Dipakai</h3>
                    <div class="prose prose-slate text-slate-600 leading-relaxed text-left">
                        {!! nl2br(e($portofolio->teknologi)) !!}
                    </div>
                </div>
                @endif

                @if($portofolio->hasil)
                <div class="bg-gradient-to-br from-[#673de6] to-purple-600 rounded-3xl p-8 md:p-10 relative group hover:shadow-2xl hover:shadow-[#673de6]/30 hover:-translate-y-1 transition-all duration-300 text-white">
                    <div class="w-12 h-12 bg-white/20 text-white rounded-2xl flex items-center justify-center mb-6 backdrop-blur-sm">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Hasil & Dampak</h3>
                    <div class="prose prose-invert text-white/90 leading-relaxed text-left">
                        {!! nl2br(e($portofolio->hasil)) !!}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    @endif

    {{-- SPESIFIKASI / FITUR UMUM --}}
    @if($portofolio->spesifikasi)
    <section class="border-t border-slate-100 bg-slate-50 py-16">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <h2 class="text-2xl font-bold text-slate-900 mb-8 text-center">Spesifikasi Proyek</h2>
            <div class="flex flex-wrap justify-center gap-4 max-w-4xl mx-auto">
                @php
                    $specs = explode("\n", str_replace("\r", "", $portofolio->spesifikasi));
                @endphp
                @foreach($specs as $spec)
                    @if(trim($spec))
                    <div class="bg-white px-5 py-3 rounded-xl border border-slate-200 shadow-sm flex items-center gap-3" data-aos="zoom-in">
                        <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-500 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <span class="font-bold text-slate-700 text-sm">{{ trim($spec) }}</span>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- DETAIL FITUR --}}
    <section class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 py-24 relative overflow-hidden">
        {{-- Background aksen tipis di pinggiran layarnya --}}
        <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-slate-300/40 via-slate-200/10 to-transparent"></div>
        <div class="absolute top-0 right-0 w-1.5 h-full bg-gradient-to-b from-slate-300/40 via-slate-200/10 to-transparent"></div>

        <div class="text-center mb-24" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">Eksplorasi Fitur</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Dokumentasi antarmuka dan penjelasan detail untuk setiap modul sistem pada {{ $portofolio->nama }}.</p>
        </div>

        <div class="relative z-10">
            {{-- Garis Tengah Timeline (Hanya Desktop) --}}
            <div class="hidden md:block absolute left-1/2 top-4 bottom-4 w-0.5 bg-gradient-to-b from-slate-200 via-slate-300 to-slate-100 transform -translate-x-1/2"></div>

            <div class="space-y-16 md:space-y-0">
                @forelse($fiturs as $index => $fitur)
                <div class="relative group/timeline" data-aos="fade-up">
                    <div class="grid grid-cols-1 md:grid-cols-11 gap-8 md:gap-0 items-center md:py-16">
                        
                        {{-- Gambar Screenshot --}}
                        <div class="md:col-span-5 {{ $index % 2 == 1 ? 'md:order-3 md:pl-10' : 'md:order-1 md:pr-10' }}">
                            <div class="bg-white rounded-2xl shadow-lg shadow-slate-200/60 border border-slate-200 overflow-hidden group-hover/timeline:-translate-y-2 group-hover/timeline:shadow-2xl group-hover/timeline:shadow-blue-200/50 transition-all duration-500 relative">
                                {{-- Aksen abu di sisi gambar --}}
                                <div class="absolute top-0 bottom-0 {{ $index % 2 == 1 ? 'right-0' : 'left-0' }} w-1 bg-gradient-to-b from-slate-300 to-slate-400 z-20"></div>
                                
                                {{-- Mac style header --}}
                                <div class="bg-slate-50/90 px-4 py-2.5 flex items-center gap-2 border-b border-slate-200/80 backdrop-blur-sm relative z-10 {{ $index % 2 == 1 ? 'flex-row-reverse pr-5' : 'pl-5' }}">
                                    <div class="w-2.5 h-2.5 rounded-full bg-rose-400"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-amber-400"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-emerald-400"></div>
                                </div>
                                
                                @if($fitur->gambar_fitur)
                                    <div class="w-full bg-slate-50 relative z-0 p-3 md:p-5 flex justify-center">
                                        <img src="{{ $fitur->gambar_fitur }}" alt="{{ $fitur->nama_fitur }}" class="max-w-full max-h-[400px] w-auto h-auto object-contain rounded-xl shadow-md border border-slate-200">
                                    </div>
                                @else
                                    <div class="w-full aspect-video bg-slate-50 flex items-center justify-center text-slate-400 text-sm">
                                        Screenshot belum tersedia
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- Node Timeline (Titik Tengah) --}}
                        <div class="hidden md:flex md:col-span-1 justify-center relative md:order-2">
                            <div class="w-12 h-12 rounded-full bg-white border-4 border-slate-100 text-slate-700 font-black text-lg flex items-center justify-center relative z-10 shadow-lg shadow-slate-200/50 group-hover/timeline:scale-110 group-hover/timeline:border-slate-300 group-hover/timeline:bg-slate-900 group-hover/timeline:text-white transition-all duration-300">
                                {{ $index + 1 }}
                            </div>
                            {{-- Garis putus-putus ke konten --}}
                            <div class="absolute top-1/2 -translate-y-1/2 w-full h-px border-t-2 border-dashed border-slate-200 -z-10 group-hover/timeline:border-slate-400 transition-colors duration-500"></div>
                        </div>

                        {{-- Teks Penjelasan --}}
                        <div class="md:col-span-5 flex flex-col justify-center items-start text-left {{ $index % 2 == 1 ? 'md:order-1 md:pr-10' : 'md:order-3 md:pl-10' }}">
                            
                            {{-- Angka untuk Mobile Only --}}
                            <div class="md:hidden inline-flex items-center justify-center w-8 h-8 rounded-lg bg-slate-100 text-slate-700 font-bold text-sm mb-4 border border-slate-200">
                                {{ sprintf('%02d', $index + 1) }}
                            </div>


                            
                            <h3 class="text-2xl font-bold text-slate-900 mb-4 leading-snug group-hover/timeline:text-slate-600 transition-colors duration-300">{{ $fitur->nama_fitur }}</h3>
                            <div class="text-slate-600 text-base leading-relaxed prose prose-sm prose-slate max-w-none text-left">
                                {!! nl2br(e($fitur->deskripsi_fitur)) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @empty
            <div class="text-center py-20 bg-slate-50 rounded-3xl border border-slate-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-slate-300 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <h3 class="text-xl font-bold text-slate-700">Fitur Belum Diupload</h3>
                <p class="text-slate-500 mt-2">Detail fitur untuk sistem ini akan segera ditambahkan.</p>
            </div>
            @endforelse
        </div>
    </section>

    {{-- CTA --}}
    <section class="max-w-5xl mx-auto px-6 md:px-8 py-20 mb-10">
        <div class="bg-slate-900 rounded-[32px] p-10 md:p-16 text-center relative overflow-hidden shadow-2xl">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:3rem_3rem]"></div>
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[200px] bg-white/10 blur-[100px] rounded-full"></div>
            
            <div class="relative z-10">
                <h3 class="text-3xl md:text-4xl font-black text-white mb-6">Butuh sistem yang mirip?</h3>
                <p class="text-slate-400 mb-10 max-w-2xl mx-auto text-lg">Kamu bisa request modifikasi fitur sesuai kebutuhan bisnismu. Yuk diskusi dulu secara gratis!</p>
                <a href="https://wa.me/6287870402431?text=Halo%20K-Serv!%20Saya%20tertarik%20dengan%20portofolio%20{{ urlencode($portofolio->nama) }}%20tapi%20butuh%20beberapa%20penyesuaian." target="_blank"
                    class="inline-flex items-center gap-2 px-10 py-4 bg-white hover:bg-slate-200 text-slate-900 font-black rounded-2xl hover:scale-105 transition-all shadow-xl shadow-white/10">
                    Konsultasi via WhatsApp
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CreativeWork",
      "name": "{{ $portofolio->nama }}",
      "image": [
        "{{ $portofolio->gambar ? (filter_var($portofolio->gambar, FILTER_VALIDATE_URL) ? $portofolio->gambar : asset($portofolio->gambar)) : asset('images/hero_illustration.png') }}"
      ],
      "description": "{{ $portofolio->deskripsi }}",
      "author": {
        "@type": "Organization",
        "name": "K-SERV (KServ)",
        "url": "{{ url('/') }}"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Beranda",
          "item": "{{ url('/') }}"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Portofolio",
          "item": "{{ route('portofolio.index') }}"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "{{ $portofolio->nama }}"
        }
      ]
    }
  ]
}
</script>
@endpush
