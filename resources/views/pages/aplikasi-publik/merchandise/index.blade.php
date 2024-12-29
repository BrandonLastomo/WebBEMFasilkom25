@extends('layouts.app')

@section('title')
  Merchandise | Kartalasatya
@endsection

@section('content')
<section id="apr" class="apr" style="margin-top: 100px">
	<div class="container">
		<header class="section-header fw-bold">
			<p>Merchandise</p>
		</header>
          {!! Form::open(['url'=> Request::path(),'method'=>'GET','class' => 'form-inline']) !!}
          <div class="card search my-4 py-2">
           <div class="card-body px-4">
          <div class="row g-2  d-flex justify-content-center"> 
            <div class="col-md-6">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control search-box" name="q" value="{{ !empty(request()->input('q')) ? request()->input('q') : '' }}" placeholder="Cari Merchandise">
                <button type="submit" class="btn btn-primary float-right btn-show"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
          </div>
          </div>
          {!! Form::close() !!}
		<div class="row justify-content-center my-3">

			@forelse ($merchandises as $merchandise)
			<div class="col-lg-6 my-4">
			    <a href="{{ route('merchandise.detail', $merchandise->slug) }}">
    				<div class="card" style="height: 100%">
    					<div class="row">
    					    <div class="col-md-4">
    					        @if (!$merchandise->path)
        					    <img src="https://bem.cs.unsika.ac.id/storage/uploads/apr/images/penyesuaian-ukt_1692251914.jpeg" class="card-img-top" style="object-fit: cover; height: 100%" alt="{{ $merchandise->nama }}">
        					    @else
        					    <img src="{{ asset('storage/' . $merchandise->path) }}" class="card-img-top" style="object-fit: cover; height: 100%" alt="{{ $merchandise->nama }}">
        					    @endif
    					    </div>
    					     <div class="col-md-8 ps-0">
                				<div class="card-body d-flex flex-column justify-content-evenly" style="height: 100%">
                				    <div>
                					    <h5 class="card-title" style="height: 80px">{{ $merchandise->nama }}</h5>
                					</div>
            					    <div style="text-align: justify; height: 150px">
                					    {!! Str::limit($merchandise->deskripsi, 130) !!}
            					    </div>
                					<div class="d-flex justify-content-between">
                					    @if ($merchandise->status == 'Ready')
                                            <span class="badge rounded-pill bg-success p-2 float-end border-0">Ready</span>
                                        @elseif ($merchandise->status == 'Sold')
                                        <span class="badge rounded-pill bg-danger p-2 float-end border-0">Sold Out</span>
                                        @endif
                                        <p>Rp{{ number_format($merchandise->harga, 0, ',', '.') }}</p>
                					</div>
            					</div>
        					</div>
    					</div>
    				</div>
				</a>
			</div>
			@empty
			<div class="col-lg-12 p-2">
				<div class="card">
					Tidak Ada Merchandise
				</div>
			</div>
			@endforelse
		</div>
	</div>
</section>
<!-- End APR Section -->
@endsection