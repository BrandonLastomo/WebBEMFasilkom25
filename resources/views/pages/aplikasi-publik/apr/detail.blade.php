@extends('layouts.app')

@section('title')
  Advocacy Progress Report | Kartalasatya
@endsection

@section('content')
<!-- APR Section -->
<section id="apr" class="apr mt-5">

  <div class="container" data-aos="fade-up">

    <header class="section-header mt-5 fw-bold">
      <p>Advocacy Progress Report</p>
    </header>

    <div class="container-report mt-4 m-auto">

      <div class="card my-4 detail-report">
            <img class="card-img-top rounded-top"
                        src="{{ asset('storage/' . $report->path) }}"
                        alt="">
        <div class="card-body px-4 mt-3">
          <div class="row mb-4">
            <div class="col-md">
              <h3>{{ $report->nama }}</h3>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-md">
              <h5>Kategori</h5>
              <p style="text-transform: uppercase;">{{ $report->kategori }}</p>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-md">
              <h5>Deskripsi</h5>
              <div class="pt-3" style="text-align: justify">{!! $report->deskripsi !!}</div>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-md">
              <h5>Status</h5>
              <ul class="progressbar">
                @if ($report->statusLabel() == 'Pending')
                  <li class="on-going pending">Pending</li>
                  <li class="process">Proses</li>
                  <li class="finish">Selesai</li>
                @elseif ($report->statusLabel() == 'Diproses')
                  <li class="done pending">Pending</li>
                  <li class="on-going process">Proses</li>
                  <li class="finish">Selesai</li>
                @elseif ($report->statusLabel() == 'Selesai')
                  <li class="done pending">Pending</li>
                  <li class="done process">Proses</li>
                  <li class="done finish">Selesai</li>
                @else
                  <li class="done pending">Pending</li>
                  <li class="done process">Proses</li>
                  <li class="rejected reject">Ditolak</li>
                @endif
              </ul>
            </div>
          </div>
          
          <div class="row mb-5">
              <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start flex-column">
                  <h5>Di buat pada</h5>
                  <p>{{ $report->created_at->format('d M Y') }}</p>
                </div>
                <div class="d-flex align-items-end flex-column">
                  <h5>Di update pada</h5>
                  <p>{{ $report->updated_at->format('d M Y') }}</p>
                </div>
              </div>
          </div>
        </div>
      </div>

      {{-- <div class="card my-4">
        <div class="card-body px-4">

          <div class="row">
            <div class="col-md">
              <h4><a href="#">Banding UKT</a></h4>
            </div>
          </div>

          <div class="row">
            <div class="col-md">
              <ul class="progressbar">
                <li class="done">Pending</li>
                <li class="done">Proses</li>
                <li class="done">Selesai</li>
              </ul>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md">
              <p></p>
            </div>
          </div>

        </div>
      </div>


      <div class="card my-4">
        <div class="card-body px-4">

          <div class="row">
            <div class="col-md">
              <h4><a href="#">Progress Gedung Fasilkom</a></h4>
            </div>
          </div>

          <div class="row">
            <div class="col-md">
              <ul class="progressbar">
                <li class="done">Pending</li>
                <li class="process">Proses</li>
                <li>Selesai</li>
              </ul>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md">
              <p></p>
            </div>
          </div>

        </div>
      </div> --}}

    </div>

  </div>

</section>
<!-- End APR Section -->
@endsection