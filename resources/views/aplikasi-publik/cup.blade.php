@extends('layouts.app')

@section('title')
Fasilkom CUP| Kabinet Kartalasatya
@endsection

@section('content')
<section id="fasilkom-cup" class="fasilkom-cup" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/cup.svg') }}" style="width: 43%;">
        </div>
        <h5 class="fw-light mt-5">" Yuk siapin dulu team kamu untuk pertarungan persahabatan se-fasilkom unsika.. "</h5>
    </div>
</section>
@endsection