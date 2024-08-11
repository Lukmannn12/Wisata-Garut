<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Pariwisata</title>
    <link rel="shortcut icon" href="/assets/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
</div>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
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
    </div>
</nav>
<main>
    <div class="wisata-img">
        <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->nama_wisata }}" />
    </div>
        <div class="container">
            <div class="row">
                <h2 class="center wisata_judul" style="margin-top: 50px; font-size:36px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);">{{ $data->nama_wisata }}</h2>
                    <div class="blog-wrapper blog-standard blog-details">
                        <div class="container">
                            {{-- nama_wisata --}}
                            {{-- sejarah --}}
                            <h2 class="wisata_judul">Sejarah</h2>
                            <p style="text-align: justify;">{{ $data->sejarah }}</p>
                            {{-- deskripsi --}}
                            <h2 class="wisata_judul">Deskripsi</h2>
                            <p style="text-align: justify;">{{ $data->deskripsi }}</p>
                            {{-- fasilitas --}}
                           <h2 class="wisata_judul">Fasilitas</h2>
                                <ol class="fasilitas_list">
                                    @php
                                        $facilities = explode(',', $data->fasilitas);
                                    @endphp
                                    @foreach ($facilities as $facility)
                                        <li>{{ $facility }}</li>
                                    @endforeach
                                </ol>
                            {{-- lokasi --}}
                            <h2 class="wisata_judul">Lokasi</h2>
                            <p style="text-align: justify;">{{ $data->lokasi }}</p>
                            <h2 class="wisata_judul">Kecamatan</h2>
                            <p>{{ $data->kecamatan->nama_kecamatan }}</p>
                            {{-- harga --}}
                           <h2 class="wisata_judul">Harga Tiket</h2>
                                <ol class="harga_list">
                                <!-- <p>{{ $data->harga_tiket }}</p> -->
                                    @php
                                        $hargas = explode(', ', $data->harga_tiket );
                                    @endphp
                                    @foreach ($hargas as $harga)
                                        <li>{{ $harga }}</li>
                                    @endforeach
                                </ol>
                  
                        </div>
                        <div class="fade-in-up-element d-flex justify-content-center">
                <a href="/formpemesanan" class="btn btn-primary" style="margin-bottom: 0; margin-top:0;">Pesan Tiket</a>
            </div>
                    </div>
                
            </div>
        </div>
</main>
<style>
    /* Custom CSS styles go here */
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
* {
    font-family: "Poppins", sans-serif;
}
.fasilitas_list {
    font-size: 18px;
}
    .blog-wrapper {
    padding: 80px;
}

.wisata_judul{
    font-size: 20px;
    font-weight: bolder;
    margin-bottom: 10px;
}
.blog-wrapper p {
    margin-bottom: 30px;
    line-height: 1.6;
    font-size: 15px;
}

.center {
    text-align: center;
}

   /* Set the container width to full viewport width */

    .wisata-img {
    width: 100vw; /* Set the container width to full viewport width */
    max-height: 60vh; /* Set a maximum height of 60% of viewport height */
    overflow: hidden; /* Hide any image overflow outside the container */
    display: flex; /* Use flexbox to center the image */
    justify-content: center;
    align-items: center;
}

.wisata-img img {
    width: 100%; /* Set the image width to 100% */
    height: 100%; /* Set the image height to 100% to maintain aspect ratio */
    object-fit: cover; /* Crop the image to fit the container while maintaining aspect ratio */
}
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
<body>
</html>

