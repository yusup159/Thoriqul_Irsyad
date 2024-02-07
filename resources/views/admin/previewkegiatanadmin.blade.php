@extends('layoutadmin.templatedetailkegiatan')
@section('navigasi')
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('datakegiatan/admin') }}">
            <h5>< Kembali</h5>
        </a>
    </div>
</nav>
@endsection
@section('kontendetailkegiatan')
    <div class="container mt-5">
        <div class="berita-utama">
            <img src="{{ asset('storage/fotokegiatan/' . basename($kegiatan->fotokegiatan)) }}" alt="" class="image">
            <div class="text">
                <h3 class="mt-5 bold">{{ $kegiatan->judul }}</h3>
                <p class="mt-3">{!! $kegiatan->deskripsi !!}</p>
            </div>
        </div>
    </div>
@endsection
