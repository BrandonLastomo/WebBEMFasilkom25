@extends('layouts.app')

@section('title')
Bidang PSDM | Kabinet Nirbitaraksa
@endsection

@section('content')
<!-- Content-bem -->
  <section id="content-bem" class="content-bem mt-5">

    <div class="container" data-aos="fade-up">

      <header class="section-header mt-5 fw-bold">
        <p>Bidang Pengembangan Sumber Daya Manusia</p>
      </header>

      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4 mb-5">
          <!--<img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">-->
        </div>
        <div class="col-md-6">
          <p>Bidang yang berfungsi mengawasi dan mengevaluasi serta
            mengembangkan sumber daya manusia baik di internal maupun eksternal
            organisasi BEM FASILKOM UNSIKA.</p>
        </div>
      </div>

      <div class="row justify-content-center text-center m-5">

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Bidang</h4>
              <p>Putri Dwi Rahayu</p>
            </div>
          </div>
        </div>

      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <p>Departemen yang ada dalam Bidang PSDM:</p>
        </div>

        <div class="row justify-content-center text-center align-text-bottom mt-5 mb-5">
          <div class="col-md-3">
            <a href="{{ route('kaderisasi') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Kaderisasi</h4>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="{{ route('pp') }}">
              <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <h4>Departemen Pengembangan dan Pengawasan</h4>
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