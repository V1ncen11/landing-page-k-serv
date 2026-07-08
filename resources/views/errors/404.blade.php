<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 – Halaman Tidak Ditemukan | K-SERV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 h-[100dvh] overflow-hidden flex flex-col items-center justify-center p-4 antialiased">
    
    {{-- Navbar / Logo --}}
    <div class="absolute top-6 left-6 md:top-8 md:left-8">
        <a href="{{ url('/') }}" class="inline-flex items-center hover:opacity-80 transition-opacity">
            <span class="font-bold text-lg md:text-xl text-slate-800 tracking-tight">K-SERV.</span>
        </a>
    </div>

    <div class="w-full max-w-2xl mx-auto text-center mt-8">
        {{-- Illustration --}}
        <img src="{{ asset('images/error404.svg') }}" alt="Halaman Tidak Ditemukan" class="w-full max-w-[220px] md:max-w-[300px] mx-auto mb-4 md:mb-6 animate-float">

        {{-- Content --}}
        <h1 class="text-2xl md:text-4xl font-black text-slate-900 mb-2 md:mb-3 tracking-tight">Halaman Tidak Ditemukan</h1>
        <p class="text-slate-500 mb-6 md:mb-8 max-w-md mx-auto leading-relaxed text-sm">
            Maaf, halaman yang Anda cari mungkin telah dihapus, namanya diubah, atau tidak tersedia untuk sementara waktu.
        </p>

        {{-- Buttons --}}
        <div class="flex flex-row items-center justify-center gap-3">
            <a href="{{ url('/') }}" class="px-5 py-2.5 md:px-6 md:py-2.5 bg-[#673de6] hover:bg-purple-600 text-white font-bold rounded-xl transition-all shadow-md shadow-purple-500/20 text-xs md:text-sm flex items-center justify-center">
                Kembali ke Beranda
            </a>
            <a href="https://wa.me/6287870402431" target="_blank" class="px-5 py-2.5 md:px-6 md:py-2.5 bg-white text-slate-700 hover:text-slate-900 hover:bg-slate-50 border border-slate-200 font-bold rounded-xl transition-all shadow-sm text-xs md:text-sm flex items-center justify-center">
                Lapor Kendala
            </a>
        </div>
    </div>
    
</body>
</html>
</html>
