@extends('layouts.admin')

@section('title')
  Dashboard - PKM Centre
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Pengusul</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Pengusul</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Pengusul</h4>
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Tahun Masuk</th>
                      <th>NPM</th>
                      <th>Program Studi</th>
                      @can('Hapus_Pengusul')
                        <th>Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($users as $user)
                      @if ($user->hasRole('User'))
                        <tr>
                          <td>{{ $loop->iteration - 3 + $users->firstItem() - 1 }}</td>
                          <td>
                            {{ $user->name }}
                            <div class="table-links">
                              <a href="{{ route('pengusul.show', $user->id) }}">Detail</a>
                            </div>
                          </td>
                          <td>{{ $user->tahun_masuk }}</td>
                          <td>{{ $user->npm }}</td>
                          <td>{{ $user->prodi }}</td>
                          <td>
                            @can('Hapus_Pengusul')
                            <a href="{{ route('pengusul.delete', $user->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        </tr>
                      @endif
                    @empty
                      <tr>
                        <td colspan="6" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer pt-1">
              {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection