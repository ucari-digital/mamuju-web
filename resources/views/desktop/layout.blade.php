<html>
<head>
	<meta charset="UTF-8">
	<title>MAMUJUTODAY</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/desktop.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/desktop-customize.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/fontawesome/css/all.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/animate.css')}}">
	<script src="{{url('js/sweetalert2.all.js')}}"></script>
	@yield('header')
</head>
<body>
	@include('sweetalert::alert')

	<!-- Modal -->
	<form method="get" action="{{url('search')}}">
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<input type="text" name="text" id="input-cari" class="form-control border-0" placeholder="berita apa yang anda cari?..." aria-label="Pencarian" aria-describedby="basic-addon1" onsubmit="">
					</div>
				</div>
			</div>
		</div>
	</form>
	{{--End Modal--}}

	<div class="sidebar">
		@include('desktop.partial.sidebar')
	</div>
	<div class="mega-content">
		<div class="m-0 p-0">
			<div class="content">
				@yield('content')
				<div class="box-nm mt-3">
				@include('desktop.partial.footer')
				</div>
			</div>
		</div>
		<div class="col-md-4 m-0 p-0">
			<div class="viewer">
				@if(! session('id'))
					<div class="signin">
						@include('desktop.auth.login-konten')
					</div>
				@else
					<div class="placeholder"></div>
					<div class="placeholder-text">Hai, <span class="js-link text-primary" data-link="{{url('u/profil')}}">{{session('name')}}</span> sepertinya kamu belum membaca berita?</div>
				@endif
				<div class="loading"></div>
				<div class="loader"></div>
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