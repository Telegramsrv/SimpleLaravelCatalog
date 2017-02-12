@extends('index')

@section('title')
    {{$page->title}}
@endsection

@section('content')

    <div class="container">
        {!! $page->body !!}
    </div>

@stop