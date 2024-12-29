@extends('layouts.prepkm')

@section('title')
  PKM Centre - Program
@endsection

@section('content')
  <!-- Main Content -->
  <div class="main-content">
    <section class="section detail">
      <div class="section-header">
        <h1>{{ $program->judul }}</h1>
      </div>

      <div class="row">
        <div class="col-md mb-4">
          <div class="card p-1">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 pl-0">
                  <img src="{{ (empty($program->path) ? asset('pkm/assets/img/news/img13.jpg') : asset('storage/' . $program->path)) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 mt-3">
                  <h3>{{ $program->judul }}</h3>
                  <h6 class="text-muted">{{ \Carbon\Carbon::parse($program->tanggal)->translatedFormat('d F Y') }}</h6>
                  <p>{!! $program->konten !!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
@endsection