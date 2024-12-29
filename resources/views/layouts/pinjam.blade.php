<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bemitory</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <meta name="csrf-token" content="{{ csrf_token() }}" />

  @include('includes.pinjam.style')
</head>

<body>

  @include('includes.pinjam.navbar')

  @yield('content')

  @include('includes.pinjam.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.pinjam.script')

</body>

</html>