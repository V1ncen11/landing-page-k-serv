<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>K-SERV | Layanan Pembuatan Produk Digital</title>
    <meta name="description" content="K-SERV menyediakan solusi digital terpercaya mulai dari jasa olah data, pembuatan laporan, hingga template desain brosur dan PPT profesional. Proses cepat dan bergaransi!">
    <meta name="keywords" content="jasa joki laporan, template brosur, k-serv, kevin nurachman, jasa desain ppt, jasa olah data">
    <meta name="author" content="Kevin Nurachman">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="K-SERV - Solusi Digital Beres Tanpa Ribet">
    <meta property="og:description" content="Butuh bantuan tugas atau desain template? Biar K-SERV yang urus semuanya dengan hasil profesional.">
    <meta property="og:image" content="{{ asset('images/favicon.png') }}">
    <meta name="theme-color" content="#f8fafc">

  
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    {{-- Favicon sudah diperbaiki dari pavicon ke favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <style> 
        body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; } 
    </style>
</head>

<body class="bg-slate-50 text-slate-900 antialiased">
    
    <main>
        @yield('content')
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                once: true,
                easing: 'ease-in-out',
            });
        });
    </script>
</body>
</html>