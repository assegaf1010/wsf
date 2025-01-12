<section class="pt-12">
<div class="content-tentang text-center py-12">
        <h1 class="text-5xl font-extrabold text-gray-900">BERITA TERKINI</h1>
        <p class="text-gray-600 mt-4">Ikuti informasi terbaru seputar kegiatan, prestasi dan pembaruan dari dunia atlet renang</p>
    </div>

    <div class="container-berita1 mx-auto px-4 sm:px-6 lg:px-8 py-12 w-9/12">
        <div class="content-berita1 bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">{{$berita['title']}}</h1>
            <img src="{{$berita['img']}}" class="w-full h-64 object-cover rounded-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">Subjudul Artikel</h2>
            <p class="text-gray-700 mb-4">{{$berita['deskripsi']}}</p>
            <div class="kat-berita flex gap-4 mt-4">
                <a href="#" class="px-4 py-2 bg-blue-100 text-blue-600 rounded-lg">#agussedih</a>
                <a href="#" class="px-4 py-2 bg-blue-100 text-blue-600 rounded-lg">#agusmiftah</a>
                <a href="#" class="px-4 py-2 bg-blue-100 text-blue-600 rounded-lg">#agusbuntung</a>
            </div>
            <div class="berita-next-prev flex justify-between mt-8">
                <a href="#" class="text-blue-500 hover:text-blue-700">Berita sebelumnya</a>
                <a href="#" class="text-blue-500 hover:text-blue-700">Berita selanjutnya</a>
            </div>
        </div>

        <h2 class="text-2xl font-bold mt-12 mb-6">Berita Lainnya</h2>
        <div class="content-berita-lengkap grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            <div class="berita-2 bg-white shadow-lg rounded-lg overflow-hidden">
                <a href="/berita/berita1.html">
                    <img src="/asset/imgberita.png" class="w-full h-48 object-cover">
                </a>
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Berita Baru</h2>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                    <a href="/berita/berita1.html" class="text-blue-500 hover:text-blue-700">Lihat Selengkapnya →</a>
                </div>
            </div>
            <!-- Repeat Cards -->
            <div class="berita-2 bg-white shadow-lg rounded-lg overflow-hidden">
                <a href="/berita/berita1.html">
                    <img src="/asset/imgberita.png" class="w-full h-48 object-cover">
                </a>
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Berita Baru</h2>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                    <a href="/berita/berita1.html" class="text-blue-500 hover:text-blue-700">Lihat Selengkapnya →</a>
                </div>
            </div>
            <div class="berita-2 bg-white shadow-lg rounded-lg overflow-hidden">
                <a href="/berita/berita1.html">
                    <img src="/asset/imgberita.png" class="w-full h-48 object-cover">
                </a>
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Berita Baru</h2>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                    <a href="/berita/berita1.html" class="text-blue-500 hover:text-blue-700">Lihat Selengkapnya →</a>
                </div>
            </div>
        </div>
    </div>
</section>