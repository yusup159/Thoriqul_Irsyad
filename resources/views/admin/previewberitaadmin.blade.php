@extends('layoutadmin.templatedetailkegiatan')
@section('navigasi')
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('databerita/admin') }}">
                <h5>
                    < Kembali</h5>
            </a>
        </div>
    </nav>
@endsection
@section('kontendetailkegiatan')
    <div class="container mt-5">
        <div class="berita-utama">
            <img src="{{ asset('storage/fotoberita/' . basename($berita->fotoberita)) }}" alt="" class="image">
            <div class="text">
                <h3 class="mt-5 bold">{{ $berita->judul }}</h3>
                <p class="mt-3">{!! $berita->deskripsi !!}</p>
            </div>
        </div>
    </div>
@endsection
