@extends('mobile.layout')
@section('content')
<div class="profil py-3">
	<div class="avatar">
		<img src="{{env('PATH_STORAGE').$data['users']['avatar']}}" alt="">
	</div>
	<div class="info">
		<div class="name">{{$data['users']['name']}}</div>
	</div>
</div>
<div class="news mt-3">
	<div class="container">
		@foreach($data['berita'] as $item)
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
</div>
@endsection