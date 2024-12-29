@extends('layouts.app')

@section('title')
  Fasilkom Event | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="event" class="event" style="margin-top: 100px">
	<div class="container">
		<header class="section-header fw-bold">
			<p>Fasilkom Event</p>
		</header>
		<div class="row text-center justify-content-center">

			@forelse ($events as $event)
			<div class="col-lg-4 p-2">
				<div class="card">
					<img src="{{ asset('storage/' . $event->path) }}" class="card-img-top" alt="{{ $event->judul }}" height="250">
					<div class="card-body">
						<h5 class="card-title">{{$event->judul}}</h5>
						<a href="{{ route('detail-event', $event->slug) }}" class="btn btn-warning btn-modify mt-4">Baca Event</a>
					</div>
				</div>
			</div>
			@empty
			<div class="col-lg-12 p-2">
				<div class="card">
					Tidak Ada Event
				</div>
			</div>
			@endforelse
		</div>
	</div>
</section>
@endsection