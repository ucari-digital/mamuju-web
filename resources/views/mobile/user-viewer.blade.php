@extends('mobile.layout')
@section('content')
<div class="profil py-3 my-3">
	<div class="avatar">
		<img src="https://cdn.dribbble.com/users/1769044/screenshots/4662857/img_1867.png" alt="">
	</div>
	<div class="info">
		<div class="name">Dimas Adi Satria</div>
	</div>
</div>
<div class="news mt-3">
	<div class="line">
		<div class="row mt-3">
			<div class="col-md-5 col-5">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/bkncjlu5gizsilv8qjmq.jpg">
			</div>
			<div class="col-md-7 col-7">
				<div class="title">
					<h6>{{str_limit('Pelajar di Tangerang yang Dibacok Saat Tawuran Dirujuk ke RSCM', 50)}}</h6>
				</div>
				<div class="info">
					<div class="label orange mt-1">Internasional</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-5 col-5">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/wlm0aecueqmsfdj3fyou.jpg">
			</div>
			<div class="col-md-7 col-7">
				<div class="title">
					<h6>{{str_limit('Infografik: 19 Titik Gerbang Tol yang Ditutup Saat Asian Games', 50)}}</h6>
				</div>
				<div class="info">
					<div class="label green mt-1">Olahraga</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-5 col-5">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/atr2r2puocqydu3f82nf.jpg">
			</div>
			<div class="col-md-7 col-7">
				<div class="title">
					<h6>{{str_limit('Bom Bunuh Diri Serang Gedung Pemerintahan Afghanistan, 15 Orang Tewas', 50)}}</h6>
				</div>
				<div class="info">
					<div class="label orange mt-1">Internasional</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection