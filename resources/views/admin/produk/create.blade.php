@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
        <h2 class="text-2xl font-bold mb-6 text-slate-900">Tambah Produk Baru</h2>
        
        <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Produk / Jasa</label>
                <input type="text" name="nama" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Contoh: Joki Laporan UP" required>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                    <select name="kategori" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="Jasa">Jasa</option>
                        <option value="Template">Template</option>
                        <option value="Portofolio">Portofolio</option> </select>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Harga (Rp)</label>
                    <input type="text" name="harga" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Contoh: 3.000.000 - 7.000.000" required>
                </div>
            </div>

            <input type="hidden" name="link" value="https://wa.me/087870402431">

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Foto Hasil Karya / Portofolio</label>
                <input type="file" name="gambar" class="w-full text-sm text-slate-500 
                    file:mr-4 file:py-2.5 file:px-4 
                    file:rounded-xl file:border-0 
                    file:text-xs file:font-black 
                    file:bg-indigo-50 file:text-indigo-600 
                    hover:file:bg-indigo-100 
                    border border-slate-100 rounded-xl p-2">
                <p class="text-[10px] text-slate-400 mt-2 italic">*Format: JPG, PNG, atau JPEG (Maks. 2MB)</p>
            </div>

            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="w-full rounded-xl border-slate-200 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Jelaskan detail layanannya..." required></textarea>
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
@endsection