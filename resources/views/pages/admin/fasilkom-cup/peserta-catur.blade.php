<div class="card">
  <div class="card-header border-0">
    <h4>Peserta {{ $turnamen->nama }}</h4>
  </div>
  <div class="card-body">
    <div class="row">

      <div class="col-md-4">
        
        <div class="row mb-3">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                Nama :
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                {{ $peserta->nama_peserta }}
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                NPM :
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                {{ $peserta->npm }}
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                Nickname :
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                {{ $peserta->nickname }}
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                Kelas :
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                {{ $peserta->kelas }}
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-4">
        <div class="row mb-3">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                Angkatan :
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                {{ $peserta->angkatan }}
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                Prodi :
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                {{ $peserta->prodi }}
              </div>
            </div>
          </div>
        </div>
        
        <div class="row mb-3">
          <div class="col-md">
            <div class="row">
              <div class="col-md">
                No. Telepon :
              </div>
            </div>
            <div class="row">
              <div class="col-md">
                {{ $peserta->no_hp_peserta }}
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-md-4">
        <div class="row">
          <div class="col-md-3">
            Foto Peserta :
          </div>
          <div class="col-md">
            <a id="pop">
              <img src="{{ asset('storage/' . $peserta->path_foto) }}" alt="{{ $peserta->nama_peserta }}" id="foto" class="img-fluid my-2 img-fcup" style="width:100%; max-width:200px">
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>