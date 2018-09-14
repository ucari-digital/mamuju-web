@extends('desktop.layout')
@section('content')
    <div class="berita">
        <h3 class="title">{{$berita['judul']}}</h3>
        <span>
            <small>posted {{$berita['tgl_upload']}}</small>
        </span>
        <span> | </span>
        <span>
            <small class="coment-counter"><i class="fal fa-eye text-warning"></i> {{$berita['visit']}} kali dibaca</small>
        </span>
        <div class="image">
            <img src="/{{env('PATH_STORAGE').$berita['gambar']}}" alt="" class="img img-responsive">
        </div>
        <div class="container">
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
            @if(Auth::check())
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Komentar</h3>
                        <form action="{{url('komentar'.'/'.$berita['id'])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <textarea name="komentar" class="form-control" placeholder="Tulis komentar disini" rows="5"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <ul class="list-group list-group-flush">
                            @foreach($komentar as $item)
                                <li class="list-group-item">
                                    <div class="card text-white bg-secondary mb-3">
                                        <div class="card-body">
                                            <h6 class="card-title text-right">{{$item['name']}}</h6>
                                            <p class="card-text text-right">
                                                <i>"{{$item['komentar']}}"</i>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="load-more-komentar">Muat lebih banyak komentar</div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection