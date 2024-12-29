@extends('layouts.admin')

@section('title')
  Dashboard - Struktur
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Struktur BEM Fasilkom 2023</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('admin.struktur') }}">Struktur</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-md-5 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Bidang</h4>
              @can('Tambah_Bidang')
                <div class="card-header-action">
                  <a href="{{ route('bidang.create') }}" class="btn btn-primary">Tambah</a>
                </div>
              @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Bidang</th>
                      @can('Edit_Bidang')
                        <th>Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($bidangs as $bidang)
                      <tr>
                        <td>{{ $loop->iteration + $bidangs->firstItem() - 1 }}</td>
                        <td>{{ $bidang->nama }}</td>
                        @can('Edit_Bidang')
                          <td>
                            @can('Edit_Bidang')
                              <a href="{{ route('bidang.edit', $bidang->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Bidang')
                              <a href="{{ route('bidang.delete', $bidang->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        @endcan
                      </tr>
                    @empty
                      <tr>
                        <td colspan="3" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer pt-1">
              {{ $bidangs->appends(['bidang' => $bidangs->currentPage(), 'departemen' => $departemens->currentPage()])->links() }}
            </div>
          </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Departemen</h4>
              @can('Tambah_Departemen')
                <div class="card-header-action">
                  <a href="{{ route('departemen.create') }}" class="btn btn-primary">Tambah</a>
                </div>
              @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Departemen</th>
                      <th>Bidang</th>
                      @can('Edit_Departemen')
                        <th>Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($departemens as $departemen)
                      <tr>
                        <td>{{ $loop->iteration + $departemens->firstItem() - 1 }}</td>
                        <td>{{ $departemen->nama }}</td>
                        <td>{{ $departemen->bidang->nama }}</td>
                        @can('Edit_Departemen')
                          <td>
                            @can('Edit_Departemen')
                              <a href="{{ route('departemen.edit', $departemen->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Departemen')
                              <a href="{{ route('departemen.delete', $departemen->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        @endcan
                      </tr>
                    @empty
                      <tr>
                        <td colspan="4" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer pt-1">
              {{ $departemens->appends(['departemen' => $departemens->currentPage(), 'bidang' => $bidangs->currentPage()])->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection