@extends('layouts.app')

@section('content')
<div class="pt-48 pb-20 bg-white dark:bg-slate-900 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-6">Di Balik Layar <span class="text-[#673de6]">K-SERV</span></h1>
            <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">Kami bukan sekadar pembuat website. Kami adalah mitra teknologi yang berdedikasi membantu pertumbuhan bisnis Anda di era digital melalui solusi modern dan efisien.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
            <div class="relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-[#673de6]/20 to-purple-400/20 rounded-3xl blur-2xl"></div>
                <img src="/images/test_dev.svg" alt="Tentang K-SERV" class="w-full relative z-10" style="filter: drop-shadow(0 20px 30px rgba(0,0,0,0.1));">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">Mendigitalkan Bisnis Lokal</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-5 leading-relaxed text-lg">
                    K-SERV didirikan dengan satu misi utama: Membantu UMKM, perusahaan, dan institusi pendidikan di Tasikmalaya serta sekitarnya agar mampu bersaing di kancah digital nasional.
                </p>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                    Banyak bisnis lokal yang memiliki produk atau layanan unggulan, namun kesulitan berkembang karena tidak memiliki presensi online yang kuat. Kami hadir dengan pendekatan personal, merancang website yang tidak sekadar cantik, tetapi juga SEO-friendly, cepat, dan berorientasi pada konversi.
                </p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
            <div>
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">
                    Kami Hadir untuk <br>
                    Beresin Urusan Digital<br>Kamu.
                </h2>
                <p class="text-slate-600 dark:text-slate-400 mb-5 leading-relaxed text-lg">
                    K-Serv adalah layanan jasa digital yang didirikan dengan satu misi sederhana: <strong class="text-slate-800 dark:text-slate-200">membantu individu dan bisnis tampil profesional di dunia digital tanpa harus ribet dan mahal.</strong>
                </p>
                <p class="text-slate-600 dark:text-slate-400 leading-relaxed text-lg">
                    Dari UMKM yang ingin go-digital, sekolah dan instansi yang butuh sistem informasi terintegrasi, hingga pemilik bisnis yang ingin punya website profesional—K-SERV siap menjadi partner digital Anda yang responsif, transparan, dan bergaransi.
                </p>
            </div>
            <div class="flex justify-center">
                <img src="/images/tentang_kami_team.svg" alt="Tim K-SERV" class="w-full max-w-[500px] h-auto object-contain drop-shadow-xl" />
            </div>
        </div>

        <div class="bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800 rounded-3xl p-10 md:p-16 max-w-4xl mx-auto text-center shadow-sm">
            <h3 class="text-sm font-bold text-[#673de6] tracking-widest uppercase mb-4">Founder</h3>
            <h4 class="text-2xl font-bold text-slate-900 dark:text-white mb-1">Kevin Nurachman</h4>
            <p class="text-sm font-medium text-slate-500 dark:text-slate-400 mb-8 uppercase tracking-wide">Full-Stack Web Developer</p>
            <div class="relative">
                <span class="absolute -top-6 -left-4 text-6xl text-slate-200 dark:text-slate-700 font-serif leading-none">"</span>
                <p class="text-xl text-slate-700 dark:text-slate-300 italic font-medium relative z-10 leading-relaxed">
                    Website yang sukses bukanlah tentang kode yang paling rumit, melainkan tentang bagaimana sistem tersebut dapat memecahkan masalah klien dengan cara yang paling efisien, user-friendly, dan estetik.
                </p>
                <span class="absolute -bottom-8 -right-4 text-6xl text-slate-200 dark:text-slate-700 font-serif leading-none">"</span>
            </div>
        </div>
    </div>
</div>
@endsection
