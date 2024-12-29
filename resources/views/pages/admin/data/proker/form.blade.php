@extends('layouts.admin')

@section('title')
  Dashboard - Program Kerja
@endsection

@section('content')
  @php
    $formTitle = !empty($proker) ? 'Edit' : 'Tambah';
    $formButton = !empty($proker) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Program Kerja BEM Fasilkom {{env('KABINET_TAHUN');}}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('proker.index') }}">Program Kerja</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Program Kerja</h4>
            </div>
            <div class="card-body">
              @if (!empty($proker))
                {!! Form::model($proker, ['route' => ['proker.update', $proker->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate' => '']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'proker.store', 'class' => 'needs-validation', 'novalidate' => '']) !!}
              @endif
              @csrf
              <div class="row">
                <div class="col-12">
                  <div class="form-group row mb-4">
                    {!! Form::label('nama_proker', 'Nama Program Kerja', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('nama_proker', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Nama Program Kerja harus diisi.
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('id_departemen', 'Departemen', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::select('id_departemen', $departemens, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Departemen']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::textarea('deskripsi', null, ['id'=>'summernote','class' => '']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('anggaran', 'Anggaran', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('anggaran', null, ['class' => 'form-control' . ($errors->has('anggaran') ? ' is-invalid' : null)]) !!}
                      @error('anggaran')
                        <div class="invalid-feedback">
                          {{ $errors->first('anggaran') }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('penanggung_jawab', 'Penanggung Jawab', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('penanggung_jawab', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Penanggung Jawab harus diisi.
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('status', 'Status', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::select('status', $status, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Status']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('triwulan', 'Triwulan', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::select('triwulan', $triwulan, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Triwulan']) !!}
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
  <script>
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
</script>
@endsection