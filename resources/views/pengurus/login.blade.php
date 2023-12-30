@extends('layoutadmin.layoutlogin')
@section('konten-login')
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>
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
        <form action="{{ route('proseslogin') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            <div >
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </form>
        <div class="social-auth-links text-center mt-2 mb-3">
          <a href="{{ route('register') }}" class="btn btn-block btn-danger">
             Register
          </a>
        </div>
       
      </div>
    </div>
  </div>
@endsection
