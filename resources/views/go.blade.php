<x-layout>
  <x-navbar></x-navbar>
  <x-header></x-header>
  <section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-8" id="berita">Berita Terbaru</h2>
      <!-- Container Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($beritas->take(3) as $berita)
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

      <!-- Tombol Berita Lainnya -->
      <div class="text-center mt-10">
        <a href="/berita" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Lihat Berita Lainnya</a>
      </div>

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12" >
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Kegiatan</h2>

      <!-- Container Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($kegiatans->take(3) as $kegiatan)
        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">{{$kegiatan['title']}}</h3>
          <p class="text-gray-600 mb-1">Tanggal: {{$kegiatan['jadwal']}}</p>
          <p class="text-gray-600 mb-4">Arena: {{$kegiatan['tempat']}}</p>
          <a href="/kegiatandet/{{$kegiatan['slug']}}" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Detail →</a>
        </div>
        @endforeach
      </div>

      <!-- Tombol Jadwal Lainnya -->
      <div class="text-center mt-10">
        <a href="/kegiatan" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Lihat Semua Jadwal</a>
      </div>

    </div>
  </section>
</x-layout>