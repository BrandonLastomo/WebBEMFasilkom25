@extends('layouts.admin')

@section('title')
  Dashboard - PKM Centre
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengusul</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('pengusul.index') }}">Pengusul</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Identitas Pengusul</h4>
            </div>
            <div class="card-body">

              <div class="row">
                <div class="col">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      Nama Pengusul
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ $user->name }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      NPM
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ $user->npm }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      Program Studi
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ $user->prodi }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      Tahun Masuk
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ $user->tahun_masuk }}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Daftar Proposal</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th width="10%">No.</th>
                      <th width="30%">Judul</th>
                      <th>Bidang Kegiatan</th>
                      <th>Proposal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($proposals as $proposal)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                          {{ $proposal->judul }}
                          <div class="table-links">
                            <a href="{{ route('pengusul.detail', $proposal->id) }}">Detail</a>
                          </div>
                        </td>
                        <td>{{ $proposal->jenis }}</td>
                        <td>
                          @if ($proposal->path)
                            <a href="{{ asset('storage/' . $proposal->path) }}" class="embed-link" target="_blank">
                              <img src="{{ asset('pkm/assets/img/icon-pdf.png') }}" alt="{{ $proposal->judul }}" class="img-fluid pdf">
                            </a>
                          @endif
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="5" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              {{-- <a href="{{ route('pengajuan.create') }}" class="btn btn-primary mt-3 float-right">Tambah Anggota</a> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>

    var clickHandler = function (e){

      e.preventDefault();

      var pdfURL = $('.embed-link').getAttribute("href");

      var options = {
        pdfOpenParams: {
          navpanes: 0,
          toolbar: 0,
          statusbar: 0,
          view: "FitV"
        }
      };

      var myPDF = PDFObject.embed(pdfURL, "#pdf", options);

      var el = document.querySelector("#results");
      el.setAttribute("class", (myPDF) ? "success" : "fail");
      el.innerHTML = (myPDF) ? "PDFObject successfully embedded '" + pdfURL + "'!" : "Uh-oh, the embed didn't work.";

    };

    // var a = document.querySelectorAll(".embed-link");

    // for(var i=0; i < a.length; i++){
    //   a[i].addEventListener("click", clickHandler);
    // }
  </script>
@endsection