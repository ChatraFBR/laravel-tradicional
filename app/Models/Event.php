<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Los atributos que pueden ser asignados masivamente.
     */
    protected $fillable = ['name', 'date', 'location', 'user_id'];

    /**
     * Relación con el usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

