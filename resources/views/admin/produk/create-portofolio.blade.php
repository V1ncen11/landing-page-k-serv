@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">

        {{-- Header --}}
        <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 bg-purple-50 rounded-xl flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Tambah Portofolio</h2>
                <p class="text-sm text-slate-400 mt-0.5">Showcase hasil karya dan proyek yang pernah dikerjain.</p>
            </div>
        </div>

        <form action="{{ route('admin.produk.store') }}" method="POST" class="space-y-5">
            @csrf

            {{-- Hidden fields - otomatis untuk portofolio --}}
            <input type="hidden" name="kategori" value="Portofolio">
            <input type="hidden" name="harga" value="-">
            <input type="hidden" name="link" value="https://wa.me/6287870402431">

            {{-- Nama Proyek --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Proyek</label>
                <input type="text" name="nama"
                    class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500"
                    placeholder="Contoh: Desain PPT Seminar Nasional" required>
            </div>

            {{-- URL Gambar --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">URL Gambar Portofolio</label>
                <input type="url" name="gambar"
                    class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500"
                    placeholder="https://i.imgur.com/contoh.jpg">
                <p class="text-[11px] text-slate-400 mt-2 italic">
                    💡 Upload gambar dulu ke
                    <a href="https://imgur.com/upload" target="_blank" class="text-purple-500 font-bold hover:underline">Imgur</a>,
                    lalu copy linknya dan paste di sini.
                </p>
            </div>

            {{-- Preview gambar real-time --}}
            <div id="preview-box" class="hidden">
                <p class="text-xs font-bold text-slate-500 mb-2">Preview:</p>
                <img id="preview-img" src="" alt="Preview" class="w-full max-h-48 object-cover rounded-xl border border-slate-100">
            </div>

            {{-- Deskripsi --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Proyek</label>
                <textarea name="deskripsi" rows="4"
                    class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500"
                    placeholder="Ceritain proyek ini singkat: klien siapa, apa yang dikerjain, tools yang dipake..." required></textarea>
            </div>

            {{-- Tombol --}}
            <div class="flex gap-4 pt-4">
                <button type="submit" class="flex-1 bg-purple-600 text-white py-3 rounded-xl font-bold hover:bg-purple-700 transition shadow-lg shadow-purple-100">
                    Simpan Portofolio
                </button>
                <a href="{{ route('admin.produk.index') }}" class="px-6 py-3 border border-slate-200 rounded-xl font-bold text-slate-600 hover:bg-slate-50 transition text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

{{-- Preview live URL gambar --}}
<script>
document.querySelector('input[name="gambar"]').addEventListener('input', function() {
    const url = this.value.trim();
    const previewBox = document.getElementById('preview-box');
    const previewImg = document.getElementById('preview-img');
    if (url.startsWith('http')) {
        previewImg.src = url;
        previewBox.classList.remove('hidden');
    } else {
        previewBox.classList.add('hidden');
    }
});
</script>
@endsection
