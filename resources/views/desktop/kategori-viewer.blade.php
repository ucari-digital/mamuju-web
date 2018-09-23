@extends('desktop.layout')
@section('content')
    @foreach($data_single as $item)
        <div class="box-nm">
            <div class="banner fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
                <img src="{{env('PATH_STORAGE').$item['gambar']}}">
                <div class="attr m-32">
                    <div class="title">
                        {{str_limit($item['judul'], 50)}}
                    </div>
                    <div class="desc">
                        @php
                            $headline_render = strip_tags($item['berita']);
                        @endphp
                        {{str_limit($headline_render, 300)}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="box" style="margin-bottom:184px">
        <hr>
        <div class="title mt-4 text-capitalize">{{$kategori}} lainnya</div>
        <div class="banner split mt-3">
            <div class="banner-box">
                @foreach($data_multiple as $i => $item)
                    <div class="list fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
                        <div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
                        <div class="attr">
                            <div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">
                                {{$item['kategori']}}
                            </div>
                            <div class="title">
                                {{str_limit($item['judul'], 50)}}
                            </div>
                            <div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
                        </div>
                    </div>
                    @if($i == 2)
                        @break
                    @endif
                @endforeach
            </div>
            <div class="banner-box bl">
                @foreach($data_multiple as $i => $item)
                    @if($i > 2)
                        <div class="list fw js-load" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
                            <div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
                            <div class="attr">
                                <div class="kategori" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">
                                    {{$item['kategori']}}
                                </div>
                                <div class="title">
                                    {{str_limit($item['judul'], 50)}}
                                </div>
                                <div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection