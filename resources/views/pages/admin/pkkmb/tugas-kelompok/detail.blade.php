@extends('layouts.admin')

@section('title')
  Dashboard - Tugas Kelompok
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tugas Kelompok</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="{{ route('tugas-kelompok.index') }}">Tugas Kelompok</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">

          <div class="card">
            <div class="card-header border-0">
              <h5>{{ $tugas->nama_kelompok }}</h5>
            </div>
            <div class="card-body">
              <div class="row">

                <div class="col-md-6">
                  
                  <div class="row mb-3">
                    <div class="col-md">
                      <div class="row">
                        <div class="col-md">
                          <h6>Nama Anggota :</h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          {!! nl2br($tugas->nama_anggota) !!}
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-6">
                  
                  <div class="row mb-3">
                    <div class="col-md">
                      <div class="row">
                        <div class="col-md">
                          <h6>Link Video</h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          @empty($tugas->link_video)
                            (Kosong)
                          @else
                            <a href="{{ $tugas->link_video }}">{{ $tugas->link_video }}</a>
                          @endempty
                        </div>
                      </div>
                    </div>
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