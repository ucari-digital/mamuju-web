@extends('desktop.layout')
@section('title')
    MAMUJUTODAY - {{$kategori}}
@endsection
@section('description')
    berita {{$kategori}}
@endsection
@section('content')
    <div class="paper box-container">
        @foreach($data_single as $item)
            <div class="box-row py-3">
                <div class="box-1">
                    <div class="box-title head">
                        <div class="head-title">{{$kategori}}</div>
                    </div>
                </div>
                {{-- TITLE HEDLINE 01 --}}
                <div class="box-1 br-l js-link">
                    <div class="box-title">
                        <div class="title-big">{{$item['judul']}}</div>
                    </div>
                </div>
                {{-- END TITLE --}}
        
                {{-- IMAGE CONTENT --}}
                <div class="box-2 js-link">
                    <div class="box-content px-3 br-b pb-1">
                        <img src="{{env('PATH_STORAGE').$item['gambar']}}" class="h-01 image">
                    </div>
                </div>
                {{-- END IMAGE CONTENT 06 --}}
            </div>
        @endforeach

        @foreach($data_multiple as $item)
            <div class="box-row">
                <div class="box-1 br-r">
                </div>
                @foreach($item as $sitem)
                <div class="box-1 px-2 js-link" data-link="{{url('/viewer/'.$sitem['kategori'].'/'.$sitem['seo'].'-'.$sitem['id'])}}">
                    <div class="box-image">
                        <img src="{{env('PATH_STORAGE').$sitem['gambar']}}" alt="">
                        <div class="category">
                            {{$kategori}}
                        </div>
                        <div class="title">
                            {{$sitem['judul']}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endforeach


        {{-- <div class="box-row">
            @foreach($data_multiple as $item)
                <div class="section">
                <div class="title">
                </div>
                @foreach($item as $sitem)
                    <div class="col-v1 br-l pb box-image js-link">
                        <img src="{{env('PATH_STORAGE').$sitem['gambar']}}" alt="">
                        <div class="category">
                            {{$kategori}}
                        </div>
                        <div class="title">
                            {{$sitem['judul']}}
                        </div>
                    </div>
                @endforeach
                </div>
            @endforeach
        </div> --}}
    </div>
@endsection
@section('footer')
@endsection