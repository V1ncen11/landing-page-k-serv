@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Content Header -->
    <div class="mb-6 flex flex-col md:flex-row md:items-center justify-between">
        <h1 class="text-2xl font-bold text-slate-800">Tambah Jasa</h1>
        <ol class="flex text-sm text-slate-500 mt-2 md:mt-0">
            <li><a href="{{ route('admin.dashboard') }}" class="text-indigo-600 hover:underline">Home</a></li>
            <li class="mx-2">/</li>
            <li><a href="{{ route('admin.produk.index') }}" class="text-indigo-600 hover:underline">Produk</a></li>
            <li class="mx-2">/</li>
            <li class="text-slate-400">Tambah Jasa</li>
        </ol>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-lg shadow-sm border-t-4 border-t-indigo-600 border-x border-b border-slate-200">
        <!-- Card Header -->
        <div class="px-6 py-4 border-b border-slate-200">
            <h3 class="text-lg font-bold text-slate-700">Form Jasa Baru</h3>
        </div>
        
        <!-- Card Body -->
        <div class="p-6">

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

            <div class="flex gap-4 pt-4 border-t border-slate-100 mt-6">
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2.5 rounded font-bold hover:bg-indigo-700 transition">
                    Simpan Jasa
                </button>
                <a href="{{ route('admin.produk.index') }}" class="px-6 py-2.5 bg-slate-100 rounded font-bold text-slate-600 hover:bg-slate-200 transition">
                    Batal
                </a>
            </div>
        </form>
        </div> <!-- End Card Body -->
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