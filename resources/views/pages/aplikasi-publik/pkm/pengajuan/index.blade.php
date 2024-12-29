@extends('layouts.pkm')

@section('title')
  PKM Centre - Pengajuan Usul
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengajuan Usul</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('pkm-center') }}">Beranda</a></div>
          <div class="breadcrumb-item active">Pengajuan</div>
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
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ Auth::user()->name }}
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
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ Auth::user()->npm }}
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
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ Auth::user()->prodi }}
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
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ Auth::user()->tahun_masuk }}
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
                      <th>Judul</th>
                      <th>Bidang Kegiatan</th>
                      <th>Edit</th>
                      <th>Proposal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($proposals as $proposal)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $proposal->judul }}</td>
                        <td>{{ $proposal->jenis }}</td>
                        <td>
                          <a href="{{ route('pengajuan.edit', $proposal->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                          {{-- <a href="{{ route('pengajuan.delete', $proposal->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a> --}}
                        </td>
                        <td>
                          @if ($proposal->path)
                            <a href="{{ asset('storage/' . $proposal->path) }}" class="embed-link" target="_blank">
                              <img src="{{ asset('pkm/assets/img/icon-pdf.png') }}" alt="{{ $proposal->judul }}" class="img-fluid pdf">
                            </a>
                          @endif
                          {{-- <div id="pdf"></div> --}}
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