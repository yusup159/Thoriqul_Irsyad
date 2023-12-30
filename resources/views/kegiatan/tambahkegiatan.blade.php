<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Editors</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('lte/plugins/simplemde/simplemde.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-outline card-info">
                        <form id="formTambahKegiatan" action="{{ route('prosestambahkegiatan/admin') }}" method="POST" enctype="multipart/form-data"
                            class="form-horizontal">
                            @csrf
                            <div class="card-header">
                                <h3 class="text-center">
                                    Tambah Kegiatan
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul Kegiatan:</label>
                                    <input type="text" name="judul" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Kegiatan:</label>
                                    <textarea id="summernote" name="deskripsi" class="form-control" rows="4"></textarea>
                                </div>

                                

                                <div class="form-group">
                                    <label for="fotokegiatan">Foto Kegiatan:</label>
                                    <input type="file" name="fotokegiatan" class="form-control-file" required>

                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Tambahkan Kegiatan</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script src="{{ asset('lte/dist/js/demo.js') }}"></script>
    <script>
        $(function () {
            $('#summernote').summernote()

            
        })
    </script>
    
    
</body>

</html>