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
<div class="headline js-link" data-link="{{url('viewer/politik/'.$headline['seo'])}}">
	<img src="/{{env('PATH_STORAGE').$headline['gambar']}}">
	<div class="title my-2">
		<h5>{{$headline['judul']}}</h5>
	</div>
	<div class="desc">
		@php
			$headline_render = strip_tags($headline['berita']);
		@endphp
		{{str_limit($headline_render, 200)}}
	</div>
</div>
<div class="news mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Berita Terbaru</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
		@foreach($news_line as $item)
		<div class="col-md-6 col-6">
			<img src="/{{env('PATH_STORAGE').$item['gambar']}}">
			<div class="title mt-1">
				<h6>{{$item['judul']}}</h6>
			</div>
			<div class="desc">
				@php
					$headline_render = strip_tags($item['berita']);
				@endphp
				{{str_limit($headline_render, 70)}}
			</div>
			<div class="info">
				<div class="label yellow mt-1">Politik</div>
				<div class="tanggal mt-1">31/07/2018</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="line">
		@foreach($news_list as $item)
		<div class="row mt-3">
			<div class="col-md-5 col-5">
				<img src="/{{env('PATH_STORAGE').$item['gambar']}}">
			</div>
			<div class="col-md-7 col-7">
				<div class="title">
					<h6>{{str_limit($item['judul'], 50)}}</h6>
				</div>
				<div class="info">
					<div class="label orange mt-1">Internasional</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<div class="infografis mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Infografis</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
	<div class="scrollabel">
		<div class="scroll">
			<div class="content">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/wwmpgjuwj2hwtcgohgrr.jpg">
				<div class="title my-2">
					<h5>{{str_limit('PA 212 Rutin Laporkan Perkembangan Koalisi Pilpres ke Rizieq Syihab', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
			<div class="content">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/uz7jcxy05jk04nxli6ej.jpg">
				<div class="title my-2">
					<h5>{{str_limit('Susi Curhat ke Sultan HB X, Sering Merasa Sendiri', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
			<div class="content">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/zapedmsozq27a4qaefj7.jpg">
				<div class="title my-2">
					<h5>{{str_limit('BMKG Ungkap Alasan Mengapa Gempa di Lombok Hancurkan Ratusan Rumah', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="foto mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Foto</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
	<div class="scrollabel">
		<div class="scroll">
			<div class="content-large">
				<img src="https://gimg.kumpar.com/kumpar/image/upload/v1517460326/o0taahb5r3ffoyvhvx6g.jpg">
				<div class="title my-2">
					<h5>{{str_limit('PA 212 Rutin Laporkan Perkembangan Koalisi Pilpres ke Rizieq Syihab', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
			<div class="content-large">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/uz7jcxy05jk04nxli6ej.jpg">
				<div class="title my-2">
					<h5>{{str_limit('Susi Curhat ke Sultan HB X, Sering Merasa Sendiri', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
			<div class="content-large">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/zapedmsozq27a4qaefj7.jpg">
				<div class="title my-2">
					<h5>{{str_limit('BMKG Ungkap Alasan Mengapa Gempa di Lombok Hancurkan Ratusan Rumah', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="video mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Video</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
	<iframe width="1311" height="480" src="https://www.youtube.com/embed/lnuBYMQ7mL8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div class="olahraga mt-3">
	<div class="row">
		<div class="col-md-12">
			<h6 class="box-title float-left">Berita Terbaru</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
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