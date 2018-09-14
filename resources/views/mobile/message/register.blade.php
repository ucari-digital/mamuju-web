@extends('mobile.layout')
@section('content')
<div class="container">
	<div class="row msg">
		<div class="col-md-12">
			<div class="card border-0">
				<div class="card-body">
					<i class="far fa-check-circle"></i>
					<h4>Berhasil Mendaftar</h4>
					<a href="{{url('/')}}" class="btn btn-dark btn-primary btn-sm mt-3">Halaman Awal</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection