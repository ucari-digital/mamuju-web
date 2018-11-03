<div class="layout-menu">
	<div class="container">
		<form method="get" action="{{url('search')}}" class="mb-5">
			<div class="search mt-3">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text border-0" id="basic-addon1"><i class="far fa-search"></i></span>
					</div>
					<input type="text" name="text" class="form-control border-0" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon1" onsubmit="">
				</div>
			</div>
			<div class="list-menu">
				@foreach(App\Http\Controllers\GlobalController::kategori()['data'] as $item)
				<div class="list js-link" data-link="{{url('kategori/'.$item['nama_kategori'])}}"><i class="far fa-circle"></i> {{$item['nama_kategori']}}</div>
				@endforeach
			</div>
		</form>
	</div>
	<div class="menu-button-close">
		Tutup
	</div>
</div>