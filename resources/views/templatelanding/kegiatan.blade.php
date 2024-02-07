<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thoriqul Irsyad</title>

    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('pesantren/css/kegiatan.css') }}">
</head>

<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
                <img src="{{ asset('pesantren/asset/img/logopesantren.png') }}" style="width: 70px; margin-right: 10px;"
                    alt="">
                <h5 style="margin: 0;">Thoriqul Irsyad</h5>
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <!-- Tambahkan class text-center di sini -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profil') }}">Profil & Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('berita') }}">Portal Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kegiatan') }}">Kegiatan</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!-- End Navigasi -->

    <!-- Hero -->
    <div class="hero text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg hero-kiri">
                    <h1>
                        Kegiatan Rutin Pondok Pesantren Thoriqul Irsyad
                    </h1>
                    <p>Informasi lengkap mengenai kegiatan dan program kerja pondok pesantren Thoriqul Irsyad</p>
                    <a href="#isikegiatan">
                        <button class="btn-ppdb">
                            <img src="{{ asset('pesantren/asset/icon/arrow.svg') }}" alt="">Daftar Kegiatan
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Hero -->

    <!-- Card -->
    <div class="container" id="isikegiatan">
        <div class="kegiatan">
            <h3>Kegiatan Rutin</h3>
            <h1>Agenda Rutin Pondok Pesantren ABC</h1>
        </div>
        <div class="bungkus-galang">
            <div class="row">
                @foreach ($kegiatan as $key => $kegi)
                    <div class="card col-lg-4 mb-3">
                        <a href="{{ route('detailkegiatan', ['id' => $kegi->id]) }}">
                            <img src="{{ asset('storage/fotokegiatan/' . basename($kegi->fotokegiatan)) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kegi->judul }}</h5>
                                <p>{!! substr(strip_tags($kegi->deskripsi), 0, 100) !!}...</p>
                                <div style="text-align: right;">
                                    <a href="{{ route('detailkegiatan', ['id' => $kegi->id]) }}">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        {{ $kegiatan->withQueryString()->links('pagination::bootstrap-5') }}
    </div>

    <!-- Card -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4">
                    <h5>Menu</h5>
                    <p><a class="link-opacity-100" href="{{ route('index') }}">Beranda</a></p>
                    <p><a class="link-opacity-100" href="{{ route('profil') }}">Profil</a></p>
                    <p><a class="link-opacity-100" href="{{ route('berita') }}">Portal Berita</a></p>
                    <p><a class="link-opacity-100" href="https://wa.me/6285293239446">FAQ</a></p>
                </div>

                <!-- Column 2 -->
                <div class="col-md-4">
                    <h5>Sosial Media</h5>
                    <p><a class="link-opacity-100" href="#">Instagram</a></p>
                    <p><a class="link-opacity-100"
                            href="https://youtube.com/@ponpesthoriqulirsyad9284?si=JcXtZp7c-eFBTsY4">Youtube</a></p>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4">
                    <h5>PondokPesantren</h5>
                    <p><a class="link-opacity-100" href="https://wa.me/6285293239446">+62 852-9323-9446</a></p>
                    <p>PondokPesantren.com</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tambahkan link Bootstrap Icons (BI) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
</body>

</html>
