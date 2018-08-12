<html>
<head>
	<meta charset="UTF-8">
	<title>MAMUJUTODAY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/mobile.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/fontawesome/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}">
</head>
<body>
	<div class="navigation">
		<div class="menu" id="menu">
			<i class="fal fa-bars"></i>
		</div>
		<div class="logo">
			<img class="rounded  mx-auto d-block js-link" data-link="{{url('/')}}" src="{{url('asset/logo.png')}}">
		</div>
		<div class="menu-maps">
			@yield('menu-maps')
		</div>
	</div>
	<div class="container">
		@yield('content')
	</div>
	<div class="footer mt-3 pt-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-12">
					<div class="subscribe">
						<form action="">
							<div class="input-group mb-3">
								<input type="text" class="form-control border-0" placeholder="Alamat Email" aria-label="Alamat Email" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary border-0" type="button" id="button-addon2">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<hr class="mt-0">
			<div class="row footer-text">
				<div class="col-md-6 col-6">
					<small>Redaksi</small>
					<small>Pedoman Media Siber</small>
					<small>Tentang Kami</small>
					<small>Disclaimer</small>
					<small>Kontak</small>
				</div>
				<div class="col-md-6 col-6 border-left">
					<small>Beriklan</small>
					<small>Komplain</small>
					<small>Facebook</small>
					<small>Twitter</small>
					<small>Instagram</small>
				</div>
			</div>
			<hr class="my-2">
			<div class="row pb-2">
				<div class="col-md-12 col-12">
					<small>Copyright © 2017 PT. Media Mandar Nusantara</small>
				</div>
			</div>
		</div>
	</div>
	<div class="partial-menu">
		@include('mobile.partial.menu')
	</div>
	{{-- START JAVASCRIPT --}}
	<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/mobile.js')}}"></script>
	@yield('footer')
	<script type="text/javascript">
		$(document).ready(function() {
			if ('{{url('/kategori/infografis')}}' == '{{url()->full()}}') {
				$('#infografis').addClass('active');
			}
			if ('{{url('/populer')}}' == '{{url()->full()}}') {
				$('#populer').addClass('active');
			}
			if ('{{url('/kategori/tv')}}' == '{{url()->full()}}') {
				$('#tv').addClass('active');
			}

		});
		$( "img" ).on('error', function() {
		    $(this).attr('src', '{{url('asset/no_image_to_show_.jpg')}}')
		})
	</script>
</body>
</html>