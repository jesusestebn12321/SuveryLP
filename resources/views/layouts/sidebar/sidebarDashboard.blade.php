<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="{{url('home')}}">
        <img src="{{asset('argon-dashboard-master/assets/img/brand/logo.svg')}}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{asset('argon-dashboard-master/assets/img/brand/logo.svg')}}">
              </span>
            </div>
          </a>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="{{url('home')}}">
                <img src="{{asset('argon-dashboard-master/assets/img/brand/logo.svg')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('People.index')}}">
              <i class="ni ni-single-02 text-blue"></i> People
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Email.index')}}">
              <i class="ni ni-send text-pink"></i> E-mails
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Email.index')}}">
              <i class="ni ni-building text-info"></i> LifePoint
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Pays.index')}}">
              <i class="ni ni-credit-card text-orange"></i> Pays
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/profile.html">
              <i class="ni ni-single-02 text-yellow"></i> User profile
            </a>
          </li>
          <li class="nav-item"> 
              <a href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class="nav-link">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
              </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>