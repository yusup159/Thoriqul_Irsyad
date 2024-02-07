<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Editors</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('summer/summernote.min.css') }}">

    <link rel="stylesheet" href="{{ asset('lte/plugins/simplemde/simplemde.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-outline card-info">
                        <form id="formTambahBerita"
                            action="{{ route('proseseditberita/admin', ['id' => $berita->id]) }}" method="POST"
                            enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="card-header">
                                <h3 class="text-center">
                                    Edit Berita
                                </h3>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul Berita:</label>
                                    <input type="text" name="judul" class="form-control"
                                        value="{{ $berita->judul }}">
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Berita:</label>
                                    <textarea id="summernote" name="deskripsi" class="form-control" rows="4">{!! $berita->deskripsi !!}</textarea>
                                </div>



                                <div class="form-group">
                                    <img src="{{ asset('storage/fotoberita/' . basename($berita->fotoberita)) }}"
                                        alt="" class="image w-100">
                                    <label for="fotoberita">Foto Berita:</label>
                                    <input type="file" name="fotoberita" class="form-control-file">

                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary"
                                        onclick="return confirm('Konfirmasi Perubahan')">Edit Berita</button>
                                    <a href="{{ route('databerita/admin') }}" class="btn btn-secondary">Batal</a>
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
    <script src="{{ asset('summer/summernote.min.js') }}"></script>
    <script src="{{ asset('lte/dist/js/demo.js') }}"></script>

    <script type="text/javascript">
        $('#summernote').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
            ],
            height: 400,
            popatmouse: true
        });
    </script>


</body>

</html>
