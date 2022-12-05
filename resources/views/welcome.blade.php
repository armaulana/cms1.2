<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Google Font --> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo asset('../assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Ionicon -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
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
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="login-page text-sm">
    <div class="login-box">
        <div class="card">
            <div class="card-body">
                @if (Route::has('login'))
                    <div class="text-align: center">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>