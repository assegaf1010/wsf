<x-layout>
<section class="pt-12" >
    <!-- Detail Kegiatan -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ $kegiatan['title'] }}</h2>
            <p class="text-lg font-semibold text-gray-800">Tanggal Acara: {{$kegiatan['jadwal']}}</p>
            <p class="text-lg font-semibold text-gray-800 mt-4">Lokasi: {{$kegiatan['tempat']}}</p>

            <p class="text-lg text-gray-700 mt-6">Deskripsi Kegiatan:</p>
            <p class="text-gray-600 leading-relaxed">{{$kegiatan['deskripsi']}}</p>
            <p class="text-lg text-gray-700 mt-6">Biaya Pendaftaran: Rp {{$kegiatan['biaya_pendaftaran']}} /Club</p>
            <p class="text-lg text-gray-700 mt-6">Informasi Kontak: info@clubrenangasolole.com | (021)79192045</p>
            <div class="mt-8 text-center">
            <a href="/kegiatan" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Lihat Kegiatan Lainnya</a>
            </div>
        </div>
    </div>
</section>
</x-layout>