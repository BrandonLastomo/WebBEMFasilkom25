@extends('layouts.admin')

@section('title')
  Dashboard - Acara
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Acara</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('acara.index') }}">Acara</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Acara</h4>
              @can('Tambah_Acara')
                <div class="card-header-action">
                  <a href="{{ route('acara.create') }}" class="btn btn-primary">Tambah</a>
                </div>
              @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Acara</th>
                      <th>Tanggal</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($acaras as $acara)
                      <tr>
                        <td>{{ $loop->iteration + $acaras->firstItem() - 1 }}</td>
                        <td>{{ $acara->nama }}</td>
                        <td>{{ \Carbon\Carbon::parse($acara->tanggal)->translatedFormat('d F Y') }}</td>
                        @can('Edit_Acara')
                          <td>
                            @can('Edit_Acara')
                              <a href="{{ route('acara.edit', $acara->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Acara')
                              <a href="{{ route('acara.delete', $acara->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        @endcan
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
              {{ $acaras->links() }}
              {{-- <a href="{{ route('acara.create') }}" class="btn btn-primary">Tambah</a> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection