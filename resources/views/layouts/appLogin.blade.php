<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="{{asset('argon-dashboard-master/assets/img/brand/icon2.png')}}" rel="icon" type="image/png">
  <!-- Icons -->
  <link href="{{asset('argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('argon-dashboard-master/assets/css/argon.min.css')}}" rel="stylesheet">
</head>

<body class="bg-gradient-danger">
  <!-- jQuery -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-danger py-7 py-lg-8">
      <div class="container">
      <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6">
            <h1 class="text-white">Welcome!</h1>
            <p class="text-lead text-light">LifePoint Serve People.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  @yield('content')
  
</div>


<footer class="py-">
  <div class="container">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6">
        <div class="copyright text-center text-white text-xl-left text-muted">
          &copy; 2019 <a href="#" class="font-weight-bold ml-1 text-white">LifePoint</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="{{asset('argon-dashboard-master/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('argon-dashboard-master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('argon-dashboard-master/assets/js/argon.js?v=1.0.0')}}"></script>
</body>
</html>