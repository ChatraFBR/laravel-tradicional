<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Las rutas que deben excluirse de la verificación CSRF.
     */
    protected $except = [
        // Agrega aquí las rutas que no requieren protección CSRF
    ];
}
