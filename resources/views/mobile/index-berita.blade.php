@extends('mobile.layout')


@section('title')
	{{$judul}}
@endsection

@section('menu-maps')
	@include('mobile.partial.navigation')
@endsection


@section('content')
<div class="container">
	<div class="title-nav">
		<div class="title">Index</div>
	</div>
	<form action="{{url('index')}}" method="get">
		<div class="row">
			<div class="col-md-9 col-9">
				<div class="form-group">
					<select name="kategori" class="form-control">
						<option value="">All</option>
						@foreach($kategori as $item)
							<option value="{{$item['id']}}">{{$item['nama_kategori']}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-3 col-3">
				<button type="submit" class="btn btn-dark">Lihat</button>
			</div>
		</div>
	</form>
	@foreach($berita as $item)
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
@endsection


@section('footer')
@endsection