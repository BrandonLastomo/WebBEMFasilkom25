@extends('layouts.app')

@section('title')
Seni Budaya | Kabinet {{env('KABINET');}}
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Seni Budaya</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/senbud.png')}}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Mengembangkan serta mewadahi minat dan bakat mahasiswa/i FASILKOM UNSIKA
            dalam bidang seni dan budaya guna meningkatkan rasa cinta dan kepedulian terhadap
            seni dan budaya yang ada di Indonesia.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Mengadakan pelatihan kesenian secara rutin sehingga mahasiswa/i Fasilkom
              UNSIKA bisa mahir pada setiap bidangnya dan bisa saling berbagi ilmu yang telah
              didapatkannya, serta menjaga silahturahmi antar mahasiswa/i.
            </li>
            <li>
              Mengembangkan minat dan bakat mahasiswa/i FASILKOM UNSIKA  sehingga mampu
              berkompetisi dengan pihak internal maupun eksternal.
            </li>
            <li>
              Meningkatkan kemampuan mahasiswa/i FASILKOM UNSIKA di bidang seni dan
              budaya dalam  setiap bidangnya masing-masing.
            </li>
          </ol>
        </div>
      </div>

      <div class="row mt-5 justify-content-center text-center mt-5">

     
      <x-korbid-card jabatan="Koordinator Departemen" departemen="Seni Budaya" cls="md-5" :pengurus="$pengurus" />

    

        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Departemen</h4>
              <p>Fatma Eka Zulfiakhoir</p>
            </div>
          </div>
        </div> --}}

      </div>

      <div class="row justify-content-center anggota">

        <div class="row justify-content-center text-center align-text-bottom mb-5">

        <x-pengurus-card jabatan="Anggota" departemen="Seni Budaya" :pengurus="$pengurus" />


          

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Giovanny Maria Rosari Dwi C.A</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Salim Puad</p>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </div>
  </section>
  <!-- End Content-Bem -->
@endsection