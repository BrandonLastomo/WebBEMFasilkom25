@extends('layouts.app')

@section('title')
  Info Kajian | Kartalasatya
@endsection

@section('content')
<section id="apr" class="apr" style="margin-top: 100px">
  <div class="container">
    <header class="section-header fw-bold text-center">
      <p>Info Kajian</p>
    </header>
    {!! Form::open(['url'=> Request::path(),'method'=>'GET','class' => 'form-inline']) !!}
    <div class="card search my-4 py-2">
      <div class="card-body px-4">
        <div class="row g-2 d-flex justify-content-center">
          <div class="col-md-6">
            <div class="input-group">
              <input type="text" class="form-control search-box" name="q" value="{{ request()->input('q') ?? '' }}" placeholder="Cari kajian">
              <button type="submit" class="btn btn-primary btn-show"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}

    <div class="row justify-content-center my-3">
      @forelse ($kajians as $kajian)
        <div class="col-lg-6 my-4">
          <a href="{{ route('info-kajian.detail', $kajian->slug) }}">
            <div class="card h-100">
              <div class="row g-0">
                <div class="col-md-4">
                  @if (!$kajian->path)
                    <img src="https://bem.cs.unsika.ac.id/storage/uploads/apr/images/penyesuaian-ukt_1692251914.jpeg" class="img-fluid rounded-start" alt="{{ $kajian->nama }}">
                  @else
                    <img src="{{ asset('storage/' . $kajian->path) }}" class="img-fluid rounded-start" alt="{{ $kajian->nama }}">
                  @endif
                </div>
                <div class="col-md-8">
                  <div class="card-body d-flex flex-column justify-content-between h-100">
                    <h5 class="card-title" style="min-height: 60px; overflow: hidden;">
                      {{ strip_tags($kajian->nama) }}
                    </h5>
                    <p class="card-text" style="text-align: justify;">
                      {!! Str::limit(strip_tags($kajian->deskripsi), 130) !!}
                    </p>
                    <p class="card-text text-muted">
                      {{ $kajian->created_at->format('d M Y') }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      @empty
        <div class="col-lg-12 p-2">
          <div class="card text-center">
            <p class="m-3">Tidak Ada Kajian</p>
          </div>
        </div>
      @endforelse
    </div>
  </div>
</section>
@endsection
