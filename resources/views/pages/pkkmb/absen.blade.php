@extends('layouts.pkkmb')

@section('title')
PKKMB Fasilkom 2021
@endsection

@section('content')

<main id="main">

  <section id="content" class="content mt-5">
    <div class="container mt-5">
      <header class="section-header">
        <h2>Absen PKKMB 2021</h2>
      </header>
      <div class="row justify-content-center mt-3">

        <div class="col-md-6">

          <nav>
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-first-tab" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">Hari Pertama</button>
              <button class="nav-link" id="nav-second-tab" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">Hari Kedua</button>
            </div>
          </nav>
          
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
              <div class="card card-attendance">
                <div class="card-header border-0 p-3 text-center">
                  <h6 class="before-attendance before-attendance-1 m-0 {{ (empty($maba->absen_hari_pertama) ? '' : 'd-none') }}">Kamu harus absen terlebih dahulu untuk mendapatkan link Zoom</h6>
                  <h6 class="after-attendance after-attendance-1 {{ (empty($maba->absen_hari_pertama) ? '' : 'm-0 d-inline') }}">Silakan masuk ke dalam Zoom Meeting</h6>
                </div>
                <div class="card-body attendance-1 px-4">
                  <span id="firstCountdownText" class="countdown"></span>
                  <span id="firstCountdown" class="countdown"></span>
                  {!! Form::open(['route' => 'pkkmb.save', 'method' => 'put', 'id' => 'formAttendance1', 'class' => 'form-attendance form-attendance-1', 'enctype' => 'multipart/form-data']) !!}
                    <div class="mb-3">
                      {!! Form::label('absen_hari_pertama', 'Absen', ['class' => 'form-label label-attendance-1' . (empty($maba->absen_hari_pertama) ? '' : ' d-none')]) !!}
                      {!! Form::datetime('absen_hari_pertama', date('Y-m-d H:i'), ['class' => 'form-control bg-white input-attendance-1' . (empty($maba->absen_hari_pertama) ? '' : ' d-none'), 'id' => 'attendance1', 'readonly']) !!}
                      <i class="bi-calendar4-week calendar-icon calendar-icon-1 {{ (empty($maba->absen_hari_pertama) ? '' : 'd-none') }}"></i>
                    </div>
                    <div class="mb-3">
                      {!! Form::label('nama_kelompok', 'Nama Kelompok', ['class' => 'form-label label-group-1' . (empty($maba->nama_kelompok) ? '' : ' d-none')]) !!}
                      {!! Form::text('nama_kelompok', null, ['class' => 'form-control input-group-1' . (empty($maba->nama_kelompok) ? '' : ' d-none'), 'id' => 'group1']) !!}
                      <span class="text-danger error-text nama_kelompok_error"></span>
                    </div>
                    <div class="mb-3">
                      {!! Form::label('foto_hari_pertama', 'Bukti Kehadiran', ['class' => 'form-label label-photo-1' . (empty($maba->foto_hari_pertama) ? '' : ' d-none')]) !!}
                      {!! Form::file('foto_hari_pertama', ['class' => 'form-control input-photo-1' . (empty($maba->foto_hari_pertama) ? '' : ' d-none'), 'id' => 'photo1']) !!}
                      <span class="text-danger error-text foto_hari_pertama_error"></span>
                      <p class="note note-1 {{ (empty($maba->foto_hari_pertama) ? '' : 'd-none') }}">Catatan: Foto harus menggunakan atribut PKKMB dan foto bibit tanaman</p>
                    </div>
                    <div class="text-center {{ (empty($maba->foto_hari_pertama) ? 'mb-4' : '') }}">
                      <a href="https://bit.ly/3DU5btn" target="_blank" class="link-zoom link-zoom-1 {{ (!empty($maba->absen_hari_pertama) ? 'd-block' : '') }}">Zoom Meeting</a>
                      <p class="link-zoom link-zoom-1 {{ (!empty($maba->absen_hari_pertama) ? 'd-inline-block' : '') }}">Passcode: PKKMB</p>
                    </div>
                    {!! Form::submit((empty($maba->absen_hari_pertama) ? 'Absen' : 'Sudah absen'), ['class' => 'btn btn-grad ' . (empty($maba->absen_hari_pertama) ? '' : 'mt-3 disabled'), 'id' => 'btnAttendance1', 'name' => 'btn']) !!}
                  {!! Form::close() !!}
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
              <div class="card card-attendance">
                <div class="card-header border-0 p-3 text-center">
                  <h6 class="before-attendance before-attendance-2 m-0 {{ (empty($maba->absen_hari_kedua) ? '' : 'd-none') }}">Kamu harus absen terlebih dahulu untuk mendapatkan link Zoom</h6>
                  <h6 class="after-attendance after-attendance-2 {{ (empty($maba->absen_hari_kedua) ? '' : 'm-0 d-inline') }}">Silakan masuk ke dalam Zoom Meeting</h6>
                </div>
                <div class="card-body attendance-2 px-4">
                  <span id="secondCountdownText" class="countdown"></span>
                  <span id="secondCountdown" class="countdown"></span>
                  {!! Form::open(['route' => 'pkkmb.save', 'method' => 'put', 'id' => 'formAttendance2', 'class' => 'form-attendance form-attendance-2', 'enctype' => 'multipart/form-data']) !!}
                    <div class="mb-3">
                      {!! Form::label('absen_hari_kedua', 'Absen', ['class' => 'form-label label-attendance-2' . (empty($maba->absen_hari_kedua) ? '' : ' d-none')]) !!}
                      {!! Form::datetime('absen_hari_kedua', date('Y-m-d H:i'), ['class' => 'form-control bg-white input-attendance-2' . (empty($maba->absen_hari_kedua) ? '' : ' d-none'), 'id' => 'attendance2', 'readonly']) !!}
                      <i class="bi-calendar4-week calendar-icon calendar-icon-2 {{ (empty($maba->absen_hari_kedua) ? '' : 'd-none') }}"></i>
                    </div>
                    <div class="mb-3">
                      {!! Form::label('nama_kelompok', 'Nama Kelompok', ['class' => 'form-label label-group-2' . (empty($maba->nama_kelompok) ? '' : ' d-none')]) !!}
                      {!! Form::text('nama_kelompok', (empty($maba->nama_kelompok) ? '' : $maba->nama_kelompok), ['class' => 'form-control input-group-2' . (empty($maba->nama_kelompok) ? '' : ' d-none'), 'id' => 'group2', 'readonly']) !!}
                      <span class="text-danger error-text nama_kelompok_error"></span>
                    </div>
                    <div class="mb-3">
                      {!! Form::label('foto_hari_kedua', 'Bukti Kehadiran', ['class' => 'form-label label-photo-2' . (empty($maba->foto_hari_kedua) ? '' : ' d-none')]) !!}
                      {!! Form::file('foto_hari_kedua', ['class' => 'form-control input-photo-2' . (empty($maba->foto_hari_kedua) ? '' : ' d-none'), 'id' => 'photo2']) !!}
                      <span class="text-danger error-text foto_hari_kedua_error"></span>
                      <p class="note note-2 {{ (empty($maba->foto_hari_kedua) ? '' : 'd-none') }}">Catatan: Foto harus menggunakan atribut PKKMB dan foto bibit tanaman</p>
                    </div>
                    <div class="text-center {{ (empty($maba->foto_hari_pertama) ? 'mb-4' : '') }}">
                      <a href="https://bit.ly/3DU5btn" target="_blank" class="link-zoom link-zoom-2 {{ (!empty($maba->absen_hari_kedua) ? 'd-block' : '') }}">Zoom Meeting</a>
                      <p class="link-zoom link-zoom-2 {{ (!empty($maba->absen_hari_kedua) ? 'd-inline-block' : '') }}">Passcode: PKKMB</p>
                    </div>
                    {!! Form::submit((empty($maba->absen_hari_kedua) ? 'Absen' : 'Sudah absen'), ['class' => 'btn btn-grad' . (empty($maba->absen_hari_kedua) ? '' : ' mt-3 disabled'), 'id' => 'btnAttendance2', 'name' => 'btn']) !!}
                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

</main>

<script>
  $(function () {
    for (let i = 1; i <= 2; i++) {
      $('#formAttendance' + i).submit(function (e) { 
        e.preventDefault();
        
        let form = this;
        let before = $('.before-attendance-' + i);
        let after = $('.after-attendance-' + i);
        let labelAbsen = $('.label-attendance-' + i);
        let inputAbsen = $('.input-attendance-' + i);
        let labelNamaKelompok = $('.label-group-' + i);
        let inputNamaKelompok = $('.input-group-' + i);
        let labelFoto = $('.label-photo-' + i);
        let inputFoto = $('.input-photo-' + i);
        let note = $('.note-' + i);
        let icon = $('.calendar-icon-' + i);
        let link = $('.link-zoom-' + i);
  
        $.ajax({
          type: $(form).attr('method'),
          url: $(form).attr('action'),
          data: new FormData(form),
          dataType: 'json',
          processData: false,
          contentType: false,
          beforeSend: function () {
            $(form).find('span.error-text').text('');
          },
          success: function (data) {
            if (data.code == 0) {
              $.each(data.error, function (prefix, val) { 
                $(form).find('span.' + prefix + '_error').text(val[0]);
              });
            } else {
              window.open('https://bit.ly/3DU5btn', '_blank');
              $(form)[0].reset();
              
              $("#btnAttendance" + i).val('Sudah absen');
              $("#btnAttendance" + i).attr("disabled", true);
    
              before.addClass('fadeOut');
              after.show();
              inputAbsen.hide();
              labelAbsen.hide();
              inputNamaKelompok.hide();
              labelNamaKelompok.hide();
              inputFoto.hide();
              labelFoto.hide();
              note.hide();
              icon.hide();
              link.show();
            }
          }
        });
      });
    }
  });
</script>
<!-- End #main -->
@endsection