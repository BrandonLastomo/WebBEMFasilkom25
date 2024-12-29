@extends('layouts.app')

@section('title')
E-Learning Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="foto-kegiatan" class="foto-kegiatan" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/pengmas.svg') }}" style="width: 40%;">
        </div>
        <h5 class="fw-light mt-5">" Foto-fotonya lagi proses editing nih mohon bersabar yaa.. "</h5>
    </div>
</section>
@endsection