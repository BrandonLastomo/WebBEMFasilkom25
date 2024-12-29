@extends('layouts.pkm')

@section('title')
  PKM Centre - Pengajuan Usul
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengajuan Usul</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('pkm-center') }}">Beranda</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('pengajuan.index') }}">Pengajuan</a></div>
        </div>
      </div>
      @include('includes.pkm.flash')
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h4>Identitas Proposal</h4>
            </div>
            <div class="card-body">

              {{-- <div class="row">
                <div class="col-md">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      Judul Proposal
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, molestiae!
                    </div>
                  </div>
                </div>
              </div> --}}

              {!! Form::model($proposal, ['route' => ['pengajuan.update', $proposal->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'class' => 'needs-validation', 'novalidate']) !!}
              {!! Form::hidden('id') !!}
              <div class="row">
                <div class="form-group col-md-12 col-12">
                  {!! Form::label('judul', 'Judul') !!}
                  {!! Form::text('judul', null, ['class' => 'form-control', 'required' => '']) !!}
                  <div class="invalid-feedback">
                    Judul harus diisi.
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-12 col-12">
                  {!! Form::label('jenis', 'Bidang Kegiatan') !!}
                  {!! Form::select('jenis', $jenis, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Bidang']) !!}
                </div>
              </div>

              <div class="row">
                <div class="col-md">
                  {!! Form::submit('Simpan', ['class' => 'btn btn-primary float-right']) !!}
                </div>
              </div>
              {!! Form::close() !!}

              {{-- <div class="row">
                <div class="col-md">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      Bidang Kegiatan
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> Lorem, ipsum.
                    </div>
                  </div>
                </div>
              </div> --}}

            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h4>Unggah Proposal</h4>
            </div>
            <div class="card-body">
              {!! Form::open(['route' => ['pengajuan.upload', $proposal->id], 'enctype' => 'multipart/form-data']) !!}
                {!! Form::file('file', ['class' => 'form-control border-0' . ($errors->has('file') ? ' is-invalid' : null), 'style' => 'margin-left: -15px']) !!}
                @error('file')
                  <div class="invalid-feedback">
                    {{ $errors->first('file') }}
                  </div>
                @enderror
                {!! Form::submit('Unggah', ['class' => 'btn btn-primary mt-3 float-right']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h4>Anggota</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th width="10%">#</th>
                      <th width="15%">Nama</th>
                      <th>NPM</th>
                      <th>Tahun Masuk</th>
                      <th>Program Studi</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($anggotas as $anggota)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $anggota->nama }}</td>
                        <td>{{ $anggota->npm }}</td>
                        <td>{{ $anggota->tahun_masuk }}</td>
                        <td>{{ $anggota->prodi }}</td>
                        <td>{{ $anggota->status }}</td>
                        <td>
                          <a href="{{ route('pengajuan.edit-member', $anggota->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                          <a href="{{ route('pengajuan.delete-member', $anggota->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="7" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <a href="{{ route('pengajuan.registrasi', $proposal->id) }}" class="btn btn-primary mt-3 float-right">Tambah Anggota</a>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-body">
              {!! Form::open(['route' => ['pengajuan.upload', $proposal->id], 'enctype' => 'multipart/form-data']) !!}
                {!! Form::file('file', ['class' => 'form-control border-0', 'style' => 'margin-left: -15px']) !!}
                {!! Form::submit('Unggah', ['class' => 'btn btn-primary mt-3']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div> --}}

    </section>
  </div>
@endsection