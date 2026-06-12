@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-50 dark:bg-slate-900 py-24 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-6 md:px-8">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium mb-8">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>

        <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 md:p-12 shadow-sm border border-slate-200 dark:border-slate-700">
            <h1 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-6">Syarat & Ketentuan</h1>
            <p class="text-slate-500 dark:text-slate-400 mb-8">Pembaruan Terakhir: {{ date('d M Y') }}</p>

            <div class="text-slate-600 dark:text-slate-300 leading-relaxed space-y-6">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">1. Ketentuan Umum</h3>
                    <p>Dengan memesan jasa di K-SERV, klien dianggap telah menyetujui seluruh syarat dan ketentuan yang berlaku. K-SERV berhak mengubah syarat dan ketentuan sewaktu-waktu tanpa pemberitahuan sebelumnya.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">2. Proses Pengerjaan</h3>
                    <p>Proses pengerjaan akan dimulai setelah klien melakukan konfirmasi pesanan dan/atau melakukan pembayaran Down Payment (DP) sesuai kesepakatan.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">3. Hak Akses & Kepemilikan</h3>
                    <p>Semua hasil karya yang telah dilunasi akan menjadi hak milik klien sepenuhnya. K-SERV berhak menggunakan hasil karya (dalam bentuk mockup/screenshot) sebagai portofolio publik kecuali ada perjanjian rahasia (NDA).</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">4. Pembatalan Pengerjaan</h3>
                    <p>Jika pembatalan dilakukan oleh pihak klien setelah proses pengerjaan dimulai, DP tidak dapat dikembalikan. Jika pembatalan dari pihak K-SERV, dana akan dikembalikan 100%.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
