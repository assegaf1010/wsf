<x-layout>
    <main>
        <section class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>

                <!-- Pilihan Login -->
                <div class="mb-6">
                    <div class="flex justify-center space-x-4">
                        <!-- Federasi -->
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="admin" class="hidden peer" checked onclick="setRole('admin')">
                            <div class="w-32 py-3 text-center rounded-lg border border-gray-300 peer-checked:bg-blue-500 peer-checked:text-white peer-checked:border-blue-500">
                                Federasi
                            </div>
                        </label>
                        <!-- Klub -->
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="klub" class="hidden peer" onclick="setRole('klub')">
                            <div class="w-32 py-3 text-center rounded-lg border border-gray-300 peer-checked:bg-blue-500 peer-checked:text-white peer-checked:border-blue-500">
                                Klub
                            </div>
                        </label>
                    </div>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Hidden Role Field -->
                    <input type="hidden" id="role" name="role" value="admin">

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required autofocus
                            class="mt-1 w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" name="password" required
                            class="mt-1 w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between mb-4">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="text-blue-500 border-gray-300 rounded">
                            <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                        </label>
                        <a href="#" class="text-sm text-blue-600 hover:underline">Lupa Password?</a>
                    </div>

                    <!-- Tombol Login -->
                    <button type="submit" class="w-full py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">
                        Login
                    </button>
                </form>

                <!-- Daftar -->
                <p class="text-sm text-center text-gray-600 mt-6">
                    Belum punya akun? 
                    <a href="/registerpage" class="text-blue-500 hover:underline">Daftar di sini</a>
                </p>
            </div>
        </section>
    </main>

    <script>
        // Fungsi untuk mengatur nilai role
        function setRole(role) {
            document.getElementById('role').value = role;
        }
    </script>
</x-layout>
