<x-layout>
    <div class="bg-green-50 py-16 md:py-24">
        <div class="container mx-auto px-8 md:px-24 text-center">
            <h1 class="text-3xl md:text-5xl font-bold text-green-900 mb-4">Arsip Berita & Kegiatan</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Kumpulan informasi terbaru seputar kegiatan RDEE dalam menjaga lingkungan.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-8 md:px-24 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition overflow-hidden group border border-gray-100 flex flex-col h-full">
                <a href="{{ route('berita.show', $post->slug) }}" class="h-56 overflow-hidden relative">
                    <img src="{{ $post->image ? asset('storage/' . $post->image) : 'https://placehold.co/600x400/22543d/FFF?text=RDEE' }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </a>
                
                <div class="p-6 flex flex-col flex-grow">
                    <span class="text-xs font-bold text-green-600 mb-2 uppercase tracking-wide">
                        {{ $post->created_at->format('d M Y') }}
                    </span>
                    <a href="{{ route('berita.show', $post->slug) }}" class="text-xl font-bold text-gray-800 mb-3 hover:text-green-700 transition line-clamp-2">
                        {{ $post->title }}
                    </a>
                    <p class="text-gray-500 text-sm line-clamp-3 mb-6 flex-grow">
                        {{ Str::limit(strip_tags($post->content), 120) }}
                    </p>
                    <a href="{{ route('berita.show', $post->slug) }}" class="text-green-700 font-bold text-sm hover:underline mt-auto">
                        BACA SELENGKAPNYA &rarr;
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-12">
            {{ $posts->links() }}
        </div>
    </div>
</x-layout>