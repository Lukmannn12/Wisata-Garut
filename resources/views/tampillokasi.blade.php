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
                <h2 style="font-size: 36px; font-weight:bolder; margin-top: 50px; text-align:center;">Edit Lokasi</h2>
                <form action="{{ route('updatelokasi', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lokasi</label>
                        <input type="text" name="name" value="{{ $data->name }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="6">{{ $data->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="travel_time_car" class="form-label">Travel Time (Car)</label>
                        <input type="number" name="travel_time_car" value="{{ $data->travel_time_car }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="travel_time_motor" class="form-label">Travel Time (Motor)</label>
                        <input type="number" name="travel_time_motor" value="{{ $data->travel_time_motor }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp">
                    </div>
                    <br>
                    <div style="margin-top: 10px;">
                        <label class="form-label">Gambar Saat Ini</label>
                        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}" style="max-width: 100px;">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 50px; border:none; margin-right:10px;">Edit</button>
                    <a href="/tabellokasi" class="btn btn-primary" style="margin-bottom: 50px; border:none; background-color:red;">Batal</a>
                </form> 
            </div>
        </div>
    </div>
</main>
<!-- Add your scripts and other elements as before -->
</body>
</html>
