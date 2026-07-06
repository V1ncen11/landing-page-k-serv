<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-SERV Admin Dashboard</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased h-screen overflow-hidden flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#1a1a2e] text-white hidden md:flex flex-col shadow-2xl z-20 flex-shrink-0">
        <!-- Logo -->
        <div class="h-20 flex items-center px-8 border-b border-white/10">
            <a href="{{ url('/') }}" class="text-2xl font-black tracking-tight flex items-center gap-2 hover:opacity-80 transition">
                <img src="{{ asset('images/favicon.svg') }}" alt="K-SERV" class="w-8 h-8">
                K-SERV.
            </a>
        </div>
        
        <!-- Nav Links -->
        <nav class="flex-1 py-8 px-4 space-y-2 overflow-y-auto">
            <p class="px-4 text-xs font-bold text-slate-400 uppercase tracking-widest mb-4">Menu Utama</p>
            
            <a href="{{ route('admin.produk.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.produk.*') || request()->routeIs('admin.produk.fitur.*') ? 'bg-[#673de6] text-white font-bold shadow-lg shadow-purple-500/30' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                Jasa & Portofolio
            </a>
            
            <a href="{{ route('admin.blog.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.blog.*') ? 'bg-amber-500 text-white font-bold shadow-lg shadow-amber-500/30' : 'text-slate-300 hover:bg-white/5 hover:text-white font-medium' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                Kelola Blog
            </a>
        </nav>
        
        <!-- Bottom section (Logout) -->
        <div class="p-4 border-t border-white/10">
            <a href="{{ url('/') }}" target="_blank" class="flex items-center justify-center gap-2 w-full px-4 py-3 bg-white/5 hover:bg-white/10 rounded-xl text-sm font-bold text-slate-300 hover:text-white transition-all mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
                Lihat Website
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center justify-center gap-2 w-full px-4 py-3 bg-rose-500/10 hover:bg-rose-500 hover:text-white text-rose-500 rounded-xl text-sm font-bold transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden relative">
        
        <!-- Mobile Header Navbar -->
        <header class="md:hidden h-16 bg-[#1a1a2e] text-white flex items-center justify-between px-6 flex-shrink-0 shadow-md relative z-30">
            <a href="{{ url('/') }}" class="text-xl font-black tracking-tight flex items-center gap-2">
                <img src="{{ asset('images/favicon.svg') }}" alt="K-SERV" class="w-6 h-6">
                K-SERV.
            </a>
            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-menu-btn" class="p-2 text-slate-300 hover:text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </header>

        <!-- Mobile Sidebar Menu (Absolute) -->
        <div id="mobile-sidebar" class="fixed inset-0 bg-[#1a1a2e] text-white flex-col shadow-2xl z-40 transition-transform transform -translate-x-full md:hidden hidden">
            <!-- Mobile Logo -->
            <div class="h-16 flex items-center justify-between px-6 border-b border-white/10">
                <span class="text-xl font-black tracking-tight flex items-center gap-2">
                    <img src="{{ asset('images/favicon.svg') }}" alt="K-SERV" class="w-6 h-6">
                    Admin Menu
                </span>
                <button id="mobile-close-btn" class="p-2 text-slate-300 hover:text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
            <nav class="flex-1 py-8 px-6 space-y-3 overflow-y-auto">
                <a href="{{ route('admin.produk.index') }}" class="flex items-center gap-3 px-4 py-4 rounded-xl transition-all {{ request()->routeIs('admin.produk.*') || request()->routeIs('admin.produk.fitur.*') ? 'bg-[#673de6] text-white font-bold' : 'text-slate-300' }}">
                    Jasa & Portofolio
                </a>
                <a href="{{ route('admin.blog.index') }}" class="flex items-center gap-3 px-4 py-4 rounded-xl transition-all {{ request()->routeIs('admin.blog.*') ? 'bg-amber-500 text-white font-bold' : 'text-slate-300' }}">
                    Kelola Blog
                </a>
                
                <hr class="border-white/10 my-6">
                
                <a href="{{ url('/') }}" class="flex items-center gap-3 px-4 py-4 rounded-xl text-slate-300">
                    Lihat Website
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center gap-3 w-full px-4 py-4 text-rose-400 rounded-xl font-bold">
                        Logout
                    </button>
                </form>
            </nav>
        </div>

        <!-- Dynamic Content -->
        <main class="flex-1 overflow-y-auto bg-slate-50/50 p-6 md:p-8 lg:p-10 relative z-10">
            @yield('content')
        </main>
    </div>

    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileCloseBtn = document.getElementById('mobile-close-btn');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        
        function toggleMobileMenu() {
            if(mobileSidebar.classList.contains('hidden')) {
                mobileSidebar.classList.remove('hidden');
                setTimeout(() => mobileSidebar.classList.remove('-translate-x-full'), 10);
            } else {
                mobileSidebar.classList.add('-translate-x-full');
                setTimeout(() => mobileSidebar.classList.add('hidden'), 300);
            }
        }
        
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
        mobileCloseBtn.addEventListener('click', toggleMobileMenu);
    </script>
</body>
</html>
