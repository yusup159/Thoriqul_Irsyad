<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thoriqul Irsyad</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('pesantren/css/adminlte.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('pesantren/css/all.min.css') }}">
    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('pesantren/css/profiluser.css') }}">

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        @yield('navbarcontent')
        <aside class="main-sidebar sidebar-dark-primary elevation-4"x`>

            @yield('atassidebar')

            @yield('sidebar')


        </aside>

        @yield('content')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>

        {{-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer> --}}
        @yield('kontenprofil')
    </div>
    <script src="{{ asset('pesantren/js/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('pesantren/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('pesantren/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('lte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('lte/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('lte/dist/js/demo.js') }}"></script>
    <script src="{{ asset('lte/dist/js/pages/dashboard2.js') }}"></script>
    <!-- ... (kode lainnya) -->



</body>

</html>
