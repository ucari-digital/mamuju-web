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
{{-- ST HEADLINE --}}
@foreach($headline as $item)
<div class="box-single js-link headline" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
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
{{-- END HEADLINE --}}

<div class="container">
	<div class="title-nav">
		<div class="title">Terbaru</div>
		<div class="button">
			<a href="" class="dark">Lebih banyak</a>
		</div>
	</div>
	@foreach($terbaru as $item)
	<div class="box-list mt-3 js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
		<div class="content">
			<div class="title">{!! str_limit($item['judul'], 50) !!}</div>
			<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
			<div class="category" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
		</div>
	</div>
	@endforeach
</div>
<div class="infografis" style="background-color: #4caf50">
	<div class="container">
		<div class="title-nav">
			<div class="title white">Infografis</div>
			<div class="button">
				<a href="" class="white">Lebih banyak</a>
			</div>
		</div>
		@foreach($infografis as $item)
		<div class="box-double js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
			<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
			<div class="content">
				<div class="title mb-1 pb-1">{!! str_limit($item['judul'], 50) !!}</div>
				<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<div class="foto">
	<div class="container">
		<div class="title-nav">
			<div class="title dark">FOTO</div>
			<div class="button">
				<a href="" class="dark">Lebih banyak</a>
			</div>
		</div>
		<div class="box-scroll">
			<div class="scroll">
				@foreach($foto as $item)
				<div class="box-item js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
					<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
					<div class="content">
						<div class="title">{!! str_limit($item['judul'], 50) !!}</div>
					</div>
					<div class="information">
						<div class="category" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
						<div class="time">
							{{App\Helper\TimeFormat::formatId($item['created_at'])}}
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<div class="tv">
	<div class="container">
		<div class="title-nav">
			<div class="title dark">TV</div>
			<div class="button">
				<a href="" class="dark">Lebih banyak</a>
			</div>
		</div>
		</div>
	@foreach($video as $item)
	<div class="box-single js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
		<div class="content">
			<h5 class="title">{!! str_limit($item['judul'], 50) !!}</h5>
			<div class="information mt-3">
				<div class="category" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
				<div class="time">
					{{App\Helper\TimeFormat::formatId($item['created_at'])}}
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
<div class="container">
	<div class="title-nav">
		<div class="title">Terpopuler</div>
		<div class="button">
			<a href="" class="dark">Lebih banyak</a>
		</div>
	</div>
	@foreach($populer as $item)
	<div class="box-list mt-3 js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
		<div class="content">
			<div class="title">{!! str_limit($item['judul'], 40) !!}</div>
			<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
			<div class="category" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
		</div>
	</div>
	@endforeach
</div>
@endsection
@section('footer')

@endsection