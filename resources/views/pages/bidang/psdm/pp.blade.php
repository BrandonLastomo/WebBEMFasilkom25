@extends('layouts.app')

@section('title')
Pengembangan dan Pengawasan | Kabinet {{env('KABINET');}}
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container " data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Pengembangan dan Pengawasan</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/pp.png') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Menjadikan departemen pengembangan dan pengawasan sebagai wadah pembentukan karakter pengurus
            yang fungsionaris dan profesionalis demi terciptanya Pengurus BEM FASILKOM UNSIKA yang sesuai dengan
            nilai dan budaya yang dimiliki.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Meningkatkan potensi (soft skill dan hard skill) interpersonal fugsionaris BEM FASILKOM
              UNSIKA.
            </li>
            <li>
              Meningkatkan motivasi seluruh pengurus BEM FASILKOM UNSIKA.
            </li>
            <li>
              Membentuk karakter fungsionaris BEM FASILKOM UNSIKA yang sesuai dengan nilai dan budaya
              yang dimiliki.
            </li>
            <li>
              Melakukan pengawasan dan evaluasi terhadap kinerja internal BEM FASILKOM Unsika.
            </li>
            <li>
              Melakukan pengawasan setiap kegiatan yang telah dilakukan oleh BEM FASILKOM UNSIKA.
            </li>
            <li>
              Memberikan masukan kepada ketua atas hasil pengawasan serta evaluasi kegiatan dan kinerja
              internal BEM FASILKOM UNSIKA
            </li>
          </ol>
        </div>
      </div>

      <div class="row mt-5 justify-content-center text-center mt-5">

        
      <x-korbid-card jabatan="Koordinator Departemen" departemen="Pengembangan dan Pengawasan" cls="md-5" :pengurus="$pengurus" />

        

        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Departemen</h4>
              <p>Dwi Suci Anggraeni</p>
            </div>
          </div>
        </div> --}}
      {{--  </div>  --}}

      <div class="row justify-content-center anggota">

        <div class="row justify-content-center text-center align-text-bottom mb-5">

          
        <x-pengurus-card jabatan="Anggota" departemen="Pengembangan dan Pengawasan" :pengurus="$pengurus" />
            
     

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Syafina Haviyola</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Syams Sulaeman</p>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </div>
  </section>
  <!-- End Content-Bem -->
@endsection