@extends('index')

@section('title')
   Product page
@endsection

@section('gallery')
    <div class="ism-slider" id="my-slider" style="padding-top: 60%">
        <ol>
            @foreach( $product->getGalery() as $slider)
                <li>
                    <img src="/{{$slider->image}}">
                </li>
            @endforeach
        </ol>
    </div>
@endsection

@section('content')

    <div class="col-md-4">
        <img class="img-rounded" width="100%" src="/{{$product->image}}" /><br/><br/>
        @yield('gallery')
    </div>
    <div class="col-md-8">
        <h2>{{$product->name}}</h2>
        <p>{!! $product->description !!}</p>
    </div>
    <hr class="featurette-divider">
    <div class="col-md-12">
        <h3>Reviews</h3>
        @foreach($product->getReview() as $review)
            <div class="col-md-8">
                <h3> {{$review->user_name}} <small>{{$review->email}}</small></h3>
                <p> {!! $review->text !!}</p>
                <strong>Star:{{$review->star}}</strong><br/>
                <small>{{date('H:m:s d-m-Y',$review->created_at)}}</small>
            </div>
            <hr class="featurette-divider">
        @endforeach

    </div>

@stop