@extends('layouts.app')

@section('content')
<main class="max-w-7xl mx-auto px-6 py-12">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Manajemen Produk</h1>
            <p class="text-slate-500 mt-1">Kelola katalog jasa dan produk digital kamu di sini.</p>
        </div>
        
        <div class="flex items-center gap-3">
            <a href="{{ url('/') }}" class="inline-flex items-center px-6 py-3 bg-white border border-slate-200 text-slate-600 font-bold rounded-2xl hover:bg-slate-50 transition-all shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Lihat Web
            </a>

            <a href="{{ route('admin.produk.create') }}" class="inline-flex items-center justify-center px-5 py-3 bg-indigo-600 text-white font-bold rounded-2xl hover:bg-indigo-700 hover:scale-105 transition-all shadow-lg shadow-indigo-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Jasa / Template
            </a>

            <a href="{{ route('admin.produk.create', ['type' => 'portofolio']) }}" class="inline-flex items-center justify-center px-5 py-3 bg-purple-600 text-grey font-bold rounded-2xl hover:bg-purple-700 hover:scale-105 transition-all shadow-lg shadow-purple-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Tambah Portofolio
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 text-emerald-700 rounded-xl border border-emerald-100 flex items-center shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-[24px] shadow-sm border border-slate-200/60 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-100">
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">Informasi Produk</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-center">Kategori</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @foreach($produks as $item)
                    <tr class="hover:bg-slate-50/80 transition-all">
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
                                    <div class="font-bold text-slate-800 text-lg">{{ $item->nama }}</div>
                                    <div class="text-slate-400 text-sm mt-1">Rp {{ $item->harga }}</div>
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
                        <td class="px-8 py-6 text-right">
                            <div class="flex justify-end items-center gap-6">
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection