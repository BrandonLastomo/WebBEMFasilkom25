@extends('layouts.app')

@section('title')
Olahraga | Kabinet Kartalasatya
@endsection

@section('content')
  <!-- Content-Bem -->
  <section id="content-bem" class="content-bem mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Departemen Olahraga</p>
      </header>
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-4">
          <img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h5 class="text-center mt-4">Visi</h5>
          <p>Membuat suasana kekeluargaan di dalam olahraga FASILKOM UNSIKA semakin erat dan
            siap membangun olahraga di FASILKOM UNSIKA ke arah yang lebih baik dan maju.</p>
        </div>
        <div class="col-md-4 mt-2">
          <h5 class="text-center">Misi</h5>
          <ol>
            <li>Menjalankan proker dengan efektif demi kemajuan olahraga di FASILKOM
              UNSIKA.
            </li>
            <li>
              Siap menampung minat dan bakat mahasiswa di bidang olahraga khususnya
              FASILKOM UNSIKA.
            </li>
            <li>
              Mencetak prestasi untuk Fasilkom khususnya di bidang olahraga.
            </li>
            <li>
              Mencari bibit generasi olahraga di FASILKOM UNSIKA.
            </li>
            <li>
              Melakukan pengawasan setiap kegiatan yang telah dilakukan oleh BEM FASILKOM UNSIKA.
            </li>
          </ol>
        </div>

        <div class="row mt-5 justify-content-center text-center mt-5">

          @forelse ($pengurus as $item)
            @if (($item->jabatan == 'Koordinator Departemen') && ($item->departemen->nama == 'Olahraga') && ($item->bidang->nama == 'Minat dan Bakat'))
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
                  <p>Wafiuddin Adzhan</p>
                </div>
              </div>
            </div>
          @endforelse

          {{-- <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Koordinator Departemen</h4>
                <p>Wafiuddin Adzhan</p>
              </div>
            </div>
          </div> --}}

        </div>
        
        <div class="row justify-content-center anggota">

          <div class="row justify-content-center text-center align-text-bottom mb-5">

            @forelse ($pengurus as $item)
              @if (($item->jabatan == 'Anggota') && ($item->departemen->nama == 'Olahraga') && ($item->bidang->nama == 'Minat dan Bakat'))
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
                    <p>Beni Safangat</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>Ririn Nur Fauziyah</p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4>Anggota</h4>
                    <p>Stefanus Deo Agape</p>
                  </div>
                </div>
              </div>
            @endforelse

            {{-- <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Beni Safangat</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Ririn Nur Fauziyah</p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <h4>Anggota</h4>
                  <p>Stefanus Deo Agape</p>
                </div>
              </div>
            </div> --}}

          </div>

        </div>
      </div>
  </section>
  <!-- End Content-Bem -->
@endsection