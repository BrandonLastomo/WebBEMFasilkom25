@extends('layouts.app')

@section('title')
Filosofi Logo | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<!-- Logo Section -->
<!-- Logo Section -->
<section id="logo" class="logo mt-5" style="margin: 0; padding: 0; padding-top:40px; height: 100vh; display: flex; justify-content: center; align-items: center;">

    <img src="{{ url('frontend/assets/img/logo-kabinet/filosofi-logo.jpg') }}" class="logo-arthasastra" style="max-width: 90vw; height: 100%; width: auto; transform: scale(10);">

</section>
<!-- End Logo Section -->

<!-- End Logo Section -->
@endsection