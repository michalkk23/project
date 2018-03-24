<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Requests\ArticlesRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::with('category')
        ->paginate(10);


        return view('articles.index', [
            'articles'=>$articles
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('articles.create', [
            'categories'=>$categories
        ]);
    }

    public function store(ArticlesRequest $request)

        
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect(route ('categories.index'));
    }

   // public function show($id)
    //{
        //
   // }


    public function edit(ArticleRequest $request, Article $article, Category $categories)
    {
        $categories = Category::all();
        return view('articles.edit',[
            'article'=> $article,
            'categories'=>$categories
        ]);
    }

    public function update(ArticleRequest $request, Article $article, Category $categories)
    {

        $article->update($request->all());
        //$article->title = $request->title;
       //$article->body = $request->body;
        //$article->category_id = $request->category_id;
        //$article->save();
        return redirect (route('articles.index'));
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'));
    }
}
