<div class="logo">
	<img src="http://localhost/mamuju/mamuju-web/public/asset/mt.png">
</div>
<div class="menu">
	<div class="list js-link" data-link="{{url('/')}}">
		<div class="icon red active">
			<i class="far fa-fire"></i>
		</div>
		<span>Populer</span>
	</div>
	<div class="list js-link" data-link="{{url('/kategori/infografis')}}">
		<div class="icon green active">
			<i class="far fa-map"></i>
		</div>
		<span>Infografis</span>
	</div>
	<div class="list js-link" data-link="{{url('/kategori/tv')}}">
		<div class="icon orange active">
			<i class="far fa-tv"></i>
		</div>
		<span>TV</span>
	</div>
	<div class="list">
		<div class="icon default active">
			<i class="fas fa-th"></i>
		</div>
		<span>Lainnya</span>
	</div>
	<div class="list">
		<div class="icon default active" data-toggle="modal" data-target="#exampleModalCenter">
			<i class="fas fa-search"></i>
		</div>
		<span>Cari</span>
	</div>
</div>
<div class="logister">
	@if(session('id'))
	<div class="account account-img js-link" data-link="{{url('u/profil')}}">
		<img src="/{{env('PATH_STORAGE').session('avatar')}}">
	</div>
	@else
	<div class="account js-link" data-link="{{url('login')}}">
		<i class="fal fa-user-circle"></i> <span class="text">Masuk</span>
	</div>
	@endif
</div>