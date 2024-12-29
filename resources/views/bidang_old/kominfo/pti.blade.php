@extends('layouts.app')

@section('title')
Pengembangan Teknologi dan Informasi | Kabinet Kartalasatya
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Pengembangan Teknologi Informasi</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Mewujudkan BEM FASILKOM UNSIKA yang memaksimalkan teknologi informasi serta
            memberikan manfaat untuk masyarakat umum, khususnya masyarakat FASILKOM
            UNSIKA.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Memaksimalkan kinerja BEM FASILKOM UNSIKA dengan menjalin hubungan
              antar departemen yang ada di BEM FASILKOM UNSIKA.
            </li>
            <li>
              Menciptakan SDM yang bermutu serta dapat berpikir kreatif dan inovatif sehingga
              dapat bersaing dalam dunia industri khususnya industri IT.
            </li>
            <li>
              Melakukan maintenance atau perawatan pada sistem yang telah dibuat agar tetap
              aktual, efektif dan nyaman digunakan oleh masyarakat umum, khususnya
              masyarakat FASILKOM UNSIKA
            </li>
          </ol>
        </div>
      </div>

      <div class="row mt-5 justify-content-center text-center mt-5">

        @forelse ($pengurus as $item)
          @if (($item->jabatan == 'Koordinator Departemen') && ($item->departemen->nama == 'Pengembangan Teknologi Informasi') && ($item->bidang->nama == 'Komunikasi dan Informasi'))
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
                <p>Rona Febriana</p>
              </div>
            </div>
          </div>
        @endforelse

        {{-- <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h4>Koordinator Departemen</h4>
              <p>Rona Febriana</p>
            </div>
          </div>
        </div> --}}

      </div>

      <div class="row justify-content-center anggota">

        <div class="row justify-content-center text-center align-text-bottom mb-5">

          @forelse ($pengurus as $item)
            @if (($item->jabatan == 'Anggota') && ($item->departemen->nama == 'Pengembangan Teknologi Informasi') && ($item->bidang->nama == 'Komunikasi dan Informasi'))
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
                  <p>Irya Muhammad Riyadhi</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Mohammad Bijantium Sinatria</p>
                </div>
              </div>
            </div>
          @endforelse

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Irya Muhammad Riyadhi</p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Anggota</h4>
                <p>Mohammad Bijantium Sinatria</p>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </div>
  </section>
  <!-- End Content-Bem -->
@endsection