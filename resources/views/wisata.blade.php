@extends('layouts.main')

@section('container')
<body>
  <div class="container mt-4"style="padding:40px;">
    <h2 class="fw-bold text-center mb-4 fade-in-up-element" style="margin-top: 10px; margin-bottom: 30px; font-weight:bolder;">Destinasi Wisata</h2>
    <div class="row">
        @php
            if (empty($data)) {
                dd("Variabel \$data kosong atau tidak terdefinisi!");
            }
        @endphp
      @foreach ($data as $row)
      <div class="col-md-4">
        <div class="card border-secondary mb-3 fade-in-up-element">
          <img src="{{ asset('storage/' . $row->gambar) }}" class="card-img-top" alt="{{ $row->nama_wisata }}" style="height: 280px; object-fit: cover;">
          <div class="card-body" style="padding-bottom: 0;"> <!-- Reduce the bottom padding of the card body -->
            <h5 class="card-title fw-bold text-center">{{ $row->nama_wisata }}</h5>
            <h6 class="card-text fw-bold text-center">{{ $row->kecamatan->nama_kecamatan }}</h6>
            <p class="card-text text-center" style="font-size:12px;">{{ \Illuminate\Support\Str::limit($row->deskripsi, 100) }}</p>
            <div class="fade-in-up-element d-flex justify-content-center">
                <a href="{{ route('detailwisata', $row->id) }}" class="btn" style="margin-bottom: 0; margin-top:0;">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  </body>
</div>
<footer>
  <p>Copyright <i class="fas fa-copyright"></i> 2023 WisataGarut</p>
</footer>
@endsection
