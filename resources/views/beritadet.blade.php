<x-layout>
<section class="pt-12">

    <div class="container-berita1 mx-auto px-4 sm:px-6 lg:px-8 py-12 w-9/12">
        <div class="content-berita1 bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">{{$berita['title']}}</h1>
            <img src="/storage/{{$berita['gambar']}}" class="w-full h-96 object-cover rounded-lg mb-6">
            <h2 class="text-2xl font-semibold mb-4">Subjudul Artikel</h2>
            <p class="text-gray-700 mb-4 text-justify">{{$berita['deskripsi']}}</p>
            <div class="berita-next-prev flex justify-between mt-8">
                <a href="/berita" class="text-blue-500 hover:text-blue-700">Kembali</a>
            </div>
        </div>
    </div>
</section>
</x-layout>