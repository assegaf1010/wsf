<x-layoutadmin>
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-center mb-6">Tambah Kegiatan</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('kegiatan.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="flex flex-col">
            <label for="title" class="text-lg font-medium">Judul Kegiatan</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" 
                class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror">
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="tempat" class="text-lg font-medium">Tempat</label>
            <input type="text" id="tempat" name="tempat" value="{{ old('tempat') }}" 
                class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('tempat') border-red-500 @enderror">
            @error('tempat')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="jadwal" class="text-lg font-medium">Jadwal</label>
            <input type="datetime-local" id="jadwal" name="jadwal" value="{{ old('jadwal') }}" 
                class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('jadwal') border-red-500 @enderror">
            @error('jadwal')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="deskripsi" class="text-lg font-medium">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="4"
                class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="biaya_pendaftaran" class="text-lg font-medium">Biaya Pendaftaran</label>
            <input type="number" step="0.01" id="biaya_pendaftaran" name="biaya_pendaftaran" value="{{ old('biaya_pendaftaran') }}" 
                class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('biaya_pendaftaran') border-red-500 @enderror">
            @error('biaya_pendaftaran')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Simpan
            </button>
        </div>
    </form>
</div>
</x-layoutadmin>