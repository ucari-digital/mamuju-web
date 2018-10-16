<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/mobile.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/fontawesome/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}">
	<script src="{{url('js/sweetalert2.all.js')}}"></script>
	@yield('header')
</head>
<body>
	@include('sweetalert::alert')
	<div class="navigation">
		<div class="container">
			<div class="logo">
				<div class="circle">
					<img class="rounded d-block js-link" data-link="{{url('/')}}" src="{{url('asset/mt.png')}}">
				</div>
			</div>
			<div class="search btn-more">
				<i class="far fa-search"></i>
			</div>
			@if(session('id'))
			<div class="account account-img js-link" data-link="{{url('u/profil')}}">
				<img src="{{env('PATH_STORAGE').session('avatar')}}">
			</div>
			@else
			<div class="account js-link" data-link="{{url('login')}}">
				<i class="fal fa-user-circle"></i>
			</div>
			@endif
		</div>
		<div class="menu-maps">
			@yield('menu-maps')
		</div>
	</div>
	<div class="content-parent">
		@yield('content')
	</div>
	<div class="footer">
		<div class="container">
			<div class="row input-box">
				<div class="col-md-12 col-12">
					<div class="subscribe">
						<form action="{{url('subscribe')}}" method="post">
							@csrf
							<div class="input-group mb-3">
								<input type="email" name="email" class="form-control border-0" placeholder="Alamat Email" aria-label="Alamat Email" aria-describedby="button-addon2">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary border-0" id="button-addon2">Subscribe</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row footer-text">
				<div class="col-md-6 col-6">
					<small class="js-link" data-link="{{url('redaksi')}}">Redaksi</small>
					<small class="js-link" data-link="{{url('p-media-siber')}}">Pedoman Media Siber</small>
					<small class="js-link" data-link="{{url('')}}">Tentang Kami</small>
					<small class="js-link" data-link="{{url('disclaimer')}}">Disclaimer</small>
					<small class="js-link" data-link="{{url('kontak')}}">Kontak</small>
				</div>
				<div class="col-md-6 col-6">
					<small class="js-link" data-link="{{url('index')}}">Index</small>
					<small>Komplain</small>
					<small>Facebook</small>
					<small>Twitter</small>
					<small>Instagram</small>
				</div>
			</div>
			<hr class="my-2 dashed">
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