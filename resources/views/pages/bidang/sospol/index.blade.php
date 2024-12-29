@extends('layouts.app')

@section('title')
Bidang Sosial Politik | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Content-bem -->
  <section id="content-bem" class="content-bem mt-5">

    <div class="container" data-aos="fade-up">

      <header class="section-header mt-5 fw-bold">
        <p>Bidang Sosial Politik</p>
      </header>

      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4 mb-5">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/sospol.png') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-6">
          <p>Bidang yang bertugas melakukan kajian dan pengumpulan data yang
          real mengenai permasalahan yang ada di internal maupun eksternal
          kampus.</p>
        </div>
      </div>

      <div class="row mt-5 justify-content-center text-center m-5">
        
       
      <x-koordinator-card bidang="Sosial Politik" :pengurus="$pengurus" />

       

        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Bidang</h4>
              <p>Daffa Rafif Agustian</p>
            </div>
          </div>
        </div> --}}

      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <p>Departemen yang ada dalam Bidang Sosial Politik:</p>
        </div>

        <div class="row justify-content-center text-center align-text-bottom mt-5 mb-5">

          <div class="col-md-3">
            <a href="{{ route('adkesma') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Adkesma</h4>
                </div>
              </div>
            </a>
          </div>
  
          <div class="col-md-3">
            <a href="{{ route('kastrat') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Kastrat</h4>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ route('pengmas') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Pengmas</h4>
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