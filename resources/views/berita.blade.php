<x-layout>
<section class="py-12">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900">BERITA TERKINI</h1>
        <p class="text-gray-600 mt-4">Ikuti informasi terbaru seputar kegiatan, prestasi, dan pembaruan dari dunia atlet renang</p>
    </div>

    <div class="flex flex-col md:flex-row gap-8">
        <!-- Sidebar -->
        <div class="w-3/12 md:w-1/4 space-y-6 gap-x-2">

            <!-- Pencarian -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Pencarian</h3>
                <div class="relative">
                    <input type="text" placeholder="Cari Berita" class="w-full p-2 border rounded-lg">
                    <span class="absolute right-3 top-3 text-gray-500"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>

        <!-- Konten Berita -->
        <div class="w-9/12 md:w-3/4">
            <!-- Berita Utama -->
            <div class="mb-8">
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="/storage/{{$beritaTerbaru['gambar']}}" alt="Berita Utama" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $beritaTerbaru->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($beritaTerbaru->deskripsi, 400)}}</p>
                        <a href="/beritadet/{{$beritaTerbaru['slug']}}" class="text-blue-500 hover:text-blue-700">Lihat Selengkapnya →</a>
                    </div>
                </div>
            </div>


                <!-- Container Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($beritas as $berita)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="/storage/{{$berita['gambar']}}" alt="News Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{$berita['title']}}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($berita['deskripsi'], 100)}}</p>
                            <a href="/beritadet/{{$berita['slug']}}" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                        </div>
                    </div>
                @endforeach
                </div>

        </div>
    </div>
</div>
  </section>
</x-layout>