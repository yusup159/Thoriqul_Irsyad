<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('pesantren/css/adminlte.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('pesantren/css/all.min.css')}}">
    <!-- My Style -->
    <link rel="stylesheet" href="{{ asset('pesantren/css/profiluser.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
       
       
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="mt-2 text-bold">Profile Pengguna</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class=" row">
                        <!-- /.col-md-6 -->
                        <div class="col-lg">
                            <div class="donasi">
                                <div class="row"></div>
                                <form class="form" novalidate="">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <img class="profile mb-3" src="./asset/foto/profile.jpg" alt=""><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input class="form-control" type="text" name="username"
                                                            placeholder="Username" value="Adiba Andani">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" type="text"
                                                            value="adibaandani@gmail.com" placeholder="Alamat Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Asal Universitas</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Asal Universitas" value="UIN Raden Mas Said">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Nomor Induk Mahasiswa</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Nomor Induk Mahasiswa" value="21.12.2100">
                                                    </div>
                                                    <a href="./editprofilmahasiswa.html">
                                                        <button class="btn btn-simpan">Edit
                                                            Data</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <!-- <footer class="main-footer"> -->
        <!-- To the right -->
        <!-- <div class="float-right d-none d-sm-inline">
        Anything you want
      </div> -->
        <!-- Default to the left -->
        <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer> -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('pesantren/js/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('pesantren/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('pesantren/js/adminlte.min.js')}}"></script>
</body>

</html>