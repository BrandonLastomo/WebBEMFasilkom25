@extends('layouts.pkkmb')

@section('title')
PKKMB Fasilkom 2021
@endsection

@section('content')

<main id="main">

  <section id="content" class="content mt-5">
    <div class="container mt-5">
      <header class="section-header">
        <h2>Pengumpulan Tugas PKKMB 2021</h2>
      </header>

      <div class="row justify-content-center mt-3">
        <div class="col-md-8">
          @include('includes.pkkmb.flash')
          
          <div class="card px-1">
            <div class="card-body">
              <span id="formClosed" class="countdown">Waktu pengumpulan tugas telah berakhir</span>
              {!! Form::open(['route' => 'pkkmb.tugas-kelompok', 'id' => 'assignmentForm']) !!}
                <div class="row g-3">
                  <div class="col-md-6">
                    {!! Form::label('nama_kelompok', 'Nama Kelompok', ['class' => 'form-label']) !!}
                    {!! Form::text('nama_kelompok', null, ['class' => 'form-control' . ($errors->has('nama_kelompok') ? ' is-invalid' : null)]) !!}
                    @error('nama_kelompok')
                      <div class="invalid-feedback">
                        {{ $errors->first('nama_kelompok') }}
                      </div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    {!! Form::label('link_video', 'Link Video', ['class' => 'form-label']) !!}
                    {!! Form::text('link_video', null, ['class' => 'form-control' . ($errors->has('link_video') ? ' is-invalid' : null)]) !!}
                    @error('link_video')
                      <div class="invalid-feedback">
                        {{ $errors->first('link_video') }}
                      </div>
                    @enderror
                  </div>
                  <div class="col-md-12">
                    {!! Form::label('nama_anggota', 'Nama Anggota (Format: Nama - Program Studi)', ['class' => 'form-label']) !!}
                    {!! Form::textarea('nama_anggota', null, ['class' => 'form-control textarea' . ($errors->has('nama_anggota') ? ' is-invalid' : null)]) !!}
                    @error('nama_anggota')
                      <div class="invalid-feedback">
                        {{ $errors->first('nama_anggota') }}
                      </div>
                    @enderror
                  </div>
                  <span class="fw-bold">Catatan: Hanya perwakilan saja</span>
                </div>
                {!! Form::submit('Upload', ['class' => 'btn btn-modify mt-3 float-end']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

</main>
<!-- End #main -->

<script>
  $('.textarea').keypress(function(event) {
    if (event.which == 13) {
      event.stopPropagation();
    }
  });​
</script>
@endsection