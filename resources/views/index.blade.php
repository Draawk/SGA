<html>
<head>
  <!-- Vendor styles -->
  <link rel="stylesheet" href="{{ asset('bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">

  <!-- App styles -->
  <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
</head>
<body data-ma-theme="blue">
  <div id="app">
    <router-view></router-view>
  </div>
  <!-- Javascript -->
  <!-- App functions and actions -->
  <script src="{{ asset('js/app.js') }}"></script>  
  <!-- Vendors -->
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('bower_components/tether/dist/js/tether.min.js') }}"></script>
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('bower_components/Waves/dist/waves.min.js') }}"></script>
  <script src="{{ asset('bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>
  <!-- App functions and actions -->
  <script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>