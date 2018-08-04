@extends('mobile.layout')
@section('content')
<div class="search mt-3">
	<div class="input-group mb-3">
		<div class="input-group-prepend">
			<span class="input-group-text border-0" id="basic-addon1"><i class="far fa-search"></i></span>
		</div>
		<input type="text" class="form-control border-0" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon1">
	</div>
</div>
<div class="headline js-link" data-link="{{url('viewer/politik/ayo')}}">
	<img src="https://alibaba.kumpar.com/kumpar/image/upload/c_fill,g_face,f_jpg,q_auto,fl_progressive,fl_lossy,w_800/yomvnyhqzf88t3c0ukse.jpg">
	<div class="title my-2">
		<h5>Ayo Nilai Calon Pemimpinmu</h5>
	</div>
	<div class="desc">
		{{str_limit('Riuh rendah Pilpres 2019 sudah terasa di seluruh pelosok negeri. Terlepas dari lobi-lobi bawah tangan yang masih terus terjadi, masyarakat tampak bersemangat mengikuti detik demi detik gempita pesta demokrasi lima tahunan ini.', 150)}}
	</div>
</div>
<div class="news mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Berita Terbaru</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
		<div class="col-md-6 col-6">
			<img src="https://alibaba.kumpar.com/kumpar/image/upload/c_fill,g_face,f_jpg,q_auto,fl_progressive,fl_lossy,w_800/qhmlunklwtboydi9jzgk.jpg">
			<div class="title mt-1">
				<h6>Jokowi Akan Bertemu Prabowo</h6>
			</div>
			<div class="desc">
				{{str_limit('Di tengah riuh lobi-lobi jelang pendaftaran presiden dan calon presiden di Pilpres 2019, beredar informasi bahwa Presiden Joko Widodo akan bertemu dengan Ketum Gerindra Prabowo Subianto. Staf Ahli Utama Kantor Staf Kepresidenan Ali Mochtar Ngabalin mengaku sudah mendengar rencana itu.', 70)}}
			</div>
			<div class="info">
				<div class="label yellow mt-1">Politik</div>
				<div class="tanggal mt-1">31/07/2018</div>
			</div>
		</div>
		<div class="col-md-6 col-6">
			<img src="https://alibaba.kumpar.com/kumpar/image/upload/c_fill,g_face,f_jpg,q_auto,fl_progressive,fl_lossy,w_800/l9pjmy89tb78ifk692a9.jpg">
			<div class="title mt-1">
				<h6>Mahkota Raja dan Ratu Swedia Dicuri</h6>
			</div>
			<div class="desc">
				{{str_limit('Pencurian dilaporkan terjadi terhadap sejumlah benda berharga milik kerajaan Swedia. Pelaku mencuri barang berharga tersebut dari Katedral dan membawa kabur dengan speedboat.', 70)}}
			</div>
			<div class="info">
				<div class="label orange mt-1">Internasional</div>
				<div class="tanggal mt-1">31/07/2018</div>
			</div>
		</div>
	</div>
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
<div class="infografis mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Infografis</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
	<div class="scrollabel">
		<div class="scroll">
			<div class="content">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/wwmpgjuwj2hwtcgohgrr.jpg">
				<div class="title my-2">
					<h5>{{str_limit('PA 212 Rutin Laporkan Perkembangan Koalisi Pilpres ke Rizieq Syihab', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
			<div class="content">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/uz7jcxy05jk04nxli6ej.jpg">
				<div class="title my-2">
					<h5>{{str_limit('Susi Curhat ke Sultan HB X, Sering Merasa Sendiri', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
			<div class="content">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/zapedmsozq27a4qaefj7.jpg">
				<div class="title my-2">
					<h5>{{str_limit('BMKG Ungkap Alasan Mengapa Gempa di Lombok Hancurkan Ratusan Rumah', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="foto mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Foto</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
	<div class="scrollabel">
		<div class="scroll">
			<div class="content-large">
				<img src="https://gimg.kumpar.com/kumpar/image/upload/v1517460326/o0taahb5r3ffoyvhvx6g.jpg">
				<div class="title my-2">
					<h5>{{str_limit('PA 212 Rutin Laporkan Perkembangan Koalisi Pilpres ke Rizieq Syihab', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
			<div class="content-large">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/uz7jcxy05jk04nxli6ej.jpg">
				<div class="title my-2">
					<h5>{{str_limit('Susi Curhat ke Sultan HB X, Sering Merasa Sendiri', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
			<div class="content-large">
				<img src="https://alibaba.kumpar.com/kumpar/image/upload/q_auto,f_jpg,fl_progressive,fl_lossy,c_fill,g_face,w_640,ar_16:9/zapedmsozq27a4qaefj7.jpg">
				<div class="title my-2">
					<h5>{{str_limit('BMKG Ungkap Alasan Mengapa Gempa di Lombok Hancurkan Ratusan Rumah', 50)}}</h5>
				</div>
				<div class="info">
					<div class="label yellow mt-1">Politik</div>
					<div class="tanggal mt-1">31/07/2018</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="video mt-3">
	<div class="row">
		<div class="col-md-12 mb-3">
			<h6 class="box-title float-left">Video</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
	<iframe width="1311" height="480" src="https://www.youtube.com/embed/lnuBYMQ7mL8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div class="olahraga mt-3">
	<div class="row">
		<div class="col-md-12">
			<h6 class="box-title float-left">Berita Terbaru</h6>
			<span class="box-more float-right">Lihat semua</span>
		</div>
	</div>
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