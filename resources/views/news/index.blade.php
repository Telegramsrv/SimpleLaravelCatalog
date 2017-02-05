@extends('index')

@section('title')
    News page
@endsection

@section('content')
    @foreach($news as $article)
    <div class="col-md-12">
        <h2>{{ $article->title }}</h2>
        <p>{!! $article->body !!}</p>
        <a href="{{ route('news.slug',['slug' => $article->slug]) }}">Подробнее...</a>
    </div>

@endforeach
@stop