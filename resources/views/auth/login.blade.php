<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | K-SERV</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen p-6">
    <div class="max-w-md w-full">
        {{-- Logo --}}
        <div class="flex justify-center items-center gap-2 mb-8">
            <img src="{{ asset('images/logo.png') }}" alt="Logo KS" class="h-10 w-auto">
            <div class="text-3xl font-extrabold text-blue-600">K-SERV<span class="text-slate-400">.</span></div>
        </div>

        {{-- Login Card --}}
        <div class="bg-white rounded-[24px] shadow-xl shadow-slate-200/50 p-8 border border-slate-100">
            <h2 class="text-2xl font-bold text-slate-900 mb-2 text-center">Dashboard Admin</h2>
            <p class="text-slate-500 text-sm text-center mb-8">Silakan login untuk mengelola katalog.</p>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 text-red-600 rounded-xl border border-red-100 text-sm font-semibold text-center">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Email Admin</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 transition-colors bg-slate-50 focus:bg-white"
                        placeholder="admin@k-serv.com">
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-3 rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 transition-colors bg-slate-50 focus:bg-white"
                        placeholder="••••••••">
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-blue-600 text-white py-3.5 rounded-xl font-bold hover:bg-slate-900 transition-all shadow-lg shadow-blue-100">
                        Login Sekarang
                    </button>
                </div>
            </form>
        </div>

        <div class="text-center mt-8">
            <a href="{{ url('/') }}" class="text-slate-400 text-sm font-semibold hover:text-blue-600 transition-colors flex items-center justify-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>
