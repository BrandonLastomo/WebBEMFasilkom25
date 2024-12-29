<div class="table-responsive">
  <table class="table table-bordered table-striped mb-0">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Peserta</th>
        <th>NPM</th>
        <th>No. Telepon</th>
        <th>Detail</th>
        {{-- @can('Edit_Fcup')
          <th>Aksi</th>
        @endcan --}}
      </tr>
    </thead>
    <tbody>
      @forelse ($pesertas as $peserta)
        <tr>
          <td>{{ $loop->iteration + $pesertas->firstItem() - 1 }}</td>
          <td>{{ $peserta->nama_peserta }}</td>
          <td>{{ $peserta->npm }}</td>
          <td>{{ $peserta->no_hp_peserta }}</td>
          <td>
            <a href="{{ route('fcup.individu', [$turnamen->slug, $peserta->id]) }}" class="btn btn-info btn-action"><i class="far fa-eye"></i></a>
          </td>
          {{-- @can('Edit_Fcup')
            <td>
              @can('Edit_Fcup') 
                <a href="{{ route('fcup.edit', $tim->id) }}" class="btn btn-warning btn-action mr-1"><i class="fas fa-pencil-alt"></i></a>
              @endcan

              @can('Hapus_Fcup')
                <a href="{{ route('fcup.delete', $tim->id) }}" class="btn btn-danger btn-action" data-confirm="Apakah Anda Yakin?|Tindakan ini tidak bisa dibatalkan. Apakah Anda ingin melanjutkan?"><i class="fas fa-trash"></i></a>
              @endcan
            </td>
          @endcan --}}
        </tr>
      @empty
        <tr>
          <td colspan="8" align="center">Tidak ada data</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

{{-- <div class="row turnamen-individu">
  <div class="col-md-6">
    <div class="card">
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
                    Lorem ipsum dolor sit amet.
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
                    Lorem ipsum dolor sit amet.
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
                    Lorem ipsum dolor sit amet.
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
                    Lorem ipsum dolor sit amet.
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
                    Lorem ipsum dolor sit amet.
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
                    Lorem ipsum dolor sit amet.
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
                    Lorem ipsum dolor sit amet.
                  </div>
                </div>

              </div>
            </div>

          </div>

          <div class="col-md-4">

            <div class="row">
              <div class="col-md">
                Foto Peserta :
              </div>
            </div>

          </div>

        </div>
        
      </div>
    </div>
  </div>
</div> --}}