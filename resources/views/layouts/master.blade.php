<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" />
    @yield('meta')
    <link rel="stylesheet" href="/css/maruti-style.css" />
    <link rel="stylesheet" href="/css/maruti-media.css" class="skin-color" />
    <link rel="stylesheet" href="/css/jquery-confirm.min.css" />
    <title>e-Poin {{ env('APP_SEKOLAH') }}</title>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>
  <body>
    @if (Auth::guest())
      @yield('content-login')
    @else
    <div id="header">
      <h3>{{ env('APP_SEKOLAH') }}</h3>
    </div>

    <div id="user-nav" class="navbar navbar-inverse">
      <ul class="nav">
        <li class=" dropdown" id="menu-messages">
          <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
            <i class="icon icon-user"></i><span class="text"> {{ Auth::user()->name }} </span><b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/profil">Profil</a></li>
            <li>
              <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">Keluar</a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>

    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><ul>
        <li><a href="/"><i class="icon icon-home"></i> <span>Dasbor</span></a> </li>
        <li> <a href="/siswa"><i class="icon icon-user"></i> <span>Siswa</span></a> </li>
        <li> <a href="/poin"><i class="icon icon-star"></i> <span>Poin</span></a> </li>
        <li> <a href="/peraturan"><i class="icon icon-th-list"></i> <span>Peraturan</span> </a></li>
        <li> <a href="/user"><i class="icon icon-user"></i> <span>User</span> </a></li>
      </ul>
    </div>

    <div id="content">
      @yield('content-header')
      <div class="container-fluid">
        <div class="row-fluid">
          @yield('content')
        </div>
      </div>
    </div>

    <div class="row-fluid">
      <div id="footer" class="span12"> Copyright 2017 &copy; fandyst. Powered by <a href="https://www.kreativitor.co.id">Kreativitor Nusatu</a> </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.ui.custom.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/krea_main.js"></script>
    <script src="/js/jquery-confirm.min.js"></script>
    @yield('footer-js')
    @endif
  </body>
</html>
