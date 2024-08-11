@extends('layouts.main')
@section('container')
<body>
<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
    }
</style>
<form action="{{ route('kecamatan') }}" method="GET" style="padding: 50px;">
    @csrf
    <label for="kecamatan" class="form-label">Pilih Kecamatan</label>
    <select class="form-select form-select-lg mb-3" name="selected_kecamatan" aria-label=".form-select-lg example">
        <option selected disabled>Pilih Kecamatan</option>
        @foreach ($kecamatans as $kecamatan)
            <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn">Cari</button>
</form>

<div class="card-container" style="padding: 20px;"> 
    @foreach ($selectedKecamatan as $kecamatan)
        @foreach ($kecamatan->wisata as $wisata)
            <div class="col-lg-4 col-md-6 col-sm-12"> 
                <div class="card border-secondary mb-3 fade-in-up-element" style="margin-right: 25px;">
                    <div class="card-body" style="padding-bottom: 0;">
                        <img src="{{ asset('storage/' . $wisata->gambar) }}" class="card-img-top" alt="{{ $wisata->nama_wisata }}"
                        style="height: 280px; object-fit: cover;">
                        <h5 class="card-title fw-bold text-center">{{ $wisata->nama_wisata }}</h5>
                        <p class="card-text text-center" style="font-size:12px;">{{ \Illuminate\Support\Str::limit($wisata->deskripsi, 100) }}</p>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('detailwisata', $wisata->id) }}" class="btn" style="margin-bottom: 0; margin-top:0;">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
</div>
</body>
@endsection
