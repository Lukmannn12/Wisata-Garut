@extends('layouts.main')

@section('container')
<body>
<div class="container mt-4">
                    <form action="{{ route('search') }}" method="GET" class="search-form">
                      <div class="search text-center" style="margin-bottom: 40px; margin-top:40px;">
                          <input placeholder="Cari data" type="text" name="q">
                          <button type="submit">Cari</button>
                        </div>                
                    </form>
      
  <div class="row">
    @if ($message = Session::get('succes'))
    <div class="alert alert-success" role="alert">
      {{ $message }}
    </div>
    @endif
    <table class="table">
      <thead>
        <tr class="table-success">
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Destinasi</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Jumlah Tiket</th>
          <th scope="col">Pembayaran</th>
          <th scope="col">Di Buat</th>
        </tr>
      </thead>
      <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($data as $row)
        <tr>
          <th scope="row">{{ $no++}}</th>
          <td>{{ $row->nama}}</td>
          <td>{{ $row->email}}</td>
          <td>{{ $row->wisata->nama_wisata }}</td>
          <td>{{ $row->tanggal}}</td>
          <td>{{ $row->jumlahtiket}}</td>
           <td>{{ $row->pembayaran}}</td>
          <td>{{ $row->created_at->format('D M Y') }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
</body>
@endsection