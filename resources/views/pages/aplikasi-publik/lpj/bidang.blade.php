@extends('layouts.app')

@section('title')
  LPJ Online | Kabinet {{env('KABINET');}} 
@endsection

@section('content')
  <section id="lpj-detail" class="lpj-detail mt-5">

    <header class="section-header mt-5 fw-bold">
      <p>LPJ Online BEM Fasilkom 2024</p>
    </header>

    <div class="container mt-5">

      <h4 class="text-center" style="font-weight: 600; margin-bottom: 80px">Bidang {{ $bidang->nama }}</h4>

      <div class="row text-center mt-5 justify-content-center">

        @forelse ($departemens as $departemen)
          @if ($departemen['bidang']['nama'] == $bidang->nama)
            <div class="col-md-3 mb-3">
              <a href="{{ route('lpj.departemen', $departemen['slug']) }}">
                <div class="card border-0">
                  <div class="card-body center">
                    <h4>Departemen {{ $departemen['nama'] }}</h4>
                  </div>
                </div>
              </a>
            </div>
          @endif
        @empty
          
        @endforelse

      </div>

    </div>

  </section>
@endsection