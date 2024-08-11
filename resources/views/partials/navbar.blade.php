<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/" >
      <img src="img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Pariwisata
    </a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav w-100 p-2 justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="/">Beranda</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="/wisata">Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kecamatan">Kecamatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/formpemesanan">Pemesanan Tiket</a>
            </li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3">
                    @if(Auth::check())
                    <div class="dropdown d-inline-block ms-auto">
                        <div class="dropdown">
                            <a class="header-item waves-effect dropdown-toggle" href="#" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 90px; text-decoration:none; color: rgb(251, 153, 16);">
                                <img src="img/user.svg" alt="User Icon" style="margin-right: 10px; width:20px;" />
                                Halo, {{ Auth::user()->name }}
                            </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="/logout" style="color:rgb(251, 153, 16);">Keluar</a>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="header-right d-flex">
                        <div class="header-button" style="margin-right: 10px;">
                            <a href="/login" class="btn-login">Masuk</a>
                        </div>
                        <div class="header-button">
                            <a href="/register" class="btn-login">Daftar</a>
                        </div>
                    </div>


                    @endif
        </div>
    </div>
</nav>
<style>
  /* Tambahkan warna latar belakang dan ganti warna teks pada nav item */
.nav-item {
  color: black;
  margin-right: 15px; /* Tambahkan margin antar item navigasi */
}

.nav-link {
  color: #000; /* Ganti warna teks pada nav item menjadi putih */
  padding: 10px 15px; /* Tambahkan ruang polos di sekitar teks untuk meningkatkan tampilan */
  border-radius: 5px; /* Tambahkan border radius untuk sudut yang lebih halus */
}

/* Tambahkan warna latar belakang dan ganti warna teks pada nav item ketika dihover */
.nav-link:hover {
  color: rgb(251, 153, 16); /* Ganti warna teks pada nav item menjadi putih */
}

.nav-item.active {
  background-color: #343a40; /* Ganti warna latar belakang pada nav item yang aktif */
}

  </style>