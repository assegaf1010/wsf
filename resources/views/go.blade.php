<x-layout>
  <x-navbar></x-navbar>
  <div class="relative w-full h-full" style="position: relative; width: 100%; height: 100%;">
    <!-- Gambar -->
    <img src="css/img/background.png" alt="Gradient Image" style="width: 100%; height: 100%; object-fit: cover;">

    <!-- Overlay gradasi -->
    <div style="position: absolute; inset: 0; background: linear-gradient(to right, #3b82f6, transparent);"></div>

    <!-- Konten di atas gambar -->
    <div style="position: absolute; left: 0; top: 50%; transform: translateY(-50%); padding: 1.5rem 2rem; color: white;">
      <h1 style="font-size: 3rem; font-weight: bold; margin-bottom: 1rem;">Gabung Bersama Kami</h1>
      <p style="font-size: 1.125rem; margin-bottom: 1.5rem;">Tingkatkan Prestasi Renangmu dengan Pelatihan Profesional</p>
      <a href="/login" style="display: inline-block; padding: 0.75rem 1.5rem; background-color: #1e40af; color: white; font-weight: 600; border-radius: 0.5rem; text-decoration: none;">Gabung Sekarang</a>
    </div>
  </div>

  <section style="padding: 3rem 0;">
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 1rem;">
      <h2 style="font-size: 1.875rem; font-weight: bold; text-align: center; color: #1f2937; margin-bottom: 2rem;" id="berita">Berita Terbaru</h2>
      
      <!-- Container Cards -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        @foreach ($beritas->take(3) as $berita)
        <div style="background-color: white; border-radius: 0.5rem; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); overflow: hidden;">
          <img src="/storage/{{$berita['gambar']}}" alt="News Image" style="width: 100%; height: 12rem; object-fit: cover;">
          <div style="padding: 1.5rem;">
            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">{{$berita['title']}}</h3>
            <p style="color: #4b5563; font-size: 0.875rem; margin-bottom: 1rem;">{{ Str::limit($berita['deskripsi'], 100)}}</p>
            <a href="/beritadet/{{$berita['slug']}}" style="color: #2563eb; text-decoration: none; font-weight: 500;">Baca Selengkapnya →</a>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Tombol Berita Lainnya -->
      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="/berita" style="display: inline-block; padding: 0.75rem 1.5rem; background-color: #2563eb; color: white; border-radius: 0.5rem; text-decoration: none;">Lihat Berita Lainnya</a>
      </div>
    </div>

    <div style="max-width: 1280px; margin: 0 auto; padding: 3rem 1rem 0;">
      <h2 style="font-size: 1.875rem; font-weight: bold; text-align: center; color: #1f2937; margin-bottom: 2rem;">Kegiatan</h2>

      <!-- Container Cards -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        @foreach($kegiatans->take(3) as $kegiatan)
        <div style="padding: 1.5rem; background-color: #f3f4f6; border-radius: 0.5rem; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
          <h3 style="font-size: 1.25rem; font-weight: 600; color: #1f2937; margin-bottom: 0.5rem;">{{$kegiatan['title']}}</h3>
          <p style="color: #4b5563; margin-bottom: 0.25rem;">Tanggal: {{$kegiatan['jadwal']}}</p>
          <p style="color: #4b5563; margin-bottom: 1rem;">Arena: {{$kegiatan['tempat']}}</p>
          <a href="/kegiatandet/{{$kegiatan['slug']}}" style="color: #2563eb; text-decoration: none; font-weight: 500;">Lihat Detail →</a>
        </div>
        @endforeach
      </div>

      <!-- Tombol Jadwal Lainnya -->
      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="/kegiatan" style="display: inline-block; padding: 0.75rem 1.5rem; background-color: #2563eb; color: white; border-radius: 0.5rem; text-decoration: none;">Lihat Semua Jadwal</a>
      </div>
    </div>
  </section>
</x-layout>