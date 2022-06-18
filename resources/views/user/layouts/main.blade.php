<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BRADV | Landing, Bromo Adventure</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('landing/assets/img/logo/logo.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('landing/assets/img/logo/logo.svg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('landing/assets/img/logo/logo.svg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/assets/img/logo/logo.svg') }}">
    <link rel="manifest" href="{{ asset('landing/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('landing/assets/img/logo/logo.svg') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('landing/vendors/plyr/plyr.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/assets/css/theme.css') }}" rel="stylesheet" />

  </head>
  <body>
    <main class="main" id="top">
      @include('user.elements.header')

      @yield('content')

      @include('user.elements.footer')

    </main>

    <script src="{{ asset('landing/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('landing/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('landing/vendors/plyr/plyr.polyfilled.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('landing/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>