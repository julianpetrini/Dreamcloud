<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // Método para la vista "get_inspired" que en title diga get
    public function showGetInspired(Request $request) {
        $language = $request->input('language', 'es');
        $post = Blog::where('title', 'get')
                    ->where('language', $language)
                    ->inRandomOrder()
                    ->first();

        $groupId = $post->group_id;
        $relatedPosts = Blog::where('group_id', $groupId)->get();

        return view('get_inspired', [
            'post' => $post, 
            'relatedPosts' => $relatedPosts, 
            'selectedLanguage' => $language
        ]);
    } 

   public function showCards() {
    $posts = Blog::where('title', 'CARD')->inRandomOrder()->take(1)->get();
    return view('dream_download', ['posts' => $posts]);
    }   
}
