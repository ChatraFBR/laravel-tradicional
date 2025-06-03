<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Los atributos que pueden ser asignados masivamente.
     */
    protected $fillable = ['post_id', 'path'];

    /**
     * Relación con el post.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
