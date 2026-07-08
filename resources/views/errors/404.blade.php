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
<body class="bg-slate-50 text-slate-900 min-h-screen flex flex-col items-center justify-center p-6 antialiased">
    
    {{-- Navbar / Logo --}}
    <div class="absolute top-8 left-8 md:top-10 md:left-10">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 hover:opacity-80 transition-opacity">
            <img src="{{ asset('images/favicon.svg') }}" alt="K-SERV Logo" class="w-8 h-8">
            <span class="font-bold text-xl text-slate-800 tracking-tight">K-SERV.</span>
        </a>
    </div>

    <div class="w-full max-w-2xl mx-auto text-center">
        {{-- Illustration --}}
        <img src="{{ asset('images/error404.svg') }}" alt="Halaman Tidak Ditemukan" class="w-full max-w-[350px] md:max-w-[400px] mx-auto mb-8 animate-float">

        {{-- Content --}}
        <h1 class="text-3xl md:text-4xl font-black text-slate-900 mb-3 tracking-tight">Halaman Tidak Ditemukan</h1>
        <p class="text-slate-500 mb-8 max-w-md mx-auto leading-relaxed text-sm md:text-base">
            Maaf, halaman yang Anda cari mungkin telah dihapus, namanya diubah, atau tidak tersedia untuk sementara waktu.
        </p>

        {{-- Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
            <a href="{{ url('/') }}" class="w-full sm:w-auto px-6 py-2.5 bg-[#673de6] hover:bg-purple-600 text-white font-bold rounded-xl transition-all shadow-md shadow-purple-500/20 text-sm flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Beranda
            </a>
            <a href="https://wa.me/6287870402431" target="_blank" class="w-full sm:w-auto px-6 py-2.5 bg-white text-slate-700 hover:text-slate-900 hover:bg-slate-50 border border-slate-200 font-bold rounded-xl transition-all shadow-sm text-sm flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                Laporkan Kendala
            </a>
        </div>
    </div>
    
</body>
</html>
</html>
