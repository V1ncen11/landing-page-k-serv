@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-50 dark:bg-slate-900 py-24 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-6 md:px-8">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium mb-8">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>

        <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 md:p-12 shadow-sm border border-slate-200 dark:border-slate-700">
            <h1 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-6">Cara Pembayaran</h1>
            
            <div class="text-slate-600 dark:text-slate-300 leading-relaxed space-y-6">
                <p>Untuk mempermudah transaksi, K-SERV menyediakan beberapa metode pembayaran yang aman, fleksibel, dan transparan.</p>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">1. Sistem Pembayaran</h3>
                    <p class="mb-3">Kami menerapkan sistem pembayaran bertahap untuk menjaga keamanan dan kepercayaan kedua belah pihak:</p>
                    <ul class="list-disc list-outside ml-5 space-y-2">
                        <li><strong>DP (Down Payment):</strong> Minimal 50% dari total nilai proyek dibayarkan di awal sebelum pengerjaan dimulai.</li>
                        <li><strong>Pelunasan:</strong> Sisa pembayaran 50% dilakukan setelah proyek selesai dikerjakan dan klien telah mereview hasil akhir (sebelum file mentah / akses penuh diserahkan).</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">2. Metode Pembayaran yang Diterima</h3>
                    <p>Kami menerima transfer ke rekening / e-wallet berikut:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 mb-2">
                        <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-700 flex items-center gap-4">
                            <div class="w-12 h-12 bg-white dark:bg-slate-800 rounded-lg flex items-center justify-center font-black text-blue-800 dark:text-blue-400 border border-slate-100 dark:border-slate-700">BCA</div>
                            <div>
                                <div class="font-bold text-slate-900 dark:text-white">BCA (Bank Central Asia)</div>
                                <div class="text-slate-500 dark:text-slate-400 text-sm">Hubungi via WA untuk detail No. Rekening</div>
                            </div>
                        </div>
                        <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-700 flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center font-black text-white">DANA</div>
                            <div>
                                <div class="font-bold text-slate-900 dark:text-white">DANA</div>
                                <div class="text-slate-500 dark:text-slate-400 text-sm">Hubungi via WA untuk detail Nomor</div>
                            </div>
                        </div>
                        <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-700 flex items-center gap-4">
                            <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center font-black text-white">OVO</div>
                            <div>
                                <div class="font-bold text-slate-900 dark:text-white">OVO</div>
                                <div class="text-slate-500 dark:text-slate-400 text-sm">Hubungi via WA untuk detail Nomor</div>
                            </div>
                        </div>
                        <div class="bg-slate-50 dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-700 flex items-center gap-4">
                            <div class="w-12 h-12 bg-emerald-500 rounded-lg flex items-center justify-center font-black text-white italic">GOPAY</div>
                            <div>
                                <div class="font-bold text-slate-900 dark:text-white">GoPay</div>
                                <div class="text-slate-500 dark:text-slate-400 text-sm">Hubungi via WA untuk detail Nomor</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">3. Konfirmasi Pembayaran</h3>
                    <p>Setelah melakukan transfer, harap kirimkan bukti transfer berupa foto/screenshot ke WhatsApp K-SERV agar kami dapat memproses pesanan dengan segera.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
