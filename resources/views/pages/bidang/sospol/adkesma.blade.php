@extends('layouts.app')

@section('title')
Advokasi Kesejahteraan Mahasiswa | Kabinet {{env('KABINET');}}
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Advokasi Kesejahteraan Mahasiswa</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/adkesma.png') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Terwujudnya ADKESMA BEM FASILKOM UNSIKA yang aktif, terbuka, dan bersinergi
            dengan setiap elemen yang ada di FASILKOM UNSIKA.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Menampung segala bentuk permasalahan mahasiswa/i 
              FASILKOM UNSIKA secara maksimal.
            </li>
            <li>
              Berusaha menyelesaikan setiap permasalahan yang telah disampaikan oleh
              mahasiswa/i FASILKOM UNSIKA.
            </li>
            <li>
              Memfasilitasi mahasiswa/i FASILKOM UNSIKA dalam menyampaikan
              semua permasalahannya.
            </li>
          </ol>
        </div>
      </div>

      <div class="row mt-5 justify-content-center text-center">

        
      <x-korbid-card jabatan="Koordinator Departemen" departemen="Advokasi Kesejahteraan Mahasiswa" cls="md-5" :pengurus="$pengurus" />

       

        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Departemen</h4>
              <p>Saluri Alam</p>
            </div>
          </div>
        </div> --}}

      </div>

      <div class="row justify-content-center anggota">

        <div class="row justify-content-center text-center align-text-bottom mt-5 mb-5">

            
        <x-pengurus-card jabatan="Anggota" departemen="Advokasi Kesejahteraan Mahasiswa" :pengurus="$pengurus" />

          
          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Sultan Tira Al Farizi</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Zidan Faizi</p>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </div>
  </section>
  <!-- End Content-Bem -->
@endsection