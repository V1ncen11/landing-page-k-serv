<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login K-SERV | Akses Khusus Bos</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#f8fafc] min-h-screen flex items-center justify-center p-6 antialiased">
    
    <div class="w-full max-w-[400px]">
        {{-- Header / Logo --}}
        <div class="text-center mb-10">
            <a href="{{ url('/') }}" class="inline-block group mb-2">
                <h1 class="text-4xl font-black text-slate-900 tracking-tighter hover:opacity-80 transition-opacity">
                    K-SERV<span style="color: #673de6;">.</span>
                </h1>
            </a>
            <p class="text-slate-500 text-sm font-medium">Sistem Manajemen Portal K-SERV</p>
        </div>

        {{-- Login Card --}}
        <div class="bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-slate-200">
            
            <h2 class="text-2xl font-bold text-slate-900 mb-8 text-center">Masuk Akun</h2>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 text-red-600 rounded-xl border border-red-100 text-sm font-semibold flex items-start gap-3">
                    <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                @csrf
                
                {{-- Email Input --}}
                <div class="space-y-2">
                    <label class="block text-sm font-bold text-slate-700">Email Akses</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 bg-white border border-slate-300 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#673de6] focus:ring-4 focus:ring-[#673de6]/10 transition-all font-medium"
                        placeholder="bos@k-serv.web.id">
                </div>

                {{-- Password Input --}}
                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="block text-sm font-bold text-slate-700">Kata Sandi</label>
                    </div>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 bg-white border border-slate-300 rounded-xl text-slate-900 placeholder-slate-400 focus:outline-none focus:border-[#673de6] focus:ring-4 focus:ring-[#673de6]/10 transition-all font-medium"
                        placeholder="••••••••">
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3.5 rounded-xl font-bold text-white shadow-md hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2" style="background-color: #673de6;">
                        Masuk Sekarang
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </form>
        </div>

        {{-- Footer Link --}}
        <div class="text-center mt-10">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-slate-500 text-sm font-semibold hover:text-[#673de6] transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>
