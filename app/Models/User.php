<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory;

    /**
     * Los atributos que pueden ser asignados masivamente.
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * Relación con los posts.
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Relación con los comentarios.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
