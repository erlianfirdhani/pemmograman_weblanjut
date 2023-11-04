@extends('layout')

@section('content')
    <div class="mt-4">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('images/' . $film['foto_sampul']) }}" class="card-img" alt="{{ $film['judul'] }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title">{{ $film['judul'] }}</h1>
                        <p class="card-text">Sinopsis: {{ $film['sinopsis'] }}</p>
                        <p class="card-text">Tahun: {{ $film['tahun'] }}</p>
                        <p class="card-text">Pemain: {{ implode(', ', $film['pemain']) }}</p>
                        
                        <!-- Tambahkan tombol "Kembali" dengan tautan ke halaman sebelumnya -->
                        <a href="javascript:history.go(-1)" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
@endsection
