@extends('mobile.layout')
@section('content')
{{-- ST MENU KATEGORI --}}
<div class="container">
	<div class="block-nav">
		<div class="row">
			<div class="col-md-3 col-3 js-link nav-item" data-link="{{url('/kategori/infografis')}}">
				<div class="item green active" id="infografis">
					<div class="icon">
						<i class="far fa-map"></i>
					</div>
					<span>Infografis</span>
				</div>
			</div>
			<div class="col-md-3 col-3 js-link nav-item" data-link="{{url('/')}}">
				<div class="item red active" id="populer">
					<div class="icon">
						<i class="far fa-fire">
						<div class="m-label">Hot</div>
						</i>
					</div>
					<span>Populer</span>
				</div>
			</div>
			<div class="col-md-3 col-3 js-link nav-item" data-link="{{url('/kategori/tv')}}">
				<div class="item orange active" id="tv">
					<div class="icon">
						<i class="far fa-tv"></i>
					</div>
					<span>TV</span>
				</div>
			</div>
			<div class="col-md-3 col-3 nav-item btn-more">
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
{{-- END MENU KETEGORI --}}
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