@extends('layouts.pkm')

@section('title')
  PKM Centre - Profil
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Profil</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('pkm-center') }}">Beranda</a></div>
          <div class="breadcrumb-item"><a href="{{ route('profil.index') }}">Profil</a></div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
        <p class="section-lead">
          Ubah informasi tentangmu di halaman ini.
        </p>

        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-7">
            @include('includes.pkm.flash')
            <div class="card">
              {!! Form::model($user, ['route' => ['profil.update', $user->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate' => '']) !!}
              {!! Form::hidden('id') !!}
              @csrf
              <div class="card-header">
                <h4>Edit Profil</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    {!! Form::label('nama', 'Nama') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => '']) !!}
                    <div class="invalid-feedback">
                      Nama harus diisi.
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-12">
                    {!! Form::label('npm', 'NPM') !!}
                    {!! Form::text('npm', null, ['class' => 'form-control ' . ($errors->has('npm') ? 'is-invalid' : ''), 'required' => '']) !!}
                    @error('npm')
                    <div class="invalid-feedback">
                      {{ $errors->first('npm') }}
                    </div>
                    @enderror
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    {!! Form::label('prodi', 'Program Studi') !!}
                    {!! Form::select('prodi', $prodi, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Program Studi']) !!}
                  </div>
                  <div class="form-group col-md-5 col-12">
                    {!! Form::label('tahun_masuk', 'Tahun Masuk') !!}
                    {!! Form::select('tahun_masuk', $tahun, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Tahun']) !!}
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Simpan Perubahan</button>
              </div>
              {!! Form::close() !!}
            </div>

            <div class="card">
              <div class="card-header">
                <h4>Ubah Kata Sandi</h4>
              </div>
              <div class="card-body">
                {!! Form::model($user, ['route' => ['profil.change', $user->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate' => '']) !!}
                {!! Form::hidden('id') !!}
                @csrf
                <div class="row">
                  <div class="form-group col-md-12 col-12">
                    {!! Form::label('current_password', 'Kata Sandi Lama') !!}
                    {!! Form::password('current_password', ['class' => 'form-control']) !!}
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12 col-12">
                    {!! Form::label('new_password', 'Kata Sandi Baru') !!}
                    {!! Form::password('new_password', ['class' => 'form-control ' . ($errors->has('current_password') ? 'is-invalid' : '')]) !!}
                    @error('current_password')
                    <div class="invalid-feedback">
                      {{ $errors->first('current_password') }}
                    </div>
                    @enderror
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12 col-12">
                    {!! Form::label('new_confirm_password', 'Konfirmasi Kata Sandi Baru') !!}
                    {!! Form::password('new_confirm_password', ['class' => 'form-control']) !!}
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Ubah Kata Sandi</button>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection