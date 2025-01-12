<x-layoutadmin>
    <section class="pt-6">

    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
  <!-- Kegiatan yang Akan Datang -->
  <div class="flex justify-between">
  <h2 class="text-xl font-bold text-gray-800 mb-4">Daftar Kegiatan</h2>
  <a href="/createkegiatan" id="addEventButton" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 mb-2">Tambah Kegiatan Baru</a>
  </div>
 

  <div class="overflow-x-auto mb-8">
    <table class="min-w-full bg-white border border-gray-300 rounded-lg">
      <thead class="bg-gray-100">
        <tr>
          <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Nama Kegiatan</th>
          <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Tanggal</th>
          <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Venue</th>
          <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($kegiatans as $kegiatan)
        <tr>
          <td class="py-2 px-4 border-b text-sm text-gray-800">{{$kegiatan->title}}</td>
          <td class="py-2 px-4 border-b text-sm text-gray-800">{{$kegiatan->jadwal}}</td>
          <td class="py-2 px-4 border-b text-sm text-gray-800">{{$kegiatan->tempat}}</td>
          <td class="py-2 px-4 border-b text-sm">
            <a href="/kegiatanadmindet/{{$kegiatan['slug']}}" class="text-blue-600 hover:text-blue-800 font-semibold">Lihat Detail</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>

    </section>
</x-layoutadmin>