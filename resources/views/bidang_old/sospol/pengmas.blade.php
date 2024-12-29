@extends('layouts.app')

@section('title')
Pengabdian Masyarakat | Kabinet Kartalasatya
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
          <img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Membentuk mahasiswa Fakultas Ilmu Komputer yang peduli serta memiliki jiwa
            pengabdian yang tinggi berlandaskan tri darma perguruan tinggi.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>MMeningkatkan rasa kepekaan dan kepedulian mahasiswa
              FASILKOM UNSIKA terhadap kondisi sekitar.
            </li>
            <li>
              Menumbuhkan kesadaran mahasiswa Fasilkom Unsika untuk
              mengabdikan diri kepada masyarakat.
            </li>
          </ol>
        </div>

        <div class="row mt-5 justify-content-center text-center">

          @forelse ($pengurus as $item)
            @if (($item->jabatan == 'Koordinator Departemen') && ($item->departemen->nama == 'Pengabdian Masyarakat') && ($item->bidang->nama == 'Sosial Politik'))
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
                  <p>Faiz Ferdiansyah</p>
                </div>
              </div>
            </div>
          @endforelse

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

            @forelse ($pengurus as $item)
              @if (($item->jabatan == 'Anggota') && ($item->departemen->nama == 'Pengabdian Masyarakat') && ($item->bidang->nama == 'Sosial Politik'))
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
              </div>
            @endforelse

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