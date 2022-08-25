<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function showAll() {
        $posts = Blog::all()->sortByDesc('created_at');

        return view('get_inspired', ['posts' => $posts]);
   }
}
