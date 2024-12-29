@extends('layouts.admin')

@section('title')
  Dashboard - Fasilkom Cup
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Fasilkom Cup</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Fasilkom Cup</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Turnamen</h4>
              @can('Tambah_Fcup')
                <div class="card-header-action">
                  <a href="{{ route('fcup.create') }}" class="btn btn-primary">Tambah</a>
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
                      <th>Logo</th>
                      <th>Nama Turnamen</th>
                      <th>Deskripsi</th>
                      <th>Detail</th>
                      @can('Edit_Fcup')
                        <th>Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($turnamens as $turnamen)
                      <tr>
                        <td>{{ $loop->iteration + $turnamens->firstItem() - 1 }}</td>
                        <td><img src="{{ asset('storage/' . $turnamen->path) }}" alt="{{ $turnamen->nama }}" class="img-fluid my-2" width="50"></td>
                        <td>{{ $turnamen->nama }}</td>
                        <td>{!! Str::limit($turnamen->deskripsi, 100) !!}</td>
                        <td>
                          <a href="{{ route('fcup.show', $turnamen->slug) }}" class="btn btn-info btn-action"><i class="far fa-eye"></i></a>
                        </td>
                        @can('Edit_Fcup')
                          <td>
                            @can('Edit_Fcup') 
                              <a href="{{ route('fcup.edit', $turnamen->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Fcup')
                              <a href="{{ route('fcup.delete', $turnamen->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        @endcan
                      </tr>
                    @empty
                      <tr>
                        <td colspan="8" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                    {{-- <tr>
                      <td colspan="8" align="center">Tidak ada data</td>
                    </tr> --}}
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer pt-1">
              {{-- {{ $turnamens->links() }} --}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection