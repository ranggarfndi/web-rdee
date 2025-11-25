<x-layout>
    <div class="relative h-[400px] md:h-[500px]">
        <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://placehold.co/1200x600/22543d/FFF?text=Detail+Berita' }}" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
            <div class="container mx-auto px-8 md:px-24 text-center">
                <span class="bg-green-600 text-white px-3 py-1 rounded-full text-xs font-bold mb-4 inline-block">
                    {{ $post->created_at->format('d F Y') }}
                </span>
                <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight max-w-4xl mx-auto">
                    {{ $post->title }}
                </h1>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-8 md:px-24 py-16 flex flex-col md:flex-row gap-12">
        
        <div class="md:w-2/3">
            <div class="prose prose-lg prose-green max-w-none text-gray-700 leading-relaxed">
                {!! $post->content !!}
            </div>
            
            <div class="mt-10 border-t pt-8">
                <a href="{{ route('berita.index') }}" class="text-gray-500 hover:text-green-700 font-bold flex items-center gap-2">
                    &larr; Kembali ke Daftar Berita
                </a>
            </div>
        </div>

        <div class="md:w-1/3">
            <div class="bg-green-50 p-8 rounded-2xl sticky top-24">
                <h3 class="text-xl font-bold text-green-900 mb-6 border-b border-green-200 pb-2">Berita Lainnya</h3>
                <div class="space-y-6">
                    @foreach($terkait as $item)
                    <div class="flex gap-4 group">
                        <div class="w-20 h-20 flex-shrink-0 overflow-hidden rounded-lg">
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://placehold.co/150x150/22543d/FFF' }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition">
                        </div>
                        <div>
                            <span class="text-xs text-green-600 block mb-1">{{ $item->created_at->format('d M Y') }}</span>
                            <a href="{{ route('berita.show', $item->slug) }}" class="font-bold text-gray-800 leading-tight hover:text-green-700 transition line-clamp-2">
                                {{ $item->title }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</x-layout>