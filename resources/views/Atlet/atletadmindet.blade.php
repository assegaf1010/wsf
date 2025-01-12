<x-layoutadmin>
    <div class="flex flex-col space-y-10 p-8">

        <!-- Profile Section -->
        <div class="flex items-center bg-white p-6 shadow-lg">
            <img src="logo-wsf.png" alt="WSF Logo" class="w-48 h-48 rounded-full shadow-lg border-2 border-blue-500">
            <div class="pl-6">
                <div>
                    <h3 class="text-lg font-medium">Nama: <span>Pandugo</span></h3>
                </div>
                <div>
                    <h3 class="text-lg font-medium">Kota: <span>Jakarta</span></h3>

                </div>
                <div>
                    <h3 class="text-lg font-medium">Usia:</h3>
                    <p>21 Tahun</p>
                </div>
                <div>
                    <h3 class="text-lg font-medium">Deskripsi:</h3>
                    <p>Klub Atletik Jakarta merupakan klub yang telah melahirkan banyak atlet nasional yang berprestasi.</p>
                </div>
            </div>  
        </div>

        <!-- Achievement Table -->
        <div class="bg-white p-6  shadow-lg">
            <h2 class="text-3xl font-semibold mb-6 text-center text-blue-600">Catatan Prestasi Atlet Renang</h2>
            <div class="overflow-x-auto rounded-lg shadow-md">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="py-4 px-6 text-left text-sm font-semibold">No</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold">Nama Perlombaan</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold">Kategori</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold">Tahun</th>
                            <th class="py-4 px-6 text-left text-sm font-semibold">Juara</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        <tr class="hover:bg-gray-100">
                            <td class="py-4 px-6">1</td>
                            <td class="py-4 px-6">Kejuaraan Nasional</td>
                            <td class="py-4 px-6">50m Gaya Bebas</td>
                            <td class="py-4 px-6">2024</td>
                            <td class="py-4 px-6 font-semibold text-green-600">Juara 1</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="py-4 px-6">2</td>
                            <td class="py-4 px-6">Piala Walikota</td>
                            <td class="py-4 px-6">100m Gaya Punggung</td>
                            <td class="py-4 px-6">2023</td>
                            <td class="py-4 px-6 font-semibold text-yellow-600">Juara 2</td>
                        </tr>
                        <tr class="hover:bg-gray-100">
                            <td class="py-4 px-6">3</td>
                            <td class="py-4 px-6">Kejuaraan Provinsi</td>
                            <td class="py-4 px-6">200m Gaya Kupu-kupu</td>
                            <td class="py-4 px-6">2022</td>
                            <td class="py-4 px-6 font-semibold text-orange-600">Juara 3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layoutadmin>
