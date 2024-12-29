@extends('layouts.app')

@section('title')
Bisnis dan Kemitraan | Kabinet Kartalasatya
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Bisnis dan Kemitraan</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <!--<img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">-->
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Menjadikan Departemen Bisnis dan Kemitraan BEM FASILKOM UNSIKA sebagai sumber
            finansial mandiri yang utama dengan berdasarkan pada aspek kebermanfaatan dan
            kemitraan serta kekeluargaan.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Membangun internal BEM FASILKOM UNSIKA yang mengutamakan kekeluargaan.
            </li>
            <li>
              Menciptakan SDM yang berguna serta mandiri di bidang finansial.
            </li>
            <li>
              Meningkatkan kualitas SDM yang dapat berpikir kreatif inovatif dalam hal dunia bisnis.
            </li>
            <li>Menjalin kerja sama dengan lembaga atau instansi terkait sehingga dapat memberikan
              timbal balik yang bersikap positif bagi Departemen Bisnis dan Kemitraan yang
              bermanfaat bagi sesama</li>
            <li>Menjadikan program kerja Departemen Bisnis dan Kemitraan yang bermanfaat bagi
              sesama.</li>
          </ol>
        </div>

        <div class="row mt-5 justify-content-center text-center mt-5">

          @forelse ($pengurus as $item)
            @if (($item->jabatan == 'Koordinator Departemen') && ($item->departemen->nama == 'Bisnis dan Kemitraan') && ($item->bidang->nama == 'Komunikasi dan Informasi'))
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
                  <p>Rizky Aditya</p>
                </div>
              </div>
            </div>
          @endforelse

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Koordinator Departemen</h4>
                <p>Rizky Aditya</p>
              </div>
            </div>
          </div> --}}

        </div>

        <div class="row justify-content-center anggota">

          <div class="row justify-content-center text-center align-text-bottom mb-5">

            @forelse ($pengurus as $item)
              @if (($item->jabatan == 'Anggota') && ($item->departemen->nama == 'Bisnis dan Kemitraan') && ($item->bidang->nama == 'Komunikasi dan Informasi'))
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
                    <p>Fauzan Gani Nurmaizal</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>Mohammad Bukhori Pratama</p>
                  </div>
                </div>
              </div>
            @endforelse

            {{-- <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Fauzan Gani Nurmaizal</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Mohammad Bukhori Pratama</p>
                </div>
              </div>
            </div> --}}

          </div>
        </div>
      </div>
  </section>
  <!-- End Content-Bem -->
@endsection