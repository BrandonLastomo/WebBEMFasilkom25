@extends('layouts.app')

@section('title')
  LPJ Online | Kabinet {{env('KABINET');}} 
@endsection

@section('content')
  <section id="lpj-proker" class="lpj-proker mt-5">
      
    <header class="section-header mt-5 fw-bold">
      <p>LPJ Online BEM Fasilkom 2024</p>
    </header>
    
    <div class="container mt-5">

      <h4 class="text-center" style="font-weight: 600; margin-bottom: 80px">Program Kerja Departemen {{ $departemen->nama }}</h4>

      <div class="row text-center mt-5 justify-content-center">

        @forelse ($prokers as $proker)
          @if ($proker->departemen->nama == $departemen->nama)
            <div class="col-md-4 mb-3">
              <a href="{{ route('lpj.proker', ['departemen' => $departemen->slug, 'proker' => $proker->slug]) }}">
                <div class="card border-0">
                  <div class="card-body center">
                    <h4>{{ $proker->nama_proker }}</h4>
                  </div>
                </div>
              </a>
              </a>
            </div>
          @endif
        @empty
          
        @endforelse

      </div>

    </div>

  </section>
@endsection