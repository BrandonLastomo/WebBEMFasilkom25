@extends('layouts.app')

@section('title')
E-Learning Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="e-learning" class="e-learning" style="margin-top: 100px">
    <div class="row mt-4 text-center">
        <div class="col-md-12 d-flex justify-content-center">
            <img src="{{ url('frontend/assets/img/e-learning.svg') }}" style="width: 40%;">
        </div>
        <h5 class="fw-light mt-5">" Mager liat materi nih... santuy dulu kali ya kita nongki bareng temen temen "</h5>
    </div>
</section>
{{-- <section id="elearning" clas="elearning" style="background-color: rgb(231, 215, 193);">

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <header class="section-header upcom" data-aos="fade-up" data-aos-delay="10">
                <p>Fasilkom </p>
                <p class="text-danger mb-2">Learning</p>
            </header>
        </div>
        <div class="row">
            <label for="">
                <h5>Kategori</h5>
            </label>
            <div class="col-md-4 mb-2">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md mb-3">
                <div class="card">
                    <img src="{{ url('frontend/assets/img/2968383.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5>Belajar Program Java Basic</h5>
                        </div>
                        <div class="card-text text-center">
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                dolore at soluta blanditiis natus ut voluptatem, ab perspiciatis maxime quae
                                officiis ex sequi asperiores minima! Natus quis odio alias vitae.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-secondary">Publish by Bijantium</small>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card">
                    <img src="{{ url('frontend/assets/img/2968383.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5>Belajar Program Java Basic</h5>
                        </div>
                        <div class="card-text text-center">
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                dolore at soluta blanditiis natus ut voluptatem, ab perspiciatis maxime quae
                                officiis ex sequi asperiores minima! Natus quis odio alias vitae.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-secondary">Publish by Bijantium</small>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card">
                    <img src="{{ url('frontend/assets/img/2968383.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5>Belajar Program Java Basic</h5>
                        </div>
                        <div class="card-text text-center">
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                dolore at soluta blanditiis natus ut voluptatem, ab perspiciatis maxime quae
                                officiis ex sequi asperiores minima! Natus quis odio alias vitae.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-secondary">Publish by Bijantium</small>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card">
                    <img src="{{ url('frontend/assets/img/2968383.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5>Belajar Program Java Basic<h4>
                        </div>
                        <div class="card-text text-center">
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                dolore at soluta blanditiis natus ut voluptatem, ab perspiciatis maxime quae
                                officiis ex sequi asperiores minima! Natus quis odio alias vitae.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-secondary">Publish by Bijantium</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md mb-3">
                <div class="card">
                    <img src="{{ url('frontend/assets/img/2968383.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5>Belajar Program Java Basic</h5>
                        </div>
                        <div class="card-text text-center">
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                dolore at soluta blanditiis natus ut voluptatem, ab perspiciatis maxime quae
                                officiis ex sequi asperiores minima! Natus quis odio alias vitae.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-secondary">Publish by Bijantium</small>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card">
                    <img src="{{ url('frontend/assets/img/2968383.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5>Belajar Program Java Basic</h5>
                        </div>
                        <div class="card-text text-center">
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                dolore at soluta blanditiis natus ut voluptatem, ab perspiciatis maxime quae
                                officiis ex sequi asperiores minima! Natus quis odio alias vitae.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-secondary">Publish by Bijantium</small>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card">
                    <img src="{{ url('frontend/assets/img/2968383.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5>Belajar Program Java Basic</h5>
                        </div>
                        <div class="card-text text-center">
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                dolore at soluta blanditiis natus ut voluptatem, ab perspiciatis maxime quae
                                officiis ex sequi asperiores minima! Natus quis odio alias vitae.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-secondary">Publish by Bijantium</small>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card">
                    <img src="{{ url('frontend/assets/img/2968383.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5>Belajar Program Java Basic<h4>
                        </div>
                        <div class="card-text text-center">
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                dolore at soluta blanditiis natus ut voluptatem, ab perspiciatis maxime quae
                                officiis ex sequi asperiores minima! Natus quis odio alias vitae.</p>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <small class="text-secondary">Publish by Bijantium</small>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Pagination -->
    <nav aria-label="Page navigation example" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    <!-- endPagnation --> --}}

@endsection