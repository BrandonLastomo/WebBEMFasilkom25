@extends('layouts.pkkmb')

@section('title')
PKKMB Fasilkom 2021
@endsection

@section('content')

<main id="main">

  <section id="register" class="register">
    <div class="container">

      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 text-md-center text-start text-sm-start bg-transparent" role="alert">
          <strong>Akun berhasil dibuat!</strong> <br> 
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="form-register pb-md-0 pb-2 pb-sm-2">
        <div class="row">
          <div class="col-md align-self-center">
            <img src="{{ url('pkkmb/assets/img/ilustrasi/login-2.svg') }}" alt="" class="img-fluid">
          </div>
          <div class="col-md input p-md-3 p-0 p-sm-0">
            {!! Form::open(['route' => 'pkkmb.store']) !!}
              <h3 class="text-center mt-md-0 mt-5 mt-sm-5">Buat Akun</h3>
              <div class="mt-5">
                {!! Form::label('nama', 'Nama', ['class' => 'form-label']) !!}
                {!! Form::text('nama', null, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : null), 'placeholder' => 'Masukkan nama kamu']) !!}
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
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
              <div class="mt-5">
                {!! Form::submit('Daftar', ['class' => 'btn-grad']) !!}
              </div>
              <div class="mt-4 text-center">
                <p>Sudah punya akun?<a href="{{ route('pkkmb.login') }}"> Masuk</a></p>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection