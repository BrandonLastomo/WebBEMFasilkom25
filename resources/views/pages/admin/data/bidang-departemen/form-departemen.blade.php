@extends('layouts.admin')

@section('title')
  Dashboard - Departemen
@endsection

@section('content')
  @php
      $formTitle = !empty($departemen) ? 'Edit' : 'Tambah';
      $formButton = !empty($departemen) ? 'Edit' : 'Tambah';
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
              <h4>{{ $formTitle }} Departemen</h4>
            </div>
            <div class="card-body">
              @if (!empty($departemen))
                {!! Form::model($departemen, ['route' => ['departemen.update', $departemen->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'departemen.store']) !!}
              @endif
              <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('nama', 'Nama Departemen') !!}
                    {!! Form::text('nama', null, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : null)]) !!}
                    @error('nama')
                      <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('id_bidang', 'Bidang') !!}
                    {!! Form::select('id_bidang', $bidangs, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Bidang']) !!}
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('deskripsi', 'Deskripsi') !!}
                    {!! Form::textarea('deskripsi', null, ['class' => 'summernote-simple']) !!}
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