<div class="footer">
	<div class="row">
		<div class="col-md-4">
			<div class="list">
				<a href="{{url('redaksi')}}">Redaksi</a>
				<a href="{{url('p-media-siber')}}">Pedoman Media Siber</a>
				<a href="{{url('tentang-kami')}}">Tentang Kami</a>
				<a href="{{url('disclaimer')}}">Disclaimer</a>
				<a href="{{url('kontak')}}">Kontak</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="list">
				<a href="#">Beriklan</a>
				<a href="#">Komplain</a>
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="subscribe">
				<form action="{{url('subscribe')}}" method="post">
					@csrf
					<div class="input-group mb-3">
						<input type="email" name="email" class="form-control border-0" placeholder="Alamat Email" aria-label="Alamat Email" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary border-0" id="button-addon2">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
			<div class="dl">
				<div class="ios"></div>
				<div class="and"></div>
			</div>
		</div>
	</div>
</div>