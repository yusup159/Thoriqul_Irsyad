<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thoriqul Irsyad</title>

    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('pesantren/css/news.css') }}">
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
                        Portal Berita Pondok Pesantren Thoriqul Irsyad
                    </h1>
                    <p>Temukan berita terbaru mengenai pondok pesantren Thoriqul Irsyad disini</p>
                    <a href="#kontenberita">
                        <button class="btn-ppdb">
                            <img src="{{ asset('pesantren/asset/icon/arrow.svg') }}" alt="">Baca Berita
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Card -->
    <div class="container" id="kontenberita">
        <div class="galang">
            <h3>Pusat Informasi</h3>
            <h1>Informasi Terbaru Pondok Pesantren</h1>
        </div>

        <div class="bungkus-galang">
            <div class="row">
                @foreach ($berita as $key => $item)
                    <div class="card col-lg-4 mb-3">
                        <a href="{{ route('detailberita', ['id' => $item->id]) }}">
                            <img src="{{ asset('storage/fotoberita/' . basename($item->fotoberita)) }}"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p>{!! substr(strip_tags($item->deskripsi), 0, 100) !!}...</p>
                                <div style="text-align: right;">
                                    <a href="{{ route('detailberita', ['id' => $item->id]) }}">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        {{ $berita->withQueryString()->links('pagination::bootstrap-5') }}
    </div>

    <!-- End Card -->

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
    <!-- End Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tambahkan link Bootstrap Icons (BI) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
</body>

</html>
