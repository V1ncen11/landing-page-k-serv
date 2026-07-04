<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 – Halaman Tidak Ditemukan | K-SERV</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #13111c;
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 24px;
        }

        /* Glowing orb background */
        body::before {
            content: '';
            position: fixed;
            top: -150px;
            left: 50%;
            transform: translateX(-50%);
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(103,61,230,0.25) 0%, transparent 70%);
            pointer-events: none;
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 520px;
            width: 100%;
        }

        /* K-SERV Navbar */
        .navbar {
            position: fixed;
            top: 0; left: 0; right: 0;
            background-color: #1a1a2e;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            padding: 18px 32px;
            display: flex;
            align-items: center;
            z-index: 100;
        }
        .navbar-logo {
            font-size: 1.4rem;
            font-weight: 900;
            color: #fff;
            text-decoration: none;
            letter-spacing: -0.5px;
        }
        .navbar-logo span { color: #a78bfa; }

        /* Error code */
        .error-code {
            font-size: clamp(7rem, 20vw, 10rem);
            font-weight: 900;
            line-height: 1;
            background: linear-gradient(135deg, #673de6, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 24px;
        }

        .error-title {
            font-size: clamp(1.5rem, 5vw, 2rem);
            font-weight: 800;
            color: #fff;
            margin-bottom: 12px;
        }

        .error-desc {
            color: #94a3b8;
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 36px;
        }

        .btn-group {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary {
            padding: 14px 28px;
            background-color: #673de6;
            color: #fff;
            font-weight: 700;
            border-radius: 999px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: opacity 0.2s, transform 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-primary:hover { opacity: 0.9; transform: translateY(-2px); }

        .btn-secondary {
            padding: 14px 28px;
            border: 1px solid rgba(255,255,255,0.2);
            color: #fff;
            font-weight: 600;
            border-radius: 999px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: border-color 0.2s, background 0.2s;
        }
        .btn-secondary:hover { border-color: rgba(255,255,255,0.5); background: rgba(255,255,255,0.05); }

        /* Floating illustration */
        .illustration {
            margin-bottom: 32px;
            opacity: 0.85;
        }

        /* Footer hint */
        .hint {
            margin-top: 40px;
            color: #475569;
            font-size: 0.8rem;
        }
        .hint a { color: #a78bfa; text-decoration: none; }
        .hint a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="/" class="navbar-logo">K<span>-</span>SERV.</a>
    </nav>

    <div class="container">
        <!-- SVG Illustration -->
        <div class="illustration">
            <svg width="180" height="140" viewBox="0 0 180 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Browser window -->
                <rect x="10" y="20" width="160" height="105" rx="10" fill="#1e1b4b" stroke="rgba(103,61,230,0.4)" stroke-width="1.5"/>
                <!-- Top bar -->
                <rect x="10" y="20" width="160" height="24" rx="10" fill="#2d2a5e"/>
                <rect x="10" y="32" width="160" height="12" fill="#2d2a5e"/>
                <!-- Dots -->
                <circle cx="28" cy="32" r="4" fill="#f87171"/>
                <circle cx="42" cy="32" r="4" fill="#fbbf24"/>
                <circle cx="56" cy="32" r="4" fill="#4ade80"/>
                <!-- 404 text in browser -->
                <text x="90" y="88" text-anchor="middle" font-family="Inter, sans-serif" font-weight="900" font-size="32" fill="url(#grad)">404</text>
                <!-- Sad face -->
                <text x="90" y="115" text-anchor="middle" font-size="18">😕</text>
                <defs>
                    <linearGradient id="grad" x1="60" y1="60" x2="120" y2="100" gradientUnits="userSpaceOnUse">
                        <stop offset="0%" stop-color="#673de6"/>
                        <stop offset="100%" stop-color="#a78bfa"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <div class="error-code">404</div>
        <h1 class="error-title">Halaman Tidak Ditemukan</h1>
        <p class="error-desc">
            Ups! Halaman yang kamu cari tidak ada atau sudah dipindahkan.<br>
            Tapi tenang, kami siap bantu bisnis kamu tetap online! 🚀
        </p>

        <div class="btn-group">
            <a href="/" class="btn-primary">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                Kembali ke Beranda
            </a>
            <a href="https://wa.me/6287870402431" target="_blank" class="btn-secondary">
                Hubungi Kami
            </a>
        </div>

        <p class="hint">Atau cek layanan kami di <a href="/#katalog">halaman katalog</a></p>
    </div>
</body>
</html>
