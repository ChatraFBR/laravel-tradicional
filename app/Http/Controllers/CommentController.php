<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Muestra el formulario para crear un comentario.
     */
    public function create($postId)
    {
        $post = Post::findOrFail($postId);
        return view('comments.create', compact('post')); // Se pasa el post a la vista
    }

    /**
     * Almacena un nuevo comentario.
     */
    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $postId,
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('posts.show', ['post' => $postId]); // Se pasa el ID del post correctamente
    }
}
