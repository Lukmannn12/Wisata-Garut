@extends('layouts.main')
@section('container')

<body>
  </div>
  <div class="card" style="height: 500px; width: 100%; background-image: url('img/pantai2.jpg'); background-size: cover; background-position: center;">
    <div class="card-img-overlay">
    </div>
  </div>
  <br>

  <body>
    <section id="hero" class="fade-in-up-element" style="padding: 100px;">
      <div id="hero-img">
        <img src="img/beach2.png" width="300" alt="hero banner">
      </div>
      <div id="hero-greeting">
        <h5 style="border-bottom: 3px solid black;">Tentang Kami</h5><br>
        <p style="text-align: justify;">Pariwisata Garut menyediakan informasi dan berbagai macam tempat wisata yang ada di kabupaten Garut.
          Sehingga memudahkan wisatawan baik lokal maupun manca negara. Kami berkomitmen untuk selalu memberikan pelayanan prioritas kepada customer,
          sebelum-ketika-sesudah dari tempat wisata garut.
        </p><br>
        <h5 style="border-bottom: 3px solid black;">Kontak Kami</h5>
        <div class="row">
          <div class="col-sm-4 mb-3 mb-sm-0">
            <img src="img/maps.png" width="100" alt="hero banner"> Alamat
            <p class="card-text text-center">Perkantoran<br> Wisata Garut</p>
          </div>
          <div class="col-sm-4 mb-3 mb-sm-0">
            <img src="img/phone.png" width="70" alt="hero banner"> Nomor Telepon
            <p class="card-text text-center">087826785713</p>
          </div>
        </div>
    </section>
    <div style="width: 100%; height: 70vh;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.558754941656!2d107.90870001570725!3d-7.
        228699696992901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e4a7e002002b%3A0x4027f9a90c3e860!2sGarut%2C%20Kabupaten%20Garut%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1690795948556!5m2!1sen!2sid" 
        style="width: 100%; height: 100%;" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </body>
  <footer>
    <p>Copyright <i class="fas fa-copyright"></i> 2023 WisataGarut</p>
  </footer>
</body>
@endsection