@extends('index')

@section('content')

    @foreach($categories as $category)

        <div class="container">
            <div class="col-md-8">
                <a href="/catalog/{{$category->slug}}"><h3>{{$category->name}}</h3></a>
            </div>
        </div>

    @endforeach

@stop