@extends('desktop.layout')
@section('title')
    {{$berita['judul']}}
@endsection
@section('description')
    @php
        $news = strip_tags($berita['berita']);
    @endphp
    {{str_limit($news, 100)}}
@endsection
@section('content')
<div class="paper row-infografis mt-3">
    <div class="box-row">
        <div class="section">
            <div class="title">
                Infografis
            </div>
            <div class="col-v3 br-l pb viewer">
                <div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$berita['gambar']}}"></div>
                <div class="title">
                    {{$berita['judul']}}
                </div>
                <div class="content-view">
                    {!! $berita['berita'] !!}
                </div>
                <div class="author py-2">
                    <div class="row">
                        <div class="col-md-6 col-6 js-link" data-link="{{url('u/'.$penulis['nickname'])}}">
                            <div class="avatar">
                                <img src="{{env('PATH_STORAGE').$penulis['avatar']}}">
                            </div>
                            <div class="box">
                                <div class="name">{{$penulis['name']}}</div>
                                <div class="position">Penulis</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 js-link" data-link="{{url('u/dimas')}}">
                            <div class="viewer">
                                <i class="fal fa-eye"></i> {{$berita['visit']}} kali dibaca
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tags py-2">
                    <div class="label">Tags : </div>
                    <div class="list px-2">
                        @php
                            $tags = explode(',', $berita['tags']);
                        @endphp

                        @foreach($tags as $item)
                            <div class="item">{{$item}}</div>
                        @endforeach
                    </div>
                </div>
                @if(session('id'))
                    <div class="komentar pt-2 my-2">
                        <div class="label">Komentar</div>
                        <form action="{{url('komentar'.'/'.$berita['id'])}}" method="post">
                            @csrf
                            <textarea name="komentar" class="text-kometar mt-2" placeholder="Tulis komentar disini"></textarea>
                            <button type="submit" class="button-komentar">Kirim</button>
                        </form>
                    </div>
                    <div class="viewer-komentar">
                        @if (count($komentar) > 0)
                            <div class="infinite-scroll">
                                @foreach($komentar as $item)
                                <div class="list">
                                    <div class="avatar">
                                        <img src="{{env('PATH_STORAGE').$item['avatar']}}">
                                    </div>
                                    <div class="box">
                                        <div class="name">{{$item['name']}}</div>
                                        <div class="time">{{App\Helper::time_elapsed_string($item['created_at'])}}</div>
                                    </div>
                                    <div class="komentar-content">
                                        {{str_limit($item['komentar'], 200)}}
                                    </div>
                                </div>
                                @endforeach
                                {{ $komentar->links() }}
                            </div>
                        @endif
                    </div>
                @endif
            </div>
            <div class="col-v1 pb br-l box-single-image">
                <img src="https://via.placeholder.com/350x150" alt="">
                <div class="title">
                    lorem ipsum dorlor sit
                </div>
            </div>
        </div>
    </div>
</div>
@endsection