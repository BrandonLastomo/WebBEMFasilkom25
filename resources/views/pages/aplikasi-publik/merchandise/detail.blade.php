@extends('layouts.app')

@section('title')
  Merchandise | Kartalasatya
@endsection

@section('content')
<!-- APR Section -->
<section id="apr" class="apr mt-5">

  <div class="container" data-aos="fade-up">

    <header class="section-header mt-5 fw-bold">
      <p>Merchandise</p>
    </header>

    <div class="container-report mt-4 m-auto">

      <div class="card my-4 detail-report">
            <img class="card-img-top rounded-top"
                        src="{{ asset('storage/' . $merchandise->path) }}"
                        alt="{{ $merchandise->nama }}">
        <div class="card-body px-4 mt-3">
          <div class="row mb-4">
            <div class="col-md">
              <h3>{{ $merchandise->nama }}</h3>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-md">
              <h5>Deskripsi</h5>
              <div class="pt-3" style="text-align: justify">{!! $merchandise->deskripsi !!}</div>
            </div>
          </div>
          
          <div class="row mb-5">
              <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start flex-column">
                  <h5>Status</h5>
                 @if ($merchandise->status == 'Ready')
                    <span class="badge rounded-pill bg-success p-2 float-end border-0">Ready</span>
                @elseif ($merchandise->status == 'Sold')
                    <span class="badge rounded-pill bg-danger p-2 float-end border-0">Sold Out</span>
                @endif
                </div>
                <div class="d-flex align-items-end flex-column">
                  <h5>Harga</h5>
                  <p>Rp{{ number_format($merchandise->harga, 0, ',', '.') }}</p>
                </div>
              </div>
          </div>
          
        </div>
      </div>

    </div>

  </div>

</section>
<!-- End APR Section -->
@endsection