<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Los atributos que pueden ser asignados masivamente.
     */
protected $fillable = [
    'title',
    'content',
    'image',
    'user_id',
];

    /**
     * Relación con el usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con los comentarios.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
