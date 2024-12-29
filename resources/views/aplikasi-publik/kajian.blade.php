@extends('layouts.app')

@section('title')
Informasi Kajian Fasilkom | Kabinet Kartalasatya
@endsection

@section('content')
<section id="info-kajian" class="info-kajian" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/kajian.svg') }}" style="width: 50%;">
        </div>
        <h5 class="fw-light mt-5">" Informasi kajian BEM Fasilkom Unsika masih tahap perancangan nih, mohon kembali pada lain waktu ya.. "</h5>
    </div>
</section>
@endsection