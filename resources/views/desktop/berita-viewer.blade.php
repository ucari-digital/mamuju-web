@extends('desktop.layout')
@section('content')
    <div class="card-group">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="berita">
                        <h3 class="title">{{$berita['judul']}}</h3>
                        <hr>
                        <span>
                        <small>dipublikasi {{$berita['tgl_upload']}}</small>
                    </span>
                        <span> | </span>
                        <span>
                        <small class="coment-counter"><i class="fal fa-eye text-warning"></i> {{$berita['visit']}} kali dibaca</small>
                    </span>
                        <div class="container">
                            <img src="/{{env('PATH_STORAGE').$berita['gambar']}}" alt="" class="card-img">
                            <div class="row">
                                <div class="col-md-12">
                                    {!! $berita['berita'] !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="label">Tags :
                                        @php
                                            $tags = explode(',', $berita['tags']);
                                        @endphp

                                        @foreach($tags as $item)
                                            <span style="padding:5px;background:#ecf0f1;color:#34495e;border-radius:5px;">{{$item}}</span>
                                        @endforeach
                                    </div>
                                    <div class="label">Penulis :
                                        {{$penulis['name']}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::check())
            <div class="card mb-3 text-white bg-secondary">
                <div class="card-body">
                    <h5 class="card-title">Komentar</h5>
                    <form action="{{url('komentar'.'/'.$berita['id'])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="komentar" class="form-control" placeholder="Tulis komentar disini"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-xs btn-default">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    @foreach($komentar as $item)
                        <div class="list-group" style="margin:5px;">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{$item['name']}}</h5>
                                    <small>{{App\Helper::time_elapsed_string($item['created_at'])}}</small>
                                </div>
                                <p class="mb-1">
                                    <i>"{{$item['komentar']}}"</i>
                                </p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-4">
            <h5>Berita Terbaru</h5><hr>
            @foreach($terbaru as $item)
            <div class="card mb-3 js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}">
                <img class="card-img-top" src="/{{env('PATH_STORAGE').$berita['gambar']}}" alt="{{$berita['gambar']}}">
                <div class="card-body">
                    <h5 class="card-title">{{str_limit($item['judul'], 50)}}</h5>
                    <p class="card-text">
                        @php
                            $headline_render = strip_tags($item['berita']);
                        @endphp
                        {{str_limit($headline_render, 100)}}
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated {{App\Helper::time_elapsed_string($item['created_at'])}}</small></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection