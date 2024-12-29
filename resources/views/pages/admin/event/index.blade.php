@extends('layouts.admin')

@section('title')
  Dashboard - Event
@endsection

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Event</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="{{ route('event.index') }}">Event</a></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header border-0">
            <h4>Daftar Event</h4>
            @can('Tambah_Event')
            <div class="card-header-action">
              <a href="{{ route('event.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            @endcan
          </div>
          <div class="card-body">
            @include('includes.admin.flash')
            <div class="table-responsive">
              <table class="table table-bordered table-striped mb-0">
                <thead>
                  <tr>
                    <th width="10%">#</th>
                    <th width="20%">Judul</th>
                    <th width="15%">Gambar</th>
                    <th width="20%">Event</th>
                    <th width="20%">Tanggal</th>
                    @can('Edit_Event')
                    <th width="10%">Aksi</th>
                    @endcan
                  </tr>
                </thead>
                <tbody>
                  @forelse ($events as $event)
                  <tr>
                    <td>{{ $loop->iteration + $events->firstItem() - 1 }}</td>
                    <td>
                      {{ $event->judul }}
                      <div class="table-links">
                        <a href="#">Detail</a>
                      </div>
                    </td>
                    <td><img src="{{ asset('storage/' . $event->path) }}" alt="{{ $event->judul }}" class="img-fluid my-2" width="100"></td>
                    <td>{!! Str::limit(strip_tags($event->konten), 100) !!}</td>
                    <td>{{ date('d M Y', strtotime($event->tanggal)) }}</td>
                    @can('Edit_Event')
                    <td>
                      @can('Edit_Event')
                      <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                      @endcan

                      @can('Hapus_Event')
                      <a href="{{ route('event.delete', $event->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                      @endcan
                    </td>
                    @endcan
                  </tr>
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
            {{ $events->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection