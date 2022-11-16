<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        //mostrar solo los que tengan el valor yes; para subir solo los posteados*
        $posts = Post::where("posted","yes")->paginate(5);
        
        return view("web.blog.index", compact("posts"));
    }

    public function show(Post $post)
    {
        return view("web.blog.show", compact("post"));
    }

}
