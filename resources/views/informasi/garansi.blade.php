@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-50 dark:bg-slate-900 py-24 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-6 md:px-8">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium mb-8">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>

        <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 md:p-12 shadow-sm border border-slate-200 dark:border-slate-700">
            <div class="w-16 h-16 bg-emerald-50 dark:bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h1 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-6">Garansi Revisi 100%</h1>
            
            <div class="text-slate-600 dark:text-slate-300 leading-relaxed space-y-6">
                <p class="text-lg">K-SERV berkomitmen untuk memberikan hasil terbaik yang sesuai dengan keinginan klien. Oleh karena itu, kami memberikan jaminan garansi revisi dengan ketentuan sebagai berikut:</p>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">1. Apa itu Garansi Revisi K-SERV?</h3>
                    <p>Garansi revisi adalah fasilitas perbaikan atau penyesuaian hasil kerja apabila tidak sesuai dengan kesepakatan awal (brief) atau jika ada minor error yang terlewat oleh tim kami.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">2. Syarat Pengajuan Revisi</h3>
                    <ul class="list-disc list-outside ml-5 space-y-2">
                        <li>Revisi <strong>tidak merubah konsep dasar/struktur utama</strong> secara drastis dari kesepakatan awal. (Contoh: Minta ubah warna tombol boleh, tapi minta rombak UI dari e-commerce jadi sistem rumah sakit tidak termasuk revisi gratis).</li>
                        <li>Pengajuan revisi maksimal dilakukan <strong>7 hari kalender</strong> setelah hasil akhir (final draft) dikirimkan.</li>
                        <li>Revisi harus di-list dengan jelas dalam satu kali pengiriman (disarankan menggunakan poin-poin agar tidak ada yang terlewat).</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">3. Batas Revisi</h3>
                    <p>Untuk paket standar, garansi revisi diberikan hingga <strong>3x revisi minor</strong>. Jika membutuhkan perombakan besar di luar scope awal, akan dikenakan biaya tambahan (add-on) yang akan disepakati bersama sebelum dikerjakan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
