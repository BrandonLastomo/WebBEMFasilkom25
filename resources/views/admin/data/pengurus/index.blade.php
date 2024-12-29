@extends('layouts.admin')

@section('title')
  Dashboard - Pengurus
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengurus BEM Fasilkom 2023</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('pengurus.index') }}">Pengurus</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Pengurus</h4>
              @can('Tambah_Pengurus')
                <div class="card-header-action">
                  <a href="{{ route('pengurus.create') }}" class="btn btn-primary">Tambah</a>
                </div>
              @endcan
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th width="5%">#</th>
                      <th width="15%">Nama Pengurus</th>
                      <th width="13%">Jabatan</th>
                      <th width="10%">Bidang</th>
                      <th width="15%">Departemen</th>
                      <th width="15%">NPM</th>
                      <th width="12%">No. Telepon</th>
                      @can('Edit_Pengurus')
                        <th width="10%">Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($pengurus as $anggota)
                      <tr>
                        <td>{{ $loop->iteration + $pengurus->firstItem() - 1 }}</td>
                        <td>{{ $anggota->nama }}</td>
                        <td>{{ $anggota->jabatan }}</td>
                        <td>{{ (empty($anggota->bidang->nama) ? '-' : $anggota->bidang->nama) }}</td>
                        <td>{{ (empty($anggota->departemen->nama) ? '-' : $anggota->departemen->nama) }}</td>
                        <td>{{ $anggota->npm }}</td>
                        <td>{{ $anggota->no_hp }}</td>
                        @can('Edit_Pengurus')
                          <td>
                            @can('Edit_Pengurus')
                              <a href="{{ route('pengurus.edit', $anggota->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Pengurus')
                              <a href="{{ route('pengurus.delete', $anggota->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        @endcan
                      </tr>
                    @empty
                      <tr>
                        <td colspan="8" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer pt-1">
              {{ $pengurus->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection