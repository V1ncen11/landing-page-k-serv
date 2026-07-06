@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Content Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="text-2xl font-bold text-slate-800">Tambah Portofolio</h1>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.dashboard') }}" class="text-indigo-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li><a href="{{ route('admin.produk.index') }}" class="text-indigo-600 hover:underline">Produk</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Tambah Portofolio</li>
        </ol>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-lg shadow-sm border-t-4 border-t-purple-600 border-x border-b border-slate-200">
        <!-- Card Header -->
        <div class="px-6 py-4 border-b border-slate-200">
            <h3 class="text-lg font-bold text-slate-700">Form Portofolio Baru</h3>
        </div>
        
        <!-- Card Body -->
        <div class="p-6">

        <form action="{{ route('admin.produk.store') }}" method="POST" class="space-y-5">
            @csrf

            {{-- Hidden fields - otomatis untuk portofolio --}}
            <input type="hidden" name="kategori" value="Portofolio">
            <input type="hidden" name="harga" value="-">

            {{-- Link Website --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Link Website Portofolio <span class="font-normal text-slate-400">(opsional)</span></label>
                <input type="url" name="link"
                    class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500"
                    placeholder="https://contoh-website.com">
                <p class="text-[11px] text-slate-400 mt-2 italic">Masukkan link website portofolio agar bisa dikunjungi. Kosongkan jika tidak ada.</p>
            </div>

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
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Singkat</label>
                <textarea name="deskripsi" rows="2"
                    class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500"
                    placeholder="Ceritain proyek ini singkat: klien siapa, apa yang dikerjain..." required></textarea>
            </div>

            {{-- Case Study Section --}}
            <div class="mt-8 mb-4 border-t border-slate-100 pt-6">
                <h3 class="text-lg font-bold text-slate-900 mb-2">Data Case Study (Opsional)</h3>
                <p class="text-xs text-slate-500 mb-6">Isi bagian ini untuk menampilkan studi kasus di halaman detail portofolio.</p>

                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Tantangan & Masalah</label>
                        <textarea name="masalah" rows="3" class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500" placeholder="Apa masalah yang dihadapi klien?"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Solusi yang Diberikan</label>
                        <textarea name="solusi" rows="3" class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500" placeholder="Solusi digital seperti apa yang dibuat?"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Teknologi yang Dipakai</label>
                        <textarea name="teknologi" rows="2" class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500" placeholder="Misal: Laravel, Tailwind CSS, MySQL"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Hasil & Dampak</label>
                        <textarea name="hasil" rows="3" class="w-full rounded-xl border-slate-200 focus:border-purple-500 focus:ring-purple-500" placeholder="Apa dampak positif dari sistem ini untuk klien?"></textarea>
                    </div>
                </div>
            </div>

            {{-- Tombol --}}
            <div class="flex gap-4 pt-4 border-t border-slate-100 mt-6">
                <button type="submit" class="bg-purple-600 text-white px-6 py-2.5 rounded font-bold hover:bg-purple-700 transition">
                    Simpan Portofolio
                </button>
                <a href="{{ route('admin.produk.index') }}" class="px-6 py-2.5 bg-slate-100 rounded font-bold text-slate-600 hover:bg-slate-200 transition">
                    Batal
                </a>
            </div>
        </form>
        </div> <!-- End Card Body -->
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
