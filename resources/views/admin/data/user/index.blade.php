@extends('layouts.admin')

@section('title')
  Dashboard - User
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen User</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ url('admin/users') }}">Manajemen User</a></div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Daftar User</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Manajemen User</h4>
                @can('Tambah_User')
                  <div class="card-header-action">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a>
                  </div>
                @endcan
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-md">
                    <thead>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Diverifikasi pada</th>
                      <th>Peran</th>
                      <th width="25%">Aksi</th>
                    </thead>
                    <tbody>
                      @forelse ($users as $user)
                        <tr>
                          <td>{{ $loop->iteration + $users->firstItem() - 1 }}</td>
                          <td>{{ $user->name}}</td>
                          <td>{{ $user->email}}</td>
                          <td>{{ $user->verified_at_formatted}}</td>
                          <td>{{ $user->roles->implode('name', ', ') }}</td>
                          <td>
                            @can('Lihat_User')
                              <a class="btn btn-info btn-action" href="{{ route('user.show', $user->id)}}"><i class="far fa-eye"></i></a>
                            @endcan
    
                            @can('Edit_User')
                              <a class="btn btn-warning btn-action" href="{{ route('user.edit', $user->id)}}"><i class="fas fa-pencil-alt"></i></a>
                            @endcan
    
                            @can('Hapus_User')
                              <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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