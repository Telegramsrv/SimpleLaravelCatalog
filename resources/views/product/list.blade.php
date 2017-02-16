@extends('index')

@section('title')
    Product
@endsection

@section('content')

    <div class="container">
        @foreach( $products as $product)
            <div class="col-lg-4">
                <a href="{{ route('product.slug',['slug' => $product->slug]) }}">
                    <img class="img-rounded" src="/{{$product->image}}" alt="{{$product->name}}" width="140" height="120">
                    <h2>{{$product->name}}</h2></a>
            </div>
        @endforeach
    {!! $products->render() !!}
    </div>
@stop