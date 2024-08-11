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
                            <h4 class="mb-0" style="color: #000;">Tabel Lokasi Destinasi</h4>
                        </div>
                    </div>
                    <!-- Tambahkan tombol untuk menambah data lokasi_destinasi -->
                    <a href="{{ route('tambahlokasi') }}" class="btn btn-primary mb-3" style="margin-top: 30px;">Tambah Lokasi Destinasi</a>
                    <div class="table-responsive" style="margin-top: 50px; color:#000;">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Travel Time (Car)</th>
                                    <th scope="col">Travel Time (Motor)</th>
                                    <th scope="col">Dibuat</th>
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
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td>
                                        <img src="{{ 'storage/' . $row->image }}" alt="{{ $row->name }}" width="100">
                                    </td>
                                    <td>{{ $row->travel_time_car }} menit</td>
                                    <td>{{ $row->travel_time_motor }} menit</td>
                                    <td>{{ $row->created_at->format('D M Y') }}</td>
                                     <td>
                                        <a href="/tampilkanlokasi/{{ $row->id }}" class="btn btn-info">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href="/delete-lokasi/{{ $row->id }}" class="btn btn-danger">
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
