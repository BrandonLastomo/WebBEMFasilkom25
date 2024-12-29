@extends('layouts.admin')

@section('title')
  Dashboard - Info Kajian
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen Kajian</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('info-kajian.index') }}">Manajemen Kajian</a></div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Daftar Info Kajian</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Detail Kajian</h4>
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Judul</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $kajians->nama }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Deskripsi Kajian</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $kajians->deskripsi }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Dibuat pada</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $kajians->created_at }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Thumbnail</Label>
                  </div>
                  <div class="col-md-10">
                    : <img src="{{ asset('storage/' . $kajians->path) }}" class="card-img-top" style="object-fit: cover; height: 100%" alt="{{ $kajians->nama }}">
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