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
      
      <div class="card my-4 py-2">
        <div class="card-body px-4">

          <div class="row">
            <div class="col-md">
              <h4><a href="#">Info Pengambilan Almamater Mahasiswa/i 2020</a></h4>
              <span class="badge rounded-pill bg-info p-2">Pending</span>
            </div>
          </div>

          {{-- <div class="row">
            <div class="col-md">
              <ul class="progressbar">
                <li class="done">Pending</li>
                <li class="done">Proses</li>
                <li class="done">Selesai</li>
              </ul>
            </div>
          </div> --}}

          <div class="row mt-3">
            <div class="col-md">
              <h5>Deskripsi</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, architecto.</p>
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