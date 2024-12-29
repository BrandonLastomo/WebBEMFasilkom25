@extends('layouts.app')

@section('title')
Visi Misi BEM Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Structure Section -->
<section id="visimisi" class="visimisi mt-5">

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
                <p>Berasaskan kolektivitas untuk BEM FASILKOM UNSIKA yang kritis, responsif dan
                    prestatif sebagai bentuk tanggung jawab sosial kepada mahasiswa/i, masyarakat serta
                    bangsa Indonesia.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-6">
                <h2 class="mb-4">Misi</h2>
                <ol>
                    <li>Mewadahi minat dan bakat mahasiswa FASILKOM UNSIKA guna meningkatkan
                        minat dan bakat serta prestasi mahasiswa FASILKOM UNSIKA.</li>
                    <li>Responsif terharap isu yang berkembang baik di universitas, daerah, maupun nasional
                        sesuai dengan peran dan fungsi mahasiswa.</li>
                    <li>Memberikan pelayanan advokasi yang reaktif dalam penyelesaian persoalan
                        mahasiswa FASILKOM UNSIKA.</li>
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