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
                <h2 style="font-size: 36px; font-weight:bolder; margin-top: 50px; text-align:center;">Edit Kecamatan</h2>
                        <form action="{{ route('updatekecamatan', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_kecamatan">Nama Kecamatan</label>
                                <input type="text" name="nama_kecamatan" class="form-control" value="{{ $data->nama_kecamatan }}" required>
                            </div>
                            <div class="mb-3 mt-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" value="{{ $data->gambar }}"class="form-control" id="gambar" aria-describedby="emailHelp">
                    </div>
                    <div style="margin-top: 10px;">
                        <label class="form-label">Gambar Saat Ini</label>
                        <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->nama_kecamatan }}" style="max-width: 100px;">
                    </div>
                          
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 50px; border:none; margin-right:10px;">Update</button>
                        </form>
                        </div>
        </div>
    </div>
</main>
</body>
</html>
