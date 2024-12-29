@extends('layouts.app')

@section('title')
  Advocacy Progress Report | Kartalasatya
@endsection

@section('content')
<section id="apr" class="apr" style="margin-top: 100px">
	<div class="container">
		<header class="section-header fw-bold">
			<p>Advocacy Progress Report</p>
		</header>
          {!! Form::open(['url'=> Request::path(),'method'=>'GET','class' => 'form-inline']) !!}
          <div class="card search my-4 py-2">
           <div class="card-body px-4">
          <div class="row g-2  d-flex justify-content-center"> 
            <div class="col-md-6">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control search-box" name="q" value="{{ !empty(request()->input('q')) ? request()->input('q') : '' }}" placeholder="Cari advokasi">
                <button type="submit" class="btn btn-primary float-right btn-show"><i class="fa fa-search"></i></button>
              </div>
            </div>
            <div class="col-md-4">
              {{ Form::select('status', $status, !empty(request()->input('status')) ? request()->input('status') : null, ['placeholder' => 'Semua Status', 'class' => 'form-control selectric']) }}
            </div>
          </div>
          </div>
          </div>
          {!! Form::close() !!}
		<div class="row justify-content-center my-3">

			@forelse ($reports as $report)
			<div class="col-lg-6 my-4">
			    <a href="{{ route('apr.detail', $report->slug) }}">
    				<div class="card" style="height: 100%">
    					<div class="row">
    					    <div class="col-md-4">
    					        @if (!$report->path)
        					    <img src="https://bem.cs.unsika.ac.id/storage/uploads/apr/images/penyesuaian-ukt_1692251914.jpeg" class="card-img-top" style="object-fit: cover; height: 100%" alt="{{ $report->nama }}">
        					    @else
        					    <img src="{{ asset('storage/' . $report->path) }}" class="card-img-top" style="object-fit: cover; height: 100%" alt="{{ $report->nama }}">
        					    @endif
    					    </div>
    					     <div class="col-md-8 ps-0">
                				<div class="card-body d-flex flex-column justify-content-evenly" style="height: 100%">
                				    <div>
                					        @if ($report->statusLabel() == 'Pending')
                                        <span class="badge rounded-pill bg-info p-2 float-end border-0">Pending</span>
                                            @elseif ($report->statusLabel() == 'Diproses')
                                        <span class="badge rounded-pill bg-warning p-2 float-end border-0">Diproses</span>
                                            @elseif ($report->statusLabel() == 'Selesai')
                                        <span class="badge rounded-pill bg-success p-2 float-end border-0">Selesai</span>
                                            @elseif ($report->statusLabel() == 'Ditolak')
                                        <span class="badge rounded-pill bg-danger p-2 float-end border-0">Ditolak</span>
                                            @endif
                					    <h5 class="card-title" style="height: 80px">{{$report->nama}}</h5>
                					</div>
            					    <div style="text-align: justify; height: 150px">
                					    {!! Str::limit($report->deskripsi, 130) !!}
            					    </div>
                					<div class="d-flex justify-content-between">
                					    <p class="card-title text-uppercase">{{$report->kategori}}</p>
                					    <p class="card-title">{{$report->created_at->format('d M Y')}}</hp>
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
					Tidak Ada Berita
				</div>
			</div>
			@endforelse
		</div>
	</div>
</section>
<!-- End APR Section -->
@endsection