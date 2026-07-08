<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 – Halaman Tidak Ditemukan | K-SERV</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#13111c] text-white min-h-screen flex items-center justify-center relative overflow-hidden antialiased">
    
    {{-- Glowing Orbs Background --}}
    <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-[#673de6]/20 rounded-full blur-[120px] pointer-events-none mix-blend-screen"></div>
    <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-rose-500/10 rounded-full blur-[100px] pointer-events-none mix-blend-screen"></div>
    <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 24px 24px;"></div>

    <div class="relative z-10 max-w-3xl mx-auto px-6 text-center w-full">
        {{-- Logo K-SERV --}}
        <a href="/" class="inline-flex items-center gap-3 mb-16 hover:scale-105 transition-transform duration-300">
            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-[#673de6] to-purple-600 flex items-center justify-center shadow-lg shadow-[#673de6]/30">
                <span class="text-white font-black text-2xl">K</span>
            </div>
            <span class="text-3xl font-black tracking-tight text-white">K-SERV.</span>
        </a>

        {{-- 404 Visual Art --}}
        <div class="relative mb-10 group cursor-default">
            {{-- Angka 404 Gede di belakang --}}
            <h1 class="text-[12rem] md:text-[16rem] leading-none font-black text-transparent bg-clip-text bg-gradient-to-b from-white/20 to-transparent select-none tracking-tighter mix-blend-overlay group-hover:scale-105 transition-transform duration-700">404</h1>
            
            {{-- Teks utama di depan --}}
            <div class="absolute inset-0 flex items-center justify-center flex-col">
                <div class="w-20 h-20 bg-white/5 backdrop-blur-md rounded-full border border-white/10 flex items-center justify-center mb-6 shadow-xl text-4xl">
                    👾
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white tracking-tight drop-shadow-lg">Jalan Buntu.</h2>
            </div>
        </div>

        {{-- Deskripsi --}}
        <p class="text-slate-400 text-lg md:text-xl mb-12 max-w-lg mx-auto leading-relaxed font-medium">
            Waduh, sepertinya Anda nyasar! Halaman yang Anda cari mungkin sudah dihapus, dipindahkan, atau memang tidak pernah ada.
        </p>

        {{-- Tombol Aksi --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/" class="w-full sm:w-auto px-8 py-4 bg-[#673de6] hover:bg-purple-600 text-white font-bold rounded-2xl transition-all hover:-translate-y-1 shadow-lg shadow-purple-500/25 flex items-center justify-center gap-3 text-lg">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                Kembali ke Bumi
            </a>
            <a href="https://wa.me/6287870402431" target="_blank" class="w-full sm:w-auto px-8 py-4 bg-white/5 hover:bg-white/10 text-white border border-white/10 font-bold rounded-2xl transition-all backdrop-blur-sm flex items-center justify-center gap-3 text-lg">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                Lapor Admin
            </a>
        </div>
    </div>
</body>
</html>
</html>
