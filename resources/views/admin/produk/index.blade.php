@extends('layouts.admin')

@section('content')
<div>
    <!-- Content Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="text-2xl font-bold text-slate-800">Manajemen Produk</h1>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.dashboard') }}" class="text-indigo-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Produk</li>
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
    <div class="bg-white rounded-lg shadow-sm border-t-4 border-t-indigo-600 border-x border-b border-slate-200">
        <!-- Card Header -->
        <div class="px-4 py-3 border-b border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-4">
            <h3 class="text-lg font-bold text-slate-700">Daftar Jasa & Portofolio</h3>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.produk.create') }}" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white text-sm font-bold rounded hover:bg-indigo-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Jasa
                </a>
                <a href="{{ route('admin.produk.create', ['type' => 'portofolio']) }}" class="inline-flex items-center justify-center px-4 py-2 bg-purple-600 text-white text-sm font-bold rounded hover:bg-purple-700 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Portofolio
                </a>
            </div>
        </div>
        
        <!-- Card Body -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-100">
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">Informasi Produk</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-center">Kategori</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-center">Status</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($produks as $item)
                    <tr class="hover:bg-slate-50/80 transition-all {{ !$item->is_active ? 'opacity-50' : '' }}">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                @if($item->gambar)
                                    <img src="{{ $item->gambar }}" class="w-12 h-12 rounded-lg object-cover border border-slate-100" onerror="this.style.display='none'">
                                @else
                                    <div class="w-12 h-12 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                                <div>
                                    <div class="font-bold text-slate-800 text-base">{{ $item->nama }}</div>
                                    <div class="text-slate-400 text-sm mt-0.5">Rp {{ $item->harga }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <span class="px-4 py-1.5 rounded-full text-xs font-bold 
                                {{ strtolower($item->kategori) == 'portofolio' ? 'bg-purple-50 text-purple-600' : 
                                   (strtolower($item->kategori) == 'jasa' ? 'bg-amber-50 text-amber-600' : 'bg-indigo-50 text-indigo-600') }}">
                                {{ $item->kategori }}
                            </span>
                        </td>
                        <td class="px-8 py-6 text-center">
                            <form action="{{ route('admin.produk.toggle', $item->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-bold transition-all
                                    {{ $item->is_active ? 'bg-emerald-50 text-emerald-600 hover:bg-emerald-100' : 'bg-slate-100 text-slate-400 hover:bg-slate-200' }}">
                                    <span class="w-2 h-2 rounded-full {{ $item->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                    {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex justify-end items-center gap-5">
                                @if(strtolower($item->kategori) == 'portofolio')
                                <a href="{{ route('admin.produk.fitur.index', $item->id) }}" class="flex items-center text-sm font-bold text-emerald-600 hover:text-emerald-800 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                    </svg>
                                    Fitur
                                </a>
                                @endif
                                <a href="{{ route('admin.produk.edit', $item->id) }}" class="flex items-center text-sm font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus {{ $item->nama }}, Bro?')">
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <p class="font-bold">Belum ada produk</p>
                                <p class="text-sm">Tambah produk pertamamu sekarang!</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Pagination --}}
    @if($produks->hasPages())
    <div class="mt-6">
        {{ $produks->links() }}
    </div>
    @endif
</div>
@endsection