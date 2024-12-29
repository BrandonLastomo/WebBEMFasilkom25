@extends('layouts.prepkm')

@section('title')
  PKM Centre - Pengumuman
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section detail">
      <div class="section-header">
        <h1>{{ $pengumuman->judul }}</h1>
      </div>

      <div class="row">
        <div class="col-md mb-4">
          <div class="card p-1">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 pl-0">
                  <img src="{{ (empty($pengumuman->path) ? asset('pkm/assets/img/news/img13.jpg') : asset('storage/' . $pengumuman->path)) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 mt-3">
                  <h3>{{ $pengumuman->judul }}</h3>
                  <h6 class="text-muted">{{ \Carbon\Carbon::parse($pengumuman->tanggal)->translatedFormat('d F Y') }}</h6>
                  <p>{!! $pengumuman->konten !!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
@endsection