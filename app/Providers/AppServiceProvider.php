<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Registra cualquier servicio de aplicación.
     */
    public function register()
    {
        //
    }

    /**
     * Inicializa configuraciones globales de la aplicación.
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
