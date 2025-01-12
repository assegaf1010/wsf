<x-layout>
    <main class="pt-12">
    <section class="py-12 bg-gray-100 ">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Daftar Klub</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Klub 1 -->
      @foreach($clubs as $club)
      <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col items-center">
        <div class="flex justify-center items-center w-full p-6">
            <img src="/storage/{{$club['logo']}}" alt="Klub 1" class="w-40 h-40 object-contain p-4 rounded-full border-4 border-blue-400 shadow-lg">
          </div>
          <div class="p-6 text-center">
            <h3 class="text-xl font-semibold text-gray-800">{{$club->nama_club}}</h3>
          </div>
        </div>

      @endforeach
    </div>
  </div>
</section>
    </main>
</x-layout>