@extends('mobile.layout')
@section('title')
	{{$berita['judul']}}
@endsection
@section('description')
	@php
		$news = strip_tags($berita['berita']);
	@endphp
	{{str_limit($news, 100)}}
@endsection
<<<<<<< HEAD
@section('header')
	<script>
        window.fbAsyncInit = function(){
            FB.init({
                appId: 'xxxxx', status: true, cookie: true, xfbml: true });
        };
        (function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if(d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id;
            js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
            ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
        function postToFeed(title, desc, url, image){
            var obj = {method: 'feed',link: url, picture: 'http://www.url.com/images/'+image,name: title,description: desc};
            function callback(response){}
            FB.ui(obj, callback);
        }
	</script>
=======
@section('menu-maps')
@include('mobile.partial.navigation')
>>>>>>> f063b07fb5222fc6a3e4cad2db7c01a324bd329b
@endsection
@section('content')
	{{--Modal Image--}}
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="top:10%;">
			<div class="modal-content">
				<div id="image-popup">
					<img src="{{env('PATH_STORAGE').$berita['gambar']}}" alt="hash-{{rand(000, 999)}}" style="width:100%;">
				</div>
			</div>
		</div>
	</div>
	<div class="berita">
		<h6 class="title">{{$berita['judul']}}</h6>
		<div class="time-upload">{{$berita['tgl_upload']}} <div class="coment-counter">{{$sum_komentar}} <i class="fal fa-comment-alt"></i></div></div>
		<div class="image">
			<img src="{{env('PATH_STORAGE').$berita['gambar']}}" alt="hash-{{rand(000, 999)}}" data-toggle="modal" data-target="#exampleModal">
			<small class="img-ket">{{$berita['keterangan_gambar']}}</small>
		</div>
		<div class="container">
			<div class="konten py-2">
				{!! $berita['berita'] !!}
			</div>
			<div class="author py-2">
				<div class="row">
					<div class="col-md-6 col-6 js-link" data-link="{{url('u/'.$penulis['nickname'])}}">
						<div class="avatar">
							<img src="{{env('PATH_STORAGE').$penulis['avatar']}}">
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
			<div class="tags py-2">
				<div class="label">Bagikan : </div>
				<div class="list px-2">
					@php
						$isi_berita = strip_tags($berita['berita']);
					@endphp
					<a target="_blank" data-image="{{env('PATH_STORAGE').$berita['gambar']}}" data-title="{{$berita['judul']}}" data-desc="{{str_limit($isi_berita, 100)}}" href="{{url('viewer/'.$berita['kode_kategori'].'/'.$berita['seo'].'-'.$berita['id'])}}" class="btnShareFb item" style="background-color:#007bff;color:#ecf0f1;">facebook</a>
					<a target="_blank" href="http://twitter.com/share?text={{$berita['judul']}} -&url={{url('viewer/'.$berita['kode_kategori'].'/'.$berita['seo'].'-'.$berita['id'])}}/', 'twitterShare', 'width=626,height=436" class="item" style="background-color:#17a2b8;color:#ecf0f1;">tweeter</a>
				</div>
			</div>
			@if(session('id'))
				<div class="komentar pt-2 my-2">
					<div class="label">Komentar</div>
					<form action="{{url('komentar'.'/'.$berita['id'])}}" method="post">
						@csrf
						<textarea name="komentar" class="text-kometar mt-2" placeholder="Tulis komentar disini"></textarea>
						<button type="submit" class="button-komentar">Kirim</button>
					</form>
				</div>
				<div class="viewer-komentar">
					@foreach($komentar as $item)
					<div class="list">
						<div class="avatar">
							<img src="{{env('PATH_STORAGE').$item['avatar']}}">
						</div>
						<div class="box">
							<div class="name">{{$item['name']}}</div>
							<div class="time">{{App\Helper::time_elapsed_string($item['created_at'])}}</div>
						</div>
						<div class="komentar-content">
							{{str_limit($item['komentar'], 200)}}
						</div>
					</div>
					@endforeach
					<div class="load-more-komentar">Muat lebih banyak komentar</div>
				</div>
			@endif
		</div>
	</div>
@endsection
@section('footer')
	<script>
        $('.btnShareFb').click(function(){
            elem = $(this);
            postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));

            return false;
        });
	</script>
@endsection