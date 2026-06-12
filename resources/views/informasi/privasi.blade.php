@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-50 dark:bg-slate-900 py-24 transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-6 md:px-8">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium mb-8">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Beranda
        </a>

        <div class="bg-white dark:bg-slate-800 rounded-3xl p-8 md:p-12 shadow-sm border border-slate-200 dark:border-slate-700">
            <h1 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-6">Kebijakan Privasi</h1>
            <p class="text-slate-500 dark:text-slate-400 mb-8">Pembaruan Terakhir: {{ date('d M Y') }}</p>

            <div class="text-slate-600 dark:text-slate-300 leading-relaxed space-y-6">
                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">1. Pengumpulan Data</h3>
                    <p>K-SERV hanya mengumpulkan data yang diperlukan untuk proses komunikasi dan pengerjaan proyek, seperti nama, nomor WhatsApp, email, dan detail brief proyek.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">2. Penggunaan Data</h3>
                    <p>Data yang dikumpulkan semata-mata digunakan untuk keperluan internal, yaitu penyelesaian proyek yang dipesan. Kami tidak akan pernah menjual atau membagikan data klien ke pihak ketiga tanpa izin tertulis.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">3. Keamanan File Proyek</h3>
                    <p>Dokumen sensitif (seperti laporan akademik, data perusahaan, atau script khusus) akan dijaga kerahasiaannya. Kami siap menandatangani NDA (Non-Disclosure Agreement) jika klien menginginkannya.</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">4. Retensi Data</h3>
                    <p>File sumber dan hasil akhir akan kami simpan maksimal selama 3 bulan setelah proyek selesai sebagai backup gratis untuk klien. Setelah itu, file dapat kami hapus dari server kami secara permanen demi efisiensi storage.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
