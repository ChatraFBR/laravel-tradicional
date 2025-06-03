<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Muestra la lista de posts.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10); // Obtiene los posts ordenados por fecha
        return view('posts.index', compact('posts')); // Carga la vista de lista de posts
    }

    /**
     * Muestra el formulario para crear un nuevo post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Almacena un nuevo post.
     */
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('posts', 'public'); // Se almacena en storage/app/public/posts
    }

    $post = new Post();
    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->image = $imagePath; // Guardamos la ruta de la imagen ANTES de guardar el post
    $post->user_id = auth()->id();
    $post->save(); // Guardamos el post con la imagen correctamente

    return redirect()->route('posts.show', ['post' => $post->id]);
}


    public function show($postId)
    {
        $post = Post::findOrFail($postId);
        return view('posts.show', compact('post'));
    }
}
