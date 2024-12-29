@extends('layouts.app')

@section('title')
Informasi Kajian Fasilkom | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="info-kajian" class="info-kajian" style="margin-top: 70px">
    <div class="container">
        <header class="section-header mt-5 fw-bold">
            <p>Info Kajian</p>
        </header>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <h3>Developer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <i class="fa fa-weibo"></i>
                    </div>
                    <h3>Web</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <i class="fa fa-apple"></i>
                    </div>
                    <h3>Designer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service_box">
                    <div class="service_icon">
                        <i class="fa fa-sort-alpha-desc"></i>
                    </div>
                    <h3>UI Designer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, ducimus Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection