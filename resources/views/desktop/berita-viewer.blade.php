@extends('desktop.layout')
@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .img-comment{width:50px;height:50px;}
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{background-color:#16a085;}
        a.link-tabs{color:#7f8c8d;}
        .btn-comment{border-radius:100px;height:40px;width:40px;background:#3498db;color:#ecf0f1}
    </style>
@endsection
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
                    @if(session('id'))
                    <hr>
                    <div class="col-md-12">
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link link-tabs active" id="pills-home-tab" data-toggle="pill" href="#pills-komentar" role="tab" aria-controls="pills-komentar" aria-selected="true">Komentar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-tabs" id="pills-profile-tab" data-toggle="pill" href="#pills-tambah" role="tab" aria-controls="pills-tambah" aria-selected="false">atau Beri Komentar?</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-komentar" role="tabpanel" aria-labelledby="pills-home-tab">
                                <ul class="list-group list-group-flush">
                                    @foreach($komentar as $item)
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="/{{env('PATH_STORAGE').$item['avatar']}}" class="img img-responsive rounded border img-comment">
                                                </div>
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h6>{{$item['name']}}</h6>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <small>{{App\Helper::time_elapsed_string($item['created_at'])}}</small>
                                                        </div>
                                                    </div>
                                                    <small>{{$item['komentar']}}</small>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="pills-tambah" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <form action="{{url('komentar'.'/'.$berita['id'])}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <textarea name="komentar" class="form-control" placeholder="Tulis komentar disini"></textarea>
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-comment" title="kirim?"><i class="fa fa-paper-plane-o"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
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