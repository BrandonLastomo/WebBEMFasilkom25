@extends('layouts.app')

@section('title')
Struktur Organisasi BEM Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Structure Section -->

<section class="bidangSc mt-5" data-aos="fade-up">
  <div class="container">
    <h1 class="namaBidang">Badan Pengurus Harian</h1>
    <p class="penjelasan">Badan Pengurus Harian adalah pengelola dan koordinator utama BEM Fasilkom UNSIKA yang berisi ketua, wakil ketua, sekretaris, dan bendahara.</p>
    <button class="infoBidang">
      <a href="{{ route('bph') }}"><u>Selengkapnya</u><i class="bi bi-arrow-right-short"></i></a>
    </button>
  </div>
</section>

<section class="bidangPsdm" data-aos="fade-up">
  <div class="container">
    <h1 class="namaBidang">Pengembangan Sumber Daya Manusia</h1>
    <p class="penjelasan">Bidang yang berfungsi mengawasi dan mengevaluasi serta mengembangkan sumber daya manusia baik di internal maupun eksternal organisasi BEM FASILKOM UNSIKA.</p>
    <button class="infoBidang">
      <a href="{{ route('psdm') }}"><u>Selengkapnya</u><i class="bi bi-arrow-right-short"></i></a>
    </button>
  </div>
</section>

<section class="bidangMinbat" data-aos="fade-up">
  <div class="container">
    <h1 class="namaBidang">Minat & Bakat</h1>
    <p class="penjelasan">Bidang yang mewadahi serta memfasilitasi minat dan bakat mahasiswa Fasilkom UNSIKA.</p>
    <button class="infoBidang">
      <a href="{{ route('minat-bakat') }}"><u>Selengkapnya</u><i class="bi bi-arrow-right-short"></i></a>
    </button>
  </div>
</section>

<section class="bidangSospol" data-aos="fade-up">
  <div class="container">
    <h1 class="namaBidang">Sosial Politik</h1>
    <p class="penjelasan">Bidang yang bertugas melakukan kajian dan pengumpulan data yang real mengenai permasalahan yang ada di internal maupun eksternal kampus.</p>
    <button class="infoBidang">
      <a href="{{ route('sospol') }}"><u>Selengkapnya</u><i class="bi bi-arrow-right-short"></i></a>
    </button>
  </div>
</section>

<section class="bidangKominfo" data-aos="fade-up">
  <div class="container">
    <h1 class="namaBidang">Komunikasi dan Informasi</h1>
    <p class="penjelasan">Bidang yang bertugas mengembangkan dan membangun hubungan serta kerjasama baik internal organisasi maupun antar instansi, serta bertanggung jawab atas pengembangan teknologi informasi.</p>
    <button class="infoBidang">
      <a href="{{ route('kominfo') }}"><u>Selengkapnya</u><i class="bi bi-arrow-right-short"></i></a>
    </button>
  </div>
</section>

<!-- End Structure Section -->
@endsection