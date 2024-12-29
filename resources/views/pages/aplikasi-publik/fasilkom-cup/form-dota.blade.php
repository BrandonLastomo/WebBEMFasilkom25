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
  <div class="col-md-6 mb-2">
    {!! Form::label('angkatan', 'Angkatan', ['class' => 'mb-2']) !!}
    {!! Form::select('angkatan', $angkatan, null, ['class' => 'form-select' . ($errors->has('angkatan') ? ' is-invalid' : null)]) !!}
    @error('angkatan')
      <div class="invalid-feedback">
        {{ $errors->first('angkatan') }}
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
    {!! Form::label('npm[]', 'NPM') !!}
    {!! Form::text('npm[]', null, ['class' => 'form-control mt-2' . ($errors->has('npm.0') ? ' is-invalid' : null)]) !!}
    @error('npm.0')
      <div class="invalid-feedback">
        {{ $errors->first('npm.0') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('link_steam[]', 'Link Steam') !!}
    {!! Form::text('link_steam[]', null, ['class' => 'form-control mt-2' . ($errors->has('link_steam.0') ? ' is-invalid' : null)]) !!}
    @error('link_steam.0')
      <div class="invalid-feedback">
        {{ $errors->first('link_steam.0') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.0') ? ' is-invalid' : null)]) !!}
    @error('id_game.0')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.0') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-2">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.0') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.0')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.0') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.0') ? ' is-invalid' : null)]) !!}
    <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.0') }}</p>
  </div>
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
    {!! Form::label('npm[]', 'NPM') !!}
    {!! Form::text('npm[]', null, ['class' => 'form-control mt-2' . ($errors->has('npm.1') ? ' is-invalid' : null)]) !!}
    @error('npm.1')
      <div class="invalid-feedback">
        {{ $errors->first('npm.1') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('link_steam[]', 'Link Steam') !!}
    {!! Form::text('link_steam[]', null, ['class' => 'form-control mt-2' . ($errors->has('link_steam.1') ? ' is-invalid' : null)]) !!}
    @error('link_steam.1')
      <div class="invalid-feedback">
        {{ $errors->first('link_steam.1') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.1') ? ' is-invalid' : null)]) !!}
    @error('id_game.1')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.1') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-2">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.1') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.1')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.1') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.1') ? ' is-invalid' : null)]) !!}
    <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.1') }}</p>
  </div>
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
    {!! Form::label('npm[]', 'NPM') !!}
    {!! Form::text('npm[]', null, ['class' => 'form-control mt-2' . ($errors->has('npm.2') ? ' is-invalid' : null)]) !!}
    @error('npm.2')
      <div class="invalid-feedback">
        {{ $errors->first('npm.2') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('link_steam[]', 'Link Steam') !!}
    {!! Form::text('link_steam[]', null, ['class' => 'form-control mt-2' . ($errors->has('link_steam.2') ? ' is-invalid' : null)]) !!}
    @error('link_steam.2')
      <div class="invalid-feedback">
        {{ $errors->first('link_steam.2') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.2') ? ' is-invalid' : null)]) !!}
    @error('id_game.2')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.2') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-2">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.2') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.2')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.2') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.2') ? ' is-invalid' : null)]) !!}
    <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.2') }}</p>
  </div>
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
    {!! Form::label('npm[]', 'NPM') !!}
    {!! Form::text('npm[]', null, ['class' => 'form-control mt-2' . ($errors->has('npm.3') ? ' is-invalid' : null)]) !!}
    @error('npm.3')
      <div class="invalid-feedback">
        {{ $errors->first('npm.3') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('link_steam[]', 'Link Steam') !!}
    {!! Form::text('link_steam[]', null, ['class' => 'form-control mt-2' . ($errors->has('link_steam.3') ? ' is-invalid' : null)]) !!}
    @error('link_steam.3')
      <div class="invalid-feedback">
        {{ $errors->first('link_steam.3') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.3') ? ' is-invalid' : null)]) !!}
    @error('id_game.3')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.3') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-2">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.3') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.3')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.3') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.3') ? ' is-invalid' : null)]) !!}
    <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.3') }}</p>
  </div>
</div>
<div class="row mb-2">
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
    {!! Form::label('npm[]', 'NPM') !!}
    {!! Form::text('npm[]', null, ['class' => 'form-control mt-2' . ($errors->has('npm.4') ? ' is-invalid' : null)]) !!}
    @error('npm.4')
      <div class="invalid-feedback">
        {{ $errors->first('npm.4') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('link_steam[]', 'Link Steam') !!}
    {!! Form::text('link_steam[]', null, ['class' => 'form-control mt-2' . ($errors->has('link_steam.4') ? ' is-invalid' : null)]) !!}
    @error('link_steam.4')
      <div class="invalid-feedback">
        {{ $errors->first('link_steam.4') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('id_game[]', 'ID Game') !!}
    {!! Form::text('id_game[]', null, ['class' => 'form-control mt-2' . ($errors->has('id_game.4') ? ' is-invalid' : null)]) !!}
    @error('id_game.4')
      <div class="invalid-feedback">
        {{ $errors->first('id_game.4') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-2">
    {!! Form::label('no_hp_peserta[]', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta[]', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta.4') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta.4')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta.4') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('path_foto[]', 'Upload Foto') !!}
    {!! Form::file('path_foto[]', ['class' => 'form-control mt-2' . ($errors->has('path_foto.4') ? ' is-invalid' : null)]) !!}
    <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto.4') }}</p>
  </div>
</div>
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
    {!! Form::label('npm_peserta_cadangan', 'NPM') !!}
    {!! Form::text('npm_peserta_cadangan', null, ['class' => 'form-control mt-2' . ($errors->has('npm_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    @error('npm_peserta_cadangan')
      <div class="invalid-feedback">
        {{ $errors->first('npm_peserta_cadangan') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('link_steam_peserta_cadangan', 'Link Steam') !!}
    {!! Form::text('link_steam_peserta_cadangan', null, ['class' => 'form-control mt-2' . ($errors->has('link_steam_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    @error('link_steam_peserta_cadangan')
      <div class="invalid-feedback">
        {{ $errors->first('link_steam_peserta_cadangan') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('id_game_peserta_cadangan', 'ID Game') !!}
    {!! Form::text('id_game_peserta_cadangan', null, ['class' => 'form-control mt-2' . ($errors->has('id_game_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    @error('id_game_peserta_cadangan')
      <div class="invalid-feedback">
        {{ $errors->first('id_game_peserta_cadangan') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-2">
    {!! Form::label('no_hp_peserta_cadangan', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta_cadangan', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta_cadangan')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta_cadangan') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('path_foto_peserta_cadangan', 'Upload Foto') !!}
    {!! Form::file('path_foto_peserta_cadangan', ['class' => 'form-control mt-2' . ($errors->has('path_foto_peserta_cadangan') ? ' is-invalid' : null)]) !!}
    <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto_peserta_cadangan') }}</p>
  </div>
</div>
{!! Form::submit('Daftar', ['class' => 'btn btn-modify float-end']) !!}
{!! Form::close() !!}