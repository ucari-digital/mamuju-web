@extends('mobile.layout')
@section('title')
    MAMUJUTODAY
@endsection
@section('description')
    berita menarik hari ini
@endsection
@section('content')
    <div class="profil py-3">
        <div class="avatar">
            <img src="{{env('PATH_STORAGE').$data['users']['avatar']}}" alt="">
        </div>
        <div class="info">
            <div class="name">{{$data['users']['name']}}</div>
        </div>
    </div>
    <div class="news mt-3">
        <div class="container">
            @foreach($data['berita'] as $i => $item)
                @continue($i == 9)
                <div class="box-list mt-3">
                    <div class="img" id="hash-{{rand(000, 999)}}" data-img="{{env('PATH_STORAGE').$item['gambar']}}"></div>
                    <div class="content">
                        <div class="title">{{str_limit($item['judul'], 50)}}</div>
                        <div class="time">{{App\Helper\TimeFormat::formatId($item['created_at'])}}</div>
                        <div class="category" style="background-color: {{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}}">{{$item['kategori']}}</div>
                    </div>
                </div>
            @endforeach

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    @for($i=1;$i<=$count_data;$i++)
                        @if($i <= 8)
                            <li class="page-item {{$i == $id ? 'active' : ''}}"><a href="{{url('u/'.$data['users']['nickname'].'/page='.$i)}}" class="page-link">{{$i}}</a></li>
                        @endif
                    @endfor
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection