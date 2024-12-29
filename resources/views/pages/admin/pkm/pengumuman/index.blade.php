@extends('layouts.admin')

@section('title')
  Dashboard - PKM Centre
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengumuman</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('pengumuman.index') }}">Pengumuman</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Pengumuman</h4>
              @can('Tambah_Pengumuman')
                <div class="card-header-action">
                  <a href="{{ route('pengumuman.create') }}" class="btn btn-primary">Tambah</a>
                </div>
              @endcan
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th width="10%">#</th>
                      <th width="20%">Judul</th>
                      <th width="40%">Konten</th>
                      <th width="20%">Tanggal</th>
                      @can('Edit_Pengumuman')
                        <th width="10%">Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($pengumumans as $pengumuman)
                      <tr>
                        <td>{{ $loop->iteration + $pengumumans->firstItem() - 1 }}</td>
                        <td>
                          {{ $pengumuman->judul }}
                          <div class="table-links">
                            <a href="#">Detail</a>
                          </div>
                        </td>
                        <td>{!! Str::limit($pengumuman->konten, 170) !!}</td>
                        <td>{{ date('d M Y', strtotime($pengumuman->tanggal)) }}</td>
                        @can('Edit_Pengumuman')
                          <td>
                            @can('Edit_Pengumuman') 
                              <a href="{{ route('pengumuman.edit', $pengumuman->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Pengumuman')
                              <a href="{{ route('pengumuman.delete', $pengumuman->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
              {{ $pengumumans->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection