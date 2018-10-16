@extends('desktop.layout')
@section('title')
{{$judul}}
@endsection
@section('description')
@endsection
@section('content')
<div class="paper row-infografis mt-3">
    <div class="box-row">
        <div class="section">
            <div class="title">
                Index
            </div>
            <div class="col-v3 br-l pb viewer">
                <form action="{{url('index')}}" method="get">
                    <div class="row">
                        <div class="col-md-9 col-9">
                            <div class="form-group">
                                <select name="kategori" class="form-control">
                                    <option value="">All</option>
                                    @foreach($kategori as $item)
                                    <option value="{{$item['id']}}">{{$item['nama_kategori']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-3">
                            <button type="submit" class="btn btn-dark">Lihat</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-v1 pb br-l box-single-image">
                <img src="https://via.placeholder.com/350x150" alt="">
                <div class="title">
                    lorem ipsum dorlor sit
                </div>
            </div>
        </div>
    </div>
    <div class="box-row">
        @foreach($berita as $item)
        <div class="section">
            <div class="title">
            </div>
            @foreach($item as $sitem)
            <div class="col-v1 br-l pb box-image js-link">
                <img src="{{env('PATH_STORAGE').$sitem['gambar']}}" alt="">
                <div class="category">
                    {{-- {{$kategori}} --}}
                </div>
                <div class="title">
                    {{$sitem['judul']}}
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection