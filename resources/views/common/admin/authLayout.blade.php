<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link href="backend/css/examples.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/examples.css') }}">
    <script src="{{ asset('backend/js/config.js') }}"></script>
    <script src="{{ asset('backend/js/color-modes.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('backend/plugins/chart.js/css/coreui-chartjs.css') }}">
  </head>
  <body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('backend/plugins/chart.js/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/chart.js/js/chart.umd.js') }}"></script>
    <script src="{{ asset('backend/plugins/chart.js/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('backend/js/index.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
    <script> 
    </script>
  </body>
</html>