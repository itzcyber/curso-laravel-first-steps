<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Models\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;

use Illuminate\Http\Request;

 use App\Http\Requests\Controllers\Api\CategoryRequest;
 use App\Http\Requests\Controllers\Api\PostRequest;



class CategoryController extends Controller
{

    public function index()
    {
        return response()->json(Category::paginate(10));
    }

    public function all()
    {
        return response()->json(Category::get());
    }

    public function slug($slug)
    {
        $category = Category::where("slug", $slug)->firstOrFail();
        return response()->json($category);
    }
 
    public function store(StoreRequest $request)
    {
        return response()->json( Category::create($request->validated()));
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }
    
    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json("destroyed");
    }

    public function posts(Category $category)
    {
        // ----forma 1-----
        // $posts = Post::join('categories',"categories.id","=","posts.category_id")
        // ->select("posts.*", "categories.title as category")
        // ->where("categories.id",$category->id)
        // ->get();

        $posts = Post::with("category")
        ->where("category_id",$category->id)
        ->get();

        //->toSql();    para ver lo enviado en forma de sql

        return response()->json($posts);

    }
}
