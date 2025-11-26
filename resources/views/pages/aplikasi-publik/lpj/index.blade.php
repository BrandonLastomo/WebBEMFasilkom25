@extends('layouts.app')

@section('title')
  LPJ Online | Kabinet {{env('KABINET');}}
@endsection

@section('content')
  <section id="lpj" class="lpj mt-5">
      
      <header class="section-header mt-5 fw-bold">
        <p>LPJ Online BEM Fasilkom 2025</p>
      </header>
      
      <div class="container mt-5">

        <div class="row text-center">

          @foreach ($bidangs as $bidang)
            <div class="col-md-3 mb-3">
              <a href="{{ route('lpj.bidang', $bidang->slug) }}">
                <div class="card border-0">
                  <div class="card-body center">
                    <h4>Bidang {{ $bidang->nama }}</h4>
                  </div>
                </div>
              </a>
            </div>
          @endforeach

        </div>

      </div>

  </section>
@endsection