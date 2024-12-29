<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <div class="navbar-brand mb-1">
        <a href="{{ route('prepkm-center') }}">
          <img src="{{ url('pkm/assets/img/logo-prepkm.png') }}" alt="" width="150">
        </a>
      </div>
    </ul>
  </form>
  <ul class="navbar-nav navbar-right">
    <ul class="d-sm-none d-lg-inline-block">
      <a href="{{ route('pkm-center') }}">
        <i class="fas fa-sign-out-alt"></i> Sign In
      </a>
    </ul>
  </ul>
</nav>