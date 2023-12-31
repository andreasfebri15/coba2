@extends('layout.mainlayout')

@section('container')

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        {{-- alert berhasil registrasi --}}
        @if (session()->has('success')) 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Registrasi Berhasil!!</strong> Please Login
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError')) 
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Login Gagal</strong> Please Coba lagi
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="card border-0 shadow rounded-3 my-5">      
          <div class="card-body p-4 p-sm-5">
           
                <img src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/fti-ukdw.png" class="img-fluid" alt="...">
           
            <h5 class="card-title text-center mb-5 fw-light fs-5 fw-bold ">Volunteer FTI</h5>
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating mb-3 ">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control @error('email') is-invalid @enderror " id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
                <div class="d-grid">
                   {{-- <a href="sidebar.html" class="btn btn-primary btn-login text-uppercase fw-bold">Login</a> --}}
                   <button class="btn btn-primary btn-login text-uppercase fw-bold">Login</button>
                    </div>

            </form>
            <small class="d-block  text-center mt-3">Belum daftar? <a href="/register" class="text-decoration-none">Daftar sekarang</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection