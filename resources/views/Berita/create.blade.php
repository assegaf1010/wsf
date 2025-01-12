<x-layoutadmin>
<section class=" py-8">

    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Tambah Berita</h1>

        @if (session('success'))
            <p class="text-green-500 text-center mb-4">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul class="text-red-500 mb-4">
                @foreach ($errors->all() as $error)
                    <li class="text-center">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-lg text-gray-700 font-medium">Judul Berita:</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required
                    class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-lg text-gray-700 font-medium">Upload Gambar:</label>
                <input type="file" name="gambar" id="gambar" required
                    class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="block text-lg text-gray-700 font-medium">Isi Berita:</label>
                <textarea name="deskripsi" id="isi" rows="5" required
                    class="mt-2 p-3 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('isi') }}</textarea>
            </div>

            <button type="submit"
                class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Tambah Berita
            </button>
        </form>
    </div>

</section>
</x-layoutadmin>