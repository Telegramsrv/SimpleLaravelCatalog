@extends('index')

@section('title')
    Catalog Laravel
@endsection

@section('slider')
    <div class="ism-slider" id="my-slider">
        <ol>
            @foreach( $sliders as $slider)
                <li>
                    <img src="/{{$slider->image}}">
                    <a class="ism-caption ism-caption-0" href="{{$slider->url}}">More...</a>
                </li>
            @endforeach
        </ol>
    </div>
@endsection

@section('content')

    @yield('slider')
    <hr class="featurette-divider">
    <div class="row">
    <h2>Popular products</h2>
        <div class="container">
        @foreach( $products as $product)
        <div class="col-lg-4">
            <a href="{{ route('product.slug',['slug' => $product->slug]) }}">
            <img class="img-circle" src="{{$product->image}}" alt="{{$product->name}}" width="140" height="140">
                <h2>{{$product->name}}</h2></a>
        </div>
        @endforeach
        </div>
    </div>

    <hr class="featurette-divider">
    <h2>Last news</h2>
    <div class="container">
        @foreach( $news as $article)
        <div class="row featurette">
            <div class="col-md-12">
                <h2 class="featurette-heading">{{ $article->title }}</h2>
                <p class="lead">
                    {!! str_limit($article->body,150)!!}...
                </p>
                <a href="{{ route('news.slug',['slug' => $article->slug]) }}">Read more...</a>
            </div>
            <span class="text-muted">Published:{{ $article->created_at }}</span>
        </div>
        <hr class="featurette-divider">
        @endforeach
    </div>
@stop