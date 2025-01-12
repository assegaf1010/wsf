<x-layoutuser>

<section class="px-12">
    <div class="pb-3">
    <h2 class="text-3xl font-bold text-white">Daftar Atlet</h2>
    </div>


    <div class="flex items-center gap-4 pt-6 pl-6">
          <input type="text" class="p-2 border rounded w-full" placeholder="Cari sesuatu...">
          <a href="/atlet/create" id="addEventButton" class=" bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 mb-2 text-center">Tambah Atlet</a>
    </div>


    <div class="overflow-x-auto pl-6 pt-6">
  <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
    <thead class="bg-gray-100">
      <tr>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">No</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Nama Atlit</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Tanggal Lahir</th>
        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Klub</th>
        <th class="py-3 px-4 text-center text-sm font-semibold text-gray-700">Detail</th>
      </tr>
    </thead>
    <tbody>
      <!-- Data Baris 1-20 -->
      @foreach($atlets as $atlet)
      <tr class="border-t">
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->id}}</td>
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->nama_atlet}}</td>
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->tanggal_lahir}}</td>
        <td class="py-3 px-4 text-sm text-gray-600">{{$atlet->club->nama_club}}</td>
        <td class="py-3 px-4 text-center">
          <a href="#" class="text-blue-500 font-medium hover:underline">Lihat</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</section>  
</x-layoutuser>