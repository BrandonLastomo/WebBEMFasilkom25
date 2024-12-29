@extends('layouts.admin')

@section('title')
Dashboard - Rundown PKKMB Fasilkom 2021
@endsection

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Rundown</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active">Rundown</div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header border-0">
            <h4>Daftar Rundown</h4>
            <div class="card-header-action">
              <a href="{{ route('rundown.create') }}" class="btn btn-primary">Tambah</a>
            </div>
          </div>
          <div class="card-body">
            @include('includes.admin.flash')
            <div class="table-responsive">
              <table class="table table-bordered table-striped mb-0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Jam</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($rundowns as $rundown)
                  <tr>
                    <td>{{ $loop->iteration + $rundowns->firstItem() - 1 }}</td>
                    <td>{{ $rundown->jam }}</td>
                    <td>
                      @empty($rundown->deskripsi)
                        Tidak ada deskripsi
                      @else
                        {!! Str::limit($rundown->deskripsi, 170) !!}
                      @endempty
                    </td>
                    <td>
                      <a href="{{ route('rundown.edit', $rundown->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                      <a href="{{ route('rundown.delete', $rundown->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
            {{ $rundowns->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection