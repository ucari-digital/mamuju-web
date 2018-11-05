@extends('desktop.layout')
@section('title')
MAMUJUTODAY
@endsection
@section('description')
berita menarik hari ini
@endsection
@section('content')

<div class="box-container my-3">
	<div class="box-row py-3">
		<div class="box-1">
			<div class="box-title head">
				<div class="head-title">Headlines</div>
				<div class="time-now">{{$time}}</div>
			</div>
		</div>
		{{-- TITLE HEDLINE 01 --}}
		<div class="box-1 h-01 aa-1 animated-background"></div>
		<div class="box-1 a-1 br-l js-link">
			<div class="box-title">
				<div class="h-01 a-1 title-big"></div>
			</div>
		</div>
		{{-- END TITLE --}}

		{{-- IMAGE CONTENT --}}
		<div class="box-2 h-01 aa-1 animated-background"></div>
		<div class="box-2 a-1 js-link">
			<div class="box-content px-3 br-b pb-1">
				<img src="https://via.placeholder.com/350x150" class="h-01 image">
			</div>
		</div>
		{{-- END IMAGE CONTENT 06 --}}
		<div class="box-1">
			<div class="col-v1 pb br-l box-single-image h-06 aa-6 animated-background"></div>
			<div class="box-single-image br-l h-06 a-6 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
		</div>
	</div>
	{{-- SINGLE TEXT --}}
	<div class="box-row-auto pb-3">
		<div class="box-1">
			<div class="box-title">
				<div class="head-title"></div>
			</div>
		</div>
		{{-- 1 --}}
		<div class="box-1 pb br-l box-single-text h-02 aa-2 animated-background"></div>
		<div class="box-1 pb br-l box-single-text h-02 a-2 js-link">
			<div class="category">
				Sulawesi tengah
			</div>
			<div class="title">
				lorem ipsum dorlor sit
			</div>
		</div>
		{{-- 2 --}}
		<div class="box-1 pb br-l box-single-text h-03 aa-3 animated-background"></div>
		<div class="box-1 pb br-l box-single-text h-03 a-3 js-link">
			<div class="category">
				Sulawesi tengah
			</div>
			<div class="title">
				lorem ipsum dorlor sit
			</div>
		</div>
		{{-- 3 --}}
		<div class="box-1 pb br-l box-single-text h-04 aa-4 animated-background"></div>
		<div class="box-1 pb br-l box-single-text h-04 a-4 js-link">
			<div class="category">
				Sulawesi tengah
			</div>
			<div class="title">
				lorem ipsum dorlor sit
			</div>
		</div>
		{{-- 4 --}}
		<div class="box-1 pb br-l box-single-text h-05 aa-5 animated-background"></div>
		<div class="box-1 pb br-l box-single-text h-05 a-5 js-link">
			<div class="category">
				Sulawesi tengah
			</div>
			<div class="title">
				lorem ipsum dorlor sit
			</div>
		</div>
	</div>
	{{-- END SINGLE TEXT --}}
</div>

{{-- INFOGRAFIS --}}
<div class="box-container my-3">
	<div class="box-row py-3">
		<div class="box-1">
			<div class="box-title">
				<div class="head-title">Infografis</div>
			</div>
		</div>
		{{-- SINGLE IMAGE WITH TEXT 00 --}}
		<div class="box-2 br-l pb box-image in-0 ba-0 animated-background"></div>
		<div class="box-2 br-l pb box-image in-0 b-0 js-link">
			<img src="https://via.placeholder.com/350x150" alt="">
			<div class="category">
				Sulawesi tengah
			</div>
			<div class="title">
				lorem ipsum dorlor sit
			</div>
		</div>
		{{-- END SINGLE IMAGE WITH TEXT --}}
		{{-- TEXT CONTENT --}}
		<div class="box-1 box-single-text-row ba-1 animated-background"></div>
		<div class="box-1 box-single-text-row b-1">
			{{-- 01 --}}
			<div class="in-1 js-link">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			{{-- 02 --}}
			<div class="in-2 js-link">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			{{-- 03 --}}
			<div class="in-3 js-link">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			{{-- 04 --}}
			<div class="in-4 js-link">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			{{-- 05 --}}
			<div class="in-5 js-link">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
		</div>
		{{-- END TEXT CONTENT --}}
		{{-- SINGLE IMAGE 06--}}
		<div class="box-1">
			<div class="pb br-l box-single-image in-6 ba-2 animated-background"></div>
			<div class="pb br-l br-b box-single-image in-6 b-2 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			<div class="box-single-text-row ba-1 br-l animated-background"></div>
			<div class="box-single-text-row br-l b-1">
				{{-- 07 --}}
				<div class="in-7 js-link">
					<div class="category">
						Sulawesi tengah
					</div>
					<div class="title">
						lorem ipsum dorlor sit
					</div>
				</div>
				{{-- 08 --}}
				<div class="in-8 js-link">
					<div class="category">
						Sulawesi tengah
					</div>
					<div class="title">
						lorem ipsum dorlor sit
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="paper row-tv mt-3">
	<div class="box-row">
		<div class="section">
			<div class="title">
				TV
			</div>
			<div class="col-v2 br-l pb box-image tv-0 ca-0 animated-background"></div>
			<div class="col-v2 br-l pb box-image tv-0 c-0 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			<div class="col-v2 br-l pb box-image tv-1 ca-1 animated-background"></div>
			<div class="col-v2 br-l pb box-image tv-1 c-1 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
		</div>
	</div>
</div>
<div class="paper row-foto mt-3">
	<div class="box-row">
		<div class="section">
			<div class="title">
				Foto
			</div>
			<div class="col-v2 br-l pb box-image ft-0 da-0 animated-background"></div>
			<div class="col-v2 br-l pb box-image ft-0 d-0 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			<div class="col-v1 br-l pb box-image ft-1 da-1 animated-background"></div>
			<div class="col-v1 br-l pb box-image ft-1 d-1 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			<div class="col-v1 br-l pb box-image ft-2 da-2 animated-background"></div>
			<div class="col-v1 br-l pb box-image ft-2 d-2 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
		</div>
	</div>
</div>
<div class="paper row-populer mt-3">
	<div class="box-row">
		<div class="section">
			<div class="title">
				Populer
			</div>
			<div class="col-v1 box-single-text-row ea-0 animated-background"></div>
			<div class="col-v1 box-single-text-row e-0">
				<div class="pp-0 js-link">
					<div class="category">
						Sulawesi tengah
					</div>
					<div class="title">
						lorem ipsum dorlor sit
					</div>
				</div>
				<div class="pp-1 js-link">
					<div class="category">
						Sulawesi tengah
					</div>
					<div class="title">
						lorem ipsum dorlor sit
					</div>
				</div>
				<div class="pp-2 js-link">
					<div class="category">
						Sulawesi tengah
					</div>
					<div class="title">
						lorem ipsum dorlor sit
					</div>
				</div>
				<div class="pp-3 js-link">
					<div class="category">
						Sulawesi tengah
					</div>
					<div class="title">
						lorem ipsum dorlor sit
					</div>
				</div>
				{{-- 06 --}}
				<div class="pp-6 js-link">
					<div class="category">
						Sulawesi tengah
					</div>
					<div class="title">
						lorem ipsum dorlor sit
					</div>
				</div>
			</div>
			<div class="col-v2 br-l pb box-image pp-4 ea-1 animated-background"></div>
			<div class="col-v2 br-l pb box-image pp-4 e-1 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
			<div class="col-v1 br-l pb box-image pp-5 ea-2 animated-background"></div>
			<div class="col-v1 br-l pb box-image pp-5 e-2 js-link">
				<img src="https://via.placeholder.com/350x150" alt="">
				<div class="category">
					Sulawesi tengah
				</div>
				<div class="title">
					lorem ipsum dorlor sit
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer')
<script type="text/javascript" src="{{url('js/ajax/headlines.js')}}"></script>
<script type="text/javascript" src="{{url('js/ajax/infografis.js')}}"></script>
<script type="text/javascript" src="{{url('js/ajax/tv.js')}}"></script>
<script type="text/javascript" src="{{url('js/ajax/foto.js')}}"></script>
<script type="text/javascript" src="{{url('js/ajax/populer.js')}}"></script>
@endsection