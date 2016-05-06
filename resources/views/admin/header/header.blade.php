<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<link rel="stylesheet" href="{{URL::asset('admin/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/css/font.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/css/plugin.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/css/style.css')}}">
  <!--[if lt IE 9]>
    <script src="{{URL::asset('admin/js/ie/respond.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/ie/html5.js')}}"></script>
    <script src="{{URL::asset('admin/js/ie/excanvas.js')}}"></script>
  <![endif]-->
</head>
<body>
  <!-- header -->
	<header id="header" class="navbar">
    <ul class="nav navbar-nav navbar-avatar pull-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">             
          <span class="hidden-xs-only">{{ $user = Auth::user()->first_name }}</span>
          <span class="thumb-small avatar inline"><img src="{{URL::asset('admin/images/profile-pictures/pp-icon.png')}}" alt="Mika Sokeil" class="img-circle"></span>
          <b class="caret hidden-xs-only"></b>
        </a>
        <ul class="dropdown-menu pull-right">
          <li><a href="#">Update</a></li>
          <li><a href="#">Profile</a></li>
          <li><a href="{{URL::to('/')}}/admin_panel/logout">Logout</a></li>
        </ul>
      </li>
    </ul>
    <a class="navbar-brand col-lg-2" href="{{URL::to('/')}}">Admin Panel</a>
    <button type="button" class="btn btn-link pull-left nav-toggle visible-xs" data-toggle="class:slide-nav slide-nav-left" data-target="body">
      <i class="fa fa-bars fa-lg text-default"></i>
    </button>
    <ul class="nav navbar-nav hidden-xs">
      <li>
		<div class="m-t-small">
			<a class="btn btn-sm btn-info" data-toggle="dropdown" href=""><i class="fa fa-fw fa-plus"></i> Add</a>
			<ul class="dropdown-menu">
				<li><a href="{{URL::to('/')}}">Restaurant</a></li>
				<li><a href="{{URL::to('/')}}">Company</a></li>
				<li><a href="{{URL::to('/')}}">Outlet</a></li>
				<li><a href="{{URL::to('/')}}">Rider</a></li>
				<li><a href="{{URL::to('/')}}">Rider Duty</a></li>
			</ul>
		</div>
	  </li>
      <!-- <li class="dropdown shift" data-toggle="shift:appendTo" data-target=".nav-primary .nav">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-lg visible-xs visible-xs-inline"></i>Settings <b class="caret hidden-sm-only"></b></a>
        <ul class="dropdown-menu">
          <li>
            <a href="#" data-toggle="class:navbar-fixed" data-target='body'>Navbar 
              <span class="text-active">auto</span>
              <span class="text">fixed</span>
            </a>
          </li>
          <li class="hidden-xs">
            <a href="#" data-toggle="class:nav-vertical" data-target="#nav">Nav 
              <span class="text-active">vertical</span>
              <span class="text">horizontal</span>
            </a>
          </li>
          <li class="divider hidden-xs"></li>
          <li class="dropdown-header">Colors</li>
          <li>
            <a href="#" data-toggle="class:bg bg-black" data-target='.navbar'>Navbar 
              <span class="text-active">white</span>
              <span class="text">inverse</span>
            </a>
          </li>
          <li>
            <a href="#" data-toggle="class:bg-light" data-target='#nav'>Nav 
              <span class="text-active">inverse</span>
              <span class="text">light</span>
            </a>
          </li>
        </ul>
      </li> -->
    </ul>
    <!-- <form class="navbar-form pull-left shift" action="" data-toggle="shift:prependTo" data-target=".nav-primary">
      <i class="fa fa-search text-muted"></i>
      <input type="text" class="input-sm form-control" placeholder="Search">
    </form> -->
	</header>
  <!-- / header -->