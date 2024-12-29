@extends('layouts.admin')

@section('title')
  Dashboard - Pengurus
@endsection

@section('content')
  @php
    $formTitle = !empty($anggota) ? 'Edit' : 'Tambah';
    $formButton = !empty($anggota) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengurus BEM Fasilkom 2023</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('pengurus.index') }}">Pengurus</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Pengurus</h4>
            </div>
            <div class="card-body">
              @if (!empty($anggota))
                {!! Form::model($anggota, ['route' => ['pengurus.update', $anggota->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'pengurus.store']) !!}
              @endif
              @csrf
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('nama', 'Nama Pengurus') !!}
                    {!! Form::text('nama', null, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : null)]) !!}
                    @error('nama')
                      <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('jabatan', 'Jabatan') !!}
                    {!! Form::select('jabatan', $jabatan, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Jabatan']) !!}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('id_bidang', 'Bidang') !!}
                    {!! Form::select('id_bidang', $bidangs, null, ['class' => 'form-control selectric', 'id' => 'bidang', 'placeholder' => 'Pilih Bidang']) !!}
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('id_departemen', 'Departemen') !!}
                    {!! Form::select('id_departemen', $departemens, null, ['class' => 'form-control selectric', 'id' => 'departemen', 'placeholder' => 'Pilih Departemen']) !!}
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('npm', 'NPM') !!}
                    {!! Form::text('npm', null, ['class' => 'form-control' . ($errors->has('npm') ? ' is-invalid' : null)]) !!}
                    @error('npm')
                      <div class="invalid-feedback">
                        {{ $errors->first('npm') }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('no_hp', 'No. Telepon') !!}
                    {!! Form::text('no_hp', null, ['class' => 'form-control' . ($errors->has('no_hp') ? ' is-invalid' : null)]) !!}
                    @error('no_hp')
                      <div class="invalid-feedback">
                        {{ $errors->first('no_hp') }}
                      </div>
                    @enderror
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

  <script>
    $('#bidang').on('change', function () {
      var id_bidang = $(this).val();
      // console.log(id_bidang);

      $.ajax({
        type: "get",
        url: "{{ url('admin/data/fetch') }}",
        data: {id: id_bidang},
        success: function (data) {
          $('#departemen').empty();

          console.log(data);
          $.each(data, function (key, value) {
            // console.log(value.id);
            $("#departemen").append('<option value="' + value.id + '">' + value.nama + '</option>');
          });

          $('#departemen').selectric();
        }
      });
    });

    $('#departemen').on('change', function () {
      var id = $(this).val();
      console.log(id);
    });
  </script>
@endsection