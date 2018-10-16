@extends('desktop.layout')
@section('title')
    MAMUJUTODAY - {{$kategori}}
@endsection
@section('description')
    berita {{$kategori}}
@endsection
@section('content')
    <div class="paper">
        @foreach($data_single as $item)
            <div class="box-row">
                <div class="section ">
                    <div class="title">
                        {{$kategori}}
                    </div>
                    <div class="col-v1 br-l pb js-link" data-link="">
                        <div class="headline-title hbt">
                            {{$item['judul']}}
                        </div>
                    </div>
                    <div class="col-v2 js-link">
                        <div class="headline-image-b">
                            <img src="{{env('PATH_STORAGE').$item['gambar']}}" alt="">
                        </div>
                    </div>
        {{--             <div class="col-v1 pb br-l box-single-image h-05 aa-5 animated-background"></div>
                    <div class="col-v1 pb br-l box-single-image h-05 a-5 js-link">
                        <img src="https://via.placeholder.com/350x150" alt="">
                        <div class="category">
                            Sulawesi tengah
                        </div>
                        <div class="title">
                            lorem ipsum dorlor sit
                        </div>
                    </div> --}}
                </div>
            </div>
        @endforeach
        <div class="box-row">
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
        </div>
    </div>
@endsection
@section('footer')
<script type="text/javascript" src="{{url('js/ajax/headlines.js')}}"></script>
<script type="text/javascript" src="{{url('js/ajax/infografis.js')}}"></script>
<script type="text/javascript" src="{{url('js/ajax/tv.js')}}"></script>
<script type="text/javascript" src="{{url('js/ajax/foto.js')}}"></script>
<script type="text/javascript" src="{{url('js/ajax/populer.js')}}"></script>
@endsection