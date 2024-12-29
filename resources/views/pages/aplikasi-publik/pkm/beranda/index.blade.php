@extends('layouts.pkm')

@section('title')
  PKM Centre - Beranda
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Beranda</h1>
      </div>

      <h2 class="section-title">Proposal PKM Tahun Sebelumnya</h2>
      <div class="row">
        <div class="col mb-4">
          <div class="owl-carousel owl-theme pengumuman">

            @forelse ($previews as $preview)
              <div class="item">
                <div class="card">
                  {{-- <a href="{{ route('preview-detail', $preview->slug) }}">
                    <img src="{{ (empty($preview->path) ? asset('pkm/assets/img/news/img13.jpg') : asset('storage/' . $preview->path)) }}" alt="" class="card-img-top">
                  </a> --}}
                  <div class="card-body">
                    <h5 class="card-title">{{ $preview->judul }}</h5>
                    <p class="card-text">{{ $preview->bidang }}</p>
                    <p class="card-text">{{ $preview->tim }}</p>
                    <a href="{{ asset('storage/' . $preview->path) }}" class="float-right" target="_blank">Read More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            @empty
              
            @endforelse
            
          </div>

          {{-- @forelse ($previews as $preview)
            <div id="prev-slide-preview" class="btn-control-preview d-flex justify-content-center">
              <i class="bi bi-arrow-left"></i>
            </div>
            <div id="next-slide-preview" class="btn-control-preview d-flex justify-content-center">
              <i class="bi bi-arrow-right"></i>
            </div>
          @empty
            
          @endforelse --}}
        </div>
      </div>
      
      <h2 class="section-title">Pengumuman</h2>
      <div class="row">
        <div class="col mb-4">
          <div class="owl-carousel owl-theme pengumuman">

            @forelse ($pengumumans as $pengumuman)
              <div class="item">
                <div class="card">
                  {{-- <a href="{{ route('pengumuman-detail', $pengumuman->slug) }}">
                    <img src="{{ (empty($pengumuman->path) ? asset('pkm/assets/img/news/img13.jpg') : asset('storage/' . $pengumuman->path)) }}" alt="" class="card-img-top">
                  </a> --}}
                  <div class="card-body">
                    <h5 class="card-title">{{ $pengumuman->judul }}</h5>
                    <p class="text-muted">{{ \Carbon\Carbon::parse($pengumuman->tanggal)->translatedFormat('d F Y') }}</p>
                    <p class="card-text">{!! Str::limit($pengumuman->konten, 50) !!}</p>
                    <a href="{{ route('pengumuman-detail', $pengumuman->slug) }}" class="float-right" target="_blank">Read More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            @empty
              
            @endforelse
            
          </div>

          {{-- @forelse ($pengumumans as $pengumuman)
            <div id="prev-slide-pengumuman" class="btn-control-pengumuman d-flex justify-content-center">
              <i class="bi bi-arrow-left"></i>
            </div>
            <div id="next-slide-pengumuman" class="btn-control-pengumuman d-flex justify-content-center">
              <i class="bi bi-arrow-right"></i>
            </div>
          @empty
            
          @endforelse --}}
        </div>
      </div>
      
      <h2 class="section-title">Program</h2>
      <div class="row">
        <div class="col mb-4">
          <div class="owl-carousel owl-theme pengumuman">

            @forelse ($programs as $program)
              <div class="item">
                <div class="card">
                  {{-- <a href="{{ route('beranda-detail', $program->slug) }}">
                    <img src="{{ (empty($program->path) ? asset('pkm/assets/img/news/img13.jpg') : asset('storage/' . $program->path)) }}" alt="" class="card-img-top">
                  </a> --}}
                  <div class="card-body">
                    <h5 class="card-title">{{ $program->judul }}</h5>
                    <p class="text-muted">{{ \Carbon\Carbon::parse($program->tanggal)->translatedFormat('d F Y') }}</p>
                    <p class="card-text">{!! Str::limit($program->konten, 50) !!}</p>
                    <a href="{{ route('beranda-detail', $program->slug) }}" class="float-right" target="_blank">Read More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            @empty
              
            @endforelse
            
          </div>

          {{-- @forelse ($programs as $program)
            <div id="prev-slide-program" class="btn-control-program d-flex justify-content-center">
              <i class="bi bi-arrow-left"></i>
            </div>
            <div id="next-slide-program" class="btn-control-program d-flex justify-content-center">
              <i class="bi bi-arrow-right"></i>
            </div>
          @empty
            
          @endforelse --}}
        </div>
      </div>

    </section>
  </div>
@endsection