@extends('layouts.admin')

@section('title')
  Dashboard - Karya Mahasiswa
@endsection

@section('content')
  @php
      $formTitle = !empty($karya) ? 'Edit' : 'Tambah';
      $formButton = !empty($karya) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Karya Mahasiswa</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('karya.index') }}">Karya Mahasiswa</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Karya</h4>
            </div>
            <div class="card-body">
              @if (!empty($karya))
                {!! Form::model($karya, ['route' => ['karya.update', $karya->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'karya.store', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
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
                    {!! Form::label('image', 'Gambar', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::file('image') !!}
                      <p class="text-danger mt-2">{{ $errors->first('image') }}</p>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::textarea('deskripsi', null, ['class' => 'summernote-simple']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('nama', 'Pembuat', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('kelas', 'Kelas', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('kelas', null, ['class' => 'form-control']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('prodi', 'Program Studi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::select('prodi', $prodi, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Program Studi']) !!}
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