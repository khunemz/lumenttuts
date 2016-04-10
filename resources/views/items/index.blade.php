@extends('layout.master')
@section('content')
    <h4>This is content.</h4>


    @foreach(array_chunk($items->getCollection()->all(), 3)
    as $row)
        <div class="row">
            @foreach($row as $item)
                <h2>{{ $item->title }}</h2>
                <img class="img-responsive" src={{ $item->url1 }} />
                <p>{{ $item->description }} </p>
                <h4>{{ $item->slug }}</h4>
                <h4><strong>ราคา {{ $item->price }} บาท</strong></h4>
                <button class="btn btn-primary btn-sm"
                        data-toggle="modal"
                        data-target="#modal">ติดต่อซื้อ</button>
            @endforeach
        </div>
    @endforeach

    <ul class="pager">
        <li><a href="{{ $items->previousPageUrl() }}"
               role="button" class="previous">Previous</a></li>

        <li><a href="{{ $items->nextPageUrl() }}"
               role="button" class="Next">Next</a></li>
    </ul>
@endsection