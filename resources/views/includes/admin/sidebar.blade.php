<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mb-1">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="150">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="30">
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Menu Utama</li>
      <li class="nav-item {{ ($currentAdminMenu == 'dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi-grid"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Data</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'struktur') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-diagram-3"></i> <span>Struktur</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'bidang-departemen') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin.struktur') }}">Bidang & Departemen</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengurus') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengurus.index') }}">Pengurus</a></li>
        </ul>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'proker') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('proker.index') }}"><i class="bi-card-checklist">
          </i><span>Program Kerja</span></a>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'akun') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('peminjam.index') }}">Peminjam</a></li>
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('user.index') }}">User</a></li>
          <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}"><a class="nav-link" href="{{ route('role.index') }}">Peran</a></li>
        </ul>
      </li>
      <li class="menu-header">Konten</li>
      <li class="nav-item {{ ($currentAdminMenu == 'berita') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('berita.index') }}"><i class="bi-newspaper"></i> <span>Berita</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'acara') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('acara.index') }}"><i class="bi-calendar-event"></i> <span>Acara</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'karya') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('karya.index') }}"><i class="bi-images"></i> <span>Karya Mahasiswa</span></a>
      </li>
      <li class="menu-header">Aplikasi</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'aplikasi') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-app-indicator"></i> <span>Aplikasi Publik</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'apr') ? 'active' : ''}}"><a class="nav-link" href="{{ route('apr.index') }}">Advocacy Progress Report</a></li>
          <li class="{{ ($currentAdminSubMenu == 'fcup') ? 'active' : ''}}"><a class="nav-link" href="{{ route('fcup.index') }}">Fasilkom Cup</a></li>
          <li class="{{ ($currentAdminSubMenu == 'bemitory') ? 'active' : ''}}"><a class="nav-link" href="{{ route('bemitory.index') }}">Bemitory</a></li>
          <li class="{{ ($currentAdminSubMenu == 'elearn') ? 'active' : ''}}"><a class="nav-link" href="#">E-Learning</a></li>
          <li class="{{ ($currentAdminSubMenu == 'mading') ? 'active' : ''}}"><a class="nav-link" href="#">Mading Online</a></li>
          <li class="{{ ($currentAdminSubMenu == 'ktk') ? 'active' : ''}}"><a class="nav-link" href="#">Karya Tulis Keputrian</a></li>
          <li class="{{ ($currentAdminSubMenu == 'info') ? 'active' : ''}}"><a class="nav-link" href="#">Info kemarin</a></li>
          <li class="{{ ($currentAdminSubMenu == 'foto') ? 'active' : ''}}"><a class="nav-link" href="#">Foto Kegiatan</a></li>
          <li class="{{ ($currentAdminSubMenu == 'merch') ? 'active' : ''}}"><a class="nav-link" href="#">Merchandise</a></li>
          <li class="{{ ($currentAdminSubMenu == 'event') ? 'active' : ''}}"><a class="nav-link" href="{{ route('event.index') }}">Event Information</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkkmb') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-calendar4-week"></i> <span>PKKMB</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'maba') ? 'active' : ''}}"><a class="nav-link" href="{{ route('maba.index') }}">Mahasiswa Baru</a></li>
          <li class="{{ ($currentAdminSubMenu == 'informasi') ? 'active' : ''}}"><a class="nav-link" href="{{ route('informasi.index') }}">Informasi</a></li>
          <li class="{{ ($currentAdminSubMenu == 'rundown') ? 'active' : ''}}"><a class="nav-link" href="{{ route('rundown.index') }}">Rundown</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-individu') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-individu.index') }}">Tugas Individu</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-kelompok') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-kelompok.index') }}">Tugas Kelompok</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkm') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-book"></i> <span>PKM Centre</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'program') ? 'active' : ''}}"><a class="nav-link" href="{{ route('program.index') }}">Program</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengumuman') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengusul') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengusul.index') }}">Pengusul</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div><div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mb-1">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="150">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="30">
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Menu Utama</li>
      <li class="nav-item {{ ($currentAdminMenu == 'dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi-grid"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Data</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'struktur') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-diagram-3"></i> <span>Struktur</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'bidang-departemen') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin.struktur') }}">Bidang & Departemen</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengurus') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengurus.index') }}">Pengurus</a></li>
        </ul>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'proker') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('proker.index') }}"><i class="bi-card-checklist">
          </i><span>Program Kerja</span></a>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'akun') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('peminjam.index') }}">Peminjam</a></li>
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('user.index') }}">User</a></li>
          <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}"><a class="nav-link" href="{{ route('role.index') }}">Peran</a></li>
        </ul>
      </li>
      <li class="menu-header">Konten</li>
      <li class="nav-item {{ ($currentAdminMenu == 'berita') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('berita.index') }}"><i class="bi-newspaper"></i> <span>Berita</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'acara') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('acara.index') }}"><i class="bi-calendar-event"></i> <span>Acara</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'karya') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('karya.index') }}"><i class="bi-images"></i> <span>Karya Mahasiswa</span></a>
      </li>
      <li class="menu-header">Aplikasi</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'aplikasi') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-app-indicator"></i> <span>Aplikasi Publik</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'apr') ? 'active' : ''}}"><a class="nav-link" href="{{ route('apr.index') }}">Advocacy Progress Report</a></li>
          <li class="{{ ($currentAdminSubMenu == 'fcup') ? 'active' : ''}}"><a class="nav-link" href="{{ route('fcup.index') }}">Fasilkom Cup</a></li>
          <li class="{{ ($currentAdminSubMenu == 'bemitory') ? 'active' : ''}}"><a class="nav-link" href="{{ route('bemitory.index') }}">Bemitory</a></li>
          <li class="{{ ($currentAdminSubMenu == 'elearn') ? 'active' : ''}}"><a class="nav-link" href="#">E-Learning</a></li>
          <li class="{{ ($currentAdminSubMenu == 'mading') ? 'active' : ''}}"><a class="nav-link" href="#">Mading Online</a></li>
          <li class="{{ ($currentAdminSubMenu == 'ktk') ? 'active' : ''}}"><a class="nav-link" href="#">Karya Tulis Keputrian</a></li>
          <li class="{{ ($currentAdminSubMenu == 'info') ? 'active' : ''}}"><a class="nav-link" href="#">Info Kemarin</a></li>
          <li class="{{ ($currentAdminSubMenu == 'foto') ? 'active' : ''}}"><a class="nav-link" href="#">Foto Kegiatan</a></li>
          <li class="{{ ($currentAdminSubMenu == 'merch') ? 'active' : ''}}"><a class="nav-link" href="#">Merchandise</a></li>
          <li class="{{ ($currentAdminSubMenu == 'event') ? 'active' : ''}}"><a class="nav-link" href="{{ route('event.index') }}">Event Information</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkkmb') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-calendar4-week"></i> <span>PKKMB</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'maba') ? 'active' : ''}}"><a class="nav-link" href="{{ route('maba.index') }}">Mahasiswa Baru</a></li>
          <li class="{{ ($currentAdminSubMenu == 'informasi') ? 'active' : ''}}"><a class="nav-link" href="{{ route('informasi.index') }}">Informasi</a></li>
          <li class="{{ ($currentAdminSubMenu == 'rundown') ? 'active' : ''}}"><a class="nav-link" href="{{ route('rundown.index') }}">Rundown</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-individu') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-individu.index') }}">Tugas Individu</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-kelompok') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-kelompok.index') }}">Tugas Kelompok</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkm') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-book"></i> <span>PKM Centre</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'program') ? 'active' : ''}}"><a class="nav-link" href="{{ route('program.index') }}">Program</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengumuman') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengusul') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengusul.index') }}">Pengusul</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div><div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mb-1">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="150">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="30">
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Menu Utama</li>
      <li class="nav-item {{ ($currentAdminMenu == 'dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi-grid"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Data</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'struktur') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-diagram-3"></i> <span>Struktur</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'bidang-departemen') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin.struktur') }}">Bidang & Departemen</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengurus') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengurus.index') }}">Pengurus</a></li>
        </ul>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'proker') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('proker.index') }}"><i class="bi-card-checklist">
          </i><span>Program Kerja</span></a>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'akun') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('peminjam.index') }}">Peminjam</a></li>
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('user.index') }}">User</a></li>
          <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}"><a class="nav-link" href="{{ route('role.index') }}">Peran</a></li>
        </ul>
      </li>
      <li class="menu-header">Konten</li>
      <li class="nav-item {{ ($currentAdminMenu == 'berita') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('berita.index') }}"><i class="bi-newspaper"></i> <span>Berita</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'acara') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('acara.index') }}"><i class="bi-calendar-event"></i> <span>Acara</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'karya') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('karya.index') }}"><i class="bi-images"></i> <span>Karya Mahasiswa</span></a>
      </li>
      <li class="menu-header">Aplikasi</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'aplikasi') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-app-indicator"></i> <span>Aplikasi Publik</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'apr') ? 'active' : ''}}"><a class="nav-link" href="{{ route('apr.index') }}">Advocacy Progress Report</a></li>
          <li class="{{ ($currentAdminSubMenu == 'fcup') ? 'active' : ''}}"><a class="nav-link" href="{{ route('fcup.index') }}">Fasilkom Cup</a></li>
          <li class="{{ ($currentAdminSubMenu == 'bemitory') ? 'active' : ''}}"><a class="nav-link" href="{{ route('bemitory.index') }}">Bemitory</a></li>
          <li class="{{ ($currentAdminSubMenu == 'elearn') ? 'active' : ''}}"><a class="nav-link" href="#">E-Learning</a></li>
          <li class="{{ ($currentAdminSubMenu == 'mading') ? 'active' : ''}}"><a class="nav-link" href="#">Mading Online</a></li>
          <li class="{{ ($currentAdminSubMenu == 'ktk') ? 'active' : ''}}"><a class="nav-link" href="#">Karya Tulis Keputrian</a></li>
          <li class="{{ ($currentAdminSubMenu == 'info') ? 'active' : ''}}"><a class="nav-link" href="#">Info Kemarin</a></li>
          <li class="{{ ($currentAdminSubMenu == 'foto') ? 'active' : ''}}"><a class="nav-link" href="#">Foto Kegiatan</a></li>
          <li class="{{ ($currentAdminSubMenu == 'merch') ? 'active' : ''}}"><a class="nav-link" href="#">Merchandise</a></li>
          <li class="{{ ($currentAdminSubMenu == 'event') ? 'active' : ''}}"><a class="nav-link" href="{{ route('event.index') }}">Event Information</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkkmb') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-calendar4-week"></i> <span>PKKMB</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'maba') ? 'active' : ''}}"><a class="nav-link" href="{{ route('maba.index') }}">Mahasiswa Baru</a></li>
          <li class="{{ ($currentAdminSubMenu == 'informasi') ? 'active' : ''}}"><a class="nav-link" href="{{ route('informasi.index') }}">Informasi</a></li>
          <li class="{{ ($currentAdminSubMenu == 'rundown') ? 'active' : ''}}"><a class="nav-link" href="{{ route('rundown.index') }}">Rundown</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-individu') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-individu.index') }}">Tugas Individu</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-kelompok') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-kelompok.index') }}">Tugas Kelompok</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkm') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-book"></i> <span>PKM Centre</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'program') ? 'active' : ''}}"><a class="nav-link" href="{{ route('program.index') }}">Program</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengumuman') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengusul') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengusul.index') }}">Pengusul</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div><div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mb-1">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="150">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="30">
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Menu Utama</li>
      <li class="nav-item {{ ($currentAdminMenu == 'dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi-grid"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Data</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'struktur') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-diagram-3"></i> <span>Struktur</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'bidang-departemen') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin.struktur') }}">Bidang & Departemen</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengurus') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengurus.index') }}">Pengurus</a></li>
        </ul>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'proker') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('proker.index') }}"><i class="bi-card-checklist">
          </i><span>Program Kerja</span></a>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'akun') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('peminjam.index') }}">Peminjam</a></li>
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('user.index') }}">User</a></li>
          <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}"><a class="nav-link" href="{{ route('role.index') }}">Peran</a></li>
        </ul>
      </li>
      <li class="menu-header">Konten</li>
      <li class="nav-item {{ ($currentAdminMenu == 'berita') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('berita.index') }}"><i class="bi-newspaper"></i> <span>Berita</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'acara') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('acara.index') }}"><i class="bi-calendar-event"></i> <span>Acara</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'karya') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('karya.index') }}"><i class="bi-images"></i> <span>Karya Mahasiswa</span></a>
      </li>
      <li class="menu-header">Aplikasi</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'aplikasi') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-app-indicator"></i> <span>Aplikasi Publik</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'apr') ? 'active' : ''}}"><a class="nav-link" href="{{ route('apr.index') }}">Advocacy Progress Report</a></li>
          <li class="{{ ($currentAdminSubMenu == 'fcup') ? 'active' : ''}}"><a class="nav-link" href="{{ route('fcup.index') }}">Fasilkom Cup</a></li>
          <li class="{{ ($currentAdminSubMenu == 'bemitory') ? 'active' : ''}}"><a class="nav-link" href="{{ route('bemitory.index') }}">Bemitory</a></li>
          <li class="{{ ($currentAdminSubMenu == 'elearn') ? 'active' : ''}}"><a class="nav-link" href="#">E-Learning</a></li>
          <li class="{{ ($currentAdminSubMenu == 'mading') ? 'active' : ''}}"><a class="nav-link" href="#">Mading Online</a></li>
          <li class="{{ ($currentAdminSubMenu == 'ktk') ? 'active' : ''}}"><a class="nav-link" href="#">Karya Tulis Keputrian</a></li>
          <li class="{{ ($currentAdminSubMenu == 'info') ? 'active' : ''}}"><a class="nav-link" href="#">Info Kemarin</a></li>
          <li class="{{ ($currentAdminSubMenu == 'foto') ? 'active' : ''}}"><a class="nav-link" href="#">Foto Kegiatan</a></li>
          <li class="{{ ($currentAdminSubMenu == 'merch') ? 'active' : ''}}"><a class="nav-link" href="#">Merchandise</a></li>
          <li class="{{ ($currentAdminSubMenu == 'event') ? 'active' : ''}}"><a class="nav-link" href="{{ route('event.index') }}">Event Information</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkkmb') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-calendar4-week"></i> <span>PKKMB</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'maba') ? 'active' : ''}}"><a class="nav-link" href="{{ route('maba.index') }}">Mahasiswa Baru</a></li>
          <li class="{{ ($currentAdminSubMenu == 'informasi') ? 'active' : ''}}"><a class="nav-link" href="{{ route('informasi.index') }}">Informasi</a></li>
          <li class="{{ ($currentAdminSubMenu == 'rundown') ? 'active' : ''}}"><a class="nav-link" href="{{ route('rundown.index') }}">Rundown</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-individu') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-individu.index') }}">Tugas Individu</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-kelompok') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-kelompok.index') }}">Tugas Kelompok</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkm') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-book"></i> <span>PKM Centre</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'program') ? 'active' : ''}}"><a class="nav-link" href="{{ route('program.index') }}">Program</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengumuman') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengusul') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengusul.index') }}">Pengusul</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div><div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mb-1">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="150">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="30">
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Menu Utama</li>
      <li class="nav-item {{ ($currentAdminMenu == 'dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi-grid"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Data</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'struktur') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-diagram-3"></i> <span>Struktur</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'bidang-departemen') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin.struktur') }}">Bidang & Departemen</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengurus') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengurus.index') }}">Pengurus</a></li>
        </ul>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'proker') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('proker.index') }}"><i class="bi-card-checklist">
          </i><span>Program Kerja</span></a>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'akun') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('peminjam.index') }}">Peminjam</a></li>
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('user.index') }}">User</a></li>
          <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}"><a class="nav-link" href="{{ route('role.index') }}">Peran</a></li>
        </ul>
      </li>
      <li class="menu-header">Konten</li>
      <li class="nav-item {{ ($currentAdminMenu == 'berita') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('berita.index') }}"><i class="bi-newspaper"></i> <span>Berita</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'acara') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('acara.index') }}"><i class="bi-calendar-event"></i> <span>Acara</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'karya') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('karya.index') }}"><i class="bi-images"></i> <span>Karya Mahasiswa</span></a>
      </li>
      <li class="menu-header">Aplikasi</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'aplikasi') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-app-indicator"></i> <span>Aplikasi Publik</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'apr') ? 'active' : ''}}"><a class="nav-link" href="{{ route('apr.index') }}">Advocacy Progress Report</a></li>
          <li class="{{ ($currentAdminSubMenu == 'fcup') ? 'active' : ''}}"><a class="nav-link" href="{{ route('fcup.index') }}">Fasilkom Cup</a></li>
          <li class="{{ ($currentAdminSubMenu == 'bemitory') ? 'active' : ''}}"><a class="nav-link" href="{{ route('bemitory.index') }}">Bemitory</a></li>
          <li class="{{ ($currentAdminSubMenu == 'elearn') ? 'active' : ''}}"><a class="nav-link" href="#">E-Learning</a></li>
          <li class="{{ ($currentAdminSubMenu == 'mading') ? 'active' : ''}}"><a class="nav-link" href="#">Mading Online</a></li>
          <li class="{{ ($currentAdminSubMenu == 'ktk') ? 'active' : ''}}"><a class="nav-link" href="#">Karya Tulis Keputrian</a></li>
          <li class="{{ ($currentAdminSubMenu == 'info') ? 'active' : ''}}"><a class="nav-link" href="#">Info Kemarin</a></li>
          <li class="{{ ($currentAdminSubMenu == 'foto') ? 'active' : ''}}"><a class="nav-link" href="#">Foto Kegiatan</a></li>
          <li class="{{ ($currentAdminSubMenu == 'merch') ? 'active' : ''}}"><a class="nav-link" href="#">Merchandise</a></li>
          <li class="{{ ($currentAdminSubMenu == 'event') ? 'active' : ''}}"><a class="nav-link" href="{{ route('event.index') }}">Event Information</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkkmb') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-calendar4-week"></i> <span>PKKMB</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'maba') ? 'active' : ''}}"><a class="nav-link" href="{{ route('maba.index') }}">Mahasiswa Baru</a></li>
          <li class="{{ ($currentAdminSubMenu == 'informasi') ? 'active' : ''}}"><a class="nav-link" href="{{ route('informasi.index') }}">Informasi</a></li>
          <li class="{{ ($currentAdminSubMenu == 'rundown') ? 'active' : ''}}"><a class="nav-link" href="{{ route('rundown.index') }}">Rundown</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-individu') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-individu.index') }}">Tugas Individu</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-kelompok') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-kelompok.index') }}">Tugas Kelompok</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkm') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-book"></i> <span>PKM Centre</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'program') ? 'active' : ''}}"><a class="nav-link" href="{{ route('program.index') }}">Program</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengumuman') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengusul') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengusul.index') }}">Pengusul</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div><div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mb-1">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="150">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/">
        <img src="{{ url('frontend/assets/img/logo-kabinet/logo.png') }}" alt="" width="30">
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Menu Utama</li>
      <li class="nav-item {{ ($currentAdminMenu == 'dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi-grid"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Data</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'struktur') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-diagram-3"></i> <span>Struktur</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'bidang-departemen') ? 'active' : ''}}"><a class="nav-link" href="{{ route('admin.struktur') }}">Bidang & Departemen</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengurus') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengurus.index') }}">Pengurus</a></li>
        </ul>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'proker') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('proker.index') }}"><i class="bi-card-checklist">
          </i><span>Program Kerja</span></a>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'akun') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Akun</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('peminjam.index') }}">Peminjam</a></li>
          <li class="{{ ($currentAdminSubMenu == 'user') ? 'active' : ''}}"><a class="nav-link" href="{{ route('user.index') }}">User</a></li>
          <li class="{{ ($currentAdminSubMenu == 'role') ? 'active' : ''}}"><a class="nav-link" href="{{ route('role.index') }}">Peran</a></li>
        </ul>
      </li>
      <li class="menu-header">Konten</li>
      <li class="nav-item {{ ($currentAdminMenu == 'berita') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('berita.index') }}"><i class="bi-newspaper"></i> <span>Berita</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'acara') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('acara.index') }}"><i class="bi-calendar-event"></i> <span>Acara</span></a>
      </li>
      <li class="nav-item {{ ($currentAdminMenu == 'karya') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('karya.index') }}"><i class="bi-images"></i> <span>Karya Mahasiswa</span></a>
      </li>
      <li class="menu-header">Aplikasi</li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'aplikasi') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-app-indicator"></i> <span>Aplikasi Publik</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'apr') ? 'active' : ''}}"><a class="nav-link" href="{{ route('apr.index') }}">Advocacy Progress Report</a></li>
          <li class="{{ ($currentAdminSubMenu == 'fcup') ? 'active' : ''}}"><a class="nav-link" href="{{ route('fcup.index') }}">Fasilkom Cup</a></li>
          <li class="{{ ($currentAdminSubMenu == 'bemitory') ? 'active' : ''}}"><a class="nav-link" href="{{ route('bemitory.index') }}">Bemitory</a></li>
          <li class="{{ ($currentAdminSubMenu == 'elearn') ? 'active' : ''}}"><a class="nav-link" href="#">E-Learning</a></li>
          <li class="{{ ($currentAdminSubMenu == 'mading') ? 'active' : ''}}"><a class="nav-link" href="#">Mading Online</a></li>
          <li class="{{ ($currentAdminSubMenu == 'ktk') ? 'active' : ''}}"><a class="nav-link" href="#">Karya Tulis Keputrian</a></li>
          <li class="{{ ($currentAdminSubMenu == 'kajian') ? 'active' : ''}}"><a class="nav-link" href="{{ route('info-kajian.index') }}">Info Kajian</a></li>
          <li class="{{ ($currentAdminSubMenu == 'foto') ? 'active' : ''}}"><a class="nav-link" href="#">Foto Kegiatan</a></li>
          <li class="{{ ($currentAdminSubMenu == 'merchandise') ? 'active' : ''}}"><a class="nav-link" href="{{ route('merchandise.index') }}">Merchandise</a></li>
          <li class="{{ ($currentAdminSubMenu == 'event') ? 'active' : ''}}"><a class="nav-link" href="{{ route('event.index') }}">Event Information</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkkmb') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-calendar4-week"></i> <span>PKKMB</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'maba') ? 'active' : ''}}"><a class="nav-link" href="{{ route('maba.index') }}">Mahasiswa Baru</a></li>
          <li class="{{ ($currentAdminSubMenu == 'informasi') ? 'active' : ''}}"><a class="nav-link" href="{{ route('informasi.index') }}">Informasi</a></li>
          <li class="{{ ($currentAdminSubMenu == 'rundown') ? 'active' : ''}}"><a class="nav-link" href="{{ route('rundown.index') }}">Rundown</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-individu') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-individu.index') }}">Tugas Individu</a></li>
          <li class="{{ ($currentAdminSubMenu == 'tugas-kelompok') ? 'active' : ''}}"><a class="nav-link" href="{{ route('tugas-kelompok.index') }}">Tugas Kelompok</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown {{ ($currentAdminMenu == 'pkm') ? 'active' : ''}}">
        <a class="nav-link has-dropdown"><i class="bi-book"></i> <span>PKM Centre</span></a>
        <ul class="dropdown-menu">
          <li class="{{ ($currentAdminSubMenu == 'program') ? 'active' : ''}}"><a class="nav-link" href="{{ route('program.index') }}">Program</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengumuman') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengumuman.index') }}">Pengumuman</a></li>
          <li class="{{ ($currentAdminSubMenu == 'preview') ? 'active' : ''}}"><a class="nav-link" href="{{ route('preview.index') }}">Proposal Lama</a></li>
          <li class="{{ ($currentAdminSubMenu == 'pengusul') ? 'active' : ''}}"><a class="nav-link" href="{{ route('pengusul.index') }}">Pengusul</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>