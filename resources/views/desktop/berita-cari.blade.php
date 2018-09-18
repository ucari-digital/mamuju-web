@extends('desktop.layout')
@section('header')
    <style>
        .pull-content{margin-bottom:100px;}
        .img-empty{width:600px;height:500px;}
    </style>
@endsection
@section('content')
    <div class="col-md-12 pull-content">
        <div class="card-columns">
            @foreach($data as $item)
            <div class="card js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}" style="margin:5px;">
                <img class="card-img-top" src="{{env('PATH_STORAGE').$item['gambar']}}" alt="{{$item['gambar']}}">
                <div class="card-body">
                    <h5 class="card-title">{{str_limit($item['judul'], 50)}}</h5>
                    <p class="card-text">
                        @php
                            $headline_render = strip_tags($item['berita']);
                        @endphp
                        {{str_limit($headline_render, 100)}}
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated {{App\Helper\TimeFormat::formatId($item['created_at'])}}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @forelse($data as $item)
    @empty
        <center>
            <h5>opps, sepertinya berita yang anda cari mengenai <span class="text-danger">{{$cari}}</span> belum tersedia.</h5>
            <img src="{{asset('asset/search giff.gif')}}" class="img img-responsive rounded img-empty">
        </center>
    @endforelse
@endsection
@section('footer')

@endsection