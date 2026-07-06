@extends('layouts.app')

@section('content')
<div class="pt-32 pb-20 bg-slate-50 dark:bg-slate-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-6">Portofolio & Case Study</h1>
            <p class="text-lg text-slate-600 dark:text-slate-400">Kumpulan karya dan bukti nyata dari solusi digital yang telah kami bangun untuk memecahkan masalah klien kami.</p>
        </div>

        @if($portofolios->isEmpty())
            <div class="text-center py-20 bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-700">
                <p class="text-slate-500 dark:text-slate-400">Belum ada portofolio yang ditampilkan.</p>
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($portofolios as $porto)
                <a href="{{ route('portofolio.show', $porto->id) }}" class="group block bg-white dark:bg-slate-800 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 dark:border-slate-700">
                    <div class="relative h-64 overflow-hidden bg-slate-100 dark:bg-slate-700">
                        @if($porto->gambar)
                            <img src="{{ $porto->gambar }}" alt="{{ $porto->nama }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-400 font-medium">Visual Belum Tersedia</div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <div class="text-xs font-bold text-[#673de6] uppercase tracking-wider mb-2">Web Development</div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-[#673de6] transition-colors">{{ $porto->nama }}</h3>
                        <p class="text-sm text-slate-500 dark:text-slate-400 line-clamp-3 mb-6 leading-relaxed">{{ $porto->deskripsi }}</p>
                        
                        <div class="flex items-center text-[#673de6] font-bold text-sm">
                            Baca Case Study
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
