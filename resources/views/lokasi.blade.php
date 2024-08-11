@extends('layouts.main')

@section('container')

<body>
</div>

  <div class="card-body fade-in-up-element">
  <div class="card-container">
    <select class="form-select-lokasi w-50 p-2" aria-label="Default select example">
      <option selected>Pilih Lokasi</option>
      <option value="1">Bandung</option>
    </select>
  </div>
  <div class="card-container" style="margin-top: 30px;">
    <a href="/detail" class="btn">Cari</a>
  </div>
</div>
</div>
</body>

<footer>
  <p>Copyright <i class="fas fa-copyright"></i> 2023 WisataGarut</p>
</footer>

@endsection
