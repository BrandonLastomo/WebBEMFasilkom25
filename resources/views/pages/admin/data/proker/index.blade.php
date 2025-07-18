@extends('layouts.admin')

@section('title')
  Dashboard - Program Kerja
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Program Kerja BEM Fasilkom {{env('KABINET_TAHUN');}}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Proker</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Program Kerja (LPJ Online)</h4>
              @can('Tambah_Proker')
                <div class="card-header-action">
                  <a href="{{ route('proker.create') }}" class="btn btn-primary">Tambah</a>
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
                      <th>Nama Program Kerja</th>
                      <th>Departemen</th>
                      <th>Penanggung Jawab</th>
                      <th>LPJ</th>
                      <th>Status</th>
                      @can('Edit_Proker')
                        <th>Aksi</th>
                      @endcan
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($prokers as $proker)
                      <tr>
                        <td>{{ $loop->iteration + $prokers->firstItem() - 1 }}</td>
                        <td>{{ $proker->nama_proker }}</td>
                        <td>{{ $proker->departemen->nama }}</td>
                        <td>{{ $proker->penanggung_jawab }}</td>
                        <td>
                          @if ($proker->path)
                            <a href="{{ asset('storage/' . $proker->path) }}" class="embed-link" target="_blank">
                              <img src="{{ asset('pkm/assets/img/icon-pdf.png') }}" alt="{{ $proker->nama_proker }}" class="img-fluid pdf">
                            </a>
                          @endif
                        </td>
                        <td>{{ $proker->statusLabel() }}</td>
                        @can('Edit_Proker')
                          <td>
                            @can('Edit_Proker')
                              <a href="{{ route('proker.edit', $proker->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                            @endcan

                            @can('Hapus_Proker')
                              <a href="{{ route('proker.delete', $proker->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
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
              {{ $prokers->links() }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
