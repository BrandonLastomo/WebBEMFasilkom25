@extends('layouts.auth.admin')

@section('title')
  BEM Fasilkom Kabinet {{env('KABINET');}} - Login
@endsection

@section('content')
  <section class="section login">
    <div class="d-flex flex-wrap align-items-stretch">
      <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white d-sm-block">
        <div class="p-4 m-3">
          <img src="{{ asset('frontend/assets/img/logo-kabinet/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle mb-4 mt-2">
          <h4 class="text-dark font-weight-normal">Selamat Datang</h4>
          <p class="text-muted">Semoga harimu menyenangkan!</p>
          <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
            @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control @error('invalid') is-invalid @enderror" name="email" tabindex="1" value="{{ old('email') }}">
              @error('invalid')
                <div class="invalid-feedback">
                  {{ $errors->first('invalid') }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Kata Sandi</label>
              </div>
              <input id="password" type="password" class="form-control @error('invalid') is-invalid @enderror" name="password" tabindex="2">
              @error('invalid')
                <div class="invalid-feedback">
                  {{ $errors->first('invalid') }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                <label class="custom-control-label" for="remember-me">Ingat Saya</label>
              </div>
            </div>

            <div class="form-group text-right">
              {{-- <a href="auth-forgot-password.html" class="float-left mt-3">
                Lupa Kata Sandi?
              </a> --}}
              <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                Login
              </button>
            </div>

            <div class="mt-5 text-center">
              Belum punya akun? <a href="{{ route('register') }}">Buat yang baru</a>
            </div>
          </form>

          <div class="text-center text-small mt-5" style="margin-bottom: 22.6vh">
            Copyright © {{env('KABINET_TAHUN');}}  Departemen Pengembangan Teknologi Informasi <br> BEM Fasilkom UNSIKA {{env('KABINET_TAHUN');}}
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom d-none d-sm-block" data-background="{{ asset('admin-stisla/assets/img/login-bg.png') }}">
        <div class="absolute-bottom-left index-2">
          <div class="text-light p-5 pb-2">
            <div class="mb-5 pb-3">
              <h1 class="mb-2 display-4 font-weight-bold">{{ $greeting }}</h1>
              <h5 class="font-weight-normal text-muted-transparent">Universitas Singaperbangsa Karawang</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
