@extends('index')

@section('title')
    Category page
@endsection

@section('content')

    @foreach($categories as $category)

        <div class="container">
            <div class="col-md-8">
                <a href="{{ route('catalog.slug',['slug' => $category->slug]) }}"><h3>{{$category->name}}</h3></a>
            </div>
        </div>

    @endforeach

@stop