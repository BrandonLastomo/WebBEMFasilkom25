<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>

  @include('includes.admin.style')

</head>

<body>
  <div id="app">
    
    <div class="main-wrapper">

      <div class="navbar-bg"></div>

      @include('includes.admin.navbar')

      @include('includes.admin.sidebar')

      @yield('content')
      
      @include('includes.admin.footer')

    </div>
    
  </div>

  @include('includes.admin.script')
  
</body>
</html>
