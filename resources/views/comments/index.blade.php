@extends('layouts.app')

@section('content')
    <a href="{{route('comments.create')}}" class="btn btn-success">Dodaj</a>

    <table class = "table table-hover">
        <tr>
            <th>Id</th>
            <th>Autor</th>
            <th>Treść</th>
            <th>Id_Artykułu</th>
        </tr>


        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->author}}</td>
                <td>{{$user->body}} <td>
                    <a href="{{route('comments.edit', $user)}}" class="btn btn-primary">Edit</a>
                </td>
                <td><form method="post" action="{{route('comments.destroy', $user->id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete";>
                        <button class="btn btn-danger">Delete</button>
                    </form></td>
            </tr>

        @endforeach
    </table>
    {{$comments->links()}}
@endsection