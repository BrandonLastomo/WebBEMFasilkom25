@extends('layouts.admin')

@section('title')
  Dashboard - Merchandise
@endsection

@section('content')
  @php
      $formTitle = !empty($merchandise) ? 'Edit' : 'Tambah';
      $formButton = !empty($merchandise) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Merchandise</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('merchandise.index') }}">Merchandise</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Merchandise</h4>
            </div>
            <div class="card-body">
              @if (!empty($merchandise))
                {!! Form::model($merchandise, ['route' => ['merchandise.update', $merchandise->id], 'method' => 'PUT', 'class' => 'needs-validation', 'enctype' => 'multipart/form-data', 'novalidate']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'merchandise.store', 'class' => 'needs-validation', 'novalidate' => '', 'enctype' => 'multipart/form-data']) !!}
              @endif
              <div class="row">
                <div class="col-12">
                  <div class="form-group row mb-4">
                    {!! Form::label('nama', 'Nama Merchandise', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('nama', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Judul harus diisi.
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row mb-4">
                    {!! Form::label('harga', 'Harga', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::number('harga', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Judul harus diisi.
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row mb-4">
                      <label for="status" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                    <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" id="status" aria-label="Floating label select example" name="status">
                      <option selected value="Ready">Ready</option>
                      <option value="Sold">Sold</option>
                    </select>
                  </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::textarea('deskripsi', null, ['class'=>'summernote']) !!}
                    </div>
                  </div>
                  
                 <div class="form-group row mb-4">
                    {!! Form::label('image', 'Thumbnail', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                        {!! Form::hidden('path') !!}
                        {!! Form::file('image') !!}
                      <p class="text-danger mt-2">{{ $errors->first('image') }}</p>
                    </div>
                  </div>
                  
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">{{ $formButton }}</button>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              {!! Form::close() !!}
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection