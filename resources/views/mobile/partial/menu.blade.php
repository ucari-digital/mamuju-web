<div class="layout-menu">
	<div class="container">
		<form method="post" action="{{url('search')}}">
			@csrf
			<div class="search mt-3">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text border-0" id="basic-addon1"><i class="far fa-search"></i></span>
					</div>
					<input type="text" name="text" class="form-control border-0" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon1" onsubmit="">
				</div>
			</div>
			@foreach(App\Http\Controllers\GlobalController::kategori_menu()['data'] as $item)
				<div class="list-menu">
					@foreach($item as $sub_item)
						<div class="item" style="background-color: {{App\Helper\Lib::hex2rgb(explode(';', $sub_item['label_color'])[0], 0.6)}}; color: {{explode(';', $sub_item['label_color'])[1]}};">
							{{$sub_item['nama_kategori']}}
						</div>
					@endforeach
				</div>
			@endforeach
		</form>
	</div>
	<div class="menu-button-close">
		Tutup
	</div>
</div>