@extends('layouts.app')

@section('title')
Form Pengaduan Mahasiswa | Kartalasatya
@endsection

@section('content')
<!-- APR Section -->
<section id="apr" class="apr mt-5">

  <div class="container" data-aos="fade-up">

    <header class="section-header mt-5 fw-bold">
      <p>Form Pengaduan Mahasiswa</p>
    </header>
    <div class="container-report mt-4 m-auto">
      <form action="{{ route('kirimpengaduan') }}" method="POST">
        @csrf
            <div class="row g-2">
                <div class="col-md-8 m-auto">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="pengadu">
                        <label for="floatingInput">Nama Pengadu</label>
                    </div>
                </div>
            </div>
            <div class="col-md-8 m-auto mb-3">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kategori">
                      <option selected value="sistem">Sistem</option>
                      <option value="rektorat">Rektorat</option>
                      <option value="infrastruktur">Infrastruktur</option>
                      <option value="perkuliahan dan akademis">Perkuliahan & Akademis</option>
                      <option value="event">Event</option>
                      <option value="ormawa">Ormawa</option>
                      <option value="lainya">Lainnya</option>
                    </select>
                    <label for="floatingSelect">Kategori Pengaduan</label>
                  </div>
            </div>
            <div class="col-md-8 m-auto">
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="judul">
                  <label for="floatingInput">Judul Pengaduan</label>
              </div>
          </div>
            <div class="col-md-8 m-auto mt-4">
                <div class="form-floating">
                    <textarea class="form-control" id="floatingTextarea2" style="height: 200px;resize:none;overflow-y:scroll;" name="isi_pengaduan"></textarea>
                    <label for="floatingTextarea2">Isi Pengaduan</label>
                </div>
            </div>
            
            <div class="col-lg-10 d-flex flex-row-reverse mt-4">
              <div class="tombol-pengaduan">
                <button onclick="pengaduanTerkirim()" type="submit" class="btn btn-primary">Kirim Pengaduan</button>
                <script>
                  function pengaduanTerkirim() {
                    confirm("Apakah sudah yakin?");
                    alert("Pengaduan berhasil terkirim, Terimakasih atas perhatiannya :D");
                  }
                  </script>

              </div>
            </div>
      </form>
    </div>

  </div>

</section>
<!-- End APR Section -->
@endsection
