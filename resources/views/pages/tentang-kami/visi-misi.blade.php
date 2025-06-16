@extends('layouts.app')

@section('title')
    Visi Misi BEM Fasilkom | Kabinet {{ env('KABINET') }}
@endsection

@section('content')
    <!-- Structure Section -->
    <section id="struktur" class="struktur mt-5">

        <div class="container" data-aos="fade-up">

            <header class="section-header mt-5 fw-bold">
                <p>BEM Fasilkom UNSIKA {{ env('KABINET_TAHUN') }}</p>
            </header>

            <div class="row justify-content-center mt-5 mb-5 gap-5">
                <div class="col-md-3">
                    <img src="{{ url('frontend/assets/img/visi.png') }}" width="250" class="float-end">
                </div>
                <div class="col-md-6">
                    <h2>Visi</h2>
                    <p>Menjadikan BEM Fasilkom sebagai ruang kolaboratif yang mendorong pengembangan
                        inovasi dan kreativitas mahasiswa, serta membangun komunikasi transparan dan sinergi
                        kuat dengan seluruh elemen fakultas untuk mencapai kemajuan bersama.
                </div>
            </div>

            <hr>

            <div class="row justify-content-center mt-5 mb-5 gap-5">
                <div class="col-md-6">
                    <h2 class="mb-4">Misi</h2>
                    <ol>
                        <li>Aktif dan responsif pada permasalahan dan kebutuhan mahasiswa Fasilkom dengan
                            cara kreatif.</li>
                        <li>Meningkatkan sinergi dan kolaborasi bersama semua elemen Fasilkom dan
                            mengoptimalisasi program kerja.</li>
                        <li>Memberikan wadah kepada mahasiswa untuk menyampaikan ide, gagasan, saran, kritik
                            dan juga untuk mengembangkan bakat dan kreativitasnya.</li>
                        <li>Mendorong kesadaran mahasiswa akan pentingnya pemikiran kritis dan pengembangan
                            intelektual yang berkesinambungan sebagai upaya meningkatkan kesejahteraan serta
                            kualitas di Fakultas Ilmu Komputer.</li>
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
