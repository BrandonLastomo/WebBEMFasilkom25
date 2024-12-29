@extends('layouts.pkkmb')

@section('title')
PKKMB Fasilkom 2021
@endsection

@section('content')

<main id="main">
  
  <section id="home" class="home mt-5">
    <div class="container">
      
      <header class="section-header">
        <h2>Selamat Datang <br> Mahasiswa Baru Fasilkom UNSIKA 2021!</h2>
      </header>
    
      <div class="row text-center justify-content-center mt-md-4 mt-0 mt-sm-0 d-md-flex d-none d-sm-none">

        <div class="col-md-3 mb-md-0 mb-5 mb-sm-5">
          <a href="{{ route('pkkmb.absen') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/absen.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Absen</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3 mb-md-0 mb-5 mb-sm-5">
          <a href="{{ route('pkkmb.tata-tertib') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/tata_tertib.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Tata Tertib</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-3 mb-md-0 mb-5 mb-sm-5">
          <a href="{{ route('pkkmb.kelompok') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/kelompok.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Data Kelompok</h5>
              </div>
            </div>
          </a>
        </div>

      </div>

      <div class="row text-center justify-content-center mt-md-5 mt-0 mt-sm-0 d-md-flex d-none d-sm-none">

        <div class="col-md-3 mb-md-0 mb-5 mb-sm-5">
          <a href="{{ route('pkkmb.rundown') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/rundown.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Rundown</h5>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-md-3 mb-md-0 mb-5 mb-sm-5">
          <a href="{{ route('pkkmb.mars') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/mars.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Mars & Hymne UNSIKA</h5>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col-md-3 mb-md-0 mb-5 mb-sm-5">
          <a href="{{ route('pkkmb.tugas') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/tugas.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Tugas</h5>
              </div>
            </div>
          </a>
        </div>

      </div>

      <div class="owl-carousel content text-center owl-theme d-md-none d-block d-sm-block">

        <div class="item">
          <a href="{{ route('pkkmb.absen') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/absen.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Absen</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="{{ route('pkkmb.tata-tertib') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/tata_tertib.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Tata Tertib</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="{{ route('pkkmb.kelompok') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/kelompok.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Data Kelompok</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="{{ route('pkkmb.rundown') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/rundown.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Rundown</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="{{ route('pkkmb.mars') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/mars.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Mars & Hymne UNSIKA</h5>
              </div>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="{{ route('pkkmb.tugas') }}">
            <div class="card">
              <img src="{{ asset('pkkmb/assets/img/ilustrasi/tugas.svg') }}" alt="" class="card-img-top">
              <div class="card-body">
                <h5>Tugas</h5>
              </div>
            </div>
          </a>
        </div>
        
      </div>

      <div id="next-slide-home" class="btn-control-home d-md-none d-flex d-sm-flex justify-content-center align-items-center">
        <i class="fa fa-chevron-right" style="margin-right: -3px;"></i>
      </div>
      <div id="prev-slide-home" class="btn-control-home d-md-none d-flex d-sm-flex justify-content-center align-items-center">
        <i class="fa fa-chevron-left" style="margin-left: -3px;"></i>
      </div>
      
    </div>
  </section>

  <section id="informasi" class="informasi">
    <div class="container">
      <header class="section-header">
        <h2>Informasi PKKMB 2021</h2>
      </header>
      
      <div class="row justify-content-center card-information g-2 mt-md-4 mt-5 mt-sm-5">

        <div class="col-md">
          
          @if (!empty($informasis->first()))
            <div class="owl-carousel information owl-theme">

              @foreach ($informasis as $informasi)
                <div class="item">
                  <div class="card">
                    <img src="{{ asset('storage/' . $informasi->path) }}" alt="{{ $informasi->judul }}" class="card-img-top img-fluid">
                    <div class="card-body p-3">
                      <h5>{{ $informasi->judul }}</h5>
                      {{-- <p>{!! $informasi->deskripsi !!}</p> --}}
                      <a href="{{ route('pkkmb.informasi', $informasi->slug) }}" class="btn btn-modify float-end">Selengkapnya</a>
                    </div>
                  </div>
                </div>
              @endforeach
              
            </div>
          @else
            <div class="card text-center">
              <div class="card-body p-3">
                <h5>Tidak ada informasi</h5>
              </div>
            </div>
          @endif
          
        </div>

        @if (!empty($informasi))
          <div id="next-slide-information" class="btn-control-information d-flex justify-content-center align-items-center">
            <i class="fa fa-chevron-right" style="margin-right: -3px;"></i>
          </div>
          <div id="prev-slide-information" class="btn-control-information d-flex justify-content-center align-items-center">
            <i class="fa fa-chevron-left" style="margin-left: -3px;"></i>
          </div>
        @endif

      </div>
    </div>
  </section>

  <section id="video" class="video d-none">
    <div class="container">
      <header class="section-header">
        <h2>Video PKKMB 2020</h2>
      </header>
    </div>
  </section>

</main>
<!-- End #main -->
@endsection