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
                            <h4 class="mb-0" style="color: #000;">Tabel Pemesanan</h4>
                        </div>
                    </div>
                    <div class="table-responsive" style="margin-top: 50px; color:#000;">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Destinasi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah Tiket</th>
                                    <th scope="col">Metode Pembayaran</th>
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
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->wisata->nama_wisata }}</td>
                                    <td>{{ $row->tanggal }}</td>
                                    <td>{{ $row->jumlahtiket }}</td>
                                    <td>{{ $row->pembayaran}}</td>
                                    <td>{{ $row->created_at->format('D M Y') }}</td>
                                    <td>
                                        <!-- <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">
                                        <i class="fa fa-edit"></i> Edit
                                    </a> -->
                                        <a href="/delete/{{ $row->id }}" class="btn btn-danger">
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