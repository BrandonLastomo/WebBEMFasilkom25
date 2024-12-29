<div class="col-md-3">
    @foreach ($pengurus as $item)
        @if ($item->jabatan == $jabatan)
            <img src="{{ url('frontend/assets/img/foto_profile/individu/' . strtolower(str_replace(' ', '-', $item->nama)) . '.png') }}" alt="" class="img-thumbnail">
            
            <div class="card">
                <div class="card-body">
                    <h4>{{ $jabatan }}</h4>
                    <p>{{ $item->nama }}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>
