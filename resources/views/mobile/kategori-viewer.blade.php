@extends('mobile.layout')
@section('content')
<div class="block-nav my-3">
	<div class="row">
		<div class="col-md-4 col-4 js-link" data-link="{{url('/kategori/infografis')}}">
			<div class="item green" id="infografis">
				<i class="far fa-map"></i>
				<span>Infografis</span>
			</div>
		</div>
		<div class="col-md-4 col-4 js-link" data-link="{{url('/')}}">
			<div class="item red" id="populer">
				<i class="far fa-fire"></i>
				<span>Populer</span>
			</div>
		</div>
		<div class="col-md-4 col-4 js-link" data-link="{{url('/kategori/tv')}}">
			<div class="item orange" id="tv">
				<i class="far fa-tv-retro"></i>
				<span>TV</span>
			</div>
		</div>
	</div>
</div>
<div class="search mt-3">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text border-0" id="basic-addon1"><i class="far fa-search"></i></span>
		</div>
		<input type="text" class="form-control border-0" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon1">
	</div>
</div>
<hr class="m-0" style="border-top: 1px dashed rgba(0,0,0,.1)">
<h5 class="kategori-title">Infografis</h5>
<div class="headline">
	<img src="https://alibaba.kumpar.com/kumpar/image/upload/c_fill,g_face,f_jpg,q_auto,fl_progressive,fl_lossy,w_800/yomvnyhqzf88t3c0ukse.jpg">
	<div class="title my-2">
		<h5>Ayo Nilai Calon Pemimpinmu</h5>
	</div>
	<div class="desc">
		{{str_limit('Riuh rendah Pilpres 2019 sudah terasa di seluruh pelosok negeri. Terlepas dari lobi-lobi bawah tangan yang masih terus terjadi, masyarakat tampak bersemangat mengikuti detik demi detik gempita pesta demokrasi lima tahunan ini.', 150)}}
	</div>
</div>
<hr style="border-top: 1px dashed rgba(0,0,0,.1)">
<div class="news mt-3">
	<div class="line">
		<div class="row mt-3">
			<div class="col-md-5 col-5">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/bkncjlu5gizsilv8qjmq.jpg">
			</div>
			<div class="col-md-7 col-7">
				<div class="title">
					<h6>{{str_limit('Pelajar di Tangerang yang Dibacok Saat Tawuran Dirujuk ke RSCM', 50)}}</h6>
				</div>
				<div class="info">
					<div class="label orange mt-1">Internasional</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-5 col-5">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/wlm0aecueqmsfdj3fyou.jpg">
			</div>
			<div class="col-md-7 col-7">
				<div class="title">
					<h6>{{str_limit('Infografik: 19 Titik Gerbang Tol yang Ditutup Saat Asian Games', 50)}}</h6>
				</div>
				<div class="info">
					<div class="label green mt-1">Olahraga</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-5 col-5">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/atr2r2puocqydu3f82nf.jpg">
			</div>
			<div class="col-md-7 col-7">
				<div class="title">
					<h6>{{str_limit('Bom Bunuh Diri Serang Gedung Pemerintahan Afghanistan, 15 Orang Tewas', 50)}}</h6>
				</div>
				<div class="info">
					<div class="label orange mt-1">Internasional</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection