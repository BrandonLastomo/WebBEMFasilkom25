@extends('layouts.admin')

@section('title')
  Dashboard - Berita
@endsection

@section('content')
  @php
      $formTitle = !empty($berita) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Berita</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('berita.index') }}">Berita</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Berita</h4>
            </div>
            <div class="card-body">
              @if (!empty($berita))
                {!! Form::model($berita, ['route' => ['berita.update', $berita->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'berita.store', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
              @endif
              <div class="row">
                <div class="col-12">
                  <div class="form-group row mb-4">
                    {!! Form::label('judul', 'Judul', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('judul', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Judul harus diisi.
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('berita', 'Konten', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::textarea('konten', null, ['class' => 'summernote']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('tanggal', 'Tanggal', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('tanggal', null, ['class' => 'form-control datepicker']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('image', 'Thumbnail', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::file('image') !!}
                      <p class="text-danger mt-2">{{ $errors->first('image') }}</p>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button class="btn btn-primary">Publish</button>
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