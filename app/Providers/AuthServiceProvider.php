<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Mapea las políticas de autorización de la aplicación.
     */
    public function boot()
    {
        $this->registerPolicies();

        // Definir una política de ejemplo
        Gate::define('view-dashboard', function ($user) {
            return $user->isAdmin();
        });
    }
}
