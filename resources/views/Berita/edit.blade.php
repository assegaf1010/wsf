<x-layoutadmin>
<section class="pt-2">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 w-11/12">
    <div class="bg-white shadow-lg rounded-lg p-6">
      <h1 class="text-3xl font-bold mb-6 text-center">Edit Pengumuman</h1>

      <!-- Form Edit Pengumuman -->
      <form action="{{ route('berita.update', $berita->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Input Judul -->
        <div class="mb-4">
          <label for="title" class="block text-sm font-medium text-gray-700">Judul Pengumuman</label>
          <input type="text" name="title" id="title" 
                 class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                 value="{{ old('title', $berita->title) }}" required>
        </div>

        <!-- Upload Gambar -->
        <div class="mb-4">
          <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar Pengumuman</label>
          <input type="file" name="gambar" id="gambar"
                 class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-blue-500 focus:border-blue-500">
          <p class="mt-2 text-sm text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</p>
        </div>

        <!-- Input Deskripsi -->
        <div class="mb-4">
          <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
          <textarea name="deskripsi" id="deskripsi" rows="5"
                    class="mt-1 block w-full h-3/6 px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>{{ old('deskripsi', $berita->deskripsi) }}</textarea>
        </div>

        <!-- Tombol Simpan -->
        <div class="flex justify-between">
          <a href="/pengumumanadmin" 
             class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition duration-300">
            Kembali
          </a>
          <button type="submit" 
                  class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
            Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
</x-layoutadmin>
