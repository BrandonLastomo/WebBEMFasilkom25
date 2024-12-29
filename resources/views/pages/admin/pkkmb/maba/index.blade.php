@extends('layouts.admin')

@section('title')
  Dashboard - PKKMB Fasilkom 2021
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Mahasiswa Baru</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Mahasiswa Baru</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Mahasiswa Baru</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Program Studi</th>
                      <th>Detail</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($mabas as $maba)
                      <tr>
                        <td>{{ $loop->iteration + $mabas->firstItem() - 1 }}</td>
                        <td>{{ $maba->nama }}</td>
                        <td>{{ $maba->prodi }}</td>
                        <td>
                          <a href="{{ route('maba.detail', $maba->id) }}" class="btn btn-info btn-action"><i class="far fa-eye"></i></a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                          <a href="#" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
            </div>
            <div class="card-footer pt-1">
              {{ $mabas->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection