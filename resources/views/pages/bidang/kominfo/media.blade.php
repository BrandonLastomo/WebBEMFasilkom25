@extends('layouts.app')

@section('title')
Media | Kabinet {{env('KABINET');}}
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Media</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/media.png') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Menjadikan departemen media sebagai sarana penyampaian informasi dan komunikasi
            serta menambah eksistensi BEM FASILKOM UNSIKA.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Sebagai alat untuk menampung berbagai informasi dari seluruh mahasiswa Unsika,
              khususnya mahasiswa FASILKOM UNSIKA.
            </li>
            <li>
              Mengolah dan memfilter berbagai informasi yang didapat agar menjadi suatu
              informasi yang bermanfaat, berkualitas, dan dapat dipertanggung jawabkan untuk
              semua
            </li>
            <li>
              Memaksimalkan penyebaran dan publikasi informasi yang bermanfaat dan
              informasi tersebut bisa dipertanggung jawabkan kebenarannya.
            </li>
            <li>Tidak menjadi sarana media yang passive dan kaku akan perkembangan informasi.</li>
          </ol>
        </div>
      </div>

      <div class="row justify-content-center text-center mt-5">
      <x-korbid-card jabatan="Koordinator Departemen" departemen="Media" cls="md-5" :pengurus="$pengurus" />


        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Departemen</h4>
              <p>Lorenzo Tunggul I. S.</p>
            </div>
          </div>
        </div> --}}

      </div>
      
      <div class="row justify-content-center anggota">

        <div class="row justify-content-center text-center align-text-bottom mb-5">
            
        <x-pengurus-card jabatan="Anggota" departemen="Media" :pengurus="$pengurus" />

            
          

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Modesta Rika Pertiwi</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Rizkiansyah</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Syahrul Chotamy</p>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </div>
  </section>
  <!-- End Content-Bem -->
@endsection