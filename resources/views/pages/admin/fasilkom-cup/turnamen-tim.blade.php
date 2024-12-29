<div class="table-responsive">
  <table class="table table-bordered table-striped mb-0">
    <thead>
      <tr>
        <th>#</th>
        <th>Nama Tim</th>
        <th>Nama Ketua Tim</th>
        <th>No. Telepon</th>
        <th>Detail</th>
        {{-- @can('Edit_Fcup')
          <th>Aksi</th>
        @endcan --}}
      </tr>
    </thead>
    <tbody>
      @forelse ($tims as $tim)
        <tr>
          <td>{{ $loop->iteration + $tims->firstItem() - 1 }}</td>
          <td>{{ $tim->nama_tim }}</td>
          <td>{{ $tim->nama_ketua_tim }}</td>
          <td>{{ $tim->no_hp }}</td>
          <td>
            <a href="{{ route('fcup.tim', [$turnamen->slug, $tim->id]) }}" class="btn btn-info btn-action"><i class="far fa-eye"></i></a>
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