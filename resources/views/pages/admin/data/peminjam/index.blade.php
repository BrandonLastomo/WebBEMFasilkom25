@extends('layouts.admin')

@section('title')
  Dashboard - Peminjam
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen Peminjam</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ url('admin/users') }}">Manajemen Peminjam</a></div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Daftar Peminjam</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Manajemen Akun Peminjam</h4>
                @can('Tambah_User')
                  <div class="card-header-action">
                    <a href="{{ route('peminjam.create') }}" class="btn btn-primary">Tambah</a>
                  </div>
                @endcan
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-md">
                    <div class="row g-3 align-items-center mb-3">
                      <form action="{{route('peminjam.index') }}" method="GET">
                          <div class="col-auto input-group" style="width: 400px">
                          <div class="input-group">
                            <input class="form-control border-end-0 border" name="searchpeminjam" type="search" placeholder="Search Nama or Prodi" id="example-search-input" />
                            <span class="input-group-append">
                              <button class="btn btn-outline-secondary border-left-0 border"type="search">
                                <i class="fa fa-search"></i>
                              </button>
                            </span>
                          </div>
                          </div>
                          </div>
                        </form>
                      </div>
                    <thead>
                      <th>#</th>
                      <th width="24%">Nama</th>
                      <th>NPM</th>
                      <th>Nomor HP</th>
                      <th>Email</th>
                      <th>Prodi</th>
                      <th width="10%">Aksi</th>
                    </thead>
                    <tbody>
                      @forelse ($users as $user)
                        <tr>
                          <td>{{ $loop->iteration + $users->firstItem() - 1 }}</td>
                          <td>{{ $user->nama}}</td>
                          <td>{{ $user->npm}}</td>
                          <td>{{ $user->no_hp}}</td>
                          <td>{{ $user->email}}</td>
                          <td>{{ $user->prodi}}</td>
                          <td>
                            @can('Edit_Pinjam')
                              <a class="btn btn-warning btn-action" href="{{ route('peminjam.edit', $user->id)}}"><i class="fas fa-pencil-alt"></i></a>
                            @endcan
    
                            @can('Hapus_Pinjam')
                              <a href="{{ route('peminjam.delete', $user->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        </tr>
                      @empty
                        
                      @endforelse
                    </tbody>
                  </table>
                </div>
                {{ $users->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection