@extends('layouts.app')

@section('content')
<div class="pt-32 pb-20 bg-slate-50 dark:bg-slate-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-6">Blog & Insights</h1>
            <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Tips, trik, dan wawasan seputar dunia digital, pembuatan website, dan strategi pengembangan bisnis online untuk tingkatkan otoritas bisnis Anda.</p>
        </div>

        {{-- Search Form --}}
        <div class="max-w-2xl mx-auto mb-16">
            <form action="{{ route('blog.index') }}" method="GET" class="relative flex items-center">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="text" name="search" value="{{ request('search') }}" 
                    class="w-full pl-12 pr-24 py-4 rounded-full border border-slate-300 focus:border-[#673de6] focus:ring-[#673de6] text-slate-700 shadow-sm transition-all"
                    placeholder="Cari judul artikel atau kategori...">
                @if(request('search'))
                    <a href="{{ route('blog.index') }}" class="absolute right-4 flex items-center text-slate-400 hover:text-rose-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </a>
                @else
                    <button type="submit" class="absolute right-2 top-2 bottom-2 bg-[#673de6] text-white px-6 rounded-full font-bold hover:bg-purple-700 transition">
                        Cari
                    </button>
                @endif
            </form>
        </div>

        @if($blogs->isEmpty())
            <div class="text-center py-20 bg-white dark:bg-slate-800 rounded-3xl border border-slate-100 dark:border-slate-700 shadow-sm">
                @if(request('search'))
                    <p class="text-slate-500 dark:text-slate-400 text-lg mb-4">Tidak ada artikel yang cocok dengan pencarian "<span class="font-bold text-slate-700">{{ request('search') }}</span>".</p>
                    <a href="{{ route('blog.index') }}" class="inline-block px-6 py-2 bg-slate-100 text-slate-600 font-bold rounded-lg hover:bg-slate-200 transition">Lihat Semua Artikel</a>
                @else
                    <p class="text-slate-500 dark:text-slate-400 text-lg">Belum ada artikel yang dipublikasikan saat ini. Nantikan tulisan bermanfaat dari kami segera!</p>
                @endif
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($blogs as $blog)
                <a href="{{ route('blog.show', $blog->slug) }}" class="group block bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100 dark:border-slate-700 flex flex-col h-full">
                    <div class="relative h-48 overflow-hidden bg-slate-100 dark:bg-slate-700 shrink-0">
                        @if($blog->image)
                            <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-400 font-medium">Artikel K-SERV</div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <div class="text-xs font-bold text-slate-500 dark:text-slate-400 flex items-center gap-1.5 uppercase tracking-wider">
                                <svg class="w-4 h-4 text-[#673de6]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ $blog->created_at->format('d M Y') }}
                            </div>
                            @if($blog->category)
                                <span class="text-[10px] font-bold bg-slate-100 text-[#673de6] px-2 py-1 rounded-md uppercase tracking-widest">{{ $blog->category }}</span>
                            @endif
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-[#673de6] transition-colors leading-snug line-clamp-3">{{ $blog->title }}</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2 mb-5 flex-grow leading-relaxed">
                            {{ Str::limit(strip_tags($blog->content), 100) }}
                        </p>
                        
                        <div class="flex items-center text-[#673de6] font-bold text-sm mt-auto">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            
            <div class="flex justify-center mt-12">
                {{ $blogs->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
