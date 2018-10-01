@extends('mobile.layout')
@section('title')
	MAMUJUTODAY
@endsection
@section('description')
	berita menarik hari ini
@endsection
@section('menu-maps')
@include('mobile.partial.navigation')
@endsection
@section('content')
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