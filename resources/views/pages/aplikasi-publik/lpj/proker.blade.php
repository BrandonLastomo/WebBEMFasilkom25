@extends('layouts.app')

@section('title')
  LPJ Online | Kabinet {{env('KABINET');}} 
@endsection

@section('content')
  <section id="lpj-detail-proker" class="lpj-detail-proker mt-5">
      
    <header class="section-header mt-5 fw-bold">
      <p>LPJ Online BEM Fasilkom 2024</p>
    </header>
    
    <div class="container mt-5">

      <h4 class="text-center" style="font-weight: 600; margin-bottom: 80px">{{ $proker->nama_proker }}</h4>

      <div class="card border-0 p-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md">
              <h5>Deskripsi</h5>
              <p>{!! $proker->deskripsi !!}</p>
            </div>
            <div class="col-md">
              <h5>Anggaran</h5>
              <p>Rp{{ number_format($proker->anggaran) }},00</p>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md">
              <h5>Penanggung Jawab</h5>
              <p>{{ $proker->penanggung_jawab }}</p>
            </div>
            <div class="col-md">
              <h5>Triwulan</h5>
              <p>{{ $proker->triwulan }}</p>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md">
              <h5>Status</h5>
              <p><i class="{{ ($proker->statusLabel() == 'Terlaksana') ? 'bi-check2-circle done' : 'bi-dash-circle not-done' }}"></i> {{ $proker->statusLabel() }}</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
@endsection