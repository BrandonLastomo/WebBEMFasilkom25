@extends('layouts.app')

@section('title')
Badan Pengurus Harian | Kabinet {{env('KABINET');}}
@endsection

@section('content')
  <!-- BPH -->
  <section id="bph" class="bph mt-5">
    <div class="container" data-aos="fade-up">
      <header class="section-header mt-5 fw-bold">
        <p>Badan Pengurus Harian</p>
      </header>

      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-7">
          <p>Badan Pengurus Harian adalah pengelola dan koordinator utama BEM Fasilkom UNSIKA yang berisi ketua, wakil ketua,
          sekretaris, dan bendahara.</p>
        </div>
        <div class="col-md-3">
          <img src="{{ url('frontend/assets/img/foto_profile/kelompok/sc.png') }}" alt="" class="img-thumbnail">
        </div>
      </div>

      <div class="row justify-content-center text-center m-5">
        <div class="col-md-auto mb-3">
          <h3>Ketua & Wakil Ketua</h3>
        </div>
      </div>
      <div class="row justify-content-center text-center m-5">
        <x-bph-card jabatan="Ketua Umum" :pengurus="$pengurus" />
        <x-bph-card jabatan="Wakil Ketua" :pengurus="$pengurus" />
      </div>

      <hr>

      <div class="row justify-content-center text-center m-5">
        <div class="col-md-auto mb-3">
          <h3>Sekretaris</h3>
        </div>
      </div>
      <div class="row justify-content-center text-center m-5">
        <x-bph-card jabatan="Sekretaris Umum" :pengurus="$pengurus" />
        <x-bph-card jabatan="Wakil Sekretaris" :pengurus="$pengurus" />
      </div>

      <hr>

      <div class="row justify-content-center text-center m-5">
        <div class="col-md-auto mb-3">
          <h3>Bendahara</h3>
        </div>
      </div>
      <div class="row justify-content-center text-center m-5">
        <x-bph-card jabatan="Bendahara Umum" :pengurus="$pengurus" />
        <x-bph-card jabatan="Wakil Bendahara" :pengurus="$pengurus" />
      </div>
    </div>
  </section>
  <!-- End BPH Section -->
@endsection
