@extends('desktop.layout')
@section('content')
    @foreach($data_single as $item)
        <div class="headline js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
            <div class="big-banner-tr">
                <div class="img" id="hash-{{rand(000, 999)}}" data-img="/{{env('PATH_STORAGE').$item['gambar']}}"></div>
                <div class="text-banner">
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
            </div>
        </div>
    @endforeach
    <div class="c-title mt-5">Lainnya</div>
    <div class="terbaru">
        @foreach($data_multiple as $item)
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
@endsection