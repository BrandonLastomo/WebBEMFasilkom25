@extends('layouts.app')

@section('title')
LPJ Online | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="lpj" class="lpj mt-5">
    
    <header class="section-header mt-5 fw-bold">
      <p>LPJ Online BEM Fasilkom 2022</p>
    </header>
    
    <div class="container mt-5">

      <div class="row text-center">

        <div class="col-md-3 mb-3">
          <div class="card border-0">
            <div class="card-body pb-1 pt-4">
              <h4>Bidang PSDM</h4>
              <p class="mt-4">Bidang yang berfungsi mengawasi dan mengevaluasi serta
                mengembangkan sumber daya manusia baik di internal maupun eksternal
                organisasi BEM Fasilkom UNSIKA.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card border-0">
            <div class="card-body pb-1 pt-4">
              <h4>Bidang Minat dan Bakat</h4>
              <p class="mt-4">Bidang yang mewadahi serta memfasilitasi minat dan bakat
                mahasiswa Fasilkom UNSIKA.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card border-0">
            <div class="card-body pb-1 pt-4">
              <h4>Bidang Sosial Politik</h4>
              <p class="mt-4">Bidang yang bertugas melakukan kajian dan pengumpulan data yang
                real mengenai permasalahan yang ada di internal maupun eksternal
                kampus.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-3">
          <div class="card border-0">
            <div class="card-body pb-1 pt-4">
              <h4>Bidang Kominfo</h4>
              <p>Bidang yang bertugas mengembangkan dan membangun hubungan
                serta kerjasama baik internal organisasi maupun antar instansi, serta
                bertanggung jawab atas pengembangan teknologi informasi.</p>
            </div>
          </div>
        </div>

      </div>

    </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        {{-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <div class="modal-body">
          <h4 class="text-center">Nama Acara</h4>
          <strong>Deskripsi</strong>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, at? Voluptas laudantium, illum nobis neque animi error ipsam ullam a.</p>

          <strong class="mt-3">Penanggung Jawab</strong>
          <p>Lorem ipsum dolor sit.</p>

          <strong class="mt-3">Anggaran Biaya</strong>
          <p>Rp 1.000.000 ,-</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

</section>
@endsection