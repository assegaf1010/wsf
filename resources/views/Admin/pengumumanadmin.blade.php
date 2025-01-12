<x-layoutadmin>
    <section class="pt-6">
        <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg overflow-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12l4-4m0 0l-4 4m4-4v8" />
                    </svg>
                    Daftar Berita
                </h1>
                <a href="/createberita" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Tambah Berita</a>
            </div>

            <!-- List Berita -->
            <ul class="space-y-4 max-h-96 overflow-y-auto">
                @foreach ($beritas as $berita)
                <li class="p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm">
                    <h2 class="text-lg font-semibold text-gray-800">{{$berita->title}}</h2>
                    <p class="text-sm text-gray-600">{{$berita->created_at}}</p>
                    <p class="text-sm text-gray-700 mt-2">{{ Str::limit($berita->deskripsi, 100)}}</p>
                    <a href="/pengumumanadmindet/{{$berita['slug']}}" class="text-blue-500 hover:underline text-sm mt-2 inline-block">Baca Selengkapnya</a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</x-layoutadmin>
