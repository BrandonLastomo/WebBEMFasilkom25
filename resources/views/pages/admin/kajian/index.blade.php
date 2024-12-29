@extends('layouts.admin')

@section('title')
  Dashboard - Info Kajian
@endsection

@section('content')

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Info Kajian</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Info Kajian</div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Info Kajian</h4>
              @can('Tambah_Apr')
                <div class="card-header-action">
                  <a href="{{ route('info-kajian.create') }}" class="btn btn-primary">Tambah</a>
                </div>
              @endcan
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Dibuat pada</th>
                      <th>Diperbarui pada</th>
                      @can('Edit_Apr')
                        <th>Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($kajians as $kajian)
                      <tr>
                        <td>{{ $loop->iteration + $kajians->firstItem() - 1 }}</td>
                        <td>
                          {{ $kajian->nama }}
                          <div class="table-links">
                            <a href="kajian/detail/{{$kajian['id']}}">Detail</a>
                          </div>
                        </td>
                        <td>{{ \Carbon\Carbon::parse($kajian->created_at)->translatedFormat('d F Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($kajian->updated_at)->translatedFormat('d F Y') }}</td>
                        @can('Edit_Apr')
                          <td>
                            @can('Edit_Apr') 
                              <a href="{{ route('info-kajian.edit', $kajian->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Apr')
                              <a href="{{ route('kajian.delete', $kajian->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
              {{ $kajians->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection