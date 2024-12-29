@extends('layouts.admin')

@section('title')
  Dashboard - BEM Fasilkom Kabinet {{env('KABINET');}}
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="bi-person-check" style="font-size: 36px; color: white;"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Pengurus Aktif</h4>
              </div>
              <div class="card-body">
                {{ $pengurus }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-info">
              <i class="bi-columns" style="font-size: 36px; color: white;"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Bidang</h4>
              </div>
              <div class="card-body">
                {{ $bidang }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="bi-columns-gap" style="font-size: 36px; color: white;"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Departemen</h4>
              </div>
              <div class="card-body">
                @empty($departemen)
                  {{ $departemen }}
                @else
                  {{ $departemen - 4 }}
                @endempty
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="bi-card-checklist" style="font-size: 36px; color: white;"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Program Kerja</h4>
              </div>
              <div class="card-body">
                {{ $proker }}
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="media align-items-center justify-content-center d-flex my-4">
        <div class="media-body align-items-center justify-content-center row">
            <div class="card px-3 pt-3 pb-1">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UX9JGzVhMJ4?autoplay=1&mute=1&loop=1&playlist=UX9JGzVhMJ4" frameborder="0" allowfullscreen></iframe>
                <h5 class="text-center mt-3 text-dark">Tata cara update LPJ Online</h5>
            </div>
        </div>
    </div>
      
      <div class="row">
        <div class="col-lg-7 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Berita Terbaru</h4>
              <div class="card-header-action">
                <a href="{{ route('berita.index') }}" class="btn btn-primary">Lihat Semua</a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Berita</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($beritas as $berita)
                      <tr>
                        <td>
                          {{ $berita->judul }}
                          <div class="table-links">
                            <a href="#">Detail</a>
                          </div>
                        </td>
                        <td>{!! Str::limit($berita->konten, 30) !!}</td>
                        <td>{{ date('d M Y', strtotime($berita->tanggal)) }}</td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="5" align="center">Tidak ada data</td>
                      </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Acara Terbaru</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-unstyled-border">
                @forelse ($acaras as $acara)
                  <li class="media">
                    <div class="media-body">
                      <div class="float-right text-primary">{{ $acara->bulan }}</div>
                      <div class="media-title">{{ $acara->nama }}</div>
                      <span class="text-small text-muted">{{ date('d F Y', strtotime($acara->tanggal)) }}</span>
                    </div>
                  </li>
                @empty
                  Tidak ada acara
                @endforelse
              </ul>
              <div class="text-center pt-1 pb-1">
                <a href="{{ route('acara.index') }}" class="btn btn-primary btn-lg btn-round">
                  Lihat Semua
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection