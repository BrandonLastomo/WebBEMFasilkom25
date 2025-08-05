<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syncopate:wght@400;700&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@400;700&family=Montserrat:ital,wght@0,200;0,300;0,400;1,100;1,200;1,300;1,400&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.7.0/introjs.min.css">
  <link href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="{{ url('frontend/assets/css/game.css') }}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Favicons -->
  <link href="{{ url('frontend/assets/img/logo_22.png') }}" rel="icon">
  <link href="{{ url('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <title>Kartalasatya Game</title>
</head>

<body id="body">
  <div class="container">
    <div class="row">
      <img src="{{ url('frontend/assets/img/navbar_22.png') }}" class="logo-game">
    </div>

    <div class="wrapper fixed-bottom">
      <div class="navbar nav" id="v-pills-tab" role="tablist">

        <div class="navbar__item -blue active" id="v-pills-1" data-id="1" data-bs-toggle="pill" data-bs-target="#v-pills--1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
          <span class="navbar__icon">
            <svg class="icon">
              <i class="bi bi-house"></i>
            </svg>
          </span>
        </div>

        <div class="navbar__item -navy-blue" id="v-pills-2" data-id="2" data-bs-toggle="pill" data-bs-target="#v-pills--2" type="button" role="tab" aria-controls="v-pills-start-game" aria-selected="false">
          <span class="navbar__icon">
            <svg class="icon">
              <i class="bi bi-capslock"></i>
            </svg>
          </span>
        </div>

        <div class="navbar__item -purple" id="v-pills-3" data-id="3" data-bs-toggle="pill" data-bs-target="#v-pills--3" type="button" role="tab" aria-controls="v-pills-leaderboard" aria-selected="false">
          <span class="navbar__icon">
            <svg class="icon">
              <i class="bi bi-trophy"></i>
            </svg>
          </span>
        </div>
      </div>
    </div>


    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills--1" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="row">
          <h1 class="greeting-mobile d-lg-none">Kartalasatya Game</h1>
          <h3 class="tagline-mobile d-lg-none">Think one of the BEM Fasilkom Members. <br>
            I`ll try to guess who it is <br><br>
            <i type="button" href="#0" data-bs-toggle="modal" data-bs-target="#caraBermain" class="bi bi-info-circle d-lg-none btn-mobile"></i>
          </h3>
          <img src="{{ url('frontend/assets/img/logo-mobile@3x.png') }}" class="d-lg-none mobile">
          <div class="col-lg-6 d-flex align-items-start flex-column bd-highlight mb-3 home">
            <h1 class="greeting">Selamat Datang </h1>
            <h5 class="desc">Kartalasatya Game </h5>
            <h4 class="tagline">" Think one of the BEM Fasilkom members. <br>
              I`ll try to guess who it is .. "
            </h4>
            <button type="button" href="#0" class="btn10 cara-bermain-header" data-bs-toggle="modal" data-bs-target="#caraBermain">Cara Bermain</button>
          </div>
          <div class="col-lg-6 align-items-center">
            <div class="modal fade" id="caraBermain" aria-hidden="true" aria-labelledby="caraBermainLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="caraBermainLabel">CARA BERMAIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    1. Pikirkan salah seorang pengurus BEM Fasilkom UNSIKA {{env('KABINET_TAHUN');}}2. <br><br>
                    2. Jawab pertanyaan yang diajukan dengan jujur. <br><br>
                    3. Saya akan mencoba menebak siapa yang kamu pikirkan.
                  </div>
                  <div class="modal-footer">
                    <button class="btn10 cara-bermain m-4" data-bs-target="#caraBermain2" data-bs-toggle="modal" data-bs-dismiss="modal">FUNGSI TOMBOL</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="caraBermain2" aria-hidden="true" aria-labelledby="caraBermainLabel2" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="caraBermainLabel2">FUNGSI TOMBOL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body justify-content-center">
                    <img src="{{ url('frontend/assets/img/tombol@2x.jpg') }}">
                  </div>
                  <div class="modal-footer">
                    <button class="btn10 cara-bermain m-4" data-bs-target="#caraBermain" data-bs-toggle="modal" data-bs-dismiss="modal">CARA BERMAIN</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills--2" role="tabpanel" aria-labelledby="v-pills-start-game-tab">
        <div class="row text-center mt-5 hasil-akhir" id="restart">
          <div class="row img-game">
            <div class="col-lg-7">
              <img src="{{ url('frontend/assets/img/game-user.png') }}" class="start-game-img">
            </div>
          </div>
          <div class="row start-game">
            <div class="col-lg-7 text-center result">
              <div class="row pertanyaan position-relative">
                <h5 class="question" id="question">
                  Pikirkan salah satu pengurus BEM Fasilkom {{env('KABINET_TAHUN');}}. Jika sudah silahkan klik tombol <strong>MULAI</strong>
                </h5>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger number-question">

                </span>
              </div>
              <div class="row jawaban text-center justify-content-center mulai" id="mulai">
                <div class="col-lg-3 item-jawaban col-sm-3 text-center" id="btn-mulai">MULAI</div>
              </div>
              <div class="row jawaban text-center justify-content-center" id="mulai-jawaban">
                <div class="col-lg-3 col-sm-6 item-jawaban ya text-center" data-presentase="" data-key="hkasu26891gdjka21986">YA</div>
                <div class="col-lg-3 col-sm-6 item-jawaban tidak text-center" data-presentase="" data-key="hkasf82q64860s98dash">TIDAK</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills--3" role="tabpanel" aria-labelledby="v-pills-leaderboard-tab">
        <div class="row leaderboard-row">
          <div class="col-lg-7">
            <h2 class="greeting-papan-skor mt-3">PAPAN SKOR</h2>
            <div class="row">
              <div class="col-lg-5 p-1">
                <ul class="list-group">
                  <li class="list-group-item header-leaderboard" aria-current="true">
                    SELAMAT KEPADA
                  </li>
                  @if(!$skors->isEmpty())
                  <li class="list-group-item nama-leaderboard d-flex justify-content-center align-items-center">
                    <div class="card text-center" style="background-color: #F7F7F7;">
                      <img src="{{ url('frontend/assets/img/trophy.gif') }}" class="card-img-top winner">
                      <div class="card-body">
                        <h5 class="card-title fw-bold nama-juara">{{$skors[0]->nama}}</h5>
                        <p class="card-text label" style="font-weight: 400; font-size: 15px;">PENGURUS BEM FASILKOM YANG PALING BANYAK DIPIKIRKAN</p>
                      </div>
                    </div>
                  </li>
                  @else
                  <li class="list-group-item nama-leaderboard d-flex justify-content-center align-items-center">
                    <div class="card text-center" style="background-color: #F7F7F7;">
                      <img src="{{ url('frontend/assets/img/trophy.gif') }}" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title fw-bold">-</h5>
                        <p class="card-text" style="font-weight: 400; font-size: 15px;">Belum ada pengguna</p>
                      </div>
                    </div>
                  </li>
                  @endif
                </ul>
              </div>
              <div class="col-lg-7 p-1">
                <ul class="list-group">
                  <li class="list-group-item header-leaderboard" aria-current="true">
                    Daftar Pengurus <br> yang Paling Banyak Dipikirkan</li>

                  @forelse ($skors as $skor)
                  <li class="list-group-item nama-leaderboard d-flex justify-content-between align-items-center">
                    <strong class="no-leaderboard"><span>{{$loop->iteration}}</span></strong> {{$skor->nama}}
                    <span class="badge rounded-pill">{{$skor->skor}} x</span>
                  </li>
                  @empty
                  <li class="list-group-item nama-leaderboard d-flex justify-content-between align-items-center">
                    <strong class="no-leaderboard"><span>-</span></strong> Tidak Ada
                    <span class="badge rounded-pill">-</span>
                  </li>
                  @endforelse


                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>






  </div>




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="{{ url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.7.0/intro.min.js"></script>
  <script src="{{ url('frontend/assets/js/game.js') }}"></script>

</body>

</html>