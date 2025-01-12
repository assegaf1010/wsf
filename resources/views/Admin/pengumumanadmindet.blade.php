<x-layoutadmin>
<section class="pt-2">
  <div class="content-tentang text-center">
    <div class="container-berita1 mx-auto px-4 sm:px-6 lg:px-8 w-11/12">
      <div class="content-berita1 bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-4">{{$berita['title']}}</h1>
        <img src="/storage/{{$berita['gambar']}}" class="w-full h-64 object-cover rounded-lg mb-6">
        <p class="text-gray-700 mb-4 text-justify">{{$berita->deskripsi}}</p>

        <!-- Tombol Navigasi -->
        <div class="flex justify-between mt-6">
          <a href="/pengumumanadmin" class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition duration-300">
            Kembali
          </a>

          <div class="flex space-x-4">
            <!-- Tombol Edit -->
            <a href="{{ route('berita.edit', $berita->slug) }}" 
                class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">
                Edit
            </a>

            <!-- Tombol Hapus -->
            <form action="{{ route('berita.destroy', $berita->slug) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" 
                      class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                Hapus
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const deleteForms = document.querySelectorAll('form[onsubmit]');
    deleteForms.forEach(form => {
      form.addEventListener('submit', (e) => {
        if (!confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
          e.preventDefault(); 
        }
      });
    });
  });
</script>
</x-layoutadmin>
