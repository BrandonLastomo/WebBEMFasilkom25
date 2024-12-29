@if (session('success'))
	<div class="alert alert-success alert-dismissible fade show border-0 text-md-center text-start text-sm-start" role="alert">
		<strong>{{ session('success') }}</strong> <br> 
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
@endif