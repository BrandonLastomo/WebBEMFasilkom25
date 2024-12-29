{!! Form::open(['route' => ['fasilkom-cup.store', $turnamen->slug], 'enctype' => 'multipart/form-data']) !!}
{!! Form::hidden('id_turnamen', $turnamen->id) !!}
{!! Form::hidden('nama_turnamen', $turnamen->nama) !!}
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('nama_peserta', 'Nama Peserta') !!}
    {!! Form::text('nama_peserta', null, ['class' => 'form-control mt-2' . ($errors->has('nama_peserta') ? ' is-invalid' : null)]) !!}
    @error('nama_peserta')
      <div class="invalid-feedback">
        {{ $errors->first('nama_peserta') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('npm', 'NPM') !!}
    {!! Form::text('npm', null, ['class' => 'form-control mt-2' . ($errors->has('npm') ? ' is-invalid' : null)]) !!}
    @error('npm')
      <div class="invalid-feedback">
        {{ $errors->first('npm') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('nickname', 'Nickname') !!}
    {!! Form::text('nickname', null, ['class' => 'form-control mt-2' . ($errors->has('nickname') ? ' is-invalid' : null)]) !!}
    @error('nickname')
      <div class="invalid-feedback">
        {{ $errors->first('nickname') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('kelas', 'Kelas') !!}
    {!! Form::text('kelas', null, ['class' => 'form-control mt-2' . ($errors->has('kelas') ? ' is-invalid' : null)]) !!}
    @error('kelas')
      <div class="invalid-feedback">
        {{ $errors->first('kelas') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-2">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('angkatan', 'Angkatan', ['class' => 'mb-2']) !!}
    {!! Form::select('angkatan', $angkatan, null, ['class' => 'form-select' . ($errors->has('angkatan') ? ' is-invalid' : null)]) !!}
    @error('angkatan')
      <div class="invalid-feedback">
        {{ $errors->first('angkatan') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('prodi', 'Prodi', ['class' => 'mb-2']) !!}
    {!! Form::select('prodi', $prodi, null, ['class' => 'form-select' . ($errors->has('prodi') ? ' is-invalid' : null)]) !!}
    @error('prodi')
      <div class="invalid-feedback">
        {{ $errors->first('prodi') }}
      </div>
    @enderror
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-6 mb-md-0 mb-2 mb-sm-2">
    {!! Form::label('no_hp_peserta', 'No. Telepon') !!}
    {!! Form::text('no_hp_peserta', null, ['class' => 'form-control mt-2' . ($errors->has('no_hp_peserta') ? ' is-invalid' : null)]) !!}
    @error('no_hp_peserta')
      <div class="invalid-feedback">
        {{ $errors->first('no_hp_peserta') }}
      </div>
    @enderror
  </div>
  <div class="col-md-6">
    {!! Form::label('path_foto', 'Upload Foto') !!}
    {!! Form::file('path_foto', ['class' => 'form-control mt-2' . ($errors->has('path_foto') ? ' is-invalid' : null)]) !!}
    <p class="text-danger mt-1" style="font-size: .875em">{{ $errors->first('path_foto') }}</p>
  </div>
</div>
{!! Form::submit('Daftar', ['class' => 'btn btn-modify float-end']) !!}
{!! Form::close() !!}