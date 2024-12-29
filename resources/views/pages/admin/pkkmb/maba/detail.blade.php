@extends('layouts.admin')

@section('title')
  Dashboard - Mahasiswa Baru
@endsection

@section('content')
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Mahasiswa Baru</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="{{ route('maba.index') }}">Mahasiswa Baru</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">

          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $maba->nama }}</h4>
            </div>
            <div class="card-body">
              <div class="row">

                <div class="col-md-4">
                  
                  <div class="row mb-3">
                    <div class="col-md">
                      <div class="row">
                        <div class="col-md">
                          Nama :
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          {{ $maba->nama }}
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <div class="col-md">
                      <div class="row">
                        <div class="col-md">
                          Email :
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          {{ $maba->email }}
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <div class="col-md">
                      <div class="row">
                        <div class="col-md">
                          Program Studi :
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          {{ $maba->prodi }}
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-4">
                  
                  <div class="row mb-3">
                    <div class="col-md">
                      <div class="row">
                        <div class="col-md">
                          Nama Kelompok :
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          @empty($maba->nama_kelompok)
                            (Kosong)
                          @else
                            {{ $maba->nama_kelompok }}
                          @endempty
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <div class="col-md">
                      <div class="row">
                        <div class="col-md">
                          Absen Hari Pertama :
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          @empty($maba->absen_hari_pertama)
                            (Kosong)
                          @else
                            {{ $maba->absen_hari_pertama }}
                          @endempty
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row mb-3">
                    <div class="col-md">
                      <div class="row">
                        <div class="col-md">
                          Absen Hari Kedua :
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md">
                          @empty($maba->absen_hari_kedua)
                            (Kosong)
                          @else
                            {{ $maba->absen_hari_kedua }}
                          @endempty
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-4">
                  <div class="row mb-3">
                    <div class="col-md-4">
                      Bukti Kehadiran 1 :
                    </div>
                    <div class="col-md">
                      <a id="imgMaba1">
                        @empty($maba->foto_hari_pertama)
                          (Kosong)
                        @else
                          <img src="{{ asset('storage/' . $maba->foto_hari_pertama) }}" alt="{{ $maba->nama }}" id="foto1" class="img-fluid img-maba my-2">
                        @endempty
                      </a>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-4">
                      Bukti Kehadiran 2 :
                    </div>
                    <div class="col-md">
                      <a id="imgMaba2">
                        @empty($maba->foto_hari_kedua)
                          (Kosong)
                        @else
                          <img src="{{ asset('storage/' . $maba->foto_hari_kedua) }}" alt="{{ $maba->nama }}" id="foto2" class="img-fluid img-maba my-2">
                        @endempty
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

  <!-- Modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalImg">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <img src="" alt="" id="imagePreview">
        </div>
      </div>
    </div>
  </div>
@endsection