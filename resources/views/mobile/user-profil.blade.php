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
		<img src="{{env('PATH_STORAGE').session('avatar')}}" alt="">
	</div>
	<div class="info">
		<div class="name">{{session('name')}}</div>
	</div>
	<div class="divider">
		<div class="btn btn-primary btn-block btn-dark js-link" data-link="{{url('logout')}}">Keluar</div>
	</div>
</div>
@endsection