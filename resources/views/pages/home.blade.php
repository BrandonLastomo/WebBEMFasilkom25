@extends('layouts.app')
@section('title')
    BEM Fasilkom UNSIKA {{ env('KABINET_TAHUN') }} | Kabinet {{ env('KABINET') }}
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero mt-5">
        <div class="container">
            <div class="row typing float-lg-start text-lg-start text-center text-md-center">
                <div class="col">
                    <p data-aos="fade-up" data-aos-delay="200" class="fw-light">
                        #Together <span class="typed-text"></span><span class="cursor">&nbsp;</span>
                    </p>
                    <small class="lead mt-5 fw-bold" data-aos="fade-up" data-aos-delay="500">
                        Selamat Datang! <br />
                        Website Resmi <br />
                        BEM FASILKOM UNSIKA
                    </small>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Seputar Fasilkom Section ======= -->
    <section id="seputar-fasilkom" class="seputar-fasilkom">
        <div class="container mb-5" data-aos="fade-up">
            <div class="row">
                <div class="col-md">
                    <header class="section-header fw-bold">
                        <p>Seputar Fasilkom</p>
                    </header>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6 col-12 col-sm-12 mt-5">
                    <h3 class="fw-bold text-center">Berita Terhangat</h3>
                    <section class="section slider">
                        <div class="section__entry section__entry--center"></div>
                        @forelse ($beritas->reverse() as $berita)
                            <input type="radio" name="slider"
                                id="slide-{{ $karyas->count() * ($karyas->currentPage() - 1) + $loop->iteration }}"
                                class="slider__radio" checked />
                        @empty
                            <input type="radio" name="slider" id="" class="slider__radio" />
                        @endforelse
                        <div class="slider__holder">
                            @forelse ($beritas->reverse() as $berita)
                                <label for="slide-{{ $karyas->count() * ($karyas->currentPage() - 1) + $loop->iteration }}"
                                    class="slider__item slider__item--{{ $karyas->count() * ($karyas->currentPage() - 1) + $loop->iteration }} card">
                                    <div class="slider__item-content">
                                        <p class="heading-3 heading-3--light">
                                            {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}</p>
                                        <p class="heading-3">{{ $berita->judul }}</p>
                                        <img src="{{ asset('storage/' . $berita->path) }}" class="img-thumbnail news-img"
                                            alt="">
                                        <a class="heading-3 text-light btn btn-warning btn-modify"
                                            href="{{ route('detail-news', $berita->slug) }}">Baca Berita</a>
                                    </div>
                                </label>
                            @empty
                                <div class="item d-flex justify-content-center p-1 mt-5">
                                    Tidak ada berita
                                </div>
                            @endforelse
                        </div>
                    </section>
                </div>
                <div class="col-lg-5 col-md-5 col-12 col-sm-12 event mt-5">
                    <h3 class="text-center fw-bold">Upcoming Events</h3>
                    <br />
                    @php
                        $startIndex = \Carbon\Carbon::now()->format('n') - 1;
                        $bulansShifted = array_merge(
                            array_slice($bulans, $startIndex),
                            array_slice($bulans, 0, $startIndex),
                        );
                    @endphp

                    <div class="owl-carousel event owl-theme mt-5">
                        @foreach ($bulansShifted as $bulan)
                            <div class="item d-flex justify-content-center p-1">
                                <div class="card border-0 p-2 card-event-home">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4 fw-normal">{{ $bulan }}</h4>
                                        @php $acaraBulanIni = $acaras->where('bulan', $bulan); @endphp
                                        @if ($acaraBulanIni->isEmpty())
                                            <div class="row">
                                                <div class="col">Tidak ada acara</div>
                                            </div>
                                        @else
                                            @foreach ($acaraBulanIni as $item)
                                                <div class="row">
                                                    <div class="col">
                                                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F') }}
                                                    </div>
                                                    <div class="col d-flex justify-content-lg-start">
                                                        {{ $item->nama }}
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- <div id="next-slide-event" class="btn-control-event d-flex justify-content-center align-items-center mobile-btn">
                  <i class="fa fa-chevron-right" style="margin-right: -3px"></i>
                </div>
                <div id="prev-slide-event" class="btn-control-event d-flex justify-content-center align-items-center mobile-btn">
                  <i class="fa fa-chevron-left" style="margin-left: -3px"></i>
                </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Seputar Fasilkom Section -->

    <!-- Filosofi Logo Section -->
    <section id="filosofi" class="filosofi">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md">
                    <header class="section-header fw-bold">
                        <p>Filosofi Logo</p>
                    </header>
                </div>
            </div>
            <div class="row d-flex justify-content-center logo-filosofi">
                <div class="col-lg-3">
                    <img class="mx-auto logo-home-span" src="{{ url('frontend/assets/img/logo-kabinet/logo-span.png') }}"
                        alt="" width="230">
                </div>
                <div class="col-lg-7 deskripsi">
                    <p><strong>ARTHACHARA</strong> terdiri dari 2 kata, “Artha” yang berarti perbuatan yang menggambarkan
                        fungsi, program-program kerja, agenda dan semua hal yang dilakukan oleh BEM Fasilkom 2025. “Chara”
                        yang berarti makna atau tujuan, yang mencerminkan komitmen kami untuk selalu bermanfaat sesuai
                        dengan kebutuhan seluruh masyarakat Fasilkom.
                    </p>
                    <a href="{{ route('filosofi') }}" class="btn btn-warning btn-modify text-light fw-bold mt-3">BACA LEBIH
                        LENGKAP <i class="bi bi-arrow-right-square mx-2 icon-btn"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Filosofi Logo Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <header class="section-header fw-bold">
                <p>Aplikasi Publik</p>
            </header>
            <div class="row">
                <div class="col-md-4 text-center mt-4 d-flex align-items-center justify-content-center">
                    <img src="{{ url('frontend/assets/img/aplikasi-publik.svg') }}" alt="" class="mx-auto">
                </div>
                <div class="col-md-6 mt-5 text-center">
                    <div class="row m-4">
                        <div class="col-lg" data-aos="zoom-out" data-aos-delay="600">
                            <a class="card1" href="{{ route('apr') }}">
                                <h5>Advocacy Progress Report</h5>
                                <div class="go-corner">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row m-4">
                        <div class="col-lg-5 app-public" data-aos="zoom-out" data-aos-delay="400">
                            <a class="card1" href="{{ route('pkm-center') }}">
                                <h5>PKM Center</h5>
                                <div class="go-corner">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="200">
                            <a class="card1" href="{{ route('lpj') }}">
                                <h5>LPJ Online</h5>
                                <div class="go-corner">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row m-4">
                        <div class="col-lg-12" data-aos="zoom-out" data-aos-delay="600">
                            <a class="card1" href="{{ route('aplikasi') }}">
                                <h5>Lihat Semua</h5>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Features Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <header class="section-header mb-3 fw-bold">
                <p>Karya Mahasiswa</p>
            </header>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-md-12 portfolio-item filter-app text-center">
                    <div class="wrapper">

                        <div class="content">

                            <div class="product-img">

                                @forelse ($karyas as $karya)
                                    <div class="product-img__item" id="img{{ $karya->id }}">
                                        <img src="{{ asset('storage/' . $karya->path) }}"
                                            class="img-thumbnail product-img__img"
                                            style="width: 60%; border-radius: 20px;">
                                    </div>
                                @empty
                                @endforelse

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

                                    @forelse ($karyas as $karya)
                                        <div class="product-slider__item swiper-slide"
                                            data-target="img{{ $karya->id }}">
                                            <div class="product-slider__card">
                                                <div class="product-slider__content">
                                                    <h3 class="product-slider__title text-dark">
                                                        {{ $karya->judul }}
                                                    </h3>
                                                    <div class="product-ctr justify-content-center text-center">
                                                        <div class="product-labels text-center">
                                                            <div class="product-labels__title text-dark">Deskripsi Karya
                                                            </div>
                                                            <div class="product-labels__group text-dark">
                                                                <span class=""
                                                                    style="font-size: 15px;">{!! $karya->deskripsi !!}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="product-slider__price text-dark fw-bold mt-3">-
                                                        <i>{{ $karya->nama }}</i> -</span>
                                                    <span class="product-slider__price text-dark"
                                                        style="font-size: 15px;">{{ $karya->kelas }}
                                                        {{ $karya->prodi }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse

                                </div>
                            </div>

                        </div>

                    </div>

                    <svg class="hidden" hidden>
                        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                            <path
                                d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
                            </path>
                        </symbol>
                        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                            <path
                                d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
                            </path>
                        </symbol>
                    </svg>

                </div>

            </div>

        </div>
    </section>
@endsection
