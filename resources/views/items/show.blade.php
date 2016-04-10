@extends('layout.master')
@section('content')

    <h2>{{ $item->title }}</h2>
    <div class="col-lg-3 col-sm-6">
        <img class="img-responsive" src="images/1/mountain.jpg">
    </div>

    <div class="col-lg-3 col-sm-6">
        <img class="img-responsive" src="{{ $item->url2 }}">
    </div>

    <div class="col-lg-3 col-sm-6">
        <img class="img-responsive" src="{{ $item->url3 }}">
    </div>

    <div class="col-lg-3 col-sm-6">
        <img class="img-responsive" src="{{ $item->url4 }}">
    </div>

    <p>{{ $item->description }}</p>
    <p>{{ $item->slug }}</p>
    <p>ราคา {{ $item->price }} บาท </p>

    <button class="btn btn-primary btn-sm"
            data-toggle="modal"
            data-target="#modal">ติดต่อซื้อ</button>
@endsection