<x-layout>
    <div class="bg-green-50 py-16 md:py-24 min-h-screen">
        <div class="container mx-auto px-8 md:px-24">
            
            <div class="text-center mb-16">
                <span class="text-green-600 font-bold tracking-widest text-sm uppercase">Keluarga Besar RDEE</span>
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mt-2 mb-6">Struktur Organisasi</h1>
                <p class="text-gray-500 max-w-2xl mx-auto">
                    Orang-orang yang berdedikasi meluangkan waktu dan tenaga untuk keberlangsungan komunitas dan lingkungan.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                @foreach($teams as $team)
                <a href="{{ route('pengurus.show', $team->id) }}" class="group block">
                    <div class="bg-white rounded-3xl p-6 text-center shadow-lg hover:shadow-2xl transition duration-300 border border-transparent hover:border-green-200 h-full flex flex-col items-center">
                        
                        <div class="w-28 h-28 md:w-32 md:h-32 mb-6 relative">
                            <div class="absolute inset-0 bg-green-100 rounded-full transform rotate-6 group-hover:rotate-12 transition"></div>
                            <img src="{{ $team->image ? asset('storage/' . $team->image) : 'https://placehold.co/400x400/e2e8f0/1a202c?text=Foto' }}" 
                                 class="w-full h-full object-cover rounded-full border-4 border-white shadow-md relative z-10">
                        </div>

                        <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-1 group-hover:text-green-600 transition">{{ $team->name }}</h3>
                        <p class="text-green-500 text-xs md:text-sm font-bold uppercase tracking-wider mb-4">{{ $team->position }}</p>
                        
                        <div class="mt-auto pt-4 border-t w-full border-gray-100">
                            <span class="text-xs text-gray-400 group-hover:text-green-600 transition flex items-center justify-center gap-1">
                                Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>