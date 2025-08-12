<!-- ======= Header ======= -->
<header id="header" class="header fixed-top border-0">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="logo-container">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ url('frontend/assets/img/logo-kabinet/logo-navbar.png') }}" alt="" width="80px">
            </a>
        </div>

        <nav id="navbar" class="navbar">
            <ul class="menu">
                <li class="dropdown"><a href="#"><i class="bi bi-people mx-2" style="font-size: 1rem"></i><span>
                            Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('visimisi') }}">Visi Misi</a></li>
                        <li><a href="{{ route('struktur') }}">Struktur Organisasi</a></li>
                        <li><a href="{{ route('filosofi') }}">Logo</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="{{ route('news') }}"><i class="bi bi-newspaper mx-2"
                            style="font-size: 1rem"></i><span>Fasilkom News</span><i class=" bi bi-chevron-down"
                            style="visibility: hidden"></i></a></li>
                <li><a class="nav-link" href="{{ route('kontak') }}"><i class="bi bi-envelope-open mx-2"
                            style="font-size: 1rem"></i><span>Kontak</span><i class=" bi bi-chevron-down"
                            style="visibility: hidden"></i></a></li>
                <li><a class="nav-link" href="{{ route('aplikasi') }}"><i class="bi bi-app-indicator mx-2"
                            style="font-size: 1rem"></i><span>Aplikasi Publik</span><i class=" bi bi-chevron-down"
                            style="visibility: hidden"></i></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- End Navbar -->
    </div>
</header>
<!-- End Header -->
