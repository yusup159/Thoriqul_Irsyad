@extends('layoutadmin.main')
@section('atassidebar')
<div class="brand-link">
    <img src="{{ asset('lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <p>Thoriqul Irsyad</p>
</div>
@endsection
@section('sidebar')
<div class="sidebar">
  <a href="{{ route('profil/admin') }}">
  <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
    <div class="image">
      <img src="{{ asset('storage/fotopengurus/' . basename(Auth::user()->fotopengurus)) }}" alt="User Image" class="img-circle elevation-2" style="width: 70px; height: 70px; object-fit: cover;">
    </div>
    <div class="info ml-3">
      <h6 class="d-block">{{ Auth::user()->name }}</h6>
    </div>
  </div>
  </a>
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
@section('kontenprofil')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profil Mahasiswa</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg">
                    <div class="donasi">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <ul>
                            @foreach ($errors->all() as $item)
                            <li>{{$item}}</li>
                                
                            @endforeach
                          </ul>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif
                        <form action="{{ route('updateprofil/admin', ['id' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <img class="profile mb-3" src="{{ asset('storage/fotopengurus/' . basename(Auth::user()->fotopengurus)) }}" alt=""><br>
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <input class="form-control" type="file" name="fotopengururs" id="foto" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="name">Username</label>
                                                <input class="form-control" type="text" name="name" id="username" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="Alamat Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="password_lama">Password Lama</label>
                                                <input class="form-control" type="password" name="password_lama" id="old_password" placeholder="Password Lama">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="password_baru">Password Baru</label>
                                                <input class="form-control" type="password" name="password_baru" id="new_password" placeholder="Password Baru">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="password_baru_confirmation">Password Baru</label>
                                                <input class="form-control" type="password" name="password_baru_confirmation" id="new_password" placeholder="Password Baru">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-simpan" type="submit" onclick="return confirm('Yakin Akan Mengubah Data Profil?')">Edit Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection