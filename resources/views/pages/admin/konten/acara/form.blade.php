@extends('layouts.admin')

@section('title')
  Dashboard - Acara
@endsection

@section('content')
  @php
      $formTitle = !empty($acara) ? 'Edit' : 'Tambah';
      $formButton = !empty($acara) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Acara</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('acara.index') }}">Acara</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-6">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Acara</h4>
            </div>
            <div class="card-body">
              @if (!empty($acara))
                {!! Form::model($acara, ['route' => ['acara.update', $acara->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'acara.store']) !!}
              @endif
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    {!! Form::label('nama', 'Nama Acara') !!}
                    {!! Form::text('nama', null, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : null)]) !!}
                    @error('nama')
                      <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    {!! Form::label('bulan', 'Bulan') !!}
                    {!! Form::select('bulan', $bulan, null, ['class' => 'form-control selectric' . ($errors->has('bulan') ? ' is-invalid' : null), 'placeholder' => 'Pilih Bulan']) !!}
                    @error('bulan')
                      <div class="invalid-feedback d-block">
                        {{ $errors->first('bulan') }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    {!! Form::label('tanggal', 'Tanggal') !!}
                    {!! Form::text('tanggal', null, ['class' => 'form-control datepicker' . ($errors->has('tanggal') ? ' is-invalid' : null)]) !!}
                    @error('tanggal')
                      <div class="invalid-feedback d-block">
                        {{ $errors->first('tanggal') }}
                      </div>
                    @enderror
                  </div>
                  <span class="font-italic">Note: Input bulan diperlukan untuk menampilkan acara per bulan di halaman utama.</span>
                </div>

                {{-- <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('bulan', 'Bidang') !!}
                    {!! Form::select('bulan', $bidangs, null, ['class' => 'form-control selectric' . ($errors->has('id_bidang') ? ' is-invalid' : null), 'placeholder' => 'Pilih Bidang']) !!}
                    @error('id_bidang')
                      <div class="invalid-feedback d-block">
                        {{ $errors->first('id_bidang') }}
                      </div>
                    @enderror
                  </div>
                </div> --}}
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