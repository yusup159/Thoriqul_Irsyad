@extends('layoutadmin.main')
@section('atassidebar')
    <div class="brand-link">
        <img src="{{ asset('lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <p>Thoriqul Irsyad</p>
    </div>
@endsection
@section('sidebar')
    <div class="sidebar">
        <a href="{{ route('profil/admin') }}">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                <div class="image">
                    <img src="{{ asset('storage/fotopengurus/' . basename(Auth::user()->fotopengurus)) }}" alt="User Image"
                        class="img-circle elevation-2" style="width: 70px; height: 70px; object-fit: cover;">
                </div>
                <div class="info ml-3">
                    <h6 class="d-block">{{ Auth::user()->name }}</h6>
                </div>
            </div>
        </a>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if (auth()->user()->role_id != 2)
                    <li class="nav-item">
                        <a href="{{ route('datauser/admin') }}"
                            class="nav-link {{ request()->routeIs('datauser/admin') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Data User
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    @if (auth()->user()->role_id == 2)
                        <a href="{{ route('dashboard/pengurus') }}"
                            class="nav-link {{ request()->routeIs('dashboard/pengurus') ? 'active' : '' }}">
                        @else
                            <a href="{{ route('dashboard/admin') }}"
                                class="nav-link {{ request()->routeIs('dashboard/admin') ? 'active' : '' }}">
                    @endif
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('datakegiatan/admin') }}"
                        class="nav-link {{ request()->routeIs('datakegiatan/admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Kegiatan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('databerita/admin') }}"
                        class="nav-link {{ request()->routeIs('databerita/admin') ? 'active' : '' }}">
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
                <a class="nav-link" href="{{ route('logout') }}" role="button">
                    Logout
                </a>
            </li>
        </ul>
    </nav>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        @if (auth()->user()->role_id == 2)
                            <h1 class="m-0">Data Berita</h1>
                        @else
                            <h1 class="m-0">Berita Admin</h1>
                        @endif
                    </div>
                    <div class="col-sm-6 text-right">

                        <a href="{{ route('tambahberita/admin') }}" class="btn btn-primary">Tambah Berita</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th style="width: 10px">No</th>
                        <th>Judul</th>
                        @if (auth()->user()->role_id != 2)
                            <th>Pembuat</th>
                        @endif
                        <th>Foto</th>
                        <th>Tanggal Pembuatan</th>
                        @if (auth()->user()->role_id != 2)
                            <th>Created_at</th>
                            <th>Update_at</th>
                        @endif
                        <th colspan="3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $key => $brt)
                        <tr>
                            <td>{{ $berita->firstItem() + $loop->index }}</td>
                            <td>{{ $brt->judul }}</td>
                            @if (auth()->user()->role_id != 2)
                                <td>{{ $brt->user->name }}</td>
                            @endif
                            <td><img src="{{ asset('storage/fotoberita/' . basename($brt->fotoberita)) }}"
                                    style="width: 140px; height: 100px; "></td>
                            <td>{{ \Carbon\Carbon::parse($brt->tanggal)->format('j F Y') }}</td>
                            @if (auth()->user()->role_id != 2)
                                <td>{{ $brt->created_at }}</td>
                                <td>{{ $brt->updated_at }}</td>
                            @endif
                            <td><a href="{{ route('showberita/admin', ['id' => $brt->id]) }}" type="button"
                                    class="btn btn-secondary">Lihat</a></td>
                            <td><a href="{{ route('editberita/admin', ['id' => $brt->id]) }}" type="button"
                                    class="btn btn-success"
                                    onclick="return confirm('Yakin Akan Mengubah Data Ini?')">Edit</a></td>
                            <td><a href="{{ route('deleteberita/admin', ['id' => $brt->id]) }}" type="button"
                                    class="btn btn-danger"
                                    onclick="return confirm('Yakin Akan Menghapus Data Ini?')">Hapus</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $berita->withQueryString()->links('pagination::bootstrap-5') }}
        </section>
    </div>
@endsection

<script>
    var currentUrl = window.location.pathname;

    document.querySelectorAll('.nav-link').forEach(function(element) {
        if (element.getAttribute('href') === currentUrl) {
            element.classList.add('active');
        }
    });
</script>
