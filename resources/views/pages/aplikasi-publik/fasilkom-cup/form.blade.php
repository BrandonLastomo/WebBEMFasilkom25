@extends('layouts.app')

@section('title')
Fasilkom Cup | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="fasilkom-cup" class="fasilkom-cup mt-5">
	<div class="container">
		<header class="section-header mt-5 mb-3 fw-bold">
			<p class="mb-4">Fasilkom Cup 2021</p>
      <span>{{ $turnamen->nama }}</span>
		</header>
		{{-- <div class="row g-4 justify-content-center">
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
        <a href="#">
          <div class="service_box detail">
            <div class="service_icon">
              <i class="bi-clipboard"></i>
            </div>
            <h3>Daftar</h3>
            <p>Daftarkan tim kamu.</p>
          </div>
        </a>
			</div>
		</div> --}}
    <div class="row justify-content-center">
      <div class="col-md-6 col-12 col-lg-8">
        <div class="card border-0 p-2">
          <div class="card-header border-0 pt-3 bg-white">
            <h4>Form Pendaftaran</h4>
          </div>
          <div class="card-body pb-5">
            @if ($turnamen->nama == 'Mobile Legend')
              @include('pages.aplikasi-publik.fasilkom-cup.form-ml-umum')
            @elseif ($turnamen->nama == 'PUBG')
              @include('pages.aplikasi-publik.fasilkom-cup.form-pubg')
            @elseif ($turnamen->nama == 'Mobile Legend (P)')
              @include('pages.aplikasi-publik.fasilkom-cup.form-ml-putri')
            @elseif ($turnamen->nama == 'Magic Chess')
              @include('pages.aplikasi-publik.fasilkom-cup.form-mc')
            @elseif ($turnamen->nama == 'Catur Putra' || $turnamen->nama == 'Catur Putri')
              @include('pages.aplikasi-publik.fasilkom-cup.form-catur')
            @elseif ($turnamen->nama == 'Dota 2')
              @include('pages.aplikasi-publik.fasilkom-cup.form-dota')
            @elseif ($turnamen->nama == 'Valorant')
              @include('pages.aplikasi-publik.fasilkom-cup.form-valorant')
            @else
              @include('pages.aplikasi-publik.fasilkom-cup.form-pb')
            @endif
          </div>
        </div>
      </div>
    </div>
	</div>
</section>
@endsection