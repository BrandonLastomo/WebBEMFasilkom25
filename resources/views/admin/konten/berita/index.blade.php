@extends('layouts.admin')

@section('title')
  Dashboard - Berita
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Berita</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('berita.index') }}">Berita</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Berita</h4>
              @can('Tambah_Berita')
                <div class="card-header-action">
                  <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah</a>
                </div>
              @endcan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th width="10%">#</th>
                      <th width="20%">Judul</th>
                      <th width="40%">Berita</th>
                      <th width="20%">Tanggal</th>
                      @can('Edit_Berita')
                        <th width="10%">Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($beritas as $berita)
                      <tr>
                        <td>{{ $loop->iteration + $beritas->firstItem() - 1 }}</td>
                        <td>
                          {{ $berita->judul }}
                          <div class="table-links">
                            <a href="#">Detail</a>
                          </div>
                        </td>
                        <td>{!! Str::limit($berita->konten, 170) !!}</td>
                        <td>{{ date('d M Y', strtotime($berita->tanggal)) }}</td>
                        @can('Edit_Berita')
                          <td>
                            @can('Edit_Berita') 
                              <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Berita')
                              <a href="{{ route('berita.delete', $berita->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
              {{ $beritas->links() }}
              {{-- <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah</a> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection