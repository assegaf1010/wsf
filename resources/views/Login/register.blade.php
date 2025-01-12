<x-layout>
    <main>
        <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl w-full space-y-8">
                <div>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Registrasi Akun Klub</h2>
                    <p class="mt-2 text-center text-sm text-gray-600">Silahkan Isi Data Anda Dengan Benar</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <form method="POST" action="{{ route('klub.register') }}" enctype="multipart/form-data" class="space-y-4">
                        @csrf

                        <!-- Bagian Pertama -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="nama-lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus class="mt-1 p-2 w-full border rounded-md">
                                @error('name')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input type="password" id="password" name="password" required class="mt-1 p-2 w-full border rounded-md">
                                @error('password')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <p class="text-sm text-gray-500">*min. 8 karakter, kombinasi huruf dan angka</p>

                        <!-- Bagian Kedua -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="mt-1 p-2 w-full border rounded-md">
                                @error('email')
                                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required class="mt-1 p-2 w-full border rounded-md">
                            </div>
                        </div>

                        <!-- Bagian Ketiga -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="nama_club" class="block text-sm font-medium text-gray-700">Nama Klub</label>
                                <input id="nama_club" name="nama_club" type="text" required class="mt-1 p-2 w-full border rounded-md">
                            </div>
                            <div>
                                <label for="tanggal_berdiri" class="block text-sm font-medium text-gray-700">Tanggal Berdiri</label>
                                <input id="tanggal_berdiri" name="tanggal_berdiri" type="text" required class="mt-1 p-2 w-full border rounded-md" placeholder="ex:22-08-1999">
                            </div>
                        </div>

                        <!-- Alamat Klub -->
                        <div>
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Klub</label>
                            <input id="alamat" name="alamat" type="text" placeholder="Masukkan Alamat Club" required class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <!-- Upload Logo Klub -->
                        <div>
                            <label for="logo" class="block text-sm font-medium text-gray-700">Logo Klub</label>
                            <input id="logo" name="logo" type="file" accept="image/*" required class="mt-1 p-2 w-full border rounded-md">
                            @error('logo')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <p class="mt-4 text-center text-sm text-gray-600">
                            Sudah punya akun?
                            <a href="/login" class="font-medium text-blue-600 hover:text-blue-500">Login</a>
                        </p>

                        <!-- Tombol Register -->
                        <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout>
