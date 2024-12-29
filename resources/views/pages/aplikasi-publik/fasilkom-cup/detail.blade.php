@extends('layouts.app')

@section('title')
Fasilkom Cup | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="fasilkom-cup" class="fasilkom-cup mt-5">
	<div class="container">
		<header class="section-header mt-5 mb-3 fw-bold">
			<p class="mb-4">Fasilkom Cup 2021</p>
      {{-- Di sini kamu bisa melihat status pertandingan atau mendaftarkan tim kamu --}}
      <span>{{ $turnamen->nama }}</span>
		</header>
		<div class="row g-4 justify-content-center">
      <div class="col-md-3 col-sm-6">
        <a href="#">
          <div class="service_box detail">
            <div class="service_icon">
              <i class="bi-diagram-3"></i>
            </div>
            <h3>Status Pertandingan</h3>
            <p>Lihat pertandingan yang sedang berlangsung.</p>
          </div>
        </a>
			</div>
      <div class="col-md-3 col-sm-6">
        {{-- <a href="{{ route('fasilkom-cup.register', $turnamen->slug) }}"> --}}
          <a href="{{ route('fasilkom-cup.register', $turnamen->slug) }}">
          <div class="service_box detail">
            <div class="service_icon">
              <i class="bi-clipboard"></i>
            </div>
            <h3>Daftar</h3>
            <p>Daftarkan tim kamu.</p>
          </div>
        </a>
			</div>
		</div>
	</div>
</section>
@endsection