@extends('layouts.app')

@section('title')
PKM Centre Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="pkm-center" class="pkm-center" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/centre.svg') }}" style="width: 40%;">
        </div>
        <h5 class="fw-light mt-5">" Halaman PKM Centre bisa digunakan setelah update nanti ya.. <br> terimakasih telah mengunjugi situs BEM Fasilkom Unsika! "</h5>
    </div>
</section>
@endsection