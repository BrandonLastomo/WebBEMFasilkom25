@extends('layouts.admin')

@section('title')
  Dashboard - User
@endsection

@section('content')
  @php
    $formTitle = empty($user) ? 'Tambah' : 'Update';
    $formButton = empty($user) ? 'Buat' : 'Update';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen User</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('user.index') }}">Manajemen User</a></div>
        </div>
      </div>
      @if (empty($user))
        {!! Form::open(['route' => 'user.store']) !!}
      @else
        {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
        {!! Form::hidden('id') !!}
      @endif
      @csrf
      <div class="section-body">
        <h2 class="section-title">{{ $formTitle }} User</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <h4>{{ $formTitle }} User</h4>
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="form-group">
                  {!! Form::label('name', 'Nama') !!}
                  {!! Form::text('name', old('name', !empty($user) ? $user->name : null), ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '') . (!$errors->has('name') && old('name') ? ' is-valid' : '')]) !!}
                  @error('name')
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
                <div class="form-group">
                  {!! Form::label('role', 'Peran') !!}
                  {!! Form::select('role_id', $roles, $roleId, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Peran']) !!}
                  @error('role_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">{{ $formButton }}</button>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header">
                <h4>Atur Izin Khusus</h4>
              </div>
              <div class="card-body">
                @include('pages.admin.data.role._permissions')
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </section>
  </div>
@endsection
