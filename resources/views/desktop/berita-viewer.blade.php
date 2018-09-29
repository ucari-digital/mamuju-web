@section('title')
    {{$berita['judul']}}
@endsection
@section('description')
    @php
        $news = strip_tags($berita['berita']);
    @endphp
    {{str_limit($news, 100)}}
@endsection
<div class="berita">
    <h6 class="title">{{$berita['judul']}}</h6>
    <div class="time-upload">{{$berita['tgl_upload']}} <div class="coment-counter">{{$sum_komentar}} komentar <i class="fal fa-comment-alt"></i> | {{$berita['visit']}} kali dibaca <i class="fal fa-eye"></i></div></div>
    <div class="image">
        <img src="{{file_exists(env('PATH_STORAGE').$berita['gambar']) ? asset('asset/no_image_to_show_.jpg') : env('PATH_STORAGE').$berita['gambar']}}" alt="">
        <small class="img-ket">{{$berita['keterangan_gambar']}}</small>
    </div>
    <div class="container">
        <div class="konten py-2">
            {!! $berita['berita'] !!}
        </div>
        <div class="author py-2">
            <div class="row">
                <div class="col-md-12 js-link" data-link="{{url('u/'.$penulis['nickname'])}}">
                    <div class="avatar">
                        <img src="{{env('PATH_STORAGE').$penulis['avatar']}}">
                    </div>
                    <div class="box">
                        <small class="name">{{$penulis['name']}}</small>
                        <small class="position">Penulis</small>
                    </div>
                </div>
            </div>
        </div>
        @if(session('id'))
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
            <div class="komentar pt-2 my-2">
                <div class="label">Komentar</div>
                <form action="{{url('komentar'.'/'.$berita['id'])}}" method="post">
                    @csrf
                    <textarea name="komentar" class="text-kometar mt-2" placeholder="Tulis komentar disini"></textarea>
                    <button type="submit" class="button-komentar">Kirim</button>
                </form>
            </div>
            <div class="viewer-komentar">
                @foreach($komentar as $item)
                    <div class="list">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="{{env('PATH_STORAGE').$item['avatar']}}" style="width:50px;height:50px;border-radius:100%;">
                            </div>
                            <div class="col-md-10">
                                <small class="text-capitalize font-weight-bold">{{$item['name']}}</small>
                                <small class="float-right">{{App\Helper::time_elapsed_string($item['created_at'])}}</small><br>
                                <span class="font-italic">
                                    {{str_limit($item['komentar'], 200)}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                <div class="load-more-komentar">Muat lebih banyak komentar</div>
            </div>
        @endif
    </div>
</div>