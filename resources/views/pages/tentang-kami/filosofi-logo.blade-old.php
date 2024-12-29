@extends('layouts.app')

@section('title')
Filosofi Logo | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Logo Section -->
<!-- Logo Section -->
<section id="logo" class="logo mt-5">
    <div class="container" data-aos="fade-up">

<!-- Blok Pertama -->
<div class="row justify-content-center align-items-center mt-5 mb-5 gap-5">
    <div class="col-md-3">
        <img src="{{ url('frontend/assets/img/bawah_23.png') }}" class="logo-arthasastra" style="transform: scale(3); margin-left: 10px;">
    </div>
    <div class="col-md-6 d-grid gap-2" style="grid-template-rows: auto auto;">
        <h2 class="mt-5">Kartalasatya</h2>
        <p>
            #Kartalasatya yang memiliki arti - didasarkan pada dua kata dalam bahasa sansekerta nirbita dan raksa.
            "Nirbita" sebuah nama yang memiliki arti mendalam tentang hal baru, dimaknai dengan pembaharuan mengenai segala
            sesuatu hal yang berani untuk melakukan sesuatu dan "Raksa" ialah sebuah nama yang memiliki arti perlindungan. Dalam
            hal ini, sebuah organisasi BEM Fasilkom Unsika dengan nama kabinet Nirbita Raksa memiliki tujuan untuk memperbaharui
            dan mencoba hal baru, serta tidak meninggalkan fungsinya sebagai organisasi perlindungan advokasi terhadap Mahasiswa.
        </p>
    </div>
</div>




        <!-- Blok Kedua -->
        <hr>
        <div class="row justify-content-center align-items-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Dua-Telapak-Tangan.png') }}" class="logo-arthasastra" style="transform: scale(2);">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Dua Telapak Tangan</h2>
                <p>Melambangkan sebuah perlindungan terhadap Mahasiswa Fasilkom.</p>
            </div>
        </div>

        <!-- Blok Ketiga -->
        <hr>
        <div class="row justify-content-center align-items-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Api_23.png') }}" class="logo-arthasastra" style="transform: scale(2);">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Api</h2>
                <p>Melambangkan simbol semangat yang kuat untuk Menjunjung tinggi ilmu pengetahuan dan mampu menerangi sekitarnya.</p>
            </div>
        </div>

        <!-- Blok Keempat -->
        <hr>
        <div class="row justify-content-center align-items-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Jingga.png') }}" class="logo-arthasastra" style="transform: scale(2);">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Warna Jingga</h2>
                <p>Melambangkan simbol dari optimisme, petualangan, kemampuan, dan kemampuan bersosialisasi. 
                    Dapat juga melambangkan sikap percaya diri karena identik dengan sebuah kreativitas</p>
            </div>
        </div>

        <!-- Blok Kelima -->
        <hr>
        <div class="row justify-content-center align-items-center mt-5 mb-5 gap-5">
            <div class="col-md-3">
                <img src="{{ url('frontend/assets/img/logo-kabinet/Biru.png') }}" class="logo-arthasastra" style="transform: scale(2);">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5">Warna Biru</h2>
                <p>Melambangkan Melambangkan ketenangan dan tanggung jawab yang kuat dalam sebuah organisasi.</p>
            </div>
        </div>
        
    </div>
</section>
<!-- End Logo Section -->

<!-- End Logo Section -->
@endsection