@extends('layouts.pkkmb')

@section('title')
PKKMB Fasilkom 2021
@endsection

@section('content')

<main id="main">

  <section id="content" class="content tata-tertib mt-5">
    <div class="container mt-5">
      <header class="section-header">
        <h2>Tata Tertib dan Pembekalan PKKMB 2021</h2>
      </header>
      <div class="row mt-3">
        <div class="col-md">
          <img src="{{ asset('pkkmb/assets/img/pembekalan_1.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-md">
          <img src="{{ asset('pkkmb/assets/img/pembekalan_2.png') }}" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End #main -->
@endsection