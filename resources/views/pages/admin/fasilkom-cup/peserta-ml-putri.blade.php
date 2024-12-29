<div class="card">
  <div class="card-header border-0">
    <h4>{{ $tim->nama_tim }}</h4>
  </div>
  <div class="card-body">
    <div class="row mb-md-3 mb-0 mb-sm-0">
      <div class="col-md-6 mb-md-0 mb-4 mb-sm-4">
        <div class="row">
          <div class="col-md-3 mb-md-2 mb-0 mb-sm-0">
            Nama Tim <span class="d-md-none d-inline d-sm-inline">:</span>
          </div>
          <div class="col-md-9 mb-md-0 mb-3 mb-sm-3">
            <span class="d-md-inline d-none d-sm-none">:</span> {{ $tim->nama_tim }}
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-md-2 mb-0 mb-sm-0">
            Nama Ketua Tim <span class="d-md-none d-inline d-sm-inline">:</span>
          </div>
          <div class="col-md-9 mb-md-0 mb-3 mb-sm-3">
            <span class="d-md-inline d-none d-sm-none">:</span> {{ $tim->nama_ketua_tim }}
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-md-2 mb-0 mb-sm-0">
            No. Telepon <span class="d-md-none d-inline d-sm-inline">:</span>
          </div>
          <div class="col-md-9 mb-md-0 mb-3 mb-sm-3">
            <span class="d-md-inline d-none d-sm-none">:</span> {{ $tim->no_hp }}
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-md-2 mb-0 mb-sm-0">
            Angkatan <span class="d-md-none d-inline d-sm-inline">:</span>
          </div>
          <div class="col-md-9 mb-md-0 mb-3 mb-sm-3">
            <span class="d-md-inline d-none d-sm-none">:</span> {{ $tim->angkatan }}
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-md-2 mb-0 mb-sm-0">
            Turnamen <span class="d-md-none d-inline d-sm-inline">:</span>
          </div>
          <div class="col-md-9 mb-md-0 mb-3 mb-sm-3">
            <span class="d-md-inline d-none d-sm-none">:</span> {{ $tim->turnamen->nama }}
          </div>
        </div>
      </div>
    </div>

    <h6>Peserta Utama</h6>
    <div class="table-responsive mb-5">
      <table class="table table-bordered table-striped mt-2 mb-0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Peserta</th>
            <th>NPM</th>
            <th>Nickname</th>
            <th>ID Game</th>
            <th>No. Telepon</th>
            <th>Foto Peserta</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pesertas as $peserta)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $peserta->nama_peserta }}</td>
              <td>{{ $peserta->npm }}</td>
              <td>{{ $peserta->nickname }}</td>
              <td>{{ $peserta->id_game }}</td>
              <td>{{ $peserta->no_hp_peserta }}</td>
              <td>
                <a id="pop{{ $loop->iteration }}">
                  <img src="{{ asset('storage/' . $peserta->path_foto) }}" alt="{{ $peserta->nama_peserta }}" id="foto{{ $loop->iteration }}" class="img-fluid my-2 img-fcup" style="width:100%; max-width:100px">
                </a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="8" align="center">Tidak ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <h6>Peserta Cadangan</h6>
    <div class="table-responsive">
      <table class="table table-bordered table-striped mt-2 mb-0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Peserta</th>
            <th>NPM</th>
            <th>Link Steam</th>
            <th>ID Game</th>
            <th>No. Telepon</th>
            <th>Foto Peserta</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>{{ $peserta_cadangan->nama_peserta_cadangan }}</td>
            <td>{{ $peserta_cadangan->npm_peserta_cadangan }}</td>
            <td>{{ $peserta_cadangan->nickname_peserta_cadangan }}</td>
            <td>{{ $peserta_cadangan->id_game_peserta_cadangan }}</td>
            <td>{{ $peserta_cadangan->no_hp_peserta_cadangan }}</td>
            <td>
              <a id="pop">
                <img src="{{ asset('storage/' . $peserta_cadangan->path_foto_peserta_cadangan) }}" alt="{{ $peserta_cadangan->nama_peserta_cadangan }}" id="foto" class="img-fluid my-2 img-fcup" style="width:100%; max-width:100px">
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>