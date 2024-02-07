@extends('layoutadmin.templatedetail')
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
