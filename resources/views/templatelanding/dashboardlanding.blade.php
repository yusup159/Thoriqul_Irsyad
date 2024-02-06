<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pondok Pesantren</title>

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
                    <p>Sebuah lembaga pendidikan modern yang mendorong kreativitas mahasiswa untuk berkontribusi pada kemajuan bangsa.</p>
                    <a href="{{ route('profil') }}">
                        <button class="btn-ppdb">
                            <img src="{{ asset('pesantren/asset/icon/arrow.svg') }}" alt="">Lihat Profil &
                            Sejarah
                        </button>
                    </a>
                </div>
                <div class="col-lg-5 hero-kanan mt-6">
                    <img src="{{ asset('pesantren/asset/img/heroKanan.jpg') }}" alt="">
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
            <!-- Slider Code -->
            <div class="slider-container">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card rounded">
                                <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                                    <div class="image">
                                        <img src="{{ asset('pesantren/asset/img/download.jpeg') }}" alt="User Image"
                                            class="img-circle elevation-2"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="info ml-3">
                                        <h6 class="d-block">yuo</h6>

                                    </div>

                                </div>
                                <p>dfjdb</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card rounded">
                                <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                                    <div class="image">
                                        <img src="{{ asset('pesantren/asset/img/download.jpeg') }}" alt="User Image"
                                            class="img-circle elevation-2"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="info ml-3">
                                        <h6 class="d-block">yuo</h6>

                                    </div>

                                </div>
                                <p>dfjdb</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card rounded">
                                <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                                    <div class="image">
                                        <img src="{{ asset('pesantren/asset/img/download.jpeg') }}" alt="User Image"
                                            class="img-circle elevation-2"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                    </div>
                                    <div class="info ml-3">
                                        <h6 class="d-block">yuo</h6>

                                    </div>

                                </div>
                                <p>dfjdb</p>
                            </div>
                        </div>
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
        <div class="bungkus-kegiatan">
            <div class="row">
                @foreach($kegiatan as $key => $kgtn)
                <div class="card col-lg-4 mb-3">
                    <a href="{{ route('detailkegiatan') }}">
                        <img src="{{ asset('storage/fotokegiatan/' . basename($kgtn->fotokegiatan)) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kgtn->judul }}</h5>
                            <?php
                                $deskripsi = $kgtn->deskripsi;
                                $potongan_deskripsi = substr($deskripsi, 0, 250); 
                                echo "<p class='text-truncate'>$potongan_deskripsi...</p>";
                                ?>
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
                    <img src="{{ asset('pesantren/asset/img/27da5d0dc1a280ab5b29b1429b8a68f6.jpeg') }}"
                        style="width: 600px; height: 420px;">
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
                    <p><a class="link-opacity-100" href="./index.html">Beranda</a></p>
                    <p><a class="link-opacity-100" href="./profil.html">Profil</a></p>
                    <p><a class="link-opacity-100" href="./news.html">Portal Berita</a></p>
                    <p><a class="link-opacity-100" href="./faq.html">FAQ</a></p>

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
                    <p>0272 - 897237</p>
                    <p>PondokPesantren.com</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 2000,
            },
            effect: 'coverflow', // Ganti efek menjadi coverflow
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50, // Sudut rotasi kartu
                stretch: 0, // Jarak antar kartu
                depth: 100, // Kedalaman kartu
                modifier: 1, // Modifikasi efek
            },
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>
