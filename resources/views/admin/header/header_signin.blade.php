<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login</title>
  <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <link rel="stylesheet" href="{{URL::asset('admin/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/css/font.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/css/style.css')}}">
  <!--[if lt IE 9]>
    <script src="{{URL::asset('admin/js/ie/respond.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/ie/html5.js')}}"></script>
  <![endif]-->
</head>
<body>
  <!-- header -->
  <header id="header" class="navbar bg bg-black">
    <a href="{{URL::to('/')}}/admin_panel" class="btn btn-link pull-right m-t-mini"><i class="fa fa-user-md fa-lg text-default"></i></a>
    <a class="navbar-brand" href="{{URL::to('/')}}/admin_panel">Admin</a>
  </header>
  <!-- / header -->