@extends('layouts.app')

@section('title')
Mading Online Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="mading" class="mading" style="margin-top: 100px">
    <div class="container">
        <header class="section-header mt-5 fw-bold">
            <p>Mading Online</p>
        </header>
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="card2" data-bs-toggle="collapse" href="#karya-1" role="button" aria-expanded="false" aria-controls="karya-1" href="{{ route('karya-tulis') }}">
                            <h5>Karya 1</h5>
                            <div class="dimmer"></div>
                            <div class="go-corner" href="">
                                <div class="go-arrow">
                                    <i class="bi bi-pencil-square"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12">
                        <a class="card2" data-bs-toggle="collapse" href="#karya-2" role="button" aria-expanded="false" aria-controls="karya-2" href="{{ route('karya-tulis') }}">
                            <h5>Karya 2</h5>
                            <div class="dimmer"></div>
                            <div class="go-corner" href="">
                                <div class="go-arrow">
                                    <i class="bi bi-pencil-square"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12">
                        <a class="card2" data-bs-toggle="collapse" href="#karya-3" role="button" aria-expanded="false" aria-controls="karya-3" href="{{ route('karya-tulis') }}">
                            <h5>Karya 3</h5>
                            <div class="dimmer"></div>
                            <div class="go-corner" href="">
                                <div class="go-arrow">
                                    <i class="bi bi-pencil-square"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="collapse multi-collapse" id="karya-1">
                    <div class="card card-body">
                        Karya 1
                    </div>
                </div>
                <div class="collapse multi-collapse" id="karya-2">
                    <div class="card card-body">
                        Karya 2
                    </div>
                </div>
                <div class="collapse multi-collapse" id="karya-3">
                    <div class="card card-body">
                        Karya 3
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection