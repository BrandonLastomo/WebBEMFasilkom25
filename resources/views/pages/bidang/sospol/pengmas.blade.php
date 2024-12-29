@extends('layouts.app')

@section('title')
Pengabdian Masyarakat | Kabinet {{env('KABINET');}}
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Pengabdian Masyarakat</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/pengmas.png') }}" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Membentuk mahasiswa/i FASILKOM UNSIKA yang peduli serta memiliki jiwa
            pengabdian yang tinggi berlandaskan tri darma perguruan tinggi.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Meningkatkan rasa kepekaan dan kepedulian mahasiswa/i
              FASILKOM UNSIKA terhadap kondisi sekitar.
            </li>
            <li>
              Menumbuhkan kesadaran mahasiswa/i FASILKOM UNSIKA untuk
              mengabdikan diri kepada masyarakat.
            </li>
          </ol>
        </div>

        <div class="row mt-5 justify-content-center text-center">

          
        <x-korbid-card jabatan="Koordinator Departemen" departemen="Pengabdian Masyarakat" cls="md-5" :pengurus="$pengurus" />
            
         

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Koordinator Departemen</h4>
                <p>Faiz Ferdiansyah</p>
              </div>
            </div>
          </div> --}}

        </div>

        <div class="row justify-content-center anggota">

          <div class="row justify-content-center text-center align-text-bottom mt-5 mb-5">

              
          <x-pengurus-card jabatan="Anggota" departemen="Pengabdian Masyarakat" :pengurus="$pengurus" />

           

            {{-- <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Fitri Novianti</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Mau'idzoh Hasanah</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Muhammad Iqbal Mubarok</p>
                </div>
              </div>
            </div> --}}

          </div>

        </div>
      </div>
  </section>
  <!-- End Content-Bem -->
@endsection