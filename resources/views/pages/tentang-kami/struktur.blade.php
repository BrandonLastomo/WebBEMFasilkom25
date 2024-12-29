@extends('layouts.app')

@section('title')
Struktur Organisasi BEM Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Structure Section -->
<section id="struktur" class="struktur mt-5">

		<div class="container" data-aos="fade-up">

				<div class="row">
          <header class="section-header mt-5 fw-bold">
            <p>Struktur Organisasi</p>
          </header>
				</div>

				<div class="row text-center gap-5 mt-5" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1200">

          <div class="row mt-5">
            <div class="col-md mb-5">
              <a href="{{ route('bph') }}">
                <div class="card border-0">
                  <div class="card-body">
                    <h4>Badan Pengurus Harian</h4>
                    <p>Badan Pengurus Harian adalah pengelola dan koordinator utama BEM Fasilkom UNSIKA yang berisi ketua, wakil ketua, sekretatis, dan bendahara.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md mb-5">
              <a href="{{ route('psdm') }}">
                <div class="card border-0">
                  <div class="card-body">
                    <h4>Bidang PSDM</h4>
                    <p>Bidang yang berfungsi mengawasi dan mengevaluasi serta
                      mengembangkan sumber daya manusia baik di internal maupun eksternal
                      organisasi BEM Fasilkom UNSIKA.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md">
              <a href="{{ route('minat-bakat') }}">
                <div class="card border-0">
                  <div class="card-body">
                    <h4>Bidang Minat dan Bakat</h4>
                    <p>Bidang yang mewadahi serta memfasilitasi minat dan bakat
                      mahasiswa Fasilkom UNSIKA.</p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-4 mb-5">
              <a href="{{ route('sospol') }}">
                <div class="card border-0">
                  <div class="card-body">
                    <h4>Bidang Sosial Politik</h4>
                    <p>Bidang yang bertugas melakukan kajian dan pengumpulan data yang
                      real mengenai permasalahan yang ada di internal maupun eksternal
                      kampus.</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 mb-5">
              <a href="{{ route('kominfo') }}">
                <div class="card border-0">
                  <div class="card-body">
                    <h4>Bidang Kominfo</h4>
                    <p>Bidang yang bertugas mengembangkan dan membangun hubungan
                      serta kerjasama baik internal organisasi maupun antar instansi, serta
                      bertanggung jawab atas pengembangan teknologi informasi.</p>
                  </div>
                </div>
              </a>
            </div>
          </div>

				</div>

		</div>

</section>
<!-- End Structure Section -->
@endsection