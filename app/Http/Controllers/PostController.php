<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
   public function home()
   {
    return view('layouts.main',[
        "title" => "Home",
    ]);
   }

   public function gallery()
    {
    return view('layouts.gallery',[
        "title" => "Gallery"
    ]);
    }

   public function index()
   {
    return view('layouts.blog',[
        "title" => "Blog",
        "posts" => Post::latest()->get(),
        'categories'=> Category::all(),
    ]);
   }

   public function show(Post $post)
   {
    return view('layouts.singlePost',[
        "title" => "Single Post",
        "post" => $post
    ]);
   }
}

