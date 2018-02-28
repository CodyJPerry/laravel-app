<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function showHome() {
        //get all posts to display
        $posts = Post::with('author')->get();
        return view('pages.home', compact('posts'));
    }

    public function showPost($slug) {
        $post = Post::whereSlug($slug)->with('author')->first();
        return view('pages.post', compact('post'));
    }
}
