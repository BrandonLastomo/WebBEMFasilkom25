@extends('layouts.app')

@section('title')
Fasilkom Cup | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="fasilkom-cup" class="fasilkom-cup mt-5">
	{{-- <div class="row mt-4 text-center">
		<div class="col-md-12 d-flex justify-content-center">
			<img src="{{ url('frontend/assets/img/cup.svg') }}" style="width: 43%;">
		</div>
		<h5 class="fw-light mt-5">" Yuk siapin dulu team kamu untuk pertarungan persahabatan se-fasilkom unsika.. "</h5>
	</div> --}}
	<div class="container">
		<header class="section-header mt-5 mb-3 fw-bold">
			<p class="mb-3">Fasilkom Cup 2021</p>
      Terdapat 9 turnamen yang ada di Fasilkom Cup 2021
		</header>
    <div class="row g-4 justify-content-center text-center">
      <h4>Umum</h4>
      @foreach ($turnamens as $turnamen)
        @if ($turnamen->nama == 'Mobile Legend' || $turnamen->nama == 'PUBG')
          <div class="col-md-4 col-sm-6">
            <a href="{{ route('fasilkom-cup.detail', $turnamen->slug) }}">
              <div class="service_box cup">
                <div class="service_icon">
                  <img src="{{ asset('storage/' . $turnamen->path) }}" width="65" class="img-fluid border-0" alt="{{ $turnamen->nama }}">
                </div>
                <h3>{{ $turnamen->nama }}</h3>
                <p>{!! $turnamen->deskripsi !!}</p>
              </div>
            </a>
          </div>
        @endif
      @endforeach
    </div>

		<div class="row g-4 justify-content-center text-center mt-4">
      <h4>Mahasiswa/i Fasilkom</h4>
      @foreach ($turnamens as $turnamen)
        @if ($turnamen->nama != 'Mobile Legend' && $turnamen->nama != 'PUBG')
          <div class="col-md-4 col-sm-6">
            <a href="{{ route('fasilkom-cup.detail', $turnamen->slug) }}">
              <div class="service_box cup">
                <div class="service_icon">
                  <img src="{{ asset('storage/' . $turnamen->path) }}" width="65" class="img-fluid border-0" alt="{{ $turnamen->nama }}">
                </div>
                <h3>{{ $turnamen->nama }}</h3>
                <p>{!! $turnamen->deskripsi !!}</p>
              </div>
            </a>
          </div>
        @endif
      @endforeach
		</div>
	</div>
</section>
@endsection