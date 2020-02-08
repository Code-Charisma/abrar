<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{url('/')}}/backend_assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('/')}}/backend_assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{url('/')}}/backend_assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{url('/')}}/backend_assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{url('/')}}/backend_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('/')}}/backend_assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('/')}}/backend_assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('/')}}/backend_assets/img/icon1.png">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">



    @yield('header_css')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
  <body>


    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header  -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="" alt="Image" class="img-fluid">
            <h2 class="h6 mb-3">
                @if(Auth::user()->name != null)
                    {{Auth::user()->name}}
                @endif
            </h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong class="text-primary">SCSL</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Control Panel</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">

                <li><a href="{{url('about/backend/page/view')}}"> <i class="fas fa-users"></i>Abuot Us</a></li>
                <li><a href="{{url('category/backend/page/view')}}"> <i class="fas fa-layer-group"></i>Product Category</a></li>
                <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="fas fa-th"></i>Service</a>
                    <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                        <li><a href="{{url('service/backend/page')}}"> Services</a></li>
                        <li><a href="{{url('buying/history/page')}}"> Service Details</a></li>
                    </ul>
                </li>
                <li><a href="{{url('company/profile/page')}}"> <i class="fas fa-cog"></i> Settings</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="{{url('/home')}}" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Dashboard</strong></div></a></div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->

                <!-- Log out-->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
          </div>
        </nav>
      </header>





      @yield('content')




      <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2019</p>
                </div>
                <div class="col-sm-6 text-right">
                    <p>Developed By Decode Lab</p>
                  </div>
              </div>
            </div>
          </footer>
        </div>


        <!-- JavaScript files-->
        <script src="{{url('/')}}/backend_assets/vendor/jquery/jquery.min.js"></script>
        <script src="{{url('/')}}/backend_assets/vendor/popper.js/umd/popper.min.js"> </script>
        <script src="{{url('/')}}/backend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/backend_assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
        <script src="{{url('/')}}/backend_assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="{{url('/')}}/backend_assets/vendor/chart.js/Chart.min.js"></script>
        <script src="{{url('/')}}/backend_assets/vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="{{url('/')}}/backend_assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{url('/')}}/backend_assets/js/charts-home.js"></script>
        <!-- Main File-->
        <script src="{{url('/')}}/backend_assets/js/front.js"></script>
        <script src="//kit.fontawesome.com/c218529370.js"></script>


        @yield('footer_js')


        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}


      </body>
    </html>
