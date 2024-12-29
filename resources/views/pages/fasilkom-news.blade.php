@extends('layouts.app')

@section('title')
  Fasilkom News | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="news" class="news" style="margin-top: 100px">
	<div class="container">
		<header class="section-header fw-bold">
			<p>Fasilkom News</p>
		</header>
		<div class="row text-center justify-content-center">

			@forelse ($beritas as $berita)
			<div class="col-lg-4 p-2">
				<div class="card">
					<img src="{{ asset('storage/' . $berita->path) }}" class="card-img-top-costom" alt="{{ $berita->judul }}" height="250">
					<div class="card-body">
						<h5 class="card-title">{{$berita->judul}}</h5>
						<a href="{{ route('detail-news', $berita->slug) }}" class="btn btn-warning btn-modify mt-4">Baca Berita</a>
					</div>
				</div>
			</div>
			@empty
			<div class="col-lg-12 p-2">
				<div class="card">
					Tidak Ada Berita
				</div>
			</div>
			@endforelse
		</div>
	</div>
</section>
@endsection