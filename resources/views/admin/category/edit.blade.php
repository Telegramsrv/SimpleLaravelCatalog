@extends('index')

@section('title')
    Category page
@endsection

@section('content')
    {!! Form::model($category, ['route' => ['category.edit', $categories->slug]]) !!}
    

    {!! Form::close() !!}
@stop