@extends('layouts.app')

@section('title')
Badan Pengurus Harian | Kabinet Kartalasatya
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
          <img src="{{ url('frontend/assets/img/default-2.jpg') }}" alt="" width="400px" height="230px" class="img-thumbnail">
        </div>
      </div>

      <div class="row justify-content-center text-center m-5">
        <div class="col-md-auto mb-3">
          <h3>Ketua & Wakil Ketua</h3>
        </div>
      </div>

      <div class="row justify-content-center text-center m-5">
        
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Ketua Umum</h4>
                @foreach ($pengurus as $item)
                  @if ($item->jabatan == 'Ketua Umum')
                    <p>{{ $item->nama }}</p>
                  @endif
                @endforeach
                {{-- <p>Ginal Fikri Al Hakim</p> --}}
              </div>
            </div>
          </div>
        
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Wakil Ketua</h4>
                @foreach ($pengurus as $item)
                  @if ($item->jabatan == 'Wakil Ketua')
                    <p>{{ $item->nama }}</p>
                  @endif
                @endforeach
                {{-- <p>Muhammad Rizal V.</p> --}}
              </div>
            </div>
          </div>

      </div>

      <hr>

      <div class="row justify-content-center text-center m-5">
        <div class="col-md-auto mb-3">
          <h3>Sekretaris</h3>
        </div>
      </div>

      <div class="row justify-content-center text-center m-5">
        
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Sekretaris Umum</h4>
                @foreach ($pengurus as $item)
                  @if ($item->jabatan == 'Sekretaris Umum')
                    <p>{{ $item->nama }}</p>
                  @endif
                @endforeach
                {{-- <p>Eno Hakimah K. D.</p> --}}
              </div>
            </div>
          </div>
        
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Wakil Sekretaris</h4>
                @foreach ($pengurus as $item)
                  @if ($item->jabatan == 'Wakil Sekretaris')
                    <p>{{ $item->nama }}</p>
                  @endif
                @endforeach
                {{-- <p>Nur Rizqi Alfiah</p> --}}
              </div>
            </div>
          </div>

      </div>

      <hr>

      <div class="row justify-content-center text-center m-5">
        <div class="col-md-auto mb-3">
          <h3>Bendahara</h3>
        </div>
      </div>

      <div class="row justify-content-center text-center m-5">
        
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Bendahara Umum</h4>
                @foreach ($pengurus as $item)
                  @if ($item->jabatan == 'Bendahara Umum')
                    <p>{{ $item->nama }}</p>
                  @endif
                @endforeach
                {{-- <p>Virgaria Zuliana</p> --}}
              </div>
            </div>
          </div>
        
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h4>Wakil Bendahara</h4>
                @foreach ($pengurus as $item)
                  @if ($item->jabatan == 'Wakil Bendahara')
                    <p>{{ $item->nama }}</p>
                  @endif
                @endforeach
                {{-- <p>Bonita Pebrianti W. W.</p> --}}
              </div>
            </div>
          </div>

      </div>

    </div>

  </section>
  <!-- End BPH Section -->
@endsection