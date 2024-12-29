@extends('layouts.admin')

@section('title')
Dashboard - Informasi PKKMB Fasilkom 2021
@endsection

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Informasi PKKMB</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active">Informasi PKKMB</div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header border-0">
            <h4>Daftar Informasi PKKMB</h4>
            <div class="card-header-action">
              <a href="{{ route('informasi.create') }}" class="btn btn-primary">Tambah</a>
            </div>
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
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($informasis as $informasi)
                  <tr>
                    <td>{{ $loop->iteration + $informasis->firstItem() - 1 }}</td>
                    <td>
                      {{ $informasi->judul }}
                      <div class="table-links">
                        <a href="#">Detail</a>
                      </div>
                    </td>
                    <td>
                      @empty($informasi->path)
                        Tidak ada gambar
                      @else
                        <img src="{{ asset('storage/' . $informasi->path) }}" alt="{{ $informasi->judul }}" class="img-fluid my-2" width="100">
                      @endempty
                    </td>
                    <td>
                      @empty($informasi->deskripsi)
                        Tidak ada deskripsi
                      @else
                        {!! Str::limit($informasi->deskripsi, 170) !!}
                      @endempty
                    </td>
                    <td>
                      <a href="{{ route('informasi.edit', $informasi->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                      <a href="{{ route('informasi.delete', $informasi->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                    </td>
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
            {{ $informasis->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection