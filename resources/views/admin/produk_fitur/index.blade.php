@extends('layouts.admin')

@section('content')
<div>
    <!-- Content Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Kelola Fitur Portofolio</h1>
            <p class="text-slate-500 text-sm mt-1">Portofolio: <span class="font-bold text-slate-700">{{ $produk->nama }}</span></p>
        </div>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.dashboard') }}" class="text-indigo-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li><a href="{{ route('admin.produk.index') }}" class="text-indigo-600 hover:underline">Produk</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Fitur</li>
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
        <div class="px-4 py-3 border-b border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-4">
            <h3 class="text-lg font-bold text-slate-700">Daftar Fitur</h3>
            <a href="{{ route('admin.produk.fitur.create', $produk->id) }}" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white text-sm font-bold rounded hover:bg-indigo-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Fitur
            </a>
        </div>
        
        <!-- Card Body -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-100">
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">Fitur</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider">Gambar</th>
                        <th class="px-8 py-5 text-sm font-bold text-slate-400 uppercase tracking-wider text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($fiturs as $fitur)
                    <tr class="hover:bg-slate-50/80 transition-all">
                        <td class="px-8 py-6">
                            <div class="font-bold text-slate-800 text-base mb-1">{{ $fitur->nama_fitur }}</div>
                            <div class="text-slate-500 text-sm line-clamp-2 w-80">{{ $fitur->deskripsi_fitur }}</div>
                        </td>
                        <td class="px-8 py-6">
                            @if($fitur->gambar_fitur)
                                <img src="{{ $fitur->gambar_fitur }}" class="w-24 h-16 rounded-lg object-cover border border-slate-100">
                            @else
                                <span class="text-xs font-bold text-slate-400 bg-slate-100 px-3 py-1 rounded-md">No Image</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right">
                            <div class="flex justify-end items-center gap-5">
                                <a href="{{ route('admin.produk.fitur.edit', [$produk->id, $fitur->id]) }}" class="flex items-center text-sm font-bold text-indigo-600 hover:text-indigo-800 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('admin.produk.fitur.destroy', [$produk->id, $fitur->id]) }}" method="POST" onsubmit="return confirm('Yakin mau hapus fitur ini?')">
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
                        <td colspan="3" class="px-8 py-16 text-center text-slate-400">
                            <div class="flex flex-col items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <p class="font-bold">Belum ada fitur ditambahkan</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
