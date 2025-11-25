<x-layout>
    <div class="bg-gradient-to-b from-green-50 to-white min-h-screen">
        
        <div class="container mx-auto px-6 md:px-12 lg:px-24 py-8 md:py-16">
            
            <nav class="flex items-center text-xs md:text-sm text-gray-500 mb-6 space-x-2 overflow-x-auto whitespace-nowrap pb-2">
                <a href="/" class="hover:text-green-600 transition">Beranda</a>
                <svg class="w-3 h-3 text-gray-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="{{ route('produk.index') }}" class="hover:text-green-600 transition">Katalog</a>
                <svg class="w-3 h-3 text-gray-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="text-green-700 font-bold truncate">{{ Str::limit($product->name, 20) }}</span>
            </nav>

            <div class="bg-white rounded-2xl md:rounded-[2.5rem] shadow-xl border border-green-100 overflow-hidden">
                
                <div class="flex flex-col lg:flex-row">
                    
                    <div class="w-full lg:w-1/2 p-6 md:p-10 lg:p-12 bg-gray-50 flex items-center justify-center relative group">
                        <div class="hidden md:block absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-30"></div>
                        
                        <div class="relative w-full max-w-sm lg:max-w-md aspect-square bg-white rounded-2xl md:rounded-3xl shadow-lg overflow-hidden border-4 border-white transition-transform duration-500 hover:shadow-green-200">
                            <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/600x600/f0fff4/22543d?text=Produk+RDEE' }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700"
                                 alt="{{ $product->name }}">
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 p-6 md:p-10 lg:p-16 flex flex-col justify-center">
                        
                        <div class="mb-3 md:mb-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] md:text-xs font-bold bg-green-100 text-green-700 border border-green-200 shadow-sm">
                                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-green-500 mr-1.5 animate-pulse"></span>
                                READY STOCK
                            </span>
                        </div>

                        <h1 class="text-2xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 mb-3 md:mb-4 leading-tight tracking-tight">
                            {{ $product->name }}
                        </h1>
                        
                        <div class="flex items-baseline gap-2 mb-6 md:mb-8 border-b border-gray-100 pb-6 md:pb-8">
                            <span class="text-3xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-500">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                            <span class="text-gray-400 text-xs md:text-sm font-medium">/ pcs</span>
                        </div>

                        <div class="grid grid-cols-3 gap-2 md:gap-4 mb-6 md:mb-8">
                            <div class="text-center p-2 md:p-3 bg-green-50 rounded-lg md:rounded-xl border border-green-100">
                                <div class="text-xl md:text-2xl mb-1">🌿</div>
                                <div class="text-[8px] md:text-xs font-bold text-green-800 uppercase leading-tight">100% Organik</div>
                            </div>
                            <div class="text-center p-2 md:p-3 bg-green-50 rounded-lg md:rounded-xl border border-green-100">
                                <div class="text-xl md:text-2xl mb-1">♻️</div>
                                <div class="text-[8px] md:text-xs font-bold text-green-800 uppercase leading-tight">Ramah Lingkungan</div>
                            </div>
                            <div class="text-center p-2 md:p-3 bg-green-50 rounded-lg md:rounded-xl border border-green-100">
                                <div class="text-xl md:text-2xl mb-1">🤝</div>
                                <div class="text-[8px] md:text-xs font-bold text-green-800 uppercase leading-tight">Karya Komunitas</div>
                            </div>
                        </div>

                        <div class="prose prose-green prose-sm md:prose-base text-gray-600 mb-8 leading-relaxed max-w-none">
                            <h3 class="text-gray-900 font-bold text-base md:text-lg mb-2">Deskripsi Produk</h3>
                            <div class="text-sm md:text-base">
                                {!! $product->description ?? 'Tidak ada deskripsi.' !!}
                            </div>
                        </div>

                        <div class="mt-auto space-y-3 md:space-y-4">
                            <a href="https://wa.me/{{ config('rdee.whatsapp') }}?text=Halo%20RDEE,%20saya%20ingin%20memesan%20produk:%20{{ $product->name }}" 
                               target="_blank"
                               class="w-full flex items-center justify-center gap-2 md:gap-3 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-bold text-base md:text-lg py-3 md:py-4 rounded-xl shadow-lg shadow-green-500/30 hover:shadow-green-500/50 hover:from-green-700 hover:to-emerald-700 transform hover:-translate-y-1 transition duration-300">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                                Pesan Sekarang via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @if($related->count() > 0)
            <div class="mt-12 md:mt-20">
                <div class="flex items-center justify-between mb-6 md:mb-8">
                    <h3 class="text-xl md:text-3xl font-bold text-gray-800">Mungkin Anda Suka</h3>
                    <a href="{{ route('produk.index') }}" class="text-green-600 font-bold text-xs md:text-sm hover:underline">Lihat Semua</a>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-6 lg:gap-8">
                    @foreach($related as $item)
                    <a href="{{ route('produk.show', $item->slug) }}" class="group">
                        <div class="bg-white rounded-xl md:rounded-2xl p-3 shadow-md hover:shadow-xl transition duration-300 border border-transparent hover:border-green-200">
                            <div class="aspect-square bg-gray-100 rounded-lg mb-3 overflow-hidden">
                                <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://placehold.co/300x300/f0fff4/22543d?text=Produk' }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            </div>
                            <h4 class="font-bold text-gray-800 text-xs md:text-base line-clamp-1 mb-1 group-hover:text-green-700">
                                {{ $item->name }}
                            </h4>
                            <p class="text-green-600 font-bold text-sm md:text-base">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </div>
</x-layout>