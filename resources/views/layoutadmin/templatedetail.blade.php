<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thoriqul Irsyad</title>

    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('pesantren/css/detailBerita.css') }}">
</head>

<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}" style="display: flex; align-items: center;">
                <img src="{{ asset('pesantren/asset/img/logopesantren.png') }}" style="width: 70px; margin-right: 10px;"
                    alt="">
                <h5 style="margin: 0;">Thoriqul Irsyad</h5>
            </a>


            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">Beranda</a>
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

    <!-- Content -->
    @yield('kontendetailkegiatan')

    <!-- Content -->

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
