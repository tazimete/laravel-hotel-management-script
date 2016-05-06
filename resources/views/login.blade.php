<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tripfez</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,300,700,400italic,700italic,500italic,300italic" />
	<link rel="stylesheet" href="{!!URL::asset('css/style.css')!!}" />
	<link rel="stylesheet" href="{{URL::asset('css/jquery.qtip.css')}}" />
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<![endif]-->
	<script src="{{URL::asset('js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.matchHeight-min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.qtip.min.js')}}"></script>
	<script src="{{URL::asset('js/script.js')}}"></script>    
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">
						<img src="{{URL::asset('images/logo.png')}}" width="103" height="36" alt="Tripfez" />
					</a>
				</div>
				<!--<div class="navbar-buttons navbar-right" role="navigation">
					<ul class="nav ace-nav">
						 <li>
							<a href="#"><i class="icon icon-question"></i></a>
						</li>
						<li>
							<a href="#"><i class="icon icon-child"></i> User Profile</a>
						</li> 
					</ul>
				</div>-->
			</div>
		</div><!-- /.navbar -->
		<div class="main blank-space-100px">
			<div class="container">
				@yield('form-content')
			</div>
		</div><!-- /.main -->
		<div class="footer">
			<div class="container text-center">
				<p>Copyright &copy; 2015 Salam Standard. All rights reserved. <br />
				Tripfez is a registered trademark of Lagisatu Travel Sdn Bhd (KPP 7142)</p>
			</div>
		</div><!-- /.footer -->
	</div><!-- /.wrapper -->
	<a class="back-top" href="#top">back to top</a>
</body>
</html>