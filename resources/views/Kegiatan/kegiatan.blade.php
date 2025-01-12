<x-layout>
    <main class="pt-12">
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Daftar Kegiatan</h2>
                <div class="space-y-6 h-96">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-8 ">
                        @foreach($kegiatans as $kegiatan)
                            <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{$kegiatan['title']}}</h3>
                            <p class="text-gray-600 mb-1">Tanggal: {{$kegiatan['jadwal']}}</p>
                            <p class="text-gray-600 mb-4">Arena: {{$kegiatan['tempat']}}</p>
                            <a href="/kegiatandet/{{$kegiatan['slug']}}" class="text-blue-600 hover:text-blue-800 font-medium">Lihat Detail →</a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>
    </main>
</x-layout>
