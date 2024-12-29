@extends('layouts.app')

@section('title')
Bidang Komunikasi dan Informasi | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Content-bem -->
  <section id="content-bem" class="content-bem mt-5">

    <div class="container" data-aos="fade-up">

      <header class="section-header mt-5 fw-bold">
        <p>Bidang Komunikasi dan Informasi</p>
      </header>

      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4 mb-5">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/kominfo.png') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-6">
          <p>Bidang yang bertugas mengembangkan dan membangun hubungan
          serta kerjasama baik internal organisasi maupun antar instansi, serta
          bertanggung jawab atas pengembangan teknologi informasi.</p>
        </div>
      </div>

      <div class="row mt-5 justify-content-center text-center m-5">
      <x-koordinator-card bidang="Komunikasi dan Informasi" :pengurus="$pengurus" />


        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Bidang</h4>
              <p>Syauqi Sulthana J.</p>
            </div>
          </div>
        </div> --}}

      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <p>Departemen yang ada dalam Bidang Kominfo:</p>
        </div>

        <div class="row justify-content-center text-center align-text-bottom mt-5 mb-5">

          <div class="col-md-3">
            <a href="{{ route('bismit') }}">
              <div class="card">
                <div class="card-body">
                  <h4>Departemen Bisnis dan Kemitraan</h4>
                </div>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a href="{{ route('media') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Media</h4>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ route('pti') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Pengembangan Teknologi Informasi</h4>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ route('humas') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Humas</h4>
                </div>
              </div>
            </a>
          </div>

        </div>

      </div>

    </div>

  </section>
<!-- End Content-bem -->
@endsection