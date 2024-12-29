@extends('layouts.pinjam')

@section('title')
Bemitory
@endsection

@section('content')

<main id="main">

    <section id="register" class="register">
    <div class="container mt-5">
        
      @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show border-0 text-md-center text-start text-sm-start bg-transparent mt-5" role="alert">
        <strong>Akun berhasil dibuat!</strong> <br> 
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
      <div class="form-register">
        <div class="row">
          <div class="col-md-mt-3">
            <img src="{{ url('css/login-pinjam.png') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md input">
              <div class="mt-1">
                  <h4>Daftar Akun</h4><hr>
                </div>
                {!! Form::open(['route' => 'pinjam.store']) !!}
                @csrf
            <div class="mt-3">
              {!! Form::label('nama', 'Nama', ['class' => 'form-label']) !!}
              {!! Form::text('nama', null, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : null), 'placeholder' => 'Masukkan nama kamu']) !!}
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            <div class="mt-2">
              {!! Form::label('npm', 'NPM', ['class' => 'form-label']) !!}
              {!! Form::text('npm', null, ['class' => 'form-control' . ($errors->has('npm') ? ' is-invalid' : null), 'placeholder' => 'Masukkan npm kamu']) !!}
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            <div class="mt-2">
              {!! Form::label('no_hp', 'Nomor HP', ['class' => 'form-label']) !!}
              {!! Form::text('no_hp', null, ['class' => 'form-control' . ($errors->has('no_hp') ? ' is-invalid' : null), 'placeholder' => 'Masukkan nomor HP kamu']) !!}
              @error('no_hp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <div class="mt-2">
                {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : null), 'placeholder' => 'Masukkan email kamu']) !!}
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mt-2">
                {!! Form::label('prodi', 'Program Studi', ['class' => 'form-label']) !!}
                {!! Form::select('prodi', $program_studi, null, ['class' => 'form-select']) !!}
              </div>
              <div class="mt-2">
                {!! Form::label('password', 'Kata Sandi', ['class' => 'form-label']) !!}
                {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : null), 'placeholder' => 'Masukkan kata sandi']) !!}
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mt-2">
                {!! Form::label('password_confirmation', 'Konfirmasi Kata Sandi', ['class' => 'form-label']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : null), 'placeholder' => 'Masukkan ulang kata sandi']) !!}
              </div>

              {{-- <div class="mt-3 text-center">
                <a href="#">Lupa email / kata sandi?</a>
              </div> --}}
              <div class="mt-5">
                {!! Form::submit('Daftar', ['class' => 'btn fourth']) !!}
              </div>
              <div class="mt-3 ms-4">
                <p>Sudah punya akun?<a href="{{ route('pinjam.login') }}"> Login</a></p>
              </div>
              <a href="{{ route('bemitory') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Return to Homepage</a>
              {{--  <a href="{{ route('bemitory') }}" {{ url()->previous() }} class="btn btn-default" >Kembali ke homepage</a>  --}}
              <div class="mt-4 text-center">
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End #main -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .btn {
      box-sizing: border-box;
      -webkit-appearance: none;
         -moz-appearance: none;
              appearance: none;
      background-color: transparent;
      border: 2px solid #55D74C;
      border-radius: 0.6em;
      color: #55D74C;
      cursor: pointer;
      display: flex;
      align-self: center;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1;
      margin: 20px;
      padding: 1.2em 2.8em;
      text-decoration: none;
      text-align: center;
      text-transform: uppercase;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
    }
    .btn:hover, .btn:focus {
      color: rgb(255, 255, 255);
      outline: 0;
    }
    .fourth {
      border-color: #55D74C;
      color:#55D74C;
      background-image: linear-gradient(45deg, #55D74C 50%, transparent 50%);
      background-position: 100%;
      background-size: 400%;
      transition: background 300ms ease-in-out;
    }
    .fourth:hover {
      background-position: 0;
    }
  </style>
</head>
<body>
</body>
</html>
@endsection