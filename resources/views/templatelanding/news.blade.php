<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AksiCendekia</title>

    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('pesantren/css/news.css')}}">
</head>

<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h5>Logo Pesantren</h5>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
                        Portal Berita Pondok Pesantren ABC
                    </h1>
                    <p>Temukan berita terbaru mengenai pondok pesantren ABC disini</p>
                    <a href="#kontenberita">
                        <button class="btn-ppdb">
                            <img src="{{ asset('pesantren/asset/icon/arrow.svg')}}" alt="">Baca Berita
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Hero -->

    <!-- Card -->
    <div class="container"  id="kontenberita">
        <div class="galang">
            <h3>Pusat Informasi</h3>
            <h1>Informasi Terbaru Pondok Pesantren</h1>
        </div>
        <div class="bungkus-galang">
            <div class="row">
                @foreach($berita as $key => $berita)
                <div class="card col-lg-4 mb-3">
                    <a href="./detailKegiatan.html">
                        <img src="{{ asset('storage/fotoberita/' . basename($berita->fotoberita)) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $berita->judul }}</h5>
                            <p>Kegiatan pengajian rutin sering sekali diadakan oleh pondok pesantren ABC. Fungsinya
                                adalah
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach
                
               
                
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-md-4">
                    <h5>Menu</h5>
                    <p><a class="link-opacity-100" href="./index.html">Beranda</a></p>
                    <p><a class="link-opacity-100" href="./profil.html">Profil</a></p>
                    <p><a class="link-opacity-100" href="./news.html">Portal Berita</a></p>
                    <p><a class="link-opacity-100" href="./faq.html">FAQ</a></p>

                </div>

                <!-- Column 2 -->
                <div class="col-md-4">
                    <h5>Sosial Media</h5>
                    <p><a class="link-opacity-100" href="#">Instagram</a></p>
                    <p><a class="link-opacity-100" href="#">Tiktok</a></p>
                </div>

                <!-- Column 3 -->
                <div class="col-md-4">
                    <h5>PondokPesantren</h5>
                    <p>0272 - 897237</p>
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