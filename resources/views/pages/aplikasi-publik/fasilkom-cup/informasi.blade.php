@extends('layouts.app')

@section('title')
Fasilkom Cup | Kabinet {{env('KABINET');}}
@endsection

@section('content')
<section id="fasilkom-cup" class="fasilkom-cup mt-5">
	<div class="container">
		<header class="section-header mt-5 fw-bold">
			<p class="mb-4">Fasilkom Cup 2021</p>
		</header>
		<div class="row g-4 justify-content-center text-center">
      <div class="col-md-6">
        <div class="card border-0">
          <div class="card-header p-2 pt-3 bg-white border-0">
            <h4 style="color: #19a34c">Pendaftaran Berhasil</h4>
          </div>
          <div class="card-body">
            <p>Klik tombol di bawah ini untuk bergabung di grup WhatsApp untuk informasi lebih lanjut.</p>
            @switch($turnamen)
              @case('Mobile Legend')
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
                @break
              @case('PUBG')
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
                @break
              @case('Mobile Legend (P)')
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
                @break
              @case('Magic Chess')
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
                @break
              @case('Catur Putra')
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
                @break
              @case('Catur Putri')
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
                @break
              @case('Valorant')
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
                @break
              @case('Point Blank')
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
                @break
              @default
                <a href="#" class="btn btn-modify"><i class="fab fa-whatsapp" style="font-size: 18px; position: relative; top: 1px"></i> Gabung grup</a>
            @endswitch
          </div>
        </div>
			</div>
		</div>
	</div>
</section>
@endsection