@extends('layouts.app')

@section('title')
    Filosofi Logo | Kabinet {{ env('KABINET') }}
@endsection

@section('content')
    <!-- Logo Section -->
    <section id="logo" class="filosofiLogoFull mt-5">

        <img src="{{ url('frontend/assets/img/logo-kabinet/filosofi-logo.png') }}" class="logo-arthachara">

    </section>

    <!-- End Logo Section -->
@endsection
