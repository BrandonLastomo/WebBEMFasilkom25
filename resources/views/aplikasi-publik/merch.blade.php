@extends('layouts.app')

@section('title')
Merchandise Fasilkom | Kabinet Kartalasatya
@endsection

@section('content')
<section id="merch" class="merch" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/merch.svg') }}" style="width: 45%;">
        </div>
        <h5 class="fw-light mt-5">" Bentar dulu nih belum buka.. masih angkutin barang, balik lagi nanti ya bro dan sist "</h5>
    </div>
</section>
@endsection