<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Una lista de las excepciones que no deben ser registradas.
     */
    protected $dontReport = [];

    /**
     * Una lista de las entradas que nunca deben ser validadas.
     */
    protected $dontFlash = ['password', 'password_confirmation'];

    /**
     * Maneja las excepciones de la aplicación.
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }
}
