@extends('layouts.app')

@section('title')
Visi Misi BEM Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Structure Section -->
<section id="struktur" class="struktur mt-5">

    <div class="container" data-aos="fade-up">

        <header class="section-header mt-5 fw-bold">
            <p>BEM Fasilkom UNSIKA {{env('KABINET_TAHUN');}}</p>
        </header>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/visi.png') }}" width="250" class="float-end">
            </div>
            <div class="col-md-6">
                <h2>Visi</h2>
                <p>Bekerjasama dan bersama-sama bekerja dalam mengembangkan Badan Eksekutif Mahasiswa Fakultas Ilmu Komputer Unsika agar lebih proaktif dalam pengembangan intelektual yang kritis untuk meningkatkan kualitas Fakultas Ilmu Komputer Unsika.
</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-6">
                <h2 class="mb-4">Misi</h2>
                <ol>
                    <li>Meningkatkan pemahaman mahasiswa tentang pentingnya pengembangan intelektual yang kritis bagi peningkatan kualitas Fakultas Ilmu Komputer.</li>
                    <li>Membangun kerjasama yang strategis dengan seluruh elemen di lingkungan Fasilkom serta pihak eksternal Fasilkom Unsika.</li>
                    <li>Meningkatkan dan memberikan pelayanan bagi mahasiswa fasilkom sebagai bagian dari peningkatan kesejahteraan mahasiswa yang responsif dan inklusif.</li>
                    <li>Mengembangkan dan mengoptimalisasi program kerja BEM Fasilkom untuk menciptakan mahasiswa Fasilkom yang berdedikasi dan berkualitas.</li>
                    <li>Mewadahi minat bakat mahasiswa Fasilkom.</li>
                </ol>
            </div>
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/misi.png') }}" width="250" class="float-start">
            </div>
        </div>

    </div>

</section>
<!-- End Structure Section -->
@endsection