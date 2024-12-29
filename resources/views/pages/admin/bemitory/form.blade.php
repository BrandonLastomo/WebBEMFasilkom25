@extends('layouts.admin')

@section('title')
  Dashboard - Advocacy Progress Report
@endsection

@section('content')
  @php
      $formTitle = !empty($bemitory) ? 'Edit' : 'Tambah';
      $formButton = !empty($bemitory) ? 'Edit' : 'Tambah';
  @endphp
  
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Inventory BEM</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('bemitory.index') }}">Inventory BEM</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Barang</h4>
            </div>
            <div class="card-body">
              @if (!empty($bemitory))
              {!! Form::model($bemitory, ['route' => ['bemitory.update', $bemitory->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
              {!! Form::hidden('id') !!}
            @else
              {!! Form::open(['route' => 'bemitory.store', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate' => '']) !!}
            @endif
                    <div class="col-lg-12">
                              <div class="col-12">
                                <div class="form-group row mb-4">
                                  {!! Form::label('kode_barang', 'Kode Barang', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                                  <div class="col-sm-12 col-md-7">
                                    {!! Form::text('kode_barang', null, ['class' => 'form-control', 'required' => '']) !!}
                                    <div class="invalid-feedback">
                                      Kode  Barang harus diisi.
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group row mb-4">
                                  {!! Form::label('barang', 'Barang', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                                  <div class="col-sm-12 col-md-7">
                                    {!! Form::text('barang', null, ['class' => 'form-control', 'required' => '']) !!}
                                    <div class="invalid-feedback">
                                      Kode  Barang harus diisi.
                                    </div>
                                </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                  {!! Form::label('jumlah', 'Jumlah', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                                  <div class="col-sm-12 col-md-7">
                                    {!! Form::number('jumlah', null, ['class' => 'form-control', 'required' => '']) !!}
                                    <div class="invalid-feedback">
                                      Kode  Barang harus diisi.
                                    </div>
                                </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                  {!! Form::label('status_barang', 'Status', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                                  <div class="col-sm-12 col-md-7">
                                    {!! Form::select('status_barang',array('Tersedia'=>'Tersedia','Kosong'=>'Kosong'),null ,['class' => 'form-control selectric', 'placeholder' => 'Pilih Status']) !!}
                                </div>
                              </div>
                              

      
                              <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7 d-flex justify-content-end">
                                  <button type="submit" class="btn btn-primary">{{ $formButton }}</button>
                                </div>
                                </div>
                                
                           
                          </form>
                    </div>
                </div>
            </div>
    </section>
  </div>
 
@endsection