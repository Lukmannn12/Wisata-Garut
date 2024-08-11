@extends('layouts.main')

@section('container')

<body>
  </div>
  <section id="hero" class="fade-in-up-element">
            <div id="hero-img">
                <img src="img/Sunset-bro.png" width="550" alt="hero banner">
            </div>
            <div id="hero-greeting">
                <h1>Selamat Datang di Pariwisata Garut</h1>
                <p style="text-align: justify;">Selamat datang di website pariwisata kami, tempat di mana petualangan tak terlupakan dan keindahan alam menyatu dalam satu kesatuan. Kami mengajak Anda untuk mengeksplorasi pesona budaya, kekayaan kuliner, dan destinasi impian yang telah kami pilih dengan hati-hati untuk memberikan pengalaman terbaik bagi para pelancong
                </p>
                <div class="btn" >
                    <a href="/wisata">Mulai Sekarang</a>
                </div>
            </div>
  </section>
  <div class="card text-bg-white" style="background-image: url('img/pantai.jpg'); height: 500px; width: 100%; background-size: cover; background-repeat: no-repeat; background-position: center;">
  <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
    <h5 class="card-title text-white fw-bold" style="margin-top: 35px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-size:40px;">Jelajahi Dunia Penuh Warna</h5>
    <h1 class="card-text text-white fw-bold mt-3" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-size:60px;">KEINDAHAN KABUPATEN GARUT</h1>
  </div>
</div>
  <section id="hero" class="fade-in-up-element" style="padding: 100px; margin-top: 100px; margin-bottom:70px;">
            <div id="hero-greeting">
                <h1>Pariwisata Garut</h1>
                <p style="font-size: 16px; text-align: justify;">Garut, permata tersembunyi di Jawa Barat, memukau dengan pesona pantai, budaya, dan kuliner yang menakjubkan. Diapit oleh pantai-pantai indah seperti Pantai Santolo dan Pantai Sayang Heulang, Garut menawarkan pengalaman pantai yang menarik dengan pasir putih yang lembut dan pemandangan laut yang mempesona. 
                </p>
                <div id="hero-img1" class="d-flex">
                  <img src="img/hutan.jpg" width="150" alt="hero banner">
                  <img src="img/puncak.jpg" width="150" alt="hero banner">
                  <img src="img/santolo2.jpg" width="150" alt="hero banner">
                  <img src="img/santolo3.png" width="150" alt="hero banner">
                </div>
            </div>
            <div id="hero-img" style="margin-left: 20px;">
                <img src="img/guha.jpg" width="550" alt="hero banner">
            </div>
  </section>
</body>
<footer>
  <p>Copyright <i class="fas fa-copyright"></i> 2023 WisataGarut</p>
</footer>

@endsection