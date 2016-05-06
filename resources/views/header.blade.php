<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hotel Management</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,400italic,700italic,500italic,300italic" /> 
	<link rel="stylesheet" href="{{URL::asset('css/jquery.qtip.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
	
	<!--[if lt IE 9]>
	<script src="{{URL::asset('js/html5shiv.min.js')}}"></script>
	<![endif]-->
	
	<script src="{{URL::asset('js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{URL::asset('js/parsley.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.matchHeight-min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.qtip.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8kOUerH09w7ei9RpJw2z7NkdY6ZCWY4E&libraries=places"></script>
	<script src="{{URL::asset('js/script.js')}}"></script>
</head>
<body>   
	<div class="wrapper">
		<div class="header">
			<div class="container">
				<div class="navbar-header">
				  
				</div>      
				<div class="navbar-buttons navbar-right" role="navigation">
					<ul class="nav ace-nav">
						<li>  
							<a href="#"><i class="icon icon-question"></i></a>
						</li>             
						<li>    
							<a href="{{URL::to('/')}}/dashboard"><i class="icon icon-child"></i> {{ $user = Auth::user()->first_name }}</a>
						</li> 
						<li>   
							<a href="{{URL::to('/')}}/user/logout"><i class="icon icon-bell"></i> Logout</a>
						</li>
					</ul>
				</div> 
			</div>
		</div><!-- /.navbar -->