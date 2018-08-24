@extends('mobile.layout')
@section('content')
<div class="berita">
{{-- 	<div class="page-map">
		<div class="item">Home</div>
		<div class="separator"><i class="fal fa-angle-right"></i></div>
		<div class="item">TV</div>
		<div class="separator"><i class="fal fa-angle-right"></i></div>
		<div class="item">Ayo nilai calon pemimpinmu</div>
	</div> --}}
	{{-- <hr class="dashed my-1"> --}}
	<h6 class="title">{{$berita['judul']}}</h6>
	<div class="time-upload">{{$berita['tgl_upload']}} <div class="coment-counter">3 <i class="fal fa-comment-alt"></i></div></div>
	<div class="image">
		<img src="/{{env('PATH_STORAGE').$berita['gambar']}}" alt="">
		<small class="img-ket">{{$berita['keterangan_gambar']}}</small>
	</div>
	<div class="container">
		<div class="konten py-2">
			{!! $berita['berita'] !!}
		</div>
		<div class="author py-2">
			<div class="row">
				<div class="col-md-6 col-6 js-link" data-link="{{url('u/dimas')}}">
					<div class="avatar">
						<img src="/{{env('PATH_STORAGE').$penulis['avatar']}}">
					</div>
					<div class="box">
						<div class="name">{{$penulis['name']}}</div>
						<div class="position">Penulis</div>
					</div>
				</div>
				<div class="col-md-6 col-6 js-link" data-link="{{url('u/dimas')}}">
					<div class="viewer">
						<i class="fal fa-eye"></i> {{$berita['visit']}} kali dibaca
					</div>
				</div>
			</div>
		</div>
		<div class="tags py-2">
			<div class="label">Tags : </div>
			<div class="list px-2">
				@php
					$tags = explode(',', $berita['tags']);
				@endphp

				@foreach($tags as $item)
					<div class="item">{{$item}}</div>
				@endforeach
			</div>
		</div>
		<div class="komentar pt-2 my-2">
			<div class="label">Komentar</div>
			<form action="{{url('komentar'.'/'.$berita['id'])}}" method="post">
				<textarea name="komentar" class="text-kometar mt-2" placeholder="Tulis komentar disini"></textarea>
				<button type="submit" class="button-komentar">Kirim</button>
			</form>
		</div>
		<div class="viewer-komentar">
			@foreach($komentar as $item)
			<div class="list">
				<div class="avatar">
					<img src="/{{env('PATH_STORAGE').$item['avatar']}}">
				</div>
				<div class="box">
					<div class="name">{{$item['name']}}</div>
					<div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
				</div>
				<div class="komentar-content">
					{{str_limit($item['komentar'], 200)}}
				</div>
			</div>
			@endforeach
			<div class="load-more-komentar">Muat lebih banyak komentar</div>
		</div>		
	</div>
</div>
@endsection