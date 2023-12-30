@extends('layoutadmin.layoutregister')
@section('konten-registrasi')
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1">Registrasi</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <ul>
            @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
                
            @endforeach
          </ul>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form action="{{ route('prosesregister') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Full name" name="name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <label for="foto" class="input-group-text">Upload Foto</label>
            <input type="file" class="form-control" id="foto" name="fotopengururs">
          </div>
            <br>          
            <div >
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
         
        </form>
  
        <div class="social-auth-links text-center">
            <a href="{{ route('login') }}" class="btn btn-block btn-success">
                Login
            </a>
        </div>
  
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection