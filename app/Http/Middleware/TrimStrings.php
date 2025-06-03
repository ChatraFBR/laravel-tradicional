<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * Los atributos que no deben ser recortados.
     */
    protected $except = [
        'password',
        'password_confirmation',
    ];
}
