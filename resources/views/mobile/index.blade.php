@extends('mobile.layout')
@section('content')
<div class="block-nav mb-3" style="margin-top: 80px">
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
@foreach($headline as $headline)
<div class="headline js-link" data-link="{{url('viewer/politik/'.$headline['seo'].'-'.$headline['id'])}}">
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
@endforeach
<div class="news mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Berita Terbaru</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
		@foreach($news_line as $item)
		<div class="col-md-6 col-6 js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
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
				<div class="label mt-1" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
				<div class="tanggal mt-1">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="line mt-2">
		@foreach($news_list as $item)
		<div class="row mt-3 js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
			<div class="col-md-5 col-5">
				<img src="/{{env('PATH_STORAGE').$item['gambar']}}">
			</div>
			<div class="col-md-7 col-7">
				<div class="title">
					<h6>{{str_limit($item['judul'], 50)}}</h6>
				</div>
				<div class="info">
					<div class="label mt-1" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
					<div class="tanggal mt-1">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
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
			@foreach($infografis as $item)
			<div class="content js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
				<img src="/{{env('PATH_STORAGE').$item['gambar']}}">
				<div class="title my-2">
					<h5>{{str_limit($item['judul'], 50)}}</h5>
				</div>
				<div class="info">
					<div class="label mt-1" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
					<div class="tanggal mt-1">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
				</div>
			</div>
			@endforeach
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
			@foreach($foto as $item)
			<div class="content-large js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
				<img src="/{{env('PATH_STORAGE').$item['gambar']}}">
				<div class="title my-2">
					<h5>{{str_limit($item['judul'], 50)}}</h5>
				</div>
				<div class="info">
					<div class="label mt-1" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
					<div class="tanggal mt-1">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
				</div>

			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="video mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">TV</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
	@foreach($video as $item)
	<div class="content js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<img src="/{{env('PATH_STORAGE').$item['gambar']}}">
		<div class="title my-2">
			<h5>{{$item['judul']}}</h5>
		</div>
		<div class="info">
			<div class="label mt-1" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
			<div class="tanggal mt-1">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
		</div>

	</div>
	@endforeach
</div>
@endsection