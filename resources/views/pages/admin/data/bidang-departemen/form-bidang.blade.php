@extends('layouts.admin')

@section('title')
  Dashboard - Bidang
@endsection

@section('content')
  @php
      $formTitle = !empty($bidang) ? 'Edit' : 'Tambah';
      $formButton = !empty($bidang) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Struktur BEM Fasilkom {{env('KABINET_TAHUN');}}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('admin.struktur') }}">Struktur</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-6">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Bidang</h4>
            </div>
            <div class="card-body">
              @if (!empty($bidang))
                {!! Form::model($bidang, ['route' => ['bidang.update', $bidang->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'bidang.store']) !!}
              @endif
              <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('nama', 'Nama Bidang') !!}
                    {!! Form::text('nama', null, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : null)]) !!}
                    @error('nama')
                      <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary float-right">{{ $formButton }}</button>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection