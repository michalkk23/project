@extends('layouts.app')

@section('content')
    <form action="{{route('comments.update', $comment->body)}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put";>
        <div class="form-group">
            <input type="text" class="form-control" value="{{$comment->body}}" name="body">
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Zapisz</button>
        </div>
    </form>
@endsection