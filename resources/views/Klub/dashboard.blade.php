<x-layoutuser>
<div class="flex h-full ">
    <!-- Main Dashboard -->
    <div class="flex-1 px-12  space-y-6">
      <!-- First Dashboard -->
      <div class="flex justify-between items-center">
        <h2 class="text-3xl font-bold text-white">Dashboard</h2>
      </div>

    <section class="flex space-x-10">
                  <!-- Second Dashboard -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-2 w-3/6">
          <!-- Cards -->
          <div class="bg-white p-3 rounded-2xl shadow">
            <h3 class="text-sm font-medium">Total Atlet Aktif</h3>
            <h2 class="text-xl font-bold mt-2 text-blue-500">150</h2>
          </div>
        </div>

      <!-- Announcements -->
      <div class="bg-white p-6 rounded-3xl shadow w-3/6 min-w-40">
        <h2 class="text-xl font-bold mb-4">Pengumuman</h2>
        <ul class="space-y-4">
        @foreach($beritas->sortByDesc('created_at')->take(3) as $berita)
        <li class="flex justify-between items-center">
            <p>{{Str::limit($berita['title'],50)}}</p>
            <span class="text-gray-500">{{ $berita->created_at->format('d M Y') }}</span>
        </li>
        @endforeach
          <a href="/pengumumanklub" class="text-blue-500 font-medium ">Lihat semua Pengumuman</a>
        </ul>
      </div>

        </section>
      <!-- Activities -->
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Nama Kegiatan</th>
              <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Tanggal</th>
              <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Tempat</th>
              <th class="py-3 px-4 text-center text-sm font-semibold text-gray-700">Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach($kegiatans as $kegiatan)
            <tr class="border-t">
              <td class="py-3 px-4 text-sm text-gray-600">{{$kegiatan->title}}</td>
              <td class="py-3 px-4 text-sm text-gray-600">{{$kegiatan->jadwal}}</td>
              <td class="py-3 px-4 text-sm text-gray-600">{{$kegiatan->tempat}}</td>
              <td class="py-3 px-4 text-center">
                <a href="/kegiatanadmindet/{{$kegiatan['slug']}}" class="text-blue-500 font-medium hover:underline">Lihat</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>
</x-layoutuser>