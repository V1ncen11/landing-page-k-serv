@extends('layouts.admin')

@section('content')
<div>
    <!-- Content Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Manajemen Blog</h1>
            <p class="text-slate-500 text-sm mt-1">Kelola artikel SEO dan insight untuk website K-SERV.</p>
        </div>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.dashboard') }}" class="text-indigo-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Blog</li>
        </ol>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 text-emerald-700 rounded border border-emerald-200 flex items-center shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            {{ session('success') }}
        </div>
    @endif

    <!-- Card -->
    <div class="bg-white rounded-lg shadow-sm border-t-4 border-t-[#673de6] border-x border-b border-slate-200">
        <!-- Card Header -->
        <div class="px-4 py-3 border-b border-slate-200 flex flex-col md:flex-row justify-between items-center gap-4">
            <h3 class="text-lg font-bold text-slate-700 w-full md:w-auto">Daftar Artikel</h3>
            
            <div class="flex flex-col sm:flex-row w-full md:w-auto gap-3">
                <form action="{{ route('admin.blog.index') }}" method="GET" class="w-full sm:w-64">
                    <div class="relative w-full">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel..." 
                            class="w-full text-sm rounded border border-slate-300 focus:border-[#673de6] focus:ring-[#673de6] py-2 pl-3 pr-10">
                        @if(request('search'))
                            <a href="{{ route('admin.blog.index') }}" class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-rose-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                            </a>
                        @else
                            <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-[#673de6]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                            </button>
                        @endif
                    </div>
                </form>

                <a href="{{ route('admin.blog.create') }}" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white text-sm font-bold rounded hover:bg-indigo-700 transition shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tulis Artikel Baru
                </a>
            </div>
        </div>
        
        <!-- Card Body -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-100">
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">Judul Artikel</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-center">Status</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-center">Tanggal</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($blogs as $item)
                    <tr class="hover:bg-slate-50/80 transition-all {{ !$item->is_published ? 'opacity-70' : '' }}">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                @if($item->image)
                                    <img src="{{ $item->image }}" class="w-16 h-12 rounded-lg object-cover border border-slate-100" onerror="this.style.display='none'">
                                @else
                                    <div class="w-16 h-12 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                        </svg>
                                    </div>
                                @endif
                                <div>
                                    <div class="font-bold text-slate-800 text-base line-clamp-1">{{ $item->title }}</div>
                                    <div class="text-slate-400 text-xs mt-1">/blog/{{ $item->slug }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="px-4 py-1.5 rounded-full text-xs font-bold 
                                {{ $item->is_published ? 'bg-emerald-50 text-emerald-600' : 'bg-amber-50 text-amber-600' }}">
                                {{ $item->is_published ? 'Published' : 'Draft' }}
                            </span>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="text-sm font-medium text-slate-500">
                                {{ $item->created_at->format('d M Y') }}
                            </span>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex justify-end items-center gap-5">
                                <a href="{{ route('blog.show', $item->slug) }}" target="_blank" class="flex items-center text-sm font-bold text-slate-400 hover:text-slate-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    Lihat
                                </a>
                                <a href="{{ route('admin.blog.edit', $item->id) }}" class="flex items-center text-sm font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('admin.blog.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus artikel ini?')">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="flex items-center text-sm font-bold text-rose-500 hover:text-rose-700 transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-8 py-16 text-center text-slate-400">
                            <div class="flex flex-col items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                                <p class="font-bold">Belum ada Artikel</p>
                                <p class="text-sm">Tulis artikel SEO pertamamu sekarang!</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Pagination --}}
    @if($blogs->hasPages())
    <div class="mt-6">
        {{ $blogs->links() }}
    </div>
    @endif
</div>
@endsection
