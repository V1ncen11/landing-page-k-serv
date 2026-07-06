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
                <h2 class="text-2xl font-bold text-slate-900">Edit Produk / Jasa</h2>
                <p class="text-sm text-slate-400 mt-0.5">Perbarui informasi produk di katalog.</p>
            </div>
        </div>

        {{-- Error Validation --}}
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

        <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Produk / Jasa</label>
                <input type="text" name="nama" value="{{ old('nama', $produk->nama) }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                    <select name="kategori" id="kategori-select" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="Jasa"       {{ old('kategori', $produk->kategori) == 'Jasa'       ? 'selected' : '' }}>Jasa</option>
                        <option value="Template"   {{ old('kategori', $produk->kategori) == 'Template'   ? 'selected' : '' }}>Template</option>
                        <option value="Portofolio" {{ strtolower(old('kategori', $produk->kategori)) == 'portofolio' ? 'selected' : '' }}>Portofolio</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Harga (Rp)</label>
                    <input type="text" name="harga" value="{{ old('harga', $produk->harga) }}"
                        class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
            </div>

            {{-- Spesifikasi (hanya untuk Jasa) --}}
            <div id="spesifikasi-box">
                <label class="block text-sm font-bold text-slate-700 mb-2">Spesifikasi <span class="text-slate-400 font-normal">(Pisahkan dengan tombol Enter)</span></label>
                <textarea name="spesifikasi" rows="4"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="Contoh:&#10;1 Halaman Website&#10;Desain Responsif&#10;Bebas Revisi 3x">{{ old('spesifikasi', $produk->spesifikasi) }}</textarea>
            </div>

            {{-- Gambar URL (khusus Portofolio) --}}
            <div id="gambar-box">
                <label class="block text-sm font-bold text-slate-700 mb-2">URL Gambar Portofolio <span class="font-normal text-slate-400">(opsional)</span></label>
                @if($produk->gambar)
                <div class="mb-3">
                    <p class="text-[10px] text-slate-400 mb-2 italic">Gambar saat ini:</p>
                    <img src="{{ $produk->gambar }}" class="w-40 h-28 object-cover rounded-lg border border-slate-100" onerror="this.style.display='none'">
                </div>
                @endif
                <input type="url" name="gambar" value="{{ old('gambar', $produk->gambar) }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="https://i.imgur.com/contoh.jpg"
                    id="gambar-input">
                <p class="text-[11px] text-slate-400 mt-2 italic">
                    💡 Upload gambar ke <a href="https://imgur.com/upload" target="_blank" class="text-indigo-500 font-bold hover:underline">Imgur</a>, lalu paste URL-nya di sini.
                </p>
                <div id="preview-box" class="{{ $produk->gambar ? '' : 'hidden' }} mt-3">
                    <p class="text-xs font-bold text-slate-500 mb-1">Preview baru:</p>
                    <img id="preview-img" src="{{ $produk->gambar }}" class="w-full max-h-40 object-cover rounded-xl border border-slate-100">
                </div>
            </div>

            {{-- Case Study Section (Khusus Portofolio) --}}
            <div id="case-study-box" class="mt-8 mb-4 border-t border-slate-100 pt-6" style="display: none;">
                <h3 class="text-lg font-bold text-slate-900 mb-2">Data Case Study (Opsional)</h3>
                <p class="text-xs text-slate-500 mb-6">Isi bagian ini untuk menampilkan studi kasus di halaman detail portofolio.</p>

                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Tantangan & Masalah</label>
                        <textarea name="masalah" rows="3" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Apa masalah yang dihadapi klien?">{{ old('masalah', $produk->masalah) }}</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Solusi yang Diberikan</label>
                        <textarea name="solusi" rows="3" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Solusi digital seperti apa yang dibuat?">{{ old('solusi', $produk->solusi) }}</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Teknologi yang Dipakai</label>
                        <textarea name="teknologi" rows="2" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Misal: Laravel, Tailwind CSS, MySQL">{{ old('teknologi', $produk->teknologi) }}</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Hasil & Dampak</label>
                        <textarea name="hasil" rows="3" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Apa dampak positif dari sistem ini untuk klien?">{{ old('hasil', $produk->hasil) }}</textarea>
                    </div>
                </div>
            </div>

            {{-- Link Pemesanan / Link Website --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2" id="label-link">Link Pemesanan <span class="text-slate-400 font-normal">(URL WhatsApp / Tokopedia dll.)</span></label>
                <input type="url" name="link" value="{{ old('link', $produk->link) }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="https://...">
                <p class="text-xs text-slate-400 mt-1 italic" id="helper-link">Kosongkan jika ingin pakai link WA default.</p>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="flex-1 bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                    Update Produk
                </button>
                <a href="{{ route('admin.produk.index') }}" class="px-6 py-3 border border-slate-200 rounded-xl font-bold text-slate-600 hover:bg-slate-50 transition text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image preview
        const gambarInput = document.getElementById('gambar-input');
        if (gambarInput) {
            gambarInput.addEventListener('input', function() {
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
        }

        // Kategori toggle: spesifikasi & gambar
        const kategoriSelect = document.getElementById('kategori-select');
        const spesifikasiBox = document.getElementById('spesifikasi-box');
        const gambarBox      = document.getElementById('gambar-box');
        const caseStudyBox   = document.getElementById('case-study-box');

        function toggleFields() {
            const val = kategoriSelect.value;
            spesifikasiBox.style.display = (val === 'Jasa') ? 'block' : 'none';
            gambarBox.style.display      = (val === 'Portofolio') ? 'block' : 'none';
            if(caseStudyBox) caseStudyBox.style.display = (val === 'Portofolio') ? 'block' : 'none';

            const labelLink = document.getElementById('label-link');
            const helperLink = document.getElementById('helper-link');
            
            if (val === 'Portofolio') {
                labelLink.innerHTML = 'Link Website Portofolio <span class="text-slate-400 font-normal">(opsional)</span>';
                helperLink.innerHTML = 'Masukkan link website portofolio agar bisa dikunjungi. Kosongkan jika tidak ada.';
            } else {
                labelLink.innerHTML = 'Link Pemesanan <span class="text-slate-400 font-normal">(URL WhatsApp / Tokopedia dll.)</span>';
                helperLink.innerHTML = 'Kosongkan jika ingin pakai link WA default.';
            }
        }

        kategoriSelect.addEventListener('change', toggleFields);
        toggleFields();
    });
</script>
@endsection