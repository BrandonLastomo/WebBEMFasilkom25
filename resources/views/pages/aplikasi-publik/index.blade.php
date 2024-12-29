@extends('layouts.app')

@section('title')
Daftar Aplikasi Publik | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="list-aplikasi" class="list-aplikasi" style="margin-top: 70px">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <header class="section-header fw-bold">
                <p>Daftar Aplikasi Publik</p>
            </header>
            <div class="col-lg-3">
                <a class="card3" href="{{ route('apr') }}">
                    <h5>Advocacy Progress Report</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="card3" href="{{ route('pengaduan') }}">
                    <h5>Form Pengaduan Mahasiswa</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="card3" href="{{ route('bemitory') }}">
                    <h5>Pinjam Inventaris BEM</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="card3" href="{{ route('lpj') }}">
                    <h5>LPJ Online</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="col-lg-3">
                <a class="card3" href="{{ route('game') }}">
                    <h5>Game</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-controller"></i>
                        </div>
                    </div>
                </a>
            </div> --}}
            <!--<div class="col-lg-3">-->
            <!--    <a class="card3" href="">-->
            <!--        <h5>Mading Online</h5>-->
            <!--        <div class="dimmer"></div>-->
            <!--        <div class="go-corner" href="">-->
            <!--            <div class="go-arrow">-->
            <!--                <i class="bi bi-megaphone"></i>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
            <div class="col-lg-3">
                <a class="card3" href="{{ route('merchandise') }}">
                    <h5>Merchandise</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-shop"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="card3" href="{{ route('prepkm-center') }}">
                    <h5>PKM Center</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-house"></i>
                        </div>
                    </div>
                </a>
            </div>
            <!--<div class="col-lg-3">-->
            <!--    <a class="card3" href="">-->
            <!--        <h5>Game Cari Kata</h5>-->
            <!--        <div class="dimmer"></div>-->
            <!--        <div class="go-corner" href="">-->
            <!--            <div class="go-arrow">-->
            <!--                <i class="bi bi-house"></i>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
            {{-- <div class="col-lg-3">
                <a class="card3" href="{{ route('fasilkom-cup') }}">
                    <h5>Fasilkom Cup</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-trophy"></i>
                        </div>
                    </div>
                </a>
            </div> --}}
            <div class="col-lg-3">
                <a class="card3" href="{{ route('info-kajian') }}">
                    <h5>Info Kajian</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-file-arrow-up"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="card3" href="{{ route('karya-tulis') }}">
                    <h5>Karya Tulis</h5>
                    <div class="dimmer"></div>
                    <div class="go-corner" href="">
                        <div class="go-arrow">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a class="card3" href="{{ route('event') }}">
                    <h5>Event Information Center</h5>
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
</section>
@endsection