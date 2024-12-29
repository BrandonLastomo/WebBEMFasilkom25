@extends('layouts.pkkmb')

@section('title')
PKKMB Fasilkom 2021
@endsection

@section('content')

<main id="main">

  <section id="content" class="content mt-5">
    <div class="container mt-5">
      <header class="section-header">
        <h2>Rundown Acara</h2>
      </header>
      <div class="row mt-3">
        <div class="col-md">
          <div class="horizontal-timeline" id="rundown">
            <div class="events-content">
              <ol>
                @foreach ($rundowns as $rundown)
                  <li data-horizontal-timeline='{"date": "{{ $rundown->jam }}"}'>
                    {!! $rundown->deskripsi !!}
                  </li>
                @endforeach
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- End #main -->

<script>
  $('.events-content li:first').addClass('selected');
</script>
@endsection