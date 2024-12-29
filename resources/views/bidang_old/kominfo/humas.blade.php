@extends('layouts.app')

@section('title')
Hubungan Masyarakat | Kabinet Kartalasatya
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Hubungan Masyarakat</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Menjadikan Departemen Humas sebagai pusat pelayanan komunikasi dan menjadi
            wadah pertukaran informasi publik dalam membangun koneksi antar relasi yang
            terstruktur dan proposional dalam lingkup internal maupun eksternal.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Mengemban hubungan yang dinamis dan harmonis dengan lembaga
              departemen/non-departemen.
            </li>
            <li>
              Membangun jaringan dan partisipasi pihak-pihak terkait dengan baik dari internal
              maupun eksternal.
            </li>
            <li>
              Meningkatkan kualitas layanan informasi publik melalui ketersediaan dan
              kemudahan mengakses informasi secara adil, merata, serta dapat dipertanggung
              jawabkan.
            </li>
          </ol>
        </div>
      </div>

      <div class="row mt-5 justify-content-center text-center mt-5">

        @forelse ($pengurus as $item)
          @if (($item->jabatan == 'Koordinator Departemen') && ($item->departemen->nama == 'Hubungan Masyarakat') && ($item->bidang->nama == 'Komunikasi dan Informasi'))
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Koordinator Departemen</h4>
                  <p>{{ $item->nama }}</p>
                </div>
              </div>
            </div>
          @endif
        @empty
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Koordinator Departemen</h4>
                <p>Bintang Zulfikar Ramadhan</p>
              </div>
            </div>
          </div>
        @endforelse

        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Departemen</h4>
              <p>Bintang Zulfikar Ramadhan</p>
            </div>
          </div>
        </div> --}}

      </div>

      <div class="row justify-content-center anggota">

        <div class="row justify-content-center text-center align-text-bottom mb-5">

          @forelse ($pengurus as $item)
            @if (($item->jabatan == 'Anggota') && ($item->departemen->nama == 'Hubungan Masyarakat') && ($item->bidang->nama == 'Komunikasi dan Informasi'))
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>{{ $item->nama }}</p>
                  </div>
                </div>
              </div>
            @endif
          @empty
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>M. Rendi Bagus Priawan</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Reynold Julian Tamba</p>
                </div>
              </div>
            </div>
          @endforelse

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>M. Rendi Bagus Priawan</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Reynold Julian Tamba</p>
              </div>
            </div>
          </div> --}}

        </div>
      </div>
    </div>
  </section>
  <!-- End Content-Bem -->
@endsection