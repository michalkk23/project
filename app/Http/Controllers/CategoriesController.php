<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);


        return view('categories.index', [
            'categories'=>$categories

        ]);
    }
    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoriesRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect(route ('categories.index'));
    }
    public function edit(Category $category)
    {

       return view('categories.edit',[
           'category'=> $category
        ]);

    }
    public function update(Request $request, Category $category)
    {
$category->name = $request->name;
$category->save();
return redirect (route('categories.index'));
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'));
    }

}
