@extends('index')

@section('title')
    Product
@endsection

@section('content')

    @foreach($products as $item)

            <div class="col-md-3">
                <a href="{{ route('product.slug',['slug' => $item->slug]) }}">
                    <img src="/uploads/products/{{$item->image}}">
                    <p>{{$item->name}}</p>
                </a>
            </div>

    @endforeach
    {!! $products->render() !!}
@stop