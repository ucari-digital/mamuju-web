@extends('mobile.layout')
@section('title')
	MAMUJUTODAY
@endsection
@section('description')
	berita menarik hari ini
@endsection
@section('content')
<div class="container">
	<div class="block-nav x-m">
		<div class="row">
			<div class="col-md-3 col-3 js-link nav-item lb tb" data-link="{{url('/kategori/infografis')}}">
				<div class="item green" id="infografis">
					<div class="icon">
						<i class="far fa-map"></i>
					</div>
					<span>Infografis</span>
				</div>
			</div>
			<div class="col-md-3 col-3 js-link nav-item lb tb" data-link="{{url('/')}}">
				<div class="item red" id="populer">
					<div class="icon">
						<i class="far fa-fire">
						<div class="m-label">Hot</div>
						</i>
					</div>
					<span>Populer</span>
				</div>
			</div>
			<div class="col-md-3 col-3 js-link nav-item lb tb" data-link="{{url('/kategori/tv')}}">
				<div class="item orange" id="tv">
					<div class="icon">
						<i class="far fa-tv"></i>
					</div>
					<span>TV</span>
				</div>
			</div>
			<div class="col-md-3 col-3 nav-item tb" id="menu">
				<div class="item orange" id="tv">
					<div class="icon">
						<i class="fas fa-th"></i>
					</div>
					<span>Lainnya</span>
				</div>
			</div>
		</div>
	</div>
</div>
@foreach($data_single as $item)
<div class="box-single js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
	<img src="{{env('PATH_STORAGE').$item['gambar']}}">
	<div class="content">
		<h5 class="title">{{str_limit($item['judul'], 50)}}</h5>
		<div class="description">
			@php
			$headline_render = strip_tags($item['berita']);
			@endphp
			{{str_limit($headline_render, 100)}}
		</div>
		<div class="information mt-3">
			<div class="category mr-2" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
			<div class="time">
				{{App\Helper\TimeFormat::formatId($item['created_at'])}}
			</div>
		</div>
	</div>
</div>
@endforeach
<div class="container">
@foreach($data_multiple as $item)
<div class="box-list mt-3">
	<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
	<div class="content">
		<div class="title">{{str_limit($item['judul'], 50)}}</div>
		<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
		<div class="category" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
	</div>
</div>
@endforeach
</div>
@endsection