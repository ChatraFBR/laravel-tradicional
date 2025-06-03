<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * Los atributos que pueden ser asignados masivamente.
     */
    protected $fillable = ['sender_id', 'receiver_id', 'content'];

    /**
     * Relación con el remitente.
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    /**
     * Relación con el receptor.
     */
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
