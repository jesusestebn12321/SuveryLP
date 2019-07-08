<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>LifePoint @yield('title')</title>
  <link href="{{asset('argon-dashboard-master/assets/img/brand/icon2.png')}}" rel="icon" type="image/png">
  <!-- Icons -->
  <link href="{{asset('argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{asset('argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
  <link  type="text/css" href="{{asset('argon-dashboard-master/assets/css/argon.css?v=1.0.0')}}" rel="stylesheet">
  <link  type="text/css" href="{{asset('plugins/css/style.css')}}" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
  @include('layouts.sidebar.sidebarDashboard')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('layouts.nav.navDashboard')
    
    @yield('header')
    <!-- Page content -->
    <div class="container-fluid mt--7">
      @yield('content')
      <!-- Footer -->
      @include('layouts.footer.footerDashboard')
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('argon-dashboard-master/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('argon-dashboard-master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

  <script src="{{asset('argon-dashboard-master/assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('argon-dashboard-master/assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('argon-dashboard-master/assets/vendor/clipboard/dist/clipboard.min.js')}}"></script>
  <script src="{{asset('argon-dashboard-master/assets/js/argon.js?v=1.0.0')}}"></script>
  <script src="{{asset('plugins/js/main.js')}}"></script>
  @yield('js')
</body>

</html>