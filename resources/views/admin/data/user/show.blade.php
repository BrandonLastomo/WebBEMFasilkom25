@extends('layouts.admin')

@section('title')
  Dashboard - User
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen User</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('user.index') }}">Manajemen User</a></div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Daftar User</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Detail User</h4>
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Nama</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $user->name }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Email</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $user->email }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Diverifikasi pada</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $user->verified_at_formatted }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Dibuat pada</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $user->created_at_formatted }}
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-2">
                    <Label>Diperbarui pada</Label>
                  </div>
                  <div class="col-md-10">
                    : {{ $user->updated_at_formatted }}
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