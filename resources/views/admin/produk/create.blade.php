@extends('layouts.admin')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">

        {{-- Header --}}
        <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 bg-indigo-50 rounded-xl flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-slate-900">Tambah Jasa / Template</h2>
                <p class="text-sm text-slate-400 mt-0.5">Tambahkan layanan atau produk digital baru ke katalog.</p>
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

        <form action="{{ route('admin.produk.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Produk / Jasa</label>
                <input type="text" name="nama" value="{{ old('nama') }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="Contoh: Joki Laporan UP" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                    <select name="kategori" id="kategori-select" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="Jasa" {{ old('kategori') == 'Jasa' ? 'selected' : '' }}>Jasa</option>
                        <option value="Template" {{ old('kategori') == 'Template' ? 'selected' : '' }}>Template</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Harga (Rp)</label>
                    <input type="text" name="harga" value="{{ old('harga') }}"
                        class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Contoh: 3.000.000 - 7.000.000" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="3"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="Jelaskan detail layanannya..." required>{{ old('deskripsi') }}</textarea>
            </div>

            <div id="spesifikasi-box">
                <label class="block text-sm font-bold text-slate-700 mb-2">Spesifikasi <span class="text-slate-400 font-normal">(Pisahkan dengan tombol Enter)</span></label>
                <textarea name="spesifikasi" rows="4"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="Contoh:&#10;1 Halaman Website&#10;Desain Responsif&#10;Bebas Revisi 3x">{{ old('spesifikasi') }}</textarea>
            </div>

            {{-- Link WA --}}
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Link Pemesanan <span class="text-slate-400 font-normal">(URL WhatsApp / Tokopedia dll.)</span></label>
                <input type="url" name="link" value="{{ old('link', 'https://wa.me/6287870402431') }}"
                    class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="https://wa.me/62...">
                <p class="text-xs text-slate-400 mt-1 italic">Kosongkan jika ingin pakai link WA default.</p>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit" class="flex-1 bg-indigo-600 text-white py-3 rounded-xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">
                    Simpan Produk
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
        const kategoriSelect = document.getElementById('kategori-select');
        const spesifikasiBox = document.getElementById('spesifikasi-box');

        function toggleSpesifikasi() {
            spesifikasiBox.style.display = (kategoriSelect.value === 'Jasa') ? 'block' : 'none';
        }

        kategoriSelect.addEventListener('change', toggleSpesifikasi);
        toggleSpesifikasi();
    });
</script>
@endsection