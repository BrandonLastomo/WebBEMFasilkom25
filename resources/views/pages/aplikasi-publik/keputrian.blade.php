@extends('layouts.app')

@section('title')
Karya Tulis Keputrian Fasilkom | Kartalasatya
@endsection

@section('content')
<section id="karya-tulis" class="karya-tulis" style="margin-top: 100px;">

    <div class="container" data-aos="fade-up">
        <header class="section-header fw-bold">
            <p>Karya Tulis</p>
        </header>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-md-12 portfolio-item filter-app text-center">
                <div class="wrapper">

                    <div class="content">
                        <div class="bg-shape">
                        </div>


                        <div class="product-img">

                            <div class="product-img__item" id="img1">
                                <img src="{{ url('frontend/assets/img/karya-mhs/karya1.jpg') }}" class="img-thumbnail product-img__img" style="width: 60%; border-radius: 20px;">
                            </div>

                            <div class="product-img__item" id="img2">
                                <img src="{{ url('frontend/assets/img/karya-mhs/karya2.jpeg') }}" class="img-thumbnail product-img__img" style="width: 60%; border-radius: 20px;">
                            </div>

                            <div class="product-img__item" id="img3">
                                <img src="{{ url('frontend/assets/img/karya-mhs/karya5.jpg') }}" class="img-thumbnail product-img__img" style="width: 60%; border-radius: 20px;">
                            </div>

                            <div class="product-img__item" id="img4">
                                <img src="{{ url('frontend/assets/img/karya-mhs/karya4.jpeg') }}" class="img-thumbnail product-img__img" style="width: 60%; border-radius: 20px;">
                            </div>

                        </div>



                        <div class="product-slider">
                            <button class="prev disabled">
                                <span class="icon">
                                    <svg class="icon icon-arrow-right">
                                        <use xlink:href="#icon-arrow-left"></use>
                                    </svg>
                                </span>
                            </button>
                            <button class="next">
                                <span class="icon">
                                    <svg class="icon icon-arrow-right">
                                        <use xlink:href="#icon-arrow-right"></use>
                                    </svg>
                                </span>
                            </button>

                            <div class="product-slider__wrp swiper-wrapper">


                                <div class="product-slider__item swiper-slide" data-target="img1">
                                    <div class="product-slider__card">
                                        <div class="product-slider__content">
                                            <h3 class="product-slider__title text-dark">
                                                POSTER PENERAPAN PROKES
                                            </h3>
                                            <div class="product-ctr">
                                                <div class="product-labels text-center">
                                                    <div class="product-labels__title text-dark">Deskripsi Karya</div>
                                                    <div class="product-labels__group text-dark">
                                                        <span class="" style="font-size: 15px;">" Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quam dolore, iste ipsam fugit asperiores molestias sit eligendi hic deserunt voluptates sequi consequuntur. "</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="product-slider__price text-dark fw-bold mt-3">- <i>Rona Febriana</i> -</span>
                                            <span class="product-slider__price text-dark" style="font-size: 15px;">6G Teknik Informatika</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="product-slider__item swiper-slide" data-target="img2">
                                    <div class="product-slider__card">
                                        <div class="product-slider__content">
                                            <h3 class="product-slider__title text-dark">
                                                POSTER WAJIB MASKER
                                            </h3>
                                            <div class="product-ctr">
                                                <div class="product-labels text-center">
                                                    <div class="product-labels__title text-dark">Deskripsi Karya</div>
                                                    <div class="product-labels__group text-dark">
                                                        <span class="" style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quam dolore, iste ipsam fugit asperiores molestias sit eligendi hic deserunt voluptates sequi consequuntur.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="product-slider__price text-dark fw-bold mt-3">- <i>Rona Febriana</i> -</span>
                                            <span class="product-slider__price text-dark" style="font-size: 15px;">6G Teknik Informatika</span>
                                        </div>
                                    </div>
                                </div>



                                <div class="product-slider__item swiper-slide" data-target="img3">
                                    <div class="product-slider__card">
                                        <div class="product-slider__content">
                                            <h3 class="product-slider__title text-dark">
                                                POSTER GEJALA CORONA
                                            </h3>
                                            <div class="product-ctr">
                                                <div class="product-labels text-center">
                                                    <div class="product-labels__title text-dark">Deskripsi Karya</div>
                                                    <div class="product-labels__group text-dark">
                                                        <span class="" style="font-size: 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quam dolore, iste ipsam fugit asperiores molestias sit eligendi hic deserunt voluptates sequi consequuntur.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="product-slider__price text-dark fw-bold mt-3">- <i>Rona Febriana</i> -</span>
                                            <span class="product-slider__price text-dark" style="font-size: 15px;">6G Teknik Informatika</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <svg class="hidden" hidden>
                    <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                        <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
                    </symbol>
                    <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                        <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
                    </symbol>
                </svg>
            </div>
        </div>

    </div>

</section>
@endsection