@extends('desktop.layout')
@section('header')
    <style>
        .pull-content{margin-bottom:300px;margin-top:20px;}
    </style>
@endsection
@section('content')
    <div class="card pull-content">
        <img class="card-img-top" src="{{env('PATH_STORAGE').session('avatar')}}" alt="{{session('avatar')}}">
        <div class="card-body">
            <h5 class="card-title text-capitalize">{{session('name')}}</h5>
            <p class="card-text">Email : {{session('email')}}</p>
        </div>
        <div class="card-body">
            <a href="{{url('logout')}}" class="btn btn-danger btn-block">Ingin Keluar?</a>
        </div>
    </div>
@endsection