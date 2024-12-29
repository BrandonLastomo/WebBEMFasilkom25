@extends('layouts.admin')

@section('title')
  Dashboard - Rundown PKKMB Fasilkom 2021
@endsection

@section('content')
  @php
      $formTitle = !empty($rundown) ? 'Edit' : 'Tambah';
      $formButton = !empty($rundown) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Rundown</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('rundown.index') }}">Rundown</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Rundown</h4>
            </div>
            <div class="card-body">
              @if (!empty($rundown))
                {!! Form::model($rundown, ['route' => ['rundown.update', $rundown->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'rundown.store', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
              @endif
              <div class="row">
                <div class="col-12">
                  <div class="form-group row mb-4">
                    {!! Form::label('jam', 'Jam', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::time('jam', null, ['class' => 'form-control']) !!}
                      <div class="invalid-feedback">
                        Jam harus diisi
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::textarea('deskripsi', null, ['class' => 'summernote-simple', 'id' => 'summernote-simple']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary">{{ $formButton }}</button>
                    </div>
                  </div>
                </div>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection