<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thoriqul Irsyad</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('pesantren/css/index.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-kiri">
                    <h1>
                        Selamat Datang Di Website Pondok Pesantren Thoriqul Irsyad
                    </h1>
                    <p>Sebuah lembaga pendidikan modern yang mendorong kreativitas mahasiswa untuk berkontribusi pada
                        kemajuan bangsa.</p>
                    <a href="{{ route('profil') }}">
                        <button class="btn-ppdb">
                            <img src="{{ asset('pesantren/asset/icon/arrow.svg') }}" alt="">Lihat Profil &
                            Sejarah
                        </button>
                    </a>
                </div>
                <div class="col-lg-5 hero-kanan mt-6">
                    <img src="{{ asset('pesantren/asset/img/selamatdatang.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="partnership">
        <div class="container-fluid">
            <div class="header text-center">
                <h3>Berpengalaman & Berdedikasi tinggi</h3>
                <h1> Pengasuh dan Pengurus<br>Pondok Pesantren</h1>
            </div>
            <div class="slider-container">
                <div class="slider-wrapper">
                    <div class="slide">
                        <img src="{{ asset('pesantren/asset/img/usttads/Adi.svg') }}" alt="Slide 3">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('pesantren/asset/img/usttads/Felix.svg') }}" alt="Slide 1">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('pesantren/asset/img/usttads/Gus Iqdam.svg') }}" alt="Slide 2">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('pesantren/asset/img/usttads/Hanan Ataki.svg') }}" alt="Slide 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partnership -->

    <!-- Card -->
    <div class="container">
        <div class="galang">
            <h3>Pusat Informasi</h3>
            <h1>Informasi Terbaru Pondok Pesantren</h1>
        </div>
        <div class="bungkus-galang">
            <div class="row">
                @foreach ($kegiatan as $key => $kegi)
                    <div class="card col-lg-4 mb-3">
                        <a href="{{ route('detailkegiatan', ['id' => $kegi->id]) }}">
                            <img src="{{ asset('storage/fotokegiatan/' . basename($kegi->fotokegiatan)) }}"
                                class="card-img-top" style="height: 200px;" alt="...">
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


    </div>

    <!-- Card -->

    <!-- Review -->
    <div class="review">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-kiri">
                    <p class="trust">Dipercaya oleh 1000+ Santri</p>
                    <h1>
                        Generasi islam yang bertakwa dan berbudi pekerti luhur
                    </h1>
                    <p>Bantu ulas kami untuk membantu kami dalam memberikan yang terbaik untuk santri santri kami
                        selanjutnya</p>

                </div>
                <div class="col-lg-5 hero-kanan-review" style="margin-top: 30px; margin-bottom: 30px;">
                    <img src="{{ asset('pesantren/asset/img/generasi.jpg') }}" style="width: 600px; height: 420px;">
                </div>
            </div>
        </div>
    </div>
    <!-- End Review -->

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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
