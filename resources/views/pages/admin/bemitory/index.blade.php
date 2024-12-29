@extends('layouts.admin')

@section('title')
  Dashboard - inventory BEM
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>inventory BEM</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active">Inventory BEM</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Daftar Inventory BEM</h4>
              @can('Tambah_Apr')
                <div class="card-header-action">
                  <a href="{{ route('bemitory.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                @endcan
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <div class="table">
                    <div class="table_header">
                        <div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mb-3">
                      <form action="{{route('bemitory.index') }}" method="GET">
                        <div class="col-auto input-group" style="width: 400px">
                        <div class="input-group">
                          <input class="form-control border-end-0 border" name="search" type="search" placeholder="Search Barang or Status" id="example-search-input" />
                          <span class="input-group-append">
                            <button class="btn btn-outline-secondary border-left-0 border " type="search">
                              <i class="fa fa-search"></i>
                            </button>
                          </span>
                        </div>
                        </div>
                        </div>
                      </form>
                        <table class=" table scroll table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Barang</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bemitory as $item)
                                <tr>
                                    <td>{{ $item->kode_barang }}</td>
                                    <td>{{ $item->barang }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>{{ $item->status_barang }}</td>
                                    <td>
                                      @can('Edit_Pinjam')
                                      <a href="{{ route('bemitory.edit', $item->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
                                    @endcan
                                    
                                      @can('Hapus_Pinjam')
                              <a href="{{ route('bemitory.delete', $item->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
                            @endcan
                          </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginate d-flex justify-content-center sm">
                          {{ $bemitory->links() }}
                 </div>
                    </div>
                </div>
            </div>
             
           
        
        <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>Peminjaman Inventory BEM</h4>
            </div>
            <div class="card-body">
              @include('includes.admin.flash')
              <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0">
                  <div class="table">
                    <div class="table_header">
                        <div>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mb-3">
                      <form action="{{route('bemitory.index') }}" method="GET">
                          <div class="col-auto input-group" style="width: 400px">
                          <div class="input-group">
                            <input class="form-control border-end-0 border" name="searchh" type="search" placeholder="Search Email or Status" id="example-search-input" />
                            <span class="input-group-append">
                              <button class="btn btn-outline-secondary border-left-0 border " type="search">
                                <i class="fa fa-search"></i>
                              </button>
                            </span>
                          </div>
                          </div>
                          </div>
                        </form>
                      </div>
                        <table class="table scroll table-striped">
                            <thead style="">
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Barang</th>
                                    <th>Jumlah Yang Diajukan</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Estimasi Pengembalian</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjaman as $item)
                                <tr>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->barang }}</td>
                                    <td>{{ $item->jumlah }}</td>
                                    <td>{{ $item->tanggal_pinjam }}</td>
                                    <td>{{ $item->estimasi_pengembalian}}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                    <form action="bemitory/disetujui/{{$item['id']}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success tombol-status mt-1" style="border-radius:25px; <?php
                                        if($item['status'] == "dibatalkan"){
                                          echo "visibility:hidden;";
                                        }
                                        else {
                                            echo "";
                                        }
                                    ?>
                                    ">Disetujui</button></form>  
                                    
                                    <form action="bemitory/ditolak/{{$item['id']}}" method="POST">
                                      @csrf
                                      <button type="submit" class="btn btn-danger tombol-status mt-1" style="border-radius:25px; <?php
                                      if($item['status'] == "dibatalkan"){
                                        echo "disabled";
                                      }
                                      else {
                                          echo "";
                                      }
                                  ?>">Ditolak</button>
                                  </form>  
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginate d-flex justify-content-center sm">
                          {{ $peminjaman->links() }}
                 </div>
                    </div>
                </div>
            </div>
              </div>           
              </div>
              </div>
    </section>
@endsection