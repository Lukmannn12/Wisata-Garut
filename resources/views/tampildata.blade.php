<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Admin Pariwisata</title>
  <link rel="shortcut icon" href="img/logo.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" style="background-image: url('img/4.jpg'); height: 500px; width: 100%;
 background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="mt-4 mb-4">
        <h1 class="text-center">Edit data</h1>
    </div>
    <div class="container" style="margin-bottom: 40px;">
        <div class="row justify-content-center">
            <div class="col-8 mt-4">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{ $data->id }}" method="post" enctype="multipart/form-data">
                             @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
                                value="{{ $data->nama}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" 
                                value="{{ $data->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Destinasi</label>
                                <select class="form-select form-select-lg mb-3" name="destinasi" aria-label=".form-select-lg example">
                                <option value="{{ $data->wisata->id }}" selected>{{ $data->wisata->nama_wisata }}</option>
                                    @foreach ($wisatas as $wisata)
                                        <option value="{{ $wisata->id }}">{{ $wisata->nama_wisata }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" 
                                value="{{ $data->tanggal}}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Tiket</label>
                                <input type="number" name="jumlahtiket" class="form-control" id="exampleInputEmail1"
                                value="{{ $data->jumlahtiket}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
