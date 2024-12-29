<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ~ BEM Fasilkom Kabinet Arthasastra</title>

    @include('includes.admin.style')

</head>

<body>
    <div id="app">

        @include('includes.admin.sidebar')

        @yield('content')

    </div>

    @include('includes.admin.script')

</body>

</html>