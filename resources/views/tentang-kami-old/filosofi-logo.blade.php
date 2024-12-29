@extends('layouts.app')

@section('title')
Filosofi Logo | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Logo Section -->
<section id="logo" class="logo mt-5">

    <div class="container" data-aos="fade-up">

        <header class="section-header mt-5 fw-bold">
            <p>Filosofi Logo BEM Fasilkom UNSIKA {{env('KABINET_TAHUN');}}1</p>
        </header>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/Arthasastra Logo Sample 13.png') }}" width="180" class="logo-arthasastra">
            </div>
            <div class="col-md-6 deskripsi-arthasastra">
                <h2>Nilai Arthasastra</h2>
                <p>#ARTHASASTRA–secara filosofis merupakan sebuah kitab
                    mengenai risalah dan sistem administrasi tata negara terbaik yang pertama
                    kali ada pada abad ke-4 Sebelum Masehi. Sedangkan secara etimologis,
                    #ARTHASASTRA merupakan gabungan dari dua buah kata berbahasa
                    Sansekerta, yakni “Artha” yang dapat diartikan sebagai
                    agung/gunung/kebaikan serta “Sastra” yang berarti pedoman dan sarana.</p>

                <p>Mengacu pada hal tersebut, kami memakai nama
                    #ARTHASASTRA ini sebagai nama kabinet BEM Fasilkom UNSIKA
                    Periode 2021 dengan harapan dan cita-cita menjadikan BEM Fasilkom
                    UNSIKA sebagai organisasi mapan yang dapat memberikan manfaat
                    besar bagi mahasiswa juga masyarakat.
                    #ARTHASASTRA juga dapat diartikan sebagai sarana kebaikan
                    yang disandingkan dengan seekor burung elang tangguh nan gagah yang
                    fokus pada tujuan, senantiasa meningkatkan potensi diri, serta berdikari.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Burung-Elang.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Burung Elang</h2>
                <p>Melambangkan ketangguhan dan kegagahan, fokus pada tujuan, meningkatkan potensi diri dan berdikari.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Lima-Bagian-Sayap.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Lima Bagian Sayap</h2>
                <p>Dengan makna lima sayap yang melambangkan 5 peran fungsi dari mahasiswa.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Wifi.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Wifi</h2>
                <p>Simbol wifi melambangkan ciri khas dari Fakultas Ilmu Komputer.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Tiga-Titik-Fokus.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Tiga Titik Fokus</h2>
                <p>Dengan makna tiga titik yang melambangkan Tri Dharma Perguruan Tinggi.</p>
            </div>
        </div>

        <hr>

        <div class="row justify-content-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Padi.png') }}" class="w-75">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Padi</h2>
                <p>Dengan makna Fasilkom Unsika berlokasi di Karawang dan Karawang merupakan kota lumbung padi.</p>
            </div>
        </div>

    </div>

</section>
<!-- End Logo Section -->
@endsection