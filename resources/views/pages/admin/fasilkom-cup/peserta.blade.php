@extends('layouts.admin')

@section('title')
  Dashboard - Fasilkom Cup
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Fasilkom Cup</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="{{ route('fcup.index') }}">Fasilkom Cup</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('fcup.show', $turnamen->slug) }}">{{ $turnamen->nama }}</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          @switch($turnamen->nama)
            @case('Mobile Legend (P)')
              @include('pages.admin.fasilkom-cup.peserta-ml-putri')
              @break
            @case('Magic Chess')
              @include('pages.admin.fasilkom-cup.peserta-mc')
              @break
            @case('Catur Putra')
              @include('pages.admin.fasilkom-cup.peserta-catur')
              @break
            @case('Catur Putri')
              @include('pages.admin.fasilkom-cup.peserta-catur')
              @break
            @case('Valorant')
              @include('pages.admin.fasilkom-cup.peserta-valorant')
              @break
            @case('Point Blank')
              @include('pages.admin.fasilkom-cup.peserta-pb')
              @break
            @case('Dota 2')
              @include('pages.admin.fasilkom-cup.peserta-dota')
              @break
            @default
              @include('pages.admin.fasilkom-cup.peserta-game-umum')
          @endswitch
        </div>
      </div>
    </section>
  </div>

  <!-- Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalImg">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="" alt="" id="imagePreview">
        </div>
      </div>
    </div>
  </div>
@endsection