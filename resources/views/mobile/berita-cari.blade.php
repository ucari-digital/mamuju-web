@extends('mobile.layout')
@section('content')
    <div class="container">
        <div class="block-nav">
            <div class="title-nav">
                <div class="title">hasil pencarian</div>
            </div>
            @forelse($data as $item)
                <div class="card js-link" data-link="{{url('viewer/'.$item['kategori'].'/'.$item['seo'].'-'.$item['id'])}}" style="margin:5px;">
                    <div class="card-body">
                        <img src="{{env('PATH_STORAGE').$item['gambar']}}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{str_limit($item['judul'], 50)}}</h5>
                            <small style="background-color:{{explode(';', $item['kategori_color'])[0]}}; color: {{explode(';', $item['kategori_color'])[1]}};padding:4px;border-radius:5px;">{{$item['kategori']}}</small>
                            <small style="background-color:#34495e;color:#ecf0f1;padding:4px;border-radius:5px;">Posted {{App\Helper\TimeFormat::formatId($item['created_at'])}}</small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('asset/search giff.gif')}}" class="card-img-top">
                        <small>opps, sepertinya berita yang anda cari mengenai <span class="text-danger">{{$cari}}</span> belum tersedia.</small>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
@section('footer')

@endsection