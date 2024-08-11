@extends('layouts.main')

@section('container')
<body>

    <div class="mt-4 mb-4" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h1 class="text-center" style="font-family:'Poppins', sans-serif; font-weight: bold; font-size: 30px;  margin-top: 50px;">Data Pemesanan</h1>
        <p style="font-family:'Poppins', sans-serif; font-weight: bold; font-size: 16px;">Lihat Data Pemesanan jika anda sudah melakukan pemesanan tiket pada form yang tertera dibawah ini.</p>
        <div style="display: flex; justify-content: center; align-items: center;">
            <a href="/pemesan" class="btn">Lihat Data Pemesanan</a>
        </div>
    </div>
    <div class="mt-4 mb-4" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h1 class="text-center" style="font-family:'Poppins', sans-serif; font-weight: bold; font-size: 30px;  margin-top: 50px;">Form Pemesanan</h1>
        <p style="font-family:'Poppins', sans-serif; font-weight: bold; font-size: 16px;">Silahkan isi form pemesanan jika ingin memesan tiket.</p>
    </div>
    <div class="container" style="margin-bottom: 40px;">
        <div class="row justify-content-center">
            <div class="col-8 mt-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tambahdata') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" id="exampleInputEmail1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email@gmail.com" id="exampleInputEmail1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Destinasi</label>
                                <select class="form-select form-select-lg mb-3" name="id_wisata" aria-label=".form-select-lg example">
                                    <option selected>Pilih Destinasi</option>
                                    @foreach ($data as $wisata)
                                        <option value="{{ $wisata->id }}">{{ $wisata->nama_wisata }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Tiket</label>
                                <input type="number" name="jumlahtiket" class="form-control" id="exampleInputEmail1" required>
                            </div>
                            <div class="mb-3">
                                <p>Note : Metode Pembayaran Di Lakukan Secara Offline.</p>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</div>
<footer>
  <p>Copyright <i class="fas fa-copyright"></i> 2023 WisataGarut</p>
</footer>
@endsection
