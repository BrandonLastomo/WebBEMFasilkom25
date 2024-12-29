@extends('layouts.admin')

@section('title')
  Dashboard - PKKMB Fasilkom 2021
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tugas Kelompok</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Tugas Kelompok</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Tugas Kelompok</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Kelompok</th>
                      <th>Link Video</th>
                      <th>Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($tugasKelompok as $tugas)
                      <tr>
                        <td>{{ $loop->iteration + $tugasKelompok->firstItem() - 1 }}</td>
                        <td>{{ $tugas->nama_kelompok }}</td>
                        <td><a href="{{ $tugas->link_video }}">{{ $tugas->link_video }}</a></td>
                        <td>
                          <a href="{{ route('tugas-kelompok.detail', $tugas->id) }}" class="btn btn-info btn-action"><i class="far fa-eye"></i></a>
                        </td>
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
              {{ $tugasKelompok->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection