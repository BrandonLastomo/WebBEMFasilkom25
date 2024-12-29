@foreach ($pengurus as $item)

    @if (($item->jabatan == $jabatan) && ($item->departemen->nama == $departemen))
        <div class="col-md-3" style="overflow: hidden">
            <img src="{{ url('frontend/assets/img/foto_profile/individu/' . strtolower(str_replace(' ', '-', $item->nama)) . '.png') }}"
                alt="" class="img-thumbnail" style="width: 800px; height: auto; min-width:250px; min-height:170px">
            <div class="card">
                <div class="card-body">
                    <h4>Anggota</h4>
                    <p>{{$item->nama}}</p>
                </div>
            </div>
        </div>
    @endif

@endforeach

