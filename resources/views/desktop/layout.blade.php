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
	@yield('header')
</head>
<body>
	@include('sweetalert::alert')
	<div class="sidebar">
		@include('desktop.partial.sidebar')
	</div>
	<div class="content">
		<div class="col-md-12">
			<div class="card text-white bg-dark mb-3">
				<div class="card-body">
					@if(Auth::check())
						<a href="{{url('u/profil')}}" class="btn btn-primary">welcome, {{Auth::User()->name}}</a>
					@else
						<div class="btn-group float-right">
							<a href="{{url('login')}}" class="btn btn-success">Do you want login?</a>
							<a href="{{url('register')}}" class="btn btn-info">or register?</a>
						</div>
					@endif
				</div>
			</div>
		</div>
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