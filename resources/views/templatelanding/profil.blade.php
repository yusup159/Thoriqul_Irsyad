<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil AksiCendekia</title>

    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('pesantren/css/profil.css')}}">
</head>

<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
                <img src="{{ asset('pesantren/asset/img/logopesantren.png')}}" style="width: 70px; margin-right: 10px;" alt="">
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
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-kiri">
                    <h1>
                        Berdidikasi dan berpengalaman dalam hal pendidikan
                    </h1>
                    <p>Senantiasa mencetak generasi islam yang bertakwa & berbudi pekerti luhur</p>
                    <a href="#kontensejarah">
                        <button class="btn-ppdb">
                            <img src="{{ asset('pesantren/asset/icon/arrow.svg')}}" alt="">Kenali Kami
                        </button>
                    </a>
                </div>
                <div class="col-lg-5 hero-kanan m-6">
                    <img class="foto" src="{{ asset('pesantren/asset/img/profilBanner.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Content  -->
    <div class="container content" id="kontensejarah">
        <div class="header text-center">
            <h1>Menjadi Wadah Para Santri Dalam Hal Menimba Ilmu Agama Islam</h1>
        </div>
        <div class="content-1">
            <div class="row">
                <div class="col-lg-6 content-kiri">
                    <img src="{{ asset('pesantren/asset/img/konten.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 content-kanan mt-5">
                    <h1>
                        Profil & Sejarah Singkat
                    </h1>
                    <p>Didirikan pada 10 November tahun 1997 oleh Ustadz ABC, pondok pesantren ABC adalah pondok
                        pesantren yang memiliki dedikasi tinggi dalam pendidikan agama islam. Memiliki 1000 lebih alumni
                        pondok dan fasilitas yang memadai dalam hal pendidikan. Dan juga selalu dipercaya oleh orang tua
                        santri dalam hal mengenyam pendidikan agama untuk anak nya</p>
                </div>
            </div>
        </div>
        <div class="content-2">
            <div class="row flex-container">
                <div class="col-lg-6 content-kiri">
                    <h1>
                        Visi & Tujuan Pondok Pesantren ABC
                    </h1>
                    <p>Visi & tujuan kami adalah mencetak santri dan generasi islam yang bertakwa dan berbudi pekerti
                        luhur yang dapat membantu dan berdampak bagi dirinya sediri, keluarga, dan masyarakat
                        sekitarnya. Serta dapat menjadi tauladan dan inspirasi bagi lingkungan sekitarnya
                    </p>
                </div>
                <div class="col-lg-6 content-kanan mt-5 order-xs-first">
                    <img src="{{ asset('pesantren/asset/img/heroKanan.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End Content  -->

    <!-- Pilar Utama -->
    <div class="pilar-utama">
        <div class="container">
            <div class="header text-center">
                <h3>Bertakwa & berbudi pekerti luhur</h3>
                <h1>3 Pilar Utama Pondok Pesantren ABC</h1>
                <p>Fondasi penting dalam rangka membangun akhlak santri</p>
            </div>
            <div class="content-pilar text-center">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('pesantren/asset/icon/iconToga.svg')}}" alt="">
                        <h3>Berilmu</h3>
                        <p>Menjadikan santri menjadi pribadi yang berilmu dan berwawasan</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('pesantren/asset/icon/iconToga.svg')}}" alt="">
                        <h3>Bertakwa</h3>
                        <p>Menjadikan santri bertakwa kepada Allah SWT</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('pesantren/asset/icon/iconToga.svg')}}" alt="">
                        <h3>Berbudi pekerti</h3>
                        <p>Menjadikan santri menjadi pribadi yang memiliki budi pekerti luhur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pilar Utama -->

    <!-- News -->
    <div class="container">
        <div class="news">
            <h1>Informasi Seputar Pondok Pesantren ABC</h1>
            <p>Kamu Bisa mendapatkan informasi lebih lanjut dengan mengklick button dibawah</p>
            <button type="submit" class="btn btn-whatsapp mb-3">Contact Whatsapp</button>
        </div>
    </div>
    <!-- End News -->

    <!-- Footer -->
    <!-- Footer -->
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
                    <p><a class="link-opacity-100" href="https://youtube.com/@ponpesthoriqulirsyad9284?si=JcXtZp7c-eFBTsY4">Youtube</a></p>
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

    <!-- End Footer -->
    <!-- Tambahkan link Bootstrap JS di akhir dokumen -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tambahkan link Bootstrap Icons (BI) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
</body>

</html>