@extends('layoutadmin.main')
@section('atassidebar')
<div class="brand-link">
  <img src="{{ asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <p>Thoriqul Irsyad</p>
</div>
@endsection
@section('sidebar')
<div class="sidebar">
  <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
    <div class="image">
      <img src="{{ asset('storage/fotopengurus/' . basename(Auth::user()->fotopengurus)) }}" alt="User Image" class="img-circle elevation-2" style="width: 70px; height: 70px; object-fit: cover;">
    </div>
    <div class="info ml-3">
      <h6 class="d-block">{{ Auth::user()->name }}</h6>
    </div>
  </div>
  
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('dashboard/admin') }}" class="nav-link {{ request()->routeIs('dashboard/admin') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('datakegiatan/admin') }}" class="nav-link {{ request()->routeIs('datakegiatan/admin') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                  Kegiatan
              </p>
          </a>
      </li>
      
        <li class="nav-item">
            <a href="{{ route('databerita/admin') }}" class="nav-link {{ request()->routeIs('databerita/admin') ? 'active' : '' }}">
                <i class="nav-icon fas fa-columns"></i>
                <p>
                 Berita
                </p>
              </a>
        </li>
      </ul>
    </nav>
  </div>  
@endsection
@section('navbarcontent')
<nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav ml-auto">  
      <li class="nav-item">
        <a class="nav-link"  href="{{ route('logout') }}" role="button">
            Logout
        </a>
      </li>
    </ul>
  </nav>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kegiatan Admin</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                      
                      <a href="{{ route('tambahkegiatan/admin') }}" class="btn btn-primary">Tambah Kegiatan</a>
                  </div>
                </div>
            </div>
        </div>
        <section class="content">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Judul</th>
                        <th style="width: 150px; height: auto;">Deskripsi</th>
                        <th>UserID</th>
                        <th>Foto</th>
                        <th>Tanggal</th>
                        <th>Created_at</th>
                        <th>Update_at</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kegiatan as $key => $kegiatan)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $kegiatan->judul }}</td>
                            <td style="width: 150px; height: auto;" >{!! $kegiatan->deskripsi !!}</td>
                            <td>{{ $kegiatan->user_id }}</td>
                            <td><img src="{{ asset('storage/fotokegiatan/' . basename($kegiatan->fotokegiatan)) }}" style="width: 70px; height: 70px; "></td>
                            <td>{{ $kegiatan->tanggal }}</td>
                            <td>{{ $kegiatan->created_at }}</td>
                            <td>{{ $kegiatan->updated_at }}</td>
                            <td>Aksi</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection
<script>
  var currentUrl = window.location.pathname;

  document.querySelectorAll('.nav-link').forEach(function (element) {
      if (element.getAttribute('href') === currentUrl) {
          element.classList.add('active');
      }
  });
</script>