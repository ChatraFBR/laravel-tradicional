<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * El mapeo de eventos a listeners de la aplicación.
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\SomeEventListener',
        ],
    ];

    /**
     * Registra cualquier evento adicional.
     */
    public function boot()
    {
        parent::boot();
    }
}
