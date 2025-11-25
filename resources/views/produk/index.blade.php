<x-layout>
    <div class="bg-gradient-to-r from-green-800 to-emerald-600 py-16 md:py-24 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl -mr-16 -mt-16"></div>

        <div class="container mx-auto px-8 md:px-24 text-center relative z-10">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 drop-shadow-md">Katalog Produk Eco Enzim</h1>
            <p class="text-emerald-100 max-w-2xl mx-auto text-lg">
                Solusi alami untuk kesehatan dan kebersihan rumah tangga.
                Dibuat dari bahan organik pilihan oleh komunitas RDEE.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-8 md:px-24 py-16 bg-white">

        @if ($products->count() > 0)
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">
                @foreach ($products as $product)
                    <div
                        class="bg-white rounded-3xl p-4 shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 group flex flex-col h-full">

                        <div class="aspect-square bg-gray-50 rounded-2xl mb-5 overflow-hidden relative">
                            <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/400x400/f0fff4/22543d?text=Produk' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                            <div
                                class="absolute top-3 right-3 bg-white/90 backdrop-blur text-green-700 text-xs font-bold px-2 py-1 rounded-lg shadow-sm">
                                Ready Stock
                            </div>
                        </div>

                        <div class="flex-grow flex flex-col">
                            <h3
                                class="font-bold text-gray-800 text-base md:text-lg leading-tight mb-2 group-hover:text-green-600 transition">
                                {{ $product->name }}
                            </h3>

                            <p class="text-gray-500 text-sm line-clamp-2 mb-4">
                                {{ Str::limit(strip_tags($product->description ?? 'Produk berkualitas tinggi dari RDEE.'), 60) }}
                            </p>

                            <div class="mt-auto">
                                <p
                                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-500 font-black text-lg md:text-xl mb-4">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </p>

                                <a href="{{ route('produk.show', $product->slug) }}"
                                    class="block w-full py-3 text-center border-2 border-green-600 text-green-700 rounded-xl hover:bg-green-600 hover:text-white transition text-sm font-bold flex items-center justify-center gap-2">
                                    Lihat Detail &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-16">
                {{ $products->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <div class="text-6xl mb-4">🍂</div>
                <h3 class="text-2xl font-bold text-gray-600 mb-2">Belum ada produk</h3>
                <p class="text-gray-500">Nantikan update produk terbaru dari kami.</p>
            </div>
        @endif

    </div>

    <div class="bg-green-50 py-16">
        <div class="container mx-auto px-8 md:px-24 text-center">
            <h2 class="text-2xl font-bold text-green-800 mb-4">Ingin menjadi Reseller?</h2>
            <p class="text-gray-600 mb-8">Dapatkan harga khusus untuk pembelian dalam jumlah banyak dan bantu kami
                menyebarkan manfaat Eco Enzim.</p>
            <a href="/kontak"
                class="inline-block px-8 py-3 border-2 border-green-600 text-green-700 font-bold rounded-full hover:bg-green-600 hover:text-white transition">
                Hubungi Kami
            </a>
        </div>
    </div>
</x-layout>
