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
                            <h4 class="mb-0" style="color: #000;">Data Kecamatan</h4>
                        </div>
                    </div>
                    <a href="{{ route('tambahkecamatan') }}" class="btn btn-primary mb-3" style="margin-top: 30px;">Tambah Kecamatan</a>
                    <div class="table-responsive" style="margin-top: 50px; color:#000;">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kecamatan</th>
                                    <!-- <th scope="col">Alamat</th>
                                    <th scope="col">Sejarah</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Fasilitas</th>
                                    <th scope="col">Lokasi</th> -->
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
                                    <td>{{ $row->nama_kecamatan }}</td>
                                    {{-- <!-- <td>{{ $row->alamat }}</td>
                                    <td>{{ $row->sejarah }}</td>
                                    <td>{{ $row->deskripsi }}</td> --}}
                                    {{-- <td>
                                        @php
                                            $facilities = explode(',', $row->fasilitas);
                                        @endphp
                                        <ul>
                                            @foreach ($facilities as $facility)
                                                <li>{{ $facility }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ $row->lokasi }}</td> --> --}}
                                    <td>
                                        <img src="{{ asset('storage/' . $row->gambar) }}" alt="{{ $row->nama_kecamatan }}" width="100" >
                                    </td>
                                    <td>{{ $row->created_at->format('D M Y') }}</td>
                                    <td>
                                        <a href="/tampilkecamatan/{{ $row->id }}" class="btn btn-info">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                       <a href="/deletekecamatan/{{ $row->id }}" class="btn btn-danger">
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
