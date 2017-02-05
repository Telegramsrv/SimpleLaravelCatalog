@extends('index')

@section('content')

    @foreach($products as $item)

            <div class="col-md-3">
                <a href="/product/{{$item->slug}}">
                    <img src="/uploads/product/small/{{$item->image}}">
                    <p>{{$item->name}}</p>
                </a>
            </div>

    @endforeach
    {!! $products->render() !!}
@stop