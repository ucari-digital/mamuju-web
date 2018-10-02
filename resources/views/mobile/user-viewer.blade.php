@extends('mobile.layout')
@section('title')
	MAMUJUTODAY
@endsection
@section('description')
	berita menarik hari ini
@endsection
@section('content')
	<div class="profil py-3">
		<div class="avatar">
			<img src="{{env('PATH_STORAGE').$user['avatar']}}" alt="">
		</div>
		<div class="info">
			<div class="name">{{$user['name']}}</div>
		</div>
	</div>
	<div class="news mt-3">
		<div class="container">
			@foreach($items as $item)
				<div class="box-list mt-3">
					<div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
					<div class="content">
						<div class="title">{{str_limit($item['judul'], 50)}}</div>
						<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
						<div class="category" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
					</div>
				</div>
			@endforeach

			{{ $items->links() }}
		</div>
	</div>
@endsection