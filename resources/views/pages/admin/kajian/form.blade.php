@extends('layouts.admin')

@section('title')
  Dashboard - Info Kajian
@endsection

@section('content')
  @php
      $formTitle = !empty($kajian) ? 'Edit' : 'Tambah';
      $formButton = !empty($kajian) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Info Kajian</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('info-kajian.index') }}">Info Kajian</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Kajian</h4>
            </div>
            <div class="card-body">
              @if (!empty($kajian))
                {!! Form::model($kajian, ['route' => ['info-kajian.update', $kajian->id], 'method' => 'PUT', 'class' => 'needs-validation', 'enctype' => 'multipart/form-data', 'novalidate']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'info-kajian.store', 'class' => 'needs-validation', 'novalidate' => '', 'enctype' => 'multipart/form-data']) !!}
              @endif
              <div class="row">
                <div class="col-12">
                  <div class="form-group row mb-4">
                    {!! Form::label('nama', 'Nama Kajian', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('nama', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Judul harus diisi.
                      </div>
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
  {{--  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: "Ketikan sesuatu disini . . .",
            height: '200',
            toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
            ]
        });
    });
</script>  --}}
@endsection