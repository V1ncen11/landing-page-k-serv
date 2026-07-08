@extends('layouts.admin')

@section('content')
<div>
    <!-- Content Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="#" class="text-indigo-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Dashboard</li>
        </ol>
    </div>

    <!-- Small Boxes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 mb-10">
        
        <!-- Small Box: Total Jasa -->
        <div class="bg-indigo-500 rounded-lg text-white relative overflow-hidden shadow-sm">
            <div class="p-5">
                <h3 class="text-4xl font-bold mb-2">{{ $totalJasa }}</h3>
                <p class="text-indigo-100 text-lg">Layanan Jasa</p>
            </div>
            <div class="absolute -right-4 -bottom-4 text-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <a href="{{ route('admin.produk.index') }}" class="block w-full text-center py-1.5 bg-black/10 hover:bg-black/20 text-indigo-100 hover:text-white transition-colors text-sm relative z-10 flex items-center justify-center gap-1">
                More info
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>

        <!-- Small Box: Total Portofolio -->
        <div class="bg-purple-600 rounded-lg text-white relative overflow-hidden shadow-sm">
            <div class="p-5">
                <h3 class="text-4xl font-bold mb-2">{{ $totalPortofolio }}</h3>
                <p class="text-purple-100 text-lg">Portofolio</p>
            </div>
            <div class="absolute -right-4 -bottom-4 text-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <a href="{{ route('admin.produk.index') }}" class="block w-full text-center py-1.5 bg-black/10 hover:bg-black/20 text-purple-100 hover:text-white transition-colors text-sm relative z-10 flex items-center justify-center gap-1">
                More info
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>

        <!-- Small Box: Total Blog -->
        <div class="bg-amber-500 rounded-lg text-white relative overflow-hidden shadow-sm">
            <div class="p-5">
                <h3 class="text-4xl font-bold mb-2">{{ $totalBlog }}</h3>
                <p class="text-amber-100 text-lg">Artikel Blog</p>
            </div>
            <div class="absolute -right-4 -bottom-4 text-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
            </div>
            <a href="{{ route('admin.blog.index') }}" class="block w-full text-center py-1.5 bg-black/10 hover:bg-black/20 text-amber-100 hover:text-white transition-colors text-sm relative z-10 flex items-center justify-center gap-1">
                More info
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>

        <!-- Small Box: Total Visitors (GA4) -->
        <div class="bg-emerald-500 rounded-lg text-white relative overflow-hidden shadow-sm">
            <div class="p-5">
                <h3 class="text-4xl font-bold mb-2">{{ number_format($totalVisitors ?? 0, 0, ',', '.') }}</h3>
                <p class="text-emerald-100 text-lg">Pengunjung (7 Hari)</p>
            </div>
            <div class="absolute -right-4 -bottom-4 text-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <a href="https://analytics.google.com/" target="_blank" class="block w-full text-center py-1.5 bg-black/10 hover:bg-black/20 text-emerald-100 hover:text-white transition-colors text-sm relative z-10 flex items-center justify-center gap-1">
                Buka Analytics
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>
        
        <!-- Small Box: Total Page Views (GA4) -->
        <div class="bg-rose-500 rounded-lg text-white relative overflow-hidden shadow-sm">
            <div class="p-5">
                <h3 class="text-4xl font-bold mb-2">{{ number_format($totalViews ?? 0, 0, ',', '.') }}</h3>
                <p class="text-rose-100 text-lg">Page Views (7 Hari)</p>
            </div>
            <div class="absolute -right-4 -bottom-4 text-white/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </div>
            <a href="https://analytics.google.com/" target="_blank" class="block w-full text-center py-1.5 bg-black/10 hover:bg-black/20 text-rose-100 hover:text-white transition-colors text-sm relative z-10 flex items-center justify-center gap-1">
                Buka Analytics
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
