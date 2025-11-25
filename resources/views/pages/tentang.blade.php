<x-layout>
    <div class="relative py-20 md:py-32 bg-green-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-3.png') }}" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-t from-green-900 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-8 md:px-24 relative z-10 text-center text-white">
            <span class="text-emerald-400 font-bold tracking-widest uppercase text-sm mb-4 block animate-fade-in-up">Profil Komunitas</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">Mengenal Lebih Dekat RDEE</h1>
            <p class="text-xl text-green-100 max-w-3xl mx-auto font-light leading-relaxed">
                Relawan Dunia Eco Enzim adalah gerakan sosial yang berdedikasi untuk memulihkan bumi melalui pengolahan sampah organik yang berkelanjutan.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-8 md:px-24 py-16 md:py-24">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2">
                <img src="https://placehold.co/800x600/22543d/FFF?text=Kegiatan+Sosial" class="rounded-[2.5rem] shadow-2xl rotate-2 hover:rotate-0 transition duration-500 border-8 border-white">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-6">Visi & Misi Kami</h2>
                <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
                    <p>
                        Berawal dari kepedulian terhadap tumpukan sampah organik di pasar dan rumah tangga, RDEE terbentuk untuk memberikan solusi nyata. Kami percaya bahwa sampah bukanlah akhir, melainkan awal dari sesuatu yang bermanfaat.
                    </p>
                    <ul class="space-y-4 mt-4">
                        <li class="flex items-start gap-3">
                            <span class="bg-green-100 text-green-700 p-1 rounded-full text-xs mt-1">✅</span>
                            <span>Mengedukasi masyarakat tentang pembuatan Eco Enzim.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="bg-green-100 text-green-700 p-1 rounded-full text-xs mt-1">✅</span>
                            <span>Membangun demplot percontohan di berbagai daerah.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="bg-green-100 text-green-700 p-1 rounded-full text-xs mt-1">✅</span>
                            <span>Meningkatkan ekonomi anggota melalui produk turunan.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green-50 py-16 md:py-24">
        <div class="container mx-auto px-8 md:px-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-4">Pengurus Inti</h2>
                <p class="text-gray-500">Mengenal tim di balik layar RDEE.</p>
            </div>

            @if($teams->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    @foreach($teams as $team)
                    <div class="text-center group bg-white p-6 rounded-2xl shadow-sm hover:shadow-lg transition border border-green-100">
                        <div class="relative w-24 h-24 mx-auto mb-4">
                            <img src="{{ $team->image ? asset('storage/' . $team->image) : 'https://placehold.co/400x400/e2e8f0/1a202c?text=Foto' }}" 
                                 class="w-full h-full object-cover rounded-full border-2 border-green-500 p-1 shadow-md group-hover:scale-105 transition duration-300">
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-1">{{ $team->name }}</h3>
                        <p class="text-green-600 text-xs font-bold uppercase tracking-wider mb-4">{{ $team->position }}</p>
                        
                        <a href="{{ route('pengurus.show', $team->id) }}" class="text-xs text-gray-400 hover:text-green-600 underline">Lihat Profil</a>
                    </div>
                    @endforeach
                </div>

                <div class="mt-12 text-center">
                    <a href="{{ route('pengurus.index') }}" class="inline-block px-8 py-3 border border-green-600 text-green-700 rounded-full font-bold hover:bg-green-600 hover:text-white transition text-sm">
                        Lihat Seluruh Pengurus &rarr;
                    </a>
                </div>
            @else
                <p class="text-center text-gray-500">Data pengurus belum diinput.</p>
            @endif
        </div>
    </div>

    <div class="container mx-auto px-8 md:px-24 py-16 md:py-24 text-center">
        <div class="bg-gradient-to-r from-green-600 to-emerald-500 rounded-3xl p-10 md:p-20 text-white shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -mr-16 -mt-16 blur-3xl"></div>
            
            <h2 class="text-3xl md:text-5xl font-bold mb-6 relative z-10">Ingin Bergabung Menjadi Relawan?</h2>
            <p class="text-green-100 text-lg mb-8 max-w-2xl mx-auto relative z-10">
                Mari berkontribusi langsung untuk lingkungan. Dapatkan pelatihan gratis dan jaringan pertemanan yang positif.
            </p>
            <a href="https://wa.me/{{ config('rdee.whatsapp') }}?text=Halo%20Admin,%20saya%20ingin%20bergabung%20jadi%20relawan%20RDEE" target="_blank"
               class="inline-block px-10 py-4 bg-white text-green-700 font-bold rounded-full hover:bg-green-50 transition shadow-lg relative z-10">
                Hubungi Kami via WhatsApp
            </a>
        </div>
    </div>
</x-layout>