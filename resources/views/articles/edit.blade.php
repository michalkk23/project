@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('articles.update', $article->id)}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put";>
        <div class="form-group">
            <input type="text" class="form-control" value="{{$article->title}}" name="title">
                <textarea  class="form-control" name="body">{{$article->body}}</textarea>
            </div>
        </div>
            <div class="container">
            <select class="form-control"  name="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>>
                @endforeach</select><hr>
            <button class="btn btn-primary">Zapisz</button>
            </div>
    </form>
@endsection