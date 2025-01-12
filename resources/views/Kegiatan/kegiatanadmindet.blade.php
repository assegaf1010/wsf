<x-layoutadmin>
    <section class="pl-6 px-12 space-y-2">
      <div class="flex">
        <div class="container mx-auto p-4 bg-white rounded-lg shadow-lg w-3/6">
          <!-- Detail Kegiatan -->
          <h2 class="text-2xl font-semibold mb-4">{{$kegiatan->title}}</h2>
          <div class="space-y-1">
            <div>
              <h3 class="text-lg font-medium">Tanggal: <span>{{$kegiatan->jadwal}}</span></h3>
            </div>
            <div>
              <h3 class="text-lg font-medium">Lokasi: <span>{{$kegiatan->tempat}}</span></h3>
            </div>
          </div>
        </div>


      <div class="">
        <div class="overflow-x-auto rounded-lg bg-white h-full p-4 shadow">
        <h3 class="text-xl font-semibold mb-4">Pendaftaran</h3>
          <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-200">
              <tr>
                <th class="py-2 px-4 border-b">No</th>
                <th class="py-2 px-4 border-b">Nama Klub</th>
                <th class="py-2 px-4 border-b">Kota</th>
                <th class="py-2 px-4 border-b">Jumlah Atlet</th>
                <th class="py-2 px-4 border-b">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-2 px-4 border-b text-center">1</td>
                <td class="py-2 px-4 border-b">Klub Atletik Medan</td>
                <td class="py-2 px-4 border-b">Medan</td>
                <td class="py-2 px-4 border-b text-center">15</td>
                <td class="py-2 px-4 border-b text-center">
                  <a href="#" class="text-green-600 hover:underline">Konfirmasi</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      </div>


  <!-- Klub Terdaftar dan Perlu Konfirmasi -->
  <div id="clubs" class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-lg pl-6">
      <!-- Klub Terdaftar -->
      <div>
        <h3 class="text-xl font-semibold">Klub Terdaftar</h3>
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-200">
              <tr>
                <th class="py-2 px-4 border-b">No</th>
                <th class="py-2 px-4 border-b">Nama Klub</th>
                <th class="py-2 px-4 border-b">Kota</th>
                <th class="py-2 px-4 border-b">Jumlah Atlet</th>
                <th class="py-2 px-4 border-b">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="py-2 px-4 border-b text-center">1</td>
                <td class="py-2 px-4 border-b">Klub Atletik Jakarta</td>
                <td class="py-2 px-4 border-b">Jakarta</td>
                <td class="py-2 px-4 border-b text-center">25</td>
                <td class="py-2 px-4 border-b text-center">
                  <a href="#" class="text-blue-600 hover:underline">Lihat Detail</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
  </div>
    </section>
</x-layoutadmin>