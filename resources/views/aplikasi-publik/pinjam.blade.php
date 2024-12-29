@extends('layouts.app')

@section('title')
Pinjam BEM | Kabinet Kartalasatya
@endsection

@section('content')
<section id="pinjam-bem" class="pinjam-bem" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/pinjam.svg') }}" style="width: 50%;">
        </div>
        <h5 class="fw-light mt-5">" Wahh, saat ini Pinjam BEM Belum bisa digunakan <br> karena masih dalam proses pembuatan. Datang kembali di lain waktu ya.. "</h5>
    </div>
</section>
@endsection