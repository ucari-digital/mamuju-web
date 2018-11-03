<div class="layout-menu">
	<div class="container">
		<div id="vue-search">
			<div class="search mt-3">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text border-0" id="basic-addon1"><i class="far fa-search"></i></span>
					</div>
					<input type="text" name="text" class="form-control border-0" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon1" onsubmit="" v-model="textSearch">
				</div>
			</div>
			<button class="btn btn-dark btn-block" v-on:click="search">Mencari</button>
			<div class="box-list mt-3 js-link" v-for="item in data">
				<div class="img" v-bind:id="'hash-'+item.id" v-bind:data-img="'{{env('PATH_STORAGE')}}'+item.gambar"></div>
				<div class="content">
					<div class="title">@{{item.judul}}</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-button-close">
		Tutup
	</div>
</div>