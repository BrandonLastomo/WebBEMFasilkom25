@extends('layouts.admin')

@section('title')
  Dashboard - Peminjam
@endsection

@section('content')
  @php
    $formTitle = empty($user) ? 'Tambah' : 'Update';
    $formButton = empty($user) ? 'Buat' : 'Update';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen Peminjam</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('peminjam.index') }}">Manajemen Peminjam</a></div>
        </div>
      </div>
      @if (empty($user))
        {!! Form::open(['route' => 'peminjam.store']) !!}
      @else
        {!! Form::model($user, ['route' => ['peminjam.update', $user->id], 'method' => 'PUT']) !!}
        {!! Form::hidden('id') !!}
      @endif
      @csrf
      <div class="section-body">
        <h2 class="section-title">{{ $formTitle }} User</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>{{ $formTitle }} Peminjam</h4>
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="form-group">
                  {!! Form::label('nama', 'Nama') !!}
                  {!! Form::text('nama', old('name', !empty($user) ? $user->name : null), ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : '') . (!$errors->has('nama') && old('nama') ? ' is-valid' : '')]) !!}
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  {!! Form::label('no_hp', 'Nomor HP') !!}
                  {!! Form::text('no_hp', old('no_hp', !empty($user) ? $user->npm : null), ['class' => 'form-control' . ($errors->has('no_hp') ? ' is-invalid' : '') . (!$errors->has('no_hp') && old('no_hp') ? ' is-valid' : '')]) !!}
                  @error('no_hp')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  {!! Form::label('npm', 'NPM') !!}
                  {!! Form::text('npm', old('npm', !empty($user) ? $user->npm : null), ['class' => 'form-control' . ($errors->has('npm') ? ' is-invalid' : '') . (!$errors->has('npm') && old('npm') ? ' is-valid' : '')]) !!}
                  @error('npm')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  {!! Form::label('email', 'Email') !!}
                  {!! Form::email('email', old('name', !empty($user) ? $user->email : null), ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '') . (!$errors->has('email') && old('email') ? ' is-valid' : '')]) !!}
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                  {!! Form::label('prodi', 'Prodi') !!}
                  {!! Form::text('prodi', old('prodi', !empty($user) ? $user->name : null), ['class' => 'form-control' . ($errors->has('prodi') ? ' is-invalid' : '') . (!$errors->has('prodi') && old('prodi') ? ' is-valid' : '')]) !!}
                  @error('prodi')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                @empty($user)  
                  <div class="form-group">
                    {!! Form::label('password', 'Kata Sandi') !!}
                    {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : '') . (!$errors->has('password') && old('password') ? ' is-valid' : '')]) !!}
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    {!! Form::label('password_confirmation', 'Konfirmasi Kata Sandi') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : '') . (!$errors->has('password_confirmation') && old('password_confirmation') ? ' is-valid' : '')]) !!}
                    @error('password_confirmation')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                @else
                  <div class="form-group">
                    {!! Form::label('password', 'Ubah Kata Sandi') !!}
                    {!! Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : '') . (!$errors->has('password') && old('password') ? ' is-valid' : '')]) !!}
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    {!! Form::label('password_confirmation', 'Konfirmasi Kata Sandi') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : '') . (!$errors->has('password_confirmation') && old('password_confirmation') ? ' is-valid' : '')]) !!}
                    @error('password_confirmation')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                @endempty

              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">{{ $formButton }}</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </section>
  </div>
@endsection
