@extends('index')

@section('title')
    Category page
@endsection

@section('content')

    <table class="table table-striped">
        <tr>
            <th>#</th> <th>Name</th> <th>Weight</th> <th>Slug</th>
        </tr>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->category_id}}</td>
                    <td>
                    <a href="{{route('category.show',['slug' => $category->slug])}}">
                        {{$category->name}}
                    </a>
                    </td>
                    <td>{{$category->weight}}</td>
                    <td>{{$category->slug}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop