<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
   public function home()
   {
    return view('layouts.index');
   }

   public function gallery()
    {
    return view('layouts.gallery');
    }

   public function index()
   {
    $title='';

        if (request('category')) {
            $category = Category::firstWhere('slug',request('category'));
            $title =' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username',request('author'));
            $title =' by ' . $author->name;
        }
    return view('layouts.blog',[
        "judul" => "Tulisan Terkini $title",
        "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(11)->withQueryString(),
        'categories'=> Category::all(),
    ]);
   }

   public function show(Post $post)
   {
    return view('layouts.singlePost',[
        "post" => $post
    ]);
   }
}

