<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Vaish Parivar Sangh</title>
		
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

<link href="{{ asset('resources/frontend_assets/css/list_page17ba.css?1480271400') }}" rel="stylesheet">
<link href="{{ asset('resources/frontend_assets/css/bootstrap.min17ba.css?1480271400') }}" rel="stylesheet">
<link href="{{ asset('resources/frontend_assets/css/style17ba.css?1480271400') }}" rel="stylesheet">
<link href="{{ asset('resources/frontend_assets/css/easytabs17ba.css?1480271400') }}" rel="stylesheet">
<link href="{{ asset('resources/frontend_assets/css/font-awesome.min17ba.css?1480271400') }}" rel="stylesheet">
<link href="{{ asset('resources/frontend_assets/css/top.css') }}" rel="stylesheet">

</head>

<body class="lazy">

	<div class="top">
		<div class="newskannada-vaish">
			<a href="#" title="Video">
				<i class="fa fa-phone"></i> +91-9871495195
			</a>			
			<a href="#" title="Video">
				<i class="fa fa-envelope"></i> info@vaishparivarsangh.com
			</a>
		</div>
		
		@if (Auth::guest())
		<div class="newskannada-video">
			<a href="{{ route('register') }}">Join Us</a>
			<a href="{{ route('login') }}">Login</a>
		</div>
		@else
		<div class="newskannada-log">
			<div class="dropdown">
				<button class="dropbtn">{{ Auth::user()->name }} <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
				<div class="dropdown-content">
					<a href="{{ route('profile') }}">
						Profile
					</a>
					<a href="{{ route('settings') }}">
						Settings
					</a>
					<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">
						Logout
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</div>

			</div>
		</div>		
		@endif
	</div>
	
	<div class="header">
		<div class="row mb20px">
			<div class="col-md-1 hidetext">
				<img src="{{asset('resources/frontend_assets/img/maharaja-agrasen.png')}}" class="img-responsive" alt="News Karnataka">
			</div>		
			<div class="col-md-1 hidetext">
				<img src="{{asset('resources/frontend_assets/img/maharaja-agrasen.png')}}" class="img-responsive" alt="News Karnataka">
			</div>
			<div class="col-md-8">
				<div class="row pt10px">
					<div class="col-md-12">
					<h1 class="text-center white">Vaish Parivar Sangh</h1>
						<h5 class="text-center white">संगठन में शक्ति है व् शक्ति की पूजा होती है ।<br>
						(एकता में बल है - Union is Strength)
						</h5>
					</div>
				</div>
			</div>
			<div class="col-md-1 hidetext">
				<img src="{{asset('resources/frontend_assets/img/mahalaxmi.png')}}" class="img-responsive" style="height: 100px;" alt="News Karnataka">
			</div>	
			<div class="col-md-1 hidetext">
				<img src="{{asset('resources/frontend_assets/img/Gandhi.png')}}" class="img-responsive" alt="News Karnataka">
			</div>	
		</div>	
	</div><!--header-->
	
	<!--navigation-->
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav ">
					<li class="active"><a href="{{ url('/') }}" title="Home">Home</a></li>
					<li><a href="javascript:;" title="Home">About Us</a></li>
					<li><a href="javascript:;" title="Home">Aims & Objectives</a></li>
					<li><a href="javascript:;" title="Home">आज के विचार </a></li>
					<li><a href="javascript:;" title="Home">अब तक के समाचार</a></li>
					<li><a href="javascript:;" title="Home">Your Suggestion</a></li>
					<li><a href="javascript:;" title="Home">Submit Your Problem</a></li>
				</ul>
			</div>
		</div>
	</div><!--navigation-->