@extends('layouts.main')

@section('container')
<div class="container mt-4" style="padding: 50px;">
    <h2 class="fw-bold text-center" style="font-weight: bolder;">Destinasi Terdekat</h2>
    <br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($data as $item)
        <div class="col mb-4">
            <div class="card h-100">
                <img src="{{ asset('storage/' . $item['image']) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title text-center fw-bold" style="font-size: 20px;">{{ $item['name'] }}</h3>
                    {{-- <p class="card-text">{{ Str::limit($item['description'], 100) }}</p> --}}
                    <p class="card-text text-center">Transportasi Mobil : {{ $item['travel_time_car'] }} menit.</p>
                    <p class="card-text text-center">Transportasi Motor : {{ $item['travel_time_motor'] }} menit.</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <div class="alert alert-danger" role="alert">
                Lokasi tidak ditemukan.
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection
