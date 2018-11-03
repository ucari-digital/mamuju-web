<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/desktop.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/fontawesome/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}">
	<script src="{{url('js/sweetalert2.all.js')}}"></script>
	@yield('header')
	<script>
		var url = '{{url('/')}}';
		var path = '{{env('PATH_STORAGE', '')}}'
	</script>
	<style type="text/css">
		@keyframes placeHolderShimmer{
			0% {
				background-position: -700px 0;
			}
			100% {
				background-position: 0px 0;
			}
		}
		.animated-background {
			animation-duration: 1.4s;
			animation-fill-mode: forwards;
			animation-iteration-count: infinite;
			animation-name: placeHolderShimmer;
			animation-timing-function: linear;
			background: #f6f7f8;
			background: linear-gradient(to right,  #eeeeee 40%, #dddddd 50%, #eeeeee 40%);
			background-repeat: no-repeat;
			background-size: 1200px 160px;
			/*position: absolute;*/
			width: 100%;
			height: 200px;
			transform: translate3d(0, 0, 0);
			transition: all .4s ease-in-out;
		}
	</style>
</head>
<body>
	@include('sweetalert::alert')
	@include('desktop.partial.navbar')
	<div class="layout">
		@yield('content')
		<div class="footer mt-3">
			<div class="col-v1"></div>
			<div class="col-v1">
				<div class="list">
					<a href="{{url('redaksi')}}">Redaksi</a>
					<a href="{{url('p-media-siber')}}">Pedoman Media Siber</a>
					<a href="{{url('')}}">Tentang Kami</a>
					<a href="{{url('disclaimer')}}">Disclaimer</a>
					<a href="{{url('kontak')}}">Kontak</a>
				</div>
			</div>
			<div class="col-v1" style="width: 200px">
				<div class="list">
					<a href="{{url('index')}}">Index</a>
					<a href="#">Komplain</a>
					<a href="#">Facebook</a>
					<a href="#">Twitter</a>
					<a href="#">Instagram</a>
				</div>
			</div>
			<div class="col-v2" style="width: 400px; float: right;">
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
				<div class="apps">
					<div class="dl">
						<div class="ios"></div>
						<div class="and"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- START JAVASCRIPT --}}
	<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/mobile.js')}}"></script>
	<script type="text/javascript" src="{{url('js/desktop.js')}}"></script>
	@yield('footer')
	<script type="text/javascript">
		$( "img" ).on('error', function() {
		    $(this).attr('src', '{{url('asset/no_image_to_show_.jpg')}}')
		});
	</script>
</body>
</html>