<x-layoutadmin>

<section class="px-12">
    <div class="pb-3">
    <h2 class="text-3xl font-bold text-white">Daftar Atlet</h2>
    </div>

    <div class="grid grid-cols-1 pl-6 md:grid-cols-1 lg:grid-cols-2 gap-2 w-6/6">
          <!-- Cards -->
          <div class="bg-white p-3 rounded-2xl shadow">
            <h3 class="text-sm font-medium">Jumlah Klub Terdaftar</h3>
            <h2 class="text-xl font-bold mt-2 text-blue-500">5</h2>
          </div>
          <div class="bg-white p-3 rounded-2xl shadow">
            <h3 class="text-xl font-medium">Total Atlet</h3>
            <h2 class="text-xl pl-2 font-bold mt-2 text-blue-500">30</h2>
          </div>
    </div>


    <div class="flex items-center gap-4 pt-6 pl-6">
          <input type="text" class="p-2 border rounded w-full" placeholder="Cari sesuatu...">
          <button class="p-2 bg-blue-600 text-white rounded">Filter</button>
    </div>


    <div class="overflow-x-auto pl-6 pt-6">
  <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
    <thead class="bg-gray-100">
      <tr>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">No</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Nama Atlit</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Tanggal Lahir</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Jenis Kelamin</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Klub</th>
        <th class="py-3 px-4 text-center text-sm font-semibold text-gray-700">Detail</th>
      </tr>
    </thead>
    <tbody>
      <!-- Data Baris 1-20 -->
      @foreach($atlets as $atlet)
      <tr class="border-t">
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->id}}</td>
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->nama}}</td>
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->tanggal_lahir}}</td>
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->jenis_kelamin}}</td>
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->club_id}}</td>
        <td class="py-3 px-4 text-center">
          <a href="#" class="text-blue-500 font-medium hover:underline">Lihat</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</section>

</x-layoutadmin>