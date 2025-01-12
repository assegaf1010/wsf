<section class="py-12">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900">BERITA TERKINI</h1>
        <p class="text-gray-600 mt-4">Ikuti informasi terbaru seputar kegiatan, prestasi, dan pembaruan dari dunia atlet renang</p>
    </div>

    <div class="flex flex-col md:flex-row gap-8">
        <!-- Sidebar -->
        <div class="w-3/12 md:w-1/4 space-y-6 gap-x-2">
            <!-- Kategori Berita -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Kategori Berita</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-blue-500 hover:text-blue-700">Prestasi Atlet</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-700">Kegiatan</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-700">Kompetisi</a></li>
                    <li><a href="#" class="text-blue-500 hover:text-blue-700">Tips Latihan</a></li>
                </ul>
            </div>

            <!-- Pencarian -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Pencarian</h3>
                <div class="relative">
                    <input type="text" placeholder="Cari Berita" class="w-full p-2 border rounded-lg">
                    <span class="absolute right-3 top-3 text-gray-500"><i class="fa fa-search"></i></span>
                </div>
            </div>

            <!-- Tag Populer -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Tag Populer</h3>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="px-3 py-1 bg-blue-100 text-blue-600 rounded-lg">#fufufafa</a>
                    <a href="#" class="px-3 py-1 bg-blue-100 text-blue-600 rounded-lg">#agussedih</a>
                    <a href="#" class="px-3 py-1 bg-blue-100 text-blue-600 rounded-lg">#agusmiftah</a>
                </div>
            </div>
        </div>

        <!-- Konten Berita -->
        <div class="w-9/12 md:w-3/4">
            <!-- Berita Utama -->
            <div class="mb-8">
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="/css/img/beritafoto.jpg" alt="Berita Utama" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $beritaTerbaru->title }}</h2>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ut quisquam asperiores possimus...</p>
                        <a href="#" class="text-blue-500 hover:text-blue-700">Lihat Selengkapnya →</a>
                    </div>
                </div>
            </div>

            <!-- Berita Umum -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="/css/img/beritafoto.jpg" alt="Berita" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Berita Baru</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <a href="/beritadet" class="text-blue-500 hover:text-blue-700">Lihat Selengkapnya →</a>
                    </div>
                </div>
                <!-- Repeat Cards -->
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="/css/img/beritafoto.jpg" alt="Berita" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Berita Baru</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <a href="#" class="text-blue-500 hover:text-blue-700">Lihat Selengkapnya →</a>
                    </div>
                </div>
            </div>

            <!-- Lihat Lebih Banyak -->
            <div class="text-center mt-8">
                <a href="#" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Lihat Lebih Banyak</a>
            </div>
        </div>
    </div>
</div>
  </section>