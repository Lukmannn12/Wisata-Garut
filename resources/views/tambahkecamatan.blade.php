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
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0" style="color: #000;">Tambah Kecamatan</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="{{ route('simpankecamatan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_kecamatan">Nama Kecamatan</label>
                                <input type="text" name="nama_kecamatan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" id="image" name="gambar" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
