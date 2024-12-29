<div class="col-md-3">
    @foreach ($pengurus as $item)
        @if (($item->jabatan == $jabatan) &&  ($item->departemen->nama == $departemen))
            <img src="{{ url('frontend/assets/img/foto_profile/individu/' . strtolower(str_replace(' ', '-', $item->nama)) . '.png') }}" alt="" class="img-thumbnail">
            
            <div class="card {{$cls}}">
                <div class="card-body">
                    <h4>{{$jabatan}}</h4>
                    <p>{{ $item->nama }}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>
