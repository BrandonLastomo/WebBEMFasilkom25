@extends('layouts.app')

@section('title')
Kontak | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact mt-5">

  <div class="container" data-aos="fade-up">

    <header class="section-header mt-5 fw-bold">
      <p>Kontak Kami</p>
    </header>

    <div class="row my-5">

      <div class="col-lg-5 mb-4">
        <div class="card border-0">
          <div class="card-body">
            <div class="row pb-2">
              <div class="col-md-2 text-center mt-3">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="col-md mt-4 lead">
                <a href="https://goo.gl/maps/zG9AQiJsTTgZgXdQA" target="_blank" style="margin-top: -5px">Universitas Singaperbangsa Karawang,<br> Jl. HS. Ronggowaluyo, Telukjambe Timur, Karawang 41361</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card border-0">
          <div class="">
            <div class="row pb-2 align-content-center">
              <div class="col-md-3 text-center mt-3">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="col-md lead">
                <p style="line-height: 110px">bem.cs@unsika.ac.id</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 mb-4">
        <div class="card border-0">
          <div class="card-body">
            <div class="row pb-2">
              <div class="col-md-4 text-center mt-3">
                <i class="bi bi-clock"></i>
              </div>
              <div class="col-md mt-4 lead">
                <p class="mt-2">Senin - Jumat <br> 9:00 - 17:00</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- End Contact Section -->
@endsection