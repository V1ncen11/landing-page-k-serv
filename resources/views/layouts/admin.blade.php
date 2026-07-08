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
        /* AdminLTE specific adjustments */
        .content-wrapper { background-color: #f4f6f9; }
        .main-header { z-index: 1034; }
        .main-sidebar { z-index: 1040; }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DVJGDMVSGF"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-DVJGDMVSGF');
    </script>
</head>
<body class="bg-[#f4f6f9] text-slate-900 antialiased h-screen overflow-hidden flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#343a40] text-slate-300 hidden md:flex flex-col shadow-xl z-20 flex-shrink-0 main-sidebar">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="h-16 flex items-center px-4 border-b border-slate-700/50 hover:bg-slate-800 transition">
            <img src="{{ asset('images/favicon.svg') }}" alt="K-SERV" class="w-8 h-8 mr-3">
            <span class="text-xl font-bold text-white tracking-tight">K-SERV Admin</span>
        </a>
        
        <!-- User Panel -->
        <div class="px-4 py-4 border-b border-slate-700/50 flex items-center gap-3">
            <img src="{{ asset('images/image.png') }}" alt="User Image" class="w-10 h-10 rounded-full border-2 border-slate-600 object-cover">
            <div>
                <p class="text-sm font-bold text-white leading-tight">Kevin Nurachman</p>
                <div class="flex items-center gap-1 mt-0.5">
                    <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                    <p class="text-[10px] text-slate-400 font-medium">Online</p>
                </div>
            </div>
        </div>
        
        <!-- Nav Links -->
        <nav class="flex-1 py-4 px-2 space-y-1 overflow-y-auto">
            
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-md transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-[#673de6] text-white shadow-md' : 'hover:bg-white/10 hover:text-white' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-slate-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="text-sm font-medium">Dashboard</span>
            </a>
            
            <a href="{{ route('admin.produk.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-md transition-all {{ request()->routeIs('admin.produk.*') || request()->routeIs('admin.produk.fitur.*') ? 'bg-[#673de6] text-white shadow-md' : 'hover:bg-white/10 hover:text-white' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ request()->routeIs('admin.produk.*') || request()->routeIs('admin.produk.fitur.*') ? 'text-white' : 'text-slate-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                <span class="text-sm font-medium">Jasa & Portofolio</span>
            </a>
            
            <a href="{{ route('admin.blog.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-md transition-all {{ request()->routeIs('admin.blog.*') ? 'bg-[#673de6] text-white shadow-md' : 'hover:bg-white/10 hover:text-white' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 {{ request()->routeIs('admin.blog.*') ? 'text-white' : 'text-slate-400' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <span class="text-sm font-medium">Kelola Blog</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden relative content-wrapper">
        
        <!-- Top Navbar (Desktop & Mobile) -->
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 lg:px-6 flex-shrink-0 main-header shadow-sm">
            <div class="flex items-center">
                <!-- Mobile Menu Toggle Button -->
                <button id="mobile-menu-btn" class="p-2 mr-2 text-slate-500 hover:text-slate-700 focus:outline-none md:hidden">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <span class="font-bold text-slate-700 hidden sm:block">Admin Panel K-SERV</span>
            </div>
            
            <div class="flex items-center gap-4">
                <a href="{{ url('/') }}" target="_blank" class="text-sm font-bold text-indigo-600 hover:text-indigo-800 transition">
                    Lihat Website
                </a>
                <div class="h-6 w-px bg-slate-200"></div>
                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="text-sm font-bold text-rose-500 hover:text-rose-700 transition">
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <!-- Mobile Sidebar Menu (Absolute) -->
        <div id="mobile-sidebar" class="fixed inset-0 bg-slate-900/50 z-40 hidden md:hidden">
            <div class="w-64 bg-[#343a40] h-full shadow-2xl flex flex-col transform -translate-x-full transition-transform duration-300" id="mobile-sidebar-content">
                <!-- Logo -->
                <div class="h-16 flex items-center justify-between px-4 border-b border-slate-700/50">
                    <a href="{{ url('/') }}" class="text-xl font-bold text-white tracking-tight flex items-center gap-2">
                        <img src="{{ asset('images/favicon.svg') }}" alt="K-SERV" class="w-6 h-6">
                        K-SERV Admin
                    </a>
                    <button id="mobile-close-btn" class="p-2 text-slate-400 hover:text-white">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <!-- User Panel -->
                <div class="px-4 py-4 border-b border-slate-700/50 flex items-center gap-3">
                    <img src="{{ asset('images/image.png') }}" alt="User Image" class="w-10 h-10 rounded-full border-2 border-slate-600 object-cover">
                    <div>
                        <p class="text-sm font-bold text-white leading-tight">Kevin Nurachman</p>
                        <div class="flex items-center gap-1 mt-0.5">
                            <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                            <p class="text-[10px] text-slate-400 font-medium">Online</p>
                        </div>
                    </div>
                </div>
                
                <nav class="flex-1 py-4 px-2 space-y-1 overflow-y-auto">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3 py-3 rounded-md transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-[#673de6] text-white' : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">
                        <span class="text-sm font-medium">Dashboard</span>
                    </a>
                    <a href="{{ route('admin.produk.index') }}" class="flex items-center gap-3 px-3 py-3 rounded-md transition-all {{ request()->routeIs('admin.produk.*') || request()->routeIs('admin.produk.fitur.*') ? 'bg-[#673de6] text-white' : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">
                        <span class="text-sm font-medium">Jasa & Portofolio</span>
                    </a>
                    <a href="{{ route('admin.blog.index') }}" class="flex items-center gap-3 px-3 py-3 rounded-md transition-all {{ request()->routeIs('admin.blog.*') ? 'bg-[#673de6] text-white' : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">
                        <span class="text-sm font-medium">Kelola Blog</span>
                    </a>
                </nav>
            </div>
        </div>

        <!-- Dynamic Content -->
        <main class="flex-1 overflow-y-auto p-4 md:p-6 relative z-10">
            @yield('content')
        </main>
        
        <!-- Footer -->
        <footer class="bg-white border-t border-slate-200 p-4 flex items-center justify-between text-sm flex-shrink-0 text-slate-500">
            <div>
                <strong>Copyright &copy; 2026 <a href="{{ url('/') }}" class="text-[#673de6] hover:underline">K-SERV</a>.</strong> All rights reserved.
            </div>
            <div class="hidden sm:block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>

    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileCloseBtn = document.getElementById('mobile-close-btn');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const mobileSidebarContent = document.getElementById('mobile-sidebar-content');
        
        function openMobileMenu() {
            mobileSidebar.classList.remove('hidden');
            // small delay for transition
            setTimeout(() => {
                mobileSidebarContent.classList.remove('-translate-x-full');
            }, 10);
        }
        
        function closeMobileMenu() {
            mobileSidebarContent.classList.add('-translate-x-full');
            setTimeout(() => {
                mobileSidebar.classList.add('hidden');
            }, 300);
        }
        
        mobileMenuBtn.addEventListener('click', openMobileMenu);
        mobileCloseBtn.addEventListener('click', closeMobileMenu);
        mobileSidebar.addEventListener('click', (e) => {
            if(e.target === mobileSidebar) closeMobileMenu();
        });
    </script>
</body>
</html>
