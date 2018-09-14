@extends('desktop.layout')
@section('content')
@foreach($headline as $item)
<div class="headline js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
	<div class="big-banner-tr">
		<div class="img" id="hash-{{rand(000, 999)}}" data-img="/{{env('PATH_STORAGE').$item['gambar']}}"></div>
		<div class="text-banner">
			<div class="title">{{str_limit($item['judul'], 50)}}</div>
			<div class="desc">
				@php
					$headline_render = strip_tags($item['berita']);
				@endphp
				{{str_limit($headline_render, 100)}}
			</div>
			<div class="info text-center mt-3">
				<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
				<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
			</div>
		</div>
	</div>
</div>
@endforeach
<div class="c-title mt-5">Terbaru</div>
<div class="terbaru">
	@foreach($terbaru as $item)
	<div class="medium-banner js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<div class="img" id="hash-{{rand(000, 999)}}" data-img="/{{env('PATH_STORAGE').$item['gambar']}}"></div>
		<div class="title">{{str_limit($item['judul'], 50)}}</div>
		<div class="desc">
			@php
				$headline_render = strip_tags($item['berita']);
			@endphp
			{{str_limit($headline_render, 100)}}
		</div>
		<div class="info text-center mt-3">
			<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
			<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
		</div>
	</div>
	@endforeach
</div>

<div class="c-title mt-5">Infografis</div>
<div class="Infografis">
	@foreach($infografis_head as $item)
	<div class="big-banner js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<div class="img" id="hash-{{rand(000, 999)}}" data-img="/{{env('PATH_STORAGE').$item['gambar']}}"></div>
		<div class="title">{{str_limit($item['judul'], 50)}}</div>
		<div class="desc">
			@php
				$headline_render = strip_tags($item['berita']);
			@endphp
			{{str_limit($headline_render, 100)}}
		</div>
	</div>
	@endforeach

	<div class="list-banner">
		@foreach($infografis_head as $item)
		<div class="small-banner js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
			<div class="img" id="hash-{{rand(000, 999)}}" data-img="/{{env('PATH_STORAGE').$item['gambar']}}"></div>
			<div class="title text-center">
				{{str_limit($item['judul'], 50)}}
				<div class="info text-center">
					<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
					<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<div class="c-title mt-5">Foto</div>
<div class="foto">
	<div class="scrollable">
		<div class="dividder" style="width: 1300px">
			@foreach($foto as $item)
			<div class="split-banner js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
				<div class="img" id="hash-{{rand(000, 999)}}" data-img="/{{env('PATH_STORAGE').$item['gambar']}}"></div>
				<div class="title">{{str_limit($item['judul'], 50)}}</div>
				<div class="info text-center">
					<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
					<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="c-title mt-5 mb-3">Video</div>
<div class="video">
	@foreach($video as $item)
	<div class="big-banner-tr js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<div class="img" id="hash-{{rand(000, 999)}}" data-img="/{{env('PATH_STORAGE').$item['gambar']}}"></div>
		<div class="text-banner">
			<div class="title">{{str_limit($item['judul'], 50)}}</div>
			<div class="desc">
				@php
					$headline_render = strip_tags($item['berita']);
				@endphp
				{{str_limit($headline_render, 100)}}
			</div>
			<div class="info text-center mt-3">
				<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
				<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
@endsection