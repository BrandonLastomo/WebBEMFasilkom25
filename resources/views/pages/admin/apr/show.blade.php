@extends('layouts.admin')

@section('title')
  Dashboard - Advocacy Progress Report
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen APR</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('apr.index') }}">Manajemen APR</a></div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Daftar Pengaduan APR</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Detail Pengaduan APR</h4>
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Judul</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $reports->nama }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Kategori Pengaduan</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $reports->keterangan }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Deskripsi Pengaduan</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $reports->deskripsi }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Dibuat pada</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $reports->created_at }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Status</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $reports->statusLabel() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection