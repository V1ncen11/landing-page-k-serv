@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
        <h2 class="text-2xl font-bold mb-6 text-slate-900">Edit Produk / Jasa</h2>

        <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <input type="hidden" name="link" value="{{ $produk->link ?: 'https://wa.me/6287870402431' }}">

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Produk / Jasa</label>
                <input type="text" name="nama" value="{{ $produk->nama }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                    <select name="kategori" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="Jasa"       {{ $produk->kategori == 'Jasa'       ? 'selected' : '' }}>Jasa</option>
                        <option value="Template"   {{ $produk->kategori == 'Template'   ? 'selected' : '' }}>Template</option>
                        <option value="Portofolio" {{ strtolower($produk->kategori) == 'portofolio' ? 'selected' : '' }}>Portofolio</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Harga (Rp)</label>
                    <input type="text" name="harga" value="{{ $produk->harga }}"
                        class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" required>
                </div>
            </div>

            {{-- Gambar URL (khusus Portofolio) --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">URL Gambar Portofolio <span class="font-normal text-slate-400">(opsional)</span></label>

                {{-- Preview gambar jika sudah ada URL --}}
                @if($produk->gambar)
                <div class="mb-3">
                    <p class="text-[10px] text-slate-400 mb-2 italic">Gambar saat ini:</p>
                    <img src="{{ $produk->gambar }}" class="w-40 h-28 object-cover rounded-lg border border-slate-100" onerror="this.style.display='none'">
                </div>
                @endif

                <input type="url" name="gambar" value="{{ $produk->gambar }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="https://i.imgur.com/contoh.jpg"
                    id="gambar-input">
                <p class="text-[11px] text-slate-400 mt-2 italic">
                    💡 Upload gambar ke <a href="https://imgur.com/upload" target="_blank" class="text-indigo-500 font-bold hover:underline">Imgur</a>, lalu paste URL-nya di sini.
                </p>

                {{-- Preview live --}}
                <div id="preview-box" class="{{ $produk->gambar ? '' : 'hidden' }} mt-3">
                    <p class="text-xs font-bold text-slate-500 mb-1">Preview baru:</p>
                    <img id="preview-img" src="{{ $produk->gambar }}" class="w-full max-h-40 object-cover rounded-xl border border-slate-100">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="4"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" required>{{ $produk->deskripsi }}</textarea>
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
document.getElementById('gambar-input').addEventListener('input', function() {
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