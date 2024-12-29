@extends('layouts.admin')

@section('title')
  Dashboard - Merchandise
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen Merchandise</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('merchandise.index') }}">Manajemen Merchandise</a></div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Daftar Merchandise</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Detail Merchandise</h4>
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Judul</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $merchandises->nama }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Harga</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $merchandises->harga }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Status</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $merchandises->status }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Deskripsi</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $merchandises->deskripsi }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Dibuat pada</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $merchandises->created_at }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Thumbnail</Label>
                  </div>
                  <div class="col-md-10">
                    : <img src="{{ asset('storage/' . $merchandises->path) }}" class="card-img-top" style="object-fit: cover; height: 100%" alt="{{ $merchandises->nama }}">
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