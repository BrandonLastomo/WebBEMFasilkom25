@extends('layouts.app')

@section('title')
Karya Tulis Keputrian Fasilkom | Kabinet Kartalasatya
@endsection

@section('content')
<section id="karya-tulis" class="karya-tulis" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/keputrian.svg') }}" style="width: 40%;">
        </div>
        <h5 class="fw-light mt-5">" Hallo terimakasih ya sudah mengunjungi halaman Keputrian <br> kamu bisa coba lain waktu kok terimakasih! "</h5>
    </div>
</section>
@endsection