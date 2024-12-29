<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  @include('includes.pkm.style')

</head>

<body>
  <div id="app">
    
    <div class="main-wrapper">

      <div class="navbar-bg"></div>

      @include('includes.prepkm.navbar')

      @yield('content')
      
      @include('includes.prepkm.footer')

    </div>
    
  </div>

  @include('includes.pkm.script')
  
</body>
</html>
