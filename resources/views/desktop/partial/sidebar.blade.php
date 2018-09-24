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
	<div class="list" data-toggle="modal" data-target="#exampleModalCenter">
		<div class="icon default active">
			<i class="fas fa-search"></i>
		</div>
		<span>Cari</span>
	</div>
</div>
@if(session('id'))
<div class="logister">
	<div class="account js-link" data-link="{{url('u/profil')}}">
		<i class="fal fa-user-circle"></i> <span class="text text-capitalize">{{session('name')}}</span>
	</div>
</div>
@endif