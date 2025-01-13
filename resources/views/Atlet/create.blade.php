<x-layoutuser>
    <main>
        <div class="max-w-lg mx-auto p-8 bg-white rounded-xl shadow">
            <h2 class="text-2xl font-semibold text-center mb-4">Tambah Atlet</h2>
            <form action="{{ route('atlet.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama_atlet" class="block text-sm font-medium text-gray-700">Nama Atlet</label>
                    <input type="text" id="nama_atlet" name="nama_atlet" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="club_id" class="block text-sm font-medium text-gray-700">Klub</label>
                    <select name="club_id" id="club_id" class="mt-1 p-2 w-full border rounded-md" required>
                        @foreach($clubs as $club)
                            <option value="{{ $club->id }}">{{ $club->nama_club }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="w-full py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Tambah Atlet</button>
            </form>
        </div>
    </main>
</x-layoutuser>
