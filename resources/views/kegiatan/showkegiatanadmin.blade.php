@extends('templatelanding.detailkegiatan')
@section('kontendetailkegiatan')
<div class="container mt-5">
    <div class="berita-utama">
        <img src="{{ asset('storage/fotokegiatan/' . basename($kegiatan->fotokegiatan)) }}" alt="" class="image">
        <div class="text">
            <h3 class="mt-5 bold">{{$kegiatan-> judul}}</h3>
            <p class="mt-3">{!!$kegiatan->deskripsi!!}</p>
        </div>
    </div>
</div>
@endsection