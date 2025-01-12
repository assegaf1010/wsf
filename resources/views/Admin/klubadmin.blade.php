<x-layoutadmin>
  <section class="pt-6">
  <h2 class="text-3xl pl-40 pb-6 font-bold text-white">Daftar Klub</h2>
  <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Klub 1 -->
    @foreach($clubs as $club)
    <div class="p-4 bg-white rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
      <div class="flex items-center mb-4">
        <img src="/storage/{{$club['logo']}}" alt="Logo Klub" class="rounded-full border-4 border-blue-400 shadow-lg w-16 h-16">
        <div class="ml-4">
          <h2 class="text-xl font-bold text-gray-800">{{$club->nama_club}}</h2>
          <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-semibold underline">Lihat Detail</a>
        </div>
      </div>
    </div>
    @endforeach

      </div>
    </div>
  </div>
</div>
  </section>


</x-layoutadmin>