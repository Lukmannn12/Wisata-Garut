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
<body>
<main>
    <div class="page-content" style="font-family: 'Poppins', sans-serif;">
        <div class="container-fluid">
            <div class="container">
                <h2 style="font-size: 36px; font-weight:bolder; margin-top: 50px; text-align:center;">Edit Wisata</h2>
                <form action="{{ route('updatewisata', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="nama_wisata" class="form-label">Nama Wisata</label>
                            <input type="text" name="nama_wisata" value="{{ $data->nama_wisata }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="id_kecamatan">Kecamatan</label>
                            <select class="form-control" id="id_kecamatan" name="id_kecamatan" required>
                                <option value="">Pilih Kecamatan</option>
                                @foreach($kecamatans as $kecamatan)
                                    <option value="{{ $kecamatan->id }}" {{ $data->id_kecamatan == $kecamatan->id ? 'selected' : '' }}>
                                        {{ $kecamatan->nama_kecamatan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sejarah" class="form-label">Sejarah</label>
                            <textarea name="sejarah" class="form-control" rows="6">{{ $data->sejarah }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="6">{{ $data->deskripsi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <textarea name="fasilitas" class="form-control" rows="6">{{ $data->fasilitas }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <textarea name="lokasi" class="form-control" rows="6">{{ $data->lokasi }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="harga_tiket" class="form-label">Harga Tiket</label>
                            <textarea name="harga_tiket" class="form-control" rows="6">{{ $data->harga_tiket }}</textarea>
                        </div>
                        <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" value="{{ $data->gambar }}"class="form-control" id="gambar" aria-describedby="emailHelp">
                    </div>
                    <br>
                    <div style="margin-top: 10px;">
                        <label class="form-label">Gambar Saat Ini</label>
                        <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->nama_wisata }}" style="max-width: 100px;">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 50px; border:none; margin-right:10px;">Edit</button>
                    <a href="/tabelwisata" class="btn btn-primary" style="margin-bottom: 50px; border:none; background-color:red;">Batal</a>
                </form> 
            </div>
        </div>
    </div>
</main>
</body>
</html>
