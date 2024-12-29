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
          {!! Form::open(['route' => 'register', 'class' => 'needs-validation', 'novalidate' => '']) !!}
          @csrf
            <div class="form-group row">
              <div class="col">
                {!! Form::label('name', 'Nama') !!}
                {!! Form::text('name', null, ['class' => 'form-control ' . ($errors->has('name') ? 'is-invalid' : ''), 'tabindex' => '1', 'autofocus', 'required' => '']) !!}
                <div class="invalid-feedback">
                  Nama harus diisi.
                </div>
              </div>
              <div class="col">
                <div class="d-block">
                  {!! Form::label('npm', 'NPM') !!}
                </div>
                {!! Form::text('npm', null, ['class' => 'form-control ' . ($errors->has('npm') ? 'is-invalid' : ''), 'tabindex' => '2']) !!}
                @error('npm')
                <div class="invalid-feedback d-block">
                  {{ $errors->first('npm') }}
                </div>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col">
                {!! Form::label('tahun_masuk', 'Tahun Masuk') !!}
                {!! Form::select('tahun_masuk', $tahun, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Tahun', 'tabindex' => '3']) !!}
              </div>
              <div class="col">
                {!! Form::label('prodi', 'Program Studi') !!}
                {!! Form::select('prodi', $prodi, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Program Studi', 'tabindex' => '4']) !!}
              </div>
            </div>

            <div class="form-group row">
              <div class="col">
                <div class="d-block">
                  {!! Form::label('email', 'Email') !!}
                </div>
                {!! Form::email('email', null, ['class' => 'form-control ' . ($errors->has('email') ? 'is-invalid' : ''), 'tabindex' => '5']) !!}
                @error('email')
                <div class="invalid-feedback">
                  {{ $errors->first('email') }}
                </div>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col">
                <div class="d-block">
                  {!! Form::label('password', 'Kata Sandi') !!}
                </div>
                {!! Form::password('password', ['class' => 'form-control ' . ($errors->has('password') ? 'is-invalid' : ''), 'tabindex' => '6']) !!}
                @error('password')
                <div class="invalid-feedback">
                  {{ $errors->first('password') }}
                </div>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col">
                <div class="d-block">
                  {!! Form::label('password_confirmation', 'Konfirmasi Kata Sandi') !!}
                </div>
                {!! Form::password('password_confirmation', ['class' => 'form-control ' . ($errors->has('password_confirmation') ? 'is-invalid' : ''), 'tabindex' => '7']) !!}
              </div>
            </div>

            <div class="form-group text-right">
              <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                Daftar
              </button>
            </div>

            <div class="text-center">
              Sudah punya akun? <a href="{{ route('login') }}">Login</a>
            </div>
          {!! Form::close() !!}

          <div class="text-center text-small" style="margin-top: 40px">
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
