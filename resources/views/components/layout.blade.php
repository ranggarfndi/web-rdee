<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDEE - Relawan Dunia Eco Enzim</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50 flex flex-col min-h-screen">

    <nav class="bg-gradient-to-r from-green-900 via-green-800 to-emerald-700 text-white shadow-xl sticky top-0 z-50 border-b border-green-600/30">
        <div class="container mx-auto px-6 md:px-16 lg:px-24"> 
            <div class="flex justify-between items-center h-20">
                
                <a href="{{ route('home') }}" class="font-bold text-2xl tracking-wider flex items-center gap-3 hover:text-emerald-200 transition group">
                    <img src="{{ asset('images/logo-rdee.png') }}" 
                        alt="Logo RDEE" 
                        class="h-10 w-auto object-contain group-hover:rotate-12 transition transform duration-300 drop-shadow-md">
                    
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-white to-green-200">RDEE</span>
                </a>

                <div class="hidden lg:flex space-x-8 text-sm font-bold uppercase tracking-wide items-center">
                    <a href="{{ route('home') }}" class="hover:text-emerald-300 transition {{ request()->routeIs('home') ? 'text-emerald-300' : '' }}">Beranda</a>
                    <a href="{{ route('tentang') }}" class="hover:text-emerald-300 transition {{ request()->routeIs('tentang') ? 'text-emerald-300' : '' }}">Tentang</a>
                    <a href="{{ route('pengurus.index') }}" class="hover:text-emerald-300 transition {{ request()->routeIs('pengurus.*') ? 'text-emerald-300' : '' }}">Pengurus</a>
                    <a href="{{ route('demplot') }}" class="hover:text-emerald-300 transition {{ request()->routeIs('demplot') ? 'text-emerald-300' : '' }}">Demplot</a>
                    <a href="{{ route('berita.index') }}" class="hover:text-emerald-300 transition {{ request()->routeIs('berita.*') ? 'text-emerald-300' : '' }}">Berita</a>
                    <a href="{{ route('produk.index') }}" class="hover:text-emerald-300 transition {{ request()->routeIs('produk.*') ? 'text-emerald-300' : '' }}">Produk</a>
                    <a href="{{ route('kontak') }}" class="hover:text-emerald-300 transition {{ request()->routeIs('kontak') ? 'text-emerald-300' : '' }}">Kontak</a>
                </div>

                <div class="lg:hidden">
                    <button id="mobile-menu-btn" class="text-white focus:outline-none p-2">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-green-900 border-t border-green-800 px-6 py-4 space-y-4 shadow-inner">
            <a href="{{ route('home') }}" class="block text-white hover:text-emerald-300 border-b border-green-800 pb-2">Beranda</a>
            <a href="{{ route('tentang') }}" class="block text-white hover:text-emerald-300 border-b border-green-800 pb-2">Tentang Kami</a>
            <a href="{{ route('pengurus.index') }}" class="block text-emerald-200 font-bold hover:text-emerald-300 border-b border-green-800 pb-2">Pengurus</a>
            <a href="{{ route('demplot') }}" class="block text-white hover:text-emerald-300 border-b border-green-800 pb-2">Demplot</a>
            <a href="{{ route('berita.index') }}" class="block text-white hover:text-emerald-300 border-b border-green-800 pb-2">Berita</a>
            <a href="{{ route('produk.index') }}" class="block text-white hover:text-emerald-300 border-b border-green-800 pb-2">Produk</a>
            <a href="{{ route('kontak') }}" class="block text-white hover:text-emerald-300 border-b border-green-800 pb-2">Kontak</a>
        </div>
    </nav>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-gradient-to-br from-gray-900 to-green-950 text-white py-16 mt-0 border-t-4 border-emerald-600">
        <div class="container mx-auto px-6 md:px-16 lg:px-24 text-center">
            
            <h3 class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                Relawan Dunia Eco Enzim (RDEE)
            </h3>
            <p class="text-gray-400 text-sm mb-10 max-w-xl mx-auto leading-relaxed">
                Menjaga bumi dengan sejuta manfaat Eco Enzim. Bergabunglah bersama kami untuk masa depan yang lebih hijau.
            </p>
            
            <div class="flex flex-wrap justify-center gap-x-8 gap-y-4 mb-10 text-sm font-medium text-gray-300">
                <a href="{{ route('home') }}" class="hover:text-emerald-400 transition">Beranda</a>
                <a href="{{ route('tentang') }}" class="hover:text-emerald-400 transition">Tentang Kami</a>
                <a href="{{ route('pengurus.index') }}" class="hover:text-emerald-400 transition">Pengurus</a>
                <a href="{{ route('demplot') }}" class="hover:text-emerald-400 transition">Demplot</a>
                <a href="{{ route('berita.index') }}" class="hover:text-emerald-400 transition">Berita</a>
                <a href="{{ route('produk.index') }}" class="hover:text-emerald-400 transition">Produk</a>
                <a href="{{ route('kontak') }}" class="hover:text-emerald-400 transition">Kontak</a>
            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 gap-4">
                <span>&copy; {{ date('Y') }} RDEE. All rights reserved.</span>
                
                <a href="/admin" target="_blank" class="flex items-center gap-1 hover:text-emerald-500 transition">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    Login Pengurus
                </a>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>