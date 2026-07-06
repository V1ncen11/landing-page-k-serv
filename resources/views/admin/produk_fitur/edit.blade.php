@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Content Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="text-2xl font-bold text-slate-800">Edit Fitur Portofolio</h1>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.dashboard') }}" class="text-indigo-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li><a href="{{ route('admin.produk.index') }}" class="text-indigo-600 hover:underline">Produk</a></li>
            <li class="mx-2">/</li>
            <li><a href="{{ route('admin.produk.fitur.index', $produk->id) }}" class="text-indigo-600 hover:underline">Fitur</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Edit</li>
        </ol>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-lg shadow-sm border-t-4 border-t-amber-500 border-x border-b border-slate-200">
        <!-- Card Header -->
        <div class="px-6 py-4 border-b border-slate-200">
            <h3 class="text-lg font-bold text-slate-700">Untuk Portofolio: {{ $produk->nama }}</h3>
        </div>
        
        <!-- Card Body -->
        <div class="p-6">

        @if($errors->any())
        <div class="mb-5 p-4 bg-rose-50 border border-rose-200 rounded-xl">
            <p class="text-sm font-bold text-rose-600 mb-2">⚠️ Ada yang perlu diperbaiki:</p>
            <ul class="list-disc list-inside text-sm text-rose-500 space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.produk.fitur.update', [$produk->id, $fitur->id]) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Fitur</label>
                <input type="text" name="nama_fitur" value="{{ old('nama_fitur', $fitur->nama_fitur) }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Fitur</label>
                <textarea name="deskripsi_fitur" rows="4"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('deskripsi_fitur', $fitur->deskripsi_fitur) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">URL Gambar / Screenshot Fitur <span class="text-slate-400 font-normal">(opsional)</span></label>
                @if($fitur->gambar_fitur)
                    <div class="mb-3" id="current-image">
                        <p class="text-[10px] text-slate-400 mb-2 italic">Gambar saat ini:</p>
                        <img src="{{ $fitur->gambar_fitur }}" class="w-40 rounded-lg border border-slate-100">
                    </div>
                @endif
                <input type="url" name="gambar_fitur" value="{{ old('gambar_fitur', $fitur->gambar_fitur) }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="https://i.imgur.com/contoh.jpg"
                    id="gambar-input">
                <p class="text-[11px] text-slate-400 mt-2 italic">
                    💡 Upload gambar ke <a href="https://imgur.com/upload" target="_blank" class="text-indigo-500 font-bold hover:underline">Imgur</a>, lalu paste URL-nya di sini.
                </p>
                <div id="preview-box" class="hidden mt-3">
                    <p class="text-xs font-bold text-slate-500 mb-1">Preview gambar baru:</p>
                    <img id="preview-img" src="" class="w-full max-h-40 object-cover rounded-xl border border-slate-100">
                </div>
            </div>

            <div class="flex gap-4 pt-4 border-t border-slate-100 mt-6">
                <button type="submit" class="bg-amber-500 text-white px-6 py-2.5 rounded font-bold hover:bg-amber-600 transition">
                    Simpan Perubahan
                </button>
                <a href="{{ route('admin.produk.fitur.index', $produk->id) }}" class="px-6 py-2.5 bg-slate-100 rounded font-bold text-slate-600 hover:bg-slate-200 transition">
                    Batal
                </a>
            </div>
        </form>
        </div> <!-- End Card Body -->
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const gambarInput = document.getElementById('gambar-input');
        if (gambarInput) {
            gambarInput.addEventListener('input', function() {
                const url = this.value.trim();
                const previewBox = document.getElementById('preview-box');
                const previewImg = document.getElementById('preview-img');
                const currentImg = document.getElementById('current-image');
                
                if (url.startsWith('http')) {
                    previewImg.src = url;
                    previewBox.classList.remove('hidden');
                    if(currentImg) currentImg.style.opacity = '0.3';
                } else {
                    previewBox.classList.add('hidden');
                    if(currentImg) currentImg.style.opacity = '1';
                }
            });
        }
    });
</script>
@endsection
