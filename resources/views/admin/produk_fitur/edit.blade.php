@extends('layouts.admin')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">

        <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 bg-amber-50 rounded-xl flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Edit Fitur Portofolio</h2>
                <p class="text-sm text-slate-400 mt-0.5">Untuk Portofolio: <span class="font-bold text-slate-600">{{ $produk->nama }}</span></p>
            </div>
        </div>

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

            <div class="flex gap-4 pt-4">
                <button type="submit" class="flex-1 bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                    Update Fitur
                </button>
                <a href="{{ route('admin.produk.fitur.index', $produk->id) }}" class="px-6 py-3 border border-slate-200 rounded-xl font-bold text-slate-600 hover:bg-slate-50 transition text-center">
                    Batal
                </a>
            </div>
        </form>
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
