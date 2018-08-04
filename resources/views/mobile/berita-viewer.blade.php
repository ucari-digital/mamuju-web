@extends('mobile.layout')
@section('content')
<div class="berita">
{{-- 	<div class="page-map">
		<div class="item">Home</div>
		<div class="separator"><i class="fal fa-angle-right"></i></div>
		<div class="item">TV</div>
		<div class="separator"><i class="fal fa-angle-right"></i></div>
		<div class="item">Ayo nilai calon pemimpinmu</div>
	</div> --}}
	{{-- <hr class="dashed my-1"> --}}
	<h6 class="title pt-3 pb-1">Ayo nilai calon pemimpinmu</h6>
	<div class="time-upload">31 Juli 2018 21:00 WIB <div class="coment-counter">3 <i class="fal fa-comment-alt"></i></div></div>
	<div class="image">
		<img src="https://alibaba.kumpar.com/kumpar/image/upload/c_fill,g_face,f_jpg,q_auto,fl_progressive,fl_lossy,w_800/yomvnyhqzf88t3c0ukse.jpg" alt="">
		<small class="img-ket">Bursa pilpres 2019</small>
	</div>
	<div class="konten py-2">
		Ekonomi Indonesia mengalami kebocoran, karena devisa berupada dolar AS hasil ekspor tak seluruhnya dibawa masuk ke dalam negeri. Akibatnya, rupiah sulit menahan penguatan dolar AS, akibat pengusaha lebih memilih memarkir dolar AS mereka di luar negeri sehingga Devisa Hasil Ekspor (DHE) “bocor”.
		Menteri Koordinator Bidang Kemaritiman, Luhut Binsar Pandjaitan, mengatakan pemerintah sudah mengimbau para warga Indonesia yang memiliki dolar AS di luar negeri agar mau membawanya ke Indonesia. Kata dia, banyak dari mereka memiliki nasionalisme untuk sama-sama menyelamatkan ekonomi Indonesia. 
		“Ya jadi kami sudah imbau, saya rasa banyak kok yang punya komitmen, mereka mau naruh (dolar AS) di dalam. Saya bilang ke mereka, kamu pengusaha Indonesia, orang Indonesia, kan kamu menikmati Indonesia, kamu ekspor, ya mbok bawa lah duitnya ke dalam negeri,” kata dia saat ditemui di kantornya, Jumat (3/8). 
		Kata Luhut, setelah dirinya bertemu pada eskportir itu, banyak juga yang mau berkomitmen untuk membawa dolar AS-nya ke Indonesia. Tapi Luhut juga bilang bahwa imbauan itu bukan berarti membuat pemerintah mendikte pengusaha    tapi murni untuk memperbaiki rupiah. 
	</div>
	<div class="author py-2">
		<div class="row">
			<div class="col-md-6 col-6 js-link" data-link="{{url('u/dimas')}}">
				<div class="avatar">
					<img src="https://instagram.fcgk10-1.fna.fbcdn.net/vp/05ecd0192c87c1e156e8bdb829f86fe1/5C0A4CA3/t51.2885-15/e35/37083179_2151383635147018_8612091074149613568_n.jpg">
				</div>
				<div class="box">
					<div class="name">Dimas Adi Satria</div>
					<div class="position">Penulis</div>
				</div>
			</div>
			<div class="col-md-6 col-6 js-link" data-link="{{url('u/dimas')}}">
				<div class="avatar">
					<img src="https://cdn.dribbble.com/users/1769044/screenshots/4662857/img_1867.png">
				</div>
				<div class="box">
					<div class="name">Reyhan Neesta</div>
					<div class="position">Editor</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tags py-2">
		<div class="label">Tags : </div>
		<div class="list px-2">
			<div class="item">Pilpres</div>
			<div class="item">Politik</div>			
		</div>
	</div>
	<div class="komentar pt-2 my-2">
		<div class="label">Komentar</div>
		<form>
			<textarea class="text-kometar mt-2" placeholder="Tulis komentar disini"></textarea>
			<button type="submit" class="button-komentar">Kirim</button>
		</form>
	</div>
	<div class="viewer-komentar">
		<div class="list">
			<div class="avatar">
				<img src="https://cdn.dribbble.com/users/1769044/screenshots/4662857/img_1867.png">
			</div>
			<div class="box">
				<div class="name">Alex Young Dump</div>
				<div class="time">10-10-2018</div>
			</div>
			<div class="komentar-content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="list">
			<div class="avatar">
				<img src="https://cdn.dribbble.com/users/1769044/screenshots/4662857/img_1867.png">
			</div>
			<div class="box">
				<div class="name">Alex Young Dump</div>
				<div class="time">10-10-2018</div>
			</div>
			<div class="komentar-content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="load-more-komentar">Muat lebih banyak komentar</div>
	</div>
</div>
@endsection