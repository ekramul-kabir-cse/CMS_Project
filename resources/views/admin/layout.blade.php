<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
   <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  
    <!-- JQVMap -->
    <link href="{{asset('public/admin_theme/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('public/admin_theme/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- <link href="{{asset('public/admin_theme/vendors/ckeditor/samples/css/samples.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin_theme/vendors/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}" rel="stylesheet"> -->
    
    <!-- Custom Theme Style -->
    <link href="{{asset('public/admin_theme/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('public/img/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('page-add')}}"> Home <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="{{route('company.page.add')}}"> company <span class="fa fa-chevron-down"></span></a></li>
                  <li><a > services <span class="fa fa-chevron-down"></span></a></li>
                  <li><a> contact <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="{{route('post-show')}}"> Post <span class="fa fa-chevron-down"></span></a></li>
                  <li><a href="{{route('admin.contact.show')}}"> Users <span class="fa fa-chevron-down"></span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>


        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('public/admin_theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/admin_theme/build/js/custom.min.js')}}"></script>

    <script src="{{asset('public/admin_theme/vendors/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('public/admin_theme/vendors/ckeditor/js/sample.js')}}"></script>
    
    @stack('footer-script')
  </body>
</html>
