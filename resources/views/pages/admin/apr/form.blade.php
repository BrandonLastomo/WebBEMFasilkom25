@extends('layouts.admin')

@section('title')
  Dashboard - Advocacy Progress Report
@endsection

@section('content')
  @php
      $formTitle = !empty($report) ? 'Edit' : 'Tambah';
      $formButton = !empty($report) ? 'Edit' : 'Tambah';
  @endphp

  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Advocacy Progress Report</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></div>
          <div class="breadcrumb-item active"><a href="{{ route('apr.index') }}">Advocacy Progress Report</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header border-0">
              <h4>{{ $formTitle }} Advokasi</h4>
            </div>
            <div class="card-body">
              @if (!empty($report))
                {!! Form::model($report, ['route' => ['apr.update', $report->id], 'method' => 'PUT', 'class' => 'needs-validation', 'enctype' => 'multipart/form-data', 'novalidate']) !!}
                {!! Form::hidden('id') !!}
              @else
                {!! Form::open(['route' => 'apr.store', 'class' => 'needs-validation', 'novalidate' => '', 'enctype' => 'multipart/form-data']) !!}
              @endif
              <div class="row">
                <div class="col-12">
                  <div class="form-group row mb-4">
                    {!! Form::label('nama', 'Nama Advokasi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::text('nama', null, ['class' => 'form-control', 'required' => '']) !!}
                      <div class="invalid-feedback">
                        Judul harus diisi.
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::textarea('deskripsi', null, ['class'=>'summernote']) !!}
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                        <label for="kategori" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori Pengaduan</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" id="kategori" aria-label="Floating label select example" name="kategori">
                                <option value="sistem" {{ (!empty($report) && $report->kategori == 'sistem') ? 'selected' : '' }}>Sistem</option>
                                <option value="rektorat" {{ (!empty($report) && $report->kategori == 'rektorat') ? 'selected' : '' }}>Rektorat</option>
                                <option value="infrastruktur" {{ (!empty($report) && $report->kategori == 'infrastruktur') ? 'selected' : '' }}>Infrastruktur</option>
                                <option value="perkuliahan dan akademis" {{ (!empty($report) && $report->kategori == 'perkuliahan dan akademis') ? 'selected' : '' }}>Perkuliahan & Akademis</option>
                                <option value="event" {{ (!empty($report) && $report->kategori == 'event') ? 'selected' : '' }}>Event</option>
                                <option value="ormawa" {{ (!empty($report) && $report->kategori == 'ormawa') ? 'selected' : '' }}>Ormawa</option>
                                <option value="lainya" {{ (!empty($report) && $report->kategori == 'lainya') ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>
                    </div>

                  
                  <div class="form-group row mb-4">
                    {!! Form::label('status', 'Status', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                      {!! Form::select('status', $status, null, ['class' => 'form-control selectric', 'placeholder' => 'Pilih Status']) !!}
                    </div>
                  </div>
                  
                 <div class="form-group row mb-4">
                    {!! Form::label('image', 'Thumbnail', ['class' => 'col-form-label text-md-right col-12 col-md-3 col-lg-3']) !!}
                    <div class="col-sm-12 col-md-7">
                        {!! Form::hidden('path') !!}
                        {!! Form::file('image') !!}
                      <p class="text-danger mt-2">{{ $errors->first('image') }}</p>
                    </div>
                  </div>
                  
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">{{ $formButton }}</button>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              {!! Form::close() !!}
            
            <!--<div class="card-body">-->
            <!--    <form action="{{route('apr.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>-->
            <!--      @csrf-->
            <!--      <div class="row">-->
            <!--        <div class="col-12">-->
            <!--          <div class="form-group row mb-4">-->
            <!--            <label for="nama" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Advokasi</label>-->
            <!--            <div class="col-sm-12 col-md-7">-->
            <!--              <input type="text" name="nama" id="nama" placeholder="" class="form-control" value="{{ old('judul') }}" required autofocus>-->
            <!--            </div>-->
            <!--          </div>-->

            <!--          <div class="form-group row mb-4">-->
            <!--            <label for="deskripsi" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>-->
            <!--            <div class="col-sm-12 col-md-7">-->
            <!--              <textarea name="deskripsi" id="deskripsi" class="summernote"></textarea>-->
            <!--            </div>-->
            <!--          </div>-->

            <!--          <div class="form-group row mb-4">-->
            <!--            <label for="keterangan" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>-->
            <!--            <div class="col-sm-12 col-md-7">-->
            <!--              <input type="text" name="keterangan" id="keterangan" placeholder="" class="form-control" value="{{ old('keterangan') }}" required>-->
            <!--            </div>-->
            <!--          </div>-->

            <!--          <div class="form-group row mb-4">-->
            <!--            <label for="status" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>-->
            <!--            <div class="col-sm-12 col-md-7">-->
            <!--              <select name="status" id="status" class="form-control" required>-->
            <!--                <option selected disabled>Pilih Status</option>-->
            <!--                <option value="0">Pending</option>-->
            <!--                <option value="1">Diproses</option>-->
            <!--                <option value="2">Selesai</option>-->
            <!--                <option value="3">Ditolak</option>-->
            <!--              </select>-->
            <!--            </div>-->
            <!--          </div>-->

            <!--          <div class="form-group row mb-4">-->
            <!--            <label for="path" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>-->
            <!--            <div class="col-sm-12 col-md-7">-->
            <!--              <input type="file" name="path" id="path" required>                        -->
            <!--              </div>-->
            <!--          </div>-->

            <!--          <div class="form-group row mb-4">-->
            <!--            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>-->
            <!--            <div class="col-sm-12 col-md-7">-->
            <!--              <button type="submit" class="btn btn-primary">{{ $formButton }}</button>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!--    </form>-->
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  {{--  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: "Ketikan sesuatu disini . . .",
            height: '200',
            toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']]
            ]
        });
    });
</script>  --}}
@endsection