<x-layout>

    <div class="relative bg-gradient-to-b from-green-50 via-white to-emerald-50 overflow-hidden">
        <div
            class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-gradient-to-br from-green-300 to-emerald-200 blur-[100px] opacity-30 animate-pulse">
        </div>
        <div
            class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 rounded-full bg-gradient-to-tr from-yellow-200 to-lime-200 blur-[80px] opacity-30">
        </div>

        <div class="container mx-auto px-6 md:px-16 lg:px-24 py-16 md:py-32 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <span
                        class="inline-block py-1 px-4 rounded-full bg-gradient-to-r from-green-100 to-emerald-100 border border-green-200 text-green-800 text-sm font-bold mb-6 tracking-wide shadow-sm">
                        🌱 KOMUNITAS RELAWAN DUNIA ECO ENZIM ( RDEE )
                    </span>
                    <h1 class="text-4xl md:text-7xl font-extrabold text-gray-900 mb-6 leading-tight">
                        Relawan Dunia <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-400">Eco
                            Enzim</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Bersama RDEE Medan Deli Serdang ubah sampah menjadi berkah untuk Bumi
                    </p>
                    <div class="flex flex-col md:flex-row gap-4 justify-center md:justify-start">
                        <a href="{{ route('produk.index') }}"
                            class="px-8 py-4 bg-gradient-to-r from-green-600 to-emerald-500 text-white rounded-full font-bold hover:from-green-700 hover:to-emerald-600 transition shadow-lg shadow-green-500/30 text-center transform hover:-translate-y-1 flex items-center justify-center gap-2">
                            Dapatkan Produk
                        </a>
                        <a href="{{ route('tentang') }}"
                            class="px-8 py-4 bg-white border-2 border-green-100 text-green-700 rounded-full font-bold hover:bg-green-50 hover:border-green-300 transition shadow-sm text-center">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <img src="https://placehold.co/400x600/166534/FFF?text=Kegiatan+1"
                                class="rounded-2xl shadow-2xl object-cover h-64 md:h-80 w-full transform hover:scale-105 transition duration-500 border-4 border-white">
                            <div class="bg-white/80 backdrop-blur-md p-4 rounded-2xl shadow-lg border border-green-100">
                                <p
                                    class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-600 text-2xl">
                                    50+</p>
                                <p class="text-xs text-gray-500 font-semibold uppercase">Relawan Aktif</p>
                            </div>
                        </div>
                        <div class="space-y-4 pt-8">
                            <img src="https://placehold.co/400x300/15803d/FFF?text=Produk+Eco"
                                class="rounded-2xl shadow-xl object-cover h-40 w-full transform hover:scale-105 transition duration-500 border-4 border-white">
                            <img src="https://placehold.co/400x400/14532d/FFF?text=Panen"
                                class="rounded-2xl shadow-2xl object-cover h-56 w-full transform hover:scale-105 transition duration-500 border-4 border-white">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16 md:py-24 border-t border-gray-100">
        <div class="container mx-auto px-6 md:px-16 lg:px-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-800 to-emerald-600">Berita &
                        Kegiatan</span>
                </h2>
                <p class="text-gray-500 text-lg">Ikuti perkembangan terbaru kami.</p>
            </div>

            @if ($posts->count() > 0)
                <div
                    class="relative overflow-hidden rounded-2xl md:rounded-[2.5rem] shadow-2xl h-[500px] md:h-[600px] group mb-12">
                    <div id="slider-track" class="flex transition-transform duration-700 ease-out h-full">
                        @foreach ($posts as $index => $post)
                            <div class="w-full flex-shrink-0 relative h-full">
                                <a href="{{ route('berita.show', $post->slug) }}" class="block w-full h-full relative">
                                    <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://placehold.co/1200x800/22543d/FFF?text=Berita' }}"
                                        class="w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black via-black/70 to-transparent flex flex-col justify-end p-6 pb-20 md:p-16 md:pb-16">
                                        <div class="w-full max-w-4xl px-2 md:px-0">
                                            <span
                                                class="bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full mb-3 inline-block shadow-md">{{ $post->created_at->format('d M Y') }}</span>
                                            <h3
                                                class="text-xl md:text-5xl font-bold text-white mb-2 md:mb-4 leading-tight drop-shadow-md line-clamp-2">
                                                {{ $post->title }}</h3>
                                            <p
                                                class="text-gray-300 text-sm md:text-lg line-clamp-2 md:line-clamp-3 mb-3 md:mb-6 leading-relaxed">
                                                {{ Str::limit(strip_tags($post->content), 200) }}</p>
                                            <span
                                                class="text-emerald-300 font-bold uppercase tracking-widest text-xs md:text-sm hover:text-white transition flex items-center gap-2">Baca
                                                Selengkapnya &rarr;</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="absolute bottom-4 md:bottom-8 left-0 right-0 flex justify-center gap-2 md:gap-3 z-20">
                        @foreach ($posts as $index => $post)
                            <button onclick="goToSlide({{ $index }})"
                                class="slider-dot w-2 h-2 md:w-3 md:h-3 rounded-full bg-white/30 hover:bg-white transition-all duration-300 {{ $index === 0 ? 'w-6 md:w-8 bg-emerald-500' : '' }}"></button>
                        @endforeach
                    </div>
                    <button onclick="prevSlide()"
                        class="absolute left-2 md:left-8 top-1/2 -translate-y-1/2 bg-white/10 backdrop-blur-md hover:bg-white/30 text-white p-2 md:p-4 rounded-full transition duration-300 z-30"><svg
                            class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg></button>
                    <button onclick="nextSlide()"
                        class="absolute right-2 md:right-8 top-1/2 -translate-y-1/2 bg-white/10 backdrop-blur-md hover:bg-white/30 text-white p-2 md:p-4 rounded-full transition duration-300 z-30"><svg
                            class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg></button>
                </div>
                <script>
                    let currentIndex = 0;
                    const track = document.getElementById('slider-track');
                    const dots = document.querySelectorAll('.slider-dot');
                    const totalSlides = {{ $posts->count() }};
                    let slideInterval;

                    function goToSlide(index) {
                        currentIndex = index;
                        updateSlider();
                        resetTimer();
                    }

                    function nextSlide() {
                        currentIndex = (currentIndex + 1) % totalSlides;
                        updateSlider();
                        resetTimer();
                    }

                    function prevSlide() {
                        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                        updateSlider();
                        resetTimer();
                    }

                    function updateSlider() {
                        track.style.transform = `translateX(-${currentIndex * 100}%)`;
                        dots.forEach((dot, idx) => {
                            if (idx === currentIndex) {
                                dot.classList.remove('w-2', 'w-3', 'bg-white/30');
                                dot.classList.add('w-6', 'md:w-8', 'bg-emerald-500');
                            } else {
                                dot.classList.add('w-2', 'md:w-3', 'bg-white/30');
                                dot.classList.remove('w-6', 'md:w-8', 'bg-emerald-500');
                            }
                        });
                    }

                    function startTimer() {
                        slideInterval = setInterval(nextSlide, 5000);
                    }

                    function resetTimer() {
                        clearInterval(slideInterval);
                        startTimer();
                    }
                    startTimer();
                </script>

                <div class="text-center">
                    <a href="{{ route('berita.index') }}"
                        class="inline-block px-10 py-3 rounded-full border-2 border-green-600 text-green-700 font-bold hover:bg-gradient-to-r hover:from-green-600 hover:to-emerald-500 hover:text-white hover:border-transparent transition uppercase tracking-wider text-sm">
                        Lihat Arsip Berita
                    </a>
                </div>
            @endif
        </div>
    </div>

    <div class="container mx-auto px-6 md:px-16 lg:px-24 py-16 md:py-24">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="https://placehold.co/800x600/22543d/FFF?text=Tentang+RDEE"
                    class="rounded-[3rem] shadow-2xl rotate-2 hover:rotate-0 transition duration-500 border-8 border-white bg-green-100">
            </div>
            <div class="md:w-1/2">
                <span class="text-green-600 font-bold tracking-widest text-sm uppercase mb-2 block">Tentang Kami</span>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">Membangun Ekosistem
                    Berkelanjutan</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    RDEE hadir sebagai wadah bagi masyarakat yang peduli lingkungan. Kami fokus pada edukasi, pelatihan,
                    dan pengembangan produk berbasis Eco Enzim untuk kesejahteraan bersama.
                </p>
                <a href="{{ route('tentang') }}"
                    class="inline-block px-8 py-3 border-2 border-green-600 text-green-700 font-bold rounded-full hover:bg-green-600 hover:text-white transition uppercase tracking-wider text-sm">
                    Baca Profil Lengkap &rarr;
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-b from-green-50 to-white py-16 md:py-24">
        <div class="container mx-auto px-6 md:px-16 lg:px-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-800 to-emerald-600">Katalog
                        Produk</span>
                </h2>
                <p class="text-gray-500 text-lg">Produk olahan berkualitas dari komunitas.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8 mb-12">
                @foreach ($products as $product)
                    <div
                        class="bg-white rounded-3xl p-4 shadow-lg hover:shadow-2xl transition group duration-300 border border-green-50">
                        <div class="aspect-square bg-gray-100 rounded-2xl mb-5 overflow-hidden relative">
                            <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/400x400/f0fff4/22543d?text=Produk' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        </div>
                        <h3 class="font-bold text-gray-800 text-sm md:text-lg line-clamp-1 mb-1">{{ $product->name }}
                        </h3>
                        <p
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-500 font-black text-lg md:text-xl">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <a href="{{ route('produk.show', $product->slug) }}"
                            class="mt-4 block w-full py-2 text-center bg-white border-2 border-green-600 text-green-700 rounded-xl hover:bg-green-600 hover:text-white transition text-xs md:text-sm font-bold uppercase tracking-wide">
                            Lihat Detail
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('produk.index') }}"
                    class="inline-block px-10 py-3 rounded-full border-2 border-green-600 text-green-700 font-bold hover:bg-gradient-to-r hover:from-green-600 hover:to-emerald-500 hover:text-white hover:border-transparent transition uppercase tracking-wider text-sm">
                    Lihat Semua Produk
                </a>
            </div>
        </div>
    </div>

    <div class="bg-green-50 py-16 md:py-24">
        <div class="container mx-auto px-6 md:px-16 lg:px-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">Tim Pengurus</h2>
                <p class="text-gray-500 text-lg">Mengenal orang-orang di balik RDEE.</p>
            </div>

            @if ($teams->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 max-w-5xl mx-auto">
                    @foreach ($teams as $team)
                        <div
                            class="text-center group bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-2xl transition duration-300 border border-transparent hover:border-green-200 flex flex-col items-center">
                            <div class="w-28 h-28 md:w-36 md:h-36 mb-6 relative">
                                <div
                                    class="absolute inset-0 bg-green-200 rounded-full blur-xl opacity-0 group-hover:opacity-50 transition duration-500">
                                </div>

                                <img src="{{ $team->image ? asset('storage/' . $team->image) : 'https://placehold.co/400x400/e2e8f0/1a202c?text=Foto' }}"
                                    class="w-full h-full object-cover rounded-full border-4 border-white shadow-md relative z-10 transform group-hover:scale-105 transition duration-500">
                            </div>

                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $team->name }}</h3>
                            <p
                                class="text-green-600 text-xs font-bold uppercase tracking-widest bg-green-50 px-3 py-1 rounded-full">
                                {{ $team->position }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <a href="{{ route('pengurus.index') }}"
                        class="inline-block px-8 py-3 bg-white text-green-700 border border-green-200 font-bold rounded-full hover:bg-green-600 hover:text-white transition shadow-sm hover:shadow-lg text-sm uppercase tracking-wide">
                        Lihat Seluruh Pengurus
                    </a>
                </div>
            @endif
        </div>
    </div>

    <div class="container mx-auto px-6 md:px-16 lg:px-24 py-16 md:py-24">
        <div
            class="bg-gradient-to-r from-green-900 to-emerald-800 rounded-[3rem] overflow-hidden shadow-2xl flex flex-col md:flex-row text-white relative">
            <div
                class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
            </div>

            <div class="md:w-1/2 p-10 md:p-20 flex flex-col justify-center relative z-10">
                <span class="text-emerald-300 font-bold tracking-widest text-sm mb-4">DEMPLOT & EDUKASI</span>
                <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">Lihat Bukti Nyata Manfaat Eco Enzim</h2>
                <p class="text-emerald-100 mb-10 text-lg leading-relaxed">
                    Kami memiliki lahan percontohan (Demplot) yang membuktikan kesuburan tanah dengan pupuk organik cair
                    buatan komunitas.
                </p>
                <div>
                    <a href="{{ route('demplot') }}"
                        class="inline-block px-8 py-4 bg-white text-green-900 rounded-full font-bold hover:bg-emerald-50 transition text-center shadow-lg">
                        Kunjungi Demplot &rarr;
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 relative min-h-[300px]">
                <img src="https://placehold.co/800x800/064e3b/FFF?text=Foto+Demplot"
                    class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-60">
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 md:px-16 lg:px-24 py-16 md:py-24">
        <div class="bg-green-100 rounded-[3rem] p-10 md:p-20 text-center relative overflow-hidden">
            <div class="relative z-10">
                <h2 class="text-3xl md:text-5xl font-bold text-green-900 mb-6">Punya Pertanyaan Lain?</h2>
                <p class="text-green-800 text-lg mb-10 max-w-2xl mx-auto">
                    Jangan ragu untuk menghubungi kami jika Anda ingin bertanya tentang cara pembuatan Eco Enzim atau
                    cara bergabung.
                </p>
                <a href="{{ route('kontak') }}"
                    class="inline-block px-10 py-4 bg-green-600 text-white rounded-full font-bold hover:bg-green-700 transition shadow-lg hover:shadow-green-500/30">
                    Hubungi Kami &rarr;
                </a>
            </div>
            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-40 rounded-full blur-3xl -mr-16 -mt-16">
            </div>
            <div
                class="absolute bottom-0 left-0 w-64 h-64 bg-green-300 opacity-40 rounded-full blur-3xl -ml-16 -mb-16">
            </div>
        </div>
    </div>

</x-layout>
