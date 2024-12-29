@extends('layouts.admin')

@section('title')
  Dashboard - PKM Centre
@endsection

@section('content')
  @php
      $formTitle = !empty($preview) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Proposal Tahun Sebelumnya</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('preview.index') }}">Proposal Tahun Sebelumnya</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Proposal Tahun Sebelumnya</h4>
            </div>
            <div class="card-body">
              @if (!empty($preview))
                {!! Form::model($preview, ['route' => ['preview.update', $preview->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'preview.store', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
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
                    {!! Form::label('bidang', 'Bidang', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('bidang', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Bidang harus diisi.
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('tim', 'Tim', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('tim', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Tim harus diisi.
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('file', 'File', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::file('file', ['class' => 'form-control border-0' . ($errors->has('file') ? ' is-invalid' : null), 'style' => 'margin-left: -15px']) !!}
                      @error('file')
                        <div class="invalid-feedback">
                          {{ $errors->first('file') }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">Publish</button>
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