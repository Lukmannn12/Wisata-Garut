@extends('layouts.admin2')

@section('content')
<div class="content-wrapper" style="background-color: #DFDFDE;">
    <div class="content-header">
        <div class="container-fluid">
            
        </div>
    </div>
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <div class="row"> 
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                   <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0" style="color: #000;">Data Wisata</h4>
                        </div>
                    </div>
                    <a href="{{ route('tambahwisata') }}" class="btn btn-primary mb-3" style="margin-top: 30px;">Tambah Wisata</a>
                    <div class="table-responsive" style="margin-top: 50px; color:#000;">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Wisata</th>
                                    <th scope="col">Kecamatan</th> <!-- Tambahkan kolom kecamatan -->
                                    <th scope="col">Sejarah</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Fasilitas</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Harga Tiket</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Di Buat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $row->nama_wisata }}</td>
                                    <td>{{ $row->kecamatan->nama_kecamatan }}</td>
                                    <td style="text-align: justify;">{{ $row->sejarah }}</td>
                                    <td style="text-align: justify;">{{ $row->deskripsi }}</td>
                                    <td style="text-align: justify;">
                                        @php
                                            $facilities = explode(',', $row->fasilitas);
                                        @endphp
                                        <ul>
                                            @foreach ($facilities as $facility)
                                                <li>{{ $facility }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td style="text-align: justify;">{{ $row->lokasi }}</td>
                                    <td style="text-align: justify;">{{ $row->harga_tiket }}</td>
                                    <td>
                                        <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->nama_wisata }}" width="100" >
                                    </td>
                                    <td>{{ $row->created_at->format('D M Y') }}</td>
                                    <td>
                                        <a href="/tampilwisata/{{ $row->id }}" class="btn btn-info">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href="/deletewisata/{{ $row->id }}" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
