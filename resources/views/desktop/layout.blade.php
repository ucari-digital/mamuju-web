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
				<div class="loading"></div>
				<div class="loader"></div>
				<div class="placeholder"></div>
				<div class="placeholder-text">Buka berita dan baca disini.</div>
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