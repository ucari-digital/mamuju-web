@extends('desktop.layout')
@section('title')
	MAMUJUTODAY
@endsection
@section('description')
	berita menarik hari ini
@endsection
@section('content')
@foreach($headline as $item)
<div class="box-nm">
	<div class="banner fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<img src="{{env('PATH_STORAGE').$item['gambar']}}">
		<div class="attr m-32">
			<div class="title">
				{{str_limit($item['judul'], 50)}}
			</div>
			<div class="desc">
				@php
					$headline_render = strip_tags($item['berita']);
				@endphp
				{{str_limit($headline_render, 300)}}
			</div>
		</div>
	</div>
</div>
@endforeach
<hr>
<div class="title mt-4">Terbaru</div>
<div class="banner split mt-3">
	<div class="banner-box">
		@foreach($terbaru as $i => $item)
			<div class="list fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
				<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
				<div class="attr">
					<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">
						{{$item['kategori']}}
					</div>
					<div class="title">
						{{str_limit($item['judul'], 40)}}
					</div>
					<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
				</div>
			</div>
			@if($i == 2)
				@break
			@endif
		@endforeach
	</div>

	<div class="banner-box bl">
		@foreach($terbaru as $i => $item)
			@if($i > 2)
				<div class="list fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
					<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
					<div class="attr">
						<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">
							{{$item['kategori']}}
						</div>
						<div class="title">
							{{str_limit($item['judul'], 40)}}
						</div>
						<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
					</div>
				</div>
			@endif
		@endforeach
	</div>
</div>
<div class="box-bg-infografis" style="width:110%;">
	<div class="title mt-4 mb-4">Infografis</div>
	@foreach($infografis as $item)
		<div class="box-double fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
			<div class="box-content">
				<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
				<div class="attr">
					<div class="title">
						{{str_limit($item['judul'], 50)}}
					</div>
					<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
<div class="box">
	<div class="title mt-3">Foto</div>
	@foreach($foto as $item)
	<div class="box-double-foto fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
		<div class="box-content">
			<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
			<div class="bg-placeholder"></div>
			<div class="attr">
				<div class="title">
					{{str_limit($item['judul'], 50)}}
				</div>
				<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
<hr>
<div class="box-nm">
	<div class="box">
		@foreach($video_head as $item)
		<div class="box-single-block fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
			<div class="title mt-4 m-32">TV</div>
			<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
			<div class="attr m-32">
				<div class="title">
					{{str_limit($item['judul'], 50)}}
				</div>
				<div class="desc">
					@php
						$video_render = strip_tags($item['berita']);
					@endphp
					{{str_limit($video_render, 300)}}
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<div class="box" style="margin-bottom: 184px">
	<hr>
	<div class="title mt-4">Terpopuler</div>
	<div class="banner split mt-3">
		<div class="banner-box">
			@foreach($populer as $i => $item)
			<div class="list fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
				<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
				<div class="attr">
					<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">
						{{$item['kategori']}}
					</div>
					<div class="title">
						{{str_limit($item['judul'], 50)}}
					</div>
					<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
				</div>
			</div>
			@if($i == 2)
				@break
			@endif
			@endforeach
		</div>

		<div class="banner-box bl">
			@foreach($populer as $i => $item)
				@if($i > 2)
				<div class="list fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
					<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
					<div class="attr">
						<div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">
							{{$item['kategori']}}
						</div>
						<div class="title">
							{{str_limit($item['judul'], 50)}}
						</div>
						<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
					</div>
				</div>
				@endif
			@endforeach
		</div>
	</div>
</div>
@endsection