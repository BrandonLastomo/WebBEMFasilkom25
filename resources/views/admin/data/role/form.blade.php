@extends('layouts.admin')

@section('title')
  Dashboard - Peran
@endsection

@section('content')
  @php
    $formTitle = empty($role) ? 'Tambah' : 'Update';
    $formButton = empty($role) ? 'Buat' : 'Update';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen Peran</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('role.index') }}">Manajemen Peran</a></div>
        </div>
      </div>
      @if (empty($role))
        {!! Form::open(['route' => 'role.store']) !!}
      @else
        {!! Form::model($role, ['route' => ['role.update', $role->id], 'method' => 'PUT']) !!}
        {!! Form::hidden('id') !!}
      @endif
        <div class="section-body">
          <h2 class="section-title">{{ $formTitle }} Peran</h2>
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header">
                  <h4>{{ $formTitle }} Peran</h4>
                </div>
                <div class="card-body">
                  @include('includes.admin.flash')
                  <div class="form-group">
                    <label>Nama Peran</label>
                    {!! Form::text('name', old('name', !empty($role) ? $role->name : null), ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '') . (!$errors->has('name') && old('name') ? ' is-valid' : ''), $disabled ?? '']) !!}
                    @error('name')
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
            <div class="col-lg-9">
              <div class="card">
                <div class="card-header">
                  <h4>Atur Izin Peran</h4>
                </div>
                <div class="card-body">
                  @include('pages.admin.data.role._permissions', ['disabled' => $disabled ?? ''])
                </div>
              </div>
            </div>
          </div>
        </div>
      {!! Form::close() !!}
    </section>
  </div>
@endsection