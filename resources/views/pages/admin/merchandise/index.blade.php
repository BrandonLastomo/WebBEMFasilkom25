@extends('layouts.admin')

@section('title')
  Dashboard - Merchandise
@endsection

@section('content')

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Merchandise</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Merchandise</div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Merchandise</h4>
                <div class="card-header-action">
                  <a href="{{ route('merchandise.create') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($merchandises as $merchandise)
                      <tr>
                        <td>{{ $loop->iteration + $merchandises->firstItem() - 1 }}</td>
                        <td>
                          {{ $merchandise->nama }}
                          <div class="table-links">
                            <a href="merchandise/detail/{{$merchandise['id']}}">Detail</a>
                          </div>
                        </td>
                        <td>
                            @if ($merchandise->status == 'Ready')
                                <span class="badge rounded-pill bg-success p-2 float-end border-0 text-white">Ready</span>
                            @elseif ($merchandise->status == 'Sold')
                                <span class="badge rounded-pill bg-danger p-2 float-end border-0 text-white">Sold Out</span>
                            @endif
                        </td>
                        <td>Rp{{ number_format($merchandise->harga, 0, ',', '.') }}</td>
                          <td>
                              <a href="{{ route('merchandise.edit', $merchandise->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                              <a href="{{ route('merchandise.delete', $merchandise->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
              {{ $merchandises->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection