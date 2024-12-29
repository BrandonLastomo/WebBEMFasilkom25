@extends('layouts.pkm')

@section('title')
  PKM Centre - Profil
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Profil</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('pkm-center') }}">Beranda</a></div>
          <div class="breadcrumb-item">Profil</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
        @include('includes.pkm.flash')
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-7">
            <div class="card profile-widget m-0">
              <div class="profile-widget-header">
                <div class="profile-widget-items pl-1">
                  <div class="profile-widget-item ml-3">
                    <h5 class="mt-1">Identitas Pengusul</h5>
                  </div>
                </div>
              </div>
              <div class="profile-widget-description">

                <div class="row">
                  <div class="col-md">
                    <div class="row">
                      <div class="col-md-4">
                        Nama
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md">
                        {{ Auth::user()->name }}
                      </div>
                    </div>
                  </div>
                  <div class="col-md mt-sm-3 mt-3 mt-md-0 mt-lg-0">
                    <div class="row">
                      <div class="col-md-4">
                        NPM
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md">
                        {{ Auth::user()->npm }}
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md">
                    <div class="row">
                      <div class="col-md-4">
                        Tahun Masuk
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md">
                        {{ Auth::user()->tahun_masuk }}
                      </div>
                    </div>
                  </div>
                  <div class="col-md mb-sm-4 mb-4 mb-md-2 mb-lg-2">
                    <div class="row mt-sm-3 mt-3 mt-md-0 mt-lg-0">
                      <div class="col-md">
                        Program Studi
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md">
                        {{ Auth::user()->prodi }}
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row float-right">
                  <div class="col-md">
                    <a href="{{ route('profil.edit', Auth::user()->id) }}" class="btn btn-primary border-0">Edit Profil</a>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-5 mt-sm-4 mt-4 mt-md-0 mt-lg-0">
            <div class="card">
              {!! Form::open(['route' => 'pengajuan.store']) !!}
              @csrf
              <div class="card-header">
                <h4>Pengajuan Proposal</h4>
              </div>
              <div class="card-body">
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
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Simpan</button>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection