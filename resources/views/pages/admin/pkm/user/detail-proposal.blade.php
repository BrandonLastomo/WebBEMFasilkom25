@extends('layouts.admin')

@section('title')
  Dashboard - PKM Centre
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Detail Proposal</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('pengusul.index') }}">Pengusul</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Identitas Proposal</h4>
            </div>
            <div class="card-body">

              <div class="row">
                <div class="col">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      Judul Proposal
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ $proposal->judul }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="row mb-3">
                    <div class="col-md-2 col-12">
                      Bidang Kegiatan
                    </div>
                    <div class="col-md col-12">
                      <span class="d-lg-inline d-sm-none d-none">:</span> {{ $proposal->jenis }}
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
              <h4>Anggota</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="no">#</th>
                      <th class="nama">Nama</th>
                      <th class="npm">NPM</th>
                      <th class="tahun">Tahun Masuk</th>
                      <th>Program Studi</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($anggotas as $anggota)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $anggota->nama }}</td>
                        <td>{{ $anggota->npm }}</td>
                        <td>{{ $anggota->tahun_masuk }}</td>
                        <td>{{ $anggota->prodi }}</td>
                        <td>{{ $anggota->status }}</td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="7" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <a href="#" class="btn btn-light mt-4 float-right print"><i class="bi bi-printer-fill"></i> Print</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <script>
    $(".print").click(function (e) { 
      e.preventDefault();
      window.print();
    });
  </script>
@endsection