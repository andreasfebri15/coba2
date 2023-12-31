@extends('layout.mainlayout')

@section('container')

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">      
          <div class="card-body p-4 p-sm-5">
           
                <img src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/fti-ukdw.png" class="img-fluid" alt="...">
           
            <h5 class="card-title text-center mb-5 fw-light fs-5 fw-bold ">Form Registrasi</h5>
            <form action="/register" method="POST">
                @csrf
              <div class="form-floating mb-3 ">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror required" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Nama Lengkap</label>
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
              <div class="form-floating mb-3 ">
                
                <div class="form-floating mb-3 ">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('email') }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  </div>
              <div class="form-floating mb-3 ">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="emai;" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="emai;">Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword " placeholder="Password" required>
                <label for=" Password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

                <div class="d-grid">
                   
                   <button class="btn btn-primary btn-lg ">Daftar</button>
                    </div>

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection