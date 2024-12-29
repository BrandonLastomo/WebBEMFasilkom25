@extends('layouts.admin')

@section('title')
Dashboard - Karya Mahasiswa
@endsection

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Karya Mahasiswa</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active">Karya Mahasiswa</div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header border-0">
            <h4>Daftar Karya Mahasiswa</h4>
            @can('Tambah_Karya')
            <div class="card-header-action">
              <a href="{{ route('karya.create') }}" class="btn btn-primary">Tambah</a>
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
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Pembuat</th>
                    <th>Kelas</th>
                    <th>Program Studi</th>
                    @can('Edit_Karya')
                    <th>Aksi</th>
                    @endcan
                  </tr>
                </thead>
                <tbody>
                  @forelse ($karyas as $karya)
                  <tr>
                    <td>{{ $loop->iteration + $karyas->firstItem() - 1 }}</td>
                    <td>
                      {{ $karya->judul }}
                      <div class="table-links">
                        <a href="#">Detail</a>
                      </div>
                    </td>
                    <td><img src="{{ asset('storage/' . $karya->path) }}" alt="{{ $karya->judul }}" class="img-fluid my-2" width="100"></td>
                    <td>{!! Str::limit($karya->deskripsi, 170) !!}</td>
                    <td>{{ $karya->nama }}</td>
                    <td>{{ $karya->kelas }}</td>
                    <td>{{ $karya->prodi }}</td>
                    @can('Edit_Karya')
                    <td>
                      @can('Edit_Karya')
                      <a href="{{ route('karya.edit', $karya->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                      @endcan

                      @can('Hapus_Karya')
                      <a href="{{ route('karya.delete', $karya->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
            {{ $karyas->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection