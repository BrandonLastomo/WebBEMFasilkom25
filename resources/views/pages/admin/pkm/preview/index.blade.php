@extends('layouts.admin')

@section('title')
  Dashboard - PKM Centre
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Proposal Tahun Sebelumnya</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Proposal Tahun Sebelumnya</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Proposal</h4>
              @can('Tambah_Preview')
                <div class="card-header-action">
                  <a href="{{ route('preview.create') }}" class="btn btn-primary">Tambah</a>
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
                      <th width="20%">Judul</th>
                      <th width="40%">Bidang</th>
                      <th width="15%">Tim</th>
                      <th width="10%">File</th>
                      @can('Edit_Preview')
                        <th width="10%">Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($previews as $preview)
                      <tr>
                        <td>{{ $loop->iteration + $previews->firstItem() - 1 }}</td>
                        <td>{{ $preview->judul }}</td>
                        <td>{{ $preview->bidang }}</td>
                        <td>{{ $preview->tim }}</td>
                        <td>
                          @if ($preview->path)
                            <a href="{{ asset('storage/' . $preview->path) }}" class="embed-link" target="_blank">
                              <img src="{{ asset('pkm/assets/img/icon-pdf.png') }}" alt="{{ $preview->judul }}" class="img-fluid pdf">
                            </a>
                          @endif
                        </td>
                        @can('Edit_Preview')
                          <td>
                            @can('Edit_Preview') 
                              <a href="{{ route('preview.edit', $preview->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Preview')
                              <a href="{{ route('preview.delete', $preview->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
              {{ $previews->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection