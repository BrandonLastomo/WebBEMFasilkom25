<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand mb-1">
      <a href="{{ route('pkm-center') }}">
        <img src="{{ url('pkm/assets/img/logo-pkm.png') }}" alt="" width="150">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ route('pkm-center') }}">
        <img src="{{ url('pkm/assets/img/unsika.png') }}" alt="" width="30">
      </a>
    </div>
    <ul class="sidebar-menu">
      <div class="sidebar-brand mb-1 mt-3">
        <p><span style="font-weight: bold; font-size: 14px">{{ Auth::user()->name }}</span> <br> <span style="font-size: 12px"> {{ Auth::user()->npm }} </span><br> {{ Auth::user()->prodi }}</p>
      </div>
      <li class="nav-item mt-2 {{ ($currentPkmMenu == 'beranda') ? 'active' : ''}}">
        <a href="{{ route('pkm-center') }}" class="nav-link"><i class="bi-house"></i><span>Beranda</span></a>
      </li>
      <li class="nav-item {{ ($currentPkmMenu == 'profil') ? 'active' : ''}}">
        <a href="{{ route('profil.index') }}" class="nav-link"><i class="bi-person"></i><span>Profil</span></a>
      </li>
      <li class="nav-item {{ ($currentPkmMenu == 'pengajuan') ? 'active' : ''}}">
        <a href="{{ route('pengajuan.index') }}" class="nav-link"><i class="bi-journal-text"></i><span>Pengajuan Usul</span></a>
      </li>
      <li class="nav-item {{ ($currentPkmMenu == 'konsultasi') ? 'active' : ''}}">
        <a href="#" class="nav-link"><i class="bi-chat-dots"></i><span>Konsultasi PKM</span></a>
      </li>
    </ul>
  </aside>
</div>