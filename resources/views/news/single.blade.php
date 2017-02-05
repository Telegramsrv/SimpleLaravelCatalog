@extends('index')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    <div class="col-md-12">
        <h3>{{ $article->title }}</h3>
        <p>{!! $article->body !!}</p>
    </div>

@stop