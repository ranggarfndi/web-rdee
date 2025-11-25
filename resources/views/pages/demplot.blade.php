<x-layout>
    <div class="relative py-20 md:py-32 bg-green-900 overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://placehold.co/1920x800/14532d/FFF?text=Kebun+Demplot" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-t from-green-900 to-transparent"></div>
        </div>
        <div class="container mx-auto px-8 md:px-24 relative z-10 text-center text-white">
            <span class="text-emerald-400 font-bold tracking-widest uppercase text-sm mb-4 block">Edukasi & Penerapan</span>
            <h1 class="text-3xl md:text-6xl font-bold mb-6 leading-tight">Demplot & Bank Eco Enzim</h1>
            <p class="text-xl text-green-100 max-w-3xl mx-auto font-light leading-relaxed">
                Pusat percontohan dan penyimpanan Eco Enzim untuk kebermanfaatan lingkungan sekitar.
            </p>
        </div>
    </div>

    <div class="container mx-auto px-8 md:px-24 py-16 md:py-24">
        <div class="flex flex-col md:flex-row items-center gap-12 md:gap-20">
            <div class="md:w-1/2">
                <div class="relative">
                    <div class="absolute inset-0 bg-green-200 rounded-[3rem] transform rotate-3"></div>
                    <img src="https://placehold.co/800x600/166534/FFF?text=Kegiatan+Demplot" class="relative rounded-[3rem] shadow-2xl border-4 border-white transform -rotate-2 hover:rotate-0 transition duration-500">
                </div>
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-6">Apa itu Demplot?</h2>
                <div class="prose prose-lg text-gray-600 leading-relaxed">
                    <p class="mb-4">
                        <strong>Demplot (Demonstration Plot)</strong> adalah lahan percontohan yang kami gunakan untuk membuktikan manfaat nyata Eco Enzim pada tanaman dan tanah.
                    </p>
                    <p class="mb-4">
                        Di sini, masyarakat bisa melihat langsung perbandingan tanaman yang menggunakan pupuk Eco Enzim versus pupuk kimia. Hasilnya? Tanaman lebih subur, tanah lebih gembur, dan pastinya lebih sehat untuk dikonsumsi.
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-green-800 font-medium">
                        <li>Sarana edukasi pertanian organik.</li>
                        <li>Tempat pelatihan pembuatan pupuk cair.</li>
                        <li>Bukti nyata efektivitas Eco Enzim.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green-50 py-16 md:py-24">
        <div class="container mx-auto px-8 md:px-24">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12 md:gap-20">
                <div class="md:w-1/2">
                    <div class="relative">
                        <div class="absolute inset-0 bg-yellow-200 rounded-[3rem] transform -rotate-3"></div>
                        <img src="https://placehold.co/800x600/b45309/FFF?text=Bank+Eco+Enzim" class="relative rounded-[3rem] shadow-2xl border-4 border-white transform rotate-2 hover:rotate-0 transition duration-500">
                    </div>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-green-900 mb-6">Mengenal Bank Eco Enzim</h2>
                    <div class="prose prose-lg text-gray-600 leading-relaxed">
                        <p class="mb-4">
                            Layaknya bank konvensional, <strong>Bank Eco Enzim</strong> adalah tempat di mana relawan menyetorkan hasil panen Eco Enzim mereka untuk disimpan dan didistribusikan saat dibutuhkan.
                        </p>
                        <p class="mb-4">
                            Stok ini digunakan untuk kegiatan sosial, seperti penyemprotan disinfektan alami, pembersihan sungai, atau bantuan untuk petani yang membutuhkan pupuk namun terkendala biaya.
                        </p>
                        <div class="bg-white p-6 rounded-2xl border border-green-200 shadow-sm mt-6">
                            <h4 class="font-bold text-green-800 mb-2">Fungsi Utama:</h4>
                            <p class="text-sm">Sentra logistik untuk bencana alam, kebersihan lingkungan, dan pertanian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-8 md:px-24 py-16 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Ingin Berkunjung ke Demplot Kami?</h2>
        <a href="https://wa.me/{{ config('rdee.whatsapp') }}?text=Halo%20Admin,%20saya%20ingin%20berkunjung%20ke%20Demplot" target="_blank" class="inline-block px-8 py-3 bg-green-600 text-white rounded-full font-bold hover:bg-green-700 transition">
            Jadwalkan Kunjungan
        </a>
    </div>
</x-layout>