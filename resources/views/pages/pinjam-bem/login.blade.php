@extends('layouts.pinjam')

@section('title')
Bemitory
@endsection

@section('content')

<main id="main">

  <section id="login" class="login">
    <div class="container mt-5">
      <div class="form-login">
        <div class="row">
          <div class="col-md">
            <img src="{{ url('css/login-pinjam.png') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md input">
              <h4>Login Akun</h4><hr>
            {!! Form::open(['route' => 'pinjam.login']) !!}
            @csrf
              <div class="mt-5">
                {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : null), 'placeholder' => 'Masukkan email kamu']) !!}
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mt-4">
                {!! Form::label('password', 'Kata Sandi', ['class' => 'form-label']) !!}
                {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : null), 'placeholder' => 'Masukkan kata sandi']) !!}
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mt-3 ms-3">
                <p><a class="text-blue mt-2" href="{{ route('forgot.password.form') }}">Forgot Your Password?</a></p>
              </div>

         
              <div class="mt-4">
                {!! Form::submit('Login', ['class' => 'btn fourth']) !!}
              </div>
              <div class="mt-3 ms-4">
                <p>Belum punya akun?<a href="{{ route('pinjam.daftar') }}"> Buat akun</a></p>
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