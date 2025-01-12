<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/landing.css">
    <title>Login Federasi</title>
</head>
  <body>
      <nav class="navbar">
          <div class="logo">
            <a href="#">WSF</a>
            <span>WONOSOBO SWIMMING FEDERATION</span>
          </div>
          <div class="btn-link">
          <ul class="nav-links">
        <li><a href="/">Beranda</a></li>
        <li><a href="/tentang">Tentang Kami</a></li>
        <li><a href="/kegiatan">Kegiatan</a></li>
        <li><a href="/berita">Berita</a></li>
        <li><a href="/club">Club</a></li>
            </ul>
            <div class="auth-buttons">
            <a href="/logink" class="btn login">Log in</a>
            <a href="/register" class="btn register">Register</a>
          </div>
          </div>
      </nav>
      <!-- Login Form -->
      <div class="login-container">
          <div class="login-box">
              <h2>Login</h2>>
              <div class="tab-menu">
                <button class="active"><a href="/loginf">Federasi</a></button>
                <button><a href="/logink">Klub</a></button>
              </div>
              <form action="" method="">
                  <div class="form-group">
                      <label>Email atau Nama Pengguna</label>
                      <input type="text" placeholder="Masukkan email atau nama pengguna" required>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" placeholder="Masukkan kata sandi" required>
                  </div>
                  <div class="forgot-password">
                      <a href="#">Lupa Kata Sandi?</a>
                  </div>
                  <button type="submit" class="login-btn">Login</button>
                  <p class="register-link">Belum Punya Akun? <a href="register.html">Register</a></p>
              </form>
          </div>
      </div>
      <footer>
        <div class="footer-content">
            <div class="tentang-kami">
                <h1>Tentang Kami</h1>
                <p>kami berdedikasi untuk menyediakan pelatihan dan dukungan terbaik bagi atlet renang untuk membantu mereka mencapai potensi penuh mereka.</p>
            </div>
            <div class="kontak-informasi">
                <h1>Kontak Informasi</h1>
                <p>Email: clubrenangasolole@gmail.com<br>
                   Telepon: (021) 79192045<br>
                   Alamat: Wonosobo Swim Federation, Blok A10-D10, Jl. Raya Kalibeber No.Kav. 32, RT.2/RW.4 Kelurahan Kalibeber</p>
            </div>
            <div class="follow">
                <h1>Follow</h1>
                <div class="social-media">
                    <a href="#"><img src="img/facebook_2504903.png" alt="Facebook"></a>
                    <a href="#"><img src="img/youtube_2504965.png" alt="YouTube"></a>
                </div>
            </div>
        </div>
        <p class="copyright">© 2024 Klub Atlet Renang. All rights reserved.</p>
    </footer>
  </body>
</html>