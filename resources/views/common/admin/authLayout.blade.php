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
  </head>
  <body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('backend/plugins/chart.js/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/js/index.js') }}"></script>
    <script> 
    function logout() {
      if (confirm('Are you Sure you want to logout?') == true) {
          window.location.href = "/admin/logout";
      }
    }
    </script>
  </body>
</html>