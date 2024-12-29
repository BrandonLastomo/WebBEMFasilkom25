@extends('layouts.app')

@section('title')
Fasilkom Event Information Center | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="news" class="news" style="margin-top: 100px">
    <div class="container">
        <header class="section-header fw-bold">
            <p>{{ $event->judul }}</p>
        </header>
        <div class="row text-center justify-content-center">
            <img src="{{ asset('storage/' . $event->path) }}" class="img-thumbnail p-0" style="width: 70%; border-radius: 20px;">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="mt-4"><strong><i class="bi bi-pen"></i> Dipublikasikan pada <i>{{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}</i></strong></p>
                <hr>

                {!! $event->konten !!}
            </div>
        </div>
    </div>
</section>
@endsection