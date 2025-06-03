<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Muestra la vista principal con los últimos posts.
     */
    public function index()
    {
        $latestPosts = Post::latest()->take(5)->get();

        return view('home', compact('latestPosts'));
    }
}
