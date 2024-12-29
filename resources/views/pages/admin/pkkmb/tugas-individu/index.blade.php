@extends('layouts.admin')

@section('title')
  Dashboard - PKKMB Fasilkom 2021
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tugas Individu</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Tugas Individu</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Tugas Individu</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Nama Kelompok</th>
                      <th>Program Studi</th>
                      <th>Link Video</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($tugasIndividu as $tugas)
                      <tr>
                        <td>{{ $loop->iteration + $tugasIndividu->firstItem() - 1 }}</td>
                        <td>{{ $tugas->nama_lengkap }}</td>
                        <td>{{ $tugas->nama_kelompok_individu }}</td>
                        <td>{{ $tugas->prodi }}</td>
                        <td><a href="{{ $tugas->link_video_individu }}">{{ $tugas->link_video_individu }}</a></td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="6" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer pt-1">
              {{ $tugasIndividu->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection