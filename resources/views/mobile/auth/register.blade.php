<!DOCTYPE html>
<html>
<head>
	<title>Login | MAMUJUTODAY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/mobile.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/fontawesome/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}">
</head>
<body>
	<div class="content">
		<div class="container">
			<div class="box-logister">
				<div class="logo js-link" data-link="{{url('/')}}">
					<img class="mx-auto d-block" src="{{url('asset/mt.png')}}">
				</div>
				<form action="{{url('register')}}" method="post" class="form mt-3">
					@csrf
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">
								<i class="fal fa-user-circle"></i>
							</span>
						</div>
						<input type="text" name="name" class="form-control" placeholder="Nama" aria-label="Email" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">
								<i class="fal fa-envelope"></i>
							</span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">
								<i class="fal fa-unlock"></i>
							</span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
					</div>
					<div class="form-group m-0">
						<button type="submit" class="btn btn-dark btn-block">DAFTAR</button>
					</div>
				</form>
				<div class="text my-2">Sudah punya akun ?</div>
				<button class="btn btn-block btn-outline-dark js-link" data-link="{{url('login')}}">MASUK</button>
				<div class="social-text my-3">
					<div class="text">atau daftar dengan</div>
					<hr class="line">
				</div>
				<div class="social-logister">
					<div class="g login">
						<i></i>
						<div class="text">Daftar dengan Google</div>
					</div>
					<div class="f login mt-3">
						<i class="fab fa-facebook-f"></i>
						<div class="text">Daftar dengan Facebook</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fb-root"></div>
	<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/mobile.js')}}"></script>
</body>
</html>