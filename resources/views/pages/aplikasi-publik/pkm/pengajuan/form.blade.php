@extends('layouts.pkm')

@section('title')
  PKM Centre - Pengajuan Usul
@endsection

@section('content')
  @php
    $formTitle = !empty($anggota) ? 'Edit' : 'Tambah';
    $formButton = !empty($anggota) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengajuan Usul</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('pkm-center') }}">Beranda</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('pengajuan.index') }}">Pengajuan</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Registrasi Anggota</h4>
            </div>
            <div class="card-body">
              @if (!empty($anggota))
                {!! Form::model($anggota, ['route' => ['pengajuan.update', $anggota->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::model($user, ['route' => 'pengajuan.store']) !!}
              @endif
              @csrf
              {{-- {!! Form::hidden('id_user', Auth::user()->id) !!} --}}
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('nama', 'Nama Anggota') !!}
                    {!! Form::text('nama', '', ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : '')]) !!}
                    @error('nama')
                      <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('npm', 'NPM') !!}
                    {!! Form::text('npm', '', ['class' => 'form-control' . ($errors->has('npm') ? ' is-invalid' : '')]) !!}
                    @error('npm')
                      <div class="invalid-feedback">
                        {{ $errors->first('npm') }}
                      </div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('prodi', 'Program Studi') !!}
                    {!! Form::select('prodi', $prodi, '', ['class' => 'form-control selectric', 'placeholder' => 'Pilih Program Studi']) !!}
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('tahun_masuk', 'Tahun Masuk') !!}
                    {!! Form::select('tahun_masuk', $tahun, '', ['class' => 'form-control selectric', 'id' => 'departemen', 'placeholder' => 'Pilih Tahun Masuk']) !!}
                  </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 col-sm-12">
                  <div class="form-group">
                    {!! Form::label('status', 'Status') !!}
                    {!! Form::select('status', $status, '', ['class' => 'form-control selectric', 'id' => 'departemen', 'placeholder' => 'Pilih Status']) !!}
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

  {{-- <script>
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
  </script> --}}
@endsection