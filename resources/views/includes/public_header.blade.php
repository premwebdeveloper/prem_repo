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

	<script src="{{ asset('resources/assets/js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('resources/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('resources/frontend_assets/js/bootstrap-datepicker.js') }}"></script>

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

	<link href="{{ asset('resources/frontend_assets/css/list_page17ba.css?1480271400') }}" rel="stylesheet">
	<link href="{{ asset('resources/frontend_assets/css/bootstrap.min17ba.css?1480271400') }}" rel="stylesheet">
	<link href="{{ asset('resources/frontend_assets/css/style17ba.css?1480271400') }}" rel="stylesheet">
	<link href="{{ asset('resources/frontend_assets/css/easytabs17ba.css?1480271400') }}" rel="stylesheet">
	<link href="{{ asset('resources/frontend_assets/css/font-awesome.min17ba.css?1480271400') }}" rel="stylesheet">
	<link href="{{ asset('resources/frontend_assets/css/top.css') }}" rel="stylesheet">

	<link href="{{ asset('resources/frontend_assets/css/bootstrap-datepicker.css') }}" rel="stylesheet">

	<link href="{{ asset('resources/frontend_assets/css/custom.css') }}" rel="stylesheet">


</head>

<body class="lazy">

	<div class="top">
		<div class="newskannada-vaish">
			<a href="tel:+91-9871495195" title="Video">
				<i class="fa fa-phone"></i> +91-9871495195
			</a>
			<a href="mailto:info@vaishparivarsangh.com" title="Video">
				<i class="fa fa-envelope"></i> info@vaishparivarsangh.com
			</a>
		</div>


		<div class="newskannada-video">

			<a href="javascript:;"><i class="fa fa-instagram"></i></a>
			<a href="javascript:;"><i class="fa fa-twitter"></i></a>
			<a href="javascript:;"><i class="fa fa-facebook"></i></a>
			<a href="{{ route('donate') }}"><img src="resources/frontend_assets/img/donate-button.gif" alt="Donate Now" class="img-responsive"></a>
		</div>

	</div>

	<div class="header">
		<div class="row">
			<div class="col-md-12">
				<img src="{{asset('resources/frontend_assets/img/homebanner.gif')}}" class="img-responsive" alt="Home Banner">
			</div>

<!-- 			<div class="col-md-1 hidetext">
				<img src="{{asset('resources/frontend_assets/img/maharaja-agrasen.png')}}" class="img-responsive" alt="News Karnataka">
			</div>
			<div class="col-md-2 hidetext">
				<img src="{{asset('resources/frontend_assets/img/mahalaxmi.png')}}" class="img-responsive" alt="Maha Laxmi" style="height: 115px;">
			</div>
			<div class="col-md-5">
				<div class="row pt10px">
					<div class="col-md-12">
					<h1 class="text-center white">Akhil Bhartiya <br>Vaish Parivar Sangh</h1>
						<h5 class="text-center white">संगठन में शक्ति है व् शक्ति की पूजा होती है ।<br>
						(एकता में बल है - Union is Strength)
						</h5>
					</div>
				</div>
			</div>
			<div class="col-md-2 hidetext">
				<img src="{{asset('resources/frontend_assets/img/agar.gif')}}" class="img-responsive" alt="News">
			</div>
			<div class="col-md-1 hidetext">
				<img src="{{asset('resources/frontend_assets/img/Gandhi.png')}}" class="img-responsive" alt="News">
			</div>
			<div class="col-md-1 hidetext">
				<img src="{{asset('resources/frontend_assets/img/e7487b.png')}}" class="img-responsive" alt="News" style="height: 110px;">
			</div> -->
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
					<li><a href="{{ route('aboutus') }}" title="Home" class="text-center">संस्था को जानें <br>About Us</a></li>
					<li><a href="{{ route('aims') }}" title="Home" class="text-center">लक्ष्य और उद्देश्य<br>Aims & Objectives</a></li>
					<li><a href="{{ route('how_can_help') }}" title="संस्था सहयोगी कैसे बने" class="text-center">संस्था सहयोगी कैसे बनें<br> How can we help our body</a></li>
					<li><a href="{{ route('suggestion') }}" class="text-center" title="Your Suggestion">आपके सुझाव<br>Your Suggestion<br></a></li>
					<li><a href="{{ route('problem') }}" class="text-center" title="Home">आपकी समस्याएं <br>Put Your Problem</a></li>
					@if (Auth::guest())
						<li><a href="{{ route('register') }}" class="text-center" title="Home">सदस्य बनें<br>हमसे जुड़ें<br>Join Us</a></li>
						<li><a href="{{ route('login') }}" class="text-center" title="Home">लॉग इन करें<br>Login</a></li>
					@else
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" title="News Section with all the city news" aria-expanded="true">{{ Auth::user()->name }}
      						<b class="caret"></b>
          	          		</a>
							<ul class="dropdown-menu">
								@if(Auth::user()->id != 1)
									<li><a href="{{ route('profile') }}" title="Profile">Profile</a></li>
								@endif
                               	<li><a href="{{ route('change_password') }}" title="Change Password">Change Password</a></li>
                               	<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();" title="Logout">Logout</a></li>
                               	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
								</form>
                           </ul>
                      	</li>
					</div>
					@endif
					<!-- <li><a href="" class="text-center" title="Home">मेरा सहयोग <br>Donation</a></li> -->
				</ul>
			</div>
		</div>
	</div><!--navigation-->