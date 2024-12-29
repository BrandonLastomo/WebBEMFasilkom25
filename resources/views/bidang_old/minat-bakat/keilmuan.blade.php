@extends('layouts.app')

@section('title')
Keilmuan | Kabinet Kartalasatya
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Keilmuan</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Membangun dan memaksimalkan nuansa pendidikan FASILKOM UNSIKA yang
            inovatif, kreatif, dan berkesinambungan.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>.Membuat program kerja yang berdasarkan penelitian dan pengabdian.
            </li>
            <li>
              Membuat program kerja kreatif yang berkesinambungan.
            </li>
            <li>
              Meningkatkan dan memaksimalkan minat dan bakat mahasiswa untuk
              berkarya inovatif.
            </li>
          </ol>
        </div>

        <div class="row mt-5 justify-content-center text-center mt-5">

          @forelse ($pengurus as $item)
            @if (($item->jabatan == 'Koordinator Departemen') && ($item->departemen->nama == 'Keilmuan') && ($item->bidang->nama == 'Minat dan Bakat'))
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
                  <p>Rafik Kusumah</p>
                </div>
              </div>
            </div>
          @endforelse

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Koordinator Departemen</h4>
                <p>Rafik Kusumah</p>
              </div>
            </div>
          </div> --}}

        </div>

        <div class="row justify-content-center anggota">

          <div class="row justify-content-center text-center align-text-bottom mb-5">

            @forelse ($pengurus as $item)
              @if (($item->jabatan == 'Anggota') && ($item->departemen->nama == 'Keilmuan') && ($item->bidang->nama == 'Minat dan Bakat'))
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
                    <p>Dimas Fathu Ramdhani</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>Fenny Rahmayani</p>
                  </div>
                </div>
              </div>
            @endforelse

            {{-- <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Dimas Fathu Ramdhani</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Fenny Rahmayani</p>
                </div>
              </div>
            </div> --}}

          </div>
        </div>
      </div>
  </section>
  <!-- End Content-Bem -->
@endsection