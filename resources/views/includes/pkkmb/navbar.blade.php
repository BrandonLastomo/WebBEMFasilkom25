<!-- ======= Header ======= -->
<header id="header" class="header fixed-top border-0">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

		<a href="{{ route('pkkmb') }}" class="logo d-flex align-items-center">
			<img src="{{ url('pkkmb/assets/img/navbar_22.png') }}" alt="">
		</a>

		@auth
		<nav id="navbar" class="navbar">
			<ul class="menu">
				<li class="username">
					<a class="nav-link">
						{{ Auth::user()->nama }}
					</a>
				</li>
				<li>
					{!! Form::open(['route' => 'pkkmb.logout', 'id' => 'logout']) !!}
					{{-- <form id="logout-form" action="{{ route('pkkmb.logout') }}" method="post"> --}}
						{{-- @csrf --}}
						<a class="nav-link btn btn-logout" href="{{ route('pkkmb.logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
							<i class="bi bi-box-arrow-left mx-2" style="font-size: 1rem; margin-top: 1px"></i><span>Logout</span>
						</a>
					{{-- </form> --}}
					{!! Form::close() !!}
				</li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
		<!-- End Navbar -->
		@endauth
	</div>
</header>
<!-- End Header -->