<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo asset('../assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo asset('../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo asset('../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo asset('../assets/plugins/jqvmap/jqvmap.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo asset('../assets/dist/css/adminlte.min.css');?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo asset('../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo asset('../assets/plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo asset('../assets/plugins/summernote/summernote-bs4.min.css'); ?>">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Scripts 
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])-->
</head>
<body class="sidebar-mini layout-fixed control-sidebar-slide-open text-sm" style="height: auto;">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-list"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    @guest
                        @if (Route::has('login'))
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        
                        @else
                            {{ Auth::user()->name }}
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf 
                            </form>
                    @endguest
                </a>
            </div>
        </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar @elevation-4 sidebar-light-lightblue">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
        <img src="<?php echo asset('../assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Lara. 9</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="<?php echo asset('../assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="./index.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Layout Options
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Top Navigation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Top Navigation + Sidebar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Boxed</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Sidebar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Navbar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Footer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Collapsed Sidebar</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-header">Example</li>
            <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                </p>
                </a>
            </li>
            <li class="nav-header">Multi Level </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Level 1
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Level 2
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                    </a>
                </li>
                </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard <small style="margin-top: 4px; font-size: 16px">Views</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <main class="@py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
        </div>
    </footer>

</div>
<!-- ./wrapper -->
</body>
</html>

<!-- jQuery -->
<script src="<?php echo asset('../assets/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo asset('../assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo asset('../assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo asset('../assets/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo asset('../assets/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo asset('../assets/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?php echo asset('../assets/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo asset('../assets/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo asset('../assets/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo asset('../assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo asset('../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Summernote -->
<script src="<?php echo asset('../assets/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo asset('../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo asset('../assets/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo asset('../assets/dist/js/demo.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo asset('../assets/dist/js/pages/dashboard.js'); ?>"></script>