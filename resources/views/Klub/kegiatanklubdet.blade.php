<x-layoutuser>
    <section class="pl-6 px-12 space-y-4">
        <div class="flex justify-center">
            <div class="container mx-auto p-8 bg-white rounded-lg shadow-lg w-3/6 border-t-4 border-blue-500">
                <!-- Header Detail -->
                <div class="mb-6 text-center">
                    <h2 class="text-3xl font-extrabold text-blue-600 mb-2">{{$kegiatan->title}}</h2>
                    <p class="text-gray-500 text-sm">Detail lengkap mengenai kegiatan ini</p>
                </div>

                <!-- Detail Kegiatan -->
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 4h10m-7 4h4m-6 4h8m-6 4h4" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-700">Tanggal:</h3>
                            <p class="text-gray-600">{{$kegiatan->jadwal}}</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15.75l3 3 5.25-6.75" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-700">Lokasi:</h3>
                            <p class="text-gray-600">{{$kegiatan->tempat}}</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c1.656 0 3 1.344 3 3s-1.344 3-3 3-3-1.344-3-3 1.344-3 3-3zm0 11.344A7.375 7.375 0 0 1 4.656 16 7.375 7.375 0 0 1 12 4.656 7.375 7.375 0 0 1 19.344 16 7.375 7.375 0 0 1 12 19.344z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-700">Biaya Pendaftaran:</h3>
                            <p class="text-gray-600">Rp{{number_format($kegiatan->biaya_pendaftaran, 0, ',', '.')}}</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 text-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h6M7 16h10" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-700">Deskripsi:</h3>
                            <p class="text-gray-600">{{$kegiatan->deskripsi}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layoutuser>
