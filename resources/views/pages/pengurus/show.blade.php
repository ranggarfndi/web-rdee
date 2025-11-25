<x-layout>
    <div class="bg-gradient-to-br from-green-50 to-white min-h-screen flex items-center justify-center py-16 px-4">
        
        <div class="bg-white rounded-[2.5rem] shadow-2xl overflow-hidden max-w-4xl w-full border border-green-50 flex flex-col md:flex-row">
            
            <div class="md:w-2/5 bg-green-900 p-10 flex items-center justify-center relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-green-500 rounded-full blur-3xl opacity-50"></div>
                
                <div class="relative z-10 w-48 h-48 md:w-64 md:h-64 rounded-full p-2 border-2 border-green-400/30">
                    <img src="{{ $team->image ? asset('storage/' . $team->image) : 'https://placehold.co/600x600/e2e8f0/1a202c?text=Foto' }}" 
                         class="w-full h-full object-cover rounded-full border-4 border-green-800 shadow-2xl">
                </div>
            </div>

            <div class="md:w-3/5 p-10 md:p-16 flex flex-col justify-center">
                
                <nav class="mb-8">
                    <a href="{{ route('pengurus.index') }}" class="text-sm text-gray-400 hover:text-green-600 flex items-center gap-2 transition">
                        &larr; Kembali ke Daftar
                    </a>
                </nav>

                <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold w-fit mb-4">
                    {{ $team->position }}
                </span>

                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $team->name }}
                </h1>

                <div class="space-y-4 text-gray-600">
                    <p>
                        Merupakan bagian penting dari keluarga besar RDEE. Berdedikasi dalam menjalankan tugas sebagai <strong>{{ $team->position }}</strong> untuk kemajuan komunitas dan pelestarian lingkungan.
                    </p>
                    <p class="text-sm italic text-gray-400">
                        "Bergabung dengan RDEE adalah langkah kecil untuk perubahan besar bagi bumi kita."
                    </p>
                </div>

                <div class="mt-10 pt-8 border-t border-gray-100 flex gap-4">
                    <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-green-600 hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 hover:bg-green-600 hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </button>
                </div>

            </div>
        </div>

    </div>
</x-layout>