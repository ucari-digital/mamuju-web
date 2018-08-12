@extends('mobile.layout')
@section('menu-maps')
<div class="row py-2 px-0 mx-0">
	<div class="col-md-4 col-4">
		<a href="{{url('/kategori/infografis')}}" id="infografis">Infografis</a>
	</div>
	<div class="col-md-4 col-4">
		<a href="{{url('/')}}" id="populer">Populer</a>
	</div>
	<div class="col-md-4 col-4">
		<a href="{{url('/kategori/tv')}}" id="tv">TV</a>
	</div>
</div>
@endsection
@section('content')
<div class="berita">
{{-- 	<div class="page-map">
		<div class="item">Home</div>
		<div class="separator"><i class="fal fa-angle-right"></i></div>
		<div class="item">TV</div>
		<div class="separator"><i class="fal fa-angle-right"></i></div>
		<div class="item">Ayo nilai calon pemimpinmu</div>
	</div> --}}
	{{-- <hr class="dashed my-1"> --}}
	<h6 class="title pt-3 pb-1">{{$data['judul']}}</h6>
	<div class="time-upload">{{$data['tgl_upload']}} <div class="coment-counter">3 <i class="fal fa-comment-alt"></i></div></div>
	<div class="image">
		<img src="/{{env('PATH_STORAGE').$data['gambar']}}" alt="">
		<small class="img-ket">{{$data['keterangan_gambar']}}</small>
	</div>
	<div class="konten py-2">
		{!! $data['berita'] !!}
	</div>
	<div class="author py-2">
		<div class="row">
			<div class="col-md-6 col-6 js-link" data-link="{{url('u/dimas')}}">
				<div class="avatar">
					<img src="https://cdn.dribbble.com/users/1449711/avatars/small/f845741c6473cdb5e94bfbcdd8ccfa4e.jpg?1478158347">
				</div>
				<div class="box">
					<div class="name">Dimas Adi Satria</div>
					<div class="position">Penulis</div>
				</div>
			</div>
			<div class="col-md-6 col-6 js-link" data-link="{{url('u/dimas')}}">
				<div class="avatar">
					<img src="https://cdn.dribbble.com/users/33073/avatars/small/d9e19216dce321777fecd4997ea55f5c.png?1530166659">
				</div>
				<div class="box">
					<div class="name">Reyhan Neesta</div>
					<div class="position">Editor</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tags py-2">
		<div class="label">Tags : </div>
		<div class="list px-2">
			<div class="item">Pilpres</div>
			<div class="item">Politik</div>			
		</div>
	</div>
	<div class="komentar pt-2 my-2">
		<div class="label">Komentar</div>
		<form>
			<textarea class="text-kometar mt-2" placeholder="Tulis komentar disini"></textarea>
			<button type="submit" class="button-komentar">Kirim</button>
		</form>
	</div>
	<div class="viewer-komentar">
		<div class="list">
			<div class="avatar">
				<img src="https://cdn.dribbble.com/users/215889/avatars/small/dcde254776d3361eb3705f8277d824de.jpg?1442729223">
			</div>
			<div class="box">
				<div class="name">Alex Young Dump</div>
				<div class="time">10-10-2018</div>
			</div>
			<div class="komentar-content">
				{{str_limit('Rantai Landing page. a landing page for crypto wallet.it was amazing working on dark landing page with glowing neon colors and this super cool illustration is done by one of our best pixelz magician', 200)}}
			</div>
		</div>
		<div class="list">
			<div class="avatar">
				<img src="https://cdn.dribbble.com/users/787324/avatars/small/600b0f5927abf58ce300c8cc2ab9cb72.jpg?1480526087">
			</div>
			<div class="box">
				<div class="name">Gustang Sabar</div>
				<div class="time">10-10-2018</div>
			</div>
			<div class="komentar-content">
				{{str_limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 200)}}
			</div>
		</div>
		<div class="load-more-komentar">Muat lebih banyak komentar</div>
	</div>
</div>
@endsection