{!! Form::open(['route' => ['fasilkom-cup.store', $turnamen->slug], 'enctype' => 'multipart/form-data']) !!}
{!! Form::hidden('id_turnamen', $turnamen->id) !!}
{!! Form::hidden('nama_turnamen', $turnamen->nama) !!}
<div class="row mb-2">
  <div class="col-md-6 mb-2">
    {!! Form::label('nama_tim', 'Nama Tim') !!}
    {!! Form::text('nama_tim', null, ['class' => 'form-control mt-2' . ($errors->has('nama_tim') ? ' is-invalid' : null)]) !!}
    @error('nama_tim')
      <div class="invalid-feedback">
        {{ $errors->first('nama_tim') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('nama_ketua_tim', 'Nama Ketua Tim') !!}
    {!! Form::text('nama_ketua_tim', null, ['class' => 'form-control mt-2' . ($errors->has('nama_ketua_tim') ? ' is-invalid' : null)]) !!}
    @error('nama_ketua_tim')
      <div class="invalid-feedback">
        {{ $errors->first('nama_ketua_tim') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-2">
    {!! Form::label('no_hp', 'No. Telepon') !!}
    {!! Form::text('no_hp', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp') ? ' is-invalid' : null)]) !!}
    @error('no_hp')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <p class="text-muted" style="font-size: 14px">Pemain Pertama<span style="color: red">*</span></p>
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('nama_peserta[]', 'Nama Peserta') !!}
    {!! Form::text('nama_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('nama_peserta.0') ? ' is-invalid' : null)]) !!}
    @error('nama_peserta.0')
      <div class="invalid-feedback">
        {{ $errors->first('nama_peserta.0') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('nickname[]', 'Nickname') !!}
    {!! Form::text('nickname[]', null, ['class' => 'form-control mt-2' . ($errors->has('nickname.0') ? ' is-invalid' : null)]) !!}
    @error('nickname.0')
      <div class="invalid-feedback">
        {{ $errors->first('nickname.0') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.0') ? ' is-invalid' : null)]) !!}
    @error('id_game.0')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.0') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.0') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.0')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.0') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.0') ? ' is-invalid' : null)]) !!}
  </div>
  <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.0') }}</p>
</div>
<div class="row mb-2">
  <p class="text-muted" style="font-size: 14px">Pemain Kedua<span style="color: red">*</span></p>
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('nama_peserta[]', 'Nama Peserta') !!}
    {!! Form::text('nama_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('nama_peserta.1') ? ' is-invalid' : null)]) !!}
    @error('nama_peserta.1')
      <div class="invalid-feedback">
        {{ $errors->first('nama_peserta.1') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('nickname[]', 'Nickname') !!}
    {!! Form::text('nickname[]', null, ['class' => 'form-control mt-2' . ($errors->has('nickname.1') ? ' is-invalid' : null)]) !!}
    @error('nickname.1')
      <div class="invalid-feedback">
        {{ $errors->first('nickname.1') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.1') ? ' is-invalid' : null)]) !!}
    @error('id_game.1')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.1') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.1') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.1')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.1') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.1') ? ' is-invalid' : null)]) !!}
  </div>
  <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.1') }}</p>
</div>
<div class="row mb-2">
  <p class="text-muted" style="font-size: 14px">Pemain Ketiga<span style="color: red">*</span></p>
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('nama_peserta[]', 'Nama Peserta') !!}
    {!! Form::text('nama_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('nama_peserta.2') ? ' is-invalid' : null)]) !!}
    @error('nama_peserta.2')
      <div class="invalid-feedback">
        {{ $errors->first('nama_peserta.2') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('nickname[]', 'Nickname') !!}
    {!! Form::text('nickname[]', null, ['class' => 'form-control mt-2' . ($errors->has('nickname.2') ? ' is-invalid' : null)]) !!}
    @error('nickname.2')
      <div class="invalid-feedback">
        {{ $errors->first('nickname.2') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.2') ? ' is-invalid' : null)]) !!}
    @error('id_game.2')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.2') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.2') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.2')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.2') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.2') ? ' is-invalid' : null)]) !!}
  </div>
  <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.2') }}</p>
</div>
<div class="row mb-2">
  <p class="text-muted" style="font-size: 14px">Pemain Keempat<span style="color: red">*</span></p>
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('nama_peserta[]', 'Nama Peserta') !!}
    {!! Form::text('nama_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('nama_peserta.3') ? ' is-invalid' : null)]) !!}
    @error('nama_peserta.3')
      <div class="invalid-feedback">
        {{ $errors->first('nama_peserta.3') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('nickname[]', 'Nickname') !!}
    {!! Form::text('nickname[]', null, ['class' => 'form-control mt-2' . ($errors->has('nickname.3') ? ' is-invalid' : null)]) !!}
    @error('nickname.3')
      <div class="invalid-feedback">
        {{ $errors->first('nickname.3') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.3') ? ' is-invalid' : null)]) !!}
    @error('id_game.3')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.3') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.3') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.3')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.3') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.3') ? ' is-invalid' : null)]) !!}
  </div>
  <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.3') }}</p>
</div>
{{-- <div class="row mb-2">
  <p class="text-muted" style="font-size: 14px">Pemain Kelima<span style="color: red">*</span></p>
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('nama_peserta[]', 'Nama Peserta') !!}
    {!! Form::text('nama_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('nama_peserta.4') ? ' is-invalid' : null)]) !!}
    @error('nama_peserta.4')
      <div class="invalid-feedback">
        {{ $errors->first('nama_peserta.4') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('nickname[]', 'Nickname') !!}
    {!! Form::text('nickname[]', null, ['class' => 'form-control mt-2' . ($errors->has('nickname.4') ? ' is-invalid' : null)]) !!}
    @error('nickname.4')
      <div class="invalid-feedback">
        {{ $errors->first('nickname.4') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.4') ? ' is-invalid' : null)]) !!}
    @error('id_game.4')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.4') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.4') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.4')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.4') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.4') ? ' is-invalid' : null)]) !!}
  </div>
  <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.4') }}</p>
</div> --}}
<div class="row mb-2">
  <p class="text-muted" style="font-size: 14px">Pemain Cadangan<span style="color: red">*</span></p>
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('nama_peserta_cadangan', 'Nama Peserta') !!}
    {!! Form::text('nama_peserta_cadangan', null, ['class' => 'form-control mt-2' . ($errors->has('nama_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    @error('nama_peserta_cadangan')
      <div class="invalid-feedback">
        {{ $errors->first('nama_peserta_cadangan') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('nickname_peserta_cadangan', 'Nickname') !!}
    {!! Form::text('nickname_peserta_cadangan', null, ['class' => 'form-control mt-2' . ($errors->has('nickname_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    @error('nickname_peserta_cadangan')
      <div class="invalid-feedback">
        {{ $errors->first('nickname_peserta_cadangan') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('id_game_peserta_cadangan', 'ID Game') !!}
    {!! Form::text('id_game_peserta_cadangan', null, ['class' => 'form-control mt-2' . ($errors->has('id_game_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    @error('id_game_peserta_cadangan')
      <div class="invalid-feedback">
        {{ $errors->first('id_game_peserta_cadangan') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('no_hp_peserta_cadangan', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta_cadangan', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta_cadangan')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta_cadangan') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('path_foto_peserta_cadangan', 'Upload Foto') !!}
    {!! Form::file('path_foto_peserta_cadangan', ['class' => 'form-control mt-2' . ($errors->has('path_foto_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto_peserta_cadangan') }}</p>
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('path_bukti_pembayaran', 'Upload Bukti Pembayaran') !!}
    {!! Form::file('path_bukti_pembayaran', ['class' => 'form-control mt-2' . ($errors->has('path_bukti_pembayaran') ? ' is-invalid' : null)]) !!}
    @error('path_bukti_pembayaran')
      <div class="invalid-feedback">
        {{ $errors->first('path_bukti_pembayaran') }}
      </div>
    @enderror
  </div>
</div>
{!! Form::submit('Daftar', ['class' => 'btn btn-modify float-end']) !!}
{!! Form::close() !!}