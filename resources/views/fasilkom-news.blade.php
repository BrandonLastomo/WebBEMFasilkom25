@extends('layouts.app')

@section('title')
Fasilkom News | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="news" class="news" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/fasilkom-news.svg') }}" style="width: 50%;">
        </div>
        <h5 class="fw-light mt-5">" Maaf halaman ini belum tersedia, silahkan kembali lagi dilain hari ya..! "</h5>
    </div>
</section>
@endsection