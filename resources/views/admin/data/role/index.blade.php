@extends('layouts.admin')

@section('title')
  Dashboard - Peran
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Manajemen Peran</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('role.index') }}">Manajemen Peran</a></div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">Daftar Peran</h2>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Manajemen Peran</h4>
                @can('Tambah_Role')
                  <div class="card-header-action">
                    <a href="{{ route('role.create') }}" class="btn btn-primary">Tambah</a>
                  </div>
                @endcan
              </div>
              <div class="card-body">
                @include('includes.admin.flash')
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-md">
                    <thead>
                      <th>Nama Peran</th>
                      <th>Guard Name</th>
                      <th>Diperbarui pada</th>
                      <th width="25%">Aksi</th>
                    </thead>
                    <tbody>
                      @forelse ($roles as $role)
                        <tr>
                          <td>{{ $role->name}}</td>
                          <td>{{ $role->guard_name}}</td>
                          <td>{{ $role->updated_at_formatted}}</td>
                          <td>
                            <a class="btn btn-info btn-action" href="{{ route('role.show', $role->id)}}"><i class="far fa-eye"></i></a>
                            @can('Edit_Role')
                              <a class="btn btn-warning btn-action" href="{{ route('role.edit', $role->id)}}"><i class="fas fa-pencil-alt"></i></a>
                            @endcan
    
                            @can('Hapus_Role')
                              <a href="{{ route('role.delete', $role->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                        </tr>
                      @empty
                        
                      @endforelse
                    </tbody>
                  </table>
                </div>
                {{ $roles->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection