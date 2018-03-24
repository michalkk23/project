<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use PhpParser\Comment;

class CommentsController extends Controller
{

    public function index()
    {
        $comments = Comment::paginate(10);


        return view('comments.index', [
            'comments'=>$comments

        ]);
    }


    public function create()
    {
        $comments = Comment::all();
        return view('comments.create', [
            'comments'=>$comments
            ]);
    }


    public function store(CommentsRequest $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->save();

        return redirect(route ('comments.index'));
    }


   // public function show($id)
   // {
        //
   // }


    public function edit($id)
    {
        return view('comments.edit',[
            'comment'=> $comment
        ]);
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->name = $request->name;
        $comment->save();
        return redirect (route('comments.index'));
    }


    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect(route('commentss.index'));
    }
}
