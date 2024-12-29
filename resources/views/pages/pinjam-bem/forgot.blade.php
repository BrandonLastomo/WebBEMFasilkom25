@extends('layouts.pinjam')

@section('title')
Bemitory
@endsection

@section('content')

<main id="main">

  <section id="forgot" class="forgot">
    <div class="container mt-5">
      <div class="form-forgot">
        <div class="row">
          <div class="col-md">
            <img src="{{ url('css/login-pinjam.png') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md input">
            <h4>Forgot password</h4><hr>
            <form action="{{ route('forgot.password.link') }}" method="post">
                @csrf
               @if (Session::get('fail'))
                   <div class="alert alert-danger">
                       {{ Session::get('fail') }}
                   </div>
               @endif
            
               @if (Session::get('success'))
                   <div class="alert alert-success">
                       {{ Session::get('success') }}
                   </div>
               @endif
            
               @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control mt-2" name="email" placeholder="Enter email address" 
                    value="{{ old('email') }}">
                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="mt-3 ms-4">
                    <a href="{{ route('pinjam.login') }}" style="color: #4cb8c4">Kembali Ke Menu Login</a>
                  </div>
               
                  <div class="mt-4">
                {!! Form::submit('Send Reset Password Link', ['class' => 'btn fourth']) !!}
              </div>
              
                
            </form>
            </div>
            </div>
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