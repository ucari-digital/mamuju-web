@extends('desktop.layout')
@section('header')
<style>
.content-populer{margin-bottom:100px;}
</style>
@endsection
@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Berhasil Mendaftar</h1>
            <p class="lead">Buka terus portal berita mamujutoday.com, nantikan info info menarik disekitar kita.</p>
            <hr class="my-4">
            <p>FROM HERE TO THE WORLD</p>
            <a class="btn btn-info btn-lg" href="{{url('/')}}" role="button">Halaman Awal</a>
        </div>
    </div>
    <div class="c-title mt-5">Populer</div>
    <div class="row content-populer">
        <div class="col-md-12">
            <div class="terbaru">
                @foreach($populer as $item)
                    <div class="medium-banner js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
                        <div class="img" id="hash-{{rand(000, 999)}}" data-img="/{{env('PATH_STORAGE').$item['gambar']}}"></div>
                        <div class="title">{{str_limit($item['judul'], 50)}}</div>
                        <div class="desc">
                            @php
                                $headline_render = strip_tags($item['berita']);
                            @endphp
                            {{str_limit($headline_render, 100)}}
                        </div>
                        <div class="info text-center mt-3">
                            <div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
                            <div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection