@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-slate-900 pt-32 pb-20 antialiased min-h-screen">
    <article class="max-w-4xl mx-auto px-6 md:px-8">
        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 mb-10 text-sm font-bold">
            <a href="{{ route('blog.index') }}" class="text-slate-400 hover:text-slate-900 dark:hover:text-white transition flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Blog
            </a>
        </div>

        {{-- Header --}}
        <header class="mb-14 text-center md:text-left">
            <div class="text-sm font-bold text-[#673de6] tracking-widest uppercase mb-4">{{ $blog->created_at->format('d F Y') }}</div>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white leading-tight mb-8">{{ $blog->title }}</h1>
            
            <div class="flex items-center justify-center md:justify-start gap-4 text-slate-600 dark:text-slate-400">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center font-bold text-lg text-[#673de6]">KN</div>
                    <div class="text-left">
                        <p class="font-bold text-slate-900 dark:text-white text-sm">Kevin Nurachman</p>
                        <p class="text-xs text-slate-500 uppercase tracking-wide">Web Developer</p>
                    </div>
                </div>
            </div>
        </header>

        {{-- Featured Image --}}
        @if($blog->image)
        <div class="rounded-[32px] overflow-hidden shadow-2xl shadow-slate-200/50 dark:shadow-none mb-16 aspect-video border border-slate-100 dark:border-slate-800">
            <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
        </div>
        @endif

        {{-- Content --}}
        <div class="prose prose-lg md:prose-xl prose-slate dark:prose-invert max-w-none prose-headings:font-black prose-a:text-[#673de6] prose-img:rounded-3xl prose-img:shadow-lg prose-img:border prose-img:border-slate-100 leading-relaxed">
            {!! $blog->content !!}
        </div>
        
        {{-- Share / Footer --}}
        <div class="mt-24 pt-10 border-t border-slate-100 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-6">
            <h4 class="font-bold text-slate-900 dark:text-white text-lg">Bagikan Insight Ini</h4>
            <div class="flex gap-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="w-12 h-12 rounded-full bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:text-white hover:bg-blue-600 flex items-center justify-center transition-colors border border-slate-200 dark:border-slate-700 shadow-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}" target="_blank" class="w-12 h-12 rounded-full bg-slate-50 dark:bg-slate-800 text-slate-600 dark:text-slate-400 hover:text-white hover:bg-blue-400 flex items-center justify-center transition-colors border border-slate-200 dark:border-slate-700 shadow-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                </a>
            </div>
        </div>
    </article>
</div>
@endsection
