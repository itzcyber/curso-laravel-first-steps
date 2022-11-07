<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::paginate(2);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        $post = new Post();

        //User::get()->where();
        echo view('dashboard.post.create', compact('categories', 'post'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //dd($request->all());

        $validated = $request->validate(StoreRequest::myRules());
        $validated = Validator::make($request->all(), StoreRequest::myRules());

        //dd($validated->errors());

        //$data = $request->validated();
        //$data['slug'] = Str::slug($data['title']);


        //$data = array_merge($request->all(), ['image' => '']);

        Post::create($request->validated());

        
        //dd($data);

        return to_route("post.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("dashboard.post.show", compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
        echo view('dashboard.post.edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Post $post)
    {
        $post->update($request->validated());
        return to_route("post.index");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route("post.index");
    }
}
