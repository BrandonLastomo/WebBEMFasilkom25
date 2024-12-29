@extends('layouts.pkkmb')

@section('title')
PKKMB Fasilkom 2021
@endsection

@section('content')

<main id="main">

  <section id="content" class="content kelompok mt-5">
    <div class="container mt-5">
      <header class="section-header">
        <h2>Data Kelompok PKKMB 2021</h2>
      </header>

      <div class="row mt-2 g-3">
        <div class="col-md-6">
          <img src="{{ asset('pkkmb/assets/img/kelompok_1.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          <img src="{{ asset('pkkmb/assets/img/kelompok_2.png') }}" alt="" class="img-fluid">
        </div>
      </div>

      <div class="row mt-2 g-3">
        <div class="col-md-6">
          <img src="{{ asset('pkkmb/assets/img/kelompok_3.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          <img src="{{ asset('pkkmb/assets/img/kelompok_4.png') }}" alt="" class="img-fluid">
        </div>
      </div>

      <div class="row mt-2 g-3">
        <div class="col-md-6">
          <img src="{{ asset('pkkmb/assets/img/kelompok_5.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          <img src="{{ asset('pkkmb/assets/img/kelompok_6.png') }}" alt="" class="img-fluid">
        </div>
      </div>

      <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
          <img src="{{ asset('pkkmb/assets/img/kelompok_7.png') }}" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End #main -->
@endsection