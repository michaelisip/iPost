<!DOCTYPE html>
<html>
<head>
	<title> iPost! | World's Best Blogging Site </title>
	<link rel="shortcut icon" href="{{asset('images/iPOST Logo.ico')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
	<style type="text/css">
		.header-img {
			background-image: url("{{URL::asset('/images/header-bg.jpg')}}");
		}

		.sect-img {
			background-image: url("{{URL::asset('/images/bg.jpg')}}");
		}
	</style>
</head>
<body>

	<!-- Sign Up Modal -->
	<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
						<h4 class="modal-title" id="myModalLabel"> Sign Up </h4>
				</div>

				<div class="modal-body">

				<!-- FORM -->
					<form class="form-horizontal" role="form" method="post" action="/process">
						{{ csrf_field()}}

						<div class="form-group">
							<label class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input name="name" type="text" class="form-control" placeholder="Enter name here.."/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input name="username" type="text" class="form-control" placeholder="Enter username here.."/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input name="email" type="email" class="form-control" placeholder="Enter email here.."/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input name="password" type="password" class="form-control" placeholder="Enter password here.."/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Sign In</button>
							</div>
						</div>
					</form>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Sign In Modal -->
	<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>

				<div class="modal-body">

				<!-- FORM -->
					<form class="form-horizontal" role="form" method="post" action="/login">
						{{ csrf_field()}}

						<div class="form-group">
							<label class="col-sm-2 control-label">Userame</label>
							<div class="col-sm-10">
								<input name="userLogIn" type="text" class="form-control" placeholder="Enter username here.."/>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input name="userPassword" type="password" class="form-control" placeholder="Enter password here.."/>
							</div>
						</div>
				
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Sign In</button>
							</div>
						</div>
					</form>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div>
		<section class="header-text">
			<h1> iPost!</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<button class="button" data-toggle="modal" data-target="#signInModal"> Sign In </button>
			<button class="button" data-toggle="modal" data-target="#signUpModal"> Sign Up </button>
		</section>
		<div class="header-img"></div>
	</div>

	<div>
		<section class="dev">
			<img src="{{URL::asset('/images/mj.jpg')}}" alt="..." class="img-rounded">
			<div class="dev-info">
				<h2>Michael John Isip</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</section>
		<div class="sect-img"></div>
	</div>
	<div class="contact">
		<h1> Contact me </h1>
		<div class="contact-links">
			<a href="">
				<img src="{{URL::asset('/images/fb.png')}}">
			</a>
			<a href="">
				<img src="{{URL::asset('/images/google.png')}}">
			</a>
			<a href="">
				<img src="{{URL::asset('/images/twitter.png')}}">
			</a>
			<a href="">
				<img src="{{URL::asset('/images/instagram.png')}}">
			</a>
		</div>
	</div>
	<div>
		<div class="container">
			<img src="{{URL::asset('images/iPOST Logo.png')}}">
			<p> Have you ever felt that urge to let your anger out? Express your feelings without someone knowing about it? The times where the stress is too much for you. Guess what. iPOST! is your friend! With iPOST! you can express your thoughts and privacy you ever dreamt of. Blog all you want, then read your previous blogs and even delete them. Developed by Michael John Isip, it serves as the finals project in Web Application II.
			</p>
		</div>
	</div>



	<script type="text/javascript" src="{{ asset('jquery/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>