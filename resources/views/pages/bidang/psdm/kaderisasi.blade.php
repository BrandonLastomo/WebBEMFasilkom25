@extends('layouts.app')

@section('title')
Kaderisasi | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Content-Bem -->
<section id="content-bem" class="content-bem mt-5">
  <div class="container" data-aos="fade-up">
    <header class="section-header mt-5 fw-bold">
      <p>Departemen Kaderisasi</p>
    </header>
    <div class="row justify-content-center mt-5 mb-5">
      <div class="col-md-4">
        <img src="{{ url('frontend/assets/img/foto_profile/kelompok/kaderisasi.png') }}" alt=""
          width="400px" height="230px" class="img-thumbnail">
      </div>
      <div class="col-md-4">
        <h5 class="text-center mt-4">Visi</h5>
        <p>Menumbuhkan rasa solidaritas dan jiwa kepemimpinan antar Mahasiswa/i FASILKOM
          UNSIKA demi FASILKOM UNSIKA yang lebih berkarakter.</p>
      </div>
      <div class="col-md-4 mt-2">
        <h5 class="text-center">Misi</h5>
        <ol>
          <li>Menyelenggarakan kegiatan yang bertujuan untuk membentuk karakter
            kepemimpinan Mahasiswa/i FASILKOM UNSIKA.
          </li>
          <li>
            Memberdayakan kegiatan yang bertujuan untuk menciptakan penerus
            fungsionaris BEM FASILKOM UNSIKA yang berkompeten.
          </li>
          <li>
            Memantau pelaksanaan kegiatan kaderisasi dalam ruang lingkup lingkungan
            FASILKOM UNSIKA.
          </li>
        </ol>
      </div>
    </div>

    <div class="row mt-5 justify-content-center text-center mt-5">


      <x-korbid-card jabatan="Koordinator Departemen" departemen="Kaderisasi" cls="md-5" :pengurus="$pengurus" />



      {{-- <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h4>Koordinator Departemen</h4>
            <p>Nida Tsuroya S.</p>
          </div>
        </div>
      </div> --}}
    </div>

    <div class="row justify-content-center anggota">

      <div class="row justify-content-center text-center align-text-bottom mb-5">


        <x-pengurus-card jabatan="Anggota" departemen="Kaderisasi" :pengurus="$pengurus" />



        {{-- <div class="col-md-3 mb-2">
          <div class="card">
            <div class="card-body">
              <h4>Anggota</h4>
              <p>Alia Fadilah</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Anggota</h4>
              <p>Karianah</p>
            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </div>
  </div>
</section>
<!-- End Content-Bem -->
@endsection