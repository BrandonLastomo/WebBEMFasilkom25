@extends('layouts.pkkmb')

@section('title')
PKKMB Fasilkom 2021
@endsection

@section('content')

<main id="main">

  <section id="content" class="content informasi mt-5">
    <div class="container mt-5">
      <header class="section-header">
        <h2>{{ $informasi->judul }}</h2>
      </header>
      <div class="row justify-content-center">
        <img src="{{ asset('storage/' . $informasi->path) }}" alt="{{ $informasi->judul }}" class="img-fluid img-thumbnail information-img">
        <div class="col-md-8">
          <div class="card mt-3">
            <div class="card-body">
              {!! $informasi->deskripsi !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End #main -->
@endsection