<div class="navbar">
	<div class="logo js-link" data-link="{{url('/')}}">
		<img src="{{url('asset/mt.png')}}">
	</div>
	<div class="menu">
		<div class="list text-green js-link" data-link="{{url('kategori/infografis')}}">Infografis</div>
		<div class="list text-red js-link" data-link="{{url('/')}}">Popular</div>
		<div class="list text-yellow js-link" data-link="{{url('kategori/Mamuju%20TV')}}">TV</div>
		<div class="list text-grey btn-more">Lainnya <i class="fas fa-angle-down"></i></div>
		@if(session('id'))
		<div class="account account-img js-link" data-link="{{url('u/profil')}}">
			<img src="{{env('PATH_STORAGE').session('avatar')}}">
		</div>
		@else
		<div class="list right js-link" data-link="{{url('login')}}">Masuk</div>
		<div class="list right js-link" data-link="{{url('register')}}">Daftar</div>
		@endif
	</div>
	<div class="more">
		<div class="row">
			@foreach(App\Http\Controllers\GlobalController::kategori()['data'] as $item)
			<div class="col-md-3 js-link" data-link="{{url('kategori/'.$item['nama_kategori'])}}">{{$item['nama_kategori']}}</div>
			@endforeach
		</div>
	</div>
</div>