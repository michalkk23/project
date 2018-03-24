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
    <form action="{{route('comments.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" placeholder="tytuł" class="form-control" name="title">
            <textarea  class="form-control" placeholder="treść" name="body"></textarea>
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