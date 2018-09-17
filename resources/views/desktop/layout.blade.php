<html>
<head>
	<meta charset="UTF-8">
	<title>MAMUJUTODAY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/desktop.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/fontawesome/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}">
	<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
	<style>
		.navbar-custome{border-radius:5px;margin-left:15px;margin-right:15px;margin-bottom:20px;margin-top:-20px;background:#34495e;color:#ecf0f1;}
		a.link-navbar{color:#ecf0f1;}
		.img-profile{width:35px;height:35px;border-radius:100%}
	</style>
	@yield('header')
</head>
<body>
	@include('sweetalert::alert')
	<div class="sidebar">
		@include('desktop.partial.sidebar')
	</div>
	<div class="content">
		<nav class="navbar sticky-top navbar-custome">
			<a class="navbar-brand link-navbar" href="/"></a>
			@if(session('id'))
				<div class="account account-img js-link" data-link="{{url('u/profil')}}">
					<span class="text-capitalize">hai, {{session('name')}}</span>
					<img src="/{{env('PATH_STORAGE').session('avatar')}}" class="img img-profile">
				</div>
			@else
				<div class="btn-group float-right">
					<a href="{{url('login')}}" class="btn btn-success">ingin login?</a>
					<a href="{{url('register')}}" class="btn btn-info">atau daftar terlebih dahulu?</a>
				</div>
			@endif
		</nav>
		{{--<div class="col-md-12">--}}
			{{--<div class="card text-white bg-dark mb-3">--}}
				{{--<div class="card-body">--}}

				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
		@yield('content')
	</div>
	@include('desktop.partial.footer')
	{{-- START JAVASCRIPT --}}
	<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/mobile.js')}}"></script>
	@yield('footer')
	<script type="text/javascript">
		$( "img" ).on('error', function() {
		    $(this).attr('src', '{{url('asset/no_image_to_show_.jpg')}}')
		})
	</script>
</body>
</html>