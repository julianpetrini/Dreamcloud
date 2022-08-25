<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function showAll() {
        // $posts = Blog::all()->sortByDesc('created_at');
        $posts = Blog::all()->random(1);
        
        return view('get_inspired', ['posts' => $posts]);
   }
}
